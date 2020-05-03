
<!-- #######  YAY, I AM THE SOURCE EDITOR! #########-->
<h1 style="text-align: center;">Speed Check</h1>
<p>Check your WordPress website's speed with 1 click inside your Dashboard using Google Page Speed Insights. A 10 minute job that will save you a lot of time when you are often optimizing wordpress websites.</p>
<p>&nbsp;</p>
<p>&nbsp;Here is a demo:</p>
<p><a href="https://camo.githubusercontent.com/d91ccc41bbdafeebab59a00e7fdc97f42704d74c/68747470733a2f2f72617a76616e63696c696265616e752e636f6d2f64656d6f2e676966" target="_blank" rel="noopener noreferrer"><img src="https://camo.githubusercontent.com/d91ccc41bbdafeebab59a00e7fdc97f42704d74c/68747470733a2f2f72617a76616e63696c696265616e752e636f6d2f64656d6f2e676966" width="600" height="370" data-canonical-src="https://razvancilibeanu.com/demo.gif" /></a></p>
<p><strong>The way this plugin works is pretty straight forward, it get's website domain and combines it with speedinsights URL then loads it in an iframe:</strong></p>
```php
<p>$uri = $_SERVER['REQUEST_URI']; $protocol = ((!empty($_SERVER['HTTPS']) &amp;&amp; $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://"; $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; $parse = parse_url($url); $path = "https://developers.google.com/speed/pagespeed/insights/?url=" . $parse['host']; echo '&lt;style&gt;#wpbody-content{padding-bottom:0px!important}&lt;/style&gt;'; echo ''; echo '</p>
<p>'; echo '&lt;iframe src="' . $path . '" style=" height: 200vh; width: calc(100% + 18px); border:none; margin:0; padding:0; overflow:hidden; z-index:999999;"&gt;&lt;/iframe&gt;;'; echo '<br />';
```
<p>&nbsp;</p>
<p>Installation: upload <strong>rccp (2).zip</strong> on your website, activate &amp; enjoy or create your own plugin using a boilerplate and just add the code inside speedcheck.php - obviously change extra_post_info_menu() function variables</p>
