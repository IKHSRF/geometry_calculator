<!DOCTYPE html>
<html>
<head>
    <title>Bangun Datar | Persegi</title>
</head>
<body>
    <h1 align="center">Persegi</h1>
    <p>Persegi adalah bangun datar 2 dimensi yang dibentuk oleh empat sisi yang sama panjang dan keempat titik sudutnya membentuk sudut siku-siku (90º).</p>
    <img src="../img/persegi.png" alt="persegi">
    <strong>Keterangan:</strong>
    <p>
        s = sisi persegi
    </p>

    <h2 align="center">Hitung Luas dan Keliling Persegi</h2>

    <h3>Isi Data:</h3>
    <strong>Rumus: luas (L) = sisi (s) x sisi (s)</strong><br>
    <strong>Rumus: keliling (k) = sisi (s) x 4</strong>
    <form action="./" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>sisi (s)</td>
                <td>:</td>
                <td><input type="text" name="s" required></td>
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
            $sisi = $_POST['s'];
            
            // menghitung luas persegi dan keliling
            $luas = $sisi * $sisi;
            $keliling = 4 * $sisi;

            if ($luas && $keliling == 0) {
                echo "Ini bukan persegi";
            } else {
                echo "Hasil hitung luas dan keliling persegi adalah sebagai berikut:<br/>";
                echo "Diketahui:<br/>";
                echo "sisi (s) = $sisi<br/>";
                echo "Maka luas persegi adalah L = sisi x sisi = $sisi x $sisi = $luas <br/>";
                echo "Dan keliling persegi adalah K = 4 x sisi (s) = 4 x $sisi = $keliling";
            }
        }
    ?>

</body>
</html>