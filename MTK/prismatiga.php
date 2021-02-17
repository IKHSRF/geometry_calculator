<html>
<head>
    <title></title>
</head>
<body>
    <h2>Mencari Luas dan Volume Prisma Segi Tiga</h2>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Alas Segitiga</td>
                <td>:</td>
                <td><input type="text" name="as" required ></td>
            </tr>
            <tr>
                <td>Tinggi Segitiga</td>
                <td>:</td>
                <td><input type="text" name="ts" required ></td>
            </tr>
            <tr>
                <td>Tinggi Prisma</td>
                <td>:</td>
                <td><input type="text" name="tp" required ></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Hitung"></td>
            </tr>
        </table>
    </form>
            <?php
            if(isset($_POST['submit'])){
                $as =$_POST['as'];
                $ts =$_POST['ts'];
                $tp =$_POST['tp'];
                $la = 1/2 * $as * $ts;

                //L = (2 x luas alas) + (keliling alas x tinggi prisma)        
                echo "Penyelesaian Mencari Luas Prisma Segi 3:<br />";

                $lprismatiga = (2 * $la) + (3 * ($as*$tp));
                $als = (2 * $la);
                $ast = (3 * ($as*$tp));
                echo "L = (2 x Alas Segitiga)+(3 * (Alas segitiga x Tinggi Prisma)) <br>";
                echo "L = $als + $ast <br>";
                echo "L = $lprismatiga <br>";

                echo "-----------------------------------------<br>";

                $vprismatiga = (1/2 * $as * $ts) * $tp;
                echo "Penyelesaian Mencari Volume Prisma Segi 3<br>";
                echo "V = (1/2 x Alas x Tinggi Segitiga) x Tinggi Prisma <br>";
                echo "V = (1/2 x $as x $ts) x $tp <br/>";
                echo "V = ".$vprismatiga."<br/>";
            }
        ?>
</body>
</html>