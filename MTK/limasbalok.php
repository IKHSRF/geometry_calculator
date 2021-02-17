<html>
<head>
    <title></title>
</head>
<body>
    <h2>Mencari Luas dan Volume Limas Persegi Panjang</h2>
        <form method="POST">
            <table>
                <tr>
                    <td>panjang</td>
                    <td>=</td>
                    <td><input type="text" name="panjang"/><br/></td>
                </tr>
                <tr>
                    <td>lebar</td>
                    <td>=</td>
                    <td><input type="text" name="lebar"><br/></td>
                </tr>
                <tr>
                    <td>Tinggi Limas</td>
                    <td>=</td>
                    <td><input type="text" name="tinggi"><br/></td>
                </tr>
                
            </table>
            <input type="submit" name="submit" value="SUBMIT"/><br/><br/>

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