/**
 * @license Copyright (c) 2003-2023, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
    
    config.extraPlugins = "N1ED-editor";
    config.apiKey = "JSvGiRWv88jE8Ulf9Glyix2r"; // if you have own N1ED API key, get it on https://n1ed.com/dashboard
    
    config.skin = "n1theme";
    config.removePlugins = "iframe,magicline";
    config.allowedContent = true;
    config.versionCheck = false,

    config.height = 500;
    config.toolbar = [
        [
            "Cut",
            "Copy",
            "-",
            "Undo",
            "Redo",
            "-",
            "Font",
            "-",
            "FontSize",
            "-",
            "Link",
            "Unlink",
            "-",
            "CopyFormatting",
            "RemoveFormat",
        "-",
        "Source"
        ],
        "/",
        [
            "Bold",
            "Italic",
            "Underline",
            "Strike",
            "-",
            "TextColor",
            "BGColor",
            "-",
            "NumberedList",
            "BulletedList",
            "-",
            "Outdent",
            "Indent",
            "-",
            "Blockquote",
            "HorizontalRule",
            "-",
            "JustifyLeft",
            "JustifyCenter",
            "JustifyRight",
            "JustifyBlock"
        ]
    ];
};
