<?php
require_once '/Twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem("./Settings/");

$twig = new Twig_Environment($loader);

try {
	echo $twig->render('settings.html.twig');
} catch(\Twig_error $e){
	echo $e;
}

?>
