<!DOCTYPE html> 
<html>
<head>
  <title>14J Remote</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="apple-touch-icon-precomposed" href="remote-icon.png" />
  <meta name="apple-mobile-web-app-capable" content="yes" /> 
  <meta name="apple-mobile-web-app-status-bar-style" content="black" /> 
  <link rel="stylesheet" href="jqm/jquery.mobile-1.4.4.min.css" />
  <link rel="stylesheet" href="css/swiper.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700|Roboto:400,700' rel='stylesheet' type='text/css'>  
  
  <style type="text/css">
  
    .hidden {
      visibility: hidden;
    }
    .ui-page-theme-b .ui-btn.green {
      color: #55ff55;
    }
    .ui-page-theme-b .ui-btn.red {
      color: #ff5555;
    }
    .row-2x {
      line-height: 2em;
    }
    .swiper-container {
      padding-bottom: 50px;
    }
    .swiper-pagination-bullet {
      background: #999;
    }
    .swiper-pagination-bullet-active {
      background: #fff;
    }
    
    .ui-page {
      font-family: 'Roboto', sans-serif;
    }
    
    .ui-page .ui-btn {
      text-transform: uppercase;
      font-family: 'Roboto Condensed', sans-serif;
      font-weight: 400;
      padding-left: 0.3em;
      padding-right: 0.3em;
    }
    .ui-page .ui-btn.big {
      font-family: 'Roboto', sans-serif;
      font-weight: 700;
    }
    
  </style>
  
  <script src="jqm/jquery-2.1.1.min.js"></script>
  <script src="jqm/jquery.mobile-1.4.4.min.js"></script>
  <script src="js/web-audio.js"></script>
</head>

<body>

<div data-role="page" id="page" data-theme="b">

  <!-- Swiper container -->
  <div class="swiper-container">
    
    <!-- Additional required Swiper wrapper -->
    <div class="swiper-wrapper">
      
      <!-- Slide 1 : Main controls -->
      <div class="swiper-slide">
              
        <div class="ui-grid-a">
          <div class="ui-block-a">
            <a href="javascript:void(0)" data-cmd="powerAllOn" class="ui-btn ui-corner-all ui-shadow row-2x green big">On</a>
          </div>
          <div class="ui-block-b">
            <a href="javascript:void(0)" data-cmd="powerAllDown" class="ui-btn ui-corner-all ui-shadow row-2x red big">Off</a>
          </div>
        </div>

        <div class="ui-grid-a">
          <div class="ui-block-a">
            <a href="javascript:void(0)" data-cmd="DVRToggle" class="ui-btn ui-corner-all ui-shadow row-2x green big">Cable Pwr</a>
          </div>
          <div class="ui-block-b">
            <a href="javascript:void(0)" data-cmd="volumeUp" class="ui-btn ui-corner-all ui-shadow row-2x">Volume &nbsp;<i class="fa fa-plus"></i></a>
          </div>
        </div>
  
        <div class="ui-grid-a">
          <div class="ui-block-a">
            <a href="javascript:void(0)" data-cmd="Mute" class="ui-btn ui-corner-all ui-shadow row-2x">Mute</a>
          </div>
          <div class="ui-block-b">
            <a href="javascript:void(0)" data-cmd="volumeDown" class="ui-btn ui-corner-all ui-shadow row-2x">Volume &nbsp;<i class="fa fa-minus"></i></a>
          </div>
        </div>

        <h3 class="ui-bar ui-bar-b">Switch Inputs</h3>
        <div class="ui-grid-b">
          <div class="ui-block-a">
            <a href="javascript:void(0)" data-cmd="setReceiverCable" class="ui-btn ui-corner-all ui-shadow">Apple TV</a>
          </div>
          <div class="ui-block-b">
            <a href="javascript:void(0)" data-cmd="setReceiverComputer" class="ui-btn ui-corner-all ui-shadow">PC</a>
          </div>
          <div class="ui-block-c">
            <a href="javascript:void(0)" data-cmd="setReceiverNetflix" class="ui-btn ui-corner-all ui-shadow">Netflix</a>
          </div>
        </div>
        <div class="ui-grid-b">
          <div class="ui-block-a">
            <a href="javascript:void(0)" data-cmd="setReceiverWii" class="ui-btn ui-corner-all ui-shadow">Wii</a>
          </div>
          <div class="ui-block-b">
            <a href="javascript:void(0)" data-cmd="setReceiverVizio" class="ui-btn ui-corner-all ui-shadow">Vizio</a>
          </div>
          <div class="ui-block-c">
            <a href="javascript:void(0)" data-cmd="setReceiverXBox" class="ui-btn ui-corner-all ui-shadow">XBox</a>
          </div>
        </div>
      </div> <!-- /Slide 1 -->
      
      <!-- Slide 2 -->
      <div class="swiper-slide">
                
        <div class="ui-grid-b">
          <div class="ui-block-a">
            <a href="javascript:void(0)" data-cmd="PageUp" class="ui-btn ui-corner-all ui-shadow row-2x">Pg &nbsp;<i class="fa fa-plus"></i></a>
          </div>
          <div class="ui-block-b">
            <a href="javascript:void(0)" data-cmd="Up" class="ui-btn ui-corner-all ui-shadow"><i class="fa fa-caret-up fa-2x"></i></a>
          </div>
          <div class="ui-block-c">
            <a href="javascript:void(0)" data-cmd="ChannelUp" class="ui-btn ui-corner-all ui-shadow row-2x">Ch &nbsp;<i class="fa fa-plus"></i></a>
          </div>
        </div>
        <div class="ui-grid-b">
          <div class="ui-block-a">
            <a href="javascript:void(0)" data-cmd="Left" class="ui-btn ui-corner-all ui-shadow"><i class="fa fa-caret-left fa-2x"></i></a>
          </div>
          <div class="ui-block-b">
            <a href="javascript:void(0)" data-cmd="Enter" class="ui-btn ui-corner-all ui-shadow row-2x">Sel</a>
          </div>
          <div class="ui-block-c">
            <a href="javascript:void(0)" data-cmd="Right" class="ui-btn ui-corner-all ui-shadow"><i class="fa fa-caret-right fa-2x"></i></a>
          </div>
        </div>
        <div class="ui-grid-b">
          <div class="ui-block-a">
            <a href="javascript:void(0)" data-cmd="PageDown" class="ui-btn ui-corner-all ui-shadow row-2x">Pg &nbsp;<i class="fa fa-minus"></i></a>
          </div>
          <div class="ui-block-b">
            <a href="javascript:void(0)" data-cmd="Down" class="ui-btn ui-corner-all ui-shadow"><i class="fa fa-caret-down fa-2x"></i></a>
          </div>
          <div class="ui-block-c">
            <a href="javascript:void(0)" data-cmd="ChannelDown" class="ui-btn ui-corner-all ui-shadow row-2x">Ch &nbsp;<i class="fa fa-minus"></i></a>
          </div>
        </div>
        
        <h3 class="ui-bar ui-bar-b">Cable/Vizio Navigation</h3>
        
        <div class="ui-grid-b">
          <div class="ui-block-a">
            <a href="javascript:void(0)" data-cmd="Guide" class="ui-btn ui-corner-all ui-shadow row-2x">Guide</a>
          </div>
          <div class="ui-block-b">
            <a href="javascript:void(0)" data-cmd="Info" class="ui-btn ui-corner-all ui-shadow row-2x">Info</a>
          </div>
          <div class="ui-block-c">
            <a href="javascript:void(0)" data-cmd="Exit" class="ui-btn ui-corner-all ui-shadow row-2x">Exit</a>
          </div>
        </div>
        
        <div class="ui-grid-c">
          <div class="ui-block-a">
            <a href="javascript:void(0)" data-cmd="Rewind" class="ui-btn ui-corner-all ui-shadow"><i class="fa fa-backward fa-2x"></i></a>
          </div>
          <div class="ui-block-b">
            <a href="javascript:void(0)" data-cmd="Play" class="ui-btn ui-corner-all ui-shadow"><i class="fa fa-play fa-2x"></i></a>
          </div>
          <div class="ui-block-c">
            <a href="javascript:void(0)" data-cmd="Pause" class="ui-btn ui-corner-all ui-shadow"><i class="fa fa-pause fa-2x"></i></a>
          </div>
          <div class="ui-block-d">
            <a href="javascript:void(0)" data-cmd="Forward" class="ui-btn ui-corner-all ui-shadow"><i class="fa fa-forward fa-2x"></i></a>
          </div>
        </div>
        
      </div> <!-- /Slide 2 -->
      
      <!-- Slide 3 -->
      <div class="swiper-slide">
                
        <div class="ui-grid-a">
          <div class="ui-block-a">
            <a href="javascript:void(0)" data-cmd="NatGeo" class="ui-btn ui-corner-all ui-shadow">Nat Geo</a>
          </div>
          <div class="ui-block-b">
            <a href="javascript:void(0)" data-cmd="HBO" class="ui-btn ui-corner-all ui-shadow">HBO</a>
          </div>
        </div>
        <div class="ui-grid-a">
          <div class="ui-block-a">
            <a href="javascript:void(0)" data-cmd="ComedyCentral" class="ui-btn ui-corner-all ui-shadow">Comedy Central</a>
          </div>
          <div class="ui-block-b">
            <a href="javascript:void(0)" data-cmd="ESPN" class="ui-btn ui-corner-all ui-shadow">ESPN</a>
          </div>
        </div>
        <div class="ui-grid-a">
          <div class="ui-block-a">
            <a href="javascript:void(0)" data-cmd="RedZone" class="ui-btn ui-corner-all ui-shadow">RedZone</a>
          </div>
          <div class="ui-block-b">
            <a href="javascript:void(0)" data-cmd="FoxNews" class="ui-btn ui-corner-all ui-shadow">Fox News</a>
          </div>
        </div>
        <div class="ui-grid-a">
          <div class="ui-block-a">
            <a href="javascript:void(0)" data-cmd="Random" class="ui-btn ui-corner-all ui-shadow">Random</a>
          </div>
          <div class="ui-block-b">
            <a href="javascript:void(0)" data-cmd="Bears" class="ui-btn ui-corner-all ui-shadow">Bears</a>
          </div>
        </div>
        
        <h3 class="ui-bar ui-bar-b">Favorites</h3>
        
        <div class="ui-grid-a">
          <div class="ui-block-a">
            <a href="javascript:void(0)" data-cmd="NBC" class="ui-btn ui-corner-all ui-shadow">NBC</a>
          </div>
          <div class="ui-block-b">
            <a href="javascript:void(0)" data-cmd="Revolt" class="ui-btn ui-corner-all ui-shadow">Revolt</a>
          </div>
        </div>
        <div class="ui-grid-a">
          <div class="ui-block-a">
            <a href="javascript:void(0)" data-cmd="DKR" class="ui-btn ui-corner-all ui-shadow">DKR</a>
          </div>
          <div class="ui-block-b">
            <a href="javascript:void(0)" data-cmd="Interstellar" class="ui-btn ui-corner-all ui-shadow">Interstellar</a>
          </div>
        </div>
        
      </div> <!-- /Slide 3 -->
      
      <!-- Slide 4 -->
      <div class="swiper-slide">
        <div class="ui-grid-b">
          <div class="ui-block-a">
            <a href="javascript:void(0)" data-cmd="1" class="ui-btn ui-corner-all ui-shadow big">1</a>
          </div>
          <div class="ui-block-b">
            <a href="javascript:void(0)" data-cmd="2" class="ui-btn ui-corner-all ui-shadow big">2</a>
          </div>
          <div class="ui-block-c">
            <a href="javascript:void(0)" data-cmd="3" class="ui-btn ui-corner-all ui-shadow big">3</a>
          </div>
        </div>
        <div class="ui-grid-b">
          <div class="ui-block-a">
            <a href="javascript:void(0)" data-cmd="4" class="ui-btn ui-corner-all ui-shadow big">4</a>
          </div>
          <div class="ui-block-b">
            <a href="javascript:void(0)" data-cmd="5" class="ui-btn ui-corner-all ui-shadow big">5</a>
          </div>
          <div class="ui-block-c">
            <a href="javascript:void(0)" data-cmd="6" class="ui-btn ui-corner-all ui-shadow big">6</a>
          </div>
        </div>
        <div class="ui-grid-b">
          <div class="ui-block-a">
            <a href="javascript:void(0)" data-cmd="7" class="ui-btn ui-corner-all ui-shadow big">7</a>
          </div>
          <div class="ui-block-b">
            <a href="javascript:void(0)" data-cmd="8" class="ui-btn ui-corner-all ui-shadow big">8</a>
          </div>
          <div class="ui-block-c">
            <a href="javascript:void(0)" data-cmd="9" class="ui-btn ui-corner-all ui-shadow big">9</a>
          </div>
        </div>
        <div class="ui-grid-b">
          <div class="ui-block-a">
            <a href="javascript:void(0)" data-cmd="Last" class="ui-btn ui-corner-all ui-shadow">Last</a>
          </div>
          <div class="ui-block-b">
            <a href="javascript:void(0)" data-cmd="0" class="ui-btn ui-corner-all ui-shadow big">0</a>
          </div>
          <div class="ui-block-c">
            <a href="javascript:void(0)" data-cmd="Enter" class="ui-btn ui-corner-all ui-shadow">Enter</a>
          </div>
        </div>
        
        <h3 class="ui-bar ui-bar-b">Keypad</h3>
        
      </div> <!-- /Slide 4 -->
      
    </div> <!-- /Required Swiper wrapper -->
    
    <!-- Swiper pagination -->
    <div class="swiper-pagination"></div>
    
  </div>
  
  <!--<h3 class="ui-bar ui-bar-b">Switch Inputs</h3>
  <div class="ui-grid-c">
    <div class="ui-block-a">
      <a href="javascript:void(0)" data-cmd="System" class="ui-btn ui-corner-all ui-shadow">Cable</a>
    </div>
    <div class="ui-block-b">
      <a href="javascript:void(0)" data-cmd="System32" class="ui-btn ui-corner-all ui-shadow">PC</a>
    </div>
    <div class="ui-block-c">
      <a href="javascript:void(0)" data-cmd="setReceiverXBox" class="ui-btn ui-corner-all ui-shadow">XBox</a>
    </div>
    <div class="ui-block-d">
      <a href="javascript:void(0)" data-cmd="setReceiverWii" class="ui-btn ui-corner-all ui-shadow">Wii</a>
    </div>
  </div>-->
  
</div>

<script src="js/swiper.jquery.min.js"></script>
  
<script>
$(document).on("pagecreate", "#page", function(e, ui) {
  console.log(e);
  
  window.AudioContext = window.AudioContext || window.webkitAudioContext;
  window.audioContext = new window.AudioContext();
  var clickSound = new WebAudioAPISound("audio/two-tone-nav");
  
  $(this).find('.ui-btn').on($.support.touch ? 'touchstart' : 'click', function(e) {
    clickSound.play();
    if ($(this).data('cmd') !== '' && $(this).data('cmd') !== null) { 
      $.get("udp.php?cmd=" + encodeURIComponent($(this).data('cmd')));
    }
  });
  
  $(function() {
    var $swiper = new Swiper('.swiper-container', {
      direction: 'horizontal',
      threshold: 10,
      pagination: '.swiper-pagination'
    });
  });

});
</script>

</body>
</html>
