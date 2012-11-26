<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
    <title>South Devon College 2012 Christmas Card</title>
    <link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    <link rel="icon" type="image/png" href="http://southdevon.ac.uk/templates/sdcdefault/favicon.ico" />
    <meta name="Description" content="Welcome to South Devon College's Christmas Card for 2012">
    
<!-- Snow -->
<script type="text/javascript" src="../xmas_card_11/js/snowstorm.js"></script>
<script type="text/javascript">
snowStorm.snowColor = '#FFF';
snowStorm.flakesMaxActive = 84;  // show more snow on screen at once default was 84, (I think)
snowStorm.useTwinkleEffect = true; // let the snow flicker in and out of view
snowStorm.flakeWidth = 20;            // max pixel width for snow element
snowStorm.flakeHeight = 20; 
</script>
<!-- //END Snow -->
</head>
<body>
    <div id="wrapper">
        <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider" style="width: 1024px; height: 768px;">
                <img src="http://southdevon.ac.uk/images/news/all-news/1.jpg" data-thumb="images/toystory.jpg" alt="" />
                <img src="http://southdevon.ac.uk/images/news/all-news/2.jpg" data-thumb="images/toystory.jpg" alt="" />
                <img src="http://southdevon.ac.uk/images/news/all-news/3.jpg" data-thumb="images/toystory.jpg" alt="" />
                <!--
                <a href="http://dev7studios.com"><img src="images/up.jpg" data-thumb="images/up.jpg" alt="" title="This is an example of a caption" /></a>
                <img src="images/walle.jpg" data-thumb="images/walle.jpg" alt="" data-transition="slideInLeft" />
                <img src="images/nemo.jpg" data-thumb="images/nemo.jpg" alt="" title="#htmlcaption" /-->
            </div>
    <?php
function get_user_browser()
{
    $u_agent = $_SERVER['HTTP_USER_AGENT'];
    $ub = '';
    if(preg_match('/MSIE/i',$u_agent))
    {
        $ub = "ie";
    }
    elseif(preg_match('/Firefox/i',$u_agent))
    {
        $ub = "firefox";
    }
    elseif(preg_match('/Safari/i',$u_agent))
    {
        $ub = "safari";
    }
    elseif(preg_match('/Chrome/i',$u_agent))
    {
        $ub = "chrome";
    }
    elseif(preg_match('/Flock/i',$u_agent))
    {
        $ub = "flock";
    }
    elseif(preg_match('/Opera/i',$u_agent))
    {
        $ub = "opera";
    }

    return $ub;
}
?>
    <?php
      $browser = get_user_browser();
      if($browser == "ie"){ ?>
        <object height="81" width="40%"> <param name="movie" value="https://player.soundcloud.com/player.swf?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F19045044&amp;show_comments=false&amp;auto_play=true&amp;color=4f2170"></param> <param name="allowscriptaccess" value="always"></param> <embed allowscriptaccess="always" height="81" src="https://player.soundcloud.com/player.swf?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F19045044&amp;show_comments=false&amp;auto_play=true&amp;color=4f2170" type="application/x-shockwave-flash" width="100%"></embed> </object>
    <?php } else { ?>
  
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
            </div>
              <iframe style="float:right" width="40%" height="166" scrolling="no" frameborder="no" src="http://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F19045044&amp;show_comments=false&amp;auto_play=true&amp;show_artwork=true&amp;color=4f2170"></iframe> 
          <?php } ?>
              
       
        </div>

    </div>
    <script type="text/javascript" src="scripts/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({
          effect: 'fade', // Specify sets like: 'fold,fade,sliceDown'
          animSpeed: 500, // Slide transition speed
          pauseTime: 3000, // How long each slide will show
          });
    });
    </script>  
</body>
</html>
