<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>CCIS GUIDE- CCIS GUIDEWebsite </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Navbar Start -->
    <div  class="container-fluid bg-white position-relative shadow" >
      <nav
        class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-0 px-lg-5"
      >
        <a
          href=""
          class="navbar-brand font-weight-bold text-secondary"
          style="font-size: 50px"
        >
        <img src="CCIS.jpg" alt="Logo" width="80" height="80" class="d-inline-block align-text-top">
        <span class="text-primary">CCIS GUIDE</span>
        </a>
        <button
          type="button"
          class="navbar-toggler"
          data-toggle="collapse"
          data-target="#navbarCollapse"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-between"
          id="navbarCollapse"
        >
          <div class="navbar-nav font-weight-bold mx-auto py-0">
            <a href="Home.php" class="nav-item nav-link ">Home</a>
            <a href="about.php" class="nav-item nav-link">About us</a>
            <a href="Login.php" class="nav-item nav-link">Staff login</a>
            <a href="formStudent.php" class="nav-item nav-link">Student/Visitor</a>
            <a href="Request.php" class="nav-item nav-link active">Help</a>
            
          
    <!-- Navbar End -->

    <!-- ==================================  SEARCHBAR begin ==================================-->

   
            </div>
          </div>
      </div>
      <div class="col-md-8" style="position: relative; margin-top: -5px; margin-left: 25px;">
        <div class="list-group" id="show-list"> 
          <!-- Here autocomplete list will be display -->
        </div>
      </div>
    </div>
  </div>
  
  <style>
    
            .containers {
              max-height: 120px;
              overflow-y: auto;
              overflow-x: hidden;

        top: 0px;
        left: 0px;
        margin: 0;
        z-index: 100;
        font-size: 12px;
        overflow:hidden;
        padding:0;
       top: 0px;
       margin: 15px 0px 0px 0px

            }
            * html .containers {
              height: 100px;
            }
            </style>
</script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="script.js"></script>
  
</body>

        </div>
        <form class="d-flex" role="search">
        </form>
      </nav>
    </div>
    
    
    <!-- ==================================  SEARCHBAR End ==================================-->

    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
      <div
        class="d-flex flex-column align-items-center justify-content-center"
        style="min-height: 400px"
      >
      <h3 class="display-3 font-weight-bold text-white">Welcome To Imam University</h3>
      <div class="d-inline-flex text-white">
    
        <p class="m-0">Help</p>
        </div>
      </div>
    </div>
    <!-- Header End -->

    <!-- Gallery Start -->
    <div class="container-fluid pt-5 pb-3">
      <div class="container">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">contact us </span>
          </p>
          <h1 class="mb-4">How can we help?</h1>
        </div>
       
      </div>
    </div>
    <!-- Gallery End -->
     <!-- Contact Start -->
     <div class="container-fluid pt-5">
      <div class="container">
        <div class="text-center pb-2">
          
          
        </div>
        <div class="row">
          <div class="col-lg-7 mb-5">
            <div class="contact-form">
              <form onsubmit ="sendEmail(); reset(); return false;" name="sentMessage" id="contactForm" novalidate="novalidate">
                <div class="control-group">
                <input
  type="text"
  class="form-control"
  id="email"
  placeholder="Email"
  required="required"
  data-validation-required-message="Please enter your email"
  oninvalid="this.setCustomValidity('Please enter a valid email')"
  onchange="this.setCustomValidity('')"
  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$|\d{10}"
  title="Please enter a valid email"
/>

                  <p class="help-block text-danger"></p>
                </div>
    
                
                <div class="control-group">
                <textarea
  class="form-control"
  rows="6"
  id="message"
  placeholder="Tell us what you need help with ?"
  required="required"
  data-validation-required-message="Please enter your message"
  minlength="10"
  oninvalid="this.setCustomValidity('Please enter a message with at least 10 characters')"
  onchange="this.setCustomValidity('')"
></textarea>
                  <p class="help-block text-danger"></p>
                </div>
                <div>
                  <input
                    class="btn btn-primary py-2 px-4"
                    type="submit"
                    id="sendMessageButton"
                    value="Send"
                  />
                  
                  
                </div>
            </form>
          </div>
          <script src="https://smtpjs.com/v3/smtp.js"></script>
<script>
  function sendEmail(){
    Email.send({
    SecureToken : "cf043be8-346b-4b38-96cb-df4eaa948083",
    To : 'staff.member008@gmail.com',
    From : "staff.member008@gmail.com",
    Subject : "test email",
    Body : " email: " + document.getElementById("email").value
    + "<br> message: " + document.getElementById("message").value

    
}).then(
  message => alert("message sent successfully")
);
  }
</script>
      </div>
     </div>
    </div>
  </div>


    <!-- Contact End -->


    <!-- Footer Start -->
    <div
      class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5"
    >
      <div class="row pt-5">
        <div class="col-lg-3 col-md-6 mb-5">
          <a
            href=""
            class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0"
            style="font-size: 40px; line-height: 40px"
          >
            <span class="text-white">CCIS GUIDE</span>
          </a>
          <p>
            website accessed by QR code provides CCIS guide to reach the location of any faculty member or administration office by performing a quick search .
          </p>
        
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
          <h3 class="text-primary mb-4">Get In Touch</h3>
          <div class="d-flex">
            <h4 class="fa fa-map-marker-alt text-primary"></h4>
            <div class="pl-3">
              <h5 class="text-white">Address</h5>
              <p>College of Computer and Information Sciences at imam ibn muhammad university, Riyadh</p>
            </div>
          </div>
          <div class="d-flex">
            <h4 class="fa fa-envelope text-primary"></h4>
            <div class="pl-3">
              <h5 class="text-white">Email</h5>
              <p>ccis@imamu.edu.sa</p>
            </div>
          </div>
          <div class="d-flex">
            <div class="pl-3">
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
          <h3 class="text-primary mb-4">Quick Links</h3>
          <div class="d-flex flex-column justify-content-start">
          <a class="text-white mb-2" href="Home.php"
              ><i class="fa fa-angle-right mr-2"></i>Home</a
            >
            <a class="text-white mb-2" href="about.php"
              ><i class="fa fa-angle-right mr-2"></i>About Us</a
            >
            <a class="text-white mb-2" href="Login.php"
              ><i class="fa fa-angle-right mr-2"></i>Staff login</a
            >
            <a class="text-white mb-2" href="formStudent.php"
              ><i class="fa fa-angle-right mr-2"></i>Student/Visitor</a
            >
            <a class="text-white mb-2" href="Request.php"
              ><i class="fa fa-angle-right mr-2"></i>Help</a
            >
            
          </div>
        
        </div>
        
      <div
        class="container-fluid pt-5"
        style="border-top: 1px solid rgba(23, 162, 184, 0.2) ;"
      >
        <p class="m-0 text-center text-white">
        
        </p>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"
      ><i class="fa fa-angle-double-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>
