/* ------------------------------------------------------ *\
    [Variables] 'Zone'
\* ------------------------------------------------------ */
    var IS_MOBILE = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
    // Back to Top
    var offset, offset_opacity, scroll_top_duration;
    offset = 300;
    offset_opacity = 1200;
    scroll_top_duration = 700;
    //Masters
    var GLOBALMasterMax = $("input#master-max").val();
    var GLOBALRootApi = $("input#master-root-api").val();
    //var GLOBALMasterMax = "http://clicktolead.com.mx/api/v1/remote/action"; //Production
    //var GLOBALMasterMax = "http://localhost/maxleads/api/v1/remote/action"; //Development
/* ------------------------------------------------------ *\
    [functions] Alert Custom
\* ------------------------------------------------------ */
    function resetAlert () {
        alertify.set({
            labels : {
                ok     : "OK",
                cancel : "Cancel"
            },
            delay : 5000,
            buttonReverse : false,
            buttonFocus   : "ok"
        });
    }
/* ------------------------------------------------------ *\
    [Methods] isMobile
\* ------------------------------------------------------ */
    var isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    }
/* ------------------------------------------------------ *\
    [Methods] backToTopMethod
\* ------------------------------------------------------ */
    var backToTopMethod = {
        backToTop: function(event) {
            event.preventDefault();
            $("body,html").animate({
                scrollTop: 0,
                }, scroll_top_duration
            );
        },
        windowScroll: function() {
            ( $(this).scrollTop() > offset ) ? $(domEl._back_to_top).addClass("cd-is-visible") : $(domEl._back_to_top).removeClass("cd-is-visible cd-fade-out");
            if ( $(this).scrollTop() > offset_opacity ) {
                $(domEl._back_to_top).addClass("cd-fade-out");
            }
        },
        init_window_scroll_top: function() {
            $(window).scroll(backToTopMethod.windowScroll);
        }
    }
/* ------------------------------------------------------ *\
    [methods] dropdown
\* ------------------------------------------------------ */
    var dropdown_methods = {
        dropdown : function(event) {
            $(".inner-menu").not($("ul", this)).slideUp("fast")
            .next()
            $(this).find('ul').slideToggle("fast")
            .end();
        }
    }
/* ------------------------------------------------------ *\
    [Methods] toHtmlMethod
\* ------------------------------------------------------ */
    var toHtmlMethod = {
        toHtml: function() {
            $('.to-html').each ( function( key, value ) {
                var html, element;
                element = $(this);
                html = JAG.getHTML(element);
                html = $.trim(html);
                html = JAG.replaceAll(html, '&lt;', '<');
                html = JAG.replaceAll(html, '&gt;', '>');
                JAG.setHTML(element, html);
            });
        }
    }
/* ------------------------------------------------------ *\
    [Methods] altoMaxMethods
\* ------------------------------------------------------ */
    var altoMaxMethods = {
        altomax : function() {
            var altomax = 0;
            $('.grid-item-inner').css('height', '530px');
        }
    }
/* ------------------------------------------------------ *\
    [Methods] openMenuMethods
\* ------------------------------------------------------ */
    var openMenuMethods = {
        clickOpenMenu: function(event) {
            $('nav').toggleClass('open-menu');
            console.log('open');
        },
        clickOpenModels: function(event) {
            var hideTimeout;
            clearTimeout(hideTimeout);
            $('.model-select-block', '.nav-1').slideDown();
        },
        clickOpenAgencies: function(event) {
            var hideTimeout;
            clearTimeout(hideTimeout);
            $('.agencies-select-block', '.nav-1').slideDown();
        }
    }
/* ------------------------------------------------------ *\
    [Methods] closeMenuMethods
\* ------------------------------------------------------ */
    var closeMenuMethods = {
        clickClose: function(event) {
            $('nav').removeClass('open-menu');
        },
        clickCloseModels: function(event) {
            var hideTimeout;
            hideTimeout = setTimeout(function(){
                $('.model-select-block', '.nav-1').slideUp();
            }, 100);
        },
        clickCloseAgencies: function(event) {
            var hideTimeout;
            hideTimeout = setTimeout(function(){
                $('.agencies-select-block', '.nav-1').slideUp();
                //console.log(hideTimeout);
            }, 100);
        }
    }
/* ------------------------------------------------------ *\
    [Methods] windowWidthMethod
\* ------------------------------------------------------ */
    var windowWidthMethod = {
        windowWidth: function() {
            var windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

            if (windowWidth > 900) { // Medium breakpoint
                var heroCarousels = document.querySelectorAll(".HeroCarousel");
                var carousel, yOffset, element, carouselHeight;
                var windowHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;

                for (var i = 0; i < heroCarousels.length; i++) {
                    carousel = heroCarousels[i];
                    yOffset = 0;
                    element = carousel;

                    while (element) {
                        yOffset += (element.offsetTop - element.scrollTop + element.clientTop);
                        element = element.offsetParent;
                    }

                    carouselHeight = windowHeight - yOffset;

                    if (carouselHeight > 450) {
                        carousel.style.height = carouselHeight + "px";
                    }
                }
            }
        }
    }
/* ------------------------------------------------------ *\
    [Methods] scrollHeader
\* ------------------------------------------------------ */
    var scrollHeader = {
        init: function() {
            if($(window).scrollTop() > 50) {
                $(".header-scroll").addClass("active");
            } else {
                //remove the background property so it comes transparent again (defined in your css)
               $(".header-scroll").removeClass("active");
            }
        }
    }
/* ------------------------------------------------------ *\
    [functions] scroll_to
\* ------------------------------------------------------ */
    //animates all transitions (needs an "a" element whit "name attrubute")
    $.scroll_to = function( target_name ){
        var target, dest, header_height = $('#header-wrapper').height();
        if( target_name != 'top' ){
            target = $( 'a[name="' + target_name + '"]' );
            dest = target.offset().top - header_height - 35;
            if (IS_MOBILE) {
                dest += 75;
            }
        }else{
            dest = 0;
        }
        console.log(target);
        console.log(dest);
        $('html,body').stop().animate({ scrollTop : dest}, 800 , 'easeOutSine');
    };
    var scrollContact = {
        init: function(event) {
            event.preventDefault();
            $.scroll_to('contacto');
        }
    }
/* ------------------------------------------------------ *\
    [Methods] mobileSection
\* ------------------------------------------------------ */    
    var mobileSection = {
        buttonsSection: function() {
            if ( isMobile.any() ) {
                $(".phone.hidden-movil").attr("style", "display: none;");
                $(window).scroll(mobileSection.isScrollInMobile);
                $('.scroll').scrollable();
            }
        },
        isScrollInMobile: function() {
            if ($(this).scrollTop() > 0){
                $(".mobile-section").slideDown(300);
                $(".buttons").slideDown(300);
            } else {
                $(".mobile-section").slideUp(300);
                $(".buttons").slideUp(300);
            };
        }
    }
/* ------------------------------------------------------ *\
    [Methods] slideInPanel
\* ------------------------------------------------------ */
    var slideInPanel = {
        openSlideInPanel: function(event) {
            event.preventDefault();
            $('.cd-panel').addClass('is-visible');
        },
        closeSlideInPanel: function(event) {
            if( $(event.target).is('.cd-panel') || $(event.target).is('.cd-panel-close') ) { 
                $('.cd-panel').removeClass('is-visible');
                event.preventDefault();
            }
        }
    }
/* ------------------------------------------------------ *\
    [Methods] video_strip_methods
\* ------------------------------------------------------ */
    var video_strip_methods = {
        video_strip_pre_video: function(event) {
            $(this).closest('.pre-video').addClass('fade-off');
            $(this).closest('.video-strip').find('.iframe-holder').addClass('show-iframe');
            var that = $(this);
            setTimeout(function(){
                that.closest('.video-strip').find('.iframe-holder').addClass('fade-on');
            },500);
        },
        video_strip_close_frame: function(event) {
            $(this).closest('.iframe-holder').removeClass('fade-on');
            var that = $(this);
            setTimeout(function(){
                that.closest('.video-strip').find('.iframe-holder').removeClass('show-iframe');
                that.closest('.video-strip').find('.pre-video').removeClass('fade-off');
            },500);
        },
        stop_video: function(event) {
            $('iframe').attr('src', $('iframe').attr('src'));
        }
    }
/* ------------------------------------------------------ *\
    [Methods] init_hero_slider
\* ------------------------------------------------------ */
    var init_hero_slider = {
        hero_slider: function() {
            windowWidthMethod.windowWidth();
        }
    }
/* ------------------------------------------------------ *\
    [Methods] jagHome
\* ------------------------------------------------------ */
    var jagHome = {
        initialized: false,
        initialize: function() {
            if ( this.initizalized ) return;
            this.initialized = true;
            this.build();
        },
        build: function() {
            this.init_hero_slider();
        },
        _init: function() {
            init_hero_slider.hero_slider();
        }
    }
/* ------------------------------------------------------ *\
    [Methods] jagVehicles
\* ------------------------------------------------------ */
    var jagVehicles = {
        initialized: false,
        initialize: function() {
            if ( this.initizalized ) return;
            this.initialized = true;
            this.build();
        },
        build: function() {
            this.init_hero_slider();
        },
        _init: function() {
            init_hero_slider.hero_slider();
        }
    }
/* ------------------------------------------------------ *\
    [Methods] jagBlog
\* ------------------------------------------------------ */
    var jagBlog = {
        initialized: false,
        initialize: function() {
            if ( this.initizalized ) return;
            this.initialized = true;
            this.build();
        },
        build: function() {
        },
        _init: function() {
        }
    }
/* ------------------------------------------------------ *\
    [Methods] jagTestDrive
\* ------------------------------------------------------ */
    var jagTestDrive = {
        initialized: false,
        initialize: function() {
            if ( this.initizalized ) return;
            this.initialized = true;
            this.build();
        },
        build: function() {
            this.init_hero_slider();
        },
        _init: function() {
            init_hero_slider.hero_slider();
        }
    }
/* ------------------------------------------------------ *\
    [Methods] jagFinancin
\* ------------------------------------------------------ */
    var jagFinancing = {
        initialized: false,
        initialize: function() {
            if ( this.initizalized ) return;
            this.initialized = true;
            this.build();
        },
        build: function() {
            this.init_hero_slider();
        },
        _init: function() {
            init_hero_slider.hero_slider();
        }
    }
/* ------------------------------------------------------ *\
    [Methods] event_to_material
\* ------------------------------------------------------ */
    var set_data = {
        set_product: function(event) {
            get_data = JAG.getValue('#master-product');
            JAG.setValue('#jag_product', get_data);
            console.log(get_data);
        }
    }
/* ------------------------------------------------------ *\
    [Methods] testDriveForm
\* ------------------------------------------------------ */
    var testDriveForm = {
        /*
        sendButtons: "",
        contactForm: "",
        loaderIcon: "",
        */
        sendLeads: function() {
            var data, dataRenamed;
            data = $(testDriveForm.contactForm).serializeFormJSON();
            dataRenamed = JAG.renameArrayObjKeys([data], {
                "name": "nombre",
                "lastname": "apellidos",
                "email": "correo",
                "phone": "telefono",
                "agencie": "agencia",
                "product": "producto",
                "comment": "mensaje"
            });
            dataRenamed = dataRenamed[0];
            dataRenamed["business_max"] = $('#jag_agn').find(":selected").data("max-id"); //Max Id;            
            dataRenamed["news"] = "0";
            dataRenamed["origen_type"] = "2";
            dataRenamed["campaign_max"] = "Prueba de manejo.";
            dataRenamed["web_max"] = window.location.href;
            dataRenamed["exit_web"] = window.location.href;
            return JAG.postalService(GLOBALMasterMax, dataRenamed);
        },
        handlerPromiseSend: function (data1) {
            var testDriveSendPromise, jag_agn, rootApi;

            rootApi = JAG.getValue('#master-host');
            url_location = rootApi;
            
            jag_agn = JAG.getValue('#jag_agn');
            jag_product = JAG.getValue('#jag_product');
            console.log(jag_agn, jag_product);

            // Loader Icon
            testDriveForm.loaderIcon = "#loader_send_icon";
            // Get and save current button id
            testDriveForm.sendButton = "#" + $(this).attr('id');
            // Get the current form id, find the form with the same data-scope value
            testDriveForm.contactForm = "form#" + $(domEl.div_recurrent).find("form").attr("id");

            formErrors = formValidation.required(testDriveForm.contactForm, '.validate-required', testDriveForm.sendButton);
            if (formErrors) {
                $(testDriveForm.contactForm).css("cursor", "auto").prop("disabled", true);
                $(testDriveForm.loaderIcon).css("display", "block");

                resetAlert();
                alertify.set({
                    labels: {
                        ok: 'Aceptar',
                        cancel: 'Cancelar'
                    }
                });
                data = $(testDriveForm.contactForm).serializeFormJSON();
                //testDriveSendPromise = testDriveForm.sendContacto();
                leadsPromise = testDriveForm.sendLeads();
                leadsPromise.success( function (data2) {
                    ga('send', 'event', 'button-send-form-test-drive-contact', 'Prueba de Manejo: '+ jag_product, 'form-test-drive-contact');
                    setTimeout(function () {
                        setTimeout(function () {
                            //$('#form-wrapper').fadeOut(1000);
                            $('.form-thanks').fadeIn(1000);
                            setTimeout(function() {
                                testDriveForm.resetContact();
                                alertify.alert("¡Muchas gracias!<br>" + 
                                               "Hemos enviado su formulario exitosamente a un representante de la concesionaria " + jag_agn + ", " +
                                               "pronto se pondrá en contacto con usted para enviarle su cotización.", function(e) {
                                                    $(location).attr('href', url_location); 
                                               });
                                alertify.success("Datos enviados.");
                            }, 1800);
                        }, 1800);
                    }, 1400);
                });
                leadsPromise.error( function (data2) {
                    testDriveForm.resetContact();
                    alertify.error("No se han podido enviar los datos <br /> Inténtelo más tarde.");
                });
                
                /*
                leadsPromise.success(testDriveForm.handlerPromiseLeads);
                leadsPromise.error(testDriveForm.handlerPromiseLeads);
                testDriveForm.sendLeads();
                testDriveForm.sendContacto();
                testDriveForm.addContacto();
                */
            }
        },
        /*handlerPromiseLeads: function (data) {
            var contactSndPromise;
            contactSndPromise = testDriveForm.sendContacto();
            contactSndPromise.success(testDriveForm.handlerPromiseSend);
            contactSndPromise.error(testDriveForm.handlerPromiseSend);
        },
        sendContacto: function () {
            var urlSen, data;
            data = $(testDriveForm.contactForm).serializeFormJSON();
            urlSen = GLOBALRootApi;
            return JAG.postalService(urlSen + urlsApi.snd_drv, data);
        },*/
        resetContact: function () {
            var $btnSend;
            $btnSend = $(".send_contact_form");
            JAG.resetForm(testDriveForm.contactForm);
            $(testDriveForm.loaderIcon).css("display", "none");
            $btnSend.removeAttr("disabled");
        },
        clickSend: function(event) {
            testDriveForm.handlerPromiseSend();
        }
    }
/* ------------------------------------------------------ *\
    [Methods] financingForm
\* ------------------------------------------------------ */
    var financingForm = {
        sendButtons: "",
        contactForm: "",
        loaderIcon: "",
        sendLeads: function() {
            var dara, dataRenamed;
            data = $(financingForm.contactForm).serializeFormJSON();
            dataRenamed = JAG.renameArrayObjKeys([data], {
                "name": "nombre",
                "lastname": "apellidos",
                "email": "correo",
                "phone": "telefono",
                "agencie": "agencia",
                "product": "producto",
                "comment": "mensaje"
            });
            dataRenamed = dataRenamed[0];
            dataRenamed["business_max"] = $('#jag_agn').find(":selected").data("max-id"); //Max Id;            
            dataRenamed["news"] = "0";
            dataRenamed["origen_type"] = "2";
            dataRenamed["campaign_max"] = "Financiamiento";
            dataRenamed["web_max"] = window.location.href;
            dataRenamed["exit_web"] = window.location.href;
            return JAG.postalService(GLOBALMasterMax, dataRenamed);
        },
        handlerPromiseSend: function (data1) {
            var financingSendPromise, jag_agn, rootApi;

            rootApi = JAG.getValue('#master-host');
            url_location = rootApi;
            
            jag_agn = JAG.getValue('#jag_agn');
            jag_product = JAG.getValue('#jag_producto');

            // Loader Icon
            financingForm.loaderIcon = "#loader_send_icon";
            // Get and save current button id
            financingForm.sendButton = "#" + $(this).attr('id');
            // Get the current form id, find the form with the same data-scope value
            financingForm.contactForm = "form#" + $(domEl.div_recurrent).find("form").attr("id");
            
            formErrors = formValidation.required(financingForm.contactForm, '.validate-required', financingForm.sendButton);
            if (formErrors) {
                $(financingForm.contactForm).css("cursor", "auto").prop("disabled", true);
                $(financingForm.loaderIcon).css("display", "block");

                resetAlert();
                alertify.set({
                    labels: {
                        ok: 'Aceptar',
                        cancel: 'Cancelar'
                    }
                });
                data = $(financingForm.contactForm).serializeFormJSON();
                leadsPromise = financingForm.sendLeads();
                //financingSendPromise = financingForm.sendContacto();
                leadsPromise.success( function (data2) {
                    ga('send', 'event', 'button-send-form-financing', 'Financiamiento: '+ jag_product, 'form-financing-contact');
                    setTimeout(function () {
                        setTimeout(function () {
                            //$('#form-wrapper').fadeOut(1000);
                            $('.form-thanks').fadeIn(1000);
                            setTimeout(function() {
                                financingForm.resetFinancing();
                                alertify.alert("¡Muchas gracias!<br>" + 
                                               "Hemos enviado su formulario exitosamente a un representante de la concesionaria " + jag_agn + ", " +
                                               "pronto se pondrá en contacto con usted para enviarle su cotización.", function(e) {
                                                    $(location).attr('href', url_location); 
                                               });
                                alertify.success("Datos enviados.");
                            }, 1800);
                        }, 1800);
                    }, 1400);
                });
                leadsPromise.error( function (data2) {
                    financingForm.resetFinancing();
                    alertify.error("No se han podido enviar los datos <br /> Inténtelo más tarde.");
                });

                /*
                leadsPromise.success(financingForm.handlerPromiseLeads);
                leadsPromise.error(financingForm.handlerPromiseLeads);
                financingForm.sendLeads();
                financingForm.sendContacto();
                financingForm.addContacto();
                */
            }
        },
        /*handlerPromiseLeads: function (data) {
            var contactSndPromise;
            contactSndPromise = financingForm.sendContacto();
            contactSndPromise.success(financingForm.handlerPromiseSend);
            contactSndPromise.error(financingForm.handlerPromiseSend);
        },
        sendContacto: function () {
            var urlSen, data;
            data = $(financingForm.contactForm).serializeFormJSON();
            urlSen = GLOBALRootApi;
            return JAG.postalService(urlSen + urlsApi.snd_fin, data);
        },*/
        resetFinancing: function () {
            var $btnSend;
            $btnSend = $(".send_contact_form");
            JAG.resetForm(financingForm.contactForm);
            $(financingForm.loaderIcon).css("display", "none");
            $btnSend.removeAttr("disabled");
        },
        clickSend: function(event) {
            financingForm.handlerPromiseSend();
        }
    }
/* ------------------------------------------------------ *\
    [Methods] contactForm
\* ------------------------------------------------------ */
    var contactForm = {
        sendButtons: "",
        contactForm: "",
        loaderIcon: "",
        sendLeads: function() {
            var data, dataRenamed;
            data = $(contactForm.contactForm).serializeFormJSON();
            dataRenamed = JAG.renameArrayObjKeys([data], {
                "name": "nombre",
                "lastname": "apellidos",
                "email": "correo",
                "phone": "telefono",
                "agencie": "agencia",
                "product": "producto",
                "comment": "mensaje"
            });
            dataRenamed = dataRenamed[0];
            dataRenamed["business_max"] = $('#jag_business_max').val(); //Max Id;            
            dataRenamed["news"] = "0";
            dataRenamed["origen_type"] = "2";
            dataRenamed["campaign_max"] = "Contacto";
            dataRenamed["web_max"] = window.location.href;
            dataRenamed["exit_web"] = window.location.href;
            return JAG.postalService(GLOBALMasterMax, dataRenamed);
        },
        handlerPromiseSend: function (data1) {
            var contactSendPromise, jag_agn, rootApi;

            rootApi = JAG.getValue('#master-host');
            url_location = rootApi;
            
            jag_agn = JAG.getValue('#jag_agn');
            jag_product = JAG.getValue('#jag_producto');
            console.log(jag_agn, jag_product);

            // Loader Icon
            contactForm.loaderIcon = "#loader_send_icon";
            // Get and save current button id
            contactForm.sendButton = "#" + $(this).attr('id');
            // Get the current form id, find the form with the same data-scope value
            contactForm.contactForm = "form#" + $(domEl.div_recurrent).find("form").attr("id");

            formErrors = formValidation.required(contactForm.contactForm, '.validate-required', contactForm.sendButton);
            if (formErrors) {
                $(contactForm.contactForm).css("cursor", "auto").prop("disabled", true);
                $(contactForm.loaderIcon).css("display", "block");

                resetAlert();
                alertify.set({
                    labels: {
                        ok: 'Aceptar',
                        cancel: 'Cancelar'
                    }
                });
                data = $(contactForm.contactForm).serializeFormJSON();
                //contactSendPromise = contactForm.sendContacto();
                leadsPromise = contactForm.sendLeads();
                leadsPromise.success( function (data2) {
                    ga('send', 'event', 'button-send-form--contact', jag_product, 'form-contact');
                    setTimeout(function () {
                        setTimeout(function () {
                            //$('#form-wrapper').fadeOut(1000);
                            $('.form-thanks').fadeIn(1000);
                            setTimeout(function() {
                                contactForm.resetContact();
                                alertify.alert("¡Muchas gracias!<br>" + 
                                               "Hemos enviado su formulario exitosamente a un representante de la concesionaria " + jag_agn + ", " +
                                               "En breve nos contactaremos con usted.", function(e) {
                                                    $(location).attr('href', url_location); 
                                               });
                                alertify.success("Datos enviados.");
                            }, 1800);
                        }, 1800);
                    }, 1400);
                });
                leadsPromise.error( function (data2) {
                    contactForm.resetContact();
                    alertify.error("No se han podido enviar los datos <br /> Inténtelo más tarde.");
                });
                /*
                leadsPromise.success(contactForm.handlerPromiseLeads);
                leadsPromise.error(contactForm.handlerPromiseLeads);
                contactForm.sendLeads();
                contactForm.sendContacto();
                contactForm.addContacto();
                */
            }
            
        },
        /*handlerPromiseLeads: function (data) {
            var contactSndPromise;
            contactSndPromise = contactForm.sendContacto();
            contactSndPromise.success(contactForm.handlerPromiseSend);
            contactSndPromise.error(contactForm.handlerPromiseSend);
        },
        sendContacto: function () {
            var urlSen, data;
            data = $(contactForm.contactForm).serializeFormJSON();
            urlSen = GLOBALRootApi;
            return JAG.postalService(urlSen + urlsApi.snd_con, data);
        },*/
        resetContact: function () {
            var $btnSend;
            $btnSend = $(".send_contact_form");
            JAG.resetForm(contactForm.contactForm);
            $(contactForm.loaderIcon).css("display", "none");
            $btnSend.removeAttr("disabled");
        },
        clickSend: function(event) {
            contactForm.handlerPromiseSend();
        }
    }
/* ------------------------------------------------------ *\
    [Methods] jagService
\* ------------------------------------------------------ */
    var jagService = {
        initialized: false,
        initialize: function() {
            if ( this.initizalized ) return;
            this.initialized = true;
            this.build();
        },
        build: function() {
            this.init_hero_slider();
        },
        _init: function() {
            $('.hero-slider').flexslider({ directionNav: false });
        }
    }
/* ------------------------------------------------------ *\
    [Methods] serviceForm
\* ------------------------------------------------------ */
    var serviceForm = {
        sendButtons: "",
        contactForm: "",
        loaderIcon: "",
        sendLeads: function() {
            var data, dataRenamed;
            data = $(serviceForm.contactForm).serializeFormJSON();
            dataRenamed = JAG.renameArrayObjKeys([data], {
                "name": "nombre",
                "lastname": "apellidos",
                "email": "correo",
                "phone": "telefono",
                "agencie": "agencia",
                "product": "producto",
                "comment": "mensaje",
                "business_max": "max_id"
            });
            dataRenamed = dataRenamed[0];
            dataRenamed["news"] = "0";
            dataRenamed["origen_type"] = "2";
            dataRenamed["campaign_max"] = "Contacto Servicio";
            dataRenamed["web_max"] = window.location.href;
            dataRenamed["exit_web"] = window.location.href;
            return JAG.postalService(GLOBALMasterMax, dataRenamed);
        },
        handlerPromiseSend: function(data1) {
            var leadsPromise, jag_agn, jag_pro, rootApi, agn;

            rootApi = JAG.getValue('#master-host');
            url_location = rootApi;
            jag_agn = JAG.getValue("#" + $('.get_agn').attr('id'));
            jag_pro = JAG.getValue("#" + $('.get_pro').attr('id'));

            // Loader Icon
            serviceForm.loaderIcon = "#" + $(this).data("prefix") + "loader_send_icon";
            // Get and save current button id
            serviceForm.sendButton = "#" + $(this).data("prefix") + $(this).attr('id');
            // Get the current form id, find the form with the same data-scope value
            serviceForm.contactForm = "form#" + $(domEl.div_recurrent).find("form[data-scope='" + $(this).data("scope") + "']").attr("id");

            formErrors = formValidation.required(serviceForm.contactForm, '.validate-required', serviceForm.sendButton);
            if (formErrors) {
                $(serviceForm.contactForm).css("cursor", "auto").prop("disabled", true);
                $(serviceForm.loaderIcon).css("display", "block");

                resetAlert();
                alertify.set({
                    labels: {
                        ok: 'Aceptar',
                        cancel: 'Cancelar'
                    }
                });
                data = $(serviceForm.contactForm).serializeFormJSON();
                leadsPromise = serviceForm.sendLeads();
                //serviceSendPromise = serviceForm.sendContacto();
                //serviceSendPromise = serviceForm.addContacto();
                leadsPromise.success( function (data2) {
                    ga('send', 'event', 'button-send-contact-service', jag_agn + " " + jag_pro, 'contact-service');
                    setTimeout(function () {
                        setTimeout(function () {
                            //$('#form-wrapper').fadeOut(1000);
                            $('.form-thanks').fadeIn(1000);
                            setTimeout(function() {
                                serviceForm.resetService();
                                alertify.alert("¡Muchas gracias!<br>" + 
                                               "Hemos enviado su formulario exitosamente a un representante de la concesionaria " + jag_agn + ", " +
                                               "En breve nos contactaremos con usted.", function(e) {
                                                    $(location).attr('href', url_location); 
                                               });
                                alertify.success("Datos enviados.");
                            }, 1800);
                        }, 1800);
                    }, 1400);
                });
                leadsPromise.error( function (data2) {
                    serviceForm.resetService();
                    alertify.error("No se han podido enviar los datos <br /> Inténtelo más tarde.");
                });

                /*
                leadsPromise.success(serviceForm.handlerPromiseLeads);
                leadsPromise.error(serviceForm.handlerPromiseLeads);
                serviceForm.sendLeads();
                serviceForm.sendContacto();
                serviceForm.addContacto();
                */
            }
        },
        /*handlerPromiseLeads: function (data) {
            var contactSndPromise;
            contactSndPromise = serviceForm.sendContacto();
            contactSndPromise.success(serviceForm.handlerPromiseSend);
            contactSndPromise.error(serviceForm.handlerPromiseSend);
        },
        sendContacto: function () {
            var urlSen, data;
            data = $(serviceForm.contactForm).serializeFormJSON();
            urlSen = GLOBALRootApi;
            return JAG.postalService(urlSen + urlsApi.snd_srv, data);
        },*/
        /*addContacto: function () {
            var senId, urlSen, data;
            data = $(serviceForm.contactForm).serializeFormJSON();
            data = JAG.renameArrayObjKeys([data], {
                "cnt_nombre": "nombre",
                "cnt_apellido": "apellidos",
                "cnt_mail": "correo",
                "cnt_telefono": "telefono",
                "cnt_comentario": "mensaje"
            });
            urlSen = JAG.getValue('#master-host');
            return JAG.postalService(urlSen + urlsApi.add_max, data);
        },*/
        resetService: function () {
            var $btnSend;
            $btnSend = $(".send_contact_form");
            JAG.resetForm(serviceForm.contactForm);
            $(serviceForm.loaderIcon).css("display", "none");
            $btnSend.removeAttr("disabled");
        },
        clickSend: function(event) {
            serviceForm.handlerPromiseSend();
        }
    }
/* ------------------------------------------------------ *\
    [Methods] repairsForm
\* ------------------------------------------------------ */
    var repairsForm = {
        /*
        sendButtons: "",
        contactForm: "",
        loaderIcon: "",
        */
        sendLeads: function() {
            var data, dataRenamed;
            data = $(repairsForm.contactForm).serializeFormJSON();
            dataRenamed = JAG.renameArrayObjKeys([data], {
                "name": "nombre",
                "lastname": "apellidos",
                "email": "correo",
                "phone": "telefono",
                "agencie": "agencia",
                "product": "producto",
                "comment": "mensaje",
                "business_max": "max_id"
            });
            dataRenamed = dataRenamed[0];
            dataRenamed["news"] = "0";
            dataRenamed["origen_type"] = "2";
            dataRenamed["campaign_max"] = "Contacto Refaciones";
            dataRenamed["web_max"] = window.location.href;
            dataRenamed["exit_web"] = window.location.href;
            return JAG.postalService(GLOBALMasterMax, dataRenamed);
        },
        handlerPromiseSend: function(data1) {
            var serviceSendPromise, jag_agn, jag_pro, rootApi, agn;

            rootApi = JAG.getValue('#master-host');
            url_location = rootApi;
            jag_agn = JAG.getValue("#" + $('.get_agn').attr('id'));
            jag_pro = JAG.getValue("#" + $('.get_pro').attr('id'));
            resetAlert();
            alertify.set({
                labels: {
                    ok: 'Aceptar',
                    cancel: 'Cancelar'
                }
            });
            data = $(repairsForm.contactForm).serializeFormJSON();
            //serviceSendPromise = repairsForm.addContacto();
            serviceSendPromise = repairsForm.sendContacto();
            serviceSendPromise.success( function (data2) {
                //ga('send', 'event', 'button-send-contact-service', jag_agn + " " + jag_pro, 'contact-service');
                setTimeout(function () {
                    setTimeout(function () {
                        //$('#form-wrapper').fadeOut(1000);
                        $('.form-thanks').fadeIn(1000);
                        setTimeout(function() {
                            repairsForm.resetService();
                            alertify.alert("¡Muchas gracias!<br>" + 
                                           "Hemos enviado su formulario exitosamente a un representante de la concesionaria " + jag_agn + ", " +
                                           "En breve nos contactaremos con usted.", function(e) {
                                                $(location).attr('href', url_location); 
                                           });
                            alertify.success("Datos enviados.");
                        }, 1800);
                    }, 1800);
                }, 1400);
            });
            serviceSendPromise.error( function (data2) {
                repairsForm.resetService();
                alertify.error("No se han podido enviar los datos <br /> Inténtelo más tarde.");
            });
        },
        handlerPromiseLeads: function (data) {
            var contactSndPromise;
            contactSndPromise = repairsForm.sendContacto();
            contactSndPromise.success(repairsForm.handlerPromiseSend);
            contactSndPromise.error(repairsForm.handlerPromiseSend);
        },
        sendContacto: function () {
            var urlSen, data;
            data = $(repairsForm.contactForm).serializeFormJSON();
            urlSen = GLOBALRootApi;
            return JAG.postalService(urlSen + urlsApi.snd_srv, data);
        },
        /*addContacto: function () {
            var senId, urlSen, data;
            data = $(repairsForm.contactForm).serializeFormJSON();
            data = JAG.renameArrayObjKeys([data], {
                "cnt_nombre": "nombre",
                "cnt_apellido": "apellidos",
                "cnt_mail": "correo",
                "cnt_telefono": "telefono",
                "cnt_comentario": "mensaje"
            });
            urlSen = JAG.getValue('#master-host');
            return JAG.postalService(urlSen + urlsApi.snd_srv, data);
        },*/
        resetService: function () {
            var $btnSend;
            $btnSend = $(".send_contact_form");
            JAG.resetForm(repairsForm.contactForm);
            $(repairsForm.loaderIcon).css("display", "none");
            $btnSend.removeAttr("disabled");
        },
        clickSend: function(event) {
            // Loader Icon
            repairsForm.loaderIcon = "#loader_send_icon";
            // Get and save current button id
            repairsForm.sendButton = "#" + $(this).attr('id');
            // Get the current form id, find the form with the same data-scope value
            repairsForm.contactForm = "form#" + $(domEl.div_recurrent).find("form").attr("id");

            formErrors = formValidation.required(repairsForm.contactForm, '.validate-required', repairsForm.sendButton);
            if (formErrors) {
                $(repairsForm.contactForm).css("cursor", "auto").prop("disabled", true);
                $(repairsForm.loaderIcon).css("display", "block");
                leadsPromise = repairsForm.sendLeads();
                leadsPromise.success(repairsForm.handlerPromiseLeads);
                leadsPromise.error(repairsForm.handlerPromiseLeads);
                /*
                repairsForm.sendLeads();
                repairsForm.sendContacto();
                repairsForm.addContacto();
                */
            }
        }
    }
/* ------------------------------------------------------ *\
    [metodos] formValidation
\* ------------------------------------------------------ */
    var formValidation = {
        required: function (form, element, btnSend) {
            var formErrors;
            $(form + " " + btnSend).removeAttr("disabled");
            formErrors = 0;
            $(form + " " + element).each( function (idx) {
                if ( !$.validate_input( $(this) )) {
                    formErrors++;
                    $(this).focus();
                }
            });
            return (formErrors === 0);
        }
    }