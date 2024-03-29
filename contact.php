<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>    </head>
<body>
   
<nav>
<label class="logo">VIT AP UNIVERSITY</label>

<ul>
    <li><a href="index.php">HOME</a></li>
    <li><a href="admission.php">ADMISSION</a></li>
    <li><a href="contact.php">CONTACT</a></li>
    <li><a href="login.php" class="btn btn-success">LOGIN</a></li>
</ul>
</nav>


    <div class="container">
        <div class="content">
            <h2>Contact Us</h2>
            <p>If you have any questions or need more information, please don't hesitate to get in touch with us. We are here to help!</p>

            <h3>Contact Information</h3>
            <p>
                <strong>Address:</strong>AP<br>
                <strong>City:</strong> VIJAYAWADA<br>
                <strong>State:</strong> ANDHRA PRADESH<br>
                <strong>Zip Code:</strong> 523001<br>
                <strong>Email:</strong> vitap@gmail.com<br>
                <strong>Phone:</strong> 9876543210
            </p>
<center>
            <h3>Contact Form</h3>
            <form action="contact_form_handler.php" method="post">
                <label  class="label_deg" for="name">Name:</label>
                <input type="text" id="name" name="name" required><br>

                <label class="label_deg" for="email">Email:</label>
                <input type="email" id="email" name="email" required><br>

                <label class="label_deg" for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea><br>

               <input class="btn btn-primary" type="Submit" name="Submit" value="Login">
            </form>
</center>
        </div>
    </div>

   
</body>
</html>
