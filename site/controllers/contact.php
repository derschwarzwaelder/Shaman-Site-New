<?php
return function($site, $pages, $page) {
  $alert = null;
  if(get('submit')) {
    $data = array(
      'name'  => get('name'),
      'vorname'  => get('vorname'),
      'telefon'  => get('telefon'),
      'email' => get('email'),
      'text'  => get('text')
    );
    $rules = array(
      'name'  => array('required', 'name'),
      'vorname'  => array('required', 'vorname'),
      'email' => array('required', 'email'),
      'text'  => array('required', 'min' => 3, 'max' => 3000),
    );
    $messages = array(
      'name'  => 'Bitte tragen Sie Ihren Nachnamen ein',
      'vorname' => 'Bitte tragen Sie Ihren Vornamen ein',
      'email' => 'Please enter a valid email address',
      'telefon' => 'Please enter a valid telefon Number',
      'text'  => 'Please enter a text between 3 and 3000 characters'
    );
    // some of the data is invalid
    if($invalid = invalid($data, $rules, $messages)) {
      $alert = $invalid;
    // the data is fine, let's send the email
    } else {
      // create the body from a simple snippet
      $body  = snippet('contactmail', $data, true);
      // build the email
      $email = email(array(
        'to'      => 'info@kallina.co',
        'from'    => 'info@kallina.co',
        'subject' => 'New contact request',
        'replyTo' => $data['email'],
        'body'    => $body
      ));
      // try to send it and redirect to the
      // thank you page if it worked
      if($email->send()) {
        go('kontakt/thank-you');
      // add the error to the alert list if it failed
      } else {
        $alert = array($email->error());
      }
    }
  }
  return compact('alert');
};