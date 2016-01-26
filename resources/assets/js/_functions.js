/**
 * Created by Admin on 30/12/2015.
 */
$(document).foundation();
$(document).ready(function(){
    /*tutti elementi dom */
    //$('.your-class').slick({});
    $(".knobby").knob();
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