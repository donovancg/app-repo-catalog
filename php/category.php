<?php include "db.php"; ?>
<?php

if(isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($connect, $_POST['name']);

    $query = "INSERT INTO categories (category) VALUES('$name')";
    $result = mysqli_query($connect, $query);
    if(!$result) {
        die("ERRORS ENSUE!" . mysqli_error($connect));
    }

    header("Location: ../");
}

?>