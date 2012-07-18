<?php

/**
 * Spanish (Spain) language pack
 * @package cms
 * @subpackage i18n
 */

i18n::include_locale_file('cms', 'en_US');

global $lang;

if(array_key_exists('es_ES', $lang) && is_array($lang['es_ES'])) {
	$lang['es_ES'] = array_merge($lang['en_US'], $lang['es_ES']);
} else {
	$lang['es_ES'] = $lang['en_US'];
}

$lang['es_ES']['Paginate']['NEXT'] = 'Siguiente';
$lang['es_ES']['Paginate']['PREVIOUS'] = 'Previo';
$lang['es_ES']['AssetAdmin_left.ss']['GO'] = 'Crear';
$lang['es_ES']['CMSLeft.ss']['GO'] = 'Crear';
$lang['es_ES']['CMSMain']['GO'] = 'Crear';
// Output for class or file: Page
$lang['es_ES']['Page']['CATEGORYHOWMANY'] = '¿Cuántos hijos se mostrarán al mismo tiempo?';
$lang['es_ES']['Page']['SELECTHOWMANY'] = '= Seleccionar cuantos =';
$lang['es_ES']['Page']['FILESTAB'] = 'Archivos';
$lang['es_ES']['Page']['LAYOUTTAB'] = 'Estructura';

$lang['es_ES']['FileDataObjectManager']['GRIDVIEW'] = 'Vista de grilla';
$lang['es_ES']['FileDataObjectManager']['LISTVIEW'] = 'Vista en lista';
$lang['es_ES']['FileDataObjectManager']['SWFUPLOAD'] = 'DataObjectManager requiere el modulo SWFUpload.';
$lang['es_ES']['AssetManager']['ADDFILESTO'] = 'Archivos a "%s"';


$lang['es_ES']['SiteTree']['PARENTTYPE_ROOT'] = 'Página de nivel superior';
$lang['es_ES']['SiteTree']['PARENTTYPE_SUBPAGE'] = 'Sub página bajo el siguiente hijo (seleccionar de la lista a continuación)';
$lang['es_ES']['ContentController']['PUBLISHEDSITE'] = 'Sitio Publicado';
$lang['es_ES']['ContentController']['DRAFTSITE'] = 'Sitio Borrador';
$lang['es_ES']['AssetAdmin_left.ss']['FILESYSTEMSYNC'] = 'Buscar archivos';
$lang['es_ES']['LeftAndMain.ss']['SSWEB'] = 'Sitio web de dospuntocero';

$lang['es_ES']['PageExtension']['MAINPHOTO'] = 'Foto principal';
$lang['es_ES']['PageExtension']['EXTRAPHOTOS'] = 'Fotos adicionales. (Se generará una mini galería con estas fotos)';

$lang['es_ES']['DospuntoceroCMSCore']['GMAPSAPIKEYTITLE'] = 'Llave de acceso a google maps';
$lang['es_ES']['DospuntoceroCMSCore']['GMAPSAPIKEY'] = 'La llave de acceso a google maps es requerida si tu sitio utiliza mapas. <a target=\'_blank\' href=\'http:\/\/code.google.com/intl/es/apis/maps/signup.html\'>obtén la tuya acá</a>';
$lang['es_ES']['DospuntoceroCMSCore']['GANALITYCSAPIKEYTITLE'] = 'Llave de acceso a google analitycs';
$lang['es_ES']['DospuntoceroCMSCore']['GANALITYCSAPIKEY'] = 'La llave de acceso a google analitycs es requerida para tener información de quien ingresa al sitio';


$lang['es_ES']['VCard']['CELLPHONE'] = 'Teléfono';
$lang['es_ES']['VCard']['EMAIL'] = 'Email';
$lang['es_ES']['VCard']['PHONEWORK'] = 'Teléfono';
$lang['es_ES']['VCard']['WORK'] = 'Dirección';
