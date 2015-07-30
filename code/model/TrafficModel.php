<?php

/**
 * BlockingModel
 *
 * @package silverstripe-blacklist
 * @license BSD License http://www.silverstripe.org/bsd-license
 * @author <andrewm@cyber-duck.co.uk>
 **/
class TrafficModel extends DataObject {

	private static $db = array(
		'ip' 	  => 'Varchar(255)',
		'host' 	  => 'Varchar(255)',
		'referer' => 'Varchar(255)'
		);
}

class TrafficAdmin extends ModelAdmin {

	private static $managed_models = array('TrafficModel');

	private static $url_segment = 'traffic';

	private static $menu_title = 'Traffic';

	private static $menu_icon = 'framework/admin/images/menu-icons/16x16/blog.png';

	private static $page_length = 100;

	private static $menu_priority = -0.1;
}