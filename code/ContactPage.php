<?php
/* *****************
 * Model
 ******************/
class ContactPage extends Page
{

	static $icon = "doscms3/images/email.png";    
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
		$contactTab = _t('ContactPage.CONTACT',"Contact");
		$fields = parent::getCMSFields();
		$fields->addFieldToTab("Root.".$contactTab, new TextField('Mailto', _t('ContactPage.EMAILSUBMISSIONSTO',"Email submissions to")));
		$fields->addFieldToTab("Root.".$contactTab, $submittext = new HTMLEditorField('SubmitText', _t('ContactPage.THANKYOUTEXT',"Thank you text"),10));
		return $fields;	
	}
}

/******************
 *  Controller
 ******************/

class ContactPage_Controller extends Page_Controller{
	
		function init() {
		parent::init();
		Requirements::css("mysite/css/Form.css");
		Requirements::javascript("mysite/javascript/thirdparty/jquery.js");
		Requirements::javascript("mysite/javascript/thirdparty/jquery-validate/jquery.validate.pack.js");
		Requirements::javascript("mysite/javascript/thirdparty/jquery-validate/localization/messages_es.js");
	
		Requirements::customScript('
		jQuery(document).ready(function() {
			jQuery("#Form_ContactForm").validate({
				rules: {
					Name: "required",
					Email: {
						required: true,
							email: true
							},
						Comments: {
							required: true,
								minlength: 20
							}
						},
						messages: {
						Name: "'._t("ContactPage.NAME","We need your name").'",
						Email: "'._t("ContactPage.EMAIL","Without your real email address, we can't reach you").'",
						Comments: "'._t("ContactPage.COMMENTS","What are you thinking? Tell me").'"
					}
				});
			});
		');
	}
	
	function ContactForm() {
	// Create fields
		$fields = new FieldList(
			TextField::create('Name')->setTitle(_t('ContactPage.NAMEINPUT',"Name <em>*</em>")),
			TextField::create("Cellphone")->setTitle(_t('ContactPage.CELLPHONE',"Cellphone")),
			EmailField::create("Email")->setTitle(_t('ContactPage.EMAIL',"Email address"))->setAttribute('type', 'email'),
      TextareaField::create("Comments")->setTitle(_t('ContactPage.COMMENTSINPUT',"Comments <em>*</em>"))

		);

		// Create action
		$send = new FormAction('SendContactForm', _t('ContactPage.SEND',"Send"));
		$send->addExtraClass("success btn");

		$actions = new FieldList(
			$send
		);
	// Create action
		$validator = new RequiredFields('Name', 'Email', 'Comments');
		return new Form($this, 'ContactForm', $fields, $actions, $validator);
	}
 
	function SendContactForm($data) {

		$cp = DataObject::get_one("ContactPage");

		//Set data
		$From = $data['Email'];
		$To = $cp->Mailto;
		$Subject = _t('ContactPage.WEBSITECONTACTMESSAGE',"Website Contact message");
		$email = new Email($From, $To, $Subject);
		//set template
		$email->setTemplate('ContactEmail');
		//populate template
		$email->populateTemplate($data);
		//send mail
		if ($email->send()) {
			Controller::curr()->redirect(Director::baseURL(). $this->URLSegment . "/success");
		}else{
			Controller::curr()->redirect(Director::baseURL(). $this->URLSegment . "/error");
		}
	}


	public function error(){
		return $this->httpError(500);
	}


	public function success(){
		$renderedContent = $this->renderWith('Page', array('Content' => $this->SubmitText));
		return $renderedContent;
	}
}