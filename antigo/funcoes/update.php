<?php
require("conectdb.php");
//fun��o inverter data
function inverteData($data)
{
	if (count(explode("/", $data)) > 1) {
		return implode("-", array_reverse(explode("/", $data)));
	} elseif (count(explode("-", $data)) > 1) {
		return implode("/", array_reverse(explode("-", $data)));
	}
} // fim inverterdata
?>
