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
	"dashboard" => array(
		"title" => "",
		"url" => APP_URL,
		"icon" => "fa-home"
	),
	"cadastro" => array(
		"title" => "Cadastro",
		"icon" => "fa-pencil-square-o txt-color-blue",
		"sub" => array(
			"livro" => array(
				"title" => "Livro",
				"icon" => "fa-group",
				"url" => APP_URL."../index.php"
			),
			"usuario" => array(
				"title" => "Usuário",
				"icon" => "fa-group",
				"url" => APP_URL."../index.php"
			)
		)
	),
	"pesquisa" => array(
		"title" => "Pesquisa",
		"icon" => "fa-search txt-color-green",
		"sub" => array(
			"livro" => array(
				"title" => "Livro",
				"icon" => "fa-search-plus",
				"url" => APP_URL."../index.php"
			),
			"usuario" => array(
				"title" => "Usuário",
				"icon" => "fa-search-plus",
				"url" => APP_URL."../index.php"
			)
		)	
	),
	"relatorio" => array(
		"title" => "Relatórios",
		"icon" => "fa-folder txt-color-red",
		"sub" => array(
			"pesquisa" => array(
				"title" => "Ativos no mês",
				"icon" => "fa-folder",
				"url" => APP_URL."/relatorios/gerar_planilha.php"
			)
		)		
	),
	"mensal" => array(
		"title" => "Fechamento Mensal",
		"url" => APP_URL,
		"icon" => "fa-calendar txt-color-yellow",
		"url" => APP_URL."/fechamento_mensal.php"
	),
);

//configuration variables
$page_title = "";
$page_css = array();
$no_main_header = false; //set true for lock.php and login.php
$page_body_prop = array(); //optional properties for <body>
$page_html_prop = array(); //optional properties for <html>
?>