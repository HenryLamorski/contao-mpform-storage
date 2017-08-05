<?php
namespace Henrylamorski\mpformStorage\Module
use Haste\Frontend\AbstractFrontendModule;

class StorageList extends AbstractFrontendModule
{
	
	protected $strTemplate = 'mod_storage_list';
	
	public function compile()
	{
		
		$this->Template->formdata = $_SESSION['mpform_storage'];
		
	}
	
	
}
