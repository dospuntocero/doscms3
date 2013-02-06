<?php

class BaseConfig extends DataExtension {

  function extraStatics($class = null, $extension = null) {
    return array(
      'db' => array(
        'GACode' => 'Varchar(16)',
        'FacebookURL' => 'Varchar(256)', // multitude of ways to link to Facebook accounts, best to leave it open.
        'TwitterUsername' => 'Varchar(16)', // max length of Twitter username 15
        'FooterLogoDescription' => 'Varchar(255)'
      ),
      'has_one' => array(
        'Logo' => 'Image',
        'FooterLogo' => 'Image'
      )
    );
  }

  function updateCMSFields(FieldList $fields) {
	$fields->removeByName("Theme");
    $fields->addFieldToTab('Root.Main', $gaCode = new TextField('GACode', 'Google Analytics account'));
    $gaCode->setRightTitle(_t('BaseConfig.ACCOUNTNUMBER',"Account number to be used all across the site (in the format <strong>UA-XXXXX-X</strong>)"));

    $fields->addFieldToTab('Root.Main', $facebookURL = new TextField('FacebookURL', 'Facebook UID or username'));
    $facebookURL->setRightTitle(_t('BaseConfig.FACEBOOKLINK','Facebook link (everything after the "http://facebook.com/", eg http://facebook.com/<strong>username</strong> or http://facebook.com/<strong>pages/108510539573</strong>)'));

    $fields->addFieldToTab('Root.Main', $twitterUsername = new TextField('TwitterUsername', 'Twitter username'));
    $twitterUsername->setRightTitle(_t('BaseConfig.TWITTERUSER',"Twitter username (eg, http://twitter.com/<strong>username</strong>)"));

  }
}