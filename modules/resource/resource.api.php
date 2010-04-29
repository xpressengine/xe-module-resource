<?php
class resourceAPI extends resource {
	function getResourceItems() {
		$package_srl = Context::get('package_srl');
		$module_srl = Context::get('module_srl');
		$list_count = Context::get('list_count');

		if(!$package_srl || !$module_srl) return;

		$oModel =& getModel('resource');
		$items = $oModel->getItems($module_srl, $package_srl, $list_count);
		$this->add('items', $items);
	}
}
?>
