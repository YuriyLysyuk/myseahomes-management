<?php

$method = $_SERVER['REQUEST_METHOD'];

$project_name = 'Менеджмент | Myseahomes';
$admin_email  = 'info@myseahomes.com';
$from_email = 'info@myseahomes.com';
$form_subject = 'Новая заявка c myseahomes.com/management/';

//Script Foreach
$c = true;
if ( $method === 'POST' ) {

	

	foreach ( $_POST as $key => $value ) {
		if ( $value != "" && $key != "project_name" && $key != "admin_email" && $key != "form_subject" ) {
			$message .= "
			" . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
			<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
			<td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
		</tr>
		";
	}
}
} else if ( $method === 'GET' ) {

	foreach ( $_GET as $key => $value ) {
		if ( $value != "" && $key != "project_name" && $key != "admin_email" && $key != "form_subject" ) {
			$message .= "
			" . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
			<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
			<td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
		</tr>
		";
	}
}
}

$message = "<table style='width: 100%;'>$message</table>";

function adopt($text) {
	return '=?UTF-8?B?'.base64_encode($text).'?=';
}

$headers = "MIME-Version: 1.0" . PHP_EOL .
"Content-Type: text/html; charset=utf-8" . PHP_EOL .
'From: '.adopt($project_name).' <'.$from_email.'>' . PHP_EOL .
'Reply-To: '.$admin_email.'' . PHP_EOL;

 mail($admin_email, adopt($form_subject), $message, $headers );


/**
 *  Начало интеграции Amo CRM
 */

$name = $_POST["name"];
$phone = $_POST["phone"];
$pipeline_id = 6149430; // Аренда на северный кипр
$tag = "Management";

require '../amo/amo.php';

/**
 *  Конец интеграции Amo CRM
 */
