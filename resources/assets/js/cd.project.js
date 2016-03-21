$.using("cd.project", function (context, $, W) {

    var NS = context._NS;
    var callbacks = $.Callbacks("unique");

    context.init = function(){
       // console.log("cd.project init!");
    };

    context.init();
   // $.Listen( "switchOn:after" ).subscribe( context.clickFirstIsotopeTab  );

});
