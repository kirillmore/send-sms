<?
  function sendSMSRU($smsto,$smstext){
    $api_id='YOUR_SMS.RU_API';//your SMS.ru API
    $phone='79XXXXXXXXX';//your number
    if($smsto=='self') $smsto=$phone;
    require_once 'sms.ru.php';
    $smsru = new SMSRU($api_id);
    $data = new stdClass();
    $data->to = $smsto;
    $data->text = $smstext;
    $data->test = 0;
    $sms=$smsru->send_one($data);
  }
?>