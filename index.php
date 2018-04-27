<?php include "php/db.php"; ?>

<?php
if(!$connect) {
    echo "connection failed.";
}

?>


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
        <?php include "php/elements/header-root.php"; ?>
    </header>
    <main>
        <div class="section-grid">

            <div class="flex">
                
                    <!-- <div class="flex__col">
                        <h3 class="heading-tertiary">Astronomy</h3>
                        <div class="flex__list">
                            <ul class="flex__ul">
                                <li class="flex__li"><a href="#" class="flex__a">Accessories</a></li>
                                <li class="flex__li"><a href="#" class="flex__a">Tools</a></li>
                                <li class="flex__li"><a href="#" class="flex__a">Parts</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex__col">
                        <h3 class="heading-tertiary">Auto</h3>
                    </div>
                    <div class="flex__col">
                        <h3 class="heading-tertiary">Chemicals</h3>
                    </div>
                    <div class="flex__col">
                        <h3 class="heading-tertiary">Electrical</h3>
                    </div>
                

                
                    <div class="flex__col">
                        <h3 class="heading-tertiary">Hardware</h3>
                    </div>
                    <div class="flex__col">
                        <h3 class="heading-tertiary">Lighting</h3>
                    </div>
                    <div class="flex__col">
                        <h3 class="heading-tertiary">Outdoor Living</h3>
                    </div>
                    <div class="flex__col">
                        <h3 class="heading-tertiary">Paint</h3>
                    </div>

                
                    <div class="flex__col">
                        <h3 class="heading-tertiary">Plumbing</h3>
                    </div>
                    <div class="flex__col">
                        <h3 class="heading-tertiary">Lawn and Garden</h3>
                    </div> -->


                <?php
                
                $query = "SELECT * FROM categories ORDER BY category asc";
                $sub_query = "SELECT * FROM subcategories ORDER BY name asc";

                $result = mysqli_query($connect, $query);

                if(!$result) {
                    die("ERRORS ENSUE!");
                }
                
                $num_of_rows = mysqli_num_rows($result);

                if($num_of_rows != 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                    
                        ?>
    
                        <div class="flex__col">
                            <h3 class="heading-tertiary"><?php echo $row['category']; ?></h3>
                            <div class="flex__list">
                                <ul class="flex__ul">
    
                                    <?php
                                    
                                    $sub_query = "SELECT * FROM subcategories WHERE category='" . $row['category'] . "'";
    
                                    $result_sub = mysqli_query($connect, $sub_query);
                                    while($row2 = mysqli_fetch_assoc($result_sub)) {
                                        ?>
    
                                        <li class="flex__li"><a href="display/?c=<?php echo $row['category']; ?>&amp;s=<?php echo $row2['name']; ?>" class="flex__a"><?php echo $row2['name']; ?></a></li>
                                        
                                        <?php
                                    }
    
                                    ?>
                                    <li class="flex__li"><a href="display/?c=<?php echo $row['category']; ?>" class="flex__a">View All</a></li>
                                </ul>
                            </div>
                        </div>
    
                        <?php
                    }
                } else {
                    ?>
                    <p class="u-text-align-center">No rows have been created.</p>
                    <?php
                }
                ?>



            </div>

            

            <!-- <div class="row">
                <div class="col-1-of-4">
                    <h3 class="heading-tertiary">Astronomy</h3>
                </div>
                <div class="col-1-of-4">
                    <h3 class="heading-tertiary">Auto</h3>
                </div>
                <div class="col-1-of-4">
                    <h3 class="heading-tertiary">Chemicals</h3>
                </div>
                <div class="col-1-of-4">
                    <h3 class="heading-tertiary">Electrical</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-1-of-4">
                    <h3 class="heading-tertiary">Hardware</h3>
                </div>
                <div class="col-1-of-4">
                    <h3 class="heading-tertiary">Lighting</h3>
                </div>
                <div class="col-1-of-4">
                    <h3 class="heading-tertiary">Outdoor Living</h3>
                </div>
                <div class="col-1-of-4">
                    <h3 class="heading-tertiary">Paint</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-1-of-4">
                    <h3 class="heading-tertiary">Plumbing</h3>
                </div>
                <div class="col-1-of-4">
                    <h3 class="heading-tertiary">Lawn and Garden</h3>
                </div>
            </div>
        </div> -->
    </main>
    <?php include "php/elements/footer-root.php"; ?>
    <script> </script>
</body>
</html>

<!-- 
    Auto
    Garden
    
    lawn and garden
    tools
    hardware
    paint
    plumbing
    electrical
        wire
        boxes and fittings
        switches and outlets
    lighing
    auto
        oils and fluid
        parts
        equipment
    outdoor living
        camping
        sports
        fitness
    astronomy
    chemicals
 -->

 <!--
     id
     name
     category
     location
 -->