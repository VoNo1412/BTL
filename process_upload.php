<?php 
    session_start();
    if(isset($_POST['btnImg'])) {
        $file = $_FILES['file'];

        $fileName = $_FILES['file']['name'];
        $fileTmp = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];
    
        $fileExt = explode(".", $fileName);

        $fileActual = strtolower(end($fileExt));
        $allowd = array('jpg', 'png', 'jpeg', 'pdf');
        if(in_array($fileActual, $allowd)) {
            if($fileError === 0) {
                $fileNameNew = uniqid('', true).'.'.$fileActual;
                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmp, $fileDestination);
                header("location: login_user.php?img=$fileDestination");
            } else {
                echo "You can not upload img";
            }
        } else {
            echo "You can not upload img";
        }
            echo "ABC";
        
        // $conn = mysqli_connect("localhost", "root", "", "btl");
        // if(!$conn) {
        //     die("Connect failure");
        // }

        // $sql = "INSERT INTO db_post(id_user, text_post)
        //  VALUES ('$idUser','$txt_post')";

        // $result = mysqli_query($conn, $sql);

        // if($result) {
        //     header("location: login_user.php");
        // } else {
        //     header("location: signIn.php");
        // }

        // mysqli_close($conn);
    } else {
        echo "error";
    }

?>

