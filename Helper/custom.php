<?php
/**
 * CustomHelper class for HopelessArt- theme
 * 
 * @package helpers
 */
class CustomHelper extends AppHelper {

/**
 * Instance of View
 * 
 * @var View
 * @access public
 */
	var $View = null;

/**
 * Array of available social networks
 * 
 * @var array
 * @access public
 */
	var $_social_icons = array(
		'twitter',
		'rss',
		'delicious',
		'designbump',
		'designfloat',
		'digg',
		'dzone',
		'email',
		'stumbleupon',
		'technorati'
	);

/**
 * Constructor
 * 
 * @access public
 * @return void
 */
	function CustomHelper() {
		$this->View =& ClassRegistry::getObject('view');
	}

/**
 * Method to display social-bookmarks
 * 
 * @param string $type - Type of social-bookmark
 * @param string $link - Link to you social bookmark site
 * 
 * @access public
 * @return string social-bookmark HTML element
 */
	function socialBookmark($type, $link) {
		$output = '';
		if (in_array($type, $this->_social_icons)) {
			$output = $this->View->element('socialicon', array('type' => $type, 'link' => $link));
		}
		return $output;
	}
}
?>