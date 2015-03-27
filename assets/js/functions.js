/* 
 * Javascript de mes functions custom.
 */


//Smooth Scroll to anchor
$(document).ready(function () {

    //Detect touch device
    if ("ontouchstart" in window || navigator.msMaxTouchPoints) {
        isTouch = true;
    } else {
        isTouch = false;
    }

    // gg Maps
    $(function () {
        new Maplace({
            map_div: "#gmap1",
            locations: [
                {lat: 46.322931, lon: -0.455212, title: "Niort", html: "Siège social CERF FORMATION<br />7 rue du 14 Juillet<br />79000 Niort<br />Tél : 05 49 28 32 00", zoom: 16}, //Niort 
                {lat: 46.154410, lon: -1.144740, title: "La Rochelle", html: "Espace Ouest Affaires<br />22 rue de l'ouvrage à cornes<br />17000 La Rochelle<br />Tél: 05 46 27 47 90", zoom: 16}, // La Rochelle
                //{lat: 46.582646, lon: 0.333163}, // Poitiers
                {lat: 47.388434, lon: 0.694717, title: "Tours", zoom: 12}, //Tours 
                {lat: 45.760836, lon: 4.862499, title: "Lyon", html: "Arrondissements : 1er,3eme...", zoom: 12}, //Lyon Part Dieu 
                {lat: 48.840784, lon: 2.319484, title: "Paris", html: "Arrondissements : 9eme,10eme..."}, //Paris Montparnasse
                {lat: 43.835381, lon: 4.359572, title: "Nîmes", zoom: 12}, //Nîmes
                {lat: 44.820990, lon: 0.986939, title: "Siorac-en-Périgord", zoom: 15}, //Siorac
                {lat: 43.611659, lon: 1.453391, title: "Toulouse", zoom: 12} //Toulouse

            ],
            controls_on_map: false
        }).Load();
    });



    $('a.scrollTo[href*=#]').click(function () {
        if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '')
                && location.hostname === this.hostname) {
            var $target = $(this.hash);
            $target = $target.length && $target
                    //|| $('[name=' + this.hash.slice(1) +']');
                    || $('[id=' + this.hash.slice(1) + ']');
            if ($target.length) {
                var targetOffset = $target.offset().top;
                $('html,body')
                        .animate({scrollTop: targetOffset - 130}, 500);
                return false;
            }
        }
    });

    // redimensionnement du caption sur la tuile
    function placeTiles() {
        //On part des diensions de l'image
        $('.img >img').each(function () {
            //On arrondi la valeur de col-sm3 (sinon ça crée un décalage)
            var conteneurBootstrap = Math.floor($(this).parent().parent().parent().outerWidth());
            $(this).parent().parent().parent().outerWidth(conteneurBootstrap);

            //On redimensionne le caption
            $(this).parent().prev().width(($(this).outerWidth()));
            //positionnement du caption
            //var posLeft = Math.floor(($(this).parent().parent().parent().outerWidth() - $(this).outerWidth()) / 2);
            var posLeft = (($(this).parent().parent().parent().outerWidth() - $(this).outerWidth()) / 2);
            //console.log("col-sm3 width : " + posLeft);//test ok
            //alert("posleft : " + posLeft);//test ok
            $(this).parent().prev().css("left", posLeft);
            //positionnement du hover Content
            $(this).parent().next().css("left", posLeft);
            //redimensionnement du hover Content
            $(this).parent().next().width(($(this).outerWidth()) - 42);
            $(this).parent().next().height(($(this).outerHeight()) - 42);
        });
    }

    // Placement initial au chargement du document
    placeTiles();

    // On attache l'event resize de la fonction de placement
    $(window).bind('resize', function () {
        //console.log('resize');//test ok
        placeTiles();
    });

    // Js pour l'effet hover sur les tuiles de la page d'accueil
    //$('.containerHover').bind('mouseenter', function() {
    if (!isTouch) { // Pour les navigateurs sans tactile
        $('.containerHover').hover(function (e) {
            //Le timeout pour éviter de déclencher au passage de souris qui traverse
            // est crée par le plugin jquery.hover.delay.js
            e.preventDefault();
            var imgHeight = ($('.img>img').height());
            //$('.caption').animate({
            $(this).children(':first').animate({
                height: imgHeight + 'px',
                borderBottomLeftRadius: '4px',
                borderBottomRightRadius: '4px'

            }, '300', function () {
                //$('.hoverContent').animate({
                $(this).next().next().animate({
                    opacity: '1'
                }, '300');
            });
            //$(".img>img").css({
            $(this).children(":first").next().children(":first").css({
                'filter': 'blur(6px)',
                '-webkit-filter': 'blur(6px)',
                '-moz-filter': 'blur(6px)',
                '-o-filter': 'blur(6px)',
                '-ms-filter': 'blur(6px)',
                '-webkit-box-shadow': '0px 0px 10px 3px rgba(148,212,246,1)',
                '-moz-box-shadow': '0px 0px 10px 3px rgba(148,212,246,1)',
                'box-shadow': '0px 0px 10px 3px rgba(148,212,246,1)'
            })
                    .css('transition', 'all 0.8s ease-out')
                    .css('-webkit-transition', 'all 0.5s ease-out')
                    .css('-moz-transition', 'all 0.5s ease-out')
                    .css('-o-transition', 'all 0.5s ease-out');
        },
                //$('.containerHover').mouseleave(function() {
                        function () {
                            //var imgHeight = ($('.img>img').height()) - 15;
                            //$('.hoverContent').animate({
                            $(this).children(':last').animate({
                                opacity: '0'
                            }, '0', function () {
                                //$('.caption').animate({
                                $(this).prev().prev().animate({
                                    height: '33px',
                                    borderBottomLeftRadius: '0px',
                                    borderBottomRightRadius: '0px'
                                }, '300');
                            });

                            //$(".img>img").css({
                            $(this).children(":first").next().children(":first").css({
                                'filter': 'blur(0px)',
                                '-webkit-filter': 'blur(0px)',
                                '-moz-filter': 'blur(0px)',
                                '-o-filter': 'blur(0px)',
                                '-ms-filter': 'blur(0px)',
                                '-webkit-box-shadow': '0px 0px 0px 0px rgba(255,255,255,0)',
                                '-moz-box-shadow': '0px 0px 0px 0px rgba(255,255,255,0)',
                                'box-shadow': '0px 0px 0px 0px rgba(255,255,255,0)'
                            })
                                    .css('transition', 'all 0.4s ease-out')
                                    .css('-webkit-transition', 'all 0.4s ease-out')
                                    .css('-moz-transition', 'all 0.4s ease-out')
                                    .css('-o-transition', 'all 0.4s ease-out');
                        }, 400);
            } else { // pour les appareils tactiles
        //fn test
        $('.containerHover').on("touchstart", function (e) {

            e.preventDefault();
            // On détecte si la tuile est déroulée
            if ($(this).attr("data-expand") === "0") {
                //On change le flag qui indique si la tuile est déroulée
                $(this).attr("data-expand", "1");
                //alert("test : "+$(this).attr("data-expand"));//test
                var imgHeight = ($('.img>img').height());
                //$('.caption').animate({
                $(this).children(':first').animate({
                    height: imgHeight + 'px',
                    borderBottomLeftRadius: '4px',
                    borderBottomRightRadius: '4px'

                }, '300', function () {
                    //$('.hoverContent').animate({
                    $(this).next().next().animate({
                        opacity: '1'
                    }, '300');
                });
                //$(".img>img").css({
                $(this).children(":first").next().children(":first").css({
                    'filter': 'blur(6px)',
                    '-webkit-filter': 'blur(6px)',
                    '-moz-filter': 'blur(6px)',
                    '-o-filter': 'blur(6px)',
                    '-ms-filter': 'blur(6px)',
                    '-webkit-box-shadow': '0px 0px 10px 3px rgba(148,212,246,1)',
                    '-moz-box-shadow': '0px 0px 10px 3px rgba(148,212,246,1)',
                    'box-shadow': '0px 0px 10px 3px rgba(148,212,246,1)'
                })
                        .css('transition', 'all 0.8s ease-out')
                        .css('-webkit-transition', 'all 0.5s ease-out')
                        .css('-moz-transition', 'all 0.5s ease-out')
                        .css('-o-transition', 'all 0.5s ease-out');


            } else {
                //On change le flag qui indique si la tuile est déroulée
                $(this).attr("data-expand", "0");

                $(this).children(':last').animate({
                    opacity: '0'
                }, '0', function () {
                    //$('.caption').animate({
                    $(this).prev().prev().animate({
                        height: '33px',
                        borderBottomLeftRadius: '0px',
                        borderBottomRightRadius: '0px'
                    }, '300');
                });

                //$(".img>img").css({
                $(this).children(":first").next().children(":first").css({
                    'filter': 'blur(0px)',
                    '-webkit-filter': 'blur(0px)',
                    '-moz-filter': 'blur(0px)',
                    '-o-filter': 'blur(0px)',
                    '-ms-filter': 'blur(0px)',
                    '-webkit-box-shadow': '0px 0px 0px 0px rgba(255,255,255,0)',
                    '-moz-box-shadow': '0px 0px 0px 0px rgba(255,255,255,0)',
                    'box-shadow': '0px 0px 0px 0px rgba(255,255,255,0)'
                })
                        .css('transition', 'all 0.4s ease-out')
                        .css('-webkit-transition', 'all 0.4s ease-out')
                        .css('-moz-transition', 'all 0.4s ease-out')
                        .css('-o-transition', 'all 0.4s ease-out');
            }

        });

        $('.containerHover').on("touchend", function () {


        });
        // end mobile touch part
    }
    ;
    // fin js tuiles


    //Initialisation du js qui termine les paragraphes à tronquer par ... 
    //(jquery.dotdotdot.js) sur les éléments portant la classe .ellipsis
    $('.ellipsis').dotdotdot({
        ellipsis: '... ',
        fallbackToLetter: true,
        watch: true,
        wrap: 'word',
        after: 'a.readmore'

    });

    // Décoration des liens "En savoir plus" dans les tuiles
    $("a.readmore").css({
        'text-decoration': 'underline',
        'font-style': 'italic',
        'color': '#009FE3'
    });
    $("a.readmore").hover(
            function () {
                $(this).css({
                    'text-decoration': 'underline',
                    'font-style': 'italic',
                    'color': '#94d4f6'
                });
            }, function () {
        $(this).css({
            'text-decoration': 'underline',
            'font-style': 'italic',
            'color': '#009fe3'
        });
    });

    // redimensionnement de panel en fonction de l'image à l'interieur
    //console.log($('.panel-body>img').width());//test
    function redimPanel() {
        $('.panel-body>img').each(function () {
            var thisImgWidth = $(this).width();
            $(this).parent().parent().css({
                width: thisImgWidth
            });
        });
    }
    ;
    redimPanel();


    //Ajustument de la position verticale du texte en classe jumbotron 
    //ds la section #main-slider (hack de Bootstrap)
    function placeJumbotron() {
        $('.row.vcenter').each(function () {
            //on mesure la hauteur
            var thisHeight = $(this).height();
            //on trouve la hauteur de l'élément portant la classe jumbotron
            var jumbo = $(this).find('div.jumbotron');
            var jumboHeight = jumbo.outerHeight();
            //console.log('row Height : '+ thisHeight);//test ok
            //console.log('jumbo Height : '+ jumboHeight);//test ok
            var decal = (thisHeight - jumboHeight) / 2;
            jumbo.css({
                marginTop: decal + "px"
            });

        });
    }
    placeJumbotron();

    //redimensionnement de la hauteur du carousel afin que le background 
    //soit raccord avec la div parente
    function redimMainSlider() {
        // Identification de la div parente et de heuteur
        //console.log('contentJumbotronCarouselItem1 : '+$('#contentJumbotronCarouselItem1').height());
        //var jumboContent = $('#contentJumbotronCarouselItem1');
        //var jumboContentHeight = $('#contentJumbotronCarouselItem1').height();
        var divItem = $('#main-slider').children().children().children('div.item');

        var mainSlider = $('#main-slider').children().children('div.carousel-inner');
        //console.log('main-slider : '+mainSlider.attr('class')); 
        var mainSliderHeight = mainSlider.height();
        //console.log('mainSliderHeight : '+mainSliderHeight);
        //modification css min-height des div enfants
        divItem.css("min-height", mainSliderHeight);
        mainSlider.children('div.item').each(function () {
            $(this).css("height", mainSliderHeight);
            $(this).css("min-height", mainSliderHeight);
        });
    }
    redimMainSlider();

    function replaceItem(divToplace, divContainer, debug) {
        var divContainerHeight = $("#" + divContainer).height();
        var divToPlaceHeight = $("#" + divToplace).height();
        var posTop = (divContainerHeight - divToPlaceHeight) / 2;
        $("#" + divToplace).css({
            top: posTop + "px"
        });
        if (debug === true) {
            console.log('divContainer : ' + $("#" + divContainer).attr("id"));//test
            console.log('divContainer height : ' + $("#" + divContainer).height());//test
            console.log('divToplace : ' + $("#" + divToplace).attr("id"));//test
            console.log('divToplaceHeight : ' + $("#" + divToplace).height());//test
        }
    }


    function adaptHeight(idElem, offset, debug) {
        if ($(window).width() > 845) {
            var diffHeigth = parseInt($(window).height() - $('header').height() - parseInt(offset));
            //console.log('diffHeigth : '+diffHeigth);
            $('#' + idElem).height(diffHeigth);
            //console.log('adapt ' + idElem + ' : ' + $('#' + idElem).height());
        }
        if (debug === true) {
            //détection de la hauteur de la fenêtre
            console.log('Element height :' + $('#' + idElem).height());
            console.log('window height :' + $(window).height());//test
            console.log('header height :' + $('header').height());
            console.log('diffHeigth : ' + diffHeigth);
        }

    }

    adaptHeight('carouselItem1', 0, false);
    adaptHeight('carouselItem2', 0, false);
    adaptHeight('carouselItem3', 0), false;
    adaptHeight('containerTiles', 0, true);
    adaptHeight('lieux-formation', 0, false);

    $('.item').each(function () {
        $(this).children().children('.row').height($(this).height());
    });

    //replaceItem("containerSlider1-2","slider1Item2");

    // Appel des fonctions de mise en page sur l'event resize
    $(window).resize(function () {
        redimPanel();
        placeJumbotron();
        redimMainSlider();
        adaptHeight('carouselItem1', 0, false);
        adaptHeight('carouselItem2', 0, false);
        adaptHeight('carouselItem3', 0, false);
        adaptHeight('containerTiles', 0, false);
        adaptHeight('lieux-formation', 0, false);

        $('.item').each(function () {
            $(this).children().children('.row').height($(this).height());
        });

        replaceItem('contentJumbotronCarouselItem1', 'carouselItem1');
        replaceItem('containerSlider1-2', 'carouselItem2');
        replaceItem('carouselContent3-1', 'carouselItem3Container');
        replaceItem('carouselContent3-2', 'carouselItem3Container');
        replaceItem('containerLieux', 'lieux-formation');

    });

    //
    replaceItem('contentJumbotronCarouselItem1', 'carouselItem1');
    replaceItem('containerSlider1-2', 'carouselItem2');
    replaceItem('carouselContent3-1', 'carouselItem3Container', false);
    replaceItem('carouselContent3-2', 'carouselItem3Container', false);
    replaceItem('containerLieux', 'lieux-formation', false);

    // Scroll jquery sur event mousewheel mais pas sur mobile
    if ($(window).width() > 845 && !isTouch) {

        /*$.scrollify({
         section: "section",
         sectionName: "sectionTest",
         easing: "easeOutExpo",
         scrollSpeed: 1100,
         offset: -130,
         scrollbars: true
         });*/
    }


    /* fullscreen for android browsers */

    if (isTouch) {
        $("html>*").on('touchstart', function () {
            if (screenfull.enabled) {
                screenfull.request();
            } else {
                // Ignore or do something else
            }
            //$("body").click();
        });
    }
    // Invite "Add to home screen"
    addToHomescreen({
        skipFirstVisit: false, // show at first access
        startDelay: 0, // display the message right away
        lifespan: 0, // do not automatically kill the call out
        displayPace: 0, // do not obey the display pace
        privateModeOverride: false, // show the message in private mode
        maxDisplayCount: 0,
        icon: true,
        detectHomescreen: "queryString",
        debug: false,
        message: "Pour plus de confort ajoutez notre Web-appli à votre tablette ou smartphone en appuyant sur Menu->Ajouter à l'écran d'accueil"
    });
    
     
    
}); 
    




