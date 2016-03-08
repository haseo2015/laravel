/*global format */

// Base contains the foundation of Widiba frontend architecture, using the
// Widiba core methods.
//
$.using("cd", function (context, $, W) {
    "use strict";

    $.ajaxSettings.traditional = true;

    var NS = context._NS,
        isDebug = false,
        logFilter = "";

    // ## Init
    //
    // The init private method sends an event `init` to the namespace `widiba`.
    //
    function init() {
        context.publish("init", "cd.*");
    }

    // There is only *one* `ready` in Widiba framework.
    $(document).ready(function () {
        init();

        // Just in case you need to force the initialization from outside.
        context.subscribe("init", NS, init);
    });

    // ## toggleDebug
    //
    // It toggles the debug variable for logging.
    // `filter` is a string used in the log method to filter the debug messages;
    // when it is empty (default), all messages are logged.
    //
    context.toggleDebug = function (filter) {
        isDebug = !isDebug;
        logFilter = filter;
    };

    // ## loadScript
    //
    // Load new script into page
    context.loadScript = function (url, id, remove, callback) {
        if ($("#"+id).length === 0 && !remove) {
            var script = document.createElement("script")
            script.type = "text/javascript";
            script.id = id;

            if (script.readyState){  //IE
                script.onreadystatechange = function(){
                    if (script.readyState == "loaded" ||
                        script.readyState == "complete"){
                        script.onreadystatechange = null;
                        callback();
                    }
                };
            } else {  //Others
                script.onload = function(){
                    callback();
                };
            }

            script.src = url;
            document.getElementsByTagName("head")[0].appendChild(script);
        } else if (!remove) {
            setTimeout(callback, 500);
        }
    };

    // ## loadBreakpoint
    //
    // Load generic breakpoint
    context.loadBreakpoint = function (key) {
        return (key !== "") ? W.breakpoint[key] : "";
    };

    // ## getStatus
    //
    // It returns an object containing `id`, `template`, `container` and `target`.
    //
    context.getStatus = function (container, target) {
        // Stop to write `W.getStatus(container, container)`
        // `W.getStatus(container)` is enough.
        if (!target) {
            target = container;
        }

        return {
            id: $(container).attr("id"),
            template: $(container).data("template"),
            container: $(container),
            target: $(target)
        };
    };

    // ## getEventStatus
    //
    // it returns a `status` object with `event`, the container selector and the
    // the target selector.
    //
    context.getEventStatus = function (event, selector, targetSelector) {
        var target = $(event.target).closest(targetSelector),
            container = $(target).closest(selector);

        return {
            id: $(container).attr("id"),
            template: $(container).data("template"),
            container: $(container),
            target: $(target)
        };
    };

    // ## getEventNames
    //
    // It is an helper method for publishing the events.
    // It returns an array of event name: `type`, `namespace`, `template` and `id`.
    //
    // With attribute data-template="#table-list" (dash is mandatory, only one),
    // we fire two events:
    //
    // - event:after.widiba.datatable.#table
    // - event:after.widiba.datatable.#table-list
    //
    function getEventNames(type, namespace, status) {
        var eventNames = [];

        if (namespace) {
            if (status && status[0] && status[0].template) {
                if (status[0].template.indexOf("-") !== -1) {
                    eventNames.push(type + "." + namespace + "." +
                        status[0].template.substr(0, status[0].template.indexOf("-")));
                }
                eventNames.push(type + "." + namespace + "." + status[0].template);
                if (status[0].id) {
                    eventNames.push(type + "." + namespace + "." + status[0].id);
                }
            } else {
                eventNames.push(type + "." + namespace);
            }
        } else {
            eventNames.push(type);
        }

        return eventNames;
    }

    // ## publish
    //
    // It publishes an event with `type` for a `namespace` passing the `status`.
    //
    context.publish = function (type, namespace, status) {
        var eventNames = getEventNames(type, namespace, status);

        $.each(eventNames, function (index, item) {
            $.publish(item, status);
        });
    };

    // ## publishAfter
    //
    // It publishes an after event with `type` for a `namespace` passing the
    // `status`, only if the template is defined. Don't forget `data-template`
    // attribute in html.
    //
    // For instance, `W.publishAfter("enable", NS, [status]);`
    //
    context.publishAfter = function (type, namespace, status) {
        if (status && status[0] && status[0].template) {
            context.publish(type + ":after", namespace, status);
        } else {
            W.core.log(type, namespace, "After event not sent because " +
                "status.template is not defined");
        }
    };

    function subunsub(fn, type, namespace, handler) {
        var eventNames = getEventNames(type, namespace);

        $.each(eventNames, function (index, item) {
            fn(item, handler);
        });
    }

    // ## subscribe
    //
    // It subscribes an event with `type` for a `namespace` passing the
    // `handler` to handle the event.
    //
    context.subscribe = function (type, namespace, handler) {
        subunsub($.subscribe, type, namespace, handler);
    };

    // ## unsubscribe
    //
    // It unsubscribes an event with `type` and `namespace`
    //
    context.unsubscribe = function (type, namespace, handler) {
        subunsub($.unsubscribe, type, namespace, handler);
    };

    // ## getPositiveSign
    //
    context.getPositiveSign = function (val) {
        return val >= 0 ? "+" : "";
    };

    // ## render (and filters)
    //
    // It renders a template replacing the placeholders with data after
    // filtering data for the internalization and the number formatting.
    //
    // There are different filters:
    //
    // - `_amount_`
    // - `_i18n_`
    // - `_amountEuro_`
    // - `_defaultDash_`
    // - `_defaultDashAmount_`
    // - `_defaultDashAmountEuro_`
    //
    // `_amount_` filter renders a number using a fixed mask: #.##0,00##
    // The template property needs to be prefixed with `_amount_`.
    //
    // For instance, `<p>_amount_field1</p>` and `{field1: 1235.12}` is
    // converted to `<p>1.235,12</p>`.
    //
    // format function in file bol_docs/assets/js/format.min.js
    // Credit to https://code.google.com/p/javascript-number-formatter/
    //
    // `_i18n_` filter renders a string using a I18N label.
    // The template property needs to be prefixed with `_i18n_`.
    //
    // For instance, `<p>_i18n_field1</p>` and `{field1: "customCard"}`
    // is translated to `{field1: "Custom card"}` if the language selected is
    // english.
    //
    // `_amountEuro_` filter renders a number using a fixed mask `#.##0,00##`
    // and adding the euro symbol.
    // The template property needs to be prefixed with `_amountEuro_`.
    //
    // `_defaultDash_` filter renders a number as `--` if it is not numeric or
    // zero.
    // The template property needs to be prefixed with `_defaultDash_`.
    //
    // Likely `_defaultDashAmount_` and `_defaultDashAmountEuro_` merge
    // default empty and amount euro rules.
    //
    // Note `widiba.i18n` is only a placeholder for the local development. That
    // script is created using a jsp from the database and then loaded.
    //
    function registerDefaultFilters() {
        $.render.registerFilter("_i18n_", function (val) {
            return W.i18n.getLabel(val);
        });

        $.render.registerFilter("_cssTransparent_", function (val) {
            if (!val) {
                return "transparent";
            }
            return "";
        });

        var render_unescape = {
            "&amp;": "&",
            "&quot;": "\"",
            "&lt;": "<",
            "&gt;": ">"
        };

        $.render.registerFilter("_html_", function (val) {
            return (val + "").replace(/(&amp;|&quot;|&lt;|&gt;)/g, function (ch) {
                return render_unescape[ch];
            });
        });

        $.render.registerFilter("_text_", function (val) {
            val = (val + "").replace(/(&amp;|&quot;|&lt;|&gt;)/g, function (ch) {
                return render_unescape[ch];
            });
            return $('<s>' + val + '</s>').text();
        });

        $.render.registerFilter("_escapeQuote_", function (val) {
            /*eslint-disable quotes */
            /*jshint -W108 */
            return val.replace(/'/g, "\\'").replace(/"/g, '\\"');
            /*jshint +W108 */
            /*eslint-enable quotes */
        });

        $.render.registerFilter("_not_", function (val) {
            return !(val == 'true');
        });

        $.render.registerFilter("_amount_", function (val) {
            return format("#.##0,00##", val);
        });

        $.render.registerFilter("_amount5_", function (val) {
            return format("#.##0,00###", val);
        });

        $.render.registerFilter("_amount4_", function (val) {
            return format("#.##0,0000", val);
        });

        $.render.registerFilter("_signedAmount_", function (val) {
            return context.getPositiveSign(val) + format("#.##0,00##", val);
        });

        $.render.registerFilter("_amountEuro_", function (val) {
            return format("#.##0,00##", val) + " " + W.i18n.getLabel("euro");
        });

        $.render.registerFilter("_amount2Euro_", function (val) {
            return format("#.##0,00", val) + " " + W.i18n.getLabel("euro");
        });

        $.render.registerFilter("_amountNoDecimalEuro_", function (val) {
            return format("#.##0,##", val) + " " + W.i18n.getLabel("euro");
        });

        $.render.registerFilter("_signedAmountEuro_", function (val) {
            return context.getPositiveSign(val) + format("#.##0,00##", val) +
                " " + W.i18n.getLabel("euro");
        });

        $.render.registerFilter("_defaultEmpty_", function (val) {
            if (!val) {
                val = "";
            }
            return val;
        });

        $.render.registerFilter("_defaultDash_", function (val) {
            if (!val) {
                val = "--";
            }
            return val;
        });

        $.render.registerFilter("_defaultSingleDash_", function (val) {
            if (!val) {
                val = " - ";
            }
            return val;
        });

        $.render.registerFilter("_defaultEmptyAmount_", function (val) {
            if (!$.isNumeric(val)) {
                val = "";
            } else {
                val = format("#.##0,00##", val);
            }
            return val;
        });

        $.render.registerFilter("_defaultEmptySignedAmount_", function (val) {
            if (!$.isNumeric(val)) {
                val = "";
            } else {
                val = context.getPositiveSign(val) + format("#.##0,00##", val);
            }
            return val;
        });

        $.render.registerFilter("_defaultDashAmount_", function (val) {
            if (!$.isNumeric(val)) {
                val = "--";
            } else {
                val = format("#.##0,00##", val);
            }
            return val;
        });

        $.render.registerFilter("_defaultDashSignedAmount_", function (val) {
            if (!$.isNumeric(val)) {
                val = "--";
            } else {
                val = context.getPositiveSign(val) + format("#.##0,00##", val);
            }
            return val;
        });

        $.render.registerFilter("_defaultEmptyAmountEuro_", function (val) {
            if (!$.isNumeric(val)) {
                val = "";
            } else {
                val = format("#.##0,00##", val) + " " + W.i18n.getLabel("euro");
            }
            return val;
        });

        $.render.registerFilter("_defaultEmptySignedAmountEuro_", function (val) {
            if (!$.isNumeric(val)) {
                val = "";
            } else {
                val = context.getPositiveSign(val) + format("#.##0,00##", val) +
                    " " + W.i18n.getLabel("euro");
            }
            return val;
        });

        $.render.registerFilter("_defaultDashAmountEuro_", function (val) {
            if (!$.isNumeric(val)) {
                val = "--";
            } else {
                val = format("#.##0,00##", val) + " " + W.i18n.getLabel("euro");
            }
            return val;
        });

        $.render.registerFilter("_defaultDashSignedAmountEuro_", function (val) {
            if (!$.isNumeric(val)) {
                val = "--";
            } else {
                val = context.getPositiveSign(val) + format("#.##0,00##", val) +
                    " " + W.i18n.getLabel("euro");
            }
            return val;
        });
    }

    registerDefaultFilters();

    context.render = function (template, data) {
        return $.render(template, data);
    };

});


var topics = {};

$.Listen = function( id ) {
    var callbacks, method,
        topic = id && topics[ id ];

    if ( !topic ) {
        callbacks = jQuery.Callbacks();
        topic = {
            publish: callbacks.fire,
            subscribe: callbacks.add,
            unsubscribe: callbacks.remove
        };
        if ( id ) {
            topics[ id ] = topic;
        }
    }
    return topic;
};