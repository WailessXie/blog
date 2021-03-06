<?php

return [

    // Mail Notification
    'mail_notification' => env('MAIL_NOTIFICATION') ?: false,

    // Super Admin
    'super_admin' => env('APP_SUPER_ADMIN') ?: 1,

    // Admin Credentials
    'admin_name' => env('ADMIN_NAME') ?: 'admin',
    'admin_email' => env('ADMIN_EMAIL') ?: 'admin@pigjian.com',
    'admin_password' => env('ADMIN_PASSWORD') ?: 'admin',

    // Default Avatar
    'default_avatar' => env('DEFAULT_AVATAR') ?: '/images/default.png',

    // Default Icon
    'default_icon' => env('DEFAULT_ICON') ?: '/images/favicon.ico',

    // Color Theme
    'color_theme' => 'gray-theme',

    // Meta
    'meta' => [
        'keywords' => 'blog,pigjian,laravel,vuejs',
        'description' => 'Nothing is impossible in Wailess Blog'
    ],

    // Social Share
    'social_share' => [
        'article_share' => env('ARTICLE_SHARE') ?: true,
        'discussion_share' => env('DISCUSSION_SHARE') ?: true,
        'sites' => env('SOCIAL_SHARE_SITES') ?: 'weibo',
        'mobile_sites' => env('SOCIAL_SHARE_MOBILE_SITES') ?: 'weibo,qq,wechat',
    ],

    // Google Analytics
    'google' => [
        'id' => env('GOOGLE_ANALYTICS_ID', 'Google-Analytics-ID'),
        'open' => env('GOOGLE_OPEN') ?: false
    ],

    'static' => env('STATIC'),

    // Article Page
    'article' => [
        'title' => 'Nothing is impossible.',
        'description' => '',
        'number' => 15,
        'sort' => 'desc',
        'sortColumn' => 'published_at',
    ],

    // Discussion Page
    'discussion' => [
        'number' => 20,
        'sort' => 'desc',
        'sortColumn' => 'created_at',
    ],

    // Footer
    'footer' => [
        'github' => [
            'open' => true,
            'url' => 'https://github.com/WailessXie',
        ],
        'weibo' => [
            'open' => true,
            'url' => 'https://weibo.com/xiebiaoye'
        ],
        'meta' => '© Wailess Blog 2019. Powered By Wailess Xie<div><a target="_blank" href="'.env('BEIAN_URL').'" style="display:inline-block;font-size: 0.9rem"><img src="https://lychee.wailess.cn/uploads/big/fa0030b438ec9753e192054b8e91550d.png" style="height: 0.9rem"/><span style="margin: 0px 0px 0px 5px;">'.env('BEIAN_NO').'</span></a><a class="ml-1" target="_blank" style="font-size: 0.9rem" href="http://beian.miit.gov.cn/"><span>'.env('ICPNO').'</span></a></div>',
    ],

    'license' => 'Powered By Wailess Xie.<br/>This article is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">Creative Commons Attribution-NonCommercial 4.0 International License</a>.',

];
