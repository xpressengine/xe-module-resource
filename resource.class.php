<?php
    /**
     * @class  resource
     * @author NHN (developers@xpressengine.com)
     * @brief  resource high class
     **/

    class resource extends ModuleObject {

        var $licenses = array( 'GPL v2', 'LGPL v2', 'GPL v3', 'LGPL v3', 'New BSD License', 'MPL 1.1', 'Apache License 2.0', 'MIT/X License', 'zlib/libpng License', 'OFL 1.1', '기타 라이선스');


        function moduleInstall() {
            $oModuleController = &getController('module');

            $oModuleController->insertTrigger('file.downloadFile', 'resource', 'controller', 'triggerUpdateDownloadedCount', 'after');
            $oModuleController->insertTrigger('menu.getModuleListInSitemap', 'resource', 'model', 'triggerModuleListInSitemap', 'after');
            return new Object();
        }

        function checkUpdate() {
            $oModuleModel = &getModel('module');

            if(!$oModuleModel->getTrigger('file.downloadFile', 'resource', 'controller', 'triggerUpdateDownloadedCount', 'after')) return true;
			// 2012. 09. 11 when add new menu in sitemap, custom menu add
			if(!$oModuleModel->getTrigger('menu.getModuleListInSitemap', 'resource', 'model', 'triggerModuleListInSitemap', 'after')) return true;
            return false;
        }

        function moduleUpdate() {
            $oModuleController = &getController('module');
            $oModuleModel = &getModel('module');

            if(!$oModuleModel->getTrigger('file.downloadFile', 'resource', 'controller', 'triggerUpdateDownloadedCount', 'after')) 
                $oModuleController->insertTrigger('file.downloadFile', 'resource', 'controller', 'triggerUpdateDownloadedCount', 'after');
			// 2012. 09. 11 when add new menu in sitemap, custom menu add
			if(!$oModuleModel->getTrigger('menu.getModuleListInSitemap', 'resource', 'model', 'triggerModuleListInSitemap', 'after'))
				$oModuleController->insertTrigger('menu.getModuleListInSitemap', 'resource', 'model', 'triggerModuleListInSitemap', 'after');

            return new Object(0, 'success_updated');
        }

		function moduleUninstall() {
            $oModuleModel = &getModel('module');
			$oModuleController =& getController('module');
            if($oModuleModel->getTrigger('file.downloadFile', 'resource', 'controller', 'triggerUpdateDownloadedCount', 'after')) 
                $oModuleController->deleteTrigger('file.downloadFile', 'resource', 'controller', 'triggerUpdateDownloadedCount', 'after');
			$output = executeQueryArray("resource.getAllResources");
			if(!$output->data) return new Object();

			set_time_limit(0);
			foreach($output->data as $resource)
			{
				$oModuleController->deleteModule($resource->module_srl);
			}
			
			return new Object();	
		}

        function recompileCache() {
        }
    }
?>
