<?php
/*
Plugin Name: The Whole Post 
Plugin URI: http://patchlog.com/wordpress/the-whole-post
Description: Use this plugin if you want the "read more" link to load a page with everything from the top displayed including the header of the weblog.  Useful when you have ads at the top of your post.
Version: 1.0
Author: Mihai Secasiu
Author URI: http://patchlog.com


License:
 ==============================================================================
 Copyright 2007 Mihai Secasiu  (http://patchlog.com/)

 This program is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with this program; if not, write to the Free Software
 Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

*/
function remove_more_anchor($content='')
{
	$content=preg_replace('/#more-(\d+)/','',$content);
	return $content;
}
add_filter("the_content","remove_more_anchor");

if(!class_exists('Patchlog_Plugin_Admin')){
	require_once('patchlog_plugin_tools.php');
}
$twp_pa = new Patchlog_Plugin_Admin(false);
$twp_pa->hook='the-whole-post';
$twp_pa->share_link='http://patchlog.com/wordpress/the-whole-post/';
$twp_pa->share_title='The Whole Post Plugin';
$twp_pa->share_excerpt="Show the whole post when clicking the \"more\" link";
$twp_pa->share_sites=array('Twitter','FriendFeed','Identi.ca',
			'Sphinn','StumbleUpon','Digg','Reddit',
			'del.icio.us','Technorati','Google',
			'Yahoo! Bookmarks');
$twp_pa->shortname='The Whole Post';
$twp_pa->filename='the-whole-post/the-whole-post.php';
?>
