# Speed Check
Check your WordPress website's speed with 1 click inside your Dashboard using Google Page Speed Insights.
A 10 minute job that will save you a lot of time when you are often optimizing wordpress websites.


<img src="https://razvancilibeanu.com/demo.gif" width="600" height="370" />





The way this plugin works is pretty straight forward, it get's website domain and combines it with speedinsights URL then loads it in an iframe:

$uri = $_SERVER['REQUEST_URI'];
    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $parse = parse_url($url);
    $path = "https://developers.google.com/speed/pagespeed/insights/?url=" . $parse['host'];
    echo '<style>#wpbody-content{padding-bottom:0px!important}</style>';
    echo '<body style="background:#fff">';
    echo '<div style="overflow-x: hidden;">';
    echo '<iframe src="' . $path . '" style="  height: 200vh;  width: calc(100% + 18px);  border:none; margin:0; padding:0; overflow:hidden; z-index:999999;"></iframe>;';
    echo '</div>';




Installation:
  upload rccp (2).zip on your website, activate & enjoy or create your own plugin using a boilerplate and just add the code inside
  speedcheck.php - obviously change  extra_post_info_menu() function variables
  
  
