$.using("cd.helpers", function (context, $, W) {

    var NS = context._NS;
    var callbacks = $.Callbacks( "unique" );

    context.init = function(){
        var body = $("body");
        // switch view funziona in combo con il data-view=[nome_classe]
        $(".js-switch-view").on("click","",context.switchView);
    };

    /*
     * context.switchView
     * change switch view function
     */
    context.switchView = function(){
        var _clickedView = $(this).data("view");
        $(".js-switch-view").removeClass("active");
        $(this).addClass(".active");
        $.Listen( "switchOn" ).publish($(this) );
        $(".js-view:visible").fadeOut("fast", function(){
            $(".js-view[data-view=" +_clickedView+ "]").fadeIn("fast");

        });
    };

    context.onSwitchOnEvent = function($selector){
        console.log("context.onSwitchOnEvent" + $selector);
    };


    context.init();
    $.Listen( "switchOn" ).subscribe( context.onSwitchOnEvent($selector)  );
});
