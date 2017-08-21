$(document).ready(function() {

    /* ------------------------------------------------------ *\
        [METHOS Control] Serialize Form
    \* ------------------------------------------------------ */

    //This method change a form into a JSON
    $.fn.serializeFormJSON = function() {
        var o = {};
        var a = this.serializeArray();
        $.each(a, function() {
            if (o[this.name]) {
                if (!o[this.name].push) {
                    o[this.name] = [o[this.name]];
                }
                o[this.name].push(this.value || "");
            } else {
                o[this.name] = this.value || "";
            }
        });
        return o;
    };

    /* ------------------------------------------------------ *\
        [METHOS Control] Currency Format
    \* ------------------------------------------------------ */

    Number.prototype.format = function(n, x) {
        var re = '(\\d)(?=(\\d{' + (x || 3) + '}) + ' + (n > 0 ? '\\.' : '$') + ')';
        return this.toFixed(Math.max(0, ~~n)).replace(new RegExp(re, 'g'), '$1,');
    };

    /* ------------------------------------------------------ *\
        EVENT CONTROL
    \* ------------------------------------------------------ */

    $('.nav-container').on('click', '.mobile-toggle', openMenuMethods.clickOpenMenu);

    $('.model-select-block', '.nav-1').hide().css('visibility', 'visible');
    $('div.model-select-block li').mouseover(function() {
        $(this).siblings().stop().animate({
            opacity: 0.5
        }, 300);
    }).mouseout(function(){
        $(this).siblings().stop().animate({
            opacity: 1
        }, 300);
    });
    $('body').on('click', 'ul li:has(ul)', dropdown_methods.dropdown);

    $('.vehicles a','#menu').on('click', openMenuMethods.clickOpenModels);
    $('.agencies a','#menu').on('click', openMenuMethods.clickOpenAgencies);

    $(domEl.div_recurrent).on('click', '#scroll-contacto', scrollContact.init);

    $(".buttons").click(function(){
        $("body, html").animate({
            scrollTop: "0px"
        },300 );
    });

    $(window).scroll(function(){
        if ($(this).scrollTop() > 0){
            $(".buttons").slideDown(300);
        } else {
            $(".buttons").slideUp(300);
        };
    });

    // SLIDE IN PANEL
    $(domEl.div_recurrent).on("click", '.cd-btn', slideInPanel.openSlideInPanel);
    $(domEl.div_recurrent).on("click", '.cd-panel', slideInPanel.closeSlideInPanel);

    // VALIDATE FORM ITEMS
    $(domEl.div_recurrent).on('focusout', '.validate-required', function() { $.validate_input( $(this) ) });

    // SEND CONTACT
    $(domEl.div_recurrent).on("click", '.contact-form-send', contactForm.clickSend);
    
    // SEND FINANCING FORM
    $(domEl.div_recurrent).on("click", '.financing-form-send', financingForm.clickSend);
    $(domEl.div_recurrent).on("click", '.financing-details-form-send', financingForm.clickSend);

    // SEND TESTDRIVE FORM
    $(domEl.div_recurrent).on("click", '.testdrive-form-send', testDriveForm.clickSend);
    $(domEl.div_recurrent).on("click", '.testdrive-details-form-send', testDriveForm.clickSend);

    // SEND SERVICE FORM
    $(domEl.div_recurrent).on("click", ".service-form-send", serviceForm.clickSend);
    // SEND REPAIRS FORM
    $(domEl.div_recurrent).on("click", ".repairs-form-send", repairsForm.clickSend);

    // VIDEO STRIP
    $(domEl.div_recurrent).on('click', '.video-strip .pre-video i', video_strip_methods.video_strip_pre_video);
    $(domEl.div_recurrent).on('click', '.video-strip .close-frame', video_strip_methods.video_strip_close_frame);
    $(domEl.div_recurrent).on('click', '#stop-video', video_strip_methods.stop_video);
});