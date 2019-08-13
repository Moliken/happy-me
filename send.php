<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $name = trim($_POST['NAME']);
    $email = trim($_POST['EMAIL']);
    $date = trim($_POST['DATE']);
    $event = trim($_POST['EVENT']);

    $message = sprintf(
        "New subscribe:\nName: %s\nEmail: %s\nDate: %s\nEvent: %s",
        $name,
        $email,
        $date,
        $event
    );

    file_put_contents("log/email.txt", $message);
}
header("location: /");