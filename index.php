
<?php
include_once('hms/include/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='index.php'</script>";

} ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> FAM CARE CENTER </title>

    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
     <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

    <body>

    <!-- ################# Header Starts Here#######################--->
    
      <header id="menu-jk">
    
        <div id="nav-head" class="header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-12" style="color:#000;font-weight:bold; font-size:42px; margin-top: 1% !important;">
  <img src="hms/hospital1.jpg" alt="FCC Logo" style="width: 50%; height: auto;">
  <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
</div>

                    <!-- <div id="menu" class="col-lg-8 col-md-9 d-none d-md-block nav-item">
                        <ul>
                            <li style="text-decoration: underline;"><a href="#">Home</a></li>
                            <li style="text-decoration: underline;"><a href="#services">Services</a></li>
                            <li style="text-decoration: underline;"><a href="#about_us">About Us</a></li>
                            <li><a href="#gallery">Gallery</a></li> -->
                            <!-- <li style="text-decoration: underline;"><a href="#contact_us">Contact Us</a></li>
                            <li style="text-decoration: underline;"><a href="#logins">Logins</a></li>  
                        </ul>
                    </div>  -->
                    <div id="menu" class="col-lg-8 col-md-9 d-none d-md-block nav-item">
                    <ul>
                        <li><a href="#" class="menu-link">Home</a></li>
                        <li><a href="#services" class="menu-link">Services</a></li>
                        <li><a href="#about_us" class="menu-link">About Us</a></li>
                        <li><a href="#contact_us" class="menu-link">Contact Us</a></li>
                        <li><a href="#logins" class="menu-link">Logins</a></li>  
                     </ul>
                    </div>
 <style>
 /* Style for the menu links */
.menu-link {
  text-decoration: underline;
  color: black; /* Change to your preferred color */
  transition: color 0.3s ease; /* Smooth transition for hover effect */
}

/* Hover effect */
.menu-link:hover {
  color: blue; /* Change link color on hover */
  text-decoration: none; /* Remove underline on hover, if desired */
}

</style>


                    <div class="col-sm-2 d-none d-lg-block appoint">
                        <a class="btn btn-success" href="hms/user-login.php">Book an Appointment</a>
                    </div>
                </div>

            </div>
        </div>
    </header>
    
     <!-- ################# Slider Starts Here#######################--->

    <div class="slider-detail">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>


   


            <div class="carousel-inner">
                <div class="carousel-item ">
                    <img class="d-block w-100" src="assets/images/slider/slider_2.jpg" alt="Second slide">
                    <div class="carousel-cover"></div>
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <h5 class="animated bounceInDown" style="font-size: 75px;">FAM CARE CENTER</h5>
                        <h4>Healthcare at its finest</h4>
            
                         
                    
                    </div>
                </div>
                
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/images/slider/slider_3.jpg" alt="Third slide">
                      <div class="carousel-cover"></div>
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <h5 class="animated bounceInDown" style="font-size: 75px;">FAM CARE CENTER</h5>
                        <h4>Healthcare at its finest</h4>
            
                         
                    
                    </div>
              
                </div>
                
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </div>
    
  <!--  ************************* Logins ************************** -->
    
    
     <section id="logins" class="our-blog container-fluid" >
        <div class="container">
        <div class="inner-title">

                <h2>Logins</h2>
            </div>
            <div class="col-sm-12 blog-cont">
                <div class="row no-margin">
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                                <img src="hms/patient.jpg" alt="">

                            <div class="blog-single-det">
                                <h6>Patient Login</h6>
                                <a href="hms/user-login.php" target="_blank">
                                    <button class="btn btn-success btn-sm">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                                <img src="assets/images/doctor.jpg" alt="">

                            <div class="blog-single-det">
                                <h6>Doctors login</h6>
                                <a href="hms/doctor" target="_blank">
                                    <button class="btn btn-success btn-sm">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                                <img src="assets/images/admin.jpg" alt="">

                            <div class="blog-single-det">
                                <h6>Admin Login</h6>
                    
                                <a href="hms/admin" target="_blank">
                                    <button class="btn btn-success btn-sm">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    
                    

                    
                    
                </div>
            </div>
            
        </div>
    </section>  







    <!-- ################# Our Departments Starts Here#######################--->


    <section id="services" class="key-features department" style="background-color: #90e0ef;">
        <div class="container">
            <div class="inner-title">

                <h2>Our Key Features</h2>
                <p>Take a look at some of our key features</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-heartbeat"></i>
                        <h5>Cardiology</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-ribbon"></i>
                        <h5>Orthopaedic</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                       <i class="fab fa-monero"></i>
                        <h5>Neurologist</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-capsules"></i>
                        <h5>Pharma Pipeline</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-prescription-bottle-alt"></i>
                        <h5>Pharma Team</h5>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="far fa-thumbs-up"></i>
                        <h5>High Quality treatments</h5>

                    </div>
                </div>
            </div>






        </div>

    </section>
    <style>
/* Add initial styling for the key features */
.single-key {
    text-align: center;
    padding: 20px;
    background-color: white;
    border-radius: 8px;
    transition: transform 0.3s ease, background-color 0.3s ease;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.single-key i {
    font-size: 40px;
    color: #0077b6;
    margin-bottom: 15px;
}

/* Hover effect: scale up slightly and change background color */
.single-key:hover {
    transform: scale(1.05);
    background-color: #caf0f8;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

/* Optional: add hover effect on icons for more emphasis */
.single-key i:hover {
    color: #023e8a;
}
</style>

    
    
  
    
    <!--  ************************* About Us Starts Here ************************** -->
   <section id="about_us" class="about-us">
        <div class="row no-margin">
            <div class="col-sm-6 image-bg no-padding">
                <div><img src="hms/why.jpg" >
</div>
                
            </div>
            <div class="col-sm-6 abut-yoiu">
                <h3>About Our Hospital</h3>
<?php
$ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
while ($row=mysqli_fetch_array($ret)) {
?>

    <p><?php  echo $row['PageDescription'];?>.</p><?php } ?>
            </div>
        </div>
    </section>
            <!--  ************************* Gallery Starts Here ************************** -->
        <!-- <div id="gallery" class="gallery">     -->
           <!-- <div class="container"> -->
              <!-- <div class="inner-title"> -->

                <!-- <h2>Our Gallery</h2> -->
                <!-- <p>View Our Gallery</p> -->
            <!-- </div> -->
              <!-- <div class="row"> -->
                

        <!-- <div class="gallery-filter d-none d-sm-block"> -->
            <!-- <button class="btn btn-default filter-button" data-filter="all">All</button> -->
            <!-- <button class="btn btn-default filter-button" data-filter="hdpe">Dental</button>
            <button class="btn btn-default filter-button" data-filter="sprinkle">Cardiology</button>
            <button class="btn btn-default filter-button" data-filter="spray"> Neurology</button>
            <button class="btn btn-default filter-button" data-filter="irrigation">Laboratry</button>
        </div>
        <br/>



            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="assets/images/gallery/gallery_01.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                <img src="assets/images/gallery/gallery_02.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="assets/images/gallery/gallery_03.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="assets/images/gallery/gallery_04.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="assets/images/gallery/gallery_05.jpg" class="img-responsive">
            </div>

          

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="assets/images/gallery/gallery_06.jpg" class="img-responsive">
            </div>

        </div>
    </div>
       
       
       </div>
        ######## Gallery End #######
    
     -->
     <!--  ************************* Contact Us Starts Here ************************** -->
    
<section id="contact_us" class="contact-us-single" >
    <div class="row no-margin">
        <div class="col-sm-12 cop-ck">
            <form method="post" id="contactForm">
                <h2 style="text-decoration: underline;">Contact Form</h2>

                <div class="row cf-ro">
                    <div class="col-sm-3"><label style="text-decoration: underline;">Enter Name :</label></div>
                    <div class="col-sm-8">
                        <input type="text" placeholder="Enter Name" name="fullname" class="form-control input-sm" required>
                    </div>
                </div>

                <div class="row cf-ro">
                    <div class="col-sm-3"><label style="text-decoration: underline;">Email Address :</label></div>
                    <div class="col-sm-8">
                        <input type="text" name="emailid" placeholder="Enter Email Address" class="form-control input-sm" required>
                    </div>
                </div>

                <div class="row cf-ro">
                    <div class="col-sm-3"><label style="text-decoration: underline;">Mobile Number:</label></div>
                    <div class="col-sm-8">
                        <input type="text" name="mobileno" placeholder="Enter Mobile Number" class="form-control input-sm" required>
                    </div>
                </div>

                <div class="row cf-ro">
                    <div class="col-sm-3"><label style="text-decoration: underline;">Enter Message:</label></div>
                    <div class="col-sm-8">
                        <textarea rows="5" placeholder="Enter Your Message" class="form-control input-sm" name="description" required></textarea>
                    </div>
                </div>

                <div class="row cf-ro">
                    <div class="col-sm-3"><label></label></div>
                    <div class="col-sm-8">
                        <button class="submit-btn" id="submitBtn" type="button">Send Message</button>
                    </div>
                </div>

                <div class="row cf-ro" id="confirmationMessage" style="display: none;">
                    <div class="col-sm-12">
                        <p style="color: blue; font-weight: bold;">Your message has been sent successfully!</p>
                    </div>
                </div>

            </form>
        </div>
    </div>
</section>

<script>
    const submitBtn = document.getElementById('submitBtn');
    const form = document.getElementById('contactForm');
    const confirmationMessage = document.getElementById('confirmationMessage');

    submitBtn.addEventListener('click', function() {
        const inputs = form.querySelectorAll('input[required], textarea[required]');
        let allFieldsFilled = true;

        inputs.forEach(input => {
            if (!input.value.trim()) {
                allFieldsFilled = false;
                input.style.borderColor = 'red'; // Highlight the empty field
            } else {
                input.style.borderColor = ''; // Reset the border color if field is filled
            }
        });

        if (allFieldsFilled) {
            this.classList.add('loading');
            this.textContent = '';

            setTimeout(() => {
                this.classList.remove('loading');
                this.textContent = 'Message Sent';
                this.style.backgroundColor = '#0000FF5';
                
                // Display confirmation message
                confirmationMessage.style.display = 'block';
                
                // Clear the form fields
                form.reset();

            }, 3000);
        } else {
            alert("Please fill out all fields before sending the message.");
        }
    });
</script>
<style>
    #contact_us {
    background-color: #90e0ef;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

    /* General styles for the button */
   /* General styles for the button */
.submit-btn {
    padding: 15px 30px;
    font-size: 18px;
    color: #fff;
    background: linear-gradient(90deg, #a7c957, #5c9442);
    border: none;
    border-radius: 5px;
    cursor: pointer;
    outline: none;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

/* Hover effect */
.submit-btn:hover {
    background: linear-gradient(#5c9442, #3b6a2e);
}

/* Active state for a pressed button effect */
.submit-btn:active {
    transform: translateY(2px);
}

/* Loading state */
.submit-btn.loading {
    left: 50%;
    width: 50px;
    height: 50px;
    padding: 15px;
    border-radius: 50%;
    background-color: #a7c957;
    position: relative;
}

/* Loading spinner */
.submit-btn.loading::after {
    content: '';
    width: 20px;
    height: 20px;
    border: 3px solid #fff;
    border-top: 3px solid transparent;
    border-radius: 50%;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    animation: spin 1s linear infinite;
}

/* Spinner animation */
@keyframes spin {
    0% {
        transform: translate(-50%, -50%) rotate(0deg);
    }
    100% {
        transform: translate(-50%, -50%) rotate(360deg);
    }
}

/* Form labels */
label {
    color: #2c3e50;
    font-weight: bold;
}

/* Form inputs */
input[type="text"], textarea {
    border: 2px solid #a7c957;
    border-radius: 4px;
    padding: 10px;
    font-size: 16px;
}

/* Input focus effect */
input[type="text"]:focus, textarea:focus {
    outline: none;
    border-color: #5c9442;
    box-shadow: 0 0 8px rgba(167, 201, 87, 0.5);
}

/* Confirmation message */
#confirmationMessage p {
    color: #5c9442;
    font-weight: bold;
}

</style>

<!-- ######## our location  ###########  -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Google Map Embed</title>
  <style>
     body {
      font-family: 'Arial', sans-serif;
      background-color: #f4f4f9;
     
      
    }
      h1 {
      text-align: center;
      color: #3d405b;
      font-size: 2.5rem;
      background-color: #e0fbfc;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      margin-bottom: 30px;
      position: relative;
      animation: fadeIn 1s ease-in-out;
      animation: glow 2s ease-in-out infinite, text-flicker 3s ease-in-out infinite;
    }
     h1::after {
      content: "";
      display: block;
      width: 50%;
      height: 4px;
      background: #00b4d8;
      margin: 10px auto;
      animation: pulse 1.5s infinite ease-in-out;
       
      
    }
    .map-container {
     width: 90%;
      max-width: 1200px;
      margin: 0 auto;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      transform: scale(1);
      transition: transform 0.3s ease-in-out;
      animation: fadeInUp 1.2s ease-in-out;
    }
    .map-container:hover {
      transform: scale(1.02);
      box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
    }
    .map-container iframe {
      width: 100%;
      height: 450px;
      border: none;
    }
     @keyframes text-flicker {
      0%, 18%, 22%, 25%, 53%, 57%, 100% {
        opacity: 1;
      }
      20%, 24%, 55% {
        opacity: 0.4;
      }
    }
    
    
     @keyframes fadeIn {
      0% {
        opacity: 0;
        transform: translateY(-20px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(50px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes underline {
      0% {
        width: 0;
      }
      100% {
        width: 50%;
      }
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
      h1 {
        font-size: 2rem;
      }
      .map-container iframe {
        height: 350px;
      }
    }

    @media (max-width: 480px) {
      h1 {
        font-size: 1.8rem;
      }
      .map-container iframe {
        height: 300px;
      }
    
  </style>
 
</head>
<body>

  <h1 style="text-decoration: underline;"style="color: black;",>Our Location</h1>
  <div class="map-container">
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3750.340501553512!2d73.8601712733262!3d19.952177581441223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddbff2f7ebee35%3A0x9f2bf1dc3ff2109e!2sGovernment%20Polytechnic%20Nashik!5e0!3m2!1sen!2sin!4v1725273849090!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

</body>
</html>



    
    
    
    
    <!-- ################# Footer Starts Here#######################--->


    <footer class="footer">
        <div class="container">
            <div class="row">
       
                <div class="col-md-6 col-sm-12">
                    <h2>Useful Links</h2>
                    <ul class="list-unstyled link-list">
                        <li><a ui-sref="about" href="#about">About us</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="portfolio" href="#services">Services</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="products" href="#logins">Logins</a><i class="fa fa-angle-right"></i></li>
                        <!-- <li><a ui-sref="gallery" href="#gallery">Gallery</a><i class="fa fa-angle-right"></i></li> -->
                        <li><a ui-sref="contact" href="#contact">Contact us</a><i class="fa fa-angle-right"></i></li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-12 map-img">
                    <h2 style="text-decoration: underline;">Contact Us</h2>
                    <address class="md-margin-bottom-40">

<?php
$ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
while ($row=mysqli_fetch_array($ret)) {
?>


                        <?php  echo "Goverment polytechnic, nashik India"?> <br>
                        Phone: <?php  echo "9325484745";?> <br>
                        Email: <a href="mailto:harshchopda@24gmail.com"><?php echo 'harshchopda@24gmail.com'; ?></a><br>

                        Timing: <?php  echo $row['OpenningTime'];?>
                    </address>

        <?php } ?>





                </div>
            </div>
        </div>
        

    </footer>
    <div class="copy">
            <div class="container">
         FAM CARE CENTER
                
     
            </div>

        </div>
    
    </body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-nav/js/jquery.easing.min.js"></script>
<script src="assets/plugins/scroll-nav/js/scrolling-nav.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>

<script src="assets/js/script.js"></script>

<script>
!function(w, d, s, ...args){
  var div = d.createElement('div');
  div.id = 'aichatbot';
  d.body.appendChild(div);
  w.chatbotConfig = args;
  var f = d.getElementsByTagName(s)[0],
  j = d.createElement(s);
  j.defer = true;
  j.type = 'module';
  j.src = 'https://aichatbot.sendbird.com/index.js';
  f.parentNode.insertBefore(j, f);
}(window, document, 'script', '13E9C58D-1AED-411D-9072-18FF647138B7', 'onboarding_bot', {
  apiHost: 'https://api-cf-ap-8.sendbird.com',
});
</script>

</html>