<!DOCTYPE HTML>
<html>
<?php 
$title = array(
  'Poirot makes an appearance, working with the Gorilla project', 
  'Fun for all with our successful Community Day!',   
  'Greg Fitzgerald strikes Gold with the AoC, with Luke Waldron', 
  'TV presenter Nick Baker joins us for the day',
  'Doing something Funny for Money!', 
  'Iain Stewart joins us for Topping Out ceremony at SWEC', 
  'Students travel 5000 miles to Beijing!', 
  'Students travel 4500 miles in the other direction to Oklahoma!', 
  'Harlem Shake fever hits South Devon College', 
  'Sea King helicopter drops in to say hello!', 
  'Two prestigious Beacon Awards for the College!', 
  'Children in Need face painting fun!', 
  'Construction students raise money making wooden planters', 
  'Successful ‘Have a Go’ days with Galliford Try and local primary schools', 
  'Devon Studio School opens for business!',
  'Rameez Shah wins the National World Skills Championships!', 
  'Joining in the festive fun with local primary school projects', 
  'All aboard the Pilgrim in Brixham, students help to restore', 
  'Colour, movement and dance at the grand opening to our Hair Show', 
  'End of Term - Merry Christmas everyone!'
  );
?>
<head>
<meta charset="UTF-8">
<meta name="Description" content="Welcome to South Devon College's Christmas Card for <?php echo date("Y"); ?>">

<meta property="og:title" content="Welcome to South Devon College's Christmas Card for <?php echo date("Y"); ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="http://www.southdevon.ac.uk/xmas/" />
<meta property="og:image" content="http://southdevon.ac.uk/images/template-images/shared_images/colour-logo.png" />
<meta property="og:description" content="Xmas Card - South Devon College">
<meta property="og:site_name"   content="South Devon College Xmas Card">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Merry Christmas 2013 from South Devon College</title>
<link rel="stylesheet" href="http://reset5.googlecode.com/hg/reset.min.css" type="text/css" />

<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
<link type="text/css" href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">  
<link type="text/css" rel="stylesheet" href="css/bootstrap-responsive.css" />

<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="shortcut icon" href="media/favicon.ico" />

<!-- Google font --> 
<link href='http://fonts.googleapis.com/css?family=Marck+Script' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Mate' rel='stylesheet' type='text/css'> <!-- Used for the countdown page -->
<!-- //END Google font -->

<!-- Nivo JS code -->
<link rel="stylesheet" href="css/nivo-lightbox.css" type="text/css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script>
  $(document).ready(function(){
    $('a.nivo, iframe').nivoLightbox({
      effect: 'fade',      
    });
  });
</script>
<!-- //END PrettyPhoto JS code -->

<!-- Snow -->
<script type="text/javascript" src="js/snowstorm.js"></script>
<script type="text/javascript">
  snowStorm.snowColor = '#FFF';
  snowStorm.flakesMax = 128;  
  snowStorm.flakesMaxActive = 84;  // show more snow on screen at once default was 84, (I think)
  snowStorm.useTwinkleEffect = true; // let the snow flicker in and out of view
  snowStorm.flakeWidth = 20;            // max pixel width for snow element
  snowStorm.flakeHeight = 20; 
  snowStorm.animationInterval = 200000;   
  snowStorm.freezeOnBlur = true;  
</script>
<!-- //END Snow -->


<!-- //END Google Analytics code -->

<!--[if lt IE 9]>
  <link type="text/css" rel="stylesheet" href="css/stupid-ie8.css" />
<![endif]-->


<script type="text/javascript" src="//southdevon.ac.uk/templates/sdc-default/js/modernizr-latest.js"></script>
<?php
 
  function addOrdinalNumberSuffix($num) {
    if (!in_array(($num % 100),array(11,12,13))){
      switch ($num % 10) {
        // Handle 1st, 2nd, 3rd
        case 1:  return $num.'st';
        case 2:  return $num.'nd';
        case 3:  return $num.'rd';
      }
    }
    return $num.'th';
  }
 
?>
<?php include ("../templates/sdcdefault/partials/google_analytics.php"); ?>
</head>
<body>
    <div id="wrapper">
      <div class="container">
        <div class="row-fluid">
          <div class="span2" id="logo">
            <a href="http://www.southdevon.ac.uk">
              <img src="http://southdevon.ac.uk/images/template-images/shared_images/colour-logo.png" title="Visit the South Devon College main website" />
            </a>
          </div>
          <div class="span8">
            <h1>Merry Christmas from South Devon College</h1>
            <i>Inspiring our community through learning for all</i>
            <h4>Turn on your sound and click below for our very own Christmas song!</h4>
          </div>
          <div class="span2 hidden-phone" id="ofsted">
            <a class="ofsted-logo" href="http://www.southdevon.ac.uk/about-us/awards-and-successes">
              <img src="http://southdevon.ac.uk/images/template-images/sdc-home/ofsted.png" title="Visit the South Devon College main website" />
            </a>
          </div>
        </div>
      </div>
      <div id="treasure" class="eggy">http://www.youtube.com/watch?v=B_pWTlN15bc</div>

<?php 
  $d=date("M");  
  if ($d=="Nov") {

    echo '<div class="row-fluid container ferret">';
    for ($j=1; $j<=20; $j++) {    
      if (($j-1)%6==0) {
        echo '</div><div class="row-fluid container">';
      }
      
      if ((int)date('j', time())>=$j) {
        echo '<div id="dec'.$j.'" class="span2 box available">
                <a class="nivo" href="media/large_images/'.$j.'.jpg" data-lightbox-gallery="xmas-card" title="'. $title[$j-1] .'">
                  <span class="img-icon">
                    <img src="media/thumbnails/'.$j.'.png" />
                  </span>
                  <span class="fish-swill">' . addOrdinalNumberSuffix($j) .
                  '</span>
                  
                </a>

              </div>
              
              '."\n";
      } else {
        echo '<div id="dec'.$j.'" class="span2 box notyet">
                <p class="donkey">'. addOrdinalNumberSuffix($j) .'</p>
              </div>
              '."\n";
      }
    }; ?>
 <div class="span4">
     <?php
      function get_user_browser()
      {
          $u_agent = $_SERVER['HTTP_USER_AGENT'];
          $ub = '';
          if(preg_match('/(?i)msie [1-8]/',$_SERVER['HTTP_USER_AGENT']))
          {
              $ub = "ie";
          }
          return $ub;
      }

      $browser = get_user_browser();
      if($browser == "ie"){ ?>        
        <object width="312" height="135"><param name="movie" value="//www.mixcloud.com/media/swf/player/mixcloudLoader.swf?feed=http%3A%2F%2Fwww.mixcloud.com%2Fkevtufc%2Fsouth-devon-college-does-band-aids-do-they-know-christmas%2F&mini=&stylecolor=&hide_artwork=&embed_type=widget_standard&embed_uuid=40befef7-ff2d-4d83-8008-342e05a0a0c9&hide_tracklist=&hide_cover=1&autoplay="></param><param name="allowFullScreen" value="true"></param><param name="wmode" value="opaque"></param><param name="allowscriptaccess" value="always"></param><embed src="//www.mixcloud.com/media/swf/player/mixcloudLoader.swf?feed=http%3A%2F%2Fwww.mixcloud.com%2Fkevtufc%2Fsouth-devon-college-does-band-aids-do-they-know-christmas%2F&mini=&stylecolor=&hide_artwork=&embed_type=widget_standard&embed_uuid=40befef7-ff2d-4d83-8008-342e05a0a0c9&hide_tracklist=&hide_cover=1&autoplay=" type="application/x-shockwave-flash" wmode="opaque" allowscriptaccess="always" allowfullscreen="true" width="312" height="135"></embed></object>
        <!--<iframe width="100%" height="135" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/122421849?&amp;show_comments=false&amp;auto_play=false&amp;show_artwork=true&amp;color=4f2170"></iframe>-->
        <!--<object height="150px" width="100%"> <param name="movie" value="https://player.soundcloud.com/player.swf?url=https%3A//api.soundcloud.com/tracks/122421849?&amp;show_comments=false&amp;auto_play=false&amp;color=4f2170"></param> <param name="allowscriptaccess" value="always"></param> <embed allowscriptaccess="always" height="81" src="https://player.soundcloud.com/player.swf?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F70191463?&amp;show_comments=false&amp;auto_play=true&amp;color=4f2170" type="application/x-shockwave-flash" width="100%"></embed> </object>-->
    <?php } else { ?>
      <iframe width="100%" height="135" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/122421849?&amp;show_comments=false&amp;auto_play=false&amp;show_artwork=true&amp;color=4f2170"></iframe>
      <!--<iframe style="" width="100%" height="135px" scrolling="no" frameborder="no" src="http://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F70191463?&amp;show_comments=false&amp;auto_play=false&amp;show_artwork=true&amp;color=4f2170"></iframe> -->
    <?php } ?>
    
    </div>
    
    <div class="span4 social">
      <div class="row-fluid">
        <p>Share our card on:</p>
      </div>
      <div class="row-fluid">        
        <a class="offset1 span2" href="https://twitter.com/intent/tweet?text=South Devon College's Advent Calendar 2013&amp;url='http://southdevon.ac.uk/xmas-card'&amp;hashtags=southdevoncollege" target="_blank">
          <img title="Share this to Twitter" alt="Twitter icon" src="//southdevon.ac.uk/images/template-images/shared_images/social/twitter.png"></a>
        <a class="span2" href="https://www.facebook.com/sharer/sharer.php?...+South Devon College's Advent Calendar 2013" target="_blank">
          <img title="Share this to Facebook" alt="Facebook icon" src="//southdevon.ac.uk/images/template-images/shared_images/social/facebook.png"></a>
        <a class="span2" href="https://plus.google.com/share?url=southdevon.ac.uk/xmas-card" target="_blank">
          <img title="Share this to Google+" alt="Google+ icon" src="//southdevon.ac.uk/images/template-images/shared_images/social/googleplus.png"></a>            
        <a class="span2" href="http://www.tumblr.com/share?v=3&amp;t=South Devon College's Advent Calendar 2013&amp;u=southdevon.ac.uk/xmas-card" target="_blank">
          <img title="Share this to tumblr" alt="tumblr icon" src="//southdevon.ac.uk/images/template-images/shared_images/social/tumblr.png"></a>
        <!--
        <a class="span2 pintrest" href="//www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark"  data-pin-color="red" target="_blank">
          <img title="Share this to pinterest" alt="pinterest icon" src="//southdevon.ac.uk/images/template-images/shared_images/social/pinterest.png"></a>
        -->
        <a class="span2" href="mailto:?subject=South Devon College's Advent Calendar 2013&amp;body=Check out South Devon College's new Christmas Card for 2013: http%3A%2F%2Fsouthdevon.ac.uk%2Fxmas-card">
          <img title="Share this via email" alt="email icon" src="http://iwanttobe.southdevon.ac.uk/img/social/email.png"></a>
        <span class="span1"></span>
      </div>
      <div class="row-fluid">
        <div class="span12">
          <p class="web-address">http://southdevon.ac.uk</p>
        </div>
      </div>
    </div>
  </div>
</div>
 <?php } else { ?>
   <div class="row-fluid">
    <div class="span12">
      <br />
      <br />
      <h3>Join us on the 1st of December for the start of our South Devon College Advent Calendar…</h3>
    </div>
   </div>
   
   <div class="eggy">http://www.youtube.com/watch?v=B_pWTlN15bc</div>
 <?php } ?>
</body>

<script src="js/hidden.js"></script>

</html>
