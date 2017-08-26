<?php

    if(isset($_POST['contact_fName']) && isset($_POST['contact_lName']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])){
        $fName = $_POST['fName'];
        $lName = $_POST['lName'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        if(!empty($fName) && !empty($lName) && !empty($email) && !empty($subject) && !empty($message)){
            $to = "rachaeliwelunmor@gmail.com";
            $body = $fName . $lName . "\n\n" . $message;
            $headers = " From: " .$email;

            if (mail($to, $subject, $body, $headers)) {
                echo "your message has been sent, i'll get back to you as soon as i can";
            } else {
                echo "There was an error sending your mail, please try again later";
            } 
        }else{
            echo "all fields are required";
        }
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rachael Iwelunmor</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/rachaeliwelunmor.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic" rel="stylesheet" type="text/css">
    <script src="https://use.fontawesome.com/6d6c797eb7.js"></script>

</head>

<body>

<section class="introduction">
    <div class="photoNintro">
        <img src="http://res.cloudinary.com/raychelle-i/image/upload/v1503157334/IMG-20161126-WA0003-1-1_lyjyzj.jpg" alt="A picture of me">
    </div>

    <div class="introText">
        <p>
            My name is Rachael Iwelunmor. I&apos;m almost a graduate! After recently developing a passion for software engineering
            i&apos;m on the journey to "World class". My short term goal is to become a full stack developer, while my long term
            goal is to acquire in software engineering so that i can venture into robotics and AI development. I hope i make
            it to the end of this internship and have fun doing it . <br>
            <span> &mdash; Warmest Rachael.</span>
        </p>

        <ul class="contact">
            <li><a href="https://github.com/rachaeliwelunmor/Hng-Internship" target="_blank"><i class="fa fa-github"></i>Stage 1</a></li>
            <li><i class="fa fa-slack"></i><span>Slack UserName: Rachael_iwelunmor</span></li>
        </ul>

    </div>
</section>


<section class="contactSection">
    <h2>I&apos;d be glad to hear from you</h2>

    <form class="contactForm" action="rachaeliwelunmor.php" method="POST" name="contactForm">

        <div class="row">
            <div class="col span-1-of-3">
                <label for="fName">First Name</label>
            </div>
            <div class="col span-2-of-3">
                <input type="text" name="fName" id="fName" placeholder="Your First Name" required>
            </div>
        </div>

        <div class="row">
            <div class="col span-1-of-3">
                <label for="lName">Last Name</label>
            </div>
            <div class="col span-2-of-3">
                <input type="text" name="lName" id="lName" placeholder="Your Last Name" required>
            </div>
        </div>

        <div class="row">
            <div class="col span-1-of-3">
                <label for="email">Email</label>
            </div>
            <div class="col span-2-of-3">
                <input type="text" name="email" id="email" placeholder="Your Email Address" required>
            </div>
        </div>

        <div class="row">
            <div class="col span-1-of-3">
                <label for="subject">What would you like to do?</label>
            </div>
            <div class="col span-2-of-3">
                <select name="subject" id="subject" required>
                    <option disabled selected>Subject</option>
                    <option value="hi">Say hi</option>
                    <option value="job offer">Offer me a Job</option>
                    <option value="work with me">Work with me</option>
                    <option value="other">Other</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col span-1-of-3">
                <label for="message">Okay, tell me whats up</label>
            </div>
            <div class="col span-2-of-3">
                <textarea name="message" placeholder="Your message" id="message" required></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col span-1-of-3">
                <label for="submit">&nbsp;</label>
            </div>
            <div class="col span-2-of-3">
                <input type="submit" id="submit" name="submit" value="Send it!">
            </div>
        </div>

    </form>
</section>
</body>
</html>
