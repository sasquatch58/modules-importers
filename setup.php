<?php
if (!defined('W2P_BASE_DIR'))
{
  die('You should not access this file directly.');
}
/**
 * Name:        Project Importer
 * Directory:   importers
 * Version:     4.2
 * Type:        user
 * UI Name:     Project Importer
 * UI Icon:     ?
 */

$config = array();
$config['mod_name']        						= 'Project Importer';
$config['mod_version']     						= '4.2';
$config['mod_directory']   						= 'importers';               // the module path
$config['mod_setup_class'] 						= 'CSetupProjectImporter';   // the name of the setup class
$config['mod_type']        						= 'user';                    // 'core' for modules distributed with w2p itself, 'user' for addon modules
$config['mod_ui_name']	   						= $config['mod_name'];       // the name that is shown in the main menu of the User Interface
$config['mod_ui_icon']     						= 'projectimporter.png';     // name of a related icon
$config['mod_description'] 						= 'Import various XML formats';
$config['mod_main_class']  						= 'CImporter';
//$config['permissions_item_table'] = 'importers';
//$config['permissions_item_field'] = '';
//$config['permissions_item_label'] = '';
$config['requirements'] = array(
		array('require' => 'web2project',   'comparator' => '>=', 'version' => '3')
);

if (@$a == 'setup') {
	echo w2PshowModuleConfig( $config );
}

class CSetupProjectImporter {

	public function install() {
		$result = $this->_checkRequirements();
			if (!$result) {
			return false;
		}
		return parent::install();
	}
	
    public function configure() {
		return false;	
	}

    public function upgrade($old_version) {
        return false;
	}
	
	public function remove() {
		return parent::remove();
	}
}