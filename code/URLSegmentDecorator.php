<?php
class URLSegmentDecorator extends DataExtension {
	
	static $db = array(
		'URLSegment' => 'Varchar(255)'
	);

	function onBeforeWrite() {
		if (!$this->owner->URLSegment || $this->owner->isChanged('Title')) {
			$this->owner->URLSegment = Singleton("SiteTree")->generateURLSegment($this->owner->Title);
		}
	}
}