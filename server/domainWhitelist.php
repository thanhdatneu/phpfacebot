<?php

require_once(dirname( __FILE__ ) . '/environments.php');
require_once(dirname( __FILE__ ) . '/../CustomPayload.php');
require_once(dirname( __FILE__ ) . '/../FBMessengerProfile.php');
require_once(dirname( __FILE__ ) . '/../Config.php');

$result = FBMessengerProfile::domainWhitelist(array('https://'.HOSTNAME_WWW));

print_r($result);
