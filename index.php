
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Brand & Web Designs</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top"  onclick = $("#menu-close").click(); >Brand &amp; Web Designs</a>
            </li>
            <li>
                <a href="#top" onclick = $("#menu-close").click(); >Home</a>
            </li>
            <li>
                <a href="#about" onclick = $("#menu-close").click(); >About</a>
            </li>
            <li>
                <a href="#services" onclick = $("#menu-close").click(); >Services</a>
            </li>
            <li>
                <a href="#portfolio" onclick = $("#menu-close").click(); >Portfolio</a>
            </li>
            <li>
                <a href="#contact" onclick = $("#menu-close").click(); >Contact</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center animatable bounceIn">
          <h1>Brand &amp; Web Designs</h1>
          <h3>the design portfolio of Brandon Webb</h3>
          <br />
          <div class="button" id="btn-dark">
            <div id="underline"></div>
              <a href="#about">Get to Know Me</a>
            </div>
            <!--<a href="#about" class="btn btn-dark btn-lg">Get to Know Me</a>-->
        </div>
    </header>

    <!-- About -->
    <section id="about" class="about">
        <div class="container ">
            <div class="row">
            	<div class="col-sm-4 animatable bounceInLeft">
                <img src="img/brandonwebb.jpg" alt="Super sexy guy" width="100%">
                </div>
                <div class="text-center col-lg-8 animatable bounceInRight">
                    <h2>Hi! I'm Brandon Webb</h2>
                    <p>&nbsp;</p>

                    <p class="lead">I’m a creative problem-solver that thinks outside the box. </p>
                    <p class="lead">I work well under pressure, while on a team, or by myself. </p>
                    <p class="lead">My passion is to create meaningful and practical designs.</p>
                    <br />
                      <div class="button animatable moveUp" id="btn-dark">
                      <div id="underline"></div>
                        <a href="#services">See what I can do</a>
                      </div>
                </div>
                <div class="col-lg-4">&nbsp;</div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Services -->
    <section id="services" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                  <h2>What I do</h2>
                  <hr class="small">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item animatable bounceInLeft">
                                <a href="#portfolio"><img src="img/BNW_web_icon.png" alt="Web Design"></a>
                                <h4> <strong>WEB DESIGN</strong></h4>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item animatable bounceIn">
                                <a href="#portfolio"><img src="img/BNW_brand_icon.png" alt="Branding"></a>
                                <h4><strong>BRANDING</strong></h4>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item animatable bounceIn">
                                 <a href="#portfolio"><img src="img/BNW_illustration_icon.png" alt="Illustration"></a>
                                <h4> <strong>ILLUSTRATION</strong></h4>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 ">
                            <div class="service-item animatable bounceInRight">
                                <a href="#portfolio"><img src="img/BNW_PRINT_icon.png" alt="Print Design"></a>
                                <h4> <strong>PRINT DESIGN</strong></h4>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Callout -->
    <aside class="callout">
        <div class="text-vertical-center">
          <h1 class="animatable bounceInLeft">Take a look</h1>
        </div>
    </aside>

    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>My Work</h2>
                    <hr class="small">


<!--insert modals-->

<div class="masonry gallery">
   <div class="item"><img class="gallery-img" src="/img/portfolio1.jpg"></div>
   <div class="item"><img class="gallery-img" src="/img/portfolio2.jpg"></div>
   <div class="item"><img class="gallery-img" src="/img/portfolio3.jpg"></div>
   <div class="item"><img class="gallery-img" src="/img/portfolio4.jpg"></div>
   <div class="item"><img class="gallery-img" src="/img/portfolio6.jpg"></div>
   <div class="item"><img class="gallery-img" src="/img/portfolio13.jpg"></div>
   <div class="item"><img class="gallery-img" src="/img/portfolio9.jpg"></div>
   <div class="item"><img class="gallery-img" src="/img/portfolio10.jpg"></div>
   <div class="item"><img class="gallery-img" src="/img/portfolio11.jpg"></div>
   <div class="item"><img class="gallery-img" src="/img/portfolio12.jpg"></div>
   <div class="item"><img class="gallery-img" src="/img/portfolio14.jpg"></div>
</div>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <button class="close" type="button" data-dismiss="modal">×</button>
          <h3 class="modal-title"></h3>
      </div>
      <div class="modal-body">
      </div>
    </div>
  </div>
</div>
    </section>

    <!-- Contact -->
    <div id="contact" class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" id="text">
                    <h1>Get in touch</h1>

                    <?php
                    	function has_header_injection($str) {
                        	return preg_match( "/[\r\n]/", $str);
                    }

                    if (isset ($_POST['contact_submit'])) {

						$name	=trim($_POST['name']);
						$email	=trim($_POST['email']);
						$sub	=trim($_POST['subject']);
						$msg	=$_POST['message'];

						if (has_header_injection($name) || has_header_injection($email)) {
							die();
						}

						if ( !$name || !$email || !$msg ) {
							echo "All fields required.";
							exit;
						}

                    	$to = "webbdesigner3@gmail.com";

						$subject = "Site Message";

						$message  = "Name: $name\r\n";
						$message .= "Email: $email\r\n";
            $message .= "Subject: $sub\r\n";
						$message .= "Message:\r\n$msg";
						$message  = wordwrap($message, 72);

						$headers  = "MIME-Version: 1.0\r\n";
						$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
						$headers .= "From: webbdesigner3@gmail.com \r\n";
						$headers .= "X-Priority: 1\r\n";
						$headers .= "X-MSMail-Priority: High\r\n\r\n";
						$from = 'webbdesigner3@gmail.com';
						mail( $to, $subject, $message, $headers );
        ?>

        <h5>Thank You!</h5>

        <?php } else { ?>



					<form method="post" action="" class="cf">
  						<div class="half left cf">
    						<input type="text" id="name" placeholder="Name" name="name">
    						<input type="email" id="email" placeholder="Email address" name="email">
    						<input type="text" id="subject" placeholder="Subject" name="subject">
  						</div>
  						<div class="half right cf">
    						<textarea name="message" type="text" id="message" placeholder="Message"></textarea>
  						</div>
  							<input type="submit" value="Submit" id="input-submit" name="contact_submit">
					</form>

                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                  <h4><strong>Brandon Webb - Brand &amp; Web Designs</strong></h4>
                    <ul class="list-unstyled">
                      <li><em class="fa fa-phone fa-fw"></em> (252) 917-9348</li>
                      <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:webbdesigner3@gmail.com">webbdesigner3@gmail.com</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline animatable bounceIn">
                        <li>
                            <a target="_blank" href="https://www.facebook.com/brandon.webb.7399"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a target="_blank" href="https://twitter.com/webbdesigning"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.instagram.com/webbdesigner3"><i class="fa fa-instagram fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.codepen.io/webbdesigner3"><i class="fa fa-codepen fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; 2018</p>
              </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });

    // modal Action
$(document).ready(function () {
  $(".gallery-img").click(function(){
    var t = $(this).attr("src");
    var title = $(".modal-title");
    $(".modal-body").html("<img src='"+t+"' class='modal-img'>");
    $("#myModal").modal();

    content.empty();
    title.empty();

  	var id = this.id;
     var repo = $("#img-repo .item");
     var repoCopy = repo.filter("#" + id).clone();
     var active = repoCopy.first();

    active.addClass("active");
    title.html(active.find("img").attr("title"));
  	content.append(repoCopy);
  });
});
  </script>


  <script>

    // animations
  jQuery(function($) {

// Function which adds the 'animated' class to any '.animatable' in view
    var doAnimations = function() {

  // Calc current offset and get all animatables
  var offset = $(window).scrollTop() + $(window).height(),
      $animatables = $('.animatable');

  // Unbind scroll handler if we have no animatables
  if ($animatables.size() == 0) {
    $(window).off('scroll', doAnimations);
  }

  // Check all animatables and animate them if necessary
  $animatables.each(function(i) {
     var $animatable = $(this);
    if (($animatable.offset().top + $animatable.height() - 20) < offset) {
      $animatable.removeClass('animatable').addClass('animated');
    }
  });

};

// Hook doAnimations on scroll, and trigger a scroll
$(window).on('scroll', doAnimations);
$(window).trigger('scroll');

});
</script>


</body>

</html>
