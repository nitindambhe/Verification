/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here.
	// For complete reference see:
	// http://docs.ckeditor.com/#!/api/CKEDITOR.config

	// The toolbar groups arrangement, optimized for two toolbar rows.
	config.toolbarGroups = [
		{ name: 'clipboard',   groups: ['styles', 'spellchecker' ,'list','clipboard','basicstyles','colors' ] },
		{ name: 'editing',     groups: [ 'find', 'selection'] },
		{ name: 'insert' },
		{ name: 'forms' },
		{ name: 'tools' },
		{ name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'others' },
		'/',
		{ name: 'basicstyles', groups: [ 'cleanup' ] },
		{ name: 'paragraph',   groups: [  'indent', 'blocks', 'align', 'bidi' ] }
	];

	// Remove some buttons provided by the standard plugins, which are
	// not needed in the Standard(s) toolbar.
	//config.removeButtons = 'Underline,Subscript,Superscript';
	config.removeButtons = 'Subscript,Superscript,Source,Maximize,Preview,Math,Cut,Copy,Paste,PasteText,PasteFromWord,Print,Strike,Image,HorizontalRule,RemoveFormat,Link,Unlink,Anchor,Undo,Redo,Font,Format,Blockquote,Styles,Indent,Outdent';

	// Set the most common block elements.
	config.format_tags = 'p;h1;h2;h3;pre';

	// Simplify the dialog windows.
	config.removeDialogTabs = 'image:advanced;link:advanced';
	
	///code utf-8
	config.entities = false;
	config.basicEntities = false;
};
