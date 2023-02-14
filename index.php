<html>
    <head>
<title></title>
    </head>
    <body>
        <form method="post" action="index.php">
            <label>Enter 1st number</label>
            <input type="number" name="number1"><br>
            <label>Enter 2st number</label>
            <input type="number" name="number2"><br>
            <input type="submit">
        </form>
        <?php
        $a=$_POST['number1'];
        $b=$_POST['number2'];
        $c=$a+$b;
        echo "The sum is",$c;

        ?>
    </body>
</html>