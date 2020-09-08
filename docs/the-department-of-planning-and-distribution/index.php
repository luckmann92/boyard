<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Отдел планирования и распределения");?><?$APPLICATION->IncludeComponent(
	"bitrix:webdav",
	".default",
	Array(
		"RESOURCE_TYPE" => "IBLOCK",
		"IBLOCK_TYPE" => "library",
		"IBLOCK_ID" => "43",
		"NAME_FILE_PROPERTY" => "FILE",
		"REPLACE_SYMBOLS" => "N",
		"USE_AUTH" => "Y",
		"UPLOAD_MAX_FILESIZE" => "1024",
		"UPLOAD_MAX_FILE" => "4",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/docs/the-department-of-planning-and-distribution/",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_SHADOW" => "Y",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"COLUMNS" => array(0=>"NAME",1=>"TIMESTAMP_X",2=>"USER_NAME",3=>"FILE_SIZE",4=>"WF_STATUS_ID",5=>"",),
		"PAGE_ELEMENTS" => "50",
		"PAGE_NAVIGATION_TEMPLATE" => "",
		"STR_TITLE" => "Отдел планирования и распределения",
		"SET_TITLE" => "Y",
		"DISPLAY_PANEL" => "N",
		"SHOW_TAGS" => "Y",
		"TAGS_PAGE_ELEMENTS" => "50",
		"TAGS_PERIOD" => "",
		"TAGS_INHERIT" => "Y",
		"TAGS_FONT_MAX" => "30",
		"TAGS_FONT_MIN" => "14",
		"TAGS_COLOR_NEW" => "486DAA",
		"TAGS_COLOR_OLD" => "486DAA",
		"TAGS_SHOW_CHAIN" => "Y",
		"USE_COMMENTS" => "N",
		"FORUM_ID" => "0",
		"PATH_TO_SMILE" => "/bitrix/images/forum/smile/",
		"USE_CAPTCHA" => "Y",
		"PREORDER" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"SEF_URL_TEMPLATES" => array("user_view"=>"/company/personal/user/#USER_ID#/","sections"=>"#PATH#","section_edit"=>"folder/edit/#SECTION_ID#/#ACTION#/","element"=>"element/view/#ELEMENT_ID#/","element_edit"=>"element/edit/#ACTION#/#ELEMENT_ID#/","element_history"=>"element/history/#ELEMENT_ID#/","element_history_get"=>"element/historyget/#ELEMENT_ID#/#ELEMENT_NAME#","element_upload"=>"element/upload/#SECTION_ID#/","help"=>"help","search"=>"search/",),
		"VARIABLE_ALIASES" => Array(
		)
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>