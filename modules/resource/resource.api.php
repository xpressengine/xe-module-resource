<?php
class resourceAPI extends resource {
	function getResourceItems() {
		$package_srl = Context::get('package_srl');
		$module_srl = Context::get('module_srl');
		$list_count = Context::get('list_count');

		if(!$package_srl || !$module_srl) return;

		$oModel =& getModel('resource');
        $args->module_srl = $module_srl;
        $args->package_srl = $package_srl;
        if($list_count)
        {
            $args->list_count = $list_count;
        }
        $output = executeQueryArray('resource.getItemsWithDocument', $args);
		$this->add('items', $output->data);
	}
}
?>
