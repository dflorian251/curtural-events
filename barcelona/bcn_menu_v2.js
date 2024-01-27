(function($) {
    $(document).ready(function(e) {


        /******************/

        $("#menu-ciutat-bcn-v1 .level-0 > li").each(function(index, element) {
            $(this).addClass("menu-" + index);
        });
        var textMobile = "Barcelona";
        $(".menu-0 > a").html('<img width="22" height="22" src="https://www.barcelona.cat/assetsdi/lameva/menu/img/ico00.png">')
            /******************/


        var responsive = false;
        var responsiveMobil = false;


        if ($.browser.device == (/android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/i.test(navigator.userAgent.toLowerCase()))) {

            crearMenuMobil();
            responsiveMobil = true;

        } else {
            comprobaResolucio();
        }


        $(window).resize(function() {
            comprobaResolucio();
        });


        function comprobaResolucio() {

            var resol = $(window).width();
            if (resol < 768) {

                $("#menu-ciutat-bcn-v1").addClass("mobil");
                $("#menu-ciutat-bcn-v1").removeClass("desktop");

                if (!(responsiveMobil)) {
                    crearMenuMobil();
                    responsiveMobil = true;

                }


            } else {
                $("#menu-ciutat-bcn-v1").addClass("desktop");
                $("#menu-ciutat-bcn-v1").removeClass("mobil");

                if (!(responsive)) {
                    crearMenuDesktop();
                }

                responsive = true;
            }
        }


        function crearMenuMobil() {


            $(".menu-0 > a").after('<a class="home-mobil" href="#"><img src="https://www.barcelona.cat/assetsdi/lameva/menu/img/home.png" />' + textMobile + '</a>');

            //presentar menú

            $("#menu-ciutat-bcn-v1.mobil > #menu-ciutat-wrapper > ul > li").removeClass("active-trail");
            $("#menu-ciutat-bcn-v1.mobil > #menu-ciutat-wrapper > ul > li > a").removeClass("active-fletxa");

            if ($(".minimitzat").length == 0 && ($("#header .grid").length) || $("#header .box-titol").length) {
                if($("#header .box-titol").length) {
                    $("#header .box-titol").append("<div class='minimitzat'></div>");
                } else {
                    $("#header .grid").append("<div class='minimitzat'></div>");
                }
            }

            $("#menu-ciutat-bcn-v1.mobil #menu-ciutat-wrapper").addClass("ocult");

            //funcio mostrar span menu nivel1, en mobile sempre show;
            $("#menu-ciutat-bcn-v1.desktop .level-0 li:not(.active-trail) a").mouseover(function () {

                $(this).find("span").stop().show();
            }).mouseout(function () {
                $(this).find("span").stop().show();
            });

            var linksContent = '';
            var meet_url = 'http://meet.barcelona/ca';

            var idma = 'ca';
            var lang = $("body").attr("class").split(" ");
            for(i = 0; i < lang.length; i++) {
                if(lang[i].indexOf('i18n') > -1) {
                    idma = lang[i].split("-")[1];
                }
            }

            var ajuntament_url;
            var ajuntament_text;
            var meet_url;
            var meet_text;

            if (idma) {

                switch (idma) {
                    case 'es':
                        ajuntament_url = 'https://ajuntament.barcelona.cat/es';
                        ajuntament_text = 'Organización municipal, acción de gobierno, alcaldía, padrón, sede electrónica, transparencia, trámites, oferta pública, relación con los ciudadanos';
                        meet_url = 'http://meet.barcelona/es';
                        meet_text = 'Turismo sostenible, visita Barcelona, rincones con encanto, haz negocios en BCN, estudia e investiga en BCN, grandes acontecimientos';
                        break;
                    case 'ca':
                        ajuntament_url = 'https://ajuntament.barcelona.cat/ca';
                        ajuntament_text = 'Organització municipal, acció de govern, alcaldia, padró, seu electrònica, transparència, tràmits, oferta pública, relació amb els ciutadans';
                        meet_url = 'http://meet.barcelona/ca';
                        meet_text = 'Turisme sostenible, visita Barcelona, racons amb encant, fes negocis a BCN, estudia i investiga a BCN, grans esdeveniments';
                        break;
                    case 'en':
                        ajuntament_url = 'https://ajuntament.barcelona.cat/en';
                        ajuntament_text = 'Municipal organisation, government action, major, city residence registration, e-Government, transparency, procedures, public-sector offer, relations with citizens';
                        meet_url = 'http://meet.barcelona/en';
                        meet_text = 'Sustainable tourism, visit Barcelona, spots with charm, do business in BCN, study and research in BCN, big events';
                        break;
                }
            } else {
                ajuntament_url = 'https://ajuntament.barcelona.cat/ca';
                meet_url = 'https://meet.barcelona/ca';
                ajuntament_text = 'Organització municipal, acció de govern, alcaldessa, padró, seu electrònica, transparència, tràmits, oferta pública, relació amb els ciutadans';
                meet_text = 'Turisme sostenible, visita Barcelona, racons amb encant, fes negocis a BCN, estudia i investiga a BCN, grans esdeveniments';
            }

            linksContent += '<li id="enllacos-ajuntament-meet"><div class="enllac-ajuntament"><a href="'+ ajuntament_url +'" target="_blank"><i class="bcn-icon-ajuntament"></i><span class="bcn-icon-ajuntament" aria-hidden="true"></span><span>ajuntament.barcelona.cat</span><span>' + ajuntament_text +'</span></a></div>';
            linksContent += '<div class="enllac-meet"><a href="' + meet_url + '" target="_blank"><i class="bcn-icon-meet"></i><span class="bcn-icon-meet" aria-hidden="true"></span><span>meet.barcelona</span><span>' + meet_text +'</span></a></div></li>';
            $('#menu-ciutat-wrapper .level-0').append(linksContent);

            var menu_fb = '<a class="menu-fb" target="_blank" href="https://www.facebook.com/barcelona.cat/"></a>';
            var menu_twitter = '<a class="menu-twitter" target="_blank" href="https://twitter.com/barcelona_cat/"></a>';
            var menu_instagram = '<a class="menu-instagram" target="_blank" href="https://instagram.com/barcelona_cat/"></a>';
            var menu_youtube = '<a class="menu-youtube" target="_blank" href="https://www.youtube.com/user/wwwbcncat/"></a>';
            var menu_butlleti = '<a class="menu-butlleti" target="_blank" href="https://comunica.barcelona.cat/newsletter/' + idma + '/landings/alta"></a>';
            var menu_items_xxss = '<li id="menu-items-xxss">' + menu_fb + menu_twitter + menu_instagram + menu_youtube + menu_butlleti + '</li>';
            $('#menu-ciutat-wrapper .level-0').append(menu_items_xxss);


            //mostrar menu minimitzat, ocultar-ho al clicar i mostrar menu expandit

            $("#header .minimitzat").on("click", function(e) {
                e.preventDefault();
                $("#menu-ciutat-bcn-v1.mobil").addClass("show");
                $(this).addClass('ocult');
                $(".mobil #menu-ciutat-wrapper").removeClass("ocult");
                if ($("#tancar").length == 0) {
                    $("<a id='tancar'></a>").hide().prependTo("#menu-ciutat-bcn-v1.mobil").show();
                }
                $("<div id='menu-overlay'></div>").hide().prependTo("#menu-ciutat-bcn-v1").delay(200).fadeIn(350);
                setTimeout(function() {
                    $("#tancar").css("position", "fixed");
                }, 600);
                $("#block-ux_custom-header").find('.wrapper-second').closest('li').addClass("expanded");
                $("#menu-ciutat-bcn-v1 .level-0 > li.expanded").find(".wrapper-second .active").closest('li.expanded').addClass("open").closest("#menu-ciutat-wrapper").addClass("submenu-active");
                document.addEventListener('touchmove', bodyScrollPreventDefault, { passive: false });
                $("html, body").addClass("menu-active");

            });

            $("#menu-ciutat-bcn-v1 .level-0 > li.expanded").on("click", "> a", function(e) {
                e.preventDefault();
                $(this).closest('li').addClass("open");
                $("#menu-ciutat-wrapper").addClass("submenu-active");

            });

            $("#menu-ciutat-bcn-v1 .level-0 li.expanded").on("click", ".active-entradeta", function(e) {
                e.preventDefault();
                $(this).closest('li').removeClass("open");
                $("#menu-ciutat-wrapper").removeClass("submenu-active");

            });

            //tancar menu expandit

            $("#menu-ciutat-bcn-v1").on("click", "#tancar", function(e) {
                e.preventDefault();
                $("#menu-ciutat-bcn-v1.mobil").removeClass("show");
                $("#header .minimitzat").removeClass('ocult');
                $(this).addClass('ocult');
                $("#tancar").css("position","absolute");
                $("#menu-overlay").fadeOut(400, function(){ $(this).remove();});
                document.body.removeEventListener('touchmove', bodyScrollPreventDefault, { passive: false });
                $("#tancar").fadeOut(350, function(){ $(this).remove();});
                $("html, body").removeClass("menu-active");

            });

            function bodyScrollPreventDefault(e){
                var targetElement = e.target.id;
                if (targetElement == 'menu-overlay') {
                    e.preventDefault();
                }
            }

            //detectar el nivell 3 del menu

            $("#menu-ciutat-bcn-v1.mobil .wrapper-second li:has(ul)").each(function(index, element) {
                $(this).addClass("sub-grupo");
                $(this).children("a").addClass("amb-submenu");
            });

            //Nivell 1 desplegat mostra/oculta nivell 2

            $("#menu-ciutat-bcn-v1.mobil > #menu-ciutat-wrapper > ul > li:has(ul) > a").click(function(e) {

                e.preventDefault();
                $(this).parent("li").toggleClass("active-trail");

                if ($(this).is(".modificaralcada")) {
                    $(".mobil .wrapper-second > ul > li").removeClass("seleccionat").siblings().removeClass("no-seleccionat");
                    $(".mobil #menu-ciutat-wrapper").find(".active-trail > a").removeClass("modificaralcada");
                }
            });


            //Nivell 2 desplegat mostra/oculta nivell 3

            $(".mobil .sub-grupo > a").click(function(e) {
                e.preventDefault();

                $(this).parent("li").toggleClass("seleccionat").siblings().toggleClass("no-seleccionat");
                $(".mobil #menu-ciutat-wrapper").find(".active-trail > a").toggleClass("modificaralcada");
            });


            //mostrar menú nivell 1 amagant fletxa

            $(".mobil .level-0 > li > a").click(function(e) {

                $(this).removeClass("modificaralcada");
                $(this).children("span").removeClass("sensedesplegar");
            });


            // modificar posició menú minimitzat al fer scroll

            if($("#header #titol-carousel").length) {
                var menu = $('#header #titol-carousel');
            } else {
                var menu = $("#header");
            }

            var menu_offset = menu.offset();

            $(window).on('scroll', function() {
                if ($(window).scrollTop() > menu_offset.top) {
                    menu.addClass('menu-fijo');
                } else {
                    menu.removeClass('menu-fijo');
                }
            });

            // Afegir enllaç a icona home

            var enllac_home = $('#menu-ciutat-wrapper .level-0 .menu-0 > a').attr("href");
            $('#menu-ciutat-wrapper .level-0 .menu-0 .home-mobil').attr("href", enllac_home);

            //Detectar anchors
             $("#menu-ciutat-bcn-v1.mobil #menu-ciutat-wrapper ul li a.anchor").click(function(){
                $("#menu-ciutat-bcn-v1.mobil a#tancar").trigger("click");

             });

        }






        function crearMenuDesktop() {
            

            /////////

            $(".desktop .wrapper-second li:has(ul)").each(function(index, element) {
                $(this).children("a").addClass("amb-submenu");
            });

            $("#header .minimitzat").remove();

            // eliminar borde ultima fila menú

            $(".desktop .wrapper-second > ul > li:nth-child(4n-3):last").addClass("grupo").nextAll().addClass("grupo");
            $(".desktop .wrapper-second ul li ul").each(function() {
                $(this).find("li:nth-child(4n-3):last").addClass("grupo").nextAll().addClass("grupo");
            });
            $("#menu-ciutat-bcn-v1.desktop .level-0 > li:not(:first)").each(function(index, element) {
                $(this).prepend("<div class='icona'><img src='https://www.barcelona.cat/assetsdi/lameva/menu/img/fletxa_" + (index + 1) + ".png'></div>");
            });

            //funcio mostrar span menu nivel1

            $("#menu-ciutat-bcn-v1.desktop .level-0 li:not(.active-trail) a").mouseover(function() {
                $(this).find("span").stop().show();
            }).mouseout(function() {
                $(this).find("span").stop().hide();
            });

            paddingH = 0;
            paddingM = 0;
            paddingB = 0;

            if ($(".desktop .active-trail .wrapper-second").css("background-image") != "none") {

                paddingH = $(".desktop .wrapper-second").css("padding-top");
                paddingM = "0px";
                paddingB = "18px";

            } else {
                $(".desktop .wrapper-second").css("padding", "0");
            }

            //funcio crear enllac h2


            /*
            $(".desktop .wrapper-second .active-entradeta").click(function(e){

            e.preventDefault();
            url = $("#menu-ciutat-wrapper .level-0 .expanded").find("a").attr("href");

            $(".desktop .wrapper-second .active-entradeta").append("<a href"+$(url).html()+"></a>");
            });*/



            $(document).on("click", "#menu-ciutat-bcn-v1.desktop .wrapper-second .active-entradeta", function(e) {
                window.location = $("#menu-ciutat-wrapper .active-fletxa").attr("href");
            });



            //funcio amagar submenu1 mostrar submenu2

            $(".desktop .wrapper-second ul li:has(ul)").click(function(e) {
                e.preventDefault();
                menu = $(this);
                third_level = $(this).find("ul");
                menu_parent = $(this).parent("ul");

                $(".desktop .wrapper-second").animate({ height: "0px", paddingTop: paddingM, paddingBottom: paddingB }, 400, function() {
                    $(this).find("ul").hide();
                    $(this).find(".active-entradeta").hide();

                    $(menu).parents(".desktop .wrapper-second").append("<div class='active-entradeta third'><h3>" + $(menu).find("a").html() + "</h3></div>");
                    $(menu).parents(".desktop .wrapper-second").append("<ul class='third'>" + third_level.html() + "</ul>");

                    $(this).append("<h2 class='aux'>" + $(".desktop .wrapper-second").find(".active-entradeta").children("h2").html() + "</h2>");

                    $(".desktop h2.aux").css({ "top": paddingM, "padding-bottom": "5px" });
                    var padding_third = $(".third").css("padding-top");
                    $(".desktop .wrapper-second").animate({ height: ($(".third").height() + parseInt(padding_third) - 10) }, 800, function() {});
                });

            });

            //funcio amagar submenu2 mostrar submenu1
            $(document).on("click", ".desktop div.third , .desktop h2.aux", function(e) {

                //      $(".desktop div.third , .desktop h2.aux").click(function(e){

                $(".desktop .wrapper-second").animate({ height: 0, paddingTop: paddingH }, 500, function() {
                    $(".desktop .third").remove();
                    $(this).find("ul").show();
                    $(this).find(".active-entradeta").show();

                    entradeta = $(".desktop .wrapper-second").find(".active-entradeta");
                    mHeight = $(".desktop .wrapper-second").find("ul").innerHeight();
                    if (mHeight < $(entradeta).innerHeight()) { mHeight = mHeight + 18; } else { mHeight = mHeight - 18; }

                    $(".desktop .wrapper-second").animate({ height: mHeight });
                    $(".desktop h2.aux").remove();
                });

                $(".desktop .wrapper-second h2").animate({ top: paddingH }, 500, function() {
                    $(".desktop .wrapper-second h2").css("width", "16.6%").removeClass("active");
                });

            });

            //funcio amagar fletxa mostrar títol menu

            $("#menu-ciutat-bcn-v1.desktop .level-0 .active-trail a:first").addClass("active-fletxa").click(function(e) {
                e.preventDefault();
                $(this).siblings(".wrapper-second").slideToggle(300, function() {});
                $(this).toggleClass("active-fletxa");
                $("#menu-ciutat-bcn-v1.desktop.amagat").removeClass('amagat');
            });
            $("#menu-ciutat-bcn-v1.desktop .level-0 .active-trail .icona").click(function(e) {
                e.preventDefault();
                $(this).siblings(".wrapper-second").slideToggle(300, function() {});
                $("#menu-ciutat-bcn-v1.desktop .level-0 .active-trail a:first").toggleClass("active-fletxa");
                $("#menu-ciutat-bcn-v1.desktop.amagat").removeClass('amagat');
            });
            // fixed position on scroll
            var top = $('#menu-ciutat-bcn-v1.desktop').offset().top - parseFloat($('#menu-ciutat-bcn-v1.desktop').css('margin-top').replace(/auto/, 0));

            $(window).scroll(function(event) {
                var y = $(window).scrollTop();

                if (y >= top) {

                    $('#menu-ciutat-bcn-v1.desktop').addClass('fixed-menu');

                    $(".desktop .wrapper-second").slideUp();

                    $(".desktop .active-trail a:first").removeClass("active-fletxa");
                    $('#menu-ciutat-bcn-v1.desktop').addClass("amagat");

                } else {

                    $('#menu-ciutat-bcn-v1.desktop').removeClass('fixed-menu');

                }
               // $(".desktop.fixed-menu").css({ "box-shadow": "none" });

            });

            if ($(".wrapper-third").find('.active').length != 0) {
                $(".active-trail.amb-submenu").trigger("click");
            }


        }



    });
})(jQuery);
