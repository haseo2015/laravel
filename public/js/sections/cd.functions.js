$(function(){
  console.log("lista")

        var init = function(){
            initKnobs();
            initRating();
            initLazyload();
            initFancybox();
            initIsotope();
            //var initAffix();
        };


        var initKnobs = function(){
            $('.knobby').each(function () {
                var elm = $(this);
                var color = elm.attr("data-fgColor");
                var perc = elm.attr("value");

                elm.knob({
                    'value': 0,
                    'min': 0,
                    'max': 100,
                    "skin": "tron",
                    "readOnly": true,
                    "thickness": .1,
                    'dynamicDraw': true,
                    "displayInput": true,

                    'format': function (value) {
                        return value + '%';
                    }
                });

                $({value: 0}).animate({value: perc}, {
                    duration: 1000,
                    easing: 'swing',
                    progress: function () {
                        elm.val(Math.ceil(this.value)).trigger('change')
                    }
                });

            });
        };

        var initRating = function(){
            $('.js-rate').rating({
                filled: 'fa fa-star',
                filledSelected: 'fa fa-star',
                empty: 'fa fa-star-o',
                inline: true,
            });
        };

        var setRatingValue = function(rate){
            $('.js-rate').each(function (index, element) {
                 $(this).rating('rate',rate);
            });
        };

        var initLazyload = function() {
            $("img.lazy").lazyload({
                threshold: 200,
                effect: "fadeIn"
            });
        };

        var initFancybox = function(){
            $(".fancybox").fancybox();
        };

        var initIsotope = function(){
            var $container = $('.isotope'),
                $layout = $('.isotope').data('layout');

            $container.isotope({
                itemSelector: '.gallery-item',
                layoutMode: $layout
            });

            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                $container.isotope('layout');
            });

            // bind filter button click
            $('.filters').on( 'click', 'a', function() {
                var filterValue = $(this).attr('data-filter');
                $('.filters li').removeClass('active');
                $(this).parent().addClass('active');
                $container.isotope({filter: filterValue});
            });
        };

        var initAffix = function (){

            $("*[data-spy=affix]").affix({
                offset: {
                    top: 10,
                    bottom: function () {
                        return (this.bottom = $('.footer').innerHeight()+200)
                    }
                }

            });
        };

        var setPercentageColor = function(_value) {
        var percentage_color = '#FFFFFF';
        switch (_value) {
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

    var onScrollPageHandler = function(){
        $("*[data-spy=affix]").affix('checkPosition')
    }

    init();
    $.Listen( "scroll" ).subscribe(  onScrollPageHandler  );
});