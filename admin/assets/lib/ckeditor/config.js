/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
		
		config.allowedContent = true;
	
		config.toolbar = 'MyToolbar';
	 
		config.toolbar_MyToolbar =
		[
			{ name: 'clipboard',   items : [ 'Cut','Copy','PasteText','-','Undo','Redo' ] },
			{ name: 'links',       items : [ 'Link','Unlink','Anchor' ] },
			{ name: 'insert',      items : [ 'Image','Table','SpecialChar','Video'] },
			{ name: 'insert',      items : [ 'Table','SpecialChar'] },	
			{ name: 'basicstyles', items : [ 'Bold','Italic','Underline','Subscript','Superscript','-','RemoveFormat' ] },
			{ name: 'paragraph',   items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','-','JustifyLeft','JustifyCenter','JustifyRight' ] },
			{ name: 'styles',      items : [ 'Styles','Format','Font','FontSize' ] },
			{ name: 'colors',      items : [ 'TextColor','BGColor' ] },
			{ name: 'document',    items : [ 'Source'] }
		];

		config.extraPlugins = 'ajax,xml,video';

			// ...
			/*
			   config.filebrowserBrowseUrl = '../../uploads/kcfinder/browse.php?opener=ckeditor&type=files';
			   config.filebrowserImageBrowseUrl = '../../uploads/kcfinder/browse.php?opener=ckeditor&type=images';
			   config.filebrowserFlashBrowseUrl = '../../uploads/kcfinder/browse.php?opener=ckeditor&type=flash';
			   config.filebrowserUploadUrl = '../../uploads/kcfinder/upload.php?opener=ckeditor&type=files';
			   config.filebrowserImageUploadUrl = '../../uploads/kcfinder/upload.php?opener=ckeditor&type=images';
			   config.filebrowserFlashUploadUrl = '../../uploads/kcfinder/upload.php?opener=ckeditor&type=flash'; */
			// ...
			
			 config.filebrowserBrowseUrl = '../../../uploads/kcfinder/browse.php?opener=ckeditor&type=files';
			   config.filebrowserImageBrowseUrl = '../../../uploads/kcfinder/browse.php?opener=ckeditor&type=images';
			   config.filebrowserFlashBrowseUrl = '../../../uploads/kcfinder/browse.php?opener=ckeditor&type=flash';
			   config.filebrowserUploadUrl = '../../../uploads/kcfinder/upload.php?opener=ckeditor&type=files';
			   config.filebrowserImageUploadUrl = '../../../uploads/kcfinder/upload.php?opener=ckeditor&type=images';
			   config.filebrowserFlashUploadUrl = '../../../uploads/kcfinder/upload.php?opener=ckeditor&type=flash';
			
};
