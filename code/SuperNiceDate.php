<?php 
class SuperNiceDate extends DataExtension {
	public function SuperNice() {
		switch (i18n::get_locale()) {
			case 'es_ES':
			setlocale(LC_ALL, 'es_ES');
			return $this->owner->FormatI18N("%d de %B de %Y");
			case 'en_US':
			return $this->owner->FormatI18N("%B %d, %Y");
			case 'de_DE':
			return $this->owner->FormatI18N("%d. %B %Y");
			default:
			return $this->owner->Nice();
		}
	}
}