<?php
    $to = "foxydog520@gmail.com";
    $from = $_REQUEST['name'];
    $headers = "Content-type: text/html;From: $from";
    


    $fields = array();
    $fields["name"] = $_REQUEST['name'];
    $fields["email"] = $_REQUEST['email'];
    $fields["message"] = $_REQUEST['message'];

    $body = "Here is what was sent:\n\n";
    $body .= 'Name : '.$fields['name']. '<br>';
    $body .= 'Email : '.$fields['email']. '<br>';
    $body .= 'Message : '.$fields['message']. '<br>';

    // $send = mail($to, $body, $headers);
    if(mail("$to", "$body", "$headers")):
   echo "Your Message was sent successfully.";//寄信成功就會顯示的提示訊息
  else:
   echo "Your Message was not sent successfully!";//寄信失敗顯示的錯誤訊息
  endif;
    
    
    
?>
