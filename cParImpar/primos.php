<form name=formulario method=POST action=primos.php>
			Introduce un numero: <input type=number name=numero>
			<input type=submit name=comprobar>
		</form>
		
<?php
	if(isset($_POST['numero'])){
		$num=$_POST['numero'];
		if(is_numeric($num)){
			$primo=true;
			for ($i = 2; $i < $num; $i++) {
				if (($num % $i) == 0) {
				// No es primo 
				$primo= false;
				}
			}
			if($num<0) echo"Numero invalido, menor que 0<br>";
			else{
				if($primo==true) echo"El numero ".$num." es primo";
				else echo "E numero ".$num." no es primo.";
			}
		}else{
			echo"Introduce un numero";
		}
	}else{
		echo "hola ";
	}
?>