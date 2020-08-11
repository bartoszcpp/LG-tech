(function($) {
    
    // Initialize the Lightbox and add rel="gallery" to all gallery images when the gallery is set up using [gallery link="file"] so that a Lightbox Gallery exists
    $(".wp-block-gallery a[href$='.jpg'], .wp-block-gallery a[href$='.png'], .wp-block-gallery a[href$='.jpeg'], .wp-block-gallery a[href$='.gif']").attr('data-fancybox','gallery').fancybox({
        keyboard: true,
        buttons : [ 
        'slideShow',
        'share',
        'zoom',
        'fullScreen',
        'close'
      ],
        
      
      
       });
      
})(jQuery);