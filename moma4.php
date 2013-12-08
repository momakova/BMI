<HTML>
<head>
<title> Calculator of Body Mass Index</title>
</head>

<body>
<h1> BMI i idealna tezina </h1>
<div id="main">
<form  type="submit" method="post">
Vase ime i prezime <br></><input type="text" name="ime_i_prezime"class="forma" id="ime_i_prezime"></br>
<br/>
Vas pol : </br>
<input type="radio" name="pol" value="1" checked="yes" /> Muški   
<input type="radio" name="pol" value="2" /> Ženski  </br></br>
Uneti vase godine starosti <br/><br/><input type="text" name="godine"class="forma" id="godine"> </br></br>
Uneti masu u kilogramima<br/><br/><input type="text" name="masa"class="forma" id="masa"> <br/></br>
Uneti visinu u centimetrima<br/><br/><input type="text" name="visina"class="forma" id="visina"> <br/></br>


<input type="image" class="image" class="form2" alt="Izracunati">
</form>

<?php
if ( $_POST ) {
$ime=$_POST['ime_i_prezime'];
$vis=$_POST['visina'] ;
$tez=$_POST['masa'];
$god=$_POST['godine'];
$pol_rad=$_POST['pol'];
        if ($vis<=0 or $tez<=0 or $god<=0 or strlen($vis)==0 or strlen($tez)==0 or strlen($god)==0){
                echo 'Podaci nisu lepo uneti </br>';
                $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
        
                die();
}
        else{
                        $vis2=($vis/100)*($vis/100);
                        if($pol_rad=='1') {
		$ime1=$ime;
		$vis1=$vis;
		$tez1=$tez;
		$god1=$god;
                                $jedan=$vis-100;
                                $dva=($vis-150)/4;
                                $tri=($god-20)/2.5;
                                $ide=$jedan-$dva+$tri;
                                $rezultat=$tez/$vis2;
                                }
                        if ($pol_rad=='2') {
		$ime1=$ime;
		$vis1=$vis;
		$tez1=$tez;
		$god1=$god;
                                $jedan=$vis-100;
                                $dva=($vis-150)/2.5;
                                $tri=($god-20)/2.5;
                                $ide=$jedan-$dva+$tri;
                                $rezultat=$tez/$vis2;
	
}
                if ($rezultat<18.5) {
                echo "Obavestavamo $ime1 na osnovu visine odnosno $vis1 cm, tezine odnosno $tez1 kg i $god1 godina starosti da je", ' vas BMI : ' ,number_format($rezultat, 2),'<br/> <b>Neuhranjeni ste!</b></br>'; 

}
                if($rezultat>18.5 and $rezultat<24.9) {
                echo "Obavestavamo $ime1 na osnovu visine odnosno $vis1 cm, tezine odnosno $tez1 kg i $god1 godina starosti da je", ' vas BMI : ' ,number_format($rezultat, 2),'</br>','  <b>Normalne ste težine!</b></br>';
}
                if($rezultat<29.9 and $rezultat>25) {
                echo "Obavestavamo $ime1 na osnovu visine odnosno $vis1 cm, tezine odnosno $tez1 kg i $god1 godina starosti da je", ' vas BMI : ' ,number_format($rezultat, 2),'</br>','  <b>Povecane ste težine!</b></br>';
}
                if ($rezultat>30){
                echo "Obavestavamo $ime1 na osnovu visine odnosno $vis1 cm, tezine odnosno $tez1 kg i $god1 godina starosti da je", ' vas BMI : ' ,number_format($rezultat, 2),'</br>','  <b>Gojazni ste!</b></br>';
}
echo 'Vaša idealna tezina je : ', $ide;
$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
echo '</br>';

die();

}

}
?>
</div>
</body>

</HTML>
