<?php

/**
 * Content elements
 */
$GLOBALS['FE_MOD']['henrylamorski'] = array
(
    'hl_liststorage'	=> 'Henrylamorski\mpformStorage\Module\StorageList',
);


/**
 * HOOKs
 */
 $GLOBALS['TL_HOOKS']['prepareFormData'][] = array('Henrylamorski\mpformStorage\Classes\StoreFormData','store');
