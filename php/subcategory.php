<?php include "db.php"; ?>
<?php

if(isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $category = mysqli_real_escape_string($connect, $_POST['category']);

    $query = "INSERT INTO subcategories (name, category) VALUES('$name', '$category')";
    $result = mysqli_query($connect, $query);
    if(!$result) {
        die("ERRORS ENSUE!" . mysqli_error($connect));
    }

    header("Location: ../");
}

?>