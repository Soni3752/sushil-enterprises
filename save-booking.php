<?php
include "../config/db.php";
mysqli_query($conn,"INSERT INTO bookings(name,mobile,device,issue)
VALUES('$_POST[name]','$_POST[mobile]','$_POST[device]','$_POST[issue]')");
header("Location: ../index.php");
?>
