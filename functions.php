<?php

function add_registered_user($name, $email){
  file_put_contents('mailing_list.php', "$name: $email\n", FILE_APPEND);
}

function old($key){
  if (!empty($_REQUEST[$key])) {
    return htmlspecialchars($_REQUEST[$key]);
  }
}

function valid_email($email){
  return filter_var($email, FILTER_VALIDATE_EMAIL);
}

?>
