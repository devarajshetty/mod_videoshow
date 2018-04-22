<?php
defined('_JEXEC') or die;
require_once dirname(__FILE__).'/helper.php';
$video_show=ModVideoShow::getvideo($params);
require JModuleHelper::getLayoutPath('mod_videoshow');

?>