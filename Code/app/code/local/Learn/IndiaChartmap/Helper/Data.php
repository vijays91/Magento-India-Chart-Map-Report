<?php
class Learn_IndiaChartmap_Helper_Data extends Mage_Core_Helper_Abstract
{
    const XML_PATH_ICMAP_BGCOLOR  		= 'indiachartmap_tab/indiachartmap_setting/indiachartmap_bgcolor';
    const XML_PATH_ICMAP_BORDERCOLOR  	= 'indiachartmap_tab/indiachartmap_setting/indiachartmap_bordercolor';
    const XML_PATH_ICMAP_COLOR  		= 'indiachartmap_tab/indiachartmap_setting/indiachartmap_color';
		
	public function conf($code, $store = null) {
        return Mage::getStoreConfig($code, $store);
    }
	
	public function icmap_bgcolor($store) {
		return $this->conf(self::XML_PATH_ICMAP_BGCOLOR, $store);
	}
	
	public function icmap_bordercolor($store) {
		return $this->conf(self::XML_PATH_ICMAP_BORDERCOLOR, $store);
	}

	public function icmap_color() {
		return $this->conf(self::XML_PATH_ICMAP_COLOR, $store);
	}
	
	public function jqvmapCss() {
		return "indiachartmap/jqvmap.css";
	}
	
	public function jqvmapJs() {
		return "indiachartmap/jquery.vmap.js";
	}
	
	public function jqvmapWorldJs() {
		return "indiachartmap/jquery.vmap.india.js";
	}
	
	public function jQueryJs() {
		return "indiachartmap/jquery-2.1.1.min.js";
	}

}