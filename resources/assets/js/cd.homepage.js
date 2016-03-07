$.using("cd.homepage", function (context, $, W) {

    var NS = context._NS;

   $(document).on("init",function(){
       console.log("fdfsdfds")
   });

    context.pippo = function(event, status)
    {
        console.log(event + " - " + status);
    };

    W.withLogging.call(context);


});
