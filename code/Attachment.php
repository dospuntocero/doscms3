<?php
class Attachment extends File {

	static $has_one = array(
		'Page' => 'Page',
	);

}