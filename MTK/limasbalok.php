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
    <h2>Mencari Luas dan Volume Limas Persegi Panjang</h2>
        <form method="POST">
            <table>
                <tr>
                    <td>panjang</td>
                    <td>=</td>
                    <td><input type="text" name="panjang" min="1" required/><br/></td>
                </tr>
                <tr>
                    <td>lebar</td>
                    <td>=</td>
                    <td><input type="text" name="lebar" min="1" required><br/></td>
                </tr>
                <tr>
                    <td>Tinggi Limas</td>
                    <td>=</td>
                    <td><input type="text" name="tinggi" min="1" required><br/></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="submit" value="Hitung"></td>
                    <td><a href="limasbalok.php" class="link-button">Reset</a></td>
                </tr>
            </table>

            <?php
            	if(isset($_POST['submit'])){
                $panjang = $_REQUEST['panjang'];
			    $lebar = $_REQUEST['lebar'];
                $tinggi = $_REQUEST['lebar'];
			    
                $luas_alas_balok = $panjang * $lebar;
                $vlimas=1/3 * $luas_alas_balok * $tinggi; 

                $tinggilimas = $tinggi * $tinggi;
                $luas_segitiga = (1/2 * $panjang * $lebar)*(1/2 * $panjang * $lebar);
                $lsegitiga = $luas_segitiga + $tinggilimas;
                $h = sqrt($lsegitiga);


                $llimastiga = $luas_alas_balok + 4 * $lsegitiga;

                echo "Penyelesaian Mencari Volume Limas Persegi Panjang <br>";
                echo "V = 1/3 * p * l * tinggi limas <br>";
                echo "V = 1/3 * $panjang * $lebar * $tinggi <br>";
                echo "V = $vlimas <br>";

                echo "-----------------------------------------<br>";
                echo "Penyelesaian Mencari Tinggi Segitiga <br>";
                echo "Tinggi Segitiga = (√1/2 x p x l)<sup>2</sup> + tinggi limas<sup>2</sup> <br>";
                echo "Tinggi Segitiga = (√1/2 x $panjang x $lebar)<sup>2</sup> + $tinggilimas<sup>2</sup> <br>";
                echo "Tinggi Segitiga = √$luas_segitiga + $tinggilimas <br>";
                echo "Tinggi Segitiga = √$lsegitiga <br>";
                echo "Tinggi Segitiga = $h <br>";

                echo "-----------------------------------------<br>";
                echo "Penyelesaian Mencari Luas Limas Persegi Panjang <br>";
                echo "Luas Limas = Luas alas + 4 * (1/2 x sisi x tinggi segitiga) <br>";
                echo "Luas Limas = $luas_alas_balok + 4 (1/2 x $panjang x $lebar x $h) <br>";
                $ts = 4 * (1/2 * $panjang * $lebar * $h);
                echo "Luas Limas = $luas_alas_balok + $ts <br>";
                $ll = $luas_alas_balok + $ts;
                echo "Luas Limas = $ll <br>";
            }
            ?>
        </form>
    </body>
</hmtl>