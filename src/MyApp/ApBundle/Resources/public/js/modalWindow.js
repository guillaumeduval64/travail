$.fn.center = function () {
        this.css("position","absolute");
        this.css("top", ( jQuery(window).height() - this.height() ) / 2+jQuery(window).scrollTop() + "px");
        this.css("left", ( jQuery(window).width() - this.width() ) / 2+jQuery(window).scrollLeft() + "px");
        return this;
      }
 
    $(".modal-profile").center();
 
    $('.modal-lightsout').css("height", jQuery(document).height()); 
 
    $('a[rel="modal-profile"]').click(function() {
        $('.modal-profile').fadeIn("slow");
        $('.modal-lightsout').fadeTo("slow", .9);
    });
 
    $('a.modal-close-profile, .modal-lightsout').click(function() {
        $('.modal-profile').fadeOut("slow");
        $('.modal-lightsout').fadeOut("slow");
    });


    
    
    
    
    