<?php 


$curlurl = curl_init();

curl_setopt_array($curlurl, array(
	CURLOPT_URL => "https://tripadvisor1.p.rapidapi.com/flights/get-booking-url?searchHash=c200f245badfb764e8dc175dc0eb1ce7&Dest=MXP&id=Travelgenio|1|10&Orig=FCO&searchId=98e51775-f561-4607-af71-f5b9332e8514.192",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => array(
		"x-rapidapi-host: tripadvisor1.p.rapidapi.com",
		"x-rapidapi-key: 611189d0e6msh7ff09e834e88ad7p19b062jsn50828695a48f"
	),
));

$bookingurl = curl_exec($curlurl);


curl_close($curlurl);


$urljson = json_decode($bookingurl, TRUE);
$finalurl = $urljson['partner_url'];
echo $finalurl;


?>