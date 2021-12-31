@@ -1,5 +1,4 @@
<?php
session_start();
session_unset();
session_destroy();
unset($_SESSION['user']);
header('Location: home.php');
