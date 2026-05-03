<?php
$msg = "";

if(isset($_POST['submit'])){
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = "youremail@example.com"; // 👉 এখানে নিজের email দিবি
    $headers = "From: ".$email;

    if(mail($to, $subject, $message, $headers)){
        $msg = "💖 Message sent successfully!";
    } else {
        $msg = "❌ Failed to send message";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Contact</title>

<style>

/* 🌸 Baby Style Design */
body{
    background:#fff0f5; /* soft pink */
    font-family:Calibri;
}

/* container */
.contact-section{
    max-width:500px;
    margin:50px auto;
    background:white;
    padding:25px;
    border-radius:15px;
    box-shadow:0 5px 15px rgba(0,0,0,0.1);
}

/* title */
h2{
    text-align:center;
    color:#ff69b4;
}

/* form */
.contact-form{
    display:flex;
    flex-direction:column;
    gap:12px;
}

/* input */
.contact-form input,
.contact-form textarea{
    padding:10px;
    border-radius:10px;
    border:1px solid #ffd1dc;
    font-size:15px;
}

/* button */
.contact-form .btn{
    background:#ff69b4;
    color:white;
    padding:10px;
    border:none;
    border-radius:20px;
    cursor:pointer;
    font-size:16px;
    transition:0.3s;
}

.contact-form .btn:hover{
    background:#ff1493;
}

/* message */
.form-msg{
    text-align:center;
    font-weight:bold;
    color:green;
}

</style>
</head>

<body>

<div class="contact-section">
<h2>💌 Contact Us</h2>

<div class="form-msg"><?php echo $msg; ?></div>

<form method="post" class="contact-form">

<input type="text" name="name" placeholder="Your Name 👶" required>
<input type="email" name="email" placeholder="Your Email 📧" required>
<input type="text" name="subject" placeholder="Subject ✨" required>
<textarea name="message" placeholder="Your Message 💖" required></textarea>

<button type="submit" name="submit" class="btn">Send 💌</button>

</form>
</div>

</body>
</html>