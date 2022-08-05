<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Задание 1
$linux = 'Linux';
$text = "Distributions include the $linux kernel and supporting system software and libraries, many of which are provided by the GNU Project. Many $linux distributions use the word $linux in their name, but the Free Software Foundation uses the name GNU/$linux to emphasize the importance of GNU software, causing some controversy.";

echo $text, '<br>';

// Задание 2
$php = 'PHP';
$text2 = ' '.$php.' is a popular general-purpose scripting language that is especially suited to web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994;the  '.$php.'  reference implementation is now produced by The  '.$php.'  Group.  '.$php.'  originally stood 1994;for Personal Home Page, but it now stands for the recursive initialism  '.$php.' : Hypertext Preprocessor.';

echo $text2, '<br>';


// Задание 3
$text3 = "Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.";

echo $text3, '<br>';

// Задание 4
$name = 'Hello my name BOB';
$name = strtolower($name);
echo $name, '<br>' ;

// Задание 5
$text4 = '<html><body><p>Some text</p></body></html>';
echo strip_tags($text4), '<br>' ;

// Задание 6
$text5 = trim('   Hello   ');
echo $text5, "World", '<br>' ;

// Задание 7
$arr =  ['Wellcome', 'to', 'Hillel'];
echo implode(" ", $arr), '<br>' ;

// Задание 8
$a1 = 12;
$b2 = 9;
$result = ($a1 ** 3) + sqrt ($b2);
echo $result;