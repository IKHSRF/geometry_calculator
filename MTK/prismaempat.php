<html>
<head>
    <title></title>
    <style type="text/css">
    .link-button{
        text-decoration: none;
        background-color: #eeeeee;
        color: black;
        padding: 2px 6px 2px 6px;
        border: 1px solid #c2c2c2;
        border-radius:2px;
    }
    </style>
</head>
<body>
    <h2>Mencari Luas dan Volume Prisma Segi Empat</h2>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Panjang</td>
                <td>:</td>
                <td><input type="text" name="panjang" min="1" required ></td>
            </tr>
            <tr>
                <td>Lebar</td>
                <td>:</td>
                <td><input type="text" name="lebar" min="1" required ></td>
            </tr>
            <tr>
                <td>Tinggi</td>
                <td>:</td>
                <td><input type="text" name="tinggi" min="1" required ></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Hitung"></td>
                <td><a href="prismaempat.php" class="link-button">Reset</a></td>
            </tr>
        </table>
    </form>
            <?php
            if(isset($_POST['submit'])){
                $panjang =$_POST['panjang'];
                $lebar =$_POST['lebar'];
                $tinggi =$_POST['tinggi'];
                $pl = $panjang*$lebar;
                $pt = $panjang*$tinggi;
                $lt = $lebar *$tinggi;
                $lbalok = 2*($pl+$pt+$lt);
                        
                echo "Penyelesaian Mencari Luas Prisma Segi 4:<br />";
                echo "L = 2*(p.l + p.t + l.t <br />";
                echo "L = 2*($panjang.$lebar)+($panjang.$tinggi)+($lebar.$tinggi) = $lbalok <br><br>";


                $vprismaempat = $panjang * $lebar * $tinggi;
                echo "Penyelesaian Mencari Volume Prisma Segi 4<br>";
                echo "V = p x l x t <br>";
                echo "V = $panjang * $lebar * $tinggi <br/>";
                echo "V = ".$vprismaempat."<br/>";
            }
        ?>
</body>
</html>