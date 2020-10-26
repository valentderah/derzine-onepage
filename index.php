<!DOCTYPE html>
<html lang="ru">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel='stylesheet' href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
    <link rel='stylesheet' href='https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'><link rel="stylesheet" href="css/button.css">

    <link rel="icon" href="favicon.ico" /> 
    
    <title>DerZine</title>
</head>

<body>

    
    <div class="container">
        
        <div class="header">
            <div class="logo">
                <a href="#">
                <img class="home" src="img/logo.svg">
                </a>
            </div>
            <div class="navigation">
                <a href="#">
                <img class="home" src="img/home.svg">
                </a>
            </div>
        </div> 
    </div>
    
</div>
    
    <div class="cards">
            

        <center>
            <img class="header" src="img/Line.png">
        </center>


        <h1>Что вам нужно?</h1>
        <a href="#open-modal">
        <img class="card"src="img/1.svg">
        <img class="card"src="img/2.svg">
        <img class="card"src="img/3.svg">
        <img class="card"src="img/4.svg">
        <img class="card"src="img/5.svg">
        </a>
            
    </div>


        <center>
            <img class="header" src="img/Line.png">
        </center>

        
    <div class="projects">
        <h1>Наши преимущества:</h1>
        
        <img class="proj " src="img/img1.svg">

        <a href="#open-modal">
        <img class="proj" id="text" src="img/text1.svg">
        </a>

        <a href="#open-modal">
        <img class="proj " id="text" src="img/text2.svg"> 
        </a>

        <img class="proj "src="img/img2.svg">    
        </div>
    </div>


    <div class="content">

        <center>
            <img class="header" src="img/Line.png">
            <h3>Сделаем с любовью 💕</h3>
        </center>

    </div>




<div id="open-modal" class="modal-window">

    <div>
    
    <a href="#" title="Закрыть окошко" class="modal-close">	&#10006;</a>
    
    <center>
    <h1>Заполни форму<img class="lines" src="img/Line2.svg"></h1>
    </center>
    
    <!-- код для отсылки данных из формы в бд -->
    <?php

        $link_to_db = mysqli_connect('localhost','root','','data');

        if (mysqli_connect_errno())
            {
                echo "не подключено к бд";
                exit;
            }


        if( isset( $_POST )){
        $name = $_POST['name'];
        $link = $_POST['link'];
        $message = $_POST['message'];

        $sql = "INSERT INTO `inf` (`name`,`link`,`message`) VALUES ('$name','$link','$message')";
        $result = mysqli_query($link_to_db, $sql);

        if ($result == false) {
            print("Произошла ошибка при выполнении запроса");
        }
        }

    ?>
    <!-- /код для отсылки данных из формы в бд -->


    <div class="content">
        <form action="index.php" method="POST" onsubmit="return  redirecttoPage()">
            <center>
            <div class="block">
            <input class="cont" type="text" required name="name" placeholder="Как к тебе обращаться?">
            
            
                <img class="" src="img/Line2.svg">
            
            
            <input class="cont" type="text" required name="link" placeholder="Как нам с тобой связаться?">
            
            
                <img class="" src="img/Line2.svg">
            
            <textarea autofocus type="text" name="message" maxlength = 1000 placeholder="Введи тут что-нибудь, если нужно!" class="cont"></textarea>
            
            
                <img class="" src="img/Line2.svg">
            
            </div>

            <button type="submit" name="sumbit"  id="button"></button>
            </center>
            </form>
        </div>

    </div>
  </div>


<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script><script  src="js/script.js"></script>
</body>

</html>