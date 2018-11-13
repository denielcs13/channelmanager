<?php session_start();
unset($_SESSION["cm_login_admin"]);
unset($_SESSION["cm_login_aby"]);
unset($_SESSION["cm_login_sadmin"]);
unset($_SESSION["cm_login_sstatus"]);
unset($_SESSION["cm_login_sby"]);
echo "<script>window.location.assign('login');</script>";
?>