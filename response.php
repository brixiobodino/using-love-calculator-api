<?php
	function sanitize_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	if (isset($_POST["submit"])) {
		$fname=sanitize_input($_POST['fname']);
		$sname=sanitize_input($_POST['sname']);
		$RapidAPIKey="your rapid api key";
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => "https://love-calculator.p.rapidapi.com/getPercentage?fname=".$fname."&sname=".$sname,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_HTTPHEADER => array(
			"x-rapidapi-host: love-calculator.p.rapidapi.com",
			"x-rapidapi-key:".$RapidAPIKey
		),
		));
		$response = curl_exec($curl);
		$err = curl_error($curl);
		curl_close($curl);
		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			$obj = json_decode($response);
		?>
		<div class="love_response">
		<?php
			if ($obj->percentage<50) {
				echo "<i class='fas fa-heart-broken'></i>";
			}else{
				echo "<i class='fas fa-heart'></i>";
			}
			echo "<h1 class='field_name'> " . $obj->fname . " & " .$obj->sname. "</h1>"; 
			echo "<br>";
			echo "<h2> Love Percentage : " . $obj->percentage . "</h2>";
			echo "<br>";
			echo "<h2> Result : " . "<span class='love_result'>" . $obj->result . "</span> ". "</h2>";
		}
		}
?>
</div>