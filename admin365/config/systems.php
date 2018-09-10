<?php


$settings = new Setting();
$Allsettings = $settings->AssignSetting($settings->getAllSettings());



// Store Information
define ('PORTAL_NAME', $Allsettings['portal_name']);
define ('PORTAL_PHONE', $Allsettings['portal_phone']);
define ('PORTAL_URL', $Allsettings['portal_url']);
define ('PORTAL_EMAIL', $Allsettings['portal_email']);
define ('PORTAL_address', $Allsettings['portal_address']);


