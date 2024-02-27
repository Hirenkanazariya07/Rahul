<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
     <!-- bootstrap css link -->
     <link rel="stylesheet" href="css/bootstrap.css">
    <!-- style.css link -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
       
       <?php
            include "nev.php";
        ?>

       
      
    <!-- navbar ended  -->

    <!-- .container body part started  -->
            <div class="container">
                <div class="row py-5 justify-contant-evenly">
                    <div class="col-sm-6 py-5 mx-2">
                        <div class="row my-5 aboutheadding">
                                <h2>About our watch </h2>
                        </div>
                        <div class="row">
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it </p>
                        </div>
                    </div>

                    <div class="col-sm-4 py-5 my-3">
                            <div class="aboutimage">
                            <img src="image\about.png" alt="about.png is notthing " height="100%" width="100%">
                            </div>
                    </div>
                </div>
            </div>   
    <!-- container ended  -->
    <!-- footer started  -->

    <div class="container-fluid">
        <?php
            include "footer.php";
        ?>

        </div>

    <!-- footer ended  -->
</body>
</html>