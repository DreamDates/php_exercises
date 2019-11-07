<?php
$name = "kaur";
$firstname = "sharanpreet";
$age = 22;
$city = "jalandhar";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Present yourself</title>
    <style>
        .fullname, .age, .city {
            background-color: #eaeef9;
            padding-left: 5px;
            padding-right: 5px;
            border-radius: 2px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Present yourself</h1>
		<h2>Introducing Donald Trump</h2>
		<p>Hello my name is <span class="fullname"><?= "$firstname $name"?></span> and I am <span class="age"><?= "$age"?></span> years old.<br>I live in the city of <?= "$city"?></span>.</p>
    </header>
    <main>
    </main>
</body>
</html>