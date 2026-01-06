<?php
// تمكين تقارير الأخطاء
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// إعداد الاتصال
$host = "db37428.public.databaseasp.net";
$port = 3306; // البورت الافتراضي
$db   = "db37428"; // اسم قاعدة البيانات
$user = "db37428"; // اسم المستخدم
$pass = "8An?x%T26Cz="; // كلمة المرور

// إنشاء الاتصال
$con = mysqli_init();

try {
    mysqli_real_connect($con, $host, $user, $pass, $db, $port);
    echo "Connected successfully!";
} catch (mysqli_sql_exception $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
