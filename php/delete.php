<?php include "db.php"; ?>

<?php

if(isset($_GET['t']) && isset($_GET['id'])) {
    $type = $_GET['t'];
    $id = $_GET['id'];

    if($type == 0) {
        $query = "DELETE FROM categories WHERE id=$id";
    } else if ($type == 1) {
        $query = "DELETE FROM subcategories WHERE id=$id";
    } else if ($type == 2) {
        $query = "DELETE FROM items WHERE id=$id";
    } else {
        header("Location: ../manage/s=-1");
        die();
    }

    $result = mysqli_query($connect, $query);
    if(!$result) {
        die("ERRORS ENSUE!" . mysqli_error($connect));
    } else {
        echo "Item has been successfully deleted.";
        header("Location: ../manage/?s=1");
    }
    
}

?>