<?php
namespace Henrylamorski\mpformStorage\Module;
use Haste\Frontend\AbstractFrontendModule;

class StorageList extends AbstractFrontendModule
{
	protected $strTemplate = 'mod_storage_list';
	
	public function compile()
	{
		$this->Template->formdata = $_SESSION['mpform_storage'];
		$_SESSION['mpform_storage'] = array();
	}
	
	public function generate()
    {
        if ('BE' === TL_MODE && $this->showWildcard()) {
            return $this->generateWildcard();
        }
        return parent::generate();
    }
	
}
