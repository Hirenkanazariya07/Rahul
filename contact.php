<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
     <!-- bootstrap css link -->
     <link rel="stylesheet" href="css/bootstrap.css">
    <!-- style.css link -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
    <?php
            include "nev.php";
    ?>
   


                <!-- form- contact started  -->

                        <div class="container">
                            <div class="row justify-contant-evenly">
                                <div class="col-sm-5 contact-form ">
                                <div class="row">
                                <h1>Contact Us</h1>
                                </div>
<form id="contact_form" name="contact_form" method="post">

    <div class="mb-3">
        <label for="name_input">Name</label>
        <input type="text" required maxlength="50" class="form-control" id="name_input" name="name" placeholder="Name">
    </div>
    <div class="mb-3 row">
        <div class="col">
            <label for="email_addr">Email:</label>
            <input type="email" required maxlength="50" class="form-control" id="email_addr" name="email"
                placeholder="name@example.com">
        </div>
        <div class="col">
            <label for="phone_input">Phone</label>
            <input type="tel" required maxlength="50" class="form-control" id="phone_input" name="Phone"
                placeholder="Phone">
        </div>
    </div>
    <div class="mb-3">
        <label for="message">Message</label>
        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
    </div>
    <div class="my-4">
        <div class="g-recaptcha" data-sitekey="6LchOyEUAAAAAPo9l0WmIgFkGu5D6Gyq-MjsIHS1"></div>
    </div>
    <button type="submit" class="btn btn-primary px-4">Send</button>
</form>
                                </div>
                            </div>
                            </div>    
                                
                        
 
                 <!-- form contact ended  -->

                 <!-- footer started  -->
    <?php
            include "footer.php";
        ?>
        <!-- footer ended  -->
                            
</body>
</html>