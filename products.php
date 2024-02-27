<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product</title>
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- style.css link -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

        
                
                <!-------------------------- navbar started  --------------------------------->

                
                <div class="container-fluid">
                <?php
                    include "nev.php";
                ?>
                </div>
              

            <!----------------------------- navbar ended  ------------------------------------>
        
            
            <!-------------------------- container started  ---------------------------------->
            <div class="container-fluid">
                <div class="row justify-contant-evenly">
                    <!-- product 1 started  -->
                    <div class="col-md-2 prod">
                        <div class="card">
                        <img src="image\product\Klassc.png" alt="image is not support"    height="70%" width="70%">
                                <div class="card-body">
                                    <h5 class="card-title">PRODUCT 1</h5>
                                        <a href="#" class="btn btn-primary">BUY</a>
                                </div>
                        </div>
                    </div>
                    <!-- product 1 end  -->

                     <!-- product 1 started  -->
                     <div class="col-md-2 prod">
                        <div class="card">
                        <img src="image\product\Klassc.png" alt="image is not support"    height="70%" width="70%">
                                <div class="card-body">
                                    <h5 class="card-title">PRODUCT 1</h5>
                                        <a href="#" class="btn btn-primary">BUY</a>
                                </div>
                        </div>
                    </div>
                    <!-- product 1 end  -->


                </div>
            </div>
            <!---------------------------- container ended  ----------------------------------->
            
            <!----------------------------- footer strated --------------------------->
            <div class="container-fluid">
            <?php
                    include "footer.php";
            ?>
            </div>
            <!------------------------------- footer end  ------------------------------------>
</body>
</html>