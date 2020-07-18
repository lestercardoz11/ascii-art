<!DOCTYPE>
<html>
<head>
    <title>Lester Cardoz PHP</title>
</head>
<body>
    <h1> Lester Cardoz PHP<h1>
    <p style="font-size: medium; font-weight: 200;">
    The SHA256 hash of "Lester Cardoz" is <?php print hash('sha256', 'Lester Cardoz'); 
    $stuff = array('course' => 'PHP-Intro', 'topic' => 'Arrays');
    echo isset($stuff['section']);
    ?>
    </p>
    <p>
    <pre style="font-size: medium; font-weight: 200;">ASCII Art:

        **
        **
        **
        **
        **
        **********
        **********
    </pre>
    </p>
    <p style="font-size: medium; font-weight: 200;">
    <a href="check.php">
    Click here to check the error setting
    </a>
    <br>
    <a href="fail.php">
    Click here to cause a traceback
    </a>
    </p>
</body>
</html>