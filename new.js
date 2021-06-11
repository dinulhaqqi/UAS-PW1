function volume(){
		var s;
		s = document.getElementById("angka1").value;
		
		s = parseFloat(s)
		
		document.getElementById("hasil").innerHTML = s*s*s;
		}
		
function lp(){
		var s;
		s = document.getElementById("angka1").value;
		
		s = parseFloat(s)
		
		document.getElementById("hasil").innerHTML = 6*(s*s);
		}