/* jce - 2.9.30 | 2022-09-14 | https://www.joomlacontenteditor.net | Copyright (C) 2006 - 2022 Ryan Demmer. All rights reserved | GNU/GPL Version 2 or later - http://www.gnu.org/licenses/gpl-2.0.html */
!function($){function init(){$("#insert").on("click",function(e){e.preventDefault(),insert()}),$("#cancel").on("click",function(e){e.preventDefault(),tinyMCEPopup.close()});var ed=tinyMCEPopup.editor,src=tinyMCEPopup.getWindowArg("value");Wf.init(),/(:\/\/|www|index.php(.*)\?option)/gi.test(src)&&(src=""),src&&(src=ed.convertURL(src),$(".uk-button-text","#insert").text(tinyMCEPopup.getLang("update","Update",!0))),$("[data-filebrowser]").val(src).filebrowser().on("filebrowser:onfileclick",function(e,file,data){selectFile(data)})}function insert(){var win=tinyMCEPopup.getWindowArg("window"),callback=tinyMCEPopup.getWindowArg("callback");return callback?void $("[data-filebrowser]").trigger("filebrowser:insert",function(selected,data){data.length||(data=[{title:"",url:""}]),"string"==typeof callback&&(selectFile(data[0]),win.document.getElementById(callback).value=$("[data-filebrowser]").val()),"function"==typeof callback&&callback(selected,data),tinyMCEPopup.close()}):tinyMCEPopup.close()}function selectFile(file){var src=file.url||"";src=src.replace(/^\//,""),$("[data-filebrowser]").val(src)}$(document).ready(init)}(jQuery);