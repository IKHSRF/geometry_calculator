<!DOCTYPE html>
<html>
<head>
    <title>Bangun Datar | Trapesium</title>
</head>
<body>
    <h1 align="center">Trapesium</h1>
    <p>Trapesium adalah bangun datar dua dimensi yang tersusun oleh 4 buah sisi yaitu 2 buah sisi sejajar yang tidak sama panjang dan 2 buah sisi lainnya.</p>
    <img src="../img/trapesium.png" alt="trapesium">
    <strong>Keterangan:</strong>
    <p>
        t = tinggi trapesium <br>
        a, b = adalah sisi yang sejajar, sisi a merupakan panjang AB dan sisi b merupakan panjang DC
    </p>

    <h2 align="center">Hitung Luas Trapesium</h2>
    <strong>Rumus: luas (L) = &#189; x (a + b) x t</strong>

    <h3>Isi Data:</h3>
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
                <td>tinggi (t)</td>
                <td>:</td>
                <td><input type="text" name="t" required ></td>
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
            $sisi_a = $_POST['a'];
            $sisi_b = $_POST['b'];
            $tinggi = $_POST['t'];

            // menghitung luas trapesium
            $luas = 1/2 * ($sisi_a + $sisi_b) * $tinggi;

            if ($luas == 0) {
                echo "Ini bukan trapesium";
            } else {
                echo "Hasil hitung luas trapesium adalah sebagai berikut:<br />";
                echo "Diketahui:<br />";
                echo "a = $sisi_a<br />";
                echo "b = $sisi_b<br />";
                echo "tinggi = $tinggi<br />";
                echo "Maka luas trapesium adalah L = &#189; x (a + b) x t = &#189 x ($sisi_a + $sisi_b) x t = $luas";
            }
        }
    ?>

    <h2 align="center">Hitung Keliling Trapesium</h2>
    <strong>Rumus: keliling (K) = a + b + c + d</strong>

    <h3>Isi Data:</h3>
    <form action="./" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>sisi (a)</td>
                <td>:</td>
                <td><input type="text" name="sisi_a" required></td>
            </tr>
            <tr>
                <td>sisi (b)</td>
                <td>:</td>
                <td><input type="text" name="sisi_b" required></td>
            </tr>
            <tr>
                <td>sisi (c)</td>
                <td>:</td>
                <td><input type="text" name="sisi_c" required></td>
            </tr>
            <tr>
                <td>sisi (d)</td>
                <td>:</td>
                <td><input type="text" name="sisi_d" required></td>
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
            $sisi_a = $_POST['sisi_a'];
            $sisi_b = $_POST['sisi_b'];
            $sisi_c = $_POST['sisi_c'];
            $sisi_d = $_POST['sisi_d'];
            
            // menghitung keliling trapesium
            $keliling = $sisi_a + $sisi_b + $sisi_c + $sisi_d;

            if ($keliling == 0) {
                echo "Ini bukan trapesium";
            } else {
                echo "Hasil hitung keliling trapesium adalah sebagai berikut:<br />";
                echo "Diketahui:<br />";
                echo "sisi (a) = $sisi_a<br />";
                echo "sisi (b) = $sisi_b<br />";
                echo "sisi (c) = $sisi_c<br />";
                echo "sisi (d) = $sisi_d<br />";
                echo "Maka keliling trapesium adalah K = a + b + c + d = $sisi_a + $sisi_b + $sisi_c + $sisi_d = $keliling";
            }
        }
    ?>
    
</body>
</html>