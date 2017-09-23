<?php
// Call the function which needs to be override in this file



// Overriding qa_send_notification
// If this function commented then the existing core email function will work

function qa_send_notification($userid, $email, $handle, $subject, $body, $subs, $html = false){

  require 'vendor/autoload.php';
  // use Mailgun\Mailgun;
  // use vendor\mailgun\mailgun-php\src\Mailgun\Mailgun;

  $mgClient = new \Mailgun\Mailgun('key-9b6f1c49e0388dd16d2cdb238a318cc1');
  $domain = "samples.mailgun.org";

  $result = $mgClient->sendMessage("$domain",
    array('from'    => 'ranjeetjain3@gmail.com',
          'to'      => 'ranjeetjain3@gmail.com',
          'subject' => 'Hello',
          'text'    => 'Testing some Mailgun awesomeness!'));

}
