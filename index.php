<?php
define("BASE_URL", $_SERVER['HTTP_HOST'] . "/nodehtmlx/");
$url = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
$uri = str_replace(BASE_URL, "", $url);
$vRoutes = explode("/", $uri);
switch($vRoutes[0]) {
	case "login":
		require("views/login/login.html");
		break;
	case "inicio":
		require("views/home/inicio.html");
		break;
	case "modulo":
		$modulo = explode("?", $vRoutes[1])[0];
		$path = "views/modulos/" . $modulo . "/view.html";
		if(file_exists($path)) {
			require($path);
		}
		else echo "No existe el módulo " . $modulo . " [" . $path . "]";
		break;
	case "":
		//echo BASE_URL;
		header("Location:http://" . BASE_URL . "inicio");
		break;
	default:
		require($uri);
		break;
}