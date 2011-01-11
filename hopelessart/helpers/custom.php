<?php

class CustomHelper extends AppHelper {

	var $View = null;

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

	function CustomHelper() {
		$this->View =& ClassRegistry::getObject('view');
	}

	function socialBookmark($type, $link) {
		$output = '';
		if (in_array($type, $this->_social_icons)) {
			$output = $this->View->element('socialicon', array('type' => $type, 'link' => $link));
		}
		return $output;
	}
}
?>