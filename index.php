<?php

if (isset($_POST['submit'])){ 

$email = $_POST['email'];
$subject = $_POST['subject'];
$pesan = $_POST['pesan'];

$pesan ="pengirirm".$email."\r\n"
         ."dengan pesan".$pesan;

if(mail($email, $subject, $pesan) ){
    echo 'Email sent successfully';
}else{
    echo 'Email not sent';
}

}

?>

<form action="index.php" method="post">
    <input type="email" name="email" placeholder="Email"> <br>
    <input type="text" name="subject" placeholder="Subject"> <br>
    <textarea name="pesan" rows="10" cols="40"></textarea>

    <input type="submit" name="submit" value="Send Email">
    </form>