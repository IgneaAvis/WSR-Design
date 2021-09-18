<?php
setcookie('user',$user['id'],time() - 3600, "/");
header("Location: /")
?>