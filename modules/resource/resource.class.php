<?php
    /**
     * @class  resource
     * @author zero (skklove@gmail.com)
     * @brief  resource high class
     **/

    class resource extends ModuleObject {

        var $licenses = array( 'GPL v2', 'LGPL v2', 'GPL v3', 'LGPL v3', 'New BSD License', 'MPL 1.1', 'Apache License 2.0', 'MIT/X License', 'zlib/libpng License', 'OFL 1.1', '기타 라이선스');


        function moduleInstall() {
            $oModuleController = &getController('module');

            $oModuleController->insertTrigger('file.downloadFile', 'resource', 'controller', 'triggerUpdateDownloadedCount', 'after');
            return new Object();
        }

        function checkUpdate() {
            $oModuleModel = &getModel('module');

            if(!$oModuleModel->getTrigger('file.downloadFile', 'resource', 'controller', 'triggerUpdateDownloadedCount', 'after')) return true;
            return false;
        }

        function moduleUpdate() {
            $oModuleController = &getController('module');
            $oModuleModel = &getModel('module');

            if(!$oModuleModel->getTrigger('file.downloadFile', 'resource', 'controller', 'triggerUpdateDownloadedCount', 'after')) 
                $oModuleController->insertTrigger('file.downloadFile', 'resource', 'controller', 'triggerUpdateDownloadedCount', 'after');

            return new Object(0, 'success_updated');
        }

		function moduleUninstall() {
			$output = executeQueryArray("resource.getAllResources");
			if(!$output->data) return new Object();
			set_time_limit(0);
			$oModuleController =& getController('module');
			foreach($output->data as $resource)
			{
				$oModuleController->deleteModule($resource->module_srl);
			}
            $oModuleModel = &getModel('module');
            if(!$oModuleModel->getTrigger('file.downloadFile', 'resource', 'controller', 'triggerUpdateDownloadedCount', 'after')) 
                $oModuleController->deleteTrigger('file.downloadFile', 'resource', 'controller', 'triggerUpdateDownloadedCount', 'after');
			
			return new Object();	
		}

        function recompileCache() {
        }
    }
?>
