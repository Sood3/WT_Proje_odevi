<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Teknolojileri Proje Ödevi PHP sayfası</title>

    <!--css link-->
    <link href="style/PHPstyle.css" rel="stylesheet" />

</head>

<body>

<!--showing datas with php-->
<div class="container">
        <div class="box">
            <h2><?php $name = $_POST['name']; echo "Form başarıyla gönderildi. Teşekkürler, $name!"."<br>" ?></h2>
            <p><?php

                $name = $_POST['name'];
                $mail = $_POST['mail'];
                $shortcontent = $_POST['short-content'];
                $explanation = $_POST['explanation'];
                $school = $_POST['school'];

                echo "Ad: " . htmlspecialchars($name) . "<br>";
                echo "Email: " . htmlspecialchars($mail) . "<br>";
                echo "Okul: " . htmlspecialchars($school) . "<br>";
                echo "Konu: " . htmlspecialchars($shortcontent) . "<br>";
                echo "Açıklama: " . htmlspecialchars($explanation) . "<br>";

            ?></p>
            <div class="button-container">
                <button onclick="Return()" type="button">Ana Sayfaya dön</button>
            </div>
        </div>
    </div>
    
    <!--to return main page after succesfull process with js-->
    <script>
        function Return(){
            window.location.href="AnaSayfa.html"
        }

    </script>
</body>
</html>