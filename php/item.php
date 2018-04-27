<?php include "db.php"; ?>
<?php

if(isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $location = mysqli_real_escape_string($connect, $_POST['location']);
    $category = mysqli_real_escape_string($connect, $_POST['category']);
    $subcategory = mysqli_real_escape_string($connect, $_POST['subcategory']);

    $query = "INSERT INTO items (name, location, category, subcategory) VALUES('$name','$location','$category','$subcategory')";
    $result = mysqli_query($connect, $query);
    if(!$result) {
        die("ERRORS ENSUE!");
    }

    header("Location: ../add-item/");
}

?>