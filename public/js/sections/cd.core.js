// Core contains the foundation of cd frontend architecture, extending
// the global object `jQuery` (`$`). Eventually the core is used only in cd
// base.
//
// - `$.using` _to define a namespace_
// - `$.subscribe` _to subscribe an event_
// - `$.unsubscribe` _to unsubscribe an event_
// - `$.publish` _to fire an event_
// - `$.render` _to render a template with data_
// - `$.withAdvice` _to advice a function with before, after and around methods_
//
// It is a lightweight, component-based framework that maps behavior to DOM
// nodes, encapsulating the logic in a namespace.
//
// ## How does it work?
//
// The framework enforces strict separation of concerns. When you create a
// component you don't get a handle to it. Consequently, components cannot be
// referenced by other components and cannot become properties of the global
// object tree. This is by design. Components do not engage each other directly;
// instead, they broadcast their actions as events which are subscribed to by
// other components.
//
// ## Why events?
//
// Events are open ended. When a component triggers an event it has no knowledge
// of how its request will be satisfied or by whom. This enforced decoupling of
// functionality allows the engineer to consider each component in isolation
// rather than having to reason about the growing complexity of the application
// as a whole.
//
// ## References
//
// - [Patterns For Large-Scale JavaScript Application Architecture][Patterns]
// - [Full-Spectrum Testing with AngularJS and Karma][Testing with Karma]
//
// [Patterns]: http://addyosmani.com/largescalejavascript/
// [Testing with Karma]: http://goo.gl/aR3oqp

// ## $.using
//
// Borrowed by [using.jquery.plugin](https://github.com/orsozed/using.jquery.plugin)
// and [YUI.namespace](http://yuilibrary.com/yui/docs/api/classes/YUI.html#method_namespace).
//
// Utility method for safely creating namespaces if they don't already exist.
//
// Create `your.namespace.here` as nested objects, preserving any
// objects that already exist instead of overwriting them.
//
// Dots in the input string cause `namespace` to create nested objects for each
// token. If any part of the requested namespace already exists, the current
// object will be left in place and will not be overwritten. This allows
// multiple calls to `namespace` to preserve existing namespaced properties.
//
// Be careful with namespace tokens. Reserved words may work in some browsers
// and not others. For instance, the following will fail in some browsers
// because the supported version of JavaScript reserves the word "long":
//
// 'really.long.nested.namespace'
//
// The namespace is added to the context as variable, `_NS`.
//
// ### Example
//
//      $.using("my.name.space", function (context, $, W) {
//          // $ is jQuery object
//          // W is cd object
//          // context is my.name.space object
//          context.doSomething() = function () {
//              console.log(context._NS); // my.name.space
//          };
//      }
//
//      my.name.space.doSomething();
//



(function () {
    "use strict";

    function registerNS(namespace) {
        var o = window, // The namespace root is window
            PERIOD = ".",
            ns = namespace.split(PERIOD);

        $.each(ns, function (index, name) {
            o[name] = o[name] || {};
            o = o[name];
        });

        return o;
    }

    $.using = function (namespace, callback) {
        var context = registerNS(namespace),
            W = cd || {};

        // Save the namespace in the context. In the callback you do not need to
        // instance a string variable containing the same value defined in
        // $.using. Just use `var NS = context._NS;`.
        context._NS = namespace;

        // A list of registered namespaces is useful if you need to send, for
        // instance, an ordered init message in cd.base init or if you need
        // to check the registered namespaces. Get the list with
        // `Object.keys(cd._NAMESPACES)`.
        cd._NAMESPACES = cd._NAMESPACES || {};
        cd._NAMESPACES[namespace] = cd._NAMESPACES[namespace] ?
            cd._NAMESPACES[namespace] += 1 : cd._NAMESPACES[namespace] = 1;

        // Check if a namespace is loaded twice.
        // There is an execption for the `cd.util` namespace, because it
        // contains many `$.using` pointing to the same namespace.
        if (cd._NAMESPACES[namespace] === 1 || namespace === "cd.util") {
            callback(context, $, W);
        } else {
            cd.log("Namespace duplicated", namespace);
        }
    };
}(jQuery));

// ## Tiny Pub/Sub
//
// Borrowed by [tiny-pubsub](https://github.com/cowboy/jquery-tiny-pubsub).
//
// Just use this handy terminology guide (jQuery events term → Pub/Sub term),
// and everything should make sense:
//
// - on → subscribe
// - off → unsubscribe
// - trigger → publish
// - type → topic
//
// ### Example
//
//     function handle(e, a, b, c) {
//         // `e` is the event object
//         console.log(a + b + c);
//     };
//
//     $.subscribe("/some/topic", handle);
//
//     $.publish("/some/topic", [ "a", "b", "c" ]);
//     // logs: abc
//
//     // Unsubscribe just this handler
//     $.unsubscribe("/some/topic", handle);
//
//     // Unsubscribe all handlers for this topic
//     $.unsubscribe("/some/topic");
//
(function ($) {
    "use strict";

    var o = $({});

    $.subscribe = function () {
        o.on.apply(o, arguments);
    };

    $.unsubscribe = function () {
        o.off.apply(o, arguments);
    };

    $.publish = function () {
        o.trigger.apply(o, arguments);
    };

}(jQuery));

// ## $.render
//
// Borrowed by [Riot.js](https://github.com/moot/riotjs).
//
// We recommend using a logic-less approach inside the templates.
// There are multiple reasons for this:
//
// - Pure HTML is cleaner and passes W3C validator. A HTML mixed with a
// template syntax is messy.
// - HTML is not inherently meant to describe logic.
// - Template loops are unnecessary in realtime applications where the
// iterateable lists change over time. This must be the hardest challenge for
// the current template languages.
// - Logic inside HTML is hard or impossible to test.
// - Logicless templates are sometimes an order of a magnitude faster,
// especially on non-webkit browsers.
// - In complex loops it's natural to leave the data calculation logic for
// JavaScript and keep the templates clean.
//
// The main differences from the original implementation is the support
// for the filters.
//
(function ($) {
    /*jshint -W054 */
    /*eslint camelcase:0, no-new-func:0 */
    "use strict";

    var FN = {}, // Precompiled templates (JavaScript functions)
        filters = {},
        template_escape  = {
            "\\": "\\\\",
            "\n": "\\n",
            "\r": "\\r",
            "'": "\\'"
        },
        render_escape = {
            "&": "&amp;",
            "\"": "&quot;",
            "<": "&lt;",
            ">": "&gt;"
        };

    function escape(str) {
        if ($.isNumeric(str)) { // this is a check for the filters, for instance, `_defaultDash_`
            return str;
        }

        return str === undefined || str === null ?
            "" : (str + "").replace(/[&\"<>]/g, function (ch) {
            return render_escape[ch];
        });
    }

    function applyFilter(filter, value) {
        if (filters.hasOwnProperty(filter)) {
            return filters[filter](value);
        }

        return value;
    }

    // ### Example
    //
    //     $.render("<div>{message}</div>", {message: "Hello World!"});
    //     //returns <div>Hello World!</div>
    //
    //     $.render("<div>{x.y.z}</div>", { x: { y: { z: 42 } } });
    //     //returns <div>42</div>
    //
    $.render = function (tmpl, data, escape_fn) {
        if (typeof escape_fn !== "function" && escape_fn !== false) {
            escape_fn = escape;
        }
        tmpl = tmpl || "";

        FN[tmpl] = FN[tmpl] || new Function("_", "e", "AF", "return '" +
                tmpl.replace(/[\\\n\r']/g, function (ch) {
                    return template_escape[ch];
                }).replace(new RegExp("{\\s*(" +
                        Object.keys(filters).join("|") + ")?([\\w\\.]+)\\s*}", "g"),
                    "'+(function(){try{return e?AF('$1',e(_.$2)):AF('$1',_.$2)}" +
                    "catch(e){return ''}})()+'") + "'"
            );

        return FN[tmpl](data, escape_fn, applyFilter);
    };

    $.render.registerFilter = function (name, fn) {
        filters[name] = fn;
    };

}(jQuery));

// ## $.withAdvice
//
// Borrowed by [Flight](https://github.com/flightjs/flight).
//
// `withAdvice` is a mixin that defines `before`, `after` and `around` methods.
//
// These can be used to modify existing functions by adding custom code. All
// components have advice mixed in to their prototype so that mixins can augment
// existing functions without requiring knowledge of the original
// implementation.
//
// Mixins will typically use the after method to define custom behavior for the
// target component.
//
// ### Example
//
//     var foo = {
//         print: function () {
//             console.log("Hello");
//         }
//     }
//     $.withAdvice.call(foo);
//     foo.after("print", function () {
//         console.log("world");
//     });
//
//     foo.print(); //logs Hello world
//
(function ($) {
    "use strict";

    $.withAdvice = function () {

        var advice = {
            around: function (base, wrapped) {
                return function composedAround() {
                    var i = 0, l = arguments.length, args = new Array(l + 1);
                    args[0] = base.bind(this);
                    for (; i < l; i += 1) {
                        args[i + 1] = arguments[i];
                    }

                    return wrapped.apply(this, args);
                };
            },

            before: function (base, before) {
                return function composedBefore() {
                    before.apply(this, arguments);
                    return base.apply(this, arguments);
                };
            },

            after: function (base, after) {
                return function composedAfter() {
                    var res = base.apply(this, arguments);
                    after.apply(this, arguments);
                    return res;
                };
            }
        };

        function unlockProperty(obj, op) {
            op.call(obj);
        }

        ["before", "after", "around"].forEach(function (m) {
            this[m] = function (method, fn) {

                unlockProperty(this, function () {
                    if (typeof this[method] === "function") {
                        this[method] = advice[m](this[method], fn);
                    } else {
                        this[method] = fn;
                    }

                    return this[method];
                });
            };
        }, this);

        return advice;
    };
}(jQuery));

// ## $.serialize
//
// It overwrites the default jQuery serialize to submit the request as post (vs.
// get), handling the parameters as properties in a object, and not as a string,
// without the limit of the url length.
//
(function ($) {
    "use strict";
    $.fn.serialize = function () {
        var o = {},
            a = this.serializeArray();

        $.each(a, function () {
            if (o[this.name] !== undefined) {
                if (!o[this.name].push) {
                    o[this.name] = [o[this.name]];
                }
                o[this.name].push(this.value || "");
            } else {
                o[this.name] = this.value || "";
            }
        });

        return o;
    };
}(jQuery));

// ## Array.forEach polyfill
//
// https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/forEach
//
// forEach was added to the ECMA-262 standard in the 5th edition; as such it may
// not be present in other implementations of the standard. You can work around
// this by inserting the following code at the beginning of your scripts,
// allowing use of forEach in implementations which do not natively support it.
// This algorithm is exactly the one specified in ECMA-262, 5th edition,
// assuming Object and TypeError have their original values and that
// callback.call evaluates to the original value of Function.prototype.call.
//
// Need for $.withAdvice - IE compatibility IE 7/8/9.
//
(function () {
    "use strict";

    if (!Array.prototype.forEach) {
        /*eslint no-extend-native:0 */
        Array.prototype.forEach = function (fun /*, thisArg */) {
            var t,
                len,
                thisArg,
                i;

            if (this === void 0 || this === null) {
                throw new TypeError();
            }

            t = Object(this);
            /*jshint bitwise: false*/
            /*eslint no-bitwise: 1*/
            len = t.length >>> 0;
            /*eslint no-bitwise: 0*/
            /*jshint bitwise: true*/
            if (typeof fun !== "function") {
                throw new TypeError();
            }

            thisArg = arguments.length >= 2 ? arguments[1] : void 0;
            for (i = 0; i < len; i += 1) {
                if (i in t) {
                    fun.call(thisArg, t[i], i, t);
                }
            }
        };
    }
}());

// ## Object.keys polyfill
//
// From https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Object/keys
//
// Need for cd.base.withLogging() - IE compatibility IE 7/8/9.
//
(function () {
    "use strict";

    if (!Object.keys) {
        Object.keys = (function () {
            var hasOwnProperty = Object.prototype.hasOwnProperty,
                hasDontEnumBug = !({toString: null})
                    .propertyIsEnumerable("toString"),
                dontEnums = [
                    "toString",
                    "toLocaleString",
                    "valueOf",
                    "hasOwnProperty",
                    "isPrototypeOf",
                    "propertyIsEnumerable",
                    "constructor"
                ],
                dontEnumsLength = dontEnums.length;

            return function (obj) {
                if (typeof obj !== "object" &&
                    (typeof obj !== "function" || obj === null)) {
                    throw new TypeError("Object.keys called on non-object");
                }

                var result = [], prop, i;

                for (prop in obj) {
                    if (hasOwnProperty.call(obj, prop)) {
                        result.push(prop);
                    }
                }

                if (hasDontEnumBug) {
                    for (i = 0; i < dontEnumsLength; i += 1) {
                        if (hasOwnProperty.call(obj, dontEnums[i])) {
                            result.push(dontEnums[i]);
                        }
                    }
                }
                return result;
            };
        }());
    }
}());

// ## String.prototype.trim polyfill
//
// From https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
//
// IE compatibility IE 7/8.
//
(function () {
    "use strict";

    if (typeof String.prototype.trim !== "function") {
        String.prototype.trim = function() {
            return this.replace(/^\s+|\s+$/g, "");
        };
    }
}());

/*global format */

// Base contains the foundation of frontend architecture, using the
// cosplaydesign core methods.
//
$.using("cd", function (context, $, cd) {
    "use strict";

    $.ajaxSettings.traditional = true;

    var NS = context._NS,
        isDebug = false,
        logFilter = "";

    // ## Init
    //
    // The init private method sends an event `init` to the namespace `cd`.
    //
    function init() {
        context.publish("init", "cd.*");
    }

    // There is only *one* `ready` in cd framework.
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

    // ## getStatus
    //
    // It returns an object containing `id`, `template`, `container` and `target`.
    //
    context.getStatus = function (container, target) {
        // Stop to write `cd.getStatus(container, container)`
        // `cd.getStatus(container)` is enough.
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
            container =  $(target).closest(selector);

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
    // - event:after.cd.datatable.#table
    // - event:after.cd.datatable.#table-list
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
                    eventNames.push(type + "." + namespace  + "." + status[0].id);
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
    // For instance, `cd.publishAfter("enable", NS, [status]);`
    //
    context.publishAfter = function (type, namespace, status) {
        if (status && status[0] && status[0].template) {
            context.publish(type + ":after", namespace, status);
        } else {
            context.log(type, namespace, "After event not sent because " +
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
    // Note `cd.i18n` is only a placeholder for the local development. That
    // script is created using a jsp from the database and then loaded.
    //
    function registerDefaultFilters() {
        $.render.registerFilter("_i18n_", function (val) {
            return cd.i18n.getLabel(val);
        });

        $.render.registerFilter("_cssTransparent_", function (val) {
            if (!val) {
                return "transparent";
            }
            return "";
        });

        $.render.registerFilter("_amount_", function (val) {
            return format("#.##0,00##", val);
        });

        $.render.registerFilter("_signedAmount_", function (val) {
            return context.getPositiveSign(val) + format("#.##0,00##", val);
        });

        $.render.registerFilter("_amountEuro_", function (val) {
            return format("#.##0,00##", val) + " " + cd.i18n.getLabel("euro");
        });

        $.render.registerFilter("_signedAmountEuro_", function (val) {
            return context.getPositiveSign(val) + format("#.##0,00##", val) +
                " " + cd.i18n.getLabel("euro");
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
                val = format("#.##0,00##", val) + " " + cd.i18n.getLabel("euro");
            }
            return val;
        });

        $.render.registerFilter("_defaultEmptySignedAmountEuro_", function (val) {
            if (!$.isNumeric(val)) {
                val = "";
            } else {
                val = context.getPositiveSign(val) + format("#.##0,00##", val) +
                    " " + cd.i18n.getLabel("euro");
            }
            return val;
        });

        $.render.registerFilter("_defaultDashAmountEuro_", function (val) {
            if (!$.isNumeric(val)) {
                val = "--";
            } else {
                val = format("#.##0,00##", val) + " " + cd.i18n.getLabel("euro");
            }
            return val;
        });

        $.render.registerFilter("_defaultDashSignedAmountEuro_", function (val) {
            if (!$.isNumeric(val)) {
                val = "--";
            } else {
                val =  context.getPositiveSign(val) + format("#.##0,00##", val) +
                    " " + cd.i18n.getLabel("euro");
            }
            return val;
        });
    }

    registerDefaultFilters();

    context.render = function (template, data) {
        return $.render(template, data);
    };

    // ## log
    //
    // See http://patik.com/blog/complete-cross-browser-console-log/
    //
    // It logs messages if `isDebug` is on; if `logFilter` string is not empty,
    // the namespace of the messages is filtered, otherwise all messages are
    // logged.
    //
    context.log = function () {
        var args,
            isFilterMatching = false;

        if (isDebug && typeof console !== "undefined" &&
            typeof console.log !== "undefined") {

            args = Array.prototype.slice.call(arguments);

            if (logFilter) {
                isFilterMatching = args.some(function (el) {
                    if (typeof el === "string") {
                        return el.search(logFilter) !== -1;
                    }
                });
            }

            if (!logFilter || isFilterMatching) {
                console.log("[log]", args);
            }
        }
    };

    // ## withLogging
    //
    // It advices the context calling the `before` method to log the method.
    // You need to advise the functions of an object using the call approach to
    // pass the correct context.
    //
    //     withLogging.call(context);
    //
    // You can decorate a single function with `filter`
    //
    //     withLogging.call(context, "myMethod");
    //
    context.withLogging = function (filter) {
        var self = this;

        $.withAdvice.call(self);

        filter = filter || "Handler"; // string to filter the name functions
        $.each(Object.keys(self), function (index, item) {
            if (typeof self[item] === "function" && item.search(filter) !== -1) {
                self.before(item, function () {
                    cd.log(self._NS ? self._NS : "$", item, arguments);
                });
            }
        });
    };

    // ## withEvents
    //
    // It advices the context functions publishing a `before` and `after` events.
    // You need to advise the functions of an object using the call approach to
    // pass the correct context.
    //
    //     withEvents.call(context);
    //
    // You can decorate a single function with `filter`
    //
    //     withEvents.call(context, "myMethod");
    //
    context.withEvents = function (filter) {
        var self = this;

        $.withAdvice.call(self);

        filter = filter || "Handler"; // string to filter the name functions
        $.each(Object.keys(self), function (index, item) {
            if (typeof self[item] === "function" && item.search(filter) !== -1) {
                self.before(item, function () {
                    context.publish(item + ":before", self._NS);
                });
                self.after(item, function () {
                    context.publish(item + ":after", self._NS);
                });
            }
        });
    };

    // ## withAny
    //
    // A generic decorator to add a `before`, `after` and `around` handlers.
    //
    // ### Example
    //
    //     var foo = {
    //         print: function () {
    //             console.log("Hello");
    //         }
    //     }
    //     cd.withAny.call(foo, function () {
    //         console.log("before");
    //     }, function () {
    //         console.log("after");
    //     }, function (base, arg) {
    //         console.log("around");
    //         base(arg);
    //         console.log("around");
    //     });
    //
    // `around` method replaces `before` and `after` approach.
    //
    context.withAny = function (beforeFn, afterFn, aroundFn) {
        var self = this;

        $.withAdvice.call(self);

        $.each(Object.keys(this), function (index, method) {
            if (typeof self[method] === "function" &&
                method !== "before" &&
                method !== "after" &&
                method !== "around") {
                self.before(method, beforeFn || context.NOOP);
                self.after(method, afterFn || context.NOOP);
                self.around(method, aroundFn || context.NOOP);
            }
        });
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
        return (key !== "") ? cd.breakpoint[key] : "";
    };

    // Add the log for the methods `publish` and `subscribe`
    context.withLogging.call($, "publish");
    context.withLogging.call($, "subscribe");
});




