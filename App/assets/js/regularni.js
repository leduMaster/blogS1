
function provera_kr(){


	var ime=document.getElementById("name");
	var rezIme=/^[A-Z]{1}[a-z]{2,19}$/;
	if(!rezIme.test(ime.value)){
		document.getElementById("name").style.border = '2px solid red';
		alert("Ime nije u dobrom formatu! Pocetno veliko, minimum 3 maksimum 20!");return;
	}
	else{ime.style.border='';}

	var email=document.getElementById("email");
	var rezEmail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(!rezEmail.test(email.value)){
		alert("Email nije u dobrom formatu!");
		email.style.border = '2px solid #ff0000';return;
	}
	else{
	email.style.border = '';
	}
	var sifra=document.getElementById("password");
	var rezsifra=/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{4,}$/;
	if(!rezsifra.test(sifra.value)){
		alert("Sifra nije u dobrom formatu!");
		sifra.style.border = '2px solid #ff0000';return;
	}
	else{
	sifra.style.border = '';
    }
		var forma=document.getElementById("reg_forma");
		forma.submit();
}
