<!DOCTYPE html>
<html>
<head>
	<title>Aritmatika</title>
</head>
<body>
	<h1>Aritmatika</h1>

	<label>Angka 1</label>
	<input type="text" id="angka1">
	<br>
	<br>
	<label>Angka 2</label>
	<input type="text" id="angka2">
	<br>
	<br>
	<label>Hasil</label>
	<input type="text" id="hasil">
	<br>
	<br>
	<button onclick="tambah()">Tambah</button>
	<button onclick="kurang()">Kurang</button>

	<script type="text/javascript">
		var	angka1 = document.getElementById('angka1');
		var	angka2 = document.getElementById('angka2')
		var hasil = document.getElementById('hasil');

		function tambah() {
			hasil.value = Number(angka1.value) + Number(angka1.value);
		}
		function kurang() {
			hasil.value = Number(angka1.value) - Number(angka2.value);
		}
	</script>
</body>
</html>