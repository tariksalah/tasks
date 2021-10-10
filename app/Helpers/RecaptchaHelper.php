<?php

namespace App\Helpers;
use GuzzleHttp\Client;

class RecaptchaHelper
{

  public static function verify($recaptchValue)
  {
      $client = new Client;
      $response = $client->post(
          'https://www.google.com/recaptcha/api/siteverify',
          [
              'form_params' =>
                  [
                      'secret' => '6LerlX4aAAAAAMjip-0WNuddtxxQBbIxdiqhePNM',
                      'response' => $recaptchValue
                  ]
          ]
      );
      $body = json_decode((string)$response->getBody());
      return $body->success;
  }

	// public static function verify($recaptchValue)
	// {
  //       $url = 'https://www.google.com/recaptcha/api/siteverify';
  //       $data = [
  //         'secret' => '6Lep5dkZAAAAAH46tTBoIY7oK7YiBCShI3dwmfQm',
  //         'response' => $recaptchValue,
  //       ];
  //
  //       $options = [
  //         'http' => [
  //           'header' => 'Content-type: application/x-www-form-urlencoded\r\n',
  //           'method' => 'post',
  //           'content' => http_build_query($data),
  //         ]
  //       ];
  //
  //       $context = stream_context_create($options);
  //       $result = file_get_contents( $url , false , $context);
  //       $resultJson = json_decode($result);
  //
  //       return $resultJson->success;
	// }

}
