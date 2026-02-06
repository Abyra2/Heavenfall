<?php include "config.php"; session_start(); ?>
<link rel="stylesheet" href="assets/style.css">

<div class="container">
<h2>إنشاء حساب</h2>

<form method="post">
<input name="u" placeholder="اسم المستخدم" required>
<input type="password" name="p" placeholder="كلمة المرور" required>
<button>تسجيل</button>
</form>

<?php
if($_POST){
$u=$conn->real_escape_string($_POST['u']);
$p=password_hash($_POST['p'],PASSWORD_DEFAULT);
$conn->query("INSERT INTO users VALUES(NULL,'$u','$p')");
echo "✅ تم إنشاء الحساب";
}
?>
</div>
