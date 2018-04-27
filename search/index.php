<?php include "../php/db.php"; ?>

<?php
if(!$connect) {
    echo "connection failed.";
}

if(isset($_POST['submit'])) {
    $search = mysqli_real_escape_string($connect, $_POST['search']);

    $query = "SELECT * FROM items WHERE name LIKE '%$search%' or category LIKE '%$search%' or subcategory LIKE '%$search%' or location LIKE '%$search%' or keywords LIKE '%$search%' ORDER BY name asc";
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
        <title>Add Item - Garage Catalog</title>
    </head>
    <body>
        <header class="header">
            <h1 class="heading-primary"><a href="../">Garage Catalog</a></h1>
            <?php include "../php/elements/header-down-1.php"; ?>
        </header>
        <main>
            <section class="section-search">

                <h2 class="heading-secondary">Search results for "<?php echo $search; ?>"</h2>
                

                <div class="view">
                    <table class="view__table">
                        <tr class="view__tr view__tr--head">
                            <td class="view__td">Name</td>
                            <td class="view__td">Category</td>
                            <td class="view__td">Subcategory</td>
                            <td class="view__td">Location</td>
                        </tr>
                        <?php
                
                        while($row = mysqli_fetch_assoc($result)) {
                            ?>
                            
                            <tr class="view__tr">
                                <td class="view__td"><?php echo $row['name']; ?></td>
                                <td class="view__td"><?php echo $row['category']; ?></td>
                                <td class="view__td"><?php echo $row['subcategory']; ?></td>
                                <td class="view__td"><?php echo $row['location']; ?></td>
                            </tr>

                            <?php } ?>
                    </table>
                </div>
                

                

            </section>
        </main>
    </body>
    </html>

    <?php


} else {
    ?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
        <title>Add Item - Garage Catalog</title>
    </head>
    <body>
        <header class="header">
            <h1 class="heading-primary">Garage Catalog</h1>
            <nav class="header__nav">
                
            </nav>
        </header>
        <main>
            <section class="section-search">
                
            </section>
        </main>
    </body>
    </html>
    



    <?php
}


?>