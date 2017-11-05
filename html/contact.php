<?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "demo@crunchpress.com";
    $email_subject = "New Contact Form Submission";
    
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(
        !isset($_POST['email']) ||
        !isset($_POST['name']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');      
    }
     
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $comments = $_POST['comments']; // required
     

  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
    
	$email_message .= "Name: ".clean_string($name)."\n"; 
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers); 
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Archeé  - Thank You</title>

<!--[if lt IE 9]>

	<script src="js/html5shiv.js"></script>

<![endif]-->
<!--[if lt IE 9]>

	<script src="js/mq.js"></script>

<![endif]-->
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta charset="UTF-8">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<meta name="viewport" content="width=device-width">
<!-- Css Files Start -->
<link href="css/style.css" rel="stylesheet" type="text/css" />
<!-- All css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<!-- Bootstrap Css -->
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="css/customIE.css" /><![endif]-->
<!-- Css Files End -->
<script type="text/javascript">
<!--
function delayer(){
    window.location = "<?php echo $_SERVER['HTTP_REFERER']; ?>"
}
//-->
</script>
</head>
<body onLoad="setTimeout('delayer()', 1000)">

<!-- Start Main Wrapper -->

<div id="wrapper">

  <!-- Start of Header -->
  <header id="header" class="hinner mbtm">
    <section class="container">
      <section class="row"> 
        <!-- Start of Logo Container -->
        <section class="span3"> 
        	<div id="logo"><a href="index.html"> <img src="images/logo.png" alt="Logo" /></a></div>
        </section>
        <!-- End of Logo Container --> 
        <!-- start of Social & Nav Container -->
        <section class="span9"> 
          <!-- Top Social & Info Start -->
          <div id="top_social">
          <div id="top_bar">
              <div class="socialicons">
                <div class="hidden-phone socialicons_class"> <a title="Visit Flickr Plus page" href="#" class="social_active social_flickr" ><span style="display: inline;" class="da-animate da-slideFromLeft"></span></a> <a title="Visit Twitter page" href="#" class="social_active social_twitter" ><span style="display: inline;" class="da-animate da-slideFromBottom"></span></a> <a title="Visit Facebook page" href="#" class="social_active social_facebook" ><span style="display: inline;" class="da-animate da-slideFromRight"></span></a> <a title="Visit Vimeo Plus page" href="#" class="social_active social_vimeo" ><span style="display: inline;" class="da-animate da-slideFromBottom"></span></a> <a title="Visit Trumblr page" href="#" class="social_active social_trumblr" ><span style="display: inline;" class="da-animate da-slideFromRight"></span></a> <a title="Visit Linked In page" href="#" class="social_active social_linkedin" ><span style="display: inline;" class="da-animate da-slideFromLeft"></span></a> </div>
              </div>
              <div id="nav_info">
                <ul>
                  <li> <i class="icon-envelope"></i> <a href="mailto:projects@company.com">projects@company.com</a></a> </li>
                  <li> <i class="icon-time"></i> Monday - Friday 10:00 - 18:00 </li>
                </ul>
              </div>
          </div>
          <!-- End of Top Social & Info --> 
          <!-- start of Navigation -->
          <nav id="nav">
            <div class="navbar navbar-inverse">
              <div class="navbar-inner">
                <button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <div class="nav-collapse collapse">
                  <ul class="nav">
                    <li> <a href="index.html">Home</a> </li>
                    <li> <a href="about-us.html">About Us</a> </li>
                    <li class="dropdown"> <a href="portfolio-two-col.html" class="dropdown-toggle"> Portfolio<b class="caret"></b> </a>
                      <ul class="dropdown-menu">
                        <li><a href="portfolio-two-col.html">Portfolio Two Colum</a></li>
                        <li><a href="portfolio-three-col.html">Portfolio Three Colum</a></li>
                        <li><a href="portfolio-four-col.html">Portfolio Four Colum</a></li>
                      </ul>
                    </li>
                    <li> <a href="service.html">Services</a> </li>
                    <li class="dropdown"> <a href="blog.html" class="dropdown-toggle">Our Blog<b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li> <a href="blog-detail.html">Blog Detail</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"> <a href="#" class="dropdown-toggle"> Pages<b class="caret"></b> </a>
                      <ul class="dropdown-menu">
                        <li><a href="career.html">Career</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="404-page.html">404 Page</a></li>

                      </ul>
                    </li>
                    <li> <a href="contact-us.html">Contact</a> </li>
                  </ul>
                </div>
                
                <!--/.nav-collapse --> 
              </div>
              <!-- /.navbar-inner --> 
            </div>
            
          </nav>
          </div>
          <!-- End of Navigation --> 
        </section>
        <!-- End of Social & Nav Container --> 
      </section>
    </section>
    <!-- start of Main Slider --> 
  </header>
  <!-- End of Header -->

  <!-- Start of 404 page-->

  <section id="content_Wrapper" class="mbtm">

    <section class="container container-fluid">

      <section class="row-fluid">

        <section class="span12 error-page">

          <h2>Thank You</h2>

          <p>Thank you for your submission, as soon as we get this we will get back to you shortly.</p>

        </section>

      </section>

    </section>

  </section>

  <!-- End of 404 page-->

  <!-- start of footer elements -->

  <section id="footer_elements">

    <section class="container container-fluid">

      <section class="row-fluid"> <img src="images/footer_element.png" alt="Footer Elements" class="fimage" /> </section>

    </section>

  </section>

  <!-- End of Footer Elements -->

  <!-- start of footer elements -->

  <footer id="footer">

    <section class="container container-fluid">

      <section class="row-fluid">

        <figure class="span3 widget twitter_widget">

          <h4> Twitter updates </h4>

          <ul id="twitter_widget">

            <li>

              <p> In vitae sem nec massa imperdiet condimentum. Donec ut mauris vel risus rutrum commodo massa imperdie massa mauris vel risusimperdiet... </p>

              <a href="#"> May 25, 2013 / 55/2 7:55 pm </a> </li>

            <li>

              <p> In vitae sem nec massa imperdiet condimentum. Donec ut mauris vel risus rutrum commodo massa imperdie massa mauris vel risusimperdiet... </p>

              <a href="#"> May 25, 2013 / 55/2 7:55 pm </a> </li>

            <li>

              <p> In vitae sem nec massa imperdiet condimentum. Donec ut mauris vel risus rutrum commodo massa imperdie massa mauris vel risusimperdiet... </p>

              <a href="#"> May 25, 2013 / 55/2 7:55 pm </a> </li>

          </ul>

          <span class="sep"></span> <span class="follow_twitter"> <i class="icon-twitter"></i> <a href="#"> Follow us on Twitter! </a></span> </figure>

        <figure class="span3 widget gallery_widget">

          <h4> Recent projects </h4>

          <ul id="gallery_widget" class="gallery">

            <li> <img src="images/glry-img1.jpg" alt="" /> <span> <a href="images/glry-img1.jpg" data-gal="prettyPhoto[gallery1]"> <img class="img_hover_gal" src="images/lightbox-icon.png" alt=""/> </a> </span> <span class="border_line"></span> </li>

            <li> <img src="images/glry-img2.jpg" alt="" /> <span> <a href="images/glry-img2.jpg" data-gal="prettyPhoto[gallery1]"> <img class="img_hover_gal" src="images/lightbox-icon.png" alt=""/> </a> </span> <span class="border_line"></span> </li>

            <li> <img src="images/glry-img3.jpg" alt="" /> <span> <a href="images/glry-img3.jpg" data-gal="prettyPhoto[gallery1]"> <img class="img_hover_gal" src="images/lightbox-icon.png" alt=""/> </a> </span> <span class="border_line"></span> </li>

            <li> <img src="images/glry-img4.jpg" alt="" /> <span> <a href="images/glry-img4.jpg" data-gal="prettyPhoto[gallery1]"> <img class="img_hover_gal" src="images/lightbox-icon.png" alt=""/> </a> </span> <span class="border_line"></span> </li>

            <li> <img src="images/glry-img5.jpg" alt="" /> <span> <a href="images/glry-img5.jpg" data-gal="prettyPhoto[gallery1]"> <img class="img_hover_gal" src="images/lightbox-icon.png" alt=""/> </a> </span> <span class="border_line"></span> </li>

            <li> <img src="images/glry-img6.jpg" alt="" /> <span> <a href="images/glry-img6.jpg" data-gal="prettyPhoto[gallery1]"> <img class="img_hover_gal" src="images/lightbox-icon.png" alt=""/> </a> </span> <span class="border_line"></span> </li>

            <li> <img src="images/glry-img7.jpg" alt="" /> <span> <a href="images/glry-img7.jpg" data-gal="prettyPhoto[gallery1]"> <img class="img_hover_gal" src="images/lightbox-icon.png" alt=""/> </a> </span> <span class="border_line"></span> </li>

            <li> <img src="images/glry-img8.jpg" alt="" /> <span> <a href="images/glry-img8.jpg" data-gal="prettyPhoto[gallery1]"> <img class="img_hover_gal" src="images/lightbox-icon.png" alt=""/> </a> </span> <span class="border_line"></span> </li>

            <li> <img src="images/glry-img9.jpg" alt="" /> <span> <a href="images/glry-img9.jpg" data-gal="prettyPhoto[gallery1]"> <img class="img_hover_gal" src="images/lightbox-icon.png" alt=""/> </a> </span> <span class="border_line"></span> </li>

          </ul>

        </figure>

        <figure class="span3 widget popular_project">

          <h4> Popular Projects </h4>

          <ul id="popular_project">

            <li>

              <p> Aenean lacinia biben dum ctetu rasonec idelitmattis consectetur </p>

              <a href="#"> May 23, 2013 </a> , <a href="#"> 11 Comments </a> </li>

            <li>

              <p> Aenean lacinia biben dum ctetu rasonec idelitmattis consectetur </p>

              <a href="#"> May 23, 2013 </a> , <a href="#"> 11 Comments </a> </li>

            <li>

              <p> Aenean lacinia biben dum ctetu rasonec idelitmattis consectetur </p>

              <a href="#"> May 23, 2013 </a> , <a href="#"> 11 Comments </a> </li>

          </ul>

        </figure>

        <figure class="span3 widget contact_form">

          <h4> Get in Touch </h4>

          <form name="contact_form" method="post" action="contact.php">

            <input type="text" value="enter name" name="name" />

            <input type="text" value="Email*" name="email" />

            <textarea name="comments" rows="5" cols="10"> </textarea>

            <input type="submit" value="Send Message" />

          </form>

        </figure>

      </section>

    </section>

  </footer>

  <!-- End of Footer Elements -->

  <section id="copyright">

    <section class="container container-fluid">

      <section class="row-fluid">

        <section class="span4"> <p>Copyright &copy; 2013 <a href="http://www.crunchpress.com"> Crunchpress.com </a></p> </section>

        <section class="span8">

           <ul id="footer_links">
            <li> <a href="index.html"> Home </a> /</li>
            <li> <a href="blog.html"> Blog </a> /</li>
            <li> <a href="faq.html"> FAQs </a> /</li>
            <li> <a href="contact-us.html"> Contact </a> </li>
          </ul>

        </section>

      </section>

    </section>

  </section>

</div>

<!-- End of Wrapper -->

<!-- JS Files Start -->

<script type="text/javascript" src="js/lib-1-9-1.js"></script><!-- lib Js -->

<script type="text/javascript" src="js/lib-1-7-1.js"></script><!-- lib Js -->

<script type="text/javascript" src="js/modernizr.js"></script><!-- Modernizr -->

<script type="text/javascript" src="js/easing.js"></script><!-- Easing js -->

<script type="text/javascript" src="js/bootstrap.js"></script><!-- Bootstrap -->

<script type="text/javascript" src="js/bs_datepicker.js"></script><!-- Bootstrap Date Picker -->

<script type="text/javascript" src="js/bxslider.js"></script><!-- BX Slider -->

<script type="text/javascript" src="js/isotope.js"></script><!-- ISoTope Sorting Filter -->

<script type="text/javascript" src="js/grayscale.js"></script><!-- GreyScale -->

<script type="text/javascript" src="js/clearInput.js"></script><!-- Input Clear -->

<script type="text/javascript" src="js/prettyPhoto.js"></script><!-- Pretty Photo -->

<script type="text/javascript" src="js/social.js"></script><!-- Social Media Hover Effect -->

<script type="text/javascript" src="js/custom.js"></script><!-- Custom / Functions -->

<!--[if IE 8]>

     <script src="js/ie8_fix_maxwidth.js" type="text/javascript"></script>

<![endif]-->

</body>

</html>
<?php
}
?>