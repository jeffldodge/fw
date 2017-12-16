<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Untitled Document</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
	<!--header font-->
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--Include this line in your HTML-->
	<link rel="stylesheet" href="_scripts/lightbox2-master/css/lightbox.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="_css/style.css" type="text/css" rel="stylesheet">
        <?php
	/*Remember to change the names to match the names in your html, this hooks the php to the html*/
    $name = $_POST['name'];
    $email = $_POST['email'];
    $referral_method = $_POST['referral_method'];
    $comments = $_POST['comments'];
    $subscribe = $_POST['subscribe'];
    $use = $_POST['use'];
    $from = 'dodgkim@isu.edu';
    $to = 'carrdavi@isu.edu,dodgkim@isu.edu';
    $subject = 'Contact Form Submission';
	/*This is formatted to make the email sent to me include line breaks \n for easier reading*/
    $body = "Name: $name \n email: $email \n referral_method: $referral_method \n comments: $comments \n subscribe: $subscribe \n use: $use ";
                             
    if ($_POST['submit']) {
        if (mail ($to, $subject, $body, $from)) { 
            echo '<div class="alert alert-success alert-dismissible fade show">Your email has been sent!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
            
        } else {
            echo '<div class="alert alert-danger alert-dismissible fade show">Sorry, there was a problem sending your message. Please try again.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
        }
        
    }
?>
</head>

<body>
    <div class="container-fluid main-container p-0 d-flex flex-column">

        <!--includes header from header file-->
        <header></header>
        <div class="section-holder contact-section-holder">
            <section class="main-section container">
                <h1>[ Contact Me ]</h1>
                <!--start contact me form-->
                <div class="row">
                    
                    <div class="col-12 col-lg-6 col-xl-4 contact-info">
                            <form method="post" action="form.php" enctype="multipart/form-data">
                                <div class="form-group">
                                   <!--input tells the page that content will be entered by the user, for=tells the page that this is a form, the name must always use _underscore if you use two words, no spaces allowed. For name, you choose a name that you will also put in the php, this is what makes your php work.  Class is what is styled from the bootstrap css, this is created by bootstrap.  id must also be in camelCase (you can choose any name you like just make sure it makes sense). Placeholder is text that can be in a form field as an example for users to follow, it will be delted when they start typing. You can also put custom labels that will show up on the page after the label tag but before the closing label tag.-->
                                    <label class="col-form-label" for="nameInput">Your Name</label>
                                    <input name="name" type="text" class="form-control" id="nameInput" placeholder="Your name here">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label" for="emailInput">Email address</label>
                                    <input name="email" type="email" class="form-control" id="emailInput" aria-describedby="emailHelp" placeholder="youremail@gmail.com">
                                    <small id="emailHelp" class="form-text text-muted">I will never share your email with anyone else.</small>
                                </div>
                                <div class="col-form-label">How did you hear about my website?</div>
                                <!--radio buttons-->
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
                                <!--drop down-->
                                <div class="form-group">
                                    <label for="useSelect">I am interested in photos for</label>
                                    <select name="use" class="custom-select" id="useSelect">
                                        <option selected>Choose one</option>
                                        <option value="Personal">Personal use</option>
                                        <option value="Editorial">Editorial use</option>
                                        <option value="Commerical">Commercial use</option>
                                    </select>
                                </div>
                                <!--comment box-->
                                <div class="form-group">
                                    <label class="col-form-label" for="commentBox">Do you have any questions or comments you would like to share with me?</label>
                                    <textarea name="comments" class="form-control" id="commentBox" rows="3" placeholder="I love your photos!  Where can I purchase prints?"></textarea>
                                </div>
                                <!--check box-->
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input name="subscribe" class="form-check-input" type="checkbox" id="subscribe" value="subscribe">
                                       Notify me when you add photos
                                    </label>
                                </div>
                                <!--This adds a submit button which submits the form to the whoever you have the forms emailing to in the php-->
                                <input class="btn btn-primary" id="submit" name="submit" type="submit" value="Submit">
                            </form>
                            <p class="mt-3">If you need to get in touch with me directly call 208.497.8409</p>
                    </div>
                    
                </div>
            </section>
        </div>
        <!--includes footer from footer file-->
        <footer></footer>
        <!--Include this line in your HTML HERE-->  
    </div>
	
	<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" crossorigin="anonymous"></script>
		<script src="./_scripts/main.js"></script>
</body>
</html>
