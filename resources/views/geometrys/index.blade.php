@extends('geometrys.layout')
 
@section('content')
<div class="container">
    <div class="row justify-content-around">
        <div class="card pr-2" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Persegi</h5>
            <p class="card-text">Kalkulator untuk menghitung luas dan keliling persegi</p>
            <a href="/geometry/persegi" class="btn btn-primary">Hitung</a>
        </div>
        </div>

        <div class="card pr-2" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Persegi Panjang</h5>
            <p class="card-text">Kalkulator untuk menghitung luas dan keliling persegi panjang</p>
            <a href="/geometry/persegipanjang" class="btn btn-primary">Hitung</a>
        </div>
        </div>

        <div class="card pr-2" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Segitiga</h5>
            <p class="card-text">Kalkulator untuk menghitung luas dan keliling segitiga</p>
            <a href="/geometry/segitiga" class="btn btn-primary">Hitung</a>
        </div>
        </div>
    </div>

    <div class="row justify-content-around mt-4">
        <div class="card pr-2" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Kubus</h5>
            <p class="card-text">Kalkulator untuk menghitung luas dan keliling kubus</p>
            <a href="/geometry/kubus" class="btn btn-primary">Hitung</a>
        </div>
        </div>

        <div class="card pr-2" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Balok</h5>
            <p class="card-text">Kalkulator untuk menghitung luas dan keliling balok</p>
            <a href="/geometry/balok" class="btn btn-primary">Hitung</a>
        </div>
        </div>

        <div class="card pr-2" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Prisma</h5>
            <p class="card-text">Kalkulator untuk menghitung luas dan keliling prisma</p>
            <a href="/geometry/prisma" class="btn btn-primary">Hitung</a>
        </div>
        </div>
    </div>
</div>
@endsection