<?php
session_start();

// makes both button hidden
$show_success_button = false;
$show_error_button = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];

    //get email without domain
    $email_parts = explode('@', $email);
    $email_username = $email_parts[0];

    if ($email_username == $password) {
        $_SESSION['email'] = $_POST['email'];
        //show button if login have succeed
        $show_success_button = true;
    } else {
        //show button if login have failed
        $show_error_button = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP kontrol ve başarısız giriş sayfası</title>

    <!--css link-->
    <link href="/style/PHPstyle.css" rel="stylesheet" />

</head>
<body>

    <div class="container">
        <div class="box">
            <!--arranging header according to result-->
            <h3><?php if ($show_success_button): ?>
                Hoşgeldin, <?php echo $email_username ?>!
            <?php endif; ?>

            <?php if ($show_error_button): ?>
                Epostanız ile şifreniz uyuşmuyor
            <?php endif; ?></h3>
            
            <!--arranging buttons according to result-->
            <div class="button-container">
            <?php if ($show_success_button): ?>
                <a href="/../AnaSayfa.html"><button type="button">Ana Sayfaya Dön</button></a>
            <?php endif; ?>

            <?php if ($show_error_button): ?>
                <a href="/Girisyap.html"><button type="button">Giriş Yap Sayfasına Dön</button></a>
            <?php endif; ?>
            </div>
        </div> 
    </div>

</body>
</html>