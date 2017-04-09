<?php

class duoWidget {


public function get_stats($user = null) {

  if (!$user) {
    return 0;
  }
  else {

      //get the user details from DL
      $duolingo_url = 'http://www.duolingo.com/users/'.$user;

      //  Initiate curl request for user data
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_URL,$duolingo_url);
      $result = curl_exec($ch);
      curl_close($ch);

      //store returned JSON in a variable
      $json_result = json_decode($result, true);

      if ($json_result == NULL) {
        return FALSE;
      }
      else if (isset($_GET['debug'])) {
        return $json_result;
      }
      else {
        return $this->format_raw_data($json_result);
      }

  }

}

private function format_raw_data($data) {

  //Pull out the variables we need from the data returned from DuoLingo
  $lang_ident = $data['learning_language'];

  $profile['username'] = $data['username'];
  $profile['bio'] = $data['bio'];
  $profile['avatar'] = $data['avatar'];
  $profile['learning'] = $data['learning_language_string'];
  $profile['level'] = $data['language_data'][$lang_ident]['level'];
  $profile['streak'] = $data['site_streak'];
  $profile['followers'] = $data['num_followers'];

  //last exercised
  $calendar = array_reverse($data['calendar']);
  $profile['last_practice'] = date('d M Y H:i:s', $calendar['0']['datetime'] / 1000);

  return $profile;

}


}

?>
