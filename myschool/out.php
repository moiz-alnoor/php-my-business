<?session_start();
    $url = $_SESSION['url'];
    session_destroy();
    header("location:school.php");
?>