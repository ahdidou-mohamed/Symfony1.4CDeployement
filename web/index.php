<?php

echo "Hello There i am from GIT";

require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');

$configuration = ProjectConfiguration::getApplicationConfiguration('frontend', 'prod', false);
sfContext::createInstance($configuration)->dispatch();
