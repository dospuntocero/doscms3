<?php

class BaseConfig extends DataExtension {

	static $db = array(
		'SiteDescription' => 'HTMLText',
		"StreetAddress" => "Varchar(255)",
		"Locality" => "Varchar(125)",
		"Region" => "Varchar(125)",
		"PostalCode" => "Varchar(125)",
		"CountryName" => "Varchar(125)",
		"PhoneWork" => "Varchar(125)",
		"CellPhone" => "Varchar(125)",
		"Email" => "Varchar(125)",
		'GAnalitycsApiKey' => 'Varchar(255)',
		"FacebookURL" => 'Varchar(255)',
		"TwitterUser" => "Varchar(255)",
		"LinkedInURL" => 'Varchar(255)',
		"SlideshareURL" => "Varchar(255)",
		"YoutubeURL" => "Varchar(255)"
	);

	public function updateCMSFields(FieldList $fields) {
		
		$fields->removeByName('Theme');


		// $contactDetailsTab = _t('DospuntoceroCMSCore.CONTACTDETAILSTAB',"ContactDetails");			
		$APIKeysTab = _t('DospuntoceroCMSCore.APIKEYSTAB',"ApiKeys");			
		$editor = new HTMLEditorField('SiteDescription', _t('DospuntoceroCMSCore.SITEDESCRIPTION',"SiteDescription"));
		$editor->setRows(5);

		// $fields->addFieldsToTab('Root.'.$contactDetailsTab, array(
		$fields->addFieldsToTab('Root.Main', array(
			new TextField('GAnalitycsApiKey',_t('DospuntoceroCMSCore.GANALITYCSAPIKEY',"Google Analitycs api key is needed for website tracking")),
			$editor
		));
	$fields->addFieldsToTab('Root.Location', array(
		new TextField('StreetAddress',_t('BaseConfig.STREETADDRESS',"Street Address")),
		new TextField('Locality',_t('BaseConfig.LOCALITY',"Locality")),
		new TextField('Region',_t('BaseConfig.REGION',"Region")),
		new TextField('PostalCode',_t('BaseConfig.POSTALCODE',"Postal Code")),
		new TextField('CountryName',_t('BaseConfig.COUNTRYNAME',"Country Name")),
		new TextField('PhoneWork',_t('BaseConfig.PHONEWORK',"Phone Work")),
		new TextField('CellPhone',_t('BaseConfig.CELLPHONE',"Cellphone")),
		new TextField('Email',_t('BaseConfig.EMAIL',"Email"))
	));
	$fields->addFieldsToTab('Root.Social', array(
		new TextField('FacebookURL',_t('BaseConfig.FACEBOOKURL',"Facebook URL")),
		new TextField('TwitterUser',_t('BaseConfig.TWITTERUSER',"Twitter user")),
		new TextField('LinkedInURL',_t('BaseConfig.LINKEDINURL',"LinkedIn URL")),
		new TextField('SlideshareURL',_t('BaseConfig.SLIDESHAREURL',"Slideshare URL")),
		new TextField('YoutubeURL',_t('BaseConfig.YOUTUBEURL',"Youtube URL")),
	));

	}
}