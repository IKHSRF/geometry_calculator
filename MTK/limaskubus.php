<html>
<head>
    <title></title>
</head>
<body>
    <h2>Mencari Luas dan Volume Limas Persegi</h2>
        <form method="POST">
            <table>
                <tr>
                    <td>sisi-sisi</td>
                    <td>=</td>
                    <td><input type="text" name="sisi"/><br/></td>
                </tr>
                <tr>
                    <td>tinggi limas</td>
                    <td>=</td>
                    <td><input type="text" name="tinggi"><br/></td>
                </tr>
                
            </table>
            <input type="submit" name="submit" value="SUBMIT"/><br/><br/>

            <?php
            	if(isset($_POST['submit'])){
                $sisi = $_REQUEST['sisi'];
			    $tinggi = $_REQUEST['tinggi'];
			    
                $luas_alas_persegi = $sisi * $sisi;
                $vlimas=1/3 * $luas_alas_persegi * $tinggi; 

                $tinggilimas = $tinggi * $tinggi;
                $luas_segitiga = (1/2 * $sisi)*(1/2 * $sisi);
                $lsegitiga = $luas_segitiga + $tinggilimas;
                $h = sqrt($lsegitiga);


                $llimastiga = $luas_alas_persegi + 4 * $lsegitiga;

                echo "Penyelesaian Mencari Volume Limas Persegi:<br>";
                echo "V = 1/3 * sisi * sisi * tinggi limas <br>";
                echo "V = 1/3 * $sisi * $sisi * $tinggi <br>";
                echo "V = $vlimas <br>";

                echo "-----------------------------------------<br>";
                echo "Penyelesaian Mencari Tinggi Segitiga <br>";
                echo "Tinggi Segitiga = (√1/2 x sisi)^2 + tinggi limas^2 <br>";
                echo "Tinggi Segitiga = (√1/2 x $sisi)^2 + $tinggilimas^2 <br>";
                echo "Tinggi Segitiga = √$luas_segitiga + $tinggilimas <br>";
                echo "Tinggi Segitiga = √$lsegitiga <br>";
                echo "Tinggi Segitiga = $h <br>";

                echo "-----------------------------------------<br>";
                echo "Penyelesaian Mencari Luas Limas Persegi:<br>";
                echo "Luas Limas = Luas alas + 4 * (1/2 x sisi x tinggi segitiga) <br>";
                echo "Luas Limas = $luas_alas_persegi + 4 (1/2 * $sisi * $h) <br>";
                $ts = 4 * (1/2 * $sisi * $h);
                echo "Luas Limas = $luas_alas_persegi + $ts <br>";
                $ll = $luas_alas_persegi + $ts;
                echo "Luas Limas = $ll <br>";

            }
            ?>
        </form>
    </body>
</hmtl>