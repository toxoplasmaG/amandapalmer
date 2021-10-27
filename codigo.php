<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" Amanda Palmer is an American singer, songwriter, musician, 
    and performance artist who is the lead vocalist, pianist, and lyricist of the duo The Dresden Dolls">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Major+Mono+Display&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="styles.css">>
    <title>Amanda Palmer | Thank You</title>
</head>
<body> <!-- God knows I don't know exactly what I'm doing -->
    <header>
        <nav>
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="store.html">STORE</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="contact.html">CONTACT</a></li>
            </ul>
        </nav>
        <hr>
        <h1>Amanda Palmer</h1>
    </header>
    <?php
        $name = $_POST['name'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];
        $gender = $_POST['gender'];

        $to = 'emanuel.i.maza@gmail.com';
        $email_subject = "New message from Amanda Palmer web site";
        $email_body = "You have recieved a new message from: 
                    \n Name: $name
                    \n Gender: $gender 
                    \n Email: $email 
                    \n Comment: \n $comment \n";
        $headers = "From: $email";

        mail($to, $email_subject, $email_body, $headers);
        echo 'Pronto nos comunicaremos; pero qué es esto? Argentina Tierra de Amor y Venganza que se tratan de usted!';
    ?>
    <footer>
        <h3>Amanda Palmer</h3>
        <ul>
            <li><a href="https://open.spotify.com/artist/726Dh6A5VyDfAAQxilT6A0" target="_blank"><img src="/amandapalmer/imagenes/spotify_logo.png" alt="logo de spotify"></a></li>
            <li><a href="https://www.youtube.com/user/amandapalmer" target="_blank"><img src="/amandapalmer/imagenes/youtube_logo.png" alt="logo de youtube"></a></li>
        </ul>
        <p>╰( ´・ω・)つ──☆✿✿✿✿✿✿ I´m a footer plz don't forget me uWu</p>
    </footer>
</body>
</html>