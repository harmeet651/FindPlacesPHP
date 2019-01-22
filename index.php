index.php
<?php
		if(isset($_GET['submit_form']))
		{
			$locTe = $_GET['locText'];
			$locTe = urlencode($locTe);
			$place_url = "https://maps.googleapis.com/maps/api/geocode/json?address=".$locTe."&key=AIzaSyAE7mCcIOhT0LQ1zm6zGW5lT4flVhBTPrc"; 
			$curl = curl_init($place_url);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			$curl_response = curl_exec($curl);
			echo $curl_response;

		}
	?>