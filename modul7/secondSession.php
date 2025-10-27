<?php
session_start();
$idsession = session_id();
$count = isset($_SESSION['count']) ? $_SESSION['count'] : 0;
session_unset();
session_destroy();
if (ini_get('session.use_cookies')) {
    setcookie(session_name(), '', time() - 42000, '/');
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Demo session – destroy</title>
</head>
<body>
<h1>Demo Session – reset nilai</h1>
<?php
echo "<br> ID Session : " . htmlspecialchars($idsession, ENT_QUOTES, 'UTF-8');
echo "<br> Anda mengakses server ini sebanyak : " . (int)$count;
?>
</body>
</html>