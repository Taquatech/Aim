<?php
//send an email
    /*$mpdf->WriteHTML(utf8_encode($html),\Mpdf\HTMLParserMode::HTML_BODY,2);
    $content = $mpdf->Output('', 'S');
    $content = chunk_split(base64_encode($content));
    $mailto = $Email; //Mailto here
    $from_name = 'UNIUYO'; //Name of sender mail
    $from_mail = 'esupport@uniuyo.edu.ng'; //Mailfrom here
    
    $message = $emailcontents;
    $filename = $RegNo. "-".date("Y-m-d H:i:s"); //Your Filename with local date and time
    //Headers of PDF and e-mail
    $boundary = "XYZ-" . date("dmYis") . "-ZYX";
    $header = "--$boundary\r\n";
    $header .= "Content-Transfer-Encoding: 8bits\r\n";
    $header .= "Content-Type: text/html; charset=ISO-8859-1\r\n\r\n"; // or utf-8
    $header .= "$message\r\n";
    $header .= "--$boundary\r\n";
    $header .= "Content-Type: application/pdf; name=\"".$filename."\"\r\n";
    $header .= "Content-Disposition: attachment; filename=\"".$filename."\"\r\n";
    $header .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $header .= "$content\r\n";
    $header .= "--$boundary--\r\n";
    $header2 = "MIME-Version: 1.0\r\n";
    $header2 .= "From: ".$from_name." \r\n";
    $header2 .= "Return-Path: $from_mail\r\n";
    $header2 .= "Content-type: multipart/mixed; boundary=\"$boundary\"\r\n";
    $header2 .= "$boundary\r\n";
    mail($mailto,$subject,$header,$header2, "-r".$from_mail);*/
    //send an email
    //email
    ?>