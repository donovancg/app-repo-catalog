<?php include "../php/db.php"; ?>

<?php
if(!$connect) {
    echo "connection failed.";
}

$queryCat = "SELECT * FROM categories ORDER BY category asc";
$querySub = "SELECT * FROM subcategories";
$queryItem = "SELECT * FROM items";
$resultCat = mysqli_query($connect, $queryCat);
$resultSub = mysqli_query($connect, $querySub);
$resultItem = mysqli_query($connect, $queryItem);
if(!$resultCat || !$resultSub || !$resultItem) {
    die("ERRORS ENSUE!" . mysqli_error($connect));
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
    <title>Add Category - Garage Catalog</title>
</head>
<body>
    <header class="header">
        <h1 class="heading-primary"><a href="../">Garage Catalog</a></h1>
        <?php include "../php/elements/header-down-1.php"; ?>
    </header>
    <main>
        <section class="section-manage">
            <div class="u-text-align-center">
                <h2 class="heading-secondary">Manage Catalog</h2>
            </div>


            <div class="bars">
                <div class="flex--manage">
                    <div class="flex--manage__col">
                        <h3 class="heading-tertiary">Delete Category</h3>
                        
                        <ul class="bars__ul">
                            <?php
                            
                            while($row = mysqli_fetch_assoc($resultCat)) {
                                ?>
                                <li class="bars__li"><?php echo $row['category'];?> <a href="../php/delete.php?t=0&amp;id=<?php echo $row['id']; ?>"><i class="ion-ios-close bars__icon" title="Delete"></i></a> </li>
                                <?php
                            }

                            ?>
                            
                        </ul>
                    </div>
                    <div class="flex--manage__col">
                        <h3 class="heading-tertiary">Delete Subcategory</h3>
                        
                        <ul class="bars__ul">
                            <?php
                            
                            while($row = mysqli_fetch_assoc($resultSub)) {
                                ?>
                                <li class="bars__li"><?php echo $row['name'];?> <a href="../php/delete.php?t=1&amp;id=<?php echo $row['id']; ?>"><i class="ion-ios-close bars__icon" title="Delete"></i></a> </li>
                                <?php
                            }

                            ?>
                            
                        </ul>
                    </div>
                    <div class="flex--manage__col">
                        <h3 class="heading-tertiary">Delete Item</h3>

                        <ul class="bars__ul">
                            <?php
                            
                            while($row = mysqli_fetch_assoc($resultItem)) {
                                ?>
                                <li class="bars__li"><?php echo $row['name'];?> <a href="../php/delete.php?t=2&amp;id=<?php echo $row['id']; ?>"><i class="ion-ios-close bars__icon" title="Delete"></i></a> </li>
                                <?php
                            }

                            ?>
                            
                        </ul>
                    </div>
                </div>
            
            </div>
            
        </section>
    </main>
</body>
</html>