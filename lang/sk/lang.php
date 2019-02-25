<?php

return [
    'plugin' => [
        'name' => 'WYSIWYG editory',
        'description' => 'Vložte svoj obľúbený WYSIWYG editor do CMS a ďalších editorov kódu'
    ],
    'settings' => [
        'label' => 'WYSIWYG editory',
        'description' => 'Nastavenie predvolieb WYSIWYG editorov.'
    ],
    'widget' => [
        'label' => 'WYSIWYG',
        'name' => 'WYSIWYG editory',
        'description' => 'Vykreslí WYSIWYG editor podľa podľa vášho výberu'
    ],
    'form' => [
        'settings' => [
            'select_editor' => 'Vyberte editor',
            'editor_width' => 'Šírka editora',
            'editor_height' => 'Výška editora',
            'toolbar_label' => 'Prispôsobenie panela s nástrojmi',
            'toolbar_tinymce' => 'Dokumentácia: http://www.tinymce.com/docs/advanced/editor-control-identifiers/#toolbarcontrols',
            'toolbar_ckeditor' => 'Dokumentácia: http://docs.ckeditor.com/#!/guide/dev_toolbar'
        ],
        'page' => [
            'label' => 'Použiť pre stránky?',
            'comment' => 'Použije WYSIWYG editor pre CMS - Stránky'
        ],
        'content' => [
            'label' => 'Použiť pre obsahové bloky?',
            'comment' => 'Použije WYSIWYG editor pre CMS - Obsah'
        ],
        'partial' => [
            'label' => 'Použiť pre čiastkové šablóny?',
            'comment' => 'Použije WYSIWYG editor pre CMS - Čiastkové šablóny'
        ],
        'layout' => [
            'label' => 'Použiť pre layouty?',
            'comment' => 'Použije WYSIWYG editor pre CMS - Layouty'
        ],
        'others' => [
            'label' => 'Použiť pre všetko ostatné?',
            'comment' => 'Nahradí každú inštanciu editora kódu vo všetkých pluginoch WYSIWYG editorom okrem CMS (Stránky, Čiastkové šablóny, Layouty, Obsahové bloky)'
        ],
        'spages' => [
            'label' => 'Použiť pre RainLab Static Pages?',
            'comment' => 'Použije WYSIWYG editor pre RainLab Static Pages plugin ako editor stránok'
        ],
        'blog' => [
            'label' => 'Použiť pre RainLab Blog?',
            'comment' => 'Použije WYSIWYG editor pre RainLab Blog plugin ako editor príspevkov'
        ],
        'problog' => [
            'label' => 'Použiť pre Radiantweb Problog?',
            'comment' => 'Použije WYSIWYG editor pre Radientweb Problog plugin ako editor príspevkov'
        ],
        'proevent' => [
            'label' => 'Použiť pre Radiantweb ProEvents?',
            'comment' => 'Použije WYSIWYG editor pre Radientweb ProEvents plugin ako editor detailov udalostí'
        ],
        'apages' => [
            'label' => 'Použiť pre Autumn Pages?',
            'comment' => 'Použije WYSIWYG editor pre Autumn Pages plugin ako editor stránok'
        ],
        'cplus' => [
            'label' => 'Použiť pre Indikator Content Plus?',
            'comment' => 'Použije WYSIWYG editor pre Indikator Content Plus plugin ako editor obsahu'
        ],
        'news' => [
            'label' => 'Použiť pre Indikator News & Newsletter?',
            'comment' => 'Použije WYSIWYG editor pre Indikator Content News & Newsletter plugin ako editor správ'
        ],
        'tab' => [
            'settings' => 'Nastavenie editora',
            'content' => 'Použitie editora',
            'section' => 'Pluginy'
        ]
    ]
];
