<?php

use Pagekit\Application as App;

App::config()->set('system', App::config('system')->merge([
    'site' => [
        "theme" => "theme-aurora"
    ],
    'extensions' => [
        "0" => "driven\/listings",
        "1" => "slideshow-widget",
        "3" => "spqr\/cookiewarning"
    ]
]));

App::config()->set('system/site', App::config('system/site')->merge([
    "menus" => [
        "main" => [
            "id" => "main",
            "label" => "Main"
        ]
    ],
    "frontpage" => 1,
    "view" => [
        "logo" => "storage/ttags-logo.png"
    ],
    "description" => "",
    "maintenance" => [
        "enabled" => true,
        "logo" => "storage/ttags-logo.png",
        "msg" => ""
    ],
    "icons" => [
        "favicon" => "storage/favicon.ico",
        "appicon" => "storage/apple_touch_icon.png"
    ],
    "code" => [
        "header" => "",
        "footer" => "<script>window.gtranslateSettings = {\n        \"default_language\":\"de\",\n        \"native_language_names\":true,\n        \"detect_browser_language\":true,\n        \"languages\":[\"de\",\"en\",\"ru\",\"tr\",\"it\",\"fr\",\"es\",\"ca\"],\n        \"wrapper_selector\":\".gtranslate_wrapper\",\n        \"switcher_horizontal_position\":\"right\",\n        \"switcher_vertical_position\":\"top\",\n        \"float_switcher_open_direction\":\"bottom\"\n    }\n\t$(document).ready(function() {\n        $(\".gt-current-lang\").each(function() {\n            \/\/ Füge das Bild-Element nur für dieses spezifische .gt-current-lang-Element an\n            $(this).append($(this).find(\"img\"));\n        });\n    });\n<\/script>\n<script src=\"https:\/\/cdn.gtranslate.net\/widgets\/latest\/float.js\" defer><\/script>"
    ]
]));

App::config()->set('theme-aurora', App::config('theme-aurora')->merge([
    "_positions" => [
        "toolbar" => [],
        "navbar" => [],
        "hero" => [1],
        "content_top" => [2],
        "top" => [],
        "top_b" => [],
        "top_c" => [],
        "top_d" => [],
        "sidebar" => [],
        "bottom" => [],
        "bottom_b" => [],
        "bottom_c" => [3],
        "bottom_d" => [4, 5],
        "content_bottom" => [6],
        "footer" => [],
        "sidebar_menu" => [],
        "sidebar_main" => [],
        "sidebar_social" => [],
        "offcanvas" => []
    ],
    "_menus" => [
        "main" => "main",
        "offcanvas" => "main"
    ],
    "style" => "yellow",
    "logo_small" => "storage/ttags-logo.png",
    "logo_offcanvas" => "storage/ttags-logo.png",
    "section_divider" => true,
    "sidebar_width" => "25",
    "sidebar_parallax" => false,
    "sidebar_fixed" => false,
    "totop_scroller" => true,
    "_nodes" => [
        "1" => [
            "title_hide" => true,
            "title_large" => false,
            "alignment" => false,
            "html_class" => "home",
            "sidebar_first" => false,
            "hero_image" => "",
            "hero_viewport" => false,
            "hero_contrast" => false,
            "hero_parallax" => false,
            "content_top_padding" => true,
            "content_bottom_padding" => true
        ],
        "2" => [
            "title_hide" => false,
            "content_top_padding" => true,
            "content_bottom_padding" => true
        ],
        "3" => [
            "title_hide" => false,
            "content_top_padding" => true,
            "content_bottom_padding" => true
        ]
    ],
    "_widgets" => [
        "1" => [
            "title_hide" => true,
            "title_size" => "uk-panel-title",
            "alignment" => false,
            "html_class" => "",
            "panel" => ""
        ],
        "2" => [
            "title_hide" => true,
            "title_size" => "uk-panel-title",
            "alignment" => true,
            "html_class" => "",
            "panel" => ""
        ],
        "3" => [
            "title_hide" => true,
            "title_size" => "uk-panel-title",
            "alignment" => true,
            "html_class" => "",
            "panel" => ""
        ],
        "4" => [
            "title_hide" => true,
            "title_size" => "uk-panel-title",
            "alignment" => true,
            "html_class" => "",
            "panel" => ""
        ],
        "5" => [
            "title_hide" => true,
            "title_size" => "uk-panel-title",
            "alignment" => true,
            "html_class" => "",
            "panel" => ""
        ],
        "6" => [
            "title_hide" => true,
            "title_size" => "uk-panel-title",
            "alignment" => true,
            "html_class" => "",
            "panel" => ""
        ]
    ]
]));

App::db()->insert('@system_widget', [
    'title' => 'Slideshow',
    'type' => 'widgets/slideshowWidget',
    'status' => 1,
    'nodes' => 1,
    'data' => json_encode([
        "config" => [
            "autoplay" => true,
            "autoplayInterval" => "4000",
            "height" => "225",
            "animation" => "fade",
            "kenburns" => true,
            "duration" => 500,
            "pauseOnHover" => true,
            "slidenav" => true,
            "dotnav" => true,
            "pagination" => true
        ],
        "images" => [
            [
                "src" => "storage/slide1.jpg",
                "alt" => "Slide1",
                "link" => "https://ttags.de",
                "link_target" => "all",
                "overlay" => "bottom",
                "header" => "TTags",
                "color" => "#fcff61",
                "active_from" => "00:00",
                "active_until" => "00:00",
                "text" => ""
            ],
            [
                "src" => "storage/slide2.jpg",
                "alt" => "Slide2",
                "header" => "simple",
                "text" => "",
                "active_from" => "00:00",
                "active_until" => "00:00",
                "color" => "#ffffff"
            ],
            [
                "src" => "storage/slide3.jpg",
                "alt" => "Slide3",
                "header" => "smart",
                "text" => "",
                "active_from" => "00:00",
                "active_until" => "00:00",
                "color" => "#ffffff"
            ],
            [
                "src" => "storage/slide4.jpg",
                "alt" => "Slide4",
                "header" => "innovative",
                "active_from" => "00:00",
                "active_until" => "00:00",
                "color" => "#ffffff"
            ]
        ]
    ], JSON_UNESCAPED_SLASHES)
]);

App::db()->insert('@system_widget', [
    'title' => 'First Menucards for the home site',
    'type' => 'driven/listings',
    'status' => 1,
    'nodes' => 1,
    'data' => '{}'
]);

App::db()->insert('@system_widget', [
    'title' => 'Feedback',
    'type' => 'system/text',
    'status' => 1,
    'nodes' => 1,
    'data' => '{
        "content":"<a class=\"uk-thumbnail\" href=\"https:\/\/www.ttags.de\/\" target=\"_blank\">\n    <span class=\"img-box img-feedback\">\n        <img src=\"storage\/shot.png\" alt=\"Vote for free Shot\" object-fit=\"cover\">\n    <\/span>\n<\/a>"
    }'
]);

App::db()->insert('@system_widget', [
    'title' => 'Website',
    'type' => 'system/text',
    'status' => 1,
    'nodes' => 1,
    'data' => '{
        "content":"<a class=\"uk-thumbnail\" href=\"https:\/\/www.ttags.de\/\" target=\"_blank\">\n    <span class=\"img-box img-website\">\n        <img src=\"storage\/ttags-logo.png\" alt=\"TTAGS Logo\" object-fit=\"cover\">\n    <\/span>\n<\/a>"
    }'
]);

App::db()->insert('@system_widget', [
    'title' => 'Instagram',
    'type' => 'system/text',
    'status' => 1,
    'nodes' => 1,
    'data' => '{
        "content":"<a class=\"uk-thumbnail\" href=\"https:\/\/www.instagram.com\/ttags.de\/\" target=\"_blank\">\n    <span class=\"img-box\">\n        <img src=\"\/storage\/insta.jpg\" alt=\"Instagram\" object-fit=\"cover\">\n    <\/span>\n<\/a>"
    }'
]);

App::db()->insert('@system_widget', [
    'title' => 'Öffnungszeiten',
    'type' => 'system/text',
    'status' => 1,
    'nodes' => 1,
    'data' => '{
        "content":"<table class=\"uk-table uk-table-small uk-table-divider\">\n    <tbody>\n        <tr>\n            <td>Di. + Mi. + Do. + So.<\/td>\n            <td>12:00 - 22:00<\/td>\n        <\/tr>\n        <tr>\n            <td>Fr. + Sa.<\/td>\n            <td>12:00 - 22:30<\/td>\n        <\/tr>\n    <\/tbody>\n<\/table>"
    }'
]);

App::db()->insert('@system_page', [
    'listing_id' => '0',
    'title' => 'Home',
    'content' => '',
    'data' => '{"title":true}'
]);

App::db()->insert('@system_page', [
    'listing_id' => '1',
    'title' => 'Getränke',
    'content' => '(menu){"id":"1"}',
    'data' => '{
        "title":true,
        "group":"menucards"
    }'
]);

App::db()->insert('@system_page', [
    'listing_id' => '2',
    'title' => 'Speisen',
    'content' => '(menu){"id":"2"}',
    'data' => '{
        "title":true,
        "group":"menucards"
    }'
]);

App::db()->insert('@system_node', [
    'priority' => 1,
    'status' => 1,
    'title' => 'Home',
    'slug' => 'home',
    'path' => '/home',
    'link' => '@page/1',
    'type' => 'page',
    'menu' => 'main',
    'data' => '{
        "defaults":{
            "id":1
        }
    }'
]);

App::db()->insert('@system_node', [
    'listing_id' => '1',
    'priority' => 2,
    'status' => 1,
    'title' => 'Getränke',
    'slug' => 'getraenke',
    'path' => '/getraenke',
    'link' => '@page/2',
    'type' => 'page',
    'menu' => 'main',
    'data' => '{
        "defaults":{
            "id":2
        },
        "meta":{
            "og:title":"Getr\u00e4nke",
            "og:description":"",
            "og:image":"storage\/getraenke.jpg"
        },
        "group":"menucards"
    }'
]);

App::db()->insert('@system_node', [
    'listing_id' => '2',
    'priority' => 3,
    'status' => 1,
    'title' => 'Speisen',
    'slug' => 'speisen',
    'path' => '/speisen',
    'link' => '@page/3',
    'type' => 'page',
    'menu' => 'main',
    'data' => '{
        "defaults":{
            "id":3
        },
        "meta":{
            "og:title":"Speisen",
            "og:description":"",
            "og:image":"storage\/kuchen.jpg"
        },
        "group":"menucards"
    }'
]);

if (App::db()->getUtility()->tableExists('@system_user')) {
    App::db()->insert('@system_user', [
        'id' => 1,
        'name' => 'TTAGS - Superadmin',
        'username' => 'admin',
        'email' => 'info@ttags.de',
        'password' => '$2y$10$IjXaPCjST49uob5Y4LV6De5QPamjfMj/ZPdWx8ogG6VQLkKFkKICe',
        'status' => 1,
        'registered' => date('Y-m-d H:i:s'),
        'roles' => '2,3',
        'data' => [
            'admin' => [
                'menu' => [
                    'site' => 1,
                    'dashboard' => 2,
                    'user' => 3,
                    'system: system' => 4,
                    'system: marketplace' => 5
                ]
            ]
        ]
    ]);
}

App::db()->insert('@system_role', [
    'name' => 'Webmaster',
    'priority' => 3,
    'permissions' => '
        system: manage widgets,
        system: manage storage read only,
        system: access admin area,
        system: manage userstorage read only,
        site: maintenance access,
        site: manage site,
        listings: manage lists
    '
]);

if (App::db()->getUtility()->tableExists('@blog_post')) {
    App::db()->insert('@blog_post', [
        'user_id' => 1,
        'slug' => 'hello-pagekit',
        'title' => 'Hello Pagekit',
        'status' => 2,
        'date' => date('Y-m-d H:i:s'),
        'modified' => date('Y-m-d H:i:s'),
        'content' => 'Blog Extension',
        'excerpt' => '',
        'comment_status' => 1,
        'data' => '{"title":null,"markdown":true}'
    ]);
}
