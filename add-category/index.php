<?php include "../php/db.php"; ?>

<?php
if(!$connect) {
    echo "connection failed.";
}

$query = "SELECT * FROM categories";
$result = mysqli_query($connect, $query);
if(!$result) {
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
        <section class="section-add-category">
            <div class="u-text-align-center">
                <h2 class="heading-secondary">Add a Category</h2>
            </div>
            <div class="category">
                <form action="../php/category.php" method="post" class="form category__form">
                    <div class="form__group">
                        <label for="name" class="form__label category__label">Category Name</label>
                        <input type="text" class="form__input category__input" name="name" autofocus>
                    </div>

                    <input type="submit" class="form__btn form__submit category__btn category__submit" name="submit" value="Submit">

                    
                </form>
            </div>
        </section>
    </main>
</body>
</html>