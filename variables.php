<!doctype html>
<html>
<head>
    <title>Links and Variables</title>
</head>
<body>
    <h1>Links and Variables</h1>
    <p>Use PHP echo and variables to output the following link information:</p>
    <hr>
    
    <?php
    $linkName = 'Codecademy';
    $linkURL = 'https://www.codecademy.com/';
    $linkImage = 'codecademy.png';
    $linkDescription = 'Learn to code interactively, for free.';
    
    echo '<h1>'.$linkName.'</h1>';
    echo '<a href="'.$linkURL.'">'.$linkName.'</a>';
    echo '<p>'.$linkDescription.'</p>';
    echo '<img src="'.$linkImage.'" alt="'.$linkName.'">';
    ?>
    
</body>
</html>
