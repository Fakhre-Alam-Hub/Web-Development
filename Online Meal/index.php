<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Online Meal</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 800px)" href="css/phone.css">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@200&display=swap" rel="stylesheet">
</head>

<body>
<!-- Include sweetalert2 javascript  -->
    <script src="jquery-3.5.1.min.js"></script>
    <script src="sweetalert2.all.min.js"></script>

<!-- Navbar -->
    <nav id="navbar">
        <div class="" id="logo">
            <img src="img/logo.png" alt="My Online Meal">
        </div>

        <ul>
            <li class="item"><a href="#home">Home</a></li>
            <li class="item"><a href="#services-container">Services</a></li>
            <li class="item"><a href="#client-section">Our Clients</a></li>
            <li class="item"><a href="#contact">Contact Us</a></li>
        </ul>
    </nav>

<!-- Home section -->
    <section id="home">
        <h1 class="h-primary">Welcome to My Online Meal</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur itaque nulla
            repellendus fuga aut id ad laborum obcaecati sed velit.
        </p>
        <button class="btn">
            Order Now
        </button>
    </section>

<!-- Service section -->
    <section id="services-container">
        <h1 class="h-primary center">Our Services</h1>
        <div id="services">
            <div class="box">
                <img src="img/b.png" alt="">
                <h2 class="h-secondary center">Food Ordering</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates alias
                    neque blanditiis vitae dolore cum aspernatur aliquam molestias, dolorem maiores
                    eum sint. In eos tempora obcaecati exercitationem aperiam officiis explicabo
                    incidunt at nemo ipsa?</p>
            </div>
            <div class="box">
                <img src="img/e.png" alt="">
                <h2 class="h-secondary center">Food Catering</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates alias
                    neque blanditiis vitae dolore cum aspernatur aliquam molestias, dolorem maiores
                    eum sint. In eos tempora obcaecati exercitationem aperiam officiis explicabo
                    incidunt at nemo ipsa?</p>
            </div>
            <div class="box">
                <img src="img/d.png" alt="">
                <h2 class="h-secondary center">Food Delivery</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates alias
                    neque blanditiis vitae dolore cum aspernatur aliquam molestias, dolorem maiores
                    eum sint. In eos tempora obcaecati exercitationem aperiam officiis explicabo
                    incidunt at nemo ipsa?</p>
            </div>
        </div>
    </section>

<!-- Client sction -->
    <section id="client-section">
        <h1 class="h-primary center">Our Clients</h1>
        <div id="clients">
            <div class="client-item">
                <img src="img/f.png" alt="Our clients">
            </div>
            <div class="client-item">
                <img src="img/g.png" alt="Our clients">
            </div>
            <div class="client-item">
                <img src="img/h.png" alt="Our clients">
            </div>
            <div class="client-item">
                <img src="img/i.png" alt="Our clients">
            </div>
            <div class="client-item">
                <img src="img/j.png" alt="Our clients">
            </div>
        </div>
    </section>

<!--Contact section-->
    <section id="contact">
        <h1 class="h-primary center">Contact Us</h1>
        <div id="contact-box">
            <form action="" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone no.</label>
                    <input type="text" name="phone" id="phone" placeholder="Enter your phone no." required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10" required></textarea>
                </div>
                <input type="submit" class="btn btn-primary" name="submit" value="Submit">

            </form>
        </div>
    </section>


<!-- Make connection and submit form data into database -->
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        // Connecting to the Database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "myonlinemeal";

        // Create a connection
        $conn = mysqli_connect($servername, $username, $password, $database);

        // Die if connection was not successful
        if (!$conn){
            die("echo <script>
                    swal.fire({
                    type:'error',
                    title:'ERROR!',
                    icon: 'error',
                    text:'Sorry for incovenience caused, unable to connect to Database.'                                
                })
            </script>");
            }
        else{ 
            // Submit these to a database
            $sql = "INSERT INTO contact_us (Name, Email, Phone, Message) VALUES ('$name', '$email', '$phone', '$message')";
            $result = mysqli_query($conn, $sql);

            if($result){
                echo "<script>
                    swal.fire({
                        type:'success',
                        title:'SUCCESS!',
                        icon: 'success',
                        text:'Your form has been submitted.'                                
                    });
                </script>";
                }
            else{
                echo "<script>
                    swal.fire({
                        type:'error',
                        title:'ERROR!',
                        icon: 'error',
                        text:'Your form is not submitted.'                                
                    })
                </script>";
                }
            }
        }
    ?>

<!-- Footer -->
    <footer>
        <div class="center">
            Copyright &copy; www.myOnlineMeal.com. All rights reserved by Fakhre Alam!
        </div>
    </footer>
</body>

</html>