<?php
session_unset();
session_destroy();
header("Location:../../user_index.php")
?>