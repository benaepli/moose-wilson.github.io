<?php
	// Start session.
	session_start();
	
	// Set a key, checked in mailer, prevents against spammers trying to hijack the mailer.
	$security_token = $_SESSION['security_token'] = uniqid(rand());
	
	if ( ! isset($_SESSION['formMessage'])) {
		$_SESSION['formMessage'] = 'Fill in the form below to send me an email.';	
	}
	
	if ( ! isset($_SESSION['formFooter'])) {
		$_SESSION['formFooter'] = ' ';
	}
	
	if ( ! isset($_SESSION['form'])) {
		$_SESSION['form'] = array();
	}
	
	function check($field, $type = '', $value = '') {
		$string = "";
		if (isset($_SESSION['form'][$field])) {
			switch($type) {
				case 'checkbox':
					$string = 'checked="checked"';
					break;
				case 'radio':
					if($_SESSION['form'][$field] === $value) {
						$string = 'checked="checked"';
					}
					break;
				case 'select':
					if($_SESSION['form'][$field] === $value) {
						$string = 'selected="selected"';
					}
					break;
				default:
					$string = $_SESSION['form'][$field];
			}
		}
		return $string;
	}
?><!DOCTYPE html>
<html>
<head>
  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="robots" content="index, follow" />
		<meta name="generator" content="RapidWeaver" />
		
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width">
  <meta name="baseurl" content="http://moose-wilson.cf/">

  <title>Contact Us | Moose-Wilson LLC</title>

  <link rel="stylesheet" type="text/css" media="all" href="../rw_common/themes/offroad/consolidated.css?rwcache=543672588" />
		
  
  <link href="https://fonts.googleapis.com/css?family=Istok+Web:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="../rw_common/themes/offroad/assets/javascript/html5shiv.js"></script>
    <script src="../rw_common/themes/offroad/assets/javascript/respond.js"></script>
  <![endif]-->

  
  
  
</head>

<body>
  <div id="page" class="site">
    <a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>

    <nav class="site-navigation" role="navigation">
      <div class="row">
        <div class="col-xs-12">
          <div class="site-navigation-inner">
            <ul><li><a href="../" rel="">Home</a></li><li class="selected"><a href="./" rel="" class="current">Contact Us</a></li></ul>
          </div>
        </div>
      </div>
    </nav><!-- .site-navigation -->

    <header id="masthead" class="site-header" role="banner">
      <div class="container">
        <div class="site-branding">
          <div class="site-title">
            <a href="http://moose-wilson.cf/">Moose-Wilson LLC</a>
          </div>

          <div class="site-logo">
            <a href="http://moose-wilson.cf/" class="site-logo"><img src="../rw_common/images/bears-on-road-e1448468221491.jpg" width="800" height="533" alt="Moose-Wilson LLC"/></a>
          </div>

          <div class="site-description">
            If you want to rent a house in Jackson Hole, follow us!
          </div>
        </div><!-- .site-branding -->
      </div><!-- .container -->
    </header><!-- .site-header -->

    <div class="container container-main">
      <div class="row">
        <main id="content" class="site-content col-xs-12 col-md-9" role="main">
          <div class="site-content-inner">
            
<div class="message-text"><?php echo $_SESSION['formMessage']; unset($_SESSION['formMessage']); ?></div><br />

<form class="rw-contact-form" action="./files/mailer.php" method="post" enctype="multipart/form-data">
	 <div>
		<label>Your Name</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element0'); ?>" name="form[element0]" size="40"/><br /><br />

		<label>Your Email</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element1'); ?>" name="form[element1]" size="40"/><br /><br />

		<label>Subject</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element2'); ?>" name="form[element2]" size="40"/><br /><br />

		<label>Message</label> *<br />
		<textarea class="form-input-field" name="form[element3]" rows="8" cols="38"><?php echo check('element3'); ?></textarea><br /><br />

		<div style="display: none;">
			<label>Spam Protection: Please don't fill this in:</label>
			<textarea name="comment" rows="1" cols="1"></textarea>
		</div>
		<input type="hidden" name="form_token" value="<?php echo $security_token; ?>" />
		
		<input class="form-input-button" type="submit" name="submitButton" value="Submit" />
	</div>
</form>

<br />
<div class="form-footer"><?php echo $_SESSION['formFooter']; unset($_SESSION['formFooter']); ?></div><br />

<?php unset($_SESSION['form']); ?>

          </div>
        </main>

        <aside class="site-sidebar col-xs-12 col-md-3">
          <div class="sidebar">
            
          </div>

          <div class="plugin-sidebar">
            
          </div>
        </aside>
      </div>
    </div>

    <footer id="footer" class="site-footer" role="contentinfo">
      <div class="row">
        <div class="col-xs-12">
          &copy; 2018 Moose-Wilson LLC <a href="#" id="rw_email_contact">Contact Us</a><script type="text/javascript">var _rwObsfuscatedHref0 = "mai";var _rwObsfuscatedHref1 = "lto";var _rwObsfuscatedHref2 = ":ad";var _rwObsfuscatedHref3 = "min";var _rwObsfuscatedHref4 = "@mo";var _rwObsfuscatedHref5 = "ose";var _rwObsfuscatedHref6 = "-wi";var _rwObsfuscatedHref7 = "lso";var _rwObsfuscatedHref8 = "n.c";var _rwObsfuscatedHref9 = "f";var _rwObsfuscatedHref = _rwObsfuscatedHref0+_rwObsfuscatedHref1+_rwObsfuscatedHref2+_rwObsfuscatedHref3+_rwObsfuscatedHref4+_rwObsfuscatedHref5+_rwObsfuscatedHref6+_rwObsfuscatedHref7+_rwObsfuscatedHref8+_rwObsfuscatedHref9; document.getElementById("rw_email_contact").href = _rwObsfuscatedHref;</script>
        </div>
      </div>
    </footer>
  </div>

  <div class="body-overlay"></div>

  <!-- Javascript includes -->
  <script src="../rw_common/themes/offroad/javascript.js?rwcache=543672588"></script>
  <script type="text/javascript" src="../rw_common/themes/offroad/assets/javascript/background-blur.js?rwcache=543672588"></script>
		<script type="text/javascript" src="../rw_common/themes/offroad/assets/javascript/sidebar-right.js?rwcache=543672588"></script>
		
  
</body>
</html>
