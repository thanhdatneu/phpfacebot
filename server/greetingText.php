<?php

require_once(dirname( __FILE__ ) . '/environments.php');
require_once(dirname( __FILE__ ) . '/../CustomPayload.php');
require_once(dirname( __FILE__ ) . '/../FBMessengerProfile.php');
require_once(dirname( __FILE__ ) . '/../Config.php');

$result = FBMessengerProfile::greetingText('Hi {{user_first_name}}! Welcome to '.BOT_NAME.'.');

print_r($result);
