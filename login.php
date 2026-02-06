<?php include "config.php"; session_start(); ?>
<link rel="stylesheet" href="assets/style.css">

<div class="container">
<h2>تسجيل الدخول</h2>

<form method="post">
<input name="u" placeholder="اسم المستخدم">
<input type="password" name="p" placeholder="كلمة المرور">
<button>دخول</button>
</form>

<?php
if($_POST){
$u=$_POST['u']; $p=$_POST['p'];
$r=$conn->query("SELECT * FROM users WHERE username='$u'");
if($r->num_rows){
$user=$r->fetch_assoc();
if(password_verify($p,$user['password'])){
$_SESSION['user']=$user['id'];
header("Location:index.php");
}
}
echo "❌ بيانات خاطئة";
}
?>
</div>
