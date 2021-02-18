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
    <h2>Mencari Luas dan Volume Kerucut</h2>
        <form method="POST">
            <table>
                <tr>
                    <td>jari-jari</td>
                    <td>=</td>
                    <td><input type="text" name="jari-jari" min="1" required /><br/></td>
                </tr>
                <tr>
                    <td>tinggi</td>
                    <td>=</td>
                    <td><input type="text" name="tinggi" min="1" required/><br/></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="submit" value="Hitung"></td>
                    <td><a href="kerucut.php" class="link-button">Reset</a></td>
                </tr>
            </table>
        </form>

            <?php 
            if(isset($_POST['submit'])){
            $jari_jari = $_REQUEST['jari-jari'];
            $tinggi = $_REQUEST['tinggi'];
            $r = $jari_jari * $jari_jari;
            $t = $tinggi *$tinggi;
            $s = sqrt($r + $t);
            $lkerucut = 22/7 * $jari_jari * ($jari_jari + $s);

            echo "Penyelesaian Mencari Luas Kerucut: <br>";
            echo "s = √(r*r)+(t*t)<br>";
            echo "s = $s <br>";
            echo "L = 22/7 x r x (r+s) <br>";
            echo "L = 22/7 * $jari_jari * ($jari_jari + $s) <br/>";
            echo "L = ".$lkerucut." cm<sup>3</sup><br/>";

            echo "-------------------------------------</br>"; 

            $vkerucut = 1/3 * 22/7 * $jari_jari * $jari_jari * $tinggi;
            echo "Penyelesaian Mencari Luas Kerucut:<br>";
            echo "V = 1/3 x 22/7 x r x r x t <br>";
            echo "V = 1/3 * 22/7 * $jari_jari * $jari_jari * $tinggi <br/>";
            echo "V = ".$vkerucut." cm<sup>3</sup><br/>";
            }
        ?>

    </body>
</hmtl>