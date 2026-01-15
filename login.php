<?php include "../config/db.php"; ?>
<form method="post">
<input name="username" placeholder="Username">
<input name="password" type="password" placeholder="Password">
<button name="login">Login</button>
</form>

<?php
if(isset($_POST['login'])){
 $u=$_POST['username'];
 $p=md5($_POST['password']);
 $q=mysqli_query($conn,"SELECT * FROM admin WHERE username='$u' AND password='$p'");
 if(mysqli_num_rows($q)>0){
   $_SESSION['admin']=$u;
   header("Location: dashboard.php");
 }
}
?>
