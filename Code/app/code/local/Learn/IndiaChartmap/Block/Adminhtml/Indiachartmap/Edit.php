<?php
class Learn_IndiaChartmap_Block_Adminhtml_Indiachartmap_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    const INDIA  = "IN";
	public function __construct() {
		$this->setTemplate('indiachartmap/indiachartmap.phtml');
	}
	
	public function getTotalOrdersByStates() {
		$collection = Mage::getModel('sales/order')->getCollection();
		$collection->addFieldToSelect('customer_email');
		$collection->getSelect()->join(array('sub' => $collection->getTable('sales/order_address')),'main_table.entity_id = sub.parent_id', array('region_id'=>'LCASE(sub.region)', 'country_id'=>'(sub.country_id)', "total" => "COUNT(*)") );
		$collection->getSelect()->where("sub.address_type = 'billing'");
        $collection->getSelect()->where("  sub.country_id = '". self::INDIA ."' ");        
		$collection->getSelect()->columns('SUM( grand_total ) AS amount');
		$collection->getSelect()->group(array('sub.region'));
		/* echo $collection->getSelect(); */
		$results = $collection->getData();
		foreach ($results as $result) {
            $region_code = $this->getRegionInfo($result['region_id'], $result['country_id']);
			$json[($result['country_id']. "-" .$region_code)] = array(
				'total'  => $result['total'],
				'amount' => Mage::helper('core')->currency($result['amount'], true, false),
			);
		}
		return json_encode($json);
	}	
    
    protected function getRegionInfo($regionName, $countryCode = "IN") {
        $regionModel = Mage::getModel('directory/region')->loadByName($regionName, $countryCode);
        return $regionModel->getCode();
    }
	
}
