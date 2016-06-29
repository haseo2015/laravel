$.using("cd.helpers", function (context, $, cd) {
    "use strict";

    var NS = context._NS;

    context.initHandler = function(){
      console.log("helpers inizializzato");
    };

    cd.withLogging.call(context);
    cd.subscribe("init", NS, context.initHandler);



});

    //var NS = context._NS;
    var callbacks = $.Callbacks( "unique" );

    init = function(){
        var body = $("body");
        $(window).scroll( function(){
            $.Listen("scroll").publish();
        })
        // switch view funziona in combo con il data-view=[nome_classe]
        $(".js-switch-view").on("click","",switchView);
    };

    /*
     * context.switchView
     * change switch view function
     */
    switchView = function(){
        $.Listen( "switchOn:before" ).publish($(this) );
        var _clickedView = $(this).data("view");
        $(".js-switch-view").removeClass("active");
        $(this).addClass("active");
        $(".js-view:visible").fadeOut("fast", function(){
            $(".js-view[data-view=" +_clickedView+ "]").fadeIn("fast",function(){
                $.Listen( "switchOn:after" ).publish($(this) );
            });

        });
    };

    onSwitchOnEvent = function($selector){
        console.log("context.onSwitchOnEvent" + $selector);
    };


    function hsl_col_perc(percent,start,end) {

        var a = percent/100,
            b = end*a;
        c = b+start;

        //Return a CSS HSL string
        return 'hsl('+c+',100%,50%)';
    }

    init();
    //$.Listen( "switchOn" ).subscribe( context.onSwitchOnEvent  );
//});
