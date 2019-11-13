<?php

$curl = curl_init();

curl_setopt_array($curl, array(
	CURLOPT_URL => "https://skyscanner-skyscanner-flight-search-v1.p.rapidapi.com/apiservices/pricing/v1.0",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => "cabinClass=business&children=0&infants=0&country=US&currency=USD&locale=en-US&originPlace=SFO-sky&destinationPlace=LHR-sky&outboundDate=2019-12-01&adults=1",
	CURLOPT_HTTPHEADER => array(
		"content-type: application/x-www-form-urlencoded",
		"x-rapidapi-host: skyscanner-skyscanner-flight-search-v1.p.rapidapi.com",
		"x-rapidapi-key: 611189d0e6msh7ff09e834e88ad7p19b062jsn50828695a48f"
	),
));
curl_setopt($curl, CURLOPT_HEADER, true);
curl_setopt($curl, CURLOPT_POST, 1);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);


curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);


$target = curl_getinfo($curl, CURLINFO_EFFECTIVE_URL);
$response = curl_exec($curl);

$header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
$header = substr($response, 189, $header_size);

$err = curl_error($curl);

$string = str_replace(' ', '', $header);
$first = strtok($header , 'S');
$str = preg_replace('/\s/','',$first );


$sessionkey = $str;



$ch = curl_init();

curl_setopt_array($ch, array(
	CURLOPT_URL => "https://skyscanner-skyscanner-flight-search-v1.p.rapidapi.com/apiservices/pricing/uk2/v1.0/$sessionkey?pageIndex=0&pageSize=10",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => array(
		"x-rapidapi-host: skyscanner-skyscanner-flight-search-v1.p.rapidapi.com",
		"x-rapidapi-key: 611189d0e6msh7ff09e834e88ad7p19b062jsn50828695a48f"
	),
));

$responsefinal = curl_exec($ch);
$err = curl_error($ch);

curl_close($ch);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $responsefinal;
}
