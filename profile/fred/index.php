<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];

    $subject = $_POST['subject'];
    $to  = 'fmgbeoma@yahoo.com';
    $body = $_POST['message'];

    if($body == '' || $body == ' ') {
        $error[] = 'Message cannot be empty.';
    }
 

    if($subject == '' || $subject == ' ') {
        $error[] = 'Subject cannot be empty.';
    }

    if(empty($error)) {

        $config = include(dirname(dirname(dirname(__FILE__))).'/config.php');
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
        $con = new PDO($dsn, $config['username'], $config['pass']);

        $exe = $con->query('SELECT * FROM password LIMIT 1');
        $data = $exe->fetch();
        $password = $data['password'];

        $uri = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";

        header("location: $uri");

    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fredrick Uchechukwu Mgbeoma</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">


</head>
<body>

<div class="container">
    <h2 class="text-center">Fredrick Uchechukwu Mgbeoma</h2>

    <div class="text-center">
        <img src="https://avatars1.githubusercontent.com/u/22713293?v=4&u=b34b8416e286d7d1313581a15c68617728b351fd&s=400" alt="Fredrick Mgbeoma Avatar" class="avatar">
    </div>

    <div class="social text-center">
        <a href="https://github.com/fuchodeveloper" target="_blank">
            <i class="fa fa-github fa-4x" aria-hidden="true"></i>
        </a>

        <a href="https://twitter.com/fuchodeveloper" target="_blank">
            <i class="fa fa-twitter fa-4x" aria-hidden="true"></i>
        </a>

        <a href="https://hnginterns.slack.com/team/fred" target="_blank">
            <i class="fa fa-slack fa-4x" aria-hidden="true"></i>
        </a>
    </div>

    <div class="text-center bio-fred">
        <p>I'm a software developer based in Lagos, Nigeria. Speciality is providing software solutions and making dreams come through the awesome power of codes. A software evangelist and full stack mafia though I tend to spend more of my time on backend and DevOps. I generally enjoy building stuff, hacking things and consistently working on improving my skills. If there's a tech meetup in Lagos, you'd probably see me there. My second love is music, reason why I code with headphones on.</p>
    </div>

    <div class="text-center">
        <a href="https://github.com/fuchodeveloper/crud-repo" target="_blank">
            Hotels.ng internship Stage 1 Result
        </a>
    </div>

    <div class="contact text-center">
        <form action="" method="post">
            <div>
                <label for="subject">
                    <p>Subject</p>
                    <input type="text" name="subject" class="form-input" style="width: 18em;" required>
                </label>
            </div>

            <div>
                <label for="message">
                    <p>Message</p>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-input" required></textarea>
                </label>
            </div>
            <br>
            <div>
<!--                <input type="submit" value="Send">-->
                <button type="submit" class="submit-button">Send</button>
            </div>
        </form>
    </div>

</div>

</body>
</html>