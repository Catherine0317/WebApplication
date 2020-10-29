<?php

global $config;

$configString = file_get_contents("sensitive-data.json");
$configObject = json_decode($configString, true);

$config['mySqlServername'] = $configObject['mySqlServername'];
$config['mySqlUsername'] = $configObject['mySqlUsername'];
$config['mySqlPassword'] = $configObject['mySqlPassword'];
$config['mySqlDbname'] = $configObject['mySqlDbname'];

?>