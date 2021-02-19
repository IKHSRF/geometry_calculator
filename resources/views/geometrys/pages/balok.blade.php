"<br><u>luas (L):</u>" +
			"<br>L = 2 x (p x l + p x t + l x t)" +
			"<br>L = 2 x (" + panjang.value + " x " + lebar.value + " + " + panjang.value + " x " + tinggi.value + " + " + lebar.value + " x " + tinggi.value + ")" +
			"<br>L = 2 x (" + (Number(panjang.value) * Number(lebar.value)) + " + " + (Number(panjang.value) * Number(tinggi.value)) + " + " + (Number(lebar.value) * Number(tinggi.value)) + ")" +
			"<br>L = 2 x (" + (Number(panjang.value) * Number(lebar.value) + Number(panjang.value) * Number(tinggi.value)) + " + " + (Number(lebar.value) * Number(tinggi.value)) + ")" +
			"<br>L = 2 x (" + (Number(panjang.value) * Number(lebar.value) + Number(panjang.value) * Number(tinggi.value) + Number(lebar.value) * Number(tinggi.value)) + ")" +
			"<br>L = " + luas.textContent +

			"<br><u>volume (V)</u>" +
			"<br>V = p x l x t" +
			"<br>V = " + panjang.value + " x " + lebar.value + " x " + tinggi.value +
			"<br>V = " + (Number(panjang.value) * Number(lebar.value)) + " x " + tinggi.value + 
			"<br>V = " + keliling.textContent
