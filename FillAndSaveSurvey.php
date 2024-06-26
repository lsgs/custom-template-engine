<?php
/**
 * REDCap External Module: Custom Template Engine
 * @author Luke Stevens lukestevens@hotmail.com https://github.com/lsgs/ 
 * This page is "noauth" for survey use
 */
if (is_null($module) || !($module instanceof BCCHR\CustomTemplateEngine\CustomTemplateEngine)) { exit(); }
header("Content-Type: application/json");
echo \json_encode($module->fillAndSaveSurvey());