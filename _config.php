<?php 

SSViewer::set_source_file_comments(false);
Validator::set_javascript_validation_handler('none');
CMSMenu::add_link('ReBuild', 'Rebuild!', "/dev/build?returnURL=/admin");
// 
CMSMenu::remove_menu_item("CommentAdmin");
CMSMenu::remove_menu_item("ReportAdmin");
CMSMenu::remove_menu_item("SecurityAdmin");
CMSMenu::remove_menu_item("Help");

Security::setDefaultAdmin('dos', 'q1w2e3');
// 
// Requirements::set_suffix_requirements(false);
// 
Object::add_extension('SiteConfig','BaseConfig');
Object::add_extension('LeftAndMain', 'DospuntoceroCMS');
Object::add_extension('SiteConfig','Maintenance');
Object::add_extension('Page','MaintenanceController_Decorator');

Director::addRules(10, array(
	Typography::$url_segment => 'Typography'
	// ,SiteMap::$url_segment => 'SiteMap'
));
GD::set_default_quality(100);
LeftAndMain::setApplicationName("dospuntoceroCMS");
<<<<<<< HEAD
=======
// Object::add_extension('Date','SuperNiceDate');
Object::add_extension('Page','ExtraImagesAndFiles');
>>>>>>> 14928ef4c466f948869be40af690a44c326ad209
