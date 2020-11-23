<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header('Location: index.php');
}
    function startSession() {
        session_start();
        if (!isset($_SESSION['username'])) {
        header('Location: '.HOST.'/index.php');
        die();
        }
    }
?>

<h1></h1>
<p>MSSV: 59131563</p>
<p>Học phần: Phát triển phần mềm mã nguồn mở</p>
<p>Lớp: 59.CNTT-2</p>
<p>Khoa: Công nghệ thông tin</p>

<button><a href="index.php?logout=true">Đăng xuất</a></button>