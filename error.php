<?php include "php/db.php"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Garage Catalog</title>
    
</head>
<body>
    <header class="header">
        <h1 class="heading-primary"><a href="">Garage Catalog</a></h1>
        <nav class="header__nav">
            <ul class="header__ul">
                <li class="header__li"><a href="add-item/" class="header__a">Add Item</a></li>
                <li class="header__li"><a href="add-category" class="header__a">Add Category</a></li>
                <li class="header__li"><a href="add-subcategory" class="header__a">Add Subcategory</a></li>
                <li class="header__li"><a href="manage" class="header__a">Manage</a></li>
                <li class="header__li">
                    <form action="search/" class="header__form" method="post">
                        <input type="text" name="search" class="header__form--input" required>
                        <button name="submit" class="header__form--button"><i class="ion-ios-search"></i></button>
                    </form>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        404
    </main>
</body>
</html>