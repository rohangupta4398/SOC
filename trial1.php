<?php

function f($phone,$message){
  $fields = array(
      "sender_id" => "FSTSMS",
      "message" => $message,
      "language" => "english",
      "route" => "p",
      "numbers" => $phone,
      "flash" => "0"
  );

  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => json_encode($fields),
    CURLOPT_HTTPHEADER => array(
      "authorization: jqndgOi4etJlpAzQksmSB2YEbIMPfD7Fy36RU8oN9XCGuhLZTcDXlmbZiYurO5UQG26xyLjkp9zI8e4h",
      "accept: */*",
      "cache-control: no-cache",
      "content-type: application/json"
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

  // if ($err) {
  //   echo "cURL Error #:" . $err;
  // } else {
  //   echo $response;
  // }
}
// f('7427052933','try');
?>

