<?php
    $name = filter_input(INPUT_POST, 'userContactName');
    $email = filter_input(INPUT_POST, 'userContactEmail');
    $subject = filter_input(INPUT_POST, 'userContactSubject');
    $message = filter_input(INPUT_POST, 'userContactMessage');
    $submit = filter_input(INPUT_POST, 'submit');
    
    /*$name = $_POST['userContactName'];
    $email = $_POST['userContactEmail'];
    $subject = $_POST['userContactSubject'];
    $message = $_POST['userContactMessage'];*/
    
    
    $from = $name; 
    $to = 'apang@uoguelph.ca'; 
    
    
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
    
    if ($submit == true && $name != '' && $email != '' && $subject != '' && $message != '') {
        $sentMsg = mail ($to, $subject, $body, $from);
        if ($sentMsg == true) {
        //alert("Message was sent sucessfully.");
            echo '<p>Your message has been sent!</p>';
        }
        else {
            echo '<p>Message wasn\'t sent</p>';
        }
    }
    else {
        echo '<p>All fields are required</p>';
        echo $name.$email.$subject.$message.$submit;
    }
    
    
    