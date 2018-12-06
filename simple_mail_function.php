<?php
/*
THIS "IF" CHECKS THE TRIGGER TO RUN THE MAIL FUNCTION
REMEMBER TO INSERT THE SUBMIT BUTTON ID IN THE RIGHT PLACE
*/
if(isset($_POST['SUBMIT_ID'])){

//LIST ALL YOU VARIABLES AND REMEMBER TO USE THE RIGHT METHOD ACCORDING TO YOUR FORM
$msg=$_POST['msg'];

//HEADERS - DON'T CHANGE IF YOU'RE NOT SURE ABOUT IT
$msg = preg_replace("/(\\r)?\\n/i", "<br/>", $msg);
$headers = "MIME-Version: 1.1\n";
$headers .= "Content-type: text/html; charset=utf-8\n";

/*
YOU MUST PASS 3 PARAMETER
"DESTINATION EMAIL ADDRESS (COMMA-SEPARATED)", "EMAIL SUBJECT", "EMAIL BODY", "HEADERS"
*/
mail(
"email@email.com.br", "Assunto", "

<h1>YOUR EMAIL BODY GOES HERE. YOU CAN USE TAGS AND VARIABLES</h1>
<p><b>Mensagem:</b> $msg</p>

",
$headers);

//AFTER SENDING YOUR EMAIL YOU CAN DISPLAY A MESSAGE
echo 'FIM';

}; ?>