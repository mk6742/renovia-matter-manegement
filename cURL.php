<?php
class cURLClass
{

	// ----- FileMaker Login ------------------------------------------
	function login($URL, $DB, $AUTH)
	{

		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => $URL . "/fmi/data/vLatest/databases/" . $DB . "/sessions",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_HTTPHEADER => array(
				"authorization: basic " . $AUTH,
				"cache-control: no-cache",

				"content-type: application/json",
				"content-length: 0"
			),
		));

		$response = json_decode(curl_exec($curl), true);
		curl_close($curl);

		$TOKEN    = $response['response']['token'];

		return $TOKEN;
	} // FileMaker Login Function -------------------------------------

	// ----- FileMaker Logout ----------------------------------------- 
	function logout($URL, $DB, $TOKEN)
	{

		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => $URL . "/fmi/data/vLatest/databases/" . $DB . "/sessions/" . $TOKEN,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "DELETE",
			CURLOPT_HTTPHEADER => array(
				"cache-control: no-cache",
				"content-type: application/json"
			),
		));

		$response = curl_exec($curl);
		curl_close($curl);

		return $response;
	} // FileMaker Logout Function ------------------------------------

	// ----- FileMaker Get Records -------------------------------------
	function getrecords($URL, $DB, $LAYOUT, $TOKEN, $limit = 100, $offset = 0)
	{
		$LAYOUT = urlencode($LAYOUT);
		$url = "$URL/fmi/data/vLatest/databases/$DB/layouts/$LAYOUT/records?_limit=$limit&_offset=$offset";

		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => $url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_HTTPHEADER => array(
				"authorization: bearer $TOKEN",
				"content-type: application/json"
			),
		));

		$response = json_decode(curl_exec($curl), true);
		curl_close($curl);

		return $response;
	} // FileMaker Get Record Function --------------------------------

	// ----- FileMaker Script ----------------------------------------------
	function script($URL, $DB, $LAYOUT, $TOKEN, $SCRIPT, $SCRIPTPARAM)
	{

		$LAYOUT = urlencode($LAYOUT);
		$SCRIPT = urlencode($SCRIPT);

		if (!empty($SCRIPTPARAM)) {
			$SCRIPT .= '?script.param=' . urlencode($SCRIPTPARAM);
		}

		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => $URL . "/fmi/data/vLatest/databases/" . $DB . "/layouts/" . $LAYOUT . "/script/" . $SCRIPT,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"authorization: bearer " . $TOKEN,
				"cache-control: no-cache",
				"content-type: application/json"
			),
		));

		$response = json_decode(curl_exec($curl), true);
		curl_close($curl);

		return $response;
	} // FileMaker Script Function -----------------------------------------


	// ----- FileMaker Find Record ------------------------------------
	function find($URL, $DB, $LAYOUT, $TOKEN, $POSTFIELDS)
	{

		$LAYOUT = urlencode($LAYOUT);

		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => $URL . "/fmi/data/vLatest/databases/" . $DB . "/layouts/" . $LAYOUT . "/_find",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => $POSTFIELDS,
			CURLOPT_HTTPHEADER => array(
				"authorization: bearer " . $TOKEN,
				"cache-control: no-cache",
				"content-type: application/json"
			),
		));

		$response = json_decode(curl_exec($curl), true);
		curl_close($curl);

		return $response;
	} // FileMaker Find Record Function ------------------------------------

	// ----- FileMaker Create Record --------------------------------
	function createRecord($URL, $DB, $LAYOUT, $TOKEN, $POSTFIELDS)
	{
		$LAYOUT = urlencode($LAYOUT);

		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => $URL . "/fmi/data/vLatest/databases/" . $DB . "/layouts/" . $LAYOUT . "/records",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => $POSTFIELDS,
			CURLOPT_HTTPHEADER => array(
				"authorization: bearer " . $TOKEN,
				"cache-control: no-cache",
				"content-type: application/json"
			),
		));

		$response = json_decode(curl_exec($curl), true);
		curl_close($curl);

		return $response;
	}

	// ----- FileMaker Get Record By Id --------------------------------
	public function getRecordById($URL, $DB, $LAYOUT, $TOKEN, $recordId)
	{
		$LAYOUT = urlencode($LAYOUT);
		$recordId = urlencode($recordId);

		$url = "{$URL}/fmi/data/vLatest/databases/{$DB}/layouts/{$LAYOUT}/records/{$recordId}";

		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => $url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"authorization: bearer {$TOKEN}",
				"cache-control: no-cache",
				"content-type: application/json"
			),
		));

		$response = json_decode(curl_exec($curl), true);
		curl_close($curl);

		return $response;
	}

	// ----- FileMaker Edit Record By Id --------------------------------
	public function edit($URL, $DB, $LAYOUT, $recordId, $TOKEN, $postFields)
	{
		$LAYOUT = urlencode($LAYOUT);
		$recordId = urlencode($recordId);

		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => "$URL/fmi/data/vLatest/databases/$DB/layouts/$LAYOUT/records/$recordId",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 10,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'PATCH',
			CURLOPT_POSTFIELDS => $postFields,
			CURLOPT_HTTPHEADER => array(
				"Content-Type: application/json",
				"Authorization: Bearer $TOKEN"
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);
		curl_close($curl);

		if ($err) {
			return ['error' => true, 'message' => $err];
		}

		return json_decode($response, true);
	}

	// ----- FileMaker Valid Token --------------------------------
	public function isTokenValid($URL, $DB, $token)
	{
		$url = "$URL/fmi/data/vLatest/databases/$DB/layouts";
		$headers = [
			"Authorization: Bearer $token"
		];
		$response = $this->get($url, $headers); // GETリクエスト送る関数
		return isset($response['response']) && !isset($response['messages'][0]['code']);
	}

	// ----- FileMaker get -----------------------------------------
	public function get($url, $headers = [])
	{
		$ch = curl_init($url);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$response = curl_exec($ch);
		$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		$err = curl_error($ch);

		curl_close($ch);

		if ($httpCode >= 200 && $httpCode < 300) {
			return json_decode($response, true);
		} else {
			return [
				'error' => true,
				'message' => $err ?: 'HTTP Error ' . $httpCode,
				'http_code' => $httpCode,
				'raw_response' => $response
			];
		}
	}
}
