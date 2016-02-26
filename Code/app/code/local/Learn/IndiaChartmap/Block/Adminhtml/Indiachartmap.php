<?php
class Learn_IndiaChartmap_Block_Adminhtml_Indiachartmap extends Mage_Adminhtml_Block_Widget_Grid_Container
{
	public function __construct()
	{
		$this->_controller = 'adminhtml_indiachartmap';
		$this->_blockGroup = 'indiachartmap';
		$this->_headerText = Mage::helper('indiachartmap')->__('India Chart Map');
		parent::__construct();
	}
}
