<?php

class ExtraImagesAndFiles extends DataExtension {

	static $has_many = array(
		"Images" => "ExtraImage",
		'Attachments' => 'Attachment'
	);

	function getMainImage(){
		$Image = $this->owner->Images();
		if ($Image->First()) {
			return $Image->First();
		} else {
			return null;
		}
	}

	function getExtraImages(){
		$Image = $this->owner->Images();
		$set = new ArrayList();
		$c=1;
		if($Image){
			foreach($Image as $item){
				if($c>1){
					$set->push($item);
				}
				$c++;
			}
			return $set;
		}
		return null;
	}

	public function updateCMSFields(FieldList $fields) {

		$ImagesAndFiles = _t('Page.IMAGESANDFILES',"Images and Files");


		$UploadField2 = new SortableUploadField('Attachments', _t('Page.ATTACHMENTS',"Attachments"));
		$UploadField2->setFolderName("Attachments");

		$UploadField3 = new SortableUploadField('Images', _t('Page.IMAGES',"Images"));

		$UploadField3->getValidator()->setAllowedExtensions(array('jpg', 'jpeg', 'png', 'gif'));
		$UploadField3->setFolderName("Images");

		$fields->addFieldToTab("Root.".$ImagesAndFiles, $UploadField3);
		$fields->addFieldToTab("Root.".$ImagesAndFiles, $UploadField2);
	}

}
