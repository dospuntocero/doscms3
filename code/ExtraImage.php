<?php
class ExtraImage extends Image {

	static $has_one = array(
		'Page' => 'Page',
	);
  public static $default_sort = "Sorting ASC";



}