<?php



require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');

$configuration = ProjectConfiguration::getApplicationConfiguration('frontend', 'prod', false);
sfContext::createInstance($configuration)->dispatch();


echo "<h1>Hello There i am from JENKINS</h1>";

echo "<h1>Hello There i am from JENKINS</h1>";

echo "<h1>Hello There i am from JENKINS</h1>";

echo "<h1>Hello There i am from JENKINS</h1>";

