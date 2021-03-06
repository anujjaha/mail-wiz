<?php if ( ! defined('YII_PATH')) exit('No direct script access allowed');

/**
 * Html purifier configuration file
 * 
 * Please do not edit this file in any way.
 * Create common/config/htmlpurifier-custom.php and it will be merged with this file.
 * 
 * @package MailWizz EMA
 * @author Serban George Cristian <cristian.serban@mailwizz.com> 
 * @link http://www.mailwizz.com/
 * @copyright 2013-2015 MailWizz EMA (http://www.mailwizz.com)
 * @license http://www.mailwizz.com/license/
 * @since 1.0
 */

return array(

    // core related
    'Core.Encoding'             => Yii::app()->charset,
    'Core.EscapeInvalidTags'    => false,
    
    // uri related
    'URI.Base'              => null,
    'URI.AllowedSchemes'    => array(
        'http'      => true,
        'https'     => true,
        'mailto'    => true,
        'ftp'       => true,
        'ftps'      => true,
        'nntp'      => true,
        'news'      => true,
        'tel'       => true,
        'callto'    => true,
        '['         => true, // pretty weird this works...
    ),
    'URI.SafeIframeRegexp' => '%^(http:|https:)?//(www.youtube(?:-nocookie)?.com/embed/|player.vimeo.com/video/)%',
    
    // html related
    'HTML.Trusted'         => false, // true on own risk
    'HTML.SafeIframe'      => true,
    'HTML.DefinitionID'    => 'html-definitions',  
    'HTML.DefinitionRev'   => 7, // increment this when the init class is changed
    
    // attributes 
    'Attr.EnableID'             => true,
    'Attr.AllowedRel'           => array('noindex', 'nofollow'),
    'Attr.AllowedFrameTargets'  => array('_blank', '_self', '_parent', '_top'), 
    
    // css
    'CSS.AllowTricky'      => true,
    'CSS.AllowImportant'   => true,
    'CSS.Proprietary'      => true,    
    'CSS.Trusted'          => false, // true on own risk
);