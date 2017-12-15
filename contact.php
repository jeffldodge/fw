<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Untitled Document</title>
	<link href="_css/style.css" type="text/css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
	<!--header font-->
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--Include this line in your HTML-->
	<link rel="stylesheet" href="_scripts/lightbox2-master/css/lightbox.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $referral_method = $_POST['referral_method'];
    $comments = $_POST['comments'];
    $subscribe = $_POST['subscribe'];
    $rating = $_POST['rating'];
    $other[] = $_POST['other[]'];
    $from = 'good4kim@gmail.com';
    $to = 'dodgkim@isu.com';
    $subject = 'Feedback Form Output';
    $body = "<p>Name: $name</p> <p>email: $email</p> <p>referral_method: $referral_method</p> <p>comments: $comments</p> <p>subscribe: $subscribe</p>";
                             
    if ($_POST['submit']) {
        if (mail ($to, $subject, $body, $from)) { 
            echo '<p>To: ' .$to.'</p><p>From: '.$from.'</p><p>Subject: '.$subject.'</p><p>Body: '.$body.'</p>';
        } else {
            echo '<p>To: $to</p><p>From: $from</p><p>Subject: $subject</p><p>Body: $body</p>';
        }
    }

    ?>
</head>

<body>
        <!--includes header from header file-->
        <header></header>
        <div class="section-holder contact-section-holder">
<section class="main-section">
        <h1>[ Contact Me ]</h1>
        <!--start contact me form-->
        <div class="contact-info">
            <form method="post" action="contact.php">
                <div class="form-group">
                    <label class="col-form-label" for="nameInput">Your Name</label>
                    <input name="name" type="text" class="form-control" id="nameInput" placeholder="Jane Doe">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="emailInput">Email address</label>
                    <input name="email" type="email" class="form-control" id="emailInput" aria-describedby="emailHelp" placeholder="jane.doe@gmail.com">
                    <small id="emailHelp" class="form-text text-muted">I will never share your email with anyone else.</small>
                </div>
                <strong>How did you hear about my website?</strong>
                <div class="form-check">
                    <label class="form-check-label">
                        <input name="referral_method" class="form-check-input" type="radio" id="referralWeb" value="search">
                        Web Search
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input name="referral_method" class="form-check-input" type="radio" id="referralFriend" value="friend">
                        Friend
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input name="referral_method" class="form-check-input" type="radio" id="referralOther" value="other">
                        Other
                    </label>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="commentBox">Do you have any questions or comments you would like to share with me?</label>
                    <textarea name="comments" class="form-control" id="commentBox" rows="3" placeholder="I love your photos!  Where can I purchase prints?"></textarea>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input name="subscribe" class="form-check-input" type="checkbox" id="subscribe" value="subscribe">
                       Notify me when you add photos
                    </label>
                </div>
                <input class="btn btn-primary" id="submit" name="submit" type="submit" value="Submit">
            </form>
            
            <ul>
                <li><strong>208.497.8409</strong></li>
                <li>Kim Dodge</li>
                <li><a class="download-link" href="_docs/resume.pdf"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> <span>Resume (PDF)</span></a></li>
            </ul>
        </div>
            
    </section>
    </div>
    <!--includes footer from footer file-->
    <footer></footer>
    <!--Include this line in your HTML HERE-->

	
	<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" crossorigin="anonymous"></script>
		<script src="./_scripts/main.js"></script>
</body>
</html>
