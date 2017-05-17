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


class Ced_Jet_Block_Adminhtml_Jetcategory_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
 
  public function __construct()
  {
      parent::__construct();
      $this->setId('form_tabs');
      $this->setDestElementId('edit_form'); // this should be same as the form id define above
      $this->setTitle(Mage::helper('jet')->__('Product Information'));
  }
 
  protected function _beforeToHtml()
  {
      $this->addTab('form_section1', array(
          'label'     => Mage::helper('jet')->__('Product Information'),
          'title'     => Mage::helper('jet')->__('Product Information'),
          'content'   => $this->getLayout()->createBlock('jet/adminhtml_prod_edit_tab_prodform')->toHtml(),
      ));
      $this->addTab('form_section2', array(
          'label'     => Mage::helper('jet')->__('Shipping Exception'),
          'title'     => Mage::helper('jet')->__('Shipping Exception'),
          'content'   => $this->getLayout()->createBlock('jet/adminhtml_prod_edit_tab_shippingform')->toHtml(),
      ));
      return parent::_beforeToHtml();
  }
}