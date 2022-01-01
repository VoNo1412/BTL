
<?php
    // TRƯỚC KHI CHO NGƯỜI DÙNG TRUY CẬP VÀO CẦN PHẢI KIỂM TRA (KỸ THUẬT SESSION)
    session_start();

    if( isset($_SESSION['isLoginOK'])) // nếu không có tồn tại thì hủy phiên làm việc
    {
        unset($_SESSION['isLoginOK']); // Hủy phiên làm việc 
        header("location:signIn.php"); // chuyển hướng về signIn.php
    }
?>