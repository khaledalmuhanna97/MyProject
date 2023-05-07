<?php
$fname =     $_POST['fname'];
$lname =     $_POST['lname'];
$email =     $_POST['email'];

$errors = [
    'firstNameError' => '',
    'lastNameError' => '',
    'emailError' => '',
];

    if(isset($_POST['submit'])){


        
        if(empty($fname)){$errors['firstNameError'] = 'يرجى ادخال الاسم الاول';}

        if(empty($lname)){$errors['lastNameError'] = 'يرجـي ادخال الاسم الاخير';}

        if(empty($email)){$errors['emailError'] = 'يرجى ادخال البريد الآلكتروني';}
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){$errors['emailError'] ='البريد الآلكتروني غير صحيح';}
        
        
        if(!array_filter($errors)){
            $fname =     mysqli_real_escape_string($conn, $_POST['fname']);
            $lname =     mysqli_real_escape_string($conn, $_POST['lname']);
            $email =     mysqli_real_escape_string($conn, $_POST['email']);

            $sql = "INSERT INTO users(fname,lname,email)
            VALUES('$fname','$lname','$email')";   

            if(mysqli_query($conn,$sql)){header('Location: ' . $_SERVER['PHP_SELF']);}
            else{echo 'ERROR: ' . mysqli_error($conn);}                   
        }

        }
?>