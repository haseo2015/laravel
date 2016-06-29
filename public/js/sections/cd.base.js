
var topics = {};

$.Listen = function( id ) {
    var callbacks, method,
        topic = id && topics[ id ];

    if ( !topic ) {
        callbacks = jQuery.Callbacks();
        topic = {
            publish: callbacks.fire,
            subscribe: callbacks.add,
            unsubscribe: callbacks.remove
        };
        if ( id ) {
            topics[ id ] = topic;
        }
    }
    return topic;
};


$("[data-toggle=modal]").click(function(){
    var modalTemplate = $("#modalTemplateBase").html(),
        relatedContent = $($(this).data("content")).html(),
        modalContent = ".modal-body",
        modalType = $(this).data("modal-type"),
        modalTitle = $($(this).data("content")).data("modal-title");
    if (!$(".modal").length)
        $('body').append(modalTemplate);

    $('body').find(modalContent).empty().append(relatedContent);
    $('body').find(".modal-title").html(modalTitle);
    if (modalType == "close"){
        $('body').find(".modal .btnConfirm").hide();
    }

    $(".modal").modal({

    })
})
