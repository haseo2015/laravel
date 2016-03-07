/**
 * Created by Admin on 30/12/2015.
 */
$(document).foundation();
$(document).ready(function(){
    /*tutti elementi dom */
    //$('.your-class').slick({});


    $('.knobby').each(function () {
        var elm = $(this);
        var color = elm.attr("data-fgColor");
        var perc = elm.attr("value");

        elm.knob({
            'value': 0,
            'min':0,
            'max':100,
            "skin":"tron",
            "readOnly":true,
            "thickness":.1,
            'dynamicDraw': true,
            "displayInput":true,

            'format' : function (value) {
                return value + '%';
            }
        });

        $({value: 0}).animate({ value: perc }, {
            duration: 1000,
            easing: 'swing',
            progress: function () {
                elm.val(Math.ceil(this.value)).trigger('change')
            }
        });

    });


    $('.rate').rating({
        filled: 'fa fa-star',
        filledSelected: 'fa fa-star',
        empty: 'fa fa-star-o',
        inline: true,

    });

    $('.rate').each(function(index, element){
       // $(this).rating('rate',2.5);
    });



    $("img.lazy").lazyload({
        threshold : 200,
        effect : "fadeIn"
    });

    $(".fancybox").fancybox();






});




function setPercentageColor(_value){
    var percentage_color = '#FFFFFF';
    switch(_value){
        default:
            percentage_color = '#64DD17';
            break;
        case (value <= 25):
            percentage_color = '#DD2C00';
            break;
        case (value <= 50 && value > 25):
            percentage_color = '#FF6D00';
            break;
        case (value <= 75 && value > 50):
            percentage_color = '#FFD600';
            break;
        case (value <= 90 && value > 75):
            percentage_color = '#AEEA00';
            break;
    }
    return percentage_color;
}