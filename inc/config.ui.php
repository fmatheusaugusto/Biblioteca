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
	"url_target" => "_blank",
	"icon" => "fa-home",
	"label_htm" => "<span>Add your custom label/badge html here</span>",
	"sub" => array() //contains array of sub items with the same format as the parent
)

*/
$page_nav = array(
	"início" => array(
		"title" => "Início",
		"url" => "ajax/dashboard.php",
		"icon" => "fa-home txt-color-yellow"
	),
	"pesquisar" => array(
		"title" => "Pesquisar",
		"icon" => "fa-search txt-color-blue",
		"sub" => array(
			"livro" => array(
				"title" => "Livro",
				"icon" => "fa-book",
				"url" => "ajax/pesquisa_livro.php"
			),
			"usuário" => array(
				"title" => "Usuário",
				"icon" => "fa-user",
				"url" => "ajax/pesquisa_usuario.php",
			),
            "empréstimos" => array(
				"title" => "Empréstimos feitos",
				"icon" => "fa-exchange",
				"url" => "ajax/pesquisa_emprestimo.php"
			)
		)
	),
	"cadastrar" => array(
		"title" => "Cadastrar",
		"icon" => "fa-pencil txt-color-green",
		"sub" => array(
			"livro" => array(
				"title" => "Livros",
				"icon" => "fa-book",
				"url" => "ajax/form-elements.php"
			),
            "usuário" => array(
				"title" => "Usuários",
				"icon" => "fa-user",
				"url" => "ajax/form-templates.php"
			)
		)
	),
	"empréstimos" => array(
		"title" => "Realizar empréstimo",
		"url" => "",
		"icon" => "fa-exchange",
	),
);

//configuration variables
$page_title = "";
$page_css = array();
$no_main_header = false; //set true for lock.php and login.php
$page_body_prop = array(); //optional properties for <body>
$page_html_prop = array(); //optional properties for <html>
?>