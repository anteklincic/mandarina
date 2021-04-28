function scrollTo(target) {
  setTimeout(function() {
    var minus = ($(window).width() >= 768 ? 120 : 100);
    $('html, body').animate({ scrollTop: ( $( target ).offset().top - minus ) }, 1500);
  }, 50);
}

// ----------

if (location.hash) {
  if ($('#' + location.hash.substr(1)).length) {
    setTimeout(function() { $('html, body').animate({ scrollTop: 0 }, 1); }, 5);
    setTimeout(function() { scrollTo( '#' + location.hash.substr(1) ); }, 500);
  }
}

$(document).ready(function() {
  
  var touchDevice = false;
  if (navigator.userAgent.match(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/)) {
    touchDevice = true;
  }
  
  // slider - homepage
  if ($('.bxslider-homepage .bxslider').length) {
    $('.bxslider-homepage .bxslider').bxSlider({
      auto: true,
      autoHover: true,
      pause: 5000,
      slideMargin: 0,
      pager: false,
      controls: true,
      touchEnabled: touchDevice
    });
  }
  
  // slider - produkt - supertop
  if ($('.bxslider-product-supertop .bxslider').length) {
    $('.bxslider-product-supertop .bxslider').bxSlider({
      auto: true,
      autoHover: true,
      pause: 5000,
      slideMargin: 0,
      pager: false,
      controls: true,
      touchEnabled: touchDevice
    });
  }
  
  // slider - produkt - horni
  if ($('.bxslider-product .bxslider').length) {
    $('.bxslider-product .bxslider').bxSlider({
      auto: true,
      autoHover: true,
      pause: 5000,
      slideMargin: 0,
      pager: true,
      controls: false,
      adaptiveHeight: false,
      preloadImages: 'all',
      touchEnabled: touchDevice
    });
  }
  
  // slider - produkt - varianty
  if ($('.bxslider-variants .bxslider').length) {
    $('.bxslider-variants .bxslider').bxSlider({
      slideMargin: 30,
      slideWidth: 400,
      minSlides: 1,
      maxSlides: 4,
      pager: false,
      controls: true,
      infiniteLoop: false,
      shrinkItems: true,
      touchEnabled: touchDevice
    });
  }
  
  // lightbox - produkt - varianty
  if ($('.bxslider-variants').length) {
    $('.bxslider-variants').magnificPopup({
  		type: 'image',
      delegate: '.slide a',
  		gallery: { enabled: true }
  	});
  }
  
  // lightbox - produkt
  // https://github.com/sunzxs/magnific-popup-image-and-video-slider
  if ($('.bxslider-product').length) {
    $('.bxslider-product').magnificPopup({
  		type: 'image',
      delegate: '.slide a',
  		gallery: { enabled: true },
      callbacks: {
        elementParse: function(item) {
          //console.log(item.el[0].className);
          if (item.el[0].className == 'play') { item.type = 'iframe'; } else { item.type = 'image'; }
        }
      }
  	});
  }
  
  // lightbox - galerie
  // https://github.com/sunzxs/magnific-popup-image-and-video-slider
  if ($('.galerie').length) {
    $('.galerie').magnificPopup({
  		type: 'image',
      delegate: 'a',
  		gallery: { enabled: true },
      callbacks: {
        elementParse: function(item) {
          //console.log(item.el[0].className);
          if (item.el[0].className == 'play') { item.type = 'iframe'; } else { item.type = 'image'; }
        }
      }
  	});
  }
  
  // active trida pro accordion
  $('.panel-group .panel-collapse.in').parents('.panel').addClass('active');
  $('.panel-group')
  .on('show.bs.collapse', function(e) {
    $(e.target).parents('.panel').addClass('active');
  })
  .on('hide.bs.collapse', function(e) {
    $(e.target).parents('.panel').removeClass('active');
  });
  
  // popover (tooltipy jsou zavedene v common.js)
  $('[data-toggle="popover"]').popover();
  $('.panel-group').on('shown.bs.collapse', function() { $('.panel-group [data-toggle="popover"]').popover(); });
  
  // udelame obsah responzivni
  $('.makeContentResponsive iframe:not(.embed-responsive-item)').addClass('embed-responsive-item').wrap('<div class="embed-responsive embed-responsive-16by9"></div>');
  $('.makeContentResponsive iframe').each(function() {
    if ($(this).attr('src').indexOf('?') < 0) {
      video_id = $(this).attr('src').split('/').pop();
      //$(this).attr('src', 'https://www.youtube.com/embed/' + video_id + '?rel=0&controls=0&loop=1&playlist=' + video_id);
      $(this).attr('src', 'https://www.youtube.com/embed/' + video_id + '?rel=0&controls=0');
    }
  });
  
  // celoklikaci boxy
  $(".product").click(function() {
    location = $('h3 a', this).attr('href');
  });
  $(".product .btn").click(function(e) {
    e.stopPropagation();
  });
  /*$("#product .price").click(function() {
    location = $('a', this).attr('href');
  });*/
  
  // rozklikavaci parametry
  $('.specifikace h3').each(function() { $(this).addClass('slidableTableToggle'); });
  $('.slidableTableToggle').next('table').each(function() { $(this).wrap('<div class="slidableTable"></div>'); });
  $('.slidableTable').each(function() { $(this).wrap('<div class="slidableTableWrapper"></div>'); });
  $('.slidableTableToggle').next('.slidableTableWrapper').each(function() { $(this).find('.slidableTable').hide(); });
  $('.slidableTableToggle').click(function() {
    show = !$(this).hasClass('active');
    $('.slidableTableToggle').removeClass('active'); $('.slidableTable:visible').slideUp(300);
    if (show) { $(this).addClass('active').next('.slidableTableWrapper').find('.slidableTable').slideDown(300); }
  });
  
  // back to top
  $(window).scroll(function() {
    if ($(this).scrollTop() > 50) { $('#btnTop').show(300); } else { $('#btnTop').hide(300); }
  });
  $('#btnTop').click(function() { $('html, body').animate({ scrollTop: 0 }, 'slow'); return false; });
  
  // Animace sjezdu
  $('.scrollTo').click(function(e) {
    if ($( $(this).attr('data-target') ).length) {
      e.preventDefault();
      scrollTo( $(this).attr('data-target') );
    }
  });
  
  // Klonovani obsahu
  $('.cloneFromTo').each(function() {
    if ($( $(this).attr('data-target') ).length) {
      $( $(this).attr('data-target') ).html($(this).html());
    }
  });
  
  // Dolni menu - kotvy - schovame nabidku pro kliku
  $('#menu2 ul li a').click(function() {
    $('#menu2').removeClass('in');
  });
  
  // Fixni menu - horni
  // kvuli obcasnemu pocatecnimu poskoceni pri scrollovani bude fixed hned a pripadne upravy pak podminime pres scrolled
  var header = '#header', header_wrapper = '#wrapper', header_wrapper_padding = null, header_height;
  
  if ($(header).length) {
    function fixedMenu1(action) {
      if (action == 'load' || action == 'resize') {
        $('body').addClass('resizing').removeClass('fixed-header scrolled');
        
        if (header_wrapper_padding == null) { // zjistime pocatecni padding
          header_wrapper_padding = parseFloat($(header_wrapper).css('padding-top'));
        }
        
        header_height = $(header).outerHeight(true);
        
        $('body').removeClass('resizing').addClass('fixed-header');
        $(header_wrapper).css('padding-top', (header_height + header_wrapper_padding) + 'px');
      }
      
      if ($(window).scrollTop() > 0) {
        $('body').addClass('scrolled');
      } else {
        $('body').removeClass('scrolled');
      }
    }
    
    $(window).on('load scroll resize', function(e) { fixedMenu1(e.type); });
  }
  
  // Fixni menu - dolni
  var submenu = '#submenu', submenu_wrapper = '#product2', submenu_wrapper_padding = null, submenu_height, submenu_wrapper_position;
  
  if ($(submenu).length) {
    function fixedMenu2(action) {
      if (action == 'load' || action == 'resize') {
        if (submenu_wrapper_padding == null) { // zjistime pocatecni padding
          submenu_wrapper_padding = parseFloat($(submenu_wrapper).css('padding-top'));
        }
        
        submenu_height = $(submenu).outerHeight(true);
        submenu_wrapper_position = $(submenu_wrapper).offset().top + submenu_height - 200;
      }
      
      if ($(window).scrollTop() > submenu_wrapper_position) {
        $('body').addClass('fixed-submenu');
        $(submenu_wrapper).css('padding-top', (submenu_height + submenu_wrapper_padding) + 'px');
      } else {
        $('body').removeClass('fixed-submenu');
        $(submenu_wrapper).css('padding-top', submenu_wrapper_padding + 'px');
      }
    }
    
    $(window).on('load scroll resize', function(e) { fixedMenu2(e.type); });
  }
  
  // ZVYRAZNOVANI AKTIVNI SEKCE PODLE SCROLLOVANI
  setTimeout(function() {
    var lastHook = '',
        hookMenu = $('#submenu ul'),
        hookMenuHeight = hookMenu.outerHeight() + 200,
        hookMenuItems = hookMenu.find('a');
    
    // najdeme vsechny kotvy (nadpisy)
    var hooks = hookMenuItems.map(function() {
      var hook = $($(this).attr('data-target'));
      if (hook.length) { return hook; }
    });
    
    $(window).scroll(function() {
      var containerFromTop = $(this).scrollTop() + hookMenuHeight;
      
      // najdeme vsechny nadpisy, ktere jsou aktualne nad urovni menu
      var scrolledHooks = hooks.map(function() {
        if ($(this).offset().top < containerFromTop) { return this; }
      });
      
      // vybereme ID posledniho
      currentHook = (scrolledHooks.length ? scrolledHooks[scrolledHooks.length-1][0].id : '');
      //console.debug(currentHook);
      
      if (lastHook != currentHook) {
        lastHook = currentHook;
        hookMenuItems.parent().removeClass('active');
        hookMenuItems.filter('[data-target=#' + currentHook + ']').parent().addClass('active');
      }
    });
  }, 500);
  // /ZVYRAZNOVANI AKTIVNI SEKCE PODLE SCROLLOVANI
  
});