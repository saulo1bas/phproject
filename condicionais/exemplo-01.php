<form>

 <input type="nome" name="Nome:">
 <input type="date" name="Nascimento">
 <input type="submit" name="OK">



</form>



<?php

if(isset($_GET)){

	foreach ($_GET as $key => $value) {
		
		echo $key;

		echo "<br>";

		echo $value;
	}

}


?>