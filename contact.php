<?php include('config/constants.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/contact.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/logo.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="<?php echo SITEURL; ?>index.php">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>categories.php">Categories</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>foods.php">Foods</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>contact.php">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->

    <div class="containerContact">
        
        <form onsubmit="sendEmail(); reset(); return false;">
            <h3>Get In Touch</h3>
            <input type="text" id="name" placeholder="Your Name" required> 
            <input type="email" id="email" placeholder="Email id" required>   
            <input type="text" id="phone" placeholder="Phone no." required> 
            <textarea id="message" rows="4" placeholder="How can we help you?"></textarea>
            <button type="submit">Send</button>

        </form>

    </div>



<!-- social Section Starts Here -->
<section class="social">
    <div class="container text-center">
        <ul>
            <li>
                <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
            </li>
            <li>
                <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
            </li>
            <li>
                <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
            </li>
        </ul>
    </div>
</section>
<!-- social Section Ends Here -->

<!-- footer Section Starts Here -->
<section class="footer">
    <div class="container text-center">
        <p>All rights reserved. Designed By <a href="#">Group 21</a></p>
    </div>
</section>
<!-- footer Section Ends Here -->

<script src="https://smtpjs.com/v3/smtp.js"></script>
<script>
    function sendEmail(){
                    Email.send({
                Host : "https://elasticemail.com/account#/create-account?r=20b444a2-b3af-4eb8-bae7-911f6097521c",
                Username : "gota308@gmail.com",
                Password : "#kavi@1997",
                To : 'kavinduherath350@gmail.com',
                From : document.getElementById("email").value,
                Subject : "New inquiry",
                Body : "And this is the body"
            }).then(
            message => alert(message)
            );
    }
</script>

</body>
</html>