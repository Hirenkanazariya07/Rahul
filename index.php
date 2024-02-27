<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
     <!-- bootstrap css link -->
     <link rel="stylesheet" href="css/bootstrap.css">
    <!-- style.css link -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <?php
            include "nev.php";
        ?>
    
       <div class="container-fluid ind-con">
        
        <div class="row ">
            <div class="col-sm-6 main-1">
              <div class="fation-heading">  <h1> FASHION <br> WATCH </h1></div>
              <button type="button" class="main-btn">ADD TO CART</button>
              <!-- <button type="button" class="main-btn">ADD TO CART</button> -->
            </div>
            <div class="col-sm-5 main-img main-1" id = "a-1">
                
                <img src="image\product\Tissot.png" alt="image is not support" class="img-responsive" height="400" width="400">

            </div>
        </div>
        <!-- container fluid ended  -->
       </div> 

                <!-- container started  -->
            <div class="container">

                    
            </div>
            <!-- container ended  -->
        <!----------------    ------ populer watch product start  ----------------------------->

        <!----------------------------- start headding in populer watch  --------------------->
            <div class="container-fluid popular">
                <div class="row my-3">
                    <div class="col-md-12">
                        <h2>POPULAR</h2>
                    </div>
                </div>
            </div>
        <!--------------------------------- End headding in populer watch  -------------------->

        <!---------------------------------- start populer watch product  --------------------->
        <div class="container-fluid my-5">
            <div class="row justify-content-around">

             <!-- populer product 1 started  -->
                <div class="col-sm-2 product">
                    
                    <div class="col-sm-12 py-3">
                        <a href="#">
                            <img src="image\product\citizen.png" class="mx-2"  alt="image is not support" height="80%" width="80%">    
                        </a>
                    </div>
                    <div class="row justify-content-around">
                        <div class="col-sm-12">
                            <h3 class="py-0">$10</h3>
                        </div>
                    </div>

                    <div class="row my-3 mx-1  justify-content-around">
                      <div class="col-sm-5">
                         <button class="bg-primary btn">Buy</button>
                        </div>
                 </div>
                   
            </div>   

             <!-- populer product 1 endeded  -->

             


              <!-- populer product 3 started  -->
              <div class="col-sm-2 product">
                    
                    <div class="col-sm-10 py-2">
                        <a href="#">
                            <img src="image\product\Klassc.png" class="mx-2"  alt="image is not support" height="80%" width="80%">    
                        </a>
                    </div>
                    <div class="my-2 row justify-content-around">
                        <div class="col-sm-12">
                        <h3 class="py-0">$19</h3>
                        </div>
                    </div>

                    <div class="row my-2 mx-1  justify-content-around">
                      <div class="col-sm-5">
                         <button class="bg-primary btn">Buy</button>
                        </div>
                 </div>
                   
            </div>   
             <!-- populer product 3 endeded  -->

        </div>
    </div>
</div>
<!------------------------------- end populer watch product  ----------------------------------->


       <!-- footer started  -->
       <?php
            include "footer.php";
        ?>
        <!-- footer ended  -->
</body>
</html>