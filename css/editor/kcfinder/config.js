/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
    // ...
   config.filebrowserBrowseUrl = 'editor/kcfinder/browse.php?type=files';
   config.filebrowserImageBrowseUrl = 'editor/kcfinder/browse.php?type=images';
   config.filebrowserFlashBrowseUrl = 'editor/kcfinder/browse.php?type=flash';
   config.filebrowserUploadUrl = 'editor/kcfinder/upload.php?type=files';
   config.filebrowserImageUploadUrl = 'editor/kcfinder/upload.php?type=images';
   config.filebrowserFlashUploadUrl = 'editor/kcfinder/upload.php?type=flash';
// ...
};
