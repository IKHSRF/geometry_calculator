<!DOCTYPE html>
<html>
<head>
    <title>Bangun Datar | Segitiga</title>
</head>
<body>
    <h1 align="center">Segitiga</h1>
    <p>Segitiga adalah bangun datar yang terdiri dari 3 sisi garis lurus dengan 3 titik sudut yang berjumlah 180º.</p>
    <img src="../img/segitiga.png" alt="segitiga">
    <strong>Keterangan:</strong>
    <p>
        a = alas <br>
        t = tinggi, tinggi segitiga membentuk sudut 90° terhadap alasnya.<br>
        b, c = adalah sisi lain segitiga
    </p>

    <h2 align="center">Hitung Luas Segitiga</h2>
    <h3>Isi Data:</h3>
    <strong>Rumus: luas (L) = &#189; x (alas x tinggi)</strong>
    <form action="./" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>alas (a)</td>
                <td>:</td>
                <td><input type="text" name="alas" required></td>
            </tr>
            <tr>
                <td>tinggi (t)</td>
                <td>:</td>
                <td><input type="text" name="tinggi" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit1" value="Hitung"></td>
            </tr>
        </table>
    </form>

    <?php
        if(isset($_POST['submit1'])){
            $alas   = $_POST['alas'];
            $tinggi = $_POST['tinggi'];
            
            // menghitung luas segitiga
            $luas = 1/2 * $alas * $tinggi;

            if ($luas == 0) {
                echo "Ini bukan segitiga";
            } else {
                echo "Hasil hitung luas segitiga adalah sebagai berikut:<br/>";
                echo "Diketahui:<br/>";
                echo "alas (a) = $alas<br/>";
                echo "tinggi (t) = $tinggi<br/>";
                echo "Maka luas segitiga adalah L = &#189 (alas x tinggi) = &#189 ($alas x $tinggi) = $luas";
            }
        }
    ?>

    <h2 align="center">Hitung Keliling Segitiga</h2>
    <h3>Isi Data:</h3>
    <strong>Rumus: keliling (k) = sisi a + sisi b + sisi c</strong>
    <form action="./" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>sisi (a)</td>
                <td>:</td>
                <td><input type="text" name="a" required></td>
            </tr>
            <tr>
                <td>sisi (b)</td>
                <td>:</td>
                <td><input type="text" name="b" required ></td>
            </tr>
            <tr>
                <td>sisi (c)</td>
                <td>:</td>
                <td><input type="text" name="c" required ></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit2" value="Hitung"></td>
            </tr>
        </table>
    </form>

    <?php
        if(isset($_POST['submit2'])){
            $sisi_a = $_POST['a'];
            $sisi_b = $_POST['b'];
            $sisi_c = $_POST['c'];
            
            // menghitung keliling segitiga
            $keliling = $sisi_a + $sisi_b + $sisi_c;

            if ($keliling == 0) {
                echo "Ini bukan segitiga";
            } else {
                echo "Hasil hitung keliling segitiga adalah sebagai berikut:<br/>";
                echo "Diketahui:<br/>";
                echo "sisi (a) = $sisi_a<br/>";
                echo "sisi (b) = $sisi_b<br/>";
                echo "sisi (c) = $sisi_c<br/>";
                echo "Maka keliling segitiga adalah K = a + b + c = $sisi_a + $sisi_b + $sisi_c  = $keliling";
            }
        }
    ?>
</body>
</html>