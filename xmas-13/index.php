<!DOCTYPE HTML>
<html>
<?php 
$title = array(
  '\'How can you govern a country which has 246 varieties of cheese?\' - Charles de Gaulle', 
  '\'Poets have been mysteriously silent on the subject of cheese.\' - G.K. Chesterton, Alarms and Discursions', 
  '\'The early bird gets the worm, but the second mouse gets the cheese.\' - Willie Nelson', 
  'Dragon\'s Den winner works with students', 
  'Baby Meerkats born', 
  'Uni Centre official opening', 
  'Help 4 Heroes Fashion Show', 
  'SDC Annual Hairdressing Show', 
  'Energy Centre Launched', 
  'Exterminator 10k Run 2011', 
  'Armed Forces Day', 
  'Mini Ponies join the Animal Care Team', 
  'New Recording Studio Open for Business', 
  'RESULTS DAY', 
  'Students take on community projects', 
  'Children in need', 
  'Public Services Run for Charity', 
  'SDC meets Lord Seb Coe', 
  'SDC is officially a \'Healthy\' College', 
  'Olympic Past, Present & Future at SDC Sports Dinner', 
  'SDC achieves IIP Gold Champion Award', 
  ''
  );
?>
<head>
<meta charset="UTF-8">
<meta name="Description" content="Welcome to South Devon College's Christmas Card for 2013">
<meta property="og:title" content="Welcome to South Devon College's Christmas Card for 2013">
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

<!-- PrettyPhoto JS code -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery-ui-1.8.16.custom.min.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript" charset="utf-8">
  $(document).ready(function(){
    $("a[rel^='prettyPhoto']").prettyPhoto();
  });
</script>
<!-- //END PrettyPhoto JS code -->

<!-- Snow -->
<script type="text/javascript" src="js/snowstorm.js"></script>
<script type="text/javascript">
  snowStorm.snowColor = '#FFF';
  snowStorm.flakesMaxActive = 120;  // show more snow on screen at once default was 84, (I think)
  snowStorm.useTwinkleEffect = true; // let the snow flicker in and out of view
  snowStorm.flakeWidth = 20;            // max pixel width for snow element
  snowStorm.flakeHeight = 20; 
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

</head>
<body>

<?php 
  echo '
    <div id="wrapper">
      <div class="container">
        <div class="cheesy row-fluid">
          <div class="span2" id="logo">
            <a href="http://www.southdevon.ac.uk">
              <img src="http://southdevon.ac.uk/images/template-images/shared_images/colour-logo.png" title="Visit the South Devon College main website" />
            </a>
          </div>
          <div class="span8">
            <h1>Merry Christmas from South Devon College</h1>
            <i>Inspiring our community through learning for all</i>
          </div>
          <div class="span2 hidden-phone" id="ofsted">
            <a class="ofsted-logo" href="http://www.southdevon.ac.uk/about-us/awards-and-successes">
              <img src="http://southdevon.ac.uk/images/template-images/sdc-home/ofsted.png" title="Visit the South Devon College main website" />
            </a>
          </div>
        </div>
      </div>

      ';
    echo ' <div class="row-fluid container ferret">';
    for ($j=1; $j<=20; $j++) {    
      if (($j-1)%6==0) {
        echo '</div><div class="row-fluid container">';
      }
      
      if ((int)date('j', time())>$j) {
        echo '<div id="dec'.$j.'" class="span2 box donught">
                <a href="media/large_images/'.$j.'.jpg" rel="prettyPhoto[pp_gal]" title="'. $title[$j-1] .'">
                  <span class="img-icon">
                    <img src="media/thumbnails/'.$j.'.png" />
                  </span>
                  <span class="fish-swill">' . addOrdinalNumberSuffix($j) .
                  '</span>
                  
                </a>

              </div>
              
              '."\n";
      
      /*
      } elseif (date('j', time())==$j){
        echo '<div id="dec'.$j.'" class="span2 box">
                <a href="media/large_images/'.$j.'.jpg" rel="prettyPhoto[pp_gal]" title="'. $title[$j-1] .'">
                  <img src="media/thumbnails/'.$j.'.png" />
                </a>';
                  echo addOrdinalNumberSuffix($j);    
              '</div>'."\n";
      */
      } else {
        echo '<div id="dec'.$j.'" class="box"><p class="donkey">'.$j.'</p></div>'."\n";
      }
    };

?>
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
?>
    <?php
      $browser = get_user_browser();
      if($browser == "ie"){ ?>
        <object height="150px" width="100%"> <param name="movie" value="https://player.soundcloud.com/player.swf?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F70191463?&amp;show_comments=false&amp;auto_play=true&amp;color=4f2170"></param> <param name="allowscriptaccess" value="always"></param> <embed allowscriptaccess="always" height="81" src="https://player.soundcloud.com/player.swf?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F70191463?&amp;show_comments=false&amp;auto_play=true&amp;color=4f2170" type="application/x-shockwave-flash" width="100%"></embed> </object>
    <?php } else { ?>
  
        <iframe style="" width="100%" height="135px" scrolling="no" frameborder="no" src="http://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F70191463?&amp;show_comments=false&amp;auto_play=true&amp;show_artwork=true&amp;color=4f2170"></iframe> 
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
          <img title="Share this via email" alt="email icon" src="/website_25/images/template-images/shared_images/social/email.png"></a>
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

<!-- Pintrest 
<script type="text/javascript" async src="//assets.pinterest.com/js/pinit.js"></script>
-->
</body>
</html>
