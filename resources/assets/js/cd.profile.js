$.using("cd.helpers", function (context, $, W) {

    var NS = context._NS;
    var callbacks = $.Callbacks("unique");

context.clickFirstIsotopeTab = function(status){
    //console.log("context.clickFirst");
    status.parents().find(".filters:visible li:first a").click();
};




    $.Listen( "switchOn:after" ).subscribe( context.clickFirstIsotopeTab  );
});
