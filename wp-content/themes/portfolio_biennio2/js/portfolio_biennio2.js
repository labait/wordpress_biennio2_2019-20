// alert("ciao");



(function($){
    $(function(){ // <--- onLoad
    
      new WOW({
        callback: function (o) {
          $(o).addClass("visible")
        }
      }).init();


      // typed
      var typed_pause = 1000;
      if($('#typed1').length > 0) {
        var typed1 = new Typed('#typed1', {
          strings: ["developer. ^" + typed_pause, "designer. ^" + typed_pause],
          typeSpeed: 100,
          backSpeed: 20,
          loop: true
        });
      }


      // isotope
      $('.grid').isotope({
        itemSelector: '.grid-item',
        percentPosition: true,
        layoutMode: 'masonry'        
      });

    })
})(jQuery)
