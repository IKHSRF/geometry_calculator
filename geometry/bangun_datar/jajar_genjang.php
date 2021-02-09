<!DOCTYPE html>
<html>
<head>
    <title>Bangun Datar | Jajar Genjang</title>
</head>
<body>
    <h1 align="center">Jajar Genjang</h1>
    <P>Jajar genjang adalah bangun datar 2 dimensi yang tersusun oleh 2 pasang sisi yang sama panjang dan sejajar serta mempunyai 2 pasang sudut yang sama besar (pasangan sudut lancip dan pasangan sudut tumpul).</P>
    <img src="jajar genjang.png" alt="jajar genjang">
    <strong>Keterangan:</strong>
    <p>
        a = sisi alas <br>
        b = sisi miring <br>
        t = tinggi
    </p>

    <h2 align="center">Hitung Luas Jajar Genjang</h2>
    <strong>Rumus: luas (L) = alas x tinggi</strong>
    
    <h3>Isi Data:</h3>
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
                <td><input type="text" name="tinggi" required ></td>
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
            
            // menghitung luas jajar genjang
            $luas = $alas * $tinggi;

            if ($luas == 0) {
                echo "Ini bukan jajar genjang";
            } else {
                echo "Hasil hitung luas jajar genjang adalah sebagai berikut:<br />";
                echo "Diketahui:<br />";
                echo "alas (a) = $alas<br />";
                echo "tinggi (t) = $tinggi<br />";
                echo "Maka luas jajar genjang adalah L = alas (a) x tinggi (t) = $alas x $tinggi = $luas";
            }
        }
    ?>

    <h2 align="center">Hitung Keliling Jajar Genjang</h2>
    <strong>Rumus: keliling (k) = 2 x (alas + sisi miring)</strong>

    <h3>Isi Data:</h3>
    <form action="./" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>alas (a)</td>
                <td>:</td>
                <td><input type="text" name="alas" required></td>
            </tr>
            <tr>
                <td>sisi miring (s)</td>
                <td>:</td>
                <td><input type="text" name="sisi" required ></td>
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
            $alas = $_POST['alas'];
            $sisi = $_POST['sisi'];
            
            // menghitung keliling persegi
            $keliling = 2 * ($alas + $sisi);

            if ($keliling == 0) {
                echo "Ini bukan jajar genjang";
            } else {
                echo "Hasil hitung keliling jajar genjang adalah sebagai berikut:<br />";
                echo "Diketahui:<br />";
                echo "alas (a) = $alas<br />";
                echo "sisi miring (s) = $sisi<br />";
                echo "Maka keliling jajar genjang adalah K = 2 x (alas + sisi miring) = 2 x ($alas + $sisi) = $keliling";
            }
        }
    ?>

</body>
</html>