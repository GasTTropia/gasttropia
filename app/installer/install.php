<?php

use Pagekit\Application as App;

App::config()->set('system/site', App::config('system/site')->merge([
    'frontpage' => 1,
    'view' => [
        'logo' => 'storage/ttags-logo.png',
    ],
    'description' => '',
    'maintenance' => [
        'enabled' => true,
        'logo' => 'storage/ttags-logo.png',
        'msg' => ''
    ],
    'icons' => [
        'favicon' => 'storage/favicon.ico',
        'appicon' => 'storage/apple_touch_icon.png'
    ],
    'code' => [
        'header' => '',
        'footer' => '<script>window.gtranslateSettings = {
        "default_language":"de",
        "native_language_names":true,
        "detect_browser_language":true,
        "languages":["de","en","ru","tr","it","fr","es","ca"],
        "wrapper_selector":".gtranslate_wrapper",
        "switcher_horizontal_position":"right",
        "switcher_vertical_position":"top",
        "float_switcher_open_direction":"bottom"
    }
    $(document).ready(function() {
        $(".gt-current-lang").each(function() {
            // Füge das Bild-Element nur für dieses spezifische .gt-current-lang-Element an
            $(this).append($(this).find("img"));
        });
    });
</script>
<script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>'
    ]
]));

App::db()->insert('@system_config', ['name' => 'theme-one', 'value' => '{"logo_contrast":"storage/ttags-logo.png","_menus":{"main":"main","offcanvas":"main"},"_positions":{"hero":[1],"footer":[2]},"_widgets":{"1":{"title_hide":true,"title_size":"uk-card-title","alignment":true,"html_class":"","panel":""},"2":{"title_hide":true,"title_size":"uk-card-title","alignment":"true","html_class":"","panel":""}},"_nodes":{"1":{"title_hide":true,"title_large":false,"alignment":true,"html_class":"","content_hide":false,"sidebar_first":false,"positions":{"hero":{"image":"storage/home-hero.jpg","image_position":"","effect":"","width":"","height":"full","vertical_align":"middle","style":"uk-section-secondary","size":"uk-section-large","padding_remove_top":false,"padding_remove_bottom":false,"preserve_color":false,"overlap":false,"header_transparent":true,"header_preserve_color":false,"header_transparent_noplaceholder":true},"top-a":{"image":"","image_position":"","effect":"","width":"","height":"","vertical_align":"middle","style":"uk-section-muted","size":"","padding_remove_top":false,"padding_remove_bottom":false,"preserve_color":false,"overlap":false,"header_transparent":false,"header_preserve_color":false,"header_transparent_noplaceholder":false},"top-c":{"image":"","image_position":"","effect":"","width":"","height":"","vertical_align":"middle","style":"uk-section-muted","size":"","padding_remove_top":false,"padding_remove_bottom":false,"preserve_color":false,"overlap":false,"header_transparent":false,"header_preserve_color":false,"header_transparent_noplaceholder":false},"bottom-a":{"image":"","image_position":"","effect":"","width":"","height":"","vertical_align":"middle","style":"uk-section-muted","size":"","padding_remove_top":false,"padding_remove_bottom":false,"preserve_color":false,"overlap":false,"header_transparent":false,"header_preserve_color":false,"header_transparent_noplaceholder":false},"bottom-c":{"image":"","image_position":"","effect":"","width":"","height":"","vertical_align":"middle","style":"uk-section-muted","size":"","padding_remove_top":false,"padding_remove_bottom":false,"preserve_color":false,"overlap":false,"header_transparent":false,"header_preserve_color":false,"header_transparent_noplaceholder":false},"top-b":{"image":"","image_position":"","effect":"","width":"","height":"","vertical_align":"middle","style":"uk-section-default","size":"","padding_remove_top":false,"padding_remove_bottom":false,"preserve_color":false,"overlap":false,"header_transparent":false,"header_preserve_color":false,"header_transparent_noplaceholder":false},"main":{"image":"","image_position":"","effect":"","width":"","height":"","vertical_align":"middle","style":"uk-section-default","size":"","padding_remove_top":false,"padding_remove_bottom":false,"preserve_color":false,"overlap":false,"header_transparent":false,"header_preserve_color":false,"header_transparent_noplaceholder":false},"bottom-b":{"image":"","image_position":"","effect":"","width":"","height":"","vertical_align":"middle","style":"uk-section-default","size":"","padding_remove_top":false,"padding_remove_bottom":false,"preserve_color":false,"overlap":false,"header_transparent":false,"header_preserve_color":false,"header_transparent_noplaceholder":false}}}}}']);

App::db()->insert('@system_node', ['priority' => 1, 'status' => 1, 'title' => 'Home', 'slug' => 'home', 'path' => '/home', 'link' => '@page/1', 'type' => 'page', 'menu' => 'main', 'data' => "{\"defaults\":{\"id\":1}}"]);

App::db()->insert('@system_node', ['priority' => 2, 'status' => 1, 'title' => 'Blog', 'slug' => 'blog', 'path' => '/blog', 'link' => '@blog', 'type' => 'blog', 'menu' => 'main']);

App::db()->insert('@system_widget', ['title' => 'Hello, I\'m GasTTropia', 'type' => 'system/text', 'status' => 1, 'nodes' => 1, 'data' => '{"content":"<h1 class=\"uk-heading-large uk-margin-large-bottom\">Hello, I\'m GasTTropia,<br class=\"uk-visible@s\"> your new favorite CMS.<\/h1>\n\n<a class=\"uk-button uk-button-default uk-button-large\" href=\"http:\/\/www.ttags.de\/gasttropia\">Get started<\/a>"}']);

App::db()->insert('@system_widget', ['title' => 'Powered by GasTTropia', 'type' => 'system/text', 'status' => 1, 'data' => '{"content":"<ul class=\"uk-grid-medium uk-flex uk-flex-center\" uk-grid>\n<li><a href=\"https:\/\/github.com\/GasTTropia\" class=\"uk-icon-link\" uk-icon=\"github\" ratio=\"1.25\"><\/a><\/li>\n<\/ul>\n\n<p>Powered by <a href=\"https:\/\/ttags.de\/gasttropia\">GasTTropia<\/a><\/p>"}']);

App::db()->insert('@system_page', [
    'title' => 'Home',
    'content' => "<div class=\"uk-width-3-4@m uk-container\">\n\n<h3 class=\"uk-h1 uk-margin-large-bottom\">Uniting fresh design and clean code<br class=\"uk-visible@s\"> to create beautiful websites.</h3>\n\n<p class=\"uk-width-2-3@m uk-container\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>\n\n</div>",
    'data' => '{"title":true}'
]);

if (App::db()->getUtility()->tableExists('@blog_post')) {
    App::db()->insert('@blog_post', [
        'user_id' => 1,
        'slug' => 'hello-gasttropia',
        'title' => 'Hello GasTTropia',
        'status' => 2,
        'date' => date('Y-m-d H:i:s'),
        'modified' => date('Y-m-d H:i:s'),
        'content' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
        'excerpt' => '',
        'comment_status' => 1,
        'data' => '{"title":null,"markdown":true}'
    ]);
}
