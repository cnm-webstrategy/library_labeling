<?php
//Base folder, if any. Leave blank if site is in root web folder.
$base_url = '';
$site_title = 'Labeling';
//Default page title
$page_title = 'Library Labeling';

/*
    * This variable defines the number of individual
    * labels on your sheet of two column label stock.
    *  This is here so you can prevent waste on partially
    * used label stock.
*/
$labelStartOptions = 12;

if (defined('WSKEY') === FALSE) {
    define('WSKEY', '');
}

if (defined('BIBKEY') === FALSE) {
    define('BIBKEY', '');
}

if (defined('SECRET') === FALSE) {
    define('SECRET', '');
}

if (isset($inst_id) === FALSE) {
    $inst_id = '';
}

if (defined('PRINCIPALID') === FALSE) {
    define('PRINCIPALID', '');
}

if (defined('PRINCIPALIDNS') === FALSE) {
    define('PRINCIPALIDNS', 'urn:oclc:wms:da');
}

if (defined('URL') === FALSE) {
    define('URL', 'https://circ.sd00.worldcat.org/LHR');
}

if (defined('BIBURL') === FALSE) {
    define('BIBURL', 'http://www.worldcat.org/webservices/catalog/content');
}

if (defined('METHOD') === FALSE) {
    define('METHOD', 'GET');
}

if (defined('BODYHASH') === FALSE) {
    define('BODYHASH', '');
}
