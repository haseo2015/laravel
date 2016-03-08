$.using("cd.lista", function (context, $, W) {

    var NS = context._NS;
    var callbacks = $.Callbacks( "unique" );

    context.init = function(){
        var body = $("body");
    };

    context.initFragmentHandler = function(){
        console.log("context.initFragmentHandler")
    };





    context.init()
    $.Listen( "init" ).subscribe( context.init  );
    //$.Listen( "mailSent" ).subscribe( context.initFragmentHandler );


    $.Listen( "init" ).publish( );
    $.Listen( "mailSent" ).publish( "woo! mail!" );
});
