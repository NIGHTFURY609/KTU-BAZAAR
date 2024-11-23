<?php require "php/functions.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The ultimate destination for all your academic needs. Sell, Buy, Rent, Exchange, and more.">
    <meta name="keywords" content="Textbooks, Notes, Study Materials, Academic Resources, Hire Ghost writers to do your assignments or practical records or notes">
    <title>KTU BAZAAR</title>
    <link rel="stylesheet" href="css/styles.css">
   
</head>
<body>
   <?php include 'includes/nav.php'; ?> <!--linking the nav.php file-->
   <?php include 'includes/header.php'; ?> <!--linking the header.php file-->
   
   <main>
    <div class="left">
       <div class="section-title">Product Categories</div>
        
     <?php $categories = getCategories() ?>
     <?php
       foreach($categories as $category){
        ?>  
            
            <a href="category.php?category=<?php echo urlencode($category['category'])?>"><?php echo 
                ucfirst($category['category'])?></a>
        
             
             <?php
       }
        ?>

             
       
    </div>
    <div class="right">
        <div class="section-title">Home Page</div>
        <a href="product">
            
                <div class="product-left">
                    <img src="products/coding.jpg" alt="">
                </div>
                <div class="product-right">
                    <p class="title">
                        <a href="">Coding  is fun</a>
                    </p>
                    <p class="description"> nigggaaaaaa </p>
                    <p class="price">
                        Rs. 100

                    </p>
                </div>
            </div>
        </a>
    </div>
   </main>


<?php include 'includes/footer.php'; ?> <!--linking the footer.php file-->




    <script src="js/script.js"></script>
    </body>
    </html>




