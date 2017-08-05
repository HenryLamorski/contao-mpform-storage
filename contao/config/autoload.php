<?php

ClassLoader::addNamespaces(array
(
	'Henrylamorski',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
    'Henrylamorski\mpformStorage\Classes\StoreFormData' => 'system/modules/contao-mpform-storage/src/Classes/StoreFormData.php',
    'Henrylamorski\mpformStorage\Modules\StorageList' => 'system/modules/contao-mpform-storage/src/Modules/StorageList.php',
));

/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_mpformdata'      => 'system/modules/contao-mpform-storage/templates',
	
));
