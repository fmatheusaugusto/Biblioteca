<?php

//CONFIGURATION for SmartAdmin UI

//ribbon breadcrumbs config
//array("Display Name" => "URL");
$breadcrumbs = array(
	"Home" => APP_URL
);

/*navigation array config

ex:
"dashboard" => array(
	"title" => "Display Title",
	"url" => "http://yoururl.com",
	"url_target" => "_self",
	"icon" => "fa-home",
	"label_htm" => "<span>Add your custom label/badge html here</span>",
	"sub" => array() //contains array of sub items with the same format as the parent
)

*/
$page_nav = array(
	"inicio" => array(
		"title" => "Início",
		"url" => "index.php",
		"icon" => "fa-home txt-color-yellow"
	),
	"cadastro" => array(
		"title" => "Cadastro",
		"icon" => "fa-pencil-square-o txt-color-green",
		"sub" => array(
			"livro" => array(
				"title" => "Livro",
				"icon" => "fa-book",
				"url" => APP_URL."../index.php"
			),
			"usuario" => array(
				"title" => "Usuário",
				"icon" => "fa-user",
				"url" => APP_URL."../index.php"
			)
		)
	),
	"pesquisa" => array(
		"title" => "Pesquisa",
		"icon" => "fa-search txt-color-blue",
		"sub" => array(
			"livro" => array(
				"title" => "Livro",
				"icon" => "fa-book",
				"url" => APP_URL
			),
			"usuario" => array(
				"title" => "Usuário",
				"icon" => "fa-user",
				"url" => APP_URL
			),
			"emprestimo" => array(
				"title" => "Livros emprestados",
				"icon" => "fa-exchange",
				"url" => APP_URL
			)
		)	
	),
	"emprestimo" => array(
		"title" => "Empréstimos",
		"url" => APP_URL,
		"icon" => "fa-calendar",
		"url" => APP_URL
	),
);

//configuration variables
$page_title = "";
$page_css = array();
$no_main_header = false; //set true for lock.php and login.php
$page_body_prop = array(); //optional properties for <body>
$page_html_prop = array(); //optional properties for <html>
?>