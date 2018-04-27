<?php include "../php/db.php"; ?>

<?php
if(!$connect) {
    echo "connection failed.";
}

$query = "SELECT * FROM categories ORDER BY category asc";
$result = mysqli_query($connect, $query);
if(!$result) {
    die("ERRORS ENSUE!" . mysqli_error($connect));
}

$query2 = "SELECT * FROM subcategories ORDER BY category asc";
$result2 = mysqli_query($connect, $query2);
if(!$result2) {
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
    <title>Add Item - Garage Catalog</title>
</head>
<body>
    <header class="header">
        <h1 class="heading-primary"><a href="../">Garage Catalog</a></h1>
        <?php include "../php/elements/header-down-1.php"; ?>
    </header>
    <main>

        <section class="section-add-item">
            <div class="u-text-align-center">
                <h2 class="heading-secondary">Add an Item</h2>
            </div>
            <div class="item">
                <form action="../php/item.php" method="post" class="form item__form">
                    <div class="form__group">
                        <label for="name" class="form__label item__label">Item Name</label>
                        <input type="text" class="form__input item__input" name="name" autofocus>
                    </div>

                    <div class="form__group">
                        <label for="location" class="form__label item__label">Item Location</label>
                        <input type="text" class="form__input item__input" name="location">
                    </div>

                    <div class="form__group">
                        <label for="category" class="form__label item__label">Item Category</label>
                        <select name="category" class="form__select item__select">
                            <option value="">Please select an option.</option>

                            <?php
                            
                            while($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <option value="<?php echo $row['category'] ?>"><?php echo $row['category'] ?></option>
                            
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form__group">
                        <label for="subcategory" class="form__label item__label">Item Subcategory</label>
                        <select name="subcategory" class="form__select item__select">
                            <option value="">Please select an option.</option>

                            <?php
                            
                            while($row2 = mysqli_fetch_assoc($result2)) {
                            ?>
                                <option value="<?php echo $row2['name'] ?>"><?php echo $row2['category'] . ": " . $row2['name'] ?></option>
                            
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form__group">
                        <label for="subcategory" class="form__label item__label">Keywords <span class="u-italics">(optional)</span></label>
                        <textarea name="keywords" class="form__textarea"></textarea>
                    </div>

                    <input type="submit" class="form__btn form__submit item__btn item__submit" name="submit" value="Submit">

                    
                </form>
            </div>
        </section>
        
    </main>
</body>
</html>