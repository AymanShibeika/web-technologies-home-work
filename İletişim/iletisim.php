<?php


   
    $firstName = htmlspecialchars($_POST['firstName'] );
    $lastName = htmlspecialchars($_POST['lastName'] );
    $gmail = htmlspecialchars($_POST['gmail'] );
    $password = htmlspecialchars($_POST['pass'] );
    $telNumber = htmlspecialchars($_POST['telNumber'] );
    $state = htmlspecialchars($_POST['select'] );
    $color = htmlspecialchars($_POST['color'] );
    $birth = htmlspecialchars($_POST['birth'] );
    $time = htmlspecialchars($_POST['time'] );
    $likedPage = htmlspecialchars($_POST['Pgradio'] );
    $rating = htmlspecialchars($_POST['rating'] );
    $textarea = htmlspecialchars($_POST['textarea'] );

    echo "<h2>Form Bilgileriniz:</h2>";
    echo "Adınız: <strong>$firstName</strong><br>";
    echo "Soyadınız: <strong>$lastName</strong><br>";
    echo "Email adresiniz: <strong>$gmail</strong><br>";
    echo "Şifreniz: <strong>$password</strong><br>";
    echo "Telefon numaranız: <strong>$telNumber</strong><br>";
    echo "Bölgeniz: <strong>$state</strong><br>";
    echo "Favori renginiz: <strong>$color</strong><br>";
    echo "Doğum tarihiniz: <strong>$birth</strong><br>";
    echo "Formu doldurduğunuz saat: <strong>$time</strong><br>";
    echo "En çok beğendiğiniz sayfa: <strong>$likedPage</strong><br>";
    echo "Siteye verdiğiniz puan: <strong>$rating</strong><br>";
    echo "Geri bildiriminiz: <strong>$textarea</strong><br>";

   
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $fileName = htmlspecialchars($_FILES['file']['name']);
        echo "Yüklediğiniz dosya: <strong>$fileName</strong><br>";
    } else {
        echo "Dosya yüklenmedi veya bir hata oluştu.<br>";
    }


?>
