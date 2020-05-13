/*
 Copyright (c) 2007-2019, CKSource - Frederico Knabben. All rights reserved.
 For licensing, see LICENSE.html or https://ckeditor.com/sales/license/ckfinder
 */
var writer = editor.dataProcessor.writer;

// The character sequence to use for every indentation step.
writer.indentationChars = '\t';

// The way to close self-closing tags, like <br/>.
writer.selfClosingEnd = ' />';

// The character sequence to be used for line breaks.
writer.lineBreakChars = '\n';

// The writing rules for the <p> tag.
writer.setRules( 'p', {
    // Indicates that this tag causes indentation on line breaks inside of it.
    indent: true,

    // Inserts a line break before the <p> opening tag.
    breakBeforeOpen: true,

    // Inserts a line break after the <p> opening tag.
    breakAfterOpen: true,

    // Inserts a line break before the </p> closing tag.
    breakBeforeClose: false,

    // Inserts a line break after the </p> closing tag.
    breakAfterClose: true
} );
config.allowedContent = true;

CKEDITOR.editorConfig = function( config ) {
// Define changes to default configuration here. For example:
// config.language = 'fr';
// config.uiColor = '#AADC6E';
    config.entities = false;
    config.basicEntities = false;
    config.entities_greek = false;
    config.entities_latin = false;

};
CKFinder.define( config );
