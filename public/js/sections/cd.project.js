$.using("cd.project", function (context, $, W) {

    var NS = context._NS;
    var callbacks = $.Callbacks("unique");

    context.init = function(){
        console.log("cd.project init!");
       $(".btn-prevStep").click(function(event){
           console.log(event);
           console.log(this);
           $.Listen( "prevStep" ).publish(event);
       })
    };

    context.gotoStep = function(event){
        console.log("context.gotoStep");
        
    };

    context.init();
   // $.Listen( "switchOn:after" ).subscribe( context.clickFirstIsotopeTab  );
    $.Listen( "prevStep" ).subscribe(context.gotoStep);

});
