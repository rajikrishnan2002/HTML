<html>
    <head>
<title></title>
    </head>
    <body>
        <form method="post" action="index1.php">
            <table>
            <tr>
               <td><label>Consumer Id</label></td>
               <td><input type="number" name="consumerid"></td><br>
            </tr>
            <tr>
              <td><label>Name</label></td>
             <td><input type="name" name="name"></td><br>
            </tr>
          <tr>
            <td><label>Previous reading</label></td>
            <td><input type="number" name="previousreading"></td><br>
           </tr>
           <tr>
            <td><label>Present reading</label></td>
            <td><input type="number" name="presentreading"></td><br>
           </tr>
           <tr>
            <td><input type="submit"></td>
           </tr>
            </table>
        </form>
    
        <?php
        $a=$_POST['consumerid'];
        $b=$_POST['name'];
        $c=$_POST['previousreading'];
        $d=$_POST['presentreading'];
        echo "Consumer id:".$a."<br>";
        echo "name:".$b."<br>";
        echo "previous reading:".$c."<br>";
        echo "present reading:".$d."<br>";
        $unit=$d-$c;
        echo $unit;
        if($unit<100){
            $amount=$unit*3;

        }
        else if($unit>100 && $unit<200)
        {
            $amount=$unit*4;
        }

        else if($unit>200 && $unit<300)
        {
            $amount=$unit*5;
        }
        else{
        
            $amount=$unit*5;

        }
        echo "total amount is",$amount;
        ?>
    </body>
</html>
            
            
            