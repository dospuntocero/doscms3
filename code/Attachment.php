<?php
class Attachment extends File {

	static $has_one = array(
		'Page' => 'Page',
	);

	public static $default_sort = "Sorting ASC";

}