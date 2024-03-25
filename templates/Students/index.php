<?php // templates/Students/index.php ?>

<?php 
    $today = (new \DateTime())->format('m-d');
    $compteur = 0;

    foreach ($studentsBirthday as $studentBirthday):
        $birthday = date('m-d', strtotime(str_replace('/', '-', $studentBirthday['birthday'])));
        if ($birthday == $today):
        	$compteur++;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Birthday</title>
	<link rel="stylesheet" href="../webroot/css/main.css">
</head>
<body>

</body>
</html>

    <div id="intro">
        <p>Citation et anniversaires</p>
        <p><?= $studentBirthday['birthday']; ?></p>
    </div>

<section id="section">

    <div id="pink">
        <figure class="encart">
            <img src="../webroot/img/circle.svg">
        </figure>
        <p><?= $studentBirthday['firstname']; ?> <?= $studentBirthday['lastname']; ?></p>
    </div>

    <div id="white">
    	<div id="text" class="encart" >
        <p id="quote">
        	<?php 
        		$url = "http://10.120.134.112:3002/getQuote"; 
        		$quote = file_get_contents($url); 
        		$q = json_decode($quote, true);
        		echo $q['quote']; 
        	?>
        </p>
        <p id="author">
        	-<?= $q['author']; ?>
        </p>
        </div>
        <figure id="character" class="encart">
            <img src="../webroot/img/character_1.png">
        </figure>
    </div>

</section>
<?php 
        endif;
        //echo $compteur;
    endforeach; 
?>
