<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
* This file contains the default settings for Learns for command action
* Do not edit this file as it may change in future revisions of the software.
* You can use config array in your config to update all this part
* @package configuration
*/


$config = array();

/* Loaded in core/ConsoleApplication : then webroot is set */
$config['rootdir']                  = (string) Yii::getPathOfAlias('webroot');

$config['publicdir']                = $config['rootdir'];
$config['homedir']                  = $config['rootdir'];
$config['configdir']                = $config['rootdir'].DIRECTORY_SEPARATOR.'application'.DIRECTORY_SEPARATOR.'config';
$config['tempdir']                  = $config['rootdir'].DIRECTORY_SEPARATOR."tmp";
$config['imagedir']                 = $config['rootdir'].DIRECTORY_SEPARATOR."assets".DIRECTORY_SEPARATOR."images";
$config['uploaddir']                = $config['rootdir'].DIRECTORY_SEPARATOR."upload";
$config['standardthemerootdir']     = $config['rootdir'].DIRECTORY_SEPARATOR."themes".DIRECTORY_SEPARATOR."survey";
$config['publicstylepath']          = $config['rootdir'].DIRECTORY_SEPARATOR.'assets'.DIRECTORY_SEPARATOR.'styles-public';
$config['corequestionthemedir']     = "themes".DIRECTORY_SEPARATOR."question";
$config['corequestionthemerootdir'] = $config['rootdir'].DIRECTORY_SEPARATOR.$config['corequestionthemedir'];
$config['styledir']                 = $config['rootdir'].DIRECTORY_SEPARATOR.'themes'.DIRECTORY_SEPARATOR.'admin';
$config['questiontypedir']          = $config['rootdir'].DIRECTORY_SEPARATOR.'application'.DIRECTORY_SEPARATOR.'extensions'.DIRECTORY_SEPARATOR.'questionTypes';
$config['userthemerootdir']         = $config['uploaddir'].DIRECTORY_SEPARATOR."themes".DIRECTORY_SEPARATOR."survey";
$config['customquestionthemedir']     = "themes".DIRECTORY_SEPARATOR."question";
$config['userquestionthemerootdir'] = $config['uploaddir'].DIRECTORY_SEPARATOR.$config['customquestionthemedir'];

return $config;
