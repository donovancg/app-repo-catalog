<?php include "db.php"; ?>

<?php
function es($str) {
    return mysqli_real_escape_string($connect, $str);
}
?>