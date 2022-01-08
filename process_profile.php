<?php
    // Xử lý giá trị GỬI TỚI
    session_start();
    if(isset($_POST['btnDone'])) {
        $id =   $_POST['idUser'];
        $first = $_POST['txtFirstName'];
        $last = $_POST['txtLastName'];
        $loca = $_POST['txtLocation'];
        $city = $_POST['txtCity'];
        $edu = $_POST['txtEdu'];
        

        // echo $id;
        $conn = mysqli_connect("localhost", "root", "", "btl");
        if(!$conn) {
            die("Not connect database");
        }
    
        // Bước 02: Thực hiện truy vấn
        $sql = "UPDATE db_user SET first_name='$first', last_name='$last', addr = '$loca', city = '$city', education='$edu' WHERE id_user = '$id'";
        // echo $sql;
        $result = mysqli_query($conn,$sql);
                        
        if($result) {
            header("location:http://localhost/BTL/profile.php?id=4");
        } else {
            header("location:http://localhost/BTL/signIn.php?id=4");
        }
    
        // Bước 03: Đóng kết nối
        mysqli_close($conn);
    }

?>