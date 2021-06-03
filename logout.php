<?php
setcookie('username', time() - 60 * 60);
setcookie('password', time() - 60 * 60);
header('Location: index.php');