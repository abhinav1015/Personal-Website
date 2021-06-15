<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContactUs</title>
    <link rel="stylesheet" href="css/contact_style.css">
</head>
<body>
<div class="container">
    <nav id="navbar">
        <div id="logo">
           <strong>Abhinav</strong>
        </div>
            <ul>
                <li><a href="/index.html">Home</a></li>
                <li><a href="#project-heading">Projects</a></li>
                <li><a href="#scroll-services">Services</a></li>
                <li><a href="/blog.html">Blog</a></li>
                <li><a href="/contact.html">ContactUs</a></li>
            </ul>
    </nav>
    <?php
        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "contact";   

        $conn = mysqli_connect($server, $username, $password, $database);

        $sql = "SELECT * FROM `contactus`;";
        $result = mysqli_query($conn, $sql);
        echo "<br>";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {    
        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $desc = $_POST['desc'];

        $sql = "INSERT INTO `contactus` (`S.No`, `Name`, `Email`, `Age`, `Thoughts`, `Date`) VALUES (NULL, '$name', '$email', '$age', '$desc', CURRENT_TIMESTAMP);";
        $result = mysqli_query($conn, $sql);
        
        }
    ?>
    <form action="/contact.php" method="post">
        <div id="contact-form">
            <div>
                <!-- <label for="name">Name: </label> -->
                <input type="text" name="name" id="name" placeholder="Enter Your Name">
            </div>
            <div>
                <!-- <label for="email">E-mail: </label> -->
                <input type="email" name="email" id="email" placeholder="Enter Your Email">
            </div>
            <div>
                <!-- <label for="age">Age: </label> -->
                <input type="number" name="age" placeholder="Enter your age" id="age">
            </div>   
            <div> 
                <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter your thoughts."></textarea>
            </div>
            <button type="submit"  >Submit</button>
        </div>
    </form>
</div>
<footer>
   <strong> No-Copyright&copy; All Right Reserved@2020</strong>
</footer>


</body>
</html>