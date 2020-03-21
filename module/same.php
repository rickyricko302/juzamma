<?php
if ($_GET["type"] !=null){
 if ($_GET["url"] !=null){
 $type = $_GET["type"];
 $url2 = $_GET["url"];
}
 if ($type=="image"){
include ("simple_html_dom.php");
$opts = array(
  'http'=>array(
    'header'=>"User-Agent:Mozilla/5.0 (Linux; Android 8.1.0; Redmi 6A Build/O11019; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/68.0.3440.91 Mobile Safari/537.36"
  )
);

         $context = stream_context_create($opts);
         $html = file_get_html($url2, false, $context);
         foreach ( $html->find('meta[property=og:image]') as $element2){
	 echo $element2->content;
 	 }
} else if ($type=="video"){
  include ("simplehtmldom_1_9/simple_html_dom.php");
$opts = array(
  'http'=>array(
    'header'=>"User-Agent:Mozilla/5.0 (Linux; Android 8.1.0; Redmi 6A Build/O11019; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/68.0.3440.91 Mobile Safari/537.36"
  )
);

         $context = stream_context_create($opts);
         $html = file_get_html($url2, false, $context);
         foreach ( $html->find('meta[property=og:video]') as $element2){
         echo $element2->content;
         }
}}
else{echo "Error Something";}
?>
