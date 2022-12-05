<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>www.FITKIT.com</title>
    <link rel="stylesheet" href="sapna.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <nav id="navbar">
        <div id="logo">
            <img src="logo1.png" alt="Physical fitness.com">
        </div>
        <ul>
            <li class="item"><a href="#home"><i class="fa fa-home"></i> Home</a></li>
            <li class="item"><a href="services.php"> Our Services</a></li>
            <li class="item"><a href="#gallery-container">Gallery</a></li>
            <li class="item"><a href="#packages-container">Packages</a></li>
            <li class="item"><a href="contact.php">Contact Us</a></li>
            <li class="item"><a href="login.php">Log in</a></li>
        </ul>
    </nav>

    <section id="home">
        <h1 class="h-primary">FIT FOR LIFE</h1>
        <p>Keep your life FIT and HEALTHY by joining our professional center.</p>
        <button class="btn">JOIN US</button>
    </section>

    <section id="services-container">
        <h1 class="h-primary center"></h1>
        <div id="services">
            <div class="box">
                <img src="a.jpeg" alt="">
                <h2 class="h-secondary center">YOGA</h2>
                <p class="center"> Yoga is a mind and body practice. Various styles of yoga combine physical postures, breathing techniques, and meditation or relaxation. Yoga is an ancient practice that may have originated in India. It involves movement, meditation, and breathing techniques to promote mental and physical well-being</p>
                <p class="center">Timing:8am-6pm</p>  
            </div>
            <div class="box">
                <img src="b.jpeg" alt="">
                <h2 class="h-secondary center">WORKOUT</h2>
                <p class="center">Exercise helps people keep a healthy weight and lower their risk of some diseases. Exercising regularly can help prevent weight gain, type 2 diabetes, heart disease, and high blood pressure. Bone-strengthening exercise — like jumping, running, or lifting weights — can help keep bones strong.</p>
                    <p class="center">Timing:8am-6pm</p>     
            </div>
            <div class="box">
                <img src="c.jpeg" alt="">
                <h2 class="h-secondary center">AEROBIC</h2>
                <p class="center">Aerobic exercise provides cardiovascular conditioning. The term aerobic actually means "with oxygen," which means that breathing controls the amount of oxygen that can make it to the muscles to help them burn fuel and move. Improves cardiovascular conditioning.</p>
                    <p class="center">Timing:8am-6pm</p>     
            </div>
        </div>
    </section>
    
    <section>
        <div class="gallery-container" id="gallery-container">
            <h2 class="head3">Gallery</h2>
            <hr border="3" color="red" width="550px"><br>
            
            <div class="sec">
           <div class="img"><img src="img.1.jpeg"></div>
           <div class="img"><img src="img.2.jpeg"></div>
           <div class="img"><img src="img.3.jpeg"></div>
           </div>
           <div class="sec">
           <div class="img"><img src="img.4.jpeg"></div>
           <div class="img"><img src="img.5.jpeg"></div>
           <div class="img"><img src="img.6.jpeg"></div>
           </div>
           <div class="sec">
           <div class="img"><img src="img1.jpg"></div>
           <div class="img"><img src="img2.jpg"></div>
           <div class="img"><img src="img3.jpg"></div>
           </div>
    </section>
    <section>
        <div class="packages-container" id="packages-container">
            <h2 class="pack">Packages</h2>
            <hr border="3" color="red" width="550px"><br>
            
            <div class="sap">
            <?php
$con=new mysqli("localhost","root","","fitness");
$q="SELECT * FROM packages";
$t=mysqli_query($con,$q);

    while($row =mysqli_fetch_assoc($t)) 
    {
        $id=$row['id'];
        $head=$row['heading'];
        $dis=$row['discription'];
        $price=$row['price'];
        $img=$row['img'];
        echo"
            <div class='box2'>
                <div class='inner'>
                    <div class='price-tag'>
                        $ $price/month
                    </div> 
                    <div class='img'>
                        <img src='$img' alt='price'>
                    </div>
                    <div class='text'>
                        <h3>$head</h3>
                        <p>$dis</p>
                        
                        <a href='payment.php?id=$id' class='bttn'>JOIN NOW</a>
                    </div>
                </div>
            </div>";
    }
            ?>
            <!-- <div class="box2">
                <div class="inner">
                    <div class="price-tag">
                        $84/month
                    </div>
                    <div class="img">
                        <img src="img.1.jpeg" alt="price"/>
                    </div>
                    <div class="text">
                        <h3>Special workout </h3>
                        <p>Get free wifi</p>
                        <p>Month to Month</p>
                        <p>No Time Restrictions</p>
                        <p>Service locker room</p>
                        <button class="bttn">JOIN NOW</button>
                    </div>
                </div>
            </div>
            <div class="box2">
                <div class="inner">
                    <div class="price-tag">
                        $66/month
                    </div>
                    <div class="img">
                        <img src="img.4.jpeg" alt="price"/>
                    </div>
                    <div class="text">
                        <h3>Special Aerobic training</h3>
                        <p>Get free wifi</p>
                        <p>Month to Month</p>
                        <p>No Time Restrictions</p>
                        <p>Service locker room</p>
                        <a href='payment.php?id=' class="bttn">JOIN NOW</a>
                    </div>
                </div>
            </div> -->
        </div>

        </div>
    </section>

    <footer>
        <div class="center">
            Copyright &copy; www.sapnafitnesscenter.com. All rights reserved!
        </div>
    </footer>
</body>
<?php
if(isset($_POST['b1']))
{
    header('location:gallery.php');
}

?>
</html>

