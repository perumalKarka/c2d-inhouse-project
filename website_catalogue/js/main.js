    /******* Sound Engg filter javaScript Starts ********/
    trackSelection("all");
    function trackSelection(c) {
      
        var x, i;
        x = document.getElementsByClassName("track-block");
        if (c == "all") c = "";
        
        for (i = 0; i < x.length; i++) {
            trackRemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) trackAddClass(x[i], "show");
        }
      
    }

    function trackAddClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {
          element.className += " " + arr2[i];
        }
      }
    }

    function trackRemoveClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
          arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
      }
      element.className = arr1.join(" ");
    }
    
    $('#mytrackContainer .track-inline-item a').on('click', function(event) {
        $("#mytrackContainer .track-inline-item").removeClass("current-tab");
        $(this).parent().addClass("current-tab");
        event.preventDefault();
    });

    $(function() {
        $(".heart").on("click", function() {
          $(this).toggleClass("is-active");
        });
        $('.bt-title [data-toggle="tooltip"]').tooltip({
          template: '<div class="tooltip audio-tool-tip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        });
        $('.widget .socialmedia_network li [data-toggle="tooltip"]').tooltip({
          template: '<div class="tooltip socialmedia-tool-tip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        });
        $('.banner-right-col.overlap-group .plushover-icon[data-toggle="tooltip"]').tooltip({
          template: '<div class="tooltip plushover-tool-tip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        });
    });
    
    /******* Sound Engg filter javaScript End ********/

    
    /****** Careers page filter javascript Starts ******/
    filterSelection("all");
    function filterSelection(c) {

      var x, i;
      x = document.getElementsByClassName("card-block");
      if (c == "all") c = "";
      
      for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
      }
    }

    function w3AddClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {
          element.className += " " + arr2[i];
        }
      }
    }

    function w3RemoveClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
          arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
      }
      element.className = arr1.join(" ");
    }
    
    $('#myBtnContainer .list-inline-item a').on('click', function(event) {
        $("#myBtnContainer .list-inline-item").removeClass("active");
        $(this).parent().addClass("active");
        event.preventDefault();
    });
    /****** Careers page filter javascript Ends ******/

$(document).ready(function() {

    /**** Home page scripts Starts ****/
    $('.client-slider').owlCarousel({
      loop: true,
      margin: 10,
      dots: false,
      nav:true,
      navText:["<img src='images/next-arrow.png'>","<img src='images/prev-arrow.png'>"],
      autoWidth:true,
      autoHeight:true,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        600: {
          items: 3,
          nav: false
        },
        1000: {
          items: 5,
          nav: true,
          loop: false,
          margin: 20
        }
      }
    })

    

    $('.teamMember-lists').on('initialized.owl.carousel changed.owl.carousel', function(e) {
        if (!e.namespace)  {
          return;
        }
        var carousel = e.relatedTarget;
        var carouselLength = carousel.relative(carousel.current()) + 1 + '/' + carousel.items().length;
        $(".teamMember-lists span.counter").remove();
        $('.teamMember-lists .owl-prev').after("<span class='counter'>"+ carouselLength +"</span>");
    }).owlCarousel({
        loop: true,
        margin: 10,
        autoplay:true,
        autoplayTimeout:1000,
        autoplayHoverPause:true,
        dots: false,
        nav:true,
        navText:["<img src='images/testimonial-next.png'>","<img src='images/testimonial-prev.png'>"],
        autoWidth:true,
        autoHeight:true,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: true,
            loop: false,
          },
          767: {
            items: 1,
            nav: true,
            loop: false,
          },
          992: {
            items: 1,
            nav: true,
            loop: false,
            margin: 100
          }
        }
    });  /**** Home page scripts Ends ****/

    /**** Service page scripts Starts ****/
    function fixtitleHeight(){
        var Titleheight = 0;
        var Bodyheight = 0;
        jQuery('.service .service-title').height("100%");
        jQuery('.service-body .service-body--lists').height("100%");

        if(jQuery(window).width() < 250) return false;
                jQuery('.service .service-title').each(function($){
                                        if(jQuery(this).height() > Titleheight){
                                            Titleheight = jQuery(this).height();
                                        }
                });

        if(jQuery(window).width() < 250) return false;
                jQuery('.service-body .service-body--lists').each(function($){
                                        if(jQuery(this).height() > Bodyheight){
                                            Bodyheight = jQuery(this).height();
                                        }
                });
        jQuery('.service .service-title').height(Titleheight);
        jQuery('.service-body .service-body--lists').height(Bodyheight);
    }
    fixtitleHeight(); /**** Service page scripts Ends ****/

    /***** SoundEngg Page scripts starts 
    $("#tile-1 .track-tabs a").click(function() {
        var position = $(this).parent().position();
        var width = $(this).parent().width();
        var height = $(this).parent().height();
          $("#tile-1 .slider").css({"left":+ position.left,"width":width, "height":height});
      });
      var actWidth = $("#tile-1 .track-tabs").find(".current-tab").width();
      var actHeight = $("#tile-1 .track-tabs").find(".current-tab").height();
      var actPosition = $("#tile-1 .track-tabs .current-tab").position();
      $("#tile-1 .slider").css({"left":+ actPosition.left,"width": actWidth,"height": actHeight
    });*****/
});

/****** How we work Scroll Active class jquery Starts *******/
function goToByScroll(id){
    $('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');
}
$(window).scroll(function() {
  var windscroll = $(window).scrollTop();
  
  if (windscroll >= 50) {
      
      $('.rotate-contentarea-toolbar article').each(function(i) {
        // The number at the end of the next line is how pany pixels you from the top you want it to activate.
         
        if ($(this).position().top <= windscroll - 450) {
                $('.rotate-navigation .left-tabs li a.active').removeClass('active');
                $('.rotate-navigation .left-tabs li a').eq(i).addClass('active');
        }
      });

  } else {

      $('.rotate-navigation .left-tabs li a.active').removeClass('active');
      $('.rotate-navigation .left-tabs li:first-child a').addClass('active');
  }
  
}).scroll();


/****** How we work Scroll Active class jquery Ends *******/

/**** Home office & Smallbusiness scripts Starts ****/
function resizeBannerOverlays(){
  $('.ob-icon-row-1').each(function(){
      $w = $('.ob-icon-row-1 .ob-icon-innerrow').width();
      $(this).css( "maxWidth", ( $w ) + "px" );
      $(this).width("100%");
  });
  $('.ob-icon-row-2').each(function(){
      $w = $('.ob-icon-row-2 .ob-icon-innerrow').width();
      $( this ).css( "maxWidth", ( $w ) + "px" );
      $(this).width("100%");
  });
  $('.ob-icon-row-3').each(function(){
      $w = $('.ob-icon-row-3 .ob-icon-innerrow').width();
      $(this).width($w);
  });
}
$(document).ready(function() {
  if ($(window).width() > 1199) {
    resizeBannerOverlays();
  }
});
$(window).resize(function(){ 
  if ($(window).width() > 1199) {
    resizeBannerOverlays();
  }
})

$(document).on('click', '.banner-left-col a[href^=\\#]', function () {
    $('html, body').animate({ scrollTop:  $('section[data-target="'+this.hash.slice(1)+'"]').offset().top }, 1000 );
    return false;
}); /**** Home office & Smallbusiness scripts Ends ****/

/**** Sound Engg page scripts Starts ****/
$(document).ready(function() {
  let inputTagValue = $('input.tag-trap').val();
  let trackLists  = [];
  
  $(".trackadd-btn").on("click", function() {
    if(inputTagValue != null ){
      trackLists = jQuery.makeArray( $('input.tag-trap').val() );
    }
    
    trackLists.push( $(this).attr("data-trackname") );
    track = trackLists.toString();
    $("input[data-role=tagsinput]").tagsinput('add', track );
  });

  $('.per-buttonIn-Voice .voice-selection-arrow').on('click', function(event) {
    $(".per-buttonIn-finalVoice input:text").val($('input.tag-trap').val());
    $("input[data-role=tagsinput]").tagsinput('removeAll');
    event.preventDefault();
  });
  
  $( ".page-home .rectangle-151").on('click', function(event) {
    alert('151');
    var offset = $(this).offset();
    var relativeX = (event.pageX - offset.left);
    var relativeY = (event.pageY - offset.top);
    var searchBar = $(".page-home .rectangle-151 .searchhoverPopup");
    var siblingsBar = $(".page-home .rectangle-152 .searchhoverPopup");
    
    siblingsBar.css( {
      display:"none"
    });
    $(this).css( {
      cursor:"inherit"
    });
    $(".page-home .rectangle-152").css( {
      cursor: "url(images/home-page-search.png),auto",
    });
    if($('.page-home .rectangle-151 .searchhoverPopup').css('display') == 'none'){
        searchBar.css( {
          display:"block",
          position:"absolute",
          "z-index": 2,
          "opacity": 1,
          transition: "all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55)",
          top:relativeY, 
          left: relativeX
    }).show('explode', { pieces: 150 }, 700);
    return false;
      
    }
  });
    
  
  $(".page-home .rectangle-152").click(function(e) {
  
    alert('152');
    var offset = $(this).offset();
    var relativeX = (event.pageX - offset.left);
    var relativeY = (event.pageY - offset.top);
    var searchBar = $(".page-home .rectangle-152 .searchhoverPopup");
    var siblingsBar = $(".page-home .rectangle-151 .searchhoverPopup");
    
    siblingsBar.css( {
      display:"none"
    });
    $(this).css( {
      cursor:"inherit"
    });
    $(".page-home .rectangle-151").css( {
      cursor: "url(images/home-page-search.png),auto",
    });
    if($('.page-home .rectangle-152 .searchhoverPopup').css('display') == 'none' ){
      
      searchBar.css( {
        display:"block",
        position:"absolute",
        "z-index": 2,
        "opacity": 1,
        transition: "all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55)",
        top:relativeY, 
        left: relativeX
      }).show('explode', { pieces: 150 }, 700)
     return false;
    }
    
    e.stopPropagation();
  });
  
  $(".page-home img.plushover-icon").click(function(e) {
    e.stopPropagation();
  });
  
  $(".page-home").click(function(e) {
    var searchBar = $(".page-home .rectangle-152 .searchhoverPopup");
    searchBar.css( {
      display:"none"
    });
  });

  /*****  Landing page banner slider round robin fashion******/
  $('.carousel-fade-1').carousel({
    interval: 6000
  });
  $('.carousel-fade-2').carousel({
    interval: 6000
  });
  
  /******  Go to top scroll options ******/
  $(window).scroll(function() {
    if ($(this).scrollTop() > 20) {
    $('#scrollBtn').fadeIn();
    } else {
    $('#scrollBtn').fadeOut();
    }
  });
    
  $('#scrollBtn').click(function() {
      $("html, body").animate({
      scrollTop: 0
      }, 1000);
      return false;
  });


  
  
});

function handleClick(cb) {
  var condition = cb.checked;
  if(condition == true){
    jQuery(".btn-audio-step-validate").removeAttr("disabled");
  }
  else{
    jQuery(".btn-audio-step-validate").prop('disabled', true);
  }
}

/**** Sound Engg page scripts Starts ****/


// Mythium Archive: https://archive.org/details/mythium/

jQuery(function ($) {
  'use strict'
  var supportsAudio = !!document.createElement('audio').canPlayType;
  if (supportsAudio) {
      // initialize plyr
      var player = new Plyr('#audio1', {
          controls: [
              'restart',
              'play',
              'progress',
              'current-time',
              'duration',
              'mute',
              'volume',
              'download'
          ]
      });
      // initialize playlist and controls
      var index = 0,
          playing = false,
          mediaPath = 'https://archive.org/download/mythium/',
          extension = '',
          tracks = [{
              "track": 1,
              "name": "On the beach",
              "artist": "artist name",
              "thumb": "images/track-thumb-2.png",
              "duration": "2:46",
              "file": "JLS_ATI"
          }, {
              "track": 2,
              "name": "Bora Bora",
              "artist": "artist name",
              "thumb": "images/trackthumbnai-thumbnail.png",
              "duration": "8:30",
              "file": "BS_TF"
          }, {
              "track": 3,
              "name": "Chill out",
              "artist": "artist name",
              "thumb": "images/track-thumb-3.png",
              "duration": "5:01",
              "file": "BS_ATKM"
          }, {
              "track": 4,
              "name": "Jakarta",
              "artist": "artist name",
              "thumb": "images/track-thumb-4.png",
              "duration": "8:31",
              "file": "BSFM_TF"
          }, {
              "track": 5,
              "name": "Chill out",
              "artist": "artist name",
              "thumb": "images/track-thumb-3.png",
              "duration": "5:05",
              "file": "BSFM_ATKM"
          }],
          buildPlaylist = $.each(tracks, function(key, value) {
              var trackNumber = value.track,
                  trackName = value.name,
                  trackArtist = value.artist,
                  trackThumb = value.thumb,
                  trackDuration = value.duration;
              if (trackNumber.toString().length === 1) {
                  trackNumber = '0' + trackNumber;
              }
              

              $('#plList').append('<li class="track-block all reggae"> \
                  <ul class="single-track-list"> \
                      <li><div class="heart"></div></li> \
                      <li> \
                          <div class="track-thumbnail-box">\
                              <img src="' + trackThumb + '" class="track-thumbnail" />\
                          </div>\
                          <div class="track-thumbnail-widget-content">\
                              <h3>' + trackName + '</h3>\
                              <span class="track-artist">' + trackArtist +'</span>\
                          </div>\
                      </li>\
                      <li>\
                        <img src="images/music-bar.png"  class="music-bar-icon"/>\
                        <span class="track-time-stamp">' + trackDuration + '</span>\
                      </li>\
                      <li>\
                        <a href="javascript:void(0)" class="trackadd-btn" data-trackname="' + trackName + '">Add</a>\
                      </li>\
                  </ul>\
              </li>');

          }),

          trackCount = tracks.length,
          npAction = $('#npAction'),
          npTitle = $('#npTitle'),
          audio = $('#audio1').on('play', function () {
              playing = true;
              npAction.text('Now Playing...');
          }).on('pause', function () {
              playing = false;
              npAction.text('Paused...');
          }).on('ended', function () {
              npAction.text('Paused...');
              if ((index + 1) < trackCount) {
                  index++;
                  loadTrack(index);
                  audio.play();
              } else {
                  audio.pause();
                  index = 0;
                  loadTrack(index);
              }
          }).get(0),
          btnPrev = $('#btnPrev').on('click', function () {
              if ((index - 1) > -1) {
                  index--;
                  loadTrack(index);
                  if (playing) {
                      audio.play();
                  }
              } else {
                  audio.pause();
                  index = 0;
                  loadTrack(index);
              }
          }),
          btnNext = $('#btnNext').on('click', function () {
              if ((index + 1) < trackCount) {
                  index++;
                  loadTrack(index);
                  if (playing) {
                      audio.play();
                  }
              } else {
                  audio.pause();
                  index = 0;
                  loadTrack(index);
              }
          }),
          li = $('#plList li').on('click', function () {
              
              var id = parseInt($(this).index());
              if (id !== index) {
                playTrack(id);
              }
          }),
          loadTrack = function (id) {
              $('.plSel').removeClass('plSel');
              $('#plList li:eq(' + id + ')').addClass('plSel');
              npTitle.text(tracks[id].name);
              index = id;
              audio.src = mediaPath + tracks[id].file + extension;
              updateDownload(id, audio.src);
          },
          updateDownload = function (id, source) {
              player.on('loadedmetadata', function () {
                  $('a[data-plyr="download"]').attr('href', source);
              });
          },
          playTrack = function (id) {
              loadTrack(id);
              audio.play();
          };
      extension = audio.canPlayType('audio/mpeg') ? '.mp3' : audio.canPlayType('audio/ogg') ? '.ogg' : '';
      loadTrack(index);
  } else {
      // no audio support
      $('.column').addClass('hidden');
      var noSupport = $('#audio1').text();
      $('.container').append('<p class="no-support">' + noSupport + '</p>');
  }
});
















// Timeline Scroll Section
// --------------------------------------------------------------
var items = $(".timeline li"),
timelineHeight = $(".timeline ul").height(),
greyLine = $('.default-line'),
lineToDraw = $('.draw-line');

// sets the height that the greyLine (.default-line) should be according to `.timeline ul` height

// run this function only if draw line exists on the page
if(lineToDraw.length) {
  $(window).on('scroll', function () {

    // Need to constantly get '.draw-line' height to compare against '.default-line'
    var redLineHeight = lineToDraw.height(),
    greyLineHeight = greyLine.height(),
    windowDistance = $(window).scrollTop(),
    windowHeight = $(window).height() / 2,
    timelineDistance = $(".timeline").offset().top;

    if(windowDistance >= timelineDistance - windowHeight) {
      line = windowDistance - timelineDistance + windowHeight;

      if(line <= greyLineHeight) {
        lineToDraw.css({
          'height' : line + 20 + 'px'
        });
      }
    }

   
    // This takes care of adding the class in-view to the li:before items
    var bottom = lineToDraw.offset().top + lineToDraw.outerHeight(true);
    items.each(function(index){
      var circlePosition = $(this).offset();

      if(bottom > circlePosition.top) {				
        $(this).addClass('in-view');
        $(this).removeClass('hidden');
        
      } else {
        $(this).removeClass('in-view');
        $(this).addClass('hidden');
      }
    });	
    $(document).ready(function(){ 
      var default_height = $(".timeline ul").height();
       
      $(".default-line").height(default_height-20+`px`); 
    });
      
  });
}

var vox_news = 0;
$('.voxNews li').each(function() {
    vox_news += $(this).outerWidth( true );
});

$('.voxNews').parent().append($('.voxNews').clone());
  function setupNews(w) {
      function phase1() {
          var voxNews = $('.voxNews').first(),
              curMargin = voxNews.css('margin-left').replace("px", ""),
              animSpeed = (w*9) - (Math.abs(curMargin)*20);

          voxNews.animate({'margin-left' : '-' + w + 'px'}, animSpeed, 'linear', phase2);
      }
      function phase2() {
          $('.voxNews').first().css({'margin-left' : '0px'});
           phase1();
      }
      $('.voxNews img').hover(function() {
          $('.voxNews').stop();
      }, function() {
          phase1();
      });
      phase1();
  }

setupNews(vox_news);


var vox_news1 = 0;

$('.voxNews1 li').each(function() {
    vox_news1 += $(this).outerWidth( true );
});

$('.voxNews1').parent().append($('.voxNews1').clone());
  function setupNews1(w) {
      function phase1() {
          var voxNews1 = $('.voxNews1').first(),
              curMargin = voxNews1.css('margin-right').replace("px", ""),
              animSpeed = (w*9) - (Math.abs(curMargin)*20);

          voxNews1.animate({'margin-right' : '-' + w + 'px'}, animSpeed, 'linear', phase2);
      }
      function phase2() {
          $('.voxNews1').first().css({'margin-right' : '0px'});
           phase1();
      }
      $('.voxNews1 img').hover(function() {
          $('.voxNews1').stop();
      }, function() {
          phase1();
      });
      phase1();
  }

setupNews1(vox_news1);


// acordian plus symbol



