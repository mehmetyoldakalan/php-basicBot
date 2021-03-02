<!DOCTYPE html>
<html>
<head>
	<title>bot</title>
</head>
<body>
<?php 
$url = "https://adablog.net/french-press-ile-sutlu-filtre-kahve-yapimi/";
$veri = file_get_contents($url);//file_get_content komutu hedef gösterilen sitenin kaynak kodlarını almaya yarayan komuttur 
$pattern='@<aside id="categories-4" class="widget widget_categories">(.*?)</aside>@si';
preg_match_all($pattern, $veri, $linkler);
$gelenveri=($linkler[1][0]);
$dizi=array();
for ($i=0; $i <10 ; $i++) { 
	$pattern2='@<li class=(.*?)</li>@si';
	preg_match_all($pattern2, $gelenveri, $linkler2);
	
}
print_r($linkler2[1][8]);
 ?>

</body>
</html>