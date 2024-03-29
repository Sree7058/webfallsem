<html>
    <head>
        <title>Admission Form</title>
        <link rel="stylesheet" type="text/css" href="style.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


    </head>
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
        <center>
    <h1>Admission Form</h1>
</center>
<br></br> 
<div align="center" class="admission_form">

<form action="data_check.php" method="POST">
    <div class="adm_int">
        <label class="label_text">Name</label>
        <input class ="input_deg" type="text" name="name">
        </div>
        <br></br>
        <div class="adm_int">
        <label class="label_text">Email ID</label>
        <input class ="input_deg" type="text" name="email">
        </div>
        <br></br>
        <div class="adm_int">
        <label class="label_text">Phone</label>
        <input class ="input_deg" type="text" name="phone">
        </div>
        <br></br>
        <div class="adm_int">
        <label class="label_text">Message</label>
       <textarea class="input_txt" name="message"></textarea>
        </div>
        <br></br>
        <div class="adm_int">
        
        <input class="btn btn-primary" id="submit" type="submit" value="Apply" name="apply">
        </div>
</form>



</div>  
</body>
</html>     