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
    'Henrylamorski\mpformStorage\Module\StorageList' => 'system/modules/contao-mpform-storage/src/Module/StorageList.php',
));

/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_storage_list'      => 'system/modules/contao-mpform-storage/templates',
	
));
