/**
 * This file is part of the MailWizz EMA application.
 * 
 * @package MailWizz EMA
 * @author Serban George Cristian <cristian.serban@mailwizz.com> 
 * @link http://www.mailwizz.com/
 * @copyright 2013-2015 MailWizz EMA (http://www.mailwizz.com)
 * @license http://www.mailwizz.com/license/
 * @since 1.3.5
 */
jQuery(document).ready(function($){

    $(document).on('click', 'a.copy-server, a.enable-server, a.disable-server', function() {
		$.post($(this).attr('href'), ajaxData, function(){
			window.location.reload();
		});
		return false;
	});
});