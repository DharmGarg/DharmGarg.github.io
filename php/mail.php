<?php
//get data from form  

if(isset($_POST['btn-send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    $to = "dam.garg18@gmail.com";

    $subject = "Mail from Website";

    $txt = "Name = ". $name . "\r\n  Email = " . $email . "\r\n  Comments =" . $comment;

    $headers = "From: dam.garg77@gmail.com" . "\r\n" .
    "CC: dam.garg17@gmail.com";

    if($email!=NULL){
        mail($to,$subject,$txt,$headers);
    }
}

else {
        echo "Email can't be send."
}

//redirect
header("Location:thankyou.html");
?>