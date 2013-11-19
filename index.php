<?php
/*
===============================================
Author: Tomasz Potanski
===============================================
*/
?>


	<?xml version="1.0" encoding="utf-8"?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"  "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd" >
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<meta http-equiv="Content-Language" content="pl" />
			<meta name="Author" content="hegofimwus" />
			<title> Cyberbiblioteka</title>
		</head>

<?php
$username="***";
$password="***********";
$database="******";
  
mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die("Database not found!");
mysql_query("SET NAMES 'utf8'");
 
$action = $_POST['action'];
$what = $_GET['what'];

if ($action == 'add_ks'){
	$id_autora = $_POST['id_autora'];
	$id_gatunek = $_POST['id_gatunek'];
	$id_wydawnictwo = $_POST['id_wydawnictwo'];
	$rok_wydania = $_POST['rok_wydania'];
	$ilosc_stron = $_POST['ilosc_stron'];
	$tytul = $_POST['tytul'];

	$query="INSERT INTO ksiazka (id_autora, id_gatunek, id_wydawnictwo, rok_wydania, ilosc_stron, tytul) VALUES ('".$id_autora."', '".$id_gatunek."', '".$id_wydawnictwo."', '".$rok_wydania."', '".$ilosc_stron."', '".$tytul."');";
	
	mysql_query($query);
}

if ($action == 'edit_ks'){
	$id_autora = $_POST['id_autora'];
	$id_gatunek = $_POST['id_gatunek'];
	$id_wydawnictwo = $_POST['id_wydawnictwo'];
	$rok_wydania = $_POST['rok_wydania'];
	$ilosc_stron = $_POST['ilosc_stron'];
	$tytul = $_POST['tytul'];
	$nr_ks = $_POST['nr_ks'];

	$query="UPDATE ksiazka SET id_autora = ".$id_autora.", id_gatunek=".$id_gatunek.", id_wydawnictwo=".$id_wydawnictwo.", rok_wydania=".$rok_wydania.", ilosc_stron=".$ilosc_stron.", tytul='".$tytul."' WHERE id_ksiazka = ".$nr_ks.";";
	
	mysql_query($query);
}

if ($action == 'add_autor'){
	$imie = $_POST['imie'];
	$nazwisko = $_POST['nazwisko'];

	$query="INSERT INTO autorzy (imie, nazwisko) VALUES ('".$imie."', '".$nazwisko."');";
	
	mysql_query($query);
}

if ($action == 'add_wypo'){
	$imie = $_POST['imie'];
	$nazwisko = $_POST['nazwisko'];
	$id_ulica = $_POST['id_ulica'];
	$kontakt = $_POST['kontakt'];
	$nr_domu = $_POST['nr_domu'];
	$nr_lokalu = $_POST['nr_lokalu'];
	$id_miasto = $_POST['id_miasto'];
	$kod_pocztowy = $_POST['kod_pocztowy'];

	$query="INSERT INTO wyporzyczajacy (imie, nazwisko, id_ulica, kontakt, nr_domu, nr_lokalu, id_miasto, kod_pocztowy) VALUES ('".$imie."', '".$nazwisko."', '".$id_ulica."', '".$kontakt."', '".$nr_domu."', '".$nr_lokalu."', '".$id_miasto."', '".$kod_pocztowy."');";
	
	mysql_query($query);
}

if ($action == 'add_gatunek'){
	$gatunek_nazwa = $_POST['gatunek_nazwa'];
	
	$query="INSERT INTO gatunek (gatunek_nazwa) VALUES ('".$gatunek_nazwa."');";
	
	mysql_query($query);
}

if ($action == 'add_miasto'){
	$miasto_nazwa = $_POST['miasto_nazwa'];

	$query="INSERT INTO miasto (miasto_nazwa) VALUES ('".$miasto_nazwa."');";
	
	mysql_query($query);
}

if ($action == 'add_ulica'){
	$ulica_nazwa = $_POST['ulica_nazwa'];

	$query="INSERT INTO ulica (ulica_nazwa) VALUES ('".$ulica_nazwa."');";
	
	mysql_query($query);
}

if ($action == 'add_wydawnictwo'){
	$wydawnictwo_nazwa = $_POST['wydawnictwo_nazwa'];
	
	$query="INSERT INTO wydawnictwo (wydawnictwo_nazwa) VALUES ('".$wydawnictwo_nazwa."');";
	
	mysql_query($query);
}

if ($action == 'rm_autor'){
	$id = $_POST['id'];
	
	$query="DELETE FROM autorzy WHERE id_autora = '".$id."';";
	
	mysql_query($query);
}

if ($action == 'rm_gatunek'){
	$id = $_POST['id'];
	
	$query="DELETE FROM gatunek WHERE id_gatunek = '".$id."';";
	
	mysql_query($query);
}

if ($action == 'rm_miasto'){
	$id = $_POST['id'];
	
	$query="DELETE FROM miasto WHERE id_miasto = '".$id."';";
	
	mysql_query($query);
}

if ($action == 'rm_ulica'){
	$id = $_POST['id'];
	
	$query="DELETE FROM ulica WHERE id_ulica = '".$id."';";

	mysql_query($query);
}

if ($action == 'rm_wydawnictwo'){
	$id = $_POST['id'];
	
	$query="DELETE FROM wydawnictwo WHERE id_wydawnictwo = '".$id."';";
	
	mysql_query($query);
}

if ($action == 'rm_wypo'){
	$id = $_POST['id'];
	
	$query="DELETE FROM wyporzyczajacy WHERE id_wyporzyczajacy = '".$id."';";

	mysql_query($query);
}

if ($action == 'rm_ks'){

	$id = $_POST['id'];
	
	$query="DELETE FROM ksiazka WHERE id_ksiazka = '".$id."';";
	
	mysql_query($query);
}

if ($action == 'rm_wyporzycz'){
	$id = $_POST['id'];
	
	$query="DELETE FROM wyporzyczenie WHERE id_wyporzyczenie = '".$id."';";
	
	mysql_query($query);
}

if ($action == 'mk_wyporzycz'){
	$id_ksiazka = $_POST['id_ksiazka'];
	$id_wyporzyczajacy = $_POST['id_wyporzyczajacy'];
	
	$query="INSERT INTO wyporzyczenie (id_ksiazka, id_wyporzyczajacy, data) VALUES ('".$id_ksiazka."', '".$id_wyporzyczajacy."', '".date('Y-m-d H:i:s')."');";

	mysql_query($query);
}

if ($action != ''){
	echo '<body onload="javascript:window.location.href = \'index.php\'">';
}//*/

else {
echo '<body>';
}
  ?>

<div style="margin-left: auto; margin-right: auto; width: 600px;">
<?php

if ($what == ''){ 
	$query="SELECT * FROM ksiazka;";
	mysql_query("SET NAMES 'utf8'");
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	
	$i=0;
	echo '<h1>Following books are available:</h1><br/>';
	while ($i < $num) {

		$tytul=mysql_result($result,$i,"tytul"); 
		$id_ksiazka=mysql_result($result,$i,"id_ksiazka"); 
		echo '<br/><a href="index.php?what='.$id_ksiazka.'">'.$tytul.'</a>';
		$i++;
	} // - while
	$i=0;
		
} // - ifa
if ($what == 'add_autor'){
	echo '<h1>Author addition</h1><br/>';
	echo '<FORM ACTION="index.php" METHOD="POST">';
	echo '<input type="hidden" name="action" value="add_autor"/>';
	echo 'first name: <input type="text" name="imie" />';
	echo '<br/>second name: <input type="text" name="nazwisko" />';
	echo '<br/><input type="submit" value="submit!"/></FORM>';
	echo '<br/><br/><br/><a href="index.php">go back to the main page</a>';
}

if ($what == 'add_wypo'){
	echo '<h1>Addition of person who rent a book</h1><br/>';
	echo '<FORM ACTION="index.php" METHOD="POST">';
	echo '<input type="hidden" name="action" value="add_wypo"/>';
	echo 'first name: <input type="text" name="imie" />';
	echo '<br/>second name: <input type="text" name="nazwisko" />';
	
	$query = 'SELECT * FROM ulica;';
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	
	echo '<br/>select street: <select name="id_ulica">';
	$i=0;
	while ($i < $num) {
		$id_ulica=mysql_result($result,$i,"id_ulica"); //street id
		$ulica_nazwa=mysql_result($result,$i,"ulica_nazwa"); //street name
		echo '<br/><option value="'.$id_ulica.'">'.$ulica_nazwa.'</option>';
		$i++;
	} // od while
	echo '</select>';//*/
	
	echo '<br/>contact: <input type="text" name="kontakt" />';
	echo '<br/>building number: <input type="text" name="nr_domu" />';
	echo '<br/>flat number: <input type="text" name="nr_lokalu" />';
	
	$query = 'SELECT * FROM miasto;';
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	
	echo '<br/>select the city: <select name="id_miasto">';
	$i=0;
	while ($i < $num) {

		$id_miasto=mysql_result($result,$i,"id_miasto"); //city id
		$miasto_nazwa=mysql_result($result,$i,"miasto_nazwa"); //city name
		echo '<br/><option value="'.$id_miasto.'">'.$miasto_nazwa.'</option>';
		$i++;
	} // - while
	echo '</select>';//*/
	
	echo '<br/>postal code: <input type="text" name="kod_pocztowy" />';
	echo '<br/><input type="submit" value="submit!"/></FORM>';
	echo '<br/><br/><br/><a href="index.php">go back to the main page</a>';
}

if ($what == 'add_gatunek'){
	echo '<h1>Addition of book grade:</h1><br/>';
	echo '<FORM ACTION="index.php" METHOD="POST">';
	echo '<input type="hidden" name="action" value="add_gatunek"/>';
	echo 'book grade name: <input type="text" name="gatunek_nazwa" />';
	echo '<br/><input type="submit" value="submit!"/></FORM>';
	echo '<br/><br/><br/><a href="index.php">go back to the main page</a>';
}

if ($what == 'add_miasto'){
	echo '<h1>Addition of the city</h1><br/>';
	echo '<FORM ACTION="index.php" METHOD="POST">';
	echo '<input type="hidden" name="action" value="add_miasto"/>';
	echo 'city name: <input type="text" name="miasto_nazwa" />';
	echo '<br/><input type="submit" value="submit!"/></FORM>';
	echo '<br/><br/><br/><a href="index.php">go back to the main page</a>';
}

if ($what == 'add_ulica'){
	echo '<h1>Addition of a street:</h1><br/>';
	echo '<FORM ACTION="index.php" METHOD="POST">';
	echo '<input type="hidden" name="action" value="add_ulica"/>';
	echo 'Street name: <input type="text" name="ulica_nazwa" />';
	echo '<br/><input type="submit" value="submit!"/></FORM>';
	echo '<br/><br/><br/><a href="index.php">go back to the main page</a>';
}

if ($what == 'add_wydawnictwo'){
	echo '<h1>Addition of a publishing company:</h1><br/>';
	echo '<FORM ACTION="index.php" METHOD="POST">';
	echo '<input type="hidden" name="action" value="add_wydawnictwo"/>';
	echo 'publishing house name: <input type="text" name="wydawnictwo_nazwa" />';
	echo '<br/><input type="submit" value="submit!"/></FORM>';
	echo '<br/><br/><br/><a href="index.php">go back to the main page</a>';
}
if ($what == 'list_autor'){
	$query="SELECT * FROM autorzy;";
	mysql_query("SET NAMES 'utf8'");
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	
	$i=0;
	echo '<h1>Our experts :D:</h1><br/>';
	while ($i < $num) {

		$imie=mysql_result($result,$i,"imie"); //first name
		$nazwisko=mysql_result($result,$i,"nazwisko"); //second name
		echo '<br/>'.$nazwisko.' '.$imie;
		$i++;
	} // - while
		$i=0;
		echo '<br/><br/><br/><a href="index.php">go back to the main page</a>';
}

if ($what == 'list_wypo'){
	$query="SELECT * FROM wyporzyczajacy INNER JOIN miasto ON wyporzyczajacy.id_miasto = miasto.id_miasto INNER JOIN ulica ON wyporzyczajacy.id_ulica = ulica.id_ulica;";
	mysql_query("SET NAMES 'utf8'");
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	
	$i=0;
	echo '<h1>Person renting a book:</h1><br/>';
	while ($i < $num) {
	
		$id_wyporzyczajacy=mysql_result($result,$i,"id_wyporzyczajacy"); 
		$imie=mysql_result($result,$i,"imie"); //first name
		$nazwisko=mysql_result($result,$i,"nazwisko"); //second name
		$id_ulica=mysql_result($result,$i,"id_ulica"); //street id
		$ulica_nazwa=mysql_result($result,$i,"ulica_nazwa"); //street name
		$kontakt=mysql_result($result,$i,"kontakt"); //contact
		$nr_domu=mysql_result($result,$i,"nr_domu"); //house/building number
		$nr_lokalu=mysql_result($result,$i,"nr_lokalu"); //flat number
		$id_miasto=mysql_result($result,$i,"id_miasto"); //city id
		$miasto_nazwa=mysql_result($result,$i,"miasto_nazwa"); //name of a city
		$kod_pocztowy=mysql_result($result,$i,"kod_pocztowy"); //postal code
		echo '<br/><div style="text-align: center; font-weight: bold;">'.$nazwisko.' '.$imie.'</div>';
		echo '<br/>street: '.$ulica_nazwa;
		echo '<br/>contact: '.$kontakt;
		echo '<br/>flat number: '.$nr_lokalu;
		echo '<br/>city: <a href="http://maps.google.pl/maps?hl=pl&q='.$miasto_nazwa.'&lr=&um=1&ie=UTF-8&split=0&gl=pl&ei=vcsmStyPHsHj-AaP7MzPDw&sa=X&oi=geocode_result&ct=title&resnum=1">'.$miasto_nazwa.'</a>';
		echo '<br/>postal code: '.$kod_pocztowy;

		
		$queryq="SELECT * FROM wyporzyczenie INNER JOIN ksiazka ON wyporzyczenie.id_ksiazka = ksiazka.id_ksiazka WHERE wyporzyczenie.id_wyporzyczajacy = ".$id_wyporzyczajacy.";";
		$resultq=mysql_query($queryq);
		$numq=mysql_numrows($resultq);
		$z = 0;
		
		if ($numq >0 ){
			echo '<br/>Person has following books:';
				while ($z < $numq) {
							$tytul=mysql_result($resultq,$z,"tytul");
							$id_ksiazka=mysql_result($resultq,$z,"id_ksiazka");
							$id_wyporzyczenie=mysql_result($resultq,$z,"id_wyporzyczenie");
									echo '<FORM ACTION="index.php" METHOD="POST">';
									echo '<input type="hidden" name="action" value="rm_wyporzycz"/>';
									echo '<input type="hidden" name="id" value="'.$id_wyporzyczenie.'"/>';
									echo '<input type="submit" value="delete it!"/></form>';
								echo '<a href="index.php?what='.$id_ksiazka.'">'.$tytul.'</a>';
								$z++;
				}
		}
		$z = 0;
		
		echo '<hr/>';
		
		$i++;
	} // - while
	$i=0;
	echo '<br/><br/><br/><a href="index.php">go back to the main page</a>';
 }
if ($what == 'list_gatunek'){
	$query="SELECT * FROM gatunek;";
	mysql_query("SET NAMES 'utf8'");
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	
	$i=0;
	echo '<h1>Book grades:</h1><br/>';
	while ($i < $num) {

		$gatunek_nazwa=mysql_result($result,$i,"gatunek_nazwa"); 
		echo '<br/>'.$gatunek_nazwa;
		$i++;
	} // - while
	$i=0;
	echo '<br/><br/><br/><a href="index.php">go back to the main page</a>';
}

if ($what == 'list_miasto'){
	$query="SELECT * FROM miasto;";
	mysql_query("SET NAMES 'utf8'");
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	
	$i=0;
	echo '<h1>the city:</h1><br/>';
	while ($i < $num) {

		$miasto_nazwa=mysql_result($result,$i,"miasto_nazwa"); 
		echo '<br/>'.$miasto_nazwa;
		$i++;
	} // od while
	$i=0;
	echo '<br/><br/><br/><a href="index.php">go back to the main page</a>';
		}
if ($what == 'list_ulica'){

	$query="SELECT * FROM ulica;";
	mysql_query("SET NAMES 'utf8'");
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	
	$i=0;
	echo '<h1>Streets:</h1><br/>';
	while ($i < $num) {

		$ulica_nazwa=mysql_result($result,$i,"ulica_nazwa"); 
		echo '<br/>'.$ulica_nazwa;
		$i++;
	} // - while
	$i=0;
	echo '<br/><br/><br/><a href="index.php">go back to the main page</a>';
 }
if ($what == 'list_wydawnictwo'){
	$query="SELECT * FROM wydawnictwo;";
	mysql_query("SET NAMES 'utf8'");
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	
	$i=0;
	echo '<h1>Publishing houses:</h1><br/>';
	while ($i < $num) {

		$wydawnictwo_nazwa=mysql_result($result,$i,"wydawnictwo_nazwa"); 
		echo '<br/>'.$wydawnictwo_nazwa;
		$i++;
	} // - while
	$i=0;
	echo '<br/><br/><br/><a href="index.php">go back to the main page</a>';
}

 if ($what == 'rm_autor'){
 
	echo '<h1>Author deletion</h1><br/>';
	echo '<FORM ACTION="index.php" METHOD="POST">';
	echo '<input type="hidden" name="action" value="rm_autor"/>';
	echo '<select name="id">';
	
	$query="SELECT * FROM autorzy;";
	mysql_query("SET NAMES 'utf8'");
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	
	$i=0;
	while ($i < $num) {
		$id=mysql_result($result,$i,"id_autora"); 
		$imie=mysql_result($result,$i,"imie"); //first name
		$nazwisko=mysql_result($result,$i,"nazwisko");  //second name
		echo '<br/><option value="'.$id.'">'.$imie.' '.$nazwisko.'</option>';
		$i++;
	} // - while
	$i=0;
	echo '</select><br/><input type="submit" value="delete!"/></FORM>';
	echo '<br/><br/><br/><a href="index.php">go back to the main page</a>';

}

if ($what == 'rm_wypo'){
 
	echo '<h1>Removing person renting the book:</h1><br/>';
	echo '<FORM ACTION="index.php" METHOD="POST">';
	echo '<input type="hidden" name="action" value="rm_wypo"/>';
	
	echo '<select name="id">';
	
	$query="SELECT * FROM wyporzyczajacy;";
	mysql_query("SET NAMES 'utf8'");
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	
	$i=0;
	while ($i < $num) {
		$id=mysql_result($result,$i,"id_wyporzyczajacy"); 
		$imie=mysql_result($result,$i,"imie"); 
		$nazwisko=mysql_result($result,$i,"nazwisko"); 
		echo '<br/><option value="'.$id.'">'.$imie.' '.$nazwisko.'</option>';
		$i++;
	} // - while
	$i=0;
	echo '</select><br/><input type="submit" value="delete!"/></FORM><br/>DELETE';
	echo '<br/><br/><br/><a href="index.php">go back to the main page</a>';

}
 
 if ($what == 'rm_gatunek'){
 
	echo '<h1>Book grade removing</h1><br/>';
	echo '<FORM ACTION="index.php" METHOD="POST">';
	echo '<input type="hidden" name="action" value="rm_gatunek"/>';
	
	echo '<select name="id">';
	
	$query="SELECT * FROM gatunek;";
	mysql_query("SET NAMES 'utf8'");
	
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	
	$i=0;
	while ($i < $num) {
		$id=mysql_result($result,$i,"id_gatunek"); 
		$gatunek_nazwa=mysql_result($result,$i,"gatunek_nazwa"); //book grade name 
		echo '<br/><option value="'.$id.'">'.$gatunek_nazwa.'</option>';
		$i++;
	} // - while
	$i=0;
	echo '</select><br/><input type="submit" value="delete!"/></FORM>';
	echo '<br/><br/><br/><a href="index.php">go back to the main page</a>';

}
 
 if ($what == 'rm_ks'){
 
	echo '<h1>Book removing</h1><br/>';
	echo '<FORM ACTION="index.php" METHOD="POST">';
	echo '<input type="hidden" name="action" value="rm_ks"/>';
	
	echo '<select name="id">';
	
	$query="SELECT * FROM ksiazka;";
	mysql_query("SET NAMES 'utf8'");
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	
	$i=0;
	while ($i < $num) {
		$id=mysql_result($result,$i,"id_ksiazka"); 
		$tytul=mysql_result($result,$i,"tytul");  //book title
		echo '<br/><option value="'.$id.'">'.$tytul.'</option>';
		$i++;
	} // - while
	$i=0;
	echo '</select><br/><input type="submit" value="delete!"/></FORM>';
	echo '<br/><br/><br/><a href="index.php">go back to the main page</a>';

}
 
 if ($what == 'rm_miasto'){
 
	echo '<h1>City removing:</h1><br/>';
	echo '<FORM ACTION="index.php" METHOD="POST">';
	echo '<input type="hidden" name="action" value="rm_miasto"/>';
	
	echo '<select name="id">';
	
	$query="SELECT * FROM miasto;";
	mysql_query("SET NAMES 'utf8'");
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	
	$i=0;
	while ($i < $num) {
		$id=mysql_result($result,$i,"id_miasto"); 
		$miasto_nazwa=mysql_result($result,$i,"miasto_nazwa"); 
		echo '<br/><option value="'.$id.'">'.$miasto_nazwa.'</option>';
		$i++;
	} // - while
	$i=0;
	echo '</select><br/><input type="submit" value="delete!"/></FORM>';
	echo '<br/><br/><br/><a href="index.php">go back to the main page</a>';

}
 
 if ($what == 'rm_ulica'){
 
	echo '<h1>Street removing</h1><br/>';
	echo '<FORM ACTION="index.php" METHOD="POST">';
	echo '<input type="hidden" name="action" value="rm_ulica"/>';
	
	echo '<select name="id">';
	
	$query="SELECT * FROM ulica;";
	mysql_query("SET NAMES 'utf8'");
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	
	$i=0;
	while ($i < $num) {
		$id=mysql_result($result,$i,"id_ulica"); 
		$ulica_nazwa=mysql_result($result,$i,"ulica_nazwa"); 
		echo '<br/><option value="'.$id.'">'.$ulica_nazwa.'</option>';
		$i++;
	} // - while
	$i=0;
	echo '</select><br/><input type="submit" value="delete!"/></FORM>';
	echo '<br/><br/><br/><a href="index.php">go back to the main page</a>';

}
 
 if ($what == 'rm_wydawnictwo'){
 
	echo '<h1>Publishing house removing</h1><br/>';
	echo '<FORM ACTION="index.php" METHOD="POST">';
	echo '<input type="hidden" name="action" value="rm_wydawnictwo"/>';
	
	echo '<select name="id">';
	
	$query="SELECT * FROM wydawnictwo;";
	mysql_query("SET NAMES 'utf8'");
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	
	$i=0;
	while ($i < $num) {
		$id=mysql_result($result,$i,"id_wydawnictwo"); 
		$wydawnictwo_nazwa=mysql_result($result,$i,"wydawnictwo_nazwa"); 
		echo '<br/><option value="'.$id.'">'.$wydawnictwo_nazwa.'</option>';
		$i++;
	} // - while
	$i=0;
	echo '</select><br/><input type="submit" value="delete!"/></FORM>';
	echo '<br/><br/><br/><a href="index.php">go back to the main page</a>';

}

 if ($what == 'mk_wyporzycz'){
 
	echo '<h1>Renting</h1><br/>';
	echo '<FORM ACTION="index.php" METHOD="POST">';
	echo '<input type="hidden" name="action" value="mk_wyporzycz"/>';
	
	echo '<br/><select name="id_ksiazka">';
	
	$query="SELECT * FROM ksiazka;";
	mysql_query("SET NAMES 'utf8'");
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	
	$i=0;
	while ($i < $num) {
		$id_ksiazka=mysql_result($result,$i,"id_ksiazka"); 
		$tytul=mysql_result($result,$i,"tytul"); 
		
		$queryz="SELECT * FROM wyporzyczenie WHERE id_ksiazka = ".$id_ksiazka.";";
		$resultz=mysql_query($queryz);
		$numz=mysql_numrows($resultz);
		if ($numz == 0){
		echo '<br/><option value="'.$id_ksiazka.'">'.$tytul.'</option>';
		}
		$i++;
	} // - while
	$i=0;
	echo '</select>';
	
	echo '<br/><select name="id_wyporzyczajacy">';
	
	$query="SELECT * FROM wyporzyczajacy;";
	mysql_query("SET NAMES 'utf8'");
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	
	$i=0;
	while ($i < $num) {
		$id_wyporzyczajacy=mysql_result($result,$i,"id_wyporzyczajacy"); 
		$imie=mysql_result($result,$i,"imie"); 
		$nazwisko=mysql_result($result,$i,"nazwisko"); 
		echo '<br/><option value="'.$id_wyporzyczajacy.'">'.$nazwisko.' '.$imie.'</option>';
		$i++;
	} // - while
	$i=0;
	echo '</select>';
	
	echo '<br/><input type="submit" value="rent!"/></FORM>';
	echo '<br/><br/><br/><a href="index.php">go back to the main page</a>';

}

if ($what == 'edit_ks'){
	echo '<h1>book edition</h1><br/>';
	echo '<FORM ACTION="index.php" METHOD="POST">';
	
	$nr_ks = $_POST['nr_ks'];
	
	$queryaa = 'SELECT * FROM ksiazka WHERE id_ksiazka = '.$nr_ks.';';
	$resultaa=mysql_query($queryaa);
	$this_tytul=mysql_result($resultaa,0,"tytul"); //title
	$this_id_gatunek=mysql_result($resultaa,0,"id_gatunek"); //book grade
	$this_id_autora=mysql_result($resultaa,0,"id_autora"); //author
	$this_ilosc_stron=mysql_result($resultaa,0,"ilosc_stron"); //amount of page
	$this_id_wydawnictwo=mysql_result($resultaa,0,"id_wydawnictwo"); //publishing house
	$this_rok_wydania=mysql_result($resultaa,0,"rok_wydania"); //year of pulishing
	echo '<input type="hidden" name="action" value="edit_ks"/>';
	echo '<input type="hidden" name="nr_ks" value="'.$nr_ks.'"/>';
	echo "tytul: <input type='text' name='tytul' value=".$this_tytul." />";
	
	$querya = 'SELECT * FROM gatunek;';
	$resulta=mysql_query($querya);
	$numa=mysql_numrows($resulta);
	
	echo '<br/>Choose the book grade: <select name="id_gatunek">';
	$ia=0;	
	while ($ia < $numa) {

		$gatunek_nazwa=mysql_result($resulta,$ia,"gatunek_nazwa"); //name of book grade
		$id_gatunek=mysql_result($resulta,$ia,"id_gatunek"); 
		echo '<br/><option value="'.$id_gatunek.'"';
		if ($id_gatunek == $this_id_gatunek){
			echo ' selected="selected"';
		}
		echo '>'.$gatunek_nazwa.'</option>';
		$ia++;
	} // - while
	$ia=0;
	echo '</select>';
		
			
	$query = 'SELECT * FROM autorzy;';
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	
	echo '<br/>Choose author: <select name="id_autora">';
	$i=0;
		while ($i < $num) {

		$imie=mysql_result($result,$i,"imie"); //first name
		$id_autora=mysql_result($result,$i,"id_autora"); //author id
		$nazwisko=mysql_result($result,$i,"nazwisko"); //second name
		echo '<br/><option value="'.$id_autora.'"';
		
		if ($id_autora == $this_id_autora){
			echo ' selected="selected"';
		}
		
		echo '>'.$nazwisko.' '.$imie.'</option>';
		$i++;
	} // - while
	echo '</select>';//*/
		
	echo '<br/>amount of pages: <input type="text" name="ilosc_stron" value="'.$this_ilosc_stron.'"/>';
	
	echo '<br/>choose publishing house: <select name="id_wydawnictwo">';
	$query = 'SELECT * FROM wydawnictwo;';
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	
	$i=0;
	while ($i < $num) {

		$wydawnictwo_nazwa=mysql_result($result,$i,"wydawnictwo_nazwa"); // publishing house
		$id_wydawnictwo=mysql_result($result,$i,"id_wydawnictwo"); //publishing house id
		echo '<br/><option value="'.$id_wydawnictwo.'"';
		if ($id_wydawnictwo == $this_id_wydawnictwo){
			echo ' selected="selected"';
		}
		echo '>'.$wydawnictwo_nazwa.'</option>';
		$i++;
	} // - while
	echo '</select>';//*/
	
	
	echo '<br/>Year of publishing:  <input type="text" name="rok_wydania" value="'.$this_rok_wydania.'"/>';
	
	echo '<br/><input type="submit" value="submit!"/></FORM>';
	echo '<br/><br/><br/><a href="index.php">go back to the main page</a>';
} 
 
if ($what == 'add_ks'){
	echo '<h1>Dodawanie ksiazki</h1><br/>';
	echo '<FORM ACTION="index.php" METHOD="POST">';


	echo '<input type="hidden" name="action" value="add_ks"/>';
	echo 'tytul: <input type="text" name="tytul" />';
	
	$querya = 'SELECT * FROM gatunek;';
	$resulta=mysql_query($querya);
	$numa=mysql_numrows($resulta);
	
	echo '<br/>Choose the book grade: <select name="id_gatunek">';
	$ia=0;	
	while ($ia < $numa) {

		$gatunek_nazwa=mysql_result($resulta,$ia,"gatunek_nazwa"); 
		$id_gatunek=mysql_result($resulta,$ia,"id_gatunek"); 
		echo '<br/><option value="'.$id_gatunek.'">'.$gatunek_nazwa.'</option>';
		$ia++;
	} // - while
	$ia=0;
	echo '</select>';
		
			
	$query = 'SELECT * FROM autorzy;';
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	
	echo '<br/>Choose the author: <select name="id_autora">';
	$i=0;
	while ($i < $num) {

		$imie=mysql_result($result,$i,"imie"); 
		$id_autora=mysql_result($result,$i,"id_autora"); 
		$nazwisko=mysql_result($result,$i,"nazwisko");
		echo '<br/><option value="'.$id_autora.'">'.$nazwisko.' '.$imie.'</option>';
		$i++;
	} // - while
	echo '</select>';//*/
		
	echo '<br/>amount of pages: <input type="text" name="ilosc_stron" />';
	
	echo '<br/>Choose publishing house: <select name="id_wydawnictwo">';
	$query = 'SELECT * FROM wydawnictwo;';
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	
	$i=0;
	while ($i < $num) {

		$wydawnictwo_nazwa=mysql_result($result,$i,"wydawnictwo_nazwa"); 
		$id_wydawnictwo=mysql_result($result,$i,"id_wydawnictwo"); 
		echo '<br/><option value="'.$id_wydawnictwo.'">'.$wydawnictwo_nazwa.'</option>';
		$i++;
	} // - while
	echo '</select>';//*/
	
	
	echo '<br/>Year of publishing:  <input type="text" name="rok_wydania" />';
	
	echo '<br/><input type="submit" value="submit!"/></FORM>';
	echo '<br/><br/><br/><a href="index.php">go back to the main page</a>';
} 
else {
	$query="SELECT * FROM ksiazka INNER JOIN autorzy ON ksiazka.id_autora = autorzy.id_autora INNER JOIN gatunek ON ksiazka.id_gatunek = gatunek.id_gatunek INNER JOIN wydawnictwo ON ksiazka.id_wydawnictwo = wydawnictwo.id_wydawnictwo WHERE id_ksiazka = '$what';";
	mysql_query("SET NAMES 'utf8'");
	mysql_query($query);
	$result=mysql_query($query);
	$num=mysql_numrows($result);

	$i=0;

	while ($i < $num) {

		$tytul=mysql_result($result,$i,"tytul"); 
		$id_ksiazka=mysql_result($result,$i,"id_ksiazka"); //book id
		$id_autora=mysql_result($result,$i,"id_autora"); //author id
		$id_gatunek=mysql_result($result,$i,"id_gatunek"); //book grade id
		$gatunek_nazwa=mysql_result($result,$i,"gatunek_nazwa"); //book grade name
		$id_wydawnictwo=mysql_result($result,$i,"id_wydawnictwo"); //publishing house id
		$wydawnictwo_nazwa=mysql_result($result,$i,"wydawnictwo_nazwa"); //publishing house name
		$rok_wydania=mysql_result($result,$i,"rok_wydania"); //year of publishing
		$ilosc_stron=mysql_result($result,$i,"ilosc_stron"); //amount of pages
		$imie=mysql_result($result,$i,"imie"); //first name - author
		$nazwisko=mysql_result($result,$i,"nazwisko"); //second name - author
		echo '<br/><h1>'.$tytul.'</h1>';
		echo '<br/>autor: '.$nazwisko.' '.$imie;//author
		echo '<br/>gatunek: '.$gatunek_nazwa;//book grade name
		echo '<br/>ilosc stron: '.$ilosc_stron; //amount of pages
		echo '<br/>wydawnictwo: '.$wydawnictwo_nazwa; //publishing house name
		echo '<br/>rok wydania: '.$rok_wydania; //year of publishing
		echo '<br/>u nas ksiazka ma nr: '.$id_ksiazka; //book id
		
		$queryz="SELECT * FROM wyporzyczenie WHERE id_ksiazka = ".$id_ksiazka.";";
		$resultz=mysql_query($queryz);
		$numz=mysql_numrows($resultz);
		if ($numz == 0){
			echo '<br/><div style="color:green;">Book is still available!</div>';
			echo '<a href="index.php?what=mk_wyporzycz">rent!</a>';
		} else {
			echo '<br/><div style="color:red;">Book already rented ;-/</div>';
		}
		
	echo '<FORM ACTION="index.php?what=edit_ks" METHOD="POST">';
	echo '<input type="hidden" name="nr_ks" value="'.$id_ksiazka.'"/>';
	echo '<input type="submit" value="edytuj ;)"/></form>';

	echo '<br/><br/><a href="index.php">Main page</a>';
 
	$i++;
	} // - while
} // - ifa
//} // - elsa ;)

echo '</div>';

echo '
	<div style="text-align: center;
	position : fixed;
	top:0px;
	left: 30px;
	width: 230px;">
';
	
	echo '<hr/><b>add:</b><br/><a href="index.php?what=add_ks">a book ;)</a>';
	echo '<br/><a href="index.php?what=add_autor">an author</a>';
	echo '<br/><a href="index.php?what=add_wypo">a person renting</a>';
	echo '<br/><a href="index.php?what=add_gatunek">a book grade</a>';
	echo '<br/><a href="index.php?what=add_miasto">a city</a>';
	echo '<br/><a href="index.php?what=add_ulica">a street</a>';
	echo '<br/><a href="index.php?what=add_wydawnictwo">a publishing house</a>';
		echo '<br/><b>List:</b>';
	echo '<br/><a href="index.php?what=list_autor">the authors</a>';
	echo '<br/><a href="index.php?what=list_wypo">renting people</a>';
	echo '<br/><a href="index.php?what=list_gatunek">book grades</a>';
	echo '<br/><a href="index.php?what=list_miasto">cities</a>';
	echo '<br/><a href="index.php?what=list_ulica">streets</a>';
	echo '<br/><a href="index.php?what=list_wydawnictwo">publishing houses</a>';
		echo '<br/><b>remove:</b>';
	echo '<br/><a href="index.php?what=rm_ks">a book</a>';
	echo '<br/><a href="index.php?what=rm_autor">an author</a>';
	echo '<br/><a href="index.php?what=rm_wypo">a renting person</a>';
	echo '<br/><a href="index.php?what=rm_gatunek">a book grade</a>';
	echo '<br/><a href="index.php?what=rm_miasto">a city</a>';
	echo '<br/><a href="index.php?what=rm_ulica">a street</a>';
	echo '<br/><a href="index.php?what=rm_wydawnictwo">a publishing house</a>';
	
	echo '<br/><br/><a href="index.php?what=mk_wyporzycz">rent</a>';
	
	echo '<br/><br/><a href="javascript:window.location.href = \'index.php\'">Main page</a>';
	echo '<br/><br/>This crazy project as created by:<br/>Tomasy Potański';
	echo '<hr/>';
	echo '</div>';

mysql_close();
 ?>

</body>
</html>
<?php
/*
===============================================
Author: Tomasz Potanski
===============================================
*/
?>