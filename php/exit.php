<?php
setcookie('user',$user['id'],time() - 3600, "/");
setcookie('admin', $admin['id'], time() - 3600, "/");
header("Location: /")
?>