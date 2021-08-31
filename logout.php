<?php
session_start();
session_destroy();
echo "<script type='text/javascript'>alert('LogOut Berhasil..!'); location.href=\"index.php\";</script>";
?>