$(function(){
console.log("init")
    var callbacks = $.Callbacks( "unique" );

    var init = function(){
        var body = $("body");
    };

    var initFragmentHandler = function(){
        console.log("context.initFragmentHandler")
    };





    init()
    $.Listen( "init" ).subscribe( init  );
    //$.Listen( "mailSent" ).subscribe( context.initFragmentHandler );


    $.Listen( "init" ).publish( );
    $.Listen( "mailSent" ).publish( "woo! mail!" );
});
