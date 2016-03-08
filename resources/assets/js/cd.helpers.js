$.using("cd.helpers", function (context, $, W) {

    var NS = context._NS;
    var callbacks = $.Callbacks( "unique" );

    context.init = function(){
        var body = $("body");
        // switch view funziona in combo con il data-view=[nome_classe]
        $(".btn-switch-view").on("click","",context.switchView);
    };

    /*
     * context.switchView
     * change switch view function
     */
    context.switchView = function(){
        var _clickedView = $(this).data("view");
        $(".btn-switch-view").removeClass("active");
        $(this).addClass(".active");
        $(".cd-view:visible").fadeOut("fast", function(){
            $(".cd-view[data-view=" +_clickedView+ "]").fadeIn("fast");

        });
    };

    context.init();

});
