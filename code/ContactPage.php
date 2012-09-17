<?php
/* *****************
 * Model
 ******************/
class ContactPage extends Page
{

	static $icon = "dospuntoceroCMS/images/email.png";    
	static $description = 'Contact form';
    
	static $db = array(
		'Mailto' => 'Varchar(100)', //Email address where submissions will go
		'SubmitText' => 'HTMLText' //Text presented OnAfterSubmit
	);

    /**
     * We only admit one
     */
    function canCreate($member = null) {
    	if(ContactPage::get()->Count()>1) {
    		return false;
    	} else {
      		return true;
    	}
    }
	
	//CMS fields
	function getCMSFields() {
		
		$fields = parent::getCMSFields();
				
		$fields->addFieldToTab("Root.Main", new TextField('Mailto', _t('ContactPage.EMAILSUBMISSIONSTO',"Email submissions to")),"Content");
		$fields->addFieldToTab("Root.Main", $submittext = new HTMLEditorField('SubmitText', _t('ContactPage.THANKYOUTEXT',"Thank you text"),10),"Content");
		$submittext->setRows(5);
	
		return $fields;	
	}

}

/******************
 *  Controller
 ******************/

class ContactPage_Controller extends ContactForm_Controller
{
	
}