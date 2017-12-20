<?php

return array(
  "driver" => "smtp",
  "host" => "smtp.mailtrap.io",
  "port" => 2525,
  "from" => array(
      "address" => "from@example.com",
      "name" => "Example"
  ),
  "username" => "d67bc33a71585f",
  "password" => "ed399088026a96",
  "sendmail" => "/usr/sbin/sendmail -bs",
  "pretend" => false
);
