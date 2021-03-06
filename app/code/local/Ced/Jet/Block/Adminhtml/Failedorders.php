<?php
/**
* CedCommerce
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* You can check the licence at this URL: http://cedcommerce.com/license-agreement.txt
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
*
* @category    Ced
* @package     Ced_Jet
* @author      CedCommerce Core Team <connect@cedcommerce.com>
* @copyright   Copyright CEDCOMMERCE (http://cedcommerce.com/)
* @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*/

class Ced_Jet_Block_Adminhtml_Failedorders extends Mage_Adminhtml_Block_Widget_Grid_Container
{
	public function __construct()
	{
		
		$this->_removeButton('add');
		$this->_controller = 'adminhtml_failedorders';
		$this->_blockGroup = 'jet';
		$this->_headerText = Mage::helper('jet')->__('Failed Jet Orders Import Log');
		
		$this->_addButton("Clear Failed Import Order Logs", array(
                    "label"     => Mage::helper("jet")->__("Clear Failed Import Order Logs"),
                    "onclick"   => "location.href = '".$this->getUrl('adminhtml/adminhtml_jetorder/clearall')."';",
                    "class"     => "btn btn-danger",
                )); 
		
		parent::__construct();
		$this->removeButton('add');
	}
}

