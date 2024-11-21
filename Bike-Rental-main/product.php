<?php 
    include "includes/connect.php";
    include "functions/common_functions.php";
    @session_start();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="css/style.css">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <script src="https://kit.fontawesome.com/3b245c0a0d.js"></script>
   
    <title>product</title>
</head>
<body>
<div class="navbar" style="background-color:black;">
            <img src="image/img6.png" class="logo" height="7%" width= 7%>
            
            
            <ul>
                <li>
                
                </li>
                <li><a href="index1.php">Home</a></li>
                <li><a href="product.php">Products</a></li>
                <li><a href="contact.php">Contact us</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="cart.php"><i class="fa-regular fa-heart"></i> Favorites<sup><?php ?></sup></a></li>
                <!-- <li><a href="/project/cart.php">TOtal Price :<?php total_cart_price();?></a></li> -->
                <?php 
                if(isset($_SESSION['username']))
                {
                    echo "<li><a href='./user_area/profile.php'><i class='fa-regular fa-user'></i> My Account</a></li>";
                }
                
                ?>
                <li>
                
                </li>
                
            </ul>
        </div>  

    <div >
        <h1 class="hn">Our Bikes</h1>
        <div class="search-bar" style="margin:30px;">
    <form  class="d-flex" role="search" action="search_product.php" method="get">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="width:25%;  border: 2px solid green;" name="search_data">
                    <!-- <button class="btn btn-outline-success" type="submit" style="color: black; width : 15%;">Search</button> -->
                    <input type="submit" value="Search" class="btn btn-outline-success" name="search_data_product">
                </form>
    </div>
   

    <div class="row">
        <div class="col-md-10">
            <!-- products -->
            <div class="row px-3">
                <!-- fetching products -->
                <?php 
                
                   getproducts();
                   get_unique_categories();
                   get_unique_brands();
                //    $ip = getIPAddress();  
                //    echo 'User Real IP Address - '.$ip; 
                
                
                ?>
            </div>
        </div>
        

        <div class="col-md-2 bg-secondary p-0">
            <!-- sidenav -->
            <!-- brands to be dislayed -->
            <ul class="navbar-nav me-auto text-center">
                <li class="nav-item bg-info">
                    <a href="#" class="nav-link text-light"><h4>Brands</h4></a>
                </li>

                <!-- php start -->
                <?php  
                    
                    getbrands();
                ?>
            </ul>

            <!-- categories to be displayed -->
            <ul class="navbar-nav me-auto text-center">
                <li class="nav-item bg-info">
                    <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
                </li>
    

                <!-- php start -->
                <?php 
                    getcategories();
                ?>  
            </ul>

        </div>
    </div>
      
   <footer>
    <?php include 'footer.php';?>
   </footer>
    
    

    
</body>
</html>
