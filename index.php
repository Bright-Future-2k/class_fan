<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php include 'Fan.php' ?>
<?php
$fan2 = new Fan();
echo $fan2->getStatus();
$fan2->setStatus('true');
echo $fan2->getStatus() . "<br>";
echo $fan2->getColor() . "<br>";
$fan2->setColor(yellow);
echo $fan2->getColor() . "<br>";
echo $fan2->getRadius() . "<br>";
$fan2->setRadius(10);
echo $fan2->getRadius() . "<br>";
echo $fan2->getSpeed() . "<br>";
$fan2->setSpeed("FAST");
echo $fan2->getSpeed() . "<br>" . "<br>";

$fan2 = new Fan();
echo $fan2->getStatus();
$fan2->setStatus('false');
echo $fan2->getStatus() . "<br>";
echo $fan2->getColor() . "<br>";
$fan2->setColor(blue);
echo $fan2->getColor() . "<br>";
echo $fan2->getRadius() . "<br>";
$fan2->setRadius(5);
echo $fan2->getRadius() . "<br>";
echo $fan2->getSpeed() . "<br>";
$fan2->setSpeed("MEDIUM");
echo $fan2->getSpeed();

?>
</body>
</html>

