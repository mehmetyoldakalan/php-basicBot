
<?php 
$url = //"www.SiteAdresi.com";
$veri = file_get_contents($url); 
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

-
