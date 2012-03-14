<?php
    /**
     * @file   zh-TW.lang.php
     * @author NHN (developers@xpressengine.com) 翻譯：royallin
     * @brief  資源 (resource) 模組正體中文語言
     **/

    $lang->resource_manager = '資源';
    $lang->about_resource_manager = '可進行資源管理的模組';

    $lang->order_newest = "最新登錄";
    $lang->order_latest = "最近更新";
    $lang->order_popular = "熱門";
    $lang->package_status = '登錄狀態';

    $lang->download = '檔案下載';
    $lang->package_downloaded_count = '下載總數';
    $lang->downloaded_count = '下載次數';
    $lang->voted_count = '推薦';
    $lang->resource_estimate = '評論';
    $lang->star_point = '評分';
    $lang->cmd_estimate = '送出評論';
    $lang->msg_already_voted = '已經評過分了';

    $lang->cmd_list_my_package = '檔案列表';
    $lang->about_my_package = '下列申請的資料狀態顯示為"通過"的表示登錄成功。<br/>通過的資料再登錄相關檔案即可發布。';

    $lang->package_accepted = '通過';
    $lang->package_waiting = '等待';
    $lang->package_reservation = '保留';

    $lang->cmd_attach_file = '登錄檔案';
    $lang->package_author = '作者';

    $lang->cmd_view_all_version = '檢視所有版本';
    $lang->version_history = '版本紀錄';
    $lang->latest_version = '最新版本';
    $lang->selected_version = '選擇版本';

    $lang->attach_version = '版本';
    $lang->about_attach_version = '請輸入版本。<br/>版本通常是以英文或數字來區分更新的重要度。';
    $lang->latest_attach_version = '最新版本';

    $lang->attach_file = '附加檔案';
    $lang->about_attach_file = '請選擇要上傳的相關檔案。<br/> 建議使用 zip、tgz、tar 等已壓縮的檔案。'; 

    $lang->attach_description = '檔案說明';
    $lang->about_attach_description = '請輸入檔案的相關說明。';

    $lang->no_packages = '目前沒有資料登錄。<br/>通過申請的資料會登錄於此。'; 

    $lang->package_version = '版本';

    $lang->search_dependency = '搜尋關聯檔案';
    $lang->attach_dependency = '關聯檔案';
    $lang->about_attach_dependency = '請在此填寫必須或者應該一起下載的檔案。<br/>下載檔案時會提醒應該一起下載的檔案。'; 

    $lang->attach_screenshot = '螢幕截圖';
    $lang->about_attach_screenshot = '請上傳螢幕截圖。<br/> 圖片大小是 100x100 的常見大小。<br/> 請使用 jpg、gif、png 等圖片格式。'; 

    $lang->cmd_manage_file = '檔案管理';
    $lang->about_manage_file = '通過申請的資料可直接上傳相關檔案。<br/>上傳檔案時，如果將其他關聯檔案的資料都填寫清楚的話，將會使下載者更方便。<br/>可直接管理檔案與相關內容。'; 

    $lang->cmd_manage_package = '登錄資料管理';
    $lang->about_manage_package = '審核用戶登錄的資料是否通過/保留/刪除。';

    $lang->cmd_insert_package = '資料登錄';
    $lang->about_insert_package= '在登錄資料前必須要先通過審核。<br/>資料通過審核後，就可以登錄相關檔案。<br/>個別資料申請的原因是檔案版本更新時，檔案管理與關聯檔案 (其他 widget 與模組) 的審核。<br/>以下內容填寫完後送出，即可完成申請。'; 

    $lang->cmd_modify_package = '編輯檔案';
    $lang->about_modify_package ='可編輯檔案標題、使用條款、首頁與說明。'; 

    $lang->cmd_delete_package = '刪除檔案';
    $lang->about_delete_package= '會連同檔案登錄時所附加的檔案一起刪除。';

    $lang->about_required_field = '表示為<em>必須輸入</em>的項目。';
    $lang->required_field = '此項目必須輸入。';

    $lang->package_regdate = '登錄日期';
    $lang->package_update = '最新更新';

    $lang->package_category = '分類';
    $lang->about_package_category = '請選擇分類。';

    $lang->package_title = '檔案標題';
    $lang->about_package_title = '請輸入檔案標題。';

    $lang->package_path = '安裝路徑';
    $lang->about_package_path = '請直接輸入安裝位置，例)./modules/模組名稱。';

    $lang->package_license = '使用條款';
    $lang->about_package_license = '請選擇檔案的使用條款。<br/>選擇其他條款的話，請簡單輸入說明。';

    $lang->package_homepage = '首頁';
    $lang->about_package_homepage = '請輸入作者的網站和 project 的網址。';

    $lang->package_description = '簡介';
    $lang->about_package_description = '請輸入簡介。<br/>瀏覽檔案時會顯示。<br/> 請輸入 300 個字以內。';

    $lang->resource_notify_mail = '郵件通知';
    $lang->about_resource_notify_mail = '當有檔案登錄或修改時，將會用郵件通知。';

    $lang->resource_use_path = '使用路徑';
    $lang->about_resource_use_path = '取消時將無法使用路徑。';

    $lang->resource_new_notify_title = '資料登錄請求';
    $lang->resource_modify_notify_title = '檔案資料變更';
    $lang->resource_delete_notify_title = '刪除檔案';
    $lang->resource_attach_notify_title = '資料有附加檔案';
    $lang->resource_status_changed = '登錄的資料狀態變更';
    $lang->resource_status_changed_message = '[title] 的資料狀態變更成 [status]';
?>
