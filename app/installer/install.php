<?php

/**
 * Minimal, but safe core installer for GasTTropia.
 * Move the marked TODO sections to the proper packages later.
 */

use Pagekit\Application as App;

/* ------------------------------------------------------------------
 | Helper: insert widget with automatic JSON encoding
 * -----------------------------------------------------------------*/

function insertWidget(string $title, string $type, $nodes, array $payload, int $status = 1): void
{
    $nodesCsv = is_array($nodes) ? implode(',', $nodes) : (string) $nodes;

    App::db()->insert('@system_widget', [
        'title'  => $title,
        'type'   => $type,
        'status' => $status,
        'nodes'  => $nodesCsv,
        'data'   => json_encode(
            $payload,
            JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR
        ),
    ]);
}

/* ------------------------------------------------------------------
 | 1) Basic site config (logo, maintenance, code snippets …)
 * -----------------------------------------------------------------*/
App::config()->set('system/site', App::config('system/site')->merge([
    'frontpage'   => 1,
    'view'        => ['logo' => 'storage/ttags-logo.png'],
    'description' => '',
    'maintenance' => [
        'enabled' => true,
        'logo'    => 'storage/ttags-logo.png',
        'msg'     => ''
    ],
    'icons'       => [
        'favicon' => 'storage/favicon.ico',
        'appicon' => 'storage/apple_touch_icon.png'
    ],
    'code'        => [
        'header' => '',
        'footer' => <<<'HTML'
<script>window.gtranslateSettings = {
  "default_language":"de",
  "native_language_names":true,
  "detect_browser_language":true,
  "languages":["de","en"],
  "wrapper_selector":".gtranslate_wrapper",
  "switcher_horizontal_position":"right",
  "switcher_vertical_position":"top",
  "float_switcher_open_direction":"bottom"
}
$(function(){ $(".gt-current-lang").append($(".gt-current-lang img"));});
</script>
<script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>
HTML
    ],
]));

/* ------------------------------------------------------------------
 | 2) Theme-Preset  – TODO: move to packages/theme-one/scripts.php
 * -----------------------------------------------------------------*/
$themePreset = [
    'logo_contrast' => 'storage/ttags-logo.png',
    '_menus'    => ['main' => 'main', 'offcanvas' => 'main'],
    '_positions' => ['hero' => [1], 'footer' => [2]],
    '_widgets'  => [
        '1' => ['title_hide' => true, 'title_size' => 'uk-card-title', 'alignment' => true],
        '2' => ['title_hide' => true, 'title_size' => 'uk-card-title', 'alignment' => true],
    ],
    '_nodes'    => [
        '1' => [
            'title_hide' => true,
            'alignment'  => true,
            'positions' => [

                'hero' => [
                    'image'                          => 'storage/home-hero.jpg',
                    'image_position'                 => '',
                    'effect'                         => '',
                    'width'                          => '',
                    'height'                         => 'full',
                    'vertical_align'                 => 'middle',
                    'style'                          => 'uk-section-secondary',
                    'size'                           => 'uk-section-large',
                    'padding_remove_top'             => false,
                    'padding_remove_bottom'          => false,
                    'preserve_color'                 => false,
                    'overlap'                        => false,
                    'header_transparent'             => true,
                    'header_preserve_color'          => false,
                    'header_transparent_noplaceholder' => true,
                ],

                'top-a' => [
                    'image'                          => '',
                    'image_position'                 => '',
                    'effect'                         => '',
                    'width'                          => '',
                    'height'                         => '',
                    'vertical_align'                 => 'middle',
                    'style'                          => 'uk-section-muted',
                    'size'                           => '',
                    'padding_remove_top'             => false,
                    'padding_remove_bottom'          => false,
                    'preserve_color'                 => false,
                    'overlap'                        => false,
                    'header_transparent'             => false,
                    'header_preserve_color'          => false,
                    'header_transparent_noplaceholder' => false,
                ],

                'top-c' => [
                    'image'                          => '',
                    'image_position'                 => '',
                    'effect'                         => '',
                    'width'                          => '',
                    'height'                         => '',
                    'vertical_align'                 => 'middle',
                    'style'                          => 'uk-section-muted',
                    'size'                           => '',
                    'padding_remove_top'             => false,
                    'padding_remove_bottom'          => false,
                    'preserve_color'                 => false,
                    'overlap'                        => false,
                    'header_transparent'             => false,
                    'header_preserve_color'          => false,
                    'header_transparent_noplaceholder' => false,
                ],

                'bottom-a' => [
                    'image'                          => '',
                    'image_position'                 => '',
                    'effect'                         => '',
                    'width'                          => '',
                    'height'                         => '',
                    'vertical_align'                 => 'middle',
                    'style'                          => 'uk-section-muted',
                    'size'                           => '',
                    'padding_remove_top'             => false,
                    'padding_remove_bottom'          => false,
                    'preserve_color'                 => false,
                    'overlap'                        => false,
                    'header_transparent'             => false,
                    'header_preserve_color'          => false,
                    'header_transparent_noplaceholder' => false,
                ],

                'bottom-c' => [
                    'image'                          => '',
                    'image_position'                 => '',
                    'effect'                         => '',
                    'width'                          => '',
                    'height'                         => '',
                    'vertical_align'                 => 'middle',
                    'style'                          => 'uk-section-muted',
                    'size'                           => '',
                    'padding_remove_top'             => false,
                    'padding_remove_bottom'          => false,
                    'preserve_color'                 => false,
                    'overlap'                        => false,
                    'header_transparent'             => false,
                    'header_preserve_color'          => false,
                    'header_transparent_noplaceholder' => false,
                ],

                'top-b' => [
                    'image'                          => '',
                    'image_position'                 => '',
                    'effect'                         => '',
                    'width'                          => '',
                    'height'                         => '',
                    'vertical_align'                 => 'middle',
                    'style'                          => 'uk-section-default',
                    'size'                           => '',
                    'padding_remove_top'             => false,
                    'padding_remove_bottom'          => false,
                    'preserve_color'                 => false,
                    'overlap'                        => false,
                    'header_transparent'             => false,
                    'header_preserve_color'          => false,
                    'header_transparent_noplaceholder' => false,
                ],

                'main' => [
                    'image'                          => '',
                    'image_position'                 => '',
                    'effect'                         => '',
                    'width'                          => '',
                    'height'                         => '',
                    'vertical_align'                 => 'middle',
                    'style'                          => 'uk-section-default',
                    'size'                           => '',
                    'padding_remove_top'             => false,
                    'padding_remove_bottom'          => false,
                    'preserve_color'                 => false,
                    'overlap'                        => false,
                    'header_transparent'             => false,
                    'header_preserve_color'          => false,
                    'header_transparent_noplaceholder' => false,
                ],

                'bottom-b' => [
                    'image'                          => '',
                    'image_position'                 => '',
                    'effect'                         => '',
                    'width'                          => '',
                    'height'                         => '',
                    'vertical_align'                 => 'middle',
                    'style'                          => 'uk-section-default',
                    'size'                           => '',
                    'padding_remove_top'             => false,
                    'padding_remove_bottom'          => false,
                    'preserve_color'                 => false,
                    'overlap'                        => false,
                    'header_transparent'             => false,
                    'header_preserve_color'          => false,
                    'header_transparent_noplaceholder' => false,
                ],

            ],
        ],

    ],
];

/* ------------------------------------------------------------------
 | 3) Nodes / menu structure
 * -----------------------------------------------------------------*/
App::db()->insert('@system_node', [
    'priority' => 1,
    'status'   => 1,
    'title'    => 'Home',
    'slug'     => 'home',
    'path'     => '/home',
    'link'     => '@page/1',
    'type'     => 'page',
    'menu'     => 'main',
    'data'     => json_encode(['defaults' => ['id' => 1]], JSON_THROW_ON_ERROR),
]);

App::db()->insert('@system_node', [
    'priority' => 2,
    'status'   => 1,
    'title'    => 'Blog',
    'slug'     => 'blog',
    'path'     => '/blog',
    'link'     => '@blog',
    'type'     => 'blog',
    'menu'     => 'main',
]);

/* ------------------------------------------------------------------
 | 4) Demo widgets  – TODO: replace / move when custom packages exist
 * -----------------------------------------------------------------*/
insertWidget('Feedback', 'system/text', 1, [
    'content' => '<a class="uk-thumbnail" href="https://www.ttags.de/" target="_blank">
        <span class="img-box img-feedback"><img src="storage/shot.png" alt="Vote for free Shot"></span></a>',
]);

insertWidget('Website', 'system/text', 1, [
    'content' => '<a class="uk-thumbnail" href="https://www.ttags.de/" target="_blank">
        <span class="img-box img-website"><img src="storage/ttags-logo.png" alt="TTAGS Logo"></span></a>',
]);

insertWidget('Instagram', 'system/text', 1, [
    'content' => '<a class="uk-thumbnail" href="https://www.instagram.com/ttags.de/" target="_blank">
        <span class="img-box"><img src="/storage/insta.jpg" alt="Instagram"></span></a>',
]);

insertWidget('Öffnungszeiten', 'system/text', 1, [
    'content' => '<table class="uk-table uk-table-small uk-table-divider"><tbody>
        <tr><td>Di. + Mi. + Do. + So.</td><td>12:00 - 22:00</td></tr>
        <tr><td>Fr. + Sa.</td><td>12:00 - 22:30</td></tr></tbody></table>',
]);

/* ------------------------------------------------------------------
 | 5) Roles ➜ Admin user
 * -----------------------------------------------------------------*/
if (App::db()->getUtility()->tableExists('@system_role')) {
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
}

if (App::db()->getUtility()->tableExists('@system_user')) {
    App::db()->insert('@system_user', [
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

/* ------------------------------------------------------------------
 | 6) Demo blog post (optional)
 * -----------------------------------------------------------------*/
if (App::db()->getUtility()->tableExists('@blog_post')) {
    App::db()->insert('@blog_post', [
        'user_id'  => 1,
        'slug'     => 'hello-gasttropia',
        'title'    => 'Hello GasTTropia',
        'status'   => 2,
        'date'     => date('Y-m-d H:i:s'),
        'modified' => date('Y-m-d H:i:s'),
        'content'  => 'Lorem ipsum …',
        'excerpt'  => '',
        'comment_status' => 1,
        'data'     => json_encode(['title' => null, 'markdown' => true], JSON_THROW_ON_ERROR),
    ]);
}
