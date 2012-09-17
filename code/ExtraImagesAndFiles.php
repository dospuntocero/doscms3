<?php

class ExtraImagesAndFiles extends DataExtension {

	public static $has_one = array(
		"MainImage" => "Image",
	);

	static $has_many = array(
		'Attachments' => 'Attachment',
		"ExtraImages" => "ExtraImage",
	);

	public function updateCMSFields(FieldList $fields) {

		$ImagesAndFiles = _t('Page.IMAGESANDFILES',"Images and Files");

		$UploadField = new UploadField('MainImage', _t('Page.MAINIMAGE',"Main image"));
		$UploadField->getValidator()->setAllowedExtensions(array('jpg', 'jpeg', 'png', 'gif'));
		$UploadField->setConfig('allowedMaxFileNumber', 1);
		$UploadField->setFolderName("MainImages");

		$UploadField2 = new UploadField('Attachments', _t('Page.ATTACHMENTS',"Attachments"));
		$UploadField2->setFolderName("Attachments");

		$UploadField3 = new UploadField('ExtraImages', _t('Page.EXTRAIMAGES',"Extra Images"));
		$UploadField3->getValidator()->setAllowedExtensions(array('jpg', 'jpeg', 'png', 'gif'));
		$UploadField3->setFolderName("MainImages");

		$fields->addFieldToTab("Root.".$ImagesAndFiles, $UploadField);
		$fields->addFieldToTab("Root.".$ImagesAndFiles, $UploadField2);
		$fields->addFieldToTab("Root.".$ImagesAndFiles, $UploadField3);
	}

	function contentControllerInit(){
	}

}
