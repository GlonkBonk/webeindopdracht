<?php
if(isset($_POST['submit'])) {
    $name     = $_POST['name'];
    $email      = $_POST['email'];
    $subject    = $_POST['subject'];
    $message    = $_POST['message'];
    $toDocent      = 'rpanhuysen@glu.nl';
    $from       = $name . ' ' . '<' . $email . '>';
    $headers    = "From:" . $from . "\r\n" . "CC: 200519@student.glu.nl";
    mail($toJan, $subject, $message, $headers);
    header('location: index.php');
}
?>