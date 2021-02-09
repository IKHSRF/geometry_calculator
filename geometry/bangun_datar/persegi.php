<!DOCTYPE html>
<html>
<head>
    <title>Bangun Datar | Persegi</title>
</head>
<body>
    <h1 align="center">Persegi</h1>
    <p>Persegi adalah bangun datar 2 dimensi yang dibentuk oleh empat sisi yang sama panjang dan keempat titik sudutnya membentuk sudut siku-siku (90º).</p>
    <img src="persegi.png" alt="persegi">
    <strong>Keterangan:</strong>
    <p>
        s = sisi persegi
    </p>

    <h2 align="center">Hitung Luas Persegi</h2>

    <h3>Isi Data:</h3>
    <strong>Rumus: luas (L) = sisi (s) x sisi (s)</strong>
    <form action="./" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>sisi (s)</td>
                <td>:</td>
                <td><input type="text" name="a" required></td>
            </tr>
            <tr>
                <td>sisi (s)</td>
                <td>:</td>
                <td><input type="text" name="b" required ></td>
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
            
            // menghitung luas persegi
            $luas = $sisi_a * $sisi_b;

            if ($luas == 0) {
                echo "Ini bukan persegi";
            } else {
                echo "Hasil hitung luas persegi adalah sebagai berikut:<br/>";
                echo "Diketahui:<br/>";
                echo "sisi (s) = $sisi_a<br/>";
                echo "sisi (s) = $sisi_b<br/>";
                echo "Maka luas persegi adalah L = sisi x sisi = $sisi_a x $sisi_b = $luas";
            }
        }
    ?>

    <h2 align="center">Hitung Keliling Persegi</h2>

    <h3>Isi Data:</h3>
    <strong>Rumus: keliling (k) = sisi (s) x 4</strong>
    <form action="./" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>sisi (s)</td>
                <td>:</td>
                <td><input type="text" name="sisi" required></td>
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
            $sisi = $_POST['sisi'];
            
            // menghitung keliling persegi
            $keliling = 4 * $sisi;

            if ($keliling == 0) {
                echo "Ini bukan persegi";
            } else {
                echo "Hasil hitung keliling persegi adalah sebagai berikut:<br/>";
                echo "Diketahui:<br/>";
                echo "sisi (s) = $sisi<br/>";
                echo "Maka keliling persegi adalah K = 4 x sisi (s) = 4 x $sisi = $keliling";
            }
        }
    ?>
    
</body>
</html>