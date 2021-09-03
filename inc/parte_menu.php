"Pesquisa" => array(
		"title" => "Pesquisa",
		"icon" => "fa-search txt-color-red",
		"sub" => array(
			"responsavel" => array(
				"title" => "Pesquisa",
				"icon" => "fa-search",
				"url" => APP_URL."/busca.php"
			)
		)
	),
	"tables" => array(
		"title" => "Relatórios",
		"icon" => "fa-table",
		"sub" => array(
			"normal" => array(
				"title" => "Normal Tables",
				"url" => APP_URL."/table.php"
			),
			"data" => array(
				"title" => "Data Tables",
				"url" => APP_URL."/datatables.php",
				"label_htm" => ' <span class="badge inbox-badge bg-color-greenLight">v1.10</span>'
			),
			"jqgrid" => array(
				"title" => "Jquery Grid",
				"url" => APP_URL."/jqgrid.php"
			)
		)
	),