<? session_start();
unset($_SESSION["cm_login_admin"]);
unset($_SESSION["cm_login_aby"]);
echo "<script>window.location.assign('../login');</script>";
?>