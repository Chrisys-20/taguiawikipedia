<?php
$from = $_POST['email'];
$to      = 'chrisysdata@gmail.com';
$subject = 'Besoin emis à partir du blog ';
$message = 'hello';
$headers = "From:" . $from;


// mail($to, $subject, $message, $headers);
$_POST['name'];
$_POST['email'];
$_POST['phone'];
$_POST['company'];
$_POST['comments'];

mail($to, $subject, $message, $headers);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
</head>

<body>
    <div>
        <p>
        <ul>
            <h4 style="color: yellowgreen;">Message envoyé!!!</h4>
            <!-- <li>Nom : <?= $_POST['name'] ?> </li>
            <li>Email : <?= $_POST['email'] ?></li>
            <li>Contact :<?= $_POST['phone'] ?></li>
            <li>prenom : <?= $_POST['company'] ?> </li>
            <li>Age : <?= $_POST['comments'] ?> </li> -->
        </ul>
        </p>
    </div>
</body>

</html>