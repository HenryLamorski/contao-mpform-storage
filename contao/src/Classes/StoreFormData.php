<?php
namespace Henrylamorski\mpformStorage\Classes;

class StoreFormData
{
    public function store($arrSubmitted, $arrLabels, $objForm, $arrFields)
    {
        if(!isset($_SESSION['mpform_storage']) || !is_array($_SESSION['mpform_storage']))
            $_SESSION['mpform_storage'] = array();
            
        $_SESSION['mpform_storage'][] = $arrSubmitted;
        return;
    }
}

