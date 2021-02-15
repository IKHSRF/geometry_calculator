@extends('geometrys.layout')
 
@section('content')
<div class="container">
<a href="/geometri" class="btn btn-primary" align="center">Kembali</a>
    <!-- menghitung luas persegi -->
    <div class="class row justify-content-around">
        <div class="card pr-2" style="width: 30rem;">
            <div class="card-body">
                <h2 align="center" class="mb-3">Hitung Luas dan Keliling Persegi</h2>
                <strong>Rumus: luas (L) = sisi (s) x sisi (s)</strong><br>
                <strong> Rumus: keliling (k) = sisi (s) x 4</strong>
                <form action="/geometri/persegihitung" method="POST" enctype="multipart/form-data" class="mt-3">
                    <table>
                        <tr>
                            <td>sisi (s)</td>
                            <td>:</td>
                            <td><input type="text" name="s" required></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><input type="submit" name="submit" value="Hitung" class="btn btn-success"></td>
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
            </div>
        </div>
    </div>    
</div>
@endsection