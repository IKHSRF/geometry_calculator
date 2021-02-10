<!DOCTYPE html>
<html>
<head>
    <title>Bangun Datar | Persegi Panjang</title>
</head>
<body>
    <h1 align="center">Persegi Panjang</h1>
    <p>Persegi Panjang adalah bangun datar 2 dimensi yang mempunyai 2 pasang sisi sejajar yang sama Panjang dan mempunyai 4 titik sudut siku-siku.</p>
    <img src="persegi panjang.png" alt="persegi panjang">
    <strong>Keterangan:</strong>
    <p>
        p = panjang <br>
        l = lebar
    </p>

    <h2 align="center">Hitung Luas dan Keliling Persegi Panjang</h2>
    
    <h3>Isi Data:</h3>
    <strong>Rumus: luas (L) = panjang (p) x lebar (l)</strong><br>
    <strong>Rumus: keliling (k) = 2 x (panjang + lebar) </strong>
    <form action="./" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>panjang (p)</td>
                <td>:</td>
                <td><input type="text" name="p" required></td>
            </tr>
            <tr>
                <td>lebar (l)</td>
                <td>:</td>
                <td><input type="text" name="l" required ></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Hitung"></td>
            </tr>
        </table>
    </form>

    <?php
        if(isset($_POST['submit'])){
            $panjang = $_POST['p'];
            $lebar   = $_POST['l'];
            
            // menghitung luas dan keliling persegi panjang
            $luas = $panjang * $lebar;
            $keliling = 2 * ($panjang + $lebar);


            if ($luas && $luas == 0) {
                echo "Ini bukan persegi panjang";
            } else {
                echo "Hasil hitung luas persegi panjang adalah sebagai berikut:<br/>";
                echo "Diketahui:<br />";
                echo "panjang (p) = $panjang<br/>";
                echo "lebar (l) = $lebar<br/>";
                echo "Maka luas persegi panjang adalah L = panjang (p) x lebar (l) = $panjang x $lebar = $luas<br/>";
                echo "Dan keliling persegi panjang adalah K = 2 x (panjang + lebar) = 2 x ($panjang + $lebar) = $keliling";
            }
        }
    ?>

</body>
</html>
