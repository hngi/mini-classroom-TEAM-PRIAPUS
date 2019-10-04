<?php
if(
    isset($_POST['n']) && isset($_POST['e']) && isset($_POST['s']) && isset($_POST['m']) 
) {
    $n = $_POST['n'];
    $e = $_POST['e'];
    $s = nl2br($_POST['s']);
    $m = nl2br($_POST['m']);
    $to = "joelsalasijoshua@gmail.com";
    $from = $e;
    $subject = $s;
    $message = '<strong>Name:</strong>'.$n.' <br><strong>Email:</strong> '.$e.'<p>'.$m.'</p>';
    $headers = "From\n";
    $headers = "MIME-Version: 1.0\n";
    $headers = "content-type: text/html; charset=iso-8859-1\n";
    if( mail($to, $subject, $message, $headers) ) {
        echo "success";
    } else {
        echo "Server failed to send mail, try again";
    }

}

?>