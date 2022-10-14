<?PHP
// form handler
if ($_POST && isset($_POST['sendfeedback'], $_POST['name'], $_POST['email'], $_POST['subject'])) {

	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	if (!$name) {
		$errorMsg = "Please enter your Name";
	} elseif (!$email || !preg_match("/^\S+@\S+$/", $email)) {
		$errorMsg = "Please enter a valid Email address";
	} elseif (!$message) {
		$errorMsg = "Please enter your comment in the Message box";
	} else {
		// send email and redirect
		$to = "feedback@example.com";
		if (!$subject) $subject = "Contact from website";
		$headers = "From: webmaster@example.com" . "\r\n";
		mail($to, $subject, $message, $headers);
		header("Location: http://www.example.com/thankyou.html");
		exit;
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head><!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GPX7DGBX6B"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GPX7DGBX6B');
</script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Bootstrap contact form with PHP example by BootstrapBay.com.">
	<meta name="author" content="BootstrapBay.com">
	<title>Bootstrap Contact Form With PHP Example</title>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h1 class="page-header text-center">Contact Form Example</h1>
				<form method="POST" action="<?PHP echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" accept-charset="UTF-8">
					<p><label>Your Name<strong>*</strong><br>
							<input type="text" size="48" name="name" value="<?PHP if (isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>"></label></p>
					<p><label>Email Address<strong>*</strong><br>
							<input type="email" size="48" name="email" value="<?PHP if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>"></label></p>
					<p><label>Subject<br>
							<input type="text" size="48" name="subject" value="<?PHP if (isset($_POST['subject'])) echo htmlspecialchars($_POST['subject']); ?>"></label></p>
					<p><label>Enquiry<strong>*</strong><br>
							<textarea name="message" cols="48" rows="8"><?PHP if (isset($_POST['message'])) echo htmlspecialchars($_POST['message']); ?></textarea></label></p>
					<p><input type="submit" name="sendfeedback" value="Send Message"></p>
				</form>
			</div>
		</div>
	</div>
	<script async src="assets/js/aos.js"></script>
	<script async src="assets/js/bootstrap.bundle.min.js"></script>
	<!-- 
<script async src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script async src="assets/vendor/swiper/swiper-bundle.min.js"></script> -->
	<script async src="assets/js/validate.js"></script>

	

<!-- Template Main JS File --> 
	<script async src="assets/js/main.js"></script>
</body>

</html>