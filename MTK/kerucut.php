<html>
<head>
    <title></title>
</head>
<body>
    <h2>Mencari Luas dan Volume Kerucut</h2>
        <form method="POST">
            <table>
                <tr>
                    <td>jari-jari</td>
                    <td>=</td>
                    <td><input type="text" name="jari-jari" /><br/></td>
                </tr>
                <tr>
                    <td>tinggi</td>
                    <td>=</td>
                    <td><input type="text" name="tinggi"/><br/></td>
                </tr>
            </table>
            <input type="submit" name="submit" value="SUBMIT"/><br/><br/>
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