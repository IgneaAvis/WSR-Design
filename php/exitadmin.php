<?php
setcookie('admin', $admin['id'], time() - 3600, "/");
header("Location: /")
?>