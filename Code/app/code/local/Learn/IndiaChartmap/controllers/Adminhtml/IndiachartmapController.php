<?php
class  Learn_IndiaChartmap_Adminhtml_IndiachartmapController extends Mage_Adminhtml_Controller_Action
{
	public function indexAction() {	
		$this->__forward('map');
	}
	
	public function mapAction() {
		
        
		$this->_title($this->__('India Chart Map'))->_title($this->__('India Chart Map'));
		
		$this->loadLayout();
		$this->_setActiveMenu('indiachartmap/items');
		
		$breadcrumbTitle = Mage::helper('indiachartmap')->__('India Chart Map');
		$breadcrumbLabel = Mage::helper('indiachartmap')->__('India Chart Map');
		$this->_addBreadcrumb($breadcrumbLabel, $breadcrumbTitle);
		
		$this->_addContent($this->getLayout()->createBlock('indiachartmap/adminhtml_indiachartmap_edit'));		
		$this->renderLayout();
	}
}