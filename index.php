<?php
 echo "<h1>BONJOUR</h1>" ;

 if(isset($_GET["page"])) {

    switch($_GET["page"]) {
        case "article1" : $pageAInclure = "article1.html"; 
        break;
        case "article2" : $pageAInclure = "article2.html"; 
        break;
        case "article3" : $pageAInclure = "article3.html"; 
        break;
        default : $pageAInclure = "article1.html"; 
    }

} else {
    $pageAInclure = "article1.html";
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Veille</h1>
    <p>Savoir quoi faire quand on a pas tout compris....</p>
    <ul>
        <li><a href="index.php?page=article1">Sujet1</a></li>

        <li><a href="index.php?page=article2">Sujet2</a></li>

        <li><a href="index.php?page=article3">Sujet3</a></li>
        
    </ul>
    <div>
        
    </div>
    <?php require "$pageAInclure" ?>
</body>
</html>