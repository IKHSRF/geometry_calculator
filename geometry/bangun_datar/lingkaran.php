<!DOCTYPE html>
<html>
<head>
    <title>Bangun Datar | Lingkaran</title>
    <meta charset="utf-8">
</head>
<body>

    <h1 align="center">Lingkaran</h1>
    <p>Lingkaran adalah bangun datar dua dimensi dibentuk oleh himpunan semua titik yang mempunyai jarak sama dari suatu titik tetap.</p>
    <img src="lingkaran.png" alt="lingkaran">
    <strong>Keterangan:</strong>
    <p>
        P = titik pusat <br>
        r = jari-jari <br>
        d = diameter <br>
        π = konstanta pi (3.14)
    </p>

    <h2 align="center">Hitung Luas Lingkaran dan Keliling Dengan Jari-jari</h2>
    <strong>
        Rumus:<br>
        luas (L) =  π x r<sup>2</sup><br>
        keliling (K) = π x 2 x r
    </strong>
    
    <h3>Isi Data:</h3>
    <form action="./" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>jari-jari (r)</td>
                <td>:</td>
                <td><input type="text" name="r" required></td>
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
            $jari_jari = $_POST['r'];
            
            // menghitung luas lingkaran
            $luas = 3.14 * $jari_jari * $jari_jari;

            if ($luas == 0) {
                echo "Ini bukan lingkaran";
            } else {
                echo "Hasil hitung luas dan keliling lingkaran adalah sebagai berikut:<br />";
                echo "Diketahui: <br/>";
                echo "π = 3.14 <br/>";
                echo "jari-jari = $jari_jari <br/>";
                echo "Maka luas lingkaran adalah L = π x r<sup>2</sup> = 3.14 x r<sup>2</sup> = $luas<br>";
            }

            // menghitung keliling lingkaran
            $keliling = 3.14 * 2 * $jari_jari;
            if ($keliling == 0) {
                echo "Ini bukan lingkaran";
            } else {
                echo "Dan keliling lingkaran (K) = π x 2 x r = 3.14 x 2 x $jari_jari = $keliling";
            }
        }
    ?>


    <h2 align="center">Hitung Luas Lingkaran dan Keliling Dengan Diameter</h2>
    <strong>
        Rumus:<br>
        luas (L) =  π x r<sup>2</sup><br>
        keliling (K) = π x d
    </strong>
    
    <h3>Isi Data:</h3>
    <form action="./" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Diameter (d)</td>
                <td>:</td>
                <td><input type="text" name="d" required></td>
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
            $diameter = $_POST['d'];
            
            // menghitung luas lingkaran
            $luas2 = 3.14 * ($diameter/2) * ($diameter/2);

            if ($luas2 == 0) {
                echo "Ini bukan lingkaran";
            } else {
                echo "Hasil hitung luas dan keliling lingkaran adalah sebagai berikut:<br />";
                echo "Diketahui: <br/>";
                echo "π = 3.14 <br/>";
                echo "Diameter = $diameter <br/>";
                echo "Maka luas lingkaran adalah L = π x (d/2) * (d/2) = 3.14 x ($diameter/2) * ($diameter/2) = $luas2<br>";
            }

            // menghitugn keliling lingkaran
            $keliling2 = 3.14 * $diameter;
            if ($keliling2 == 0) {
                echo "Ini bukan lingkaran";
            } else {
                echo "Dan keliling lingkaran adalah K = π x d = 3.14 x $diameter = $keliling2";
            }
        }
        ?>
</body>
</html>