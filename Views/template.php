<?php

include('config/manager.php');

function datee($langue) {

    $jours["AR"] = array("الأحد","الإثنين","الثلاثاء","الأربعاء","الخميس","الجمعة","السبت");
    $jours["FR"] = array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");
    $jours["EN"] = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");

    $months["AR"]=["يناير ", "فبراير", "مارس ", "أبريل", "ماي ", "يونيو" , "يوليوز" , "غشت ", "شتنبر" ,"أكتوبر" , "نونبر" , "دجنبر"];
    $months["EN"]= ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    $months["FR"]= ["Janvier","Février","Mars", "Avril","Mai","juin","Juillet","Aôut","Septembre","Octobre","Novembre","Décembre"];


    $d = getdate();

    $wj = $d["wday"];
    $mj = $d["mday"];
    $m = $d["mon"];
    $y = $d["year"];

    $d= $jours[$langue][$wj]. " " . $mj . " " . $months[$langue][$m-1] . " " . $y;
    return $d;
}

$langue= ($_COOKIE["lang"])?? "AR";
//$fonttext= ($_COOKIE["fonttext"])?? "white";
//$bgcolor= ($_COOKIE["bgcolor"])??  "gray";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> php</title>
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="/public/css/style.css">

</head>
<body >
<div class="container">
    <header>
        <div class="smi">
            <h3 >SMI6</h3>
            <h6 >Faculté des Sciences Dhar El Mehraz , Fès</h6>
        </div>
        <div  class="date">

            <img src="/public/fsdm.jpg" width="60px" height="60px" alt="">
            <h6  id="date"> <?php echo datee($langue)?> </h6>
        </div>
        <div class="menu_connexion">
            <?php

            ?>&nbsp;&nbsp;
        </div>
    </header>
    <br>
    <div class="line" ></div>
<br>

    <main>

    <div class="wrapper">
        <div class="vertical-menu bg-light border-right">
            <nav class="nav flex-column p-3">
                <a class="nav-link active" href="index.php?action=index">BD ==> SMI2024</a>
                <?php
                $tables = getAllTables() ;
                foreach ($tables  as $table) {

                    echo '<a class="nav-link" href="index.php?action=liste' . $table . '">' .  ucfirst($table) . '</a>';

                }
                ?>


            </nav>
        </div>
    </div>


        <?= $view ?>

<br>
        <div class="line" ></div>

<br>
        <footer>
            <div class="footer">
                <p> © copyright: SMI6 2023 <br>Faculté des Sciences Dhar El Mehraz <br> smi6@fsdmfes.ac.ma</p>
            </div>
        </footer>

</div>

<script src="/public/javascript/code.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
