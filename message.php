<?php 
if(isset($_POST['submit'])){
    $to = "gouthamkreddy@gmail.com"; // this is your Email address
    $to1 = "ritambhara@antaragni.in";
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $to2 = "choudharyromit@gmail.com";
    //$last_name = $_POST['name'];
    $subject = "Form submission";
    //$subject2 = "Copy of your form submission";
    $message = $name . "(".$from.")"." wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Mail Sent. Thank you " . $name . ", we will contact you shortly.";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to1;
    mail($to,$subject,$message,$headers);
    mail($to1,$subject,$message,$headers); 
    mail($to2,$subject,$message,$headers); 
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    //echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Loacation: thank_you.php'); to redirect to another page.
    //header('http://localhost/visage_de_ritambhara/index.php');
    }
    header('Location: http://www.antaragni.in/ritambhara/');
?>

￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼