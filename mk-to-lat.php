<?php
/*
Plugin Name: Mk-To-Lat
Plugin URI: http://wordpress.org/extend/plugins/cyr2lat/
Description: This plugin convert macedonian cyrillic characters in post title to latin characters. You can use this plugin for creating human-readable links. Original Plugin author is Anton Skorobogatov.
Translated to Macedonian by Goce Ristov.
Author: Atrax
Version: 1.0
*/ 
$tr = array(
   "А"=>"A","Б"=>"B","В"=>"V","Г"=>"G","Д"=>"D",
   "Ѓ"=>"Gj","Е"=>"E","Ж"=>"Zh","З"=>"Z","Ѕ"=>"Dz",
   "И"=>"I","Ј"=>"J","К"=>"K","Л"=>"L","Љ"=>"Lj",
   "М"=>"M","Н"=>"N","Њ"=>"Nj","О"=>"O","П"=>"P",
   "Р"=>"R","С"=>"S","Т"=>"T","Ќ"=>"Kj","У"=>"U",
   "Ф"=>"F","Х"=>"H","Ц"=>"C","Ч"=>"Ch","Џ"=>"Dzh",
   "Ш"=>"Sh","а"=>"a","б"=>"b","в"=>"v","г"=>"g",
   "д"=>"d","ѓ"=>"gj","е"=>"e","ж"=>"zh","з"=>"z",
   "ѕ"=>"dz","и"=>"i","ј"=>"j","к"=>"k","л"=>"l",
   "љ"=>"lj","м"=>"m","н"=>"n","њ"=>"nj","о"=>"o",
   "п"=>"p","р"=>"r","с"=>"s","т"=>"t","ќ"=>"kj",
   "у"=>"u","ф"=>"f","х"=>"h","ц"=>"c","ч"=>"ch",
   "џ"=>"dzh","ш"=>"sh",
  );
 
function sanitize_title_with_translit($title) {
	global $tr;
   	return strtr($title,$tr);
}

add_action('sanitize_title', 'sanitize_title_with_translit', 0);
?>
