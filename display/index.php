<?php include "../php/db.php"; ?>

<?php
if(!$connect) {
    echo "connection failed.";
}

$isset = null;

if(isset($_GET['c'])) {
    $category = $_GET['c'];
    
            
    if(isset($_GET['s'])) {
        $subcategory = $_GET['s'];
        $text = "View $subcategory in $category";

        $isset = 'both';

        if(isset($_GET['sr'])) {
            if($_GET['sr'] == 'name') {
                $query = "SELECT * FROM items WHERE category='$category' AND subcategory='$subcategory' ORDER BY name asc";
            } else if($_GET['sr'] == 'location') {
                $query = "SELECT * FROM items WHERE category='$category' AND subcategory='$subcategory' ORDER BY location asc";
            } else if($_GET['sr'] == 'category') {
                $query = "SELECT * FROM items WHERE category='$category' AND subcategory='$subcategory' ORDER BY category asc";
            } else {
                $query = "SELECT * FROM items WHERE category='$category' AND subcategory='$subcategory'";
            }
        } else {
            $query = "SELECT * FROM items WHERE category='$category' AND subcategory='$subcategory'";
        }
        
        
        // echo "View " . $_GET['s']  . " in " . $category;
    } else {
        $isset = 'one';

        $text = "View All in $category";


        if(isset($_GET['sr'])) {
            $sort = $_GET['sr'];

            if($sort == 'name') {
                $query = "SELECT * FROM items WHERE category='$category' ORDER BY name asc";
            } else if($sort == 'location') {
                $query = "SELECT * FROM items WHERE category='$category' ORDER BY location asc";
            } else if($sort == 'category') {
                $query = "SELECT * FROM items WHERE category='$category' ORDER BY category asc";
            } else {
                $query = "SELECT * FROM items WHERE category='$category'";
            }
        } else {
            $sort = 'none';
            $query = "SELECT * FROM items WHERE category='$category'";
        }



        
        // echo "View All in " . $category;
    }
} else {
    header("Location: ../");
}

$result = mysqli_query($connect, $query);

if(!$result) {
    die("ERRORS ENSUE!" . mysqli_error($connect));
}

$num_of_rows = mysqli_num_rows($result);

if($num_of_rows == 0) {
    $text = "";
}

function href($isset_var) {
    if($isset_var == 'both') {
        return "?c=" . $_GET['c'] . "&s=" . $_GET['s'];
    } else {
        return "?c=" . $_GET['c'];
    }
}

function sortTable($sort_var, $title) {
    if($sort_var == $title) {
        echo " view__td--sort";
    } else {
        echo "";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <title>Garage Catalog</title>
</head>
<body>
    <header class="header">
        <h1 class="heading-primary"><a href="../">Garage Catalog</a></h1>
        <?php include "../php/elements/header-down-1.php"; ?>
    </header>
    <main>

        <section class="section-view">
            <h2 class="heading-secondary"><?php

            echo $text;

            ?></h2>
            <?php
            
            if($num_of_rows != 0) {
                ?>
                <div class="view">
                    <table class="view__table" id="js--table-sort">
                        <tr class="view__tr view__tr--head">
                            <td class="view__td" id="js--td-sort-0">Sort by name <i class=""></i></td>
                            <td class="view__td" id="js--td-sort-1">Sort by location <i class=""></i></td>
                            <td class="view__td" id="js--td-sort-2">Sort by category <i class=""></i></td>
                        </tr>
                    <?php
                    
                    while($row = mysqli_fetch_assoc($result)) {
                        ?>
                        
                        <tr class="view__tr">
                            <td class="view__td"><?php echo $row['name']; ?></td>
                            <td class="view__td"><?php echo $row['location']; ?></td>
                            <td class="view__td"><?php echo $row['category']; ?></td>
                        </tr>
                        
                        <?php
                    }

                    ?>
                    </table>
                </div>
                <?php
            } else {
                ?>

                <p class="u-text-align-center">No items are in this category.</p>

                <?php
            }

            ?>
            
        </section>
        
    </main>
    <script src="../js/table-sort.js"></script>
</body>
</html>