

<? require_once 'lib.php' ?>

<?
$map_ship = load_map('map_ship');
$map_state = load_map('map_state');

?>
<? $coords = get_coords($_GET) ?>
<? $map_state = shoot($map_state, $coords) ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEA BATTLE GAME</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

<div class="container">
    <?= render_map($map_ship, $map_state) ?>
</div>
    
</body>
</html>

<? save_map($map_state, 'map_state') ?>