<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="orders/css/nicepage.css" media="screen">
    <link rel="stylesheet" href="orders/css/Giriş.css" media="screen">
    <script class="u-script" type="text/javascript" src="orders/js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="orders/js/nicepage.js" defer=""></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="nc.css" media="screen">
    <script class="u-script" type="text/javascript" src="assets/js/ertu.js" defer=""></script>

    <script class="u-script" type="text/javascript" src="jq.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nc.js" defer=""></script>


</head>

<body style="background-color: #333; color: #fff" data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="tr">
    <?php
    session_start();
    include("navbar.php");

    ?>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }


        #contact-info {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            padding: 2em;
        }

        .contact-card {
            text-align: center;
            margin: 1em;
        }

        .contact-card img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 0.5em;
        }

        .contact-card a {
            color: #3498db;
            text-decoration: none;
        }
    </style>


    <div>
    <h3 style="margin: 50px; text-align:center;">Yardım Merkezi</h3>
        <section id="contact-info">
            
            <a href="https://www.linkedin.com/in/ozerx" target="_blank">
                <div class="contact-card">
                    <img src="assets/erto.jpeg" alt="Person 1">
                    <p><b>Manager</b></p>
                    Ertuğrul Özer
                </div>
            </a>

            <a href="https://www.linkedin.com/in/abdullahdgn" target="_blank">
                <div class="contact-card">
                    <img src="assets/apo.jpeg" alt="Person 2">
                    <p><b>CEO</b></p>
                    Abdullah Doğan
                </div>
            </a>

            <a href="https://www.linkedin.com/in/omrrciftcii" target="_blank">
                <div class="contact-card">
                    <img src="assets/omer.jpeg" alt="Person 3">
                    <p><b>Secretary</b></p>
                    Ömer Çiftçi
                </div>
            </a>
        </section>
    </div>

</body>

</html>