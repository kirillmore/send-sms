# send-sms

How to use
----------
1. Get your API from http://sms.ru/
2. Edit _smsconfig.php
3. Use:
```
<?php
  include("_smsconfig.php");
  sendSMSRU('79XXXXXXXXX','message')
?>
```