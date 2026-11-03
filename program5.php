
<?php
    $file = 'count.txt';

    if (!file_exists($file)) {
        file_put_contents($file, 0);
    }

    $c = file_get_contents($file);
    $c++;

    file_put_contents($file, $c);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Visitor Counter</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-image: linear-gradient(45deg,rgb(6,3,104),rgb(7, 5, 6),rgb(84, 1, 48));
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: white;
            padding: 50px 60px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        h1 {
            color: #333;
            font-size: 30px;
            margin-bottom: 20px;
        }

        .count {
            font-size: 55px;
            font-weight: bold;
            color: rgb(84, 1, 48);
            margin: 20px 0;
        }

        p {
            color: #666;
            font-size: 18px;
        }

        .refresh {
            display: inline-block;
            margin-top: 25px;
            padding: 12px 25px;
            background-image: linear-gradient(45deg,rgb(6,3,104),rgb(7, 5, 6),rgb(84, 1, 48));
            color: white;
            text-decoration: none;
            border-radius: 8px;
            transition: 0.3s;
        }

    </style>
</head>

<body>

    <div class="container">
        <h1>Welcome!</h1>

        <p>Number of users visited</p>

        <div class="count">
            <?php echo $c; ?>
        </div>

        <p>Thank you for visiting our website!</p>

        <a href="" class="refresh">Refresh Page</a>
    </div>

</body>
</html>
