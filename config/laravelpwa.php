<?php

return [
    'name' => 'LaravelPWA',
    'manifest' => [
        'name' => env('APP_NAME', 'My PWA App'),
        'short_name' => env('APP_NAME', 'My PWA App'),
        'start_url' => '/member',
        'background_color' => '#ffffff',
        'theme_color' => '#000000',
        'display' => 'standalone',
        'orientation' => 'any',
        'status_bar' => 'black',
        'icons' => [
            '48x48' => [
                'path' => '/images/icons/icon-48x48.png',
                'purpose' => 'any',
            ],
            '72x72' => [
                'path' => '/images/icons/icon-72x72.png',
                'purpose' => 'any',
            ],
            '96x96' => [
                'path' => '/images/icons/icon-96x96.png',
                'purpose' => 'any',
            ],
            '128x128' => [
                'path' => '/images/icons/icon-128x128.png',
                'purpose' => 'any',
            ],
            '144x144' => [
                'path' => '/images/icons/icon-144x144.png',
                'purpose' => 'any',
            ],
            '152x152' => [
                'path' => '/images/icons/icon-152x152.png',
                'purpose' => 'any',
            ],
            '192x192' => [
                'path' => '/images/icons/icon-192x192.png',
                'purpose' => 'any',
            ],
            '512x512' => [
                'path' => '/images/icons/icon-512x512.png',
                'purpose' => 'any',
            ],
        ],
        'splash' => [
            '440x956_landscape' => '/images/icons/splash_screens/iPhone_16_Pro_Max_landscape.png',
            '402x874_landscape' => '/images/icons/splash_screens/iPhone_16_Pro_landscape.png',
            '430x932_landscape' => '/images/icons/splash_screens/iPhone_16_Plus__iPhone_15_Pro_Max__iPhone_15_Plus__iPhone_14_Pro_Max_landscape.png',
            '393x852_landscape' => '/images/icons/splash_screens/iPhone_16__iPhone_15_Pro__iPhone_15__iPhone_14_Pro_landscape.png',
            '428x926_landscape' => '/images/icons/splash_screens/iPhone_14_Plus__iPhone_13_Pro_Max__iPhone_12_Pro_Max_landscape.png',
            '390x844_landscape' => '/images/icons/splash_screens/iPhone_14__iPhone_13_Pro__iPhone_13__iPhone_12_Pro__iPhone_12_landscape.png',
            '375x812_landscape' => '/images/icons/splash_screens/iPhone_13_mini__iPhone_12_mini__iPhone_11_Pro__iPhone_XS__iPhone_X_landscape.png',
            '414x896_landscape_3x' => '/images/icons/splash_screens/iPhone_11_Pro_Max__iPhone_XS_Max_landscape.png',
            '414x896_landscape_2x' => '/images/icons/splash_screens/iPhone_11__iPhone_XR_landscape.png',
            '414x736_landscape' => '/images/icons/splash_screens/iPhone_8_Plus__iPhone_7_Plus__iPhone_6s_Plus__iPhone_6_Plus_landscape.png',
            '375x667_landscape' => '/images/icons/splash_screens/iPhone_8__iPhone_7__iPhone_6s__iPhone_6__4.7__iPhone_SE_landscape.png',
            '320x568_landscape' => '/images/icons/splash_screens/4__iPhone_SE__iPod_touch_5th_generation_and_later_landscape.png',
            '1032x1376_landscape' => '/images/icons/splash_screens/13__iPad_Pro_M4_landscape.png',
            '1024x1366_landscape' => '/images/icons/splash_screens/12.9__iPad_Pro_landscape.png',
            '834x1210_landscape' => '/images/icons/splash_screens/11__iPad_Pro_M4_landscape.png',
            '834x1194_landscape' => '/images/icons/splash_screens/11__iPad_Pro__10.5__iPad_Pro_landscape.png',
            '820x1180_landscape' => '/images/icons/splash_screens/10.9__iPad_Air_landscape.png',
            '834x1112_landscape' => '/images/icons/splash_screens/10.5__iPad_Air_landscape.png',
            '810x1080_landscape' => '/images/icons/splash_screens/10.2__iPad_landscape.png',
            '768x1024_landscape' => '/images/icons/splash_screens/9.7__iPad_Pro__7.9__iPad_mini__9.7__iPad_Air__9.7__iPad_landscape.png',
            '744x1133_landscape' => '/images/icons/splash_screens/8.3__iPad_Mini_landscape.png',
            '440x956_portrait' => '/images/icons/splash_screens/iPhone_16_Pro_Max_portrait.png',
            '402x874_portrait' => '/images/icons/splash_screens/iPhone_16_Pro_portrait.png',
            '430x932_portrait' => '/images/icons/splash_screens/iPhone_16_Plus__iPhone_15_Pro_Max__iPhone_15_Plus__iPhone_14_Pro_Max_portrait.png',
            '393x852_portrait' => '/images/icons/splash_screens/iPhone_16__iPhone_15_Pro__iPhone_15__iPhone_14_Pro_portrait.png',
            '428x926_portrait' => '/images/icons/splash_screens/iPhone_14_Plus__iPhone_13_Pro_Max__iPhone_12_Pro_Max_portrait.png',
            '390x844_portrait' => '/images/icons/splash_screens/iPhone_14__iPhone_13_Pro__iPhone_13__iPhone_12_Pro__iPhone_12_portrait.png',
            '375x812_portrait' => '/images/icons/splash_screens/iPhone_13_mini__iPhone_12_mini__iPhone_11_Pro__iPhone_XS__iPhone_X_portrait.png',
            '414x896_portrait_3x' => '/images/icons/splash_screens/iPhone_11_Pro_Max__iPhone_XS_Max_portrait.png',
            '414x896_portrait_2x' => '/images/icons/splash_screens/iPhone_11__iPhone_XR_portrait.png',
            '414x736_portrait' => '/images/icons/splash_screens/iPhone_8_Plus__iPhone_7_Plus__iPhone_6s_Plus__iPhone_6_Plus_portrait.png',
            '375x667_portrait' => '/images/icons/splash_screens/iPhone_8__iPhone_7__iPhone_6s__iPhone_6__4.7__iPhone_SE_portrait.png',
            '320x568_portrait' => '/images/icons/splash_screens/4__iPhone_SE__iPod_touch_5th_generation_and_later_portrait.png',
            '1032x1376_portrait' => '/images/icons/splash_screens/13__iPad_Pro_M4_portrait.png',
            '1024x1366_portrait' => '/images/icons/splash_screens/12.9__iPad_Pro_portrait.png',
            '834x1210_portrait' => '/images/icons/splash_screens/11__iPad_Pro_M4_portrait.png',
            '834x1194_portrait' => '/images/icons/splash_screens/11__iPad_Pro__10.5__iPad_Pro_portrait.png',
            '820x1180_portrait' => '/images/icons/splash_screens/10.9__iPad_Air_portrait.png',
            '834x1112_portrait' => '/images/icons/splash_screens/10.5__iPad_Air_portrait.png',
            '810x1080_portrait' => '/images/icons/splash_screens/10.2__iPad_portrait.png',
            '768x1024_portrait' => '/images/icons/splash_screens/9.7__iPad_Pro__7.9__iPad_mini__9.7__iPad_Air__9.7__iPad_portrait.png',
            '744x1133_portrait' => '/images/icons/splash_screens/8.3__iPad_Mini_portrait.png',
        ],
        'shortcuts' => [
            [
                'name' => 'POS',
                'description' => 'POS transaction',
                'url' => '/member/cashier',
                'icons' => [
                    'src' => '/images/icons/icon-72x72.png',
                    'purpose' => 'any',
                ],
            ],
            [
                'name' => 'Product',
                'description' => 'Product List',
                'url' => '/member/products',
            ],
        ],
        'custom' => [],
    ],
];
