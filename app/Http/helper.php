<?php
use Illuminate\Support\Facades\File;
use App\Models\Token;
use App\Models\Notification;
use App\Models\Setting;

use Illuminate\Support\Facades\Storage;



if (!function_exists('count__')) {
    function count__()
    {
        $Notifications = Notification::where('to', \auth()->user()->id)->with('user')->get();
        return $Notifications->where('is_read', 'no')->count();
    }
}

    if (!function_exists('notificationHelper')){
        function notificationHelper(){

            $Notifications = Notification::where('to', \auth()->user()->id)->with('user')->get();
            return $Notifications;
        }

}
//    -----------------------------
if (!function_exists('getSettings')) {
     function getSettings()
    {
        $settings = Setting::first();

        return $settings;
    }
}
//------------------------------
if (!function_exists('up')) {
    function up() {
        return new \App\Http\Controllers\Upload;
    }
}

if (!function_exists('aurl')) {
    function aurl($url = null) {
        return url('admin/'.$url);
    }
}

if (!function_exists('admin')) {
    function admin() {
        return auth()->guard('admin');
    }
}
if (!function_exists('market')) {
    function market() {
        return auth()->guard('market');
    }
}
if (!function_exists('client')) {
    function client() {
        return auth()->guard('client');
    }
}

if (!function_exists('active_menu')) {
    function active_menu($link) {
        if (preg_match('/'.$link.'/i', Request::segment(3) )) {
            return ['m-menu__item--open', 'display:block'];
        } else {
            return ['', ''];
        }
    }
}



if (!function_exists('lang')) {
    function lang() {
        if (session()->has('lang')) {
            return session('lang');
        } else {
            session()->put('lang', 'ar');
            return 'ar';
        }
    }
}



if (!function_exists('get_lang')) {
    function get_lang() {
        if (session()->has('lang')) {
            return request()->session()->get('lang');
        }
    }
}

if (!function_exists('direction')) {
    function direction() {
        if (session()->has('lang')) {
            if (session('lang') == 'ar') {
                return 'rtl';
            } else {
                return 'ltr';
            }
        } else {
            return 'ltr';
        }
    }
}

if (!function_exists('datatable_lang')) {
    function datatable_lang() {
        return ['sProcessing'  => trans('admin.sProcessing'),
            'sLengthMenu'        => trans('admin.sLengthMenu'),
            'sZeroRecords'       => trans('admin.sZeroRecords'),
            'sEmptyTable'        => trans('admin.sEmptyTable'),
            'sInfo'              => trans('admin.sInfo'),
            'sInfoEmpty'         => trans('admin.sInfoEmpty'),
            'sInfoFiltered'      => trans('admin.sInfoFiltered'),
            'sInfoPostFix'       => trans('admin.sInfoPostFix'),
            'sSearch'            => trans('admin.sSearch'),
            'sUrl'               => trans('admin.sUrl'),
            'sInfoThousands'     => trans('admin.sInfoThousands'),
            'sLoadingRecords'    => trans('admin.sLoadingRecords'),
            'oPaginate'          => [
                'sFirst'           => trans('admin.sFirst'),
                'sLast'            => trans('admin.sLast'),
                'sNext'            => trans('admin.sNext'),
                'sPrevious'        => trans('admin.sPrevious'),
            ],
            'oAria'            => [
                'sSortAscending'  => trans('admin.sSortAscending'),
                'sSortDescending' => trans('admin.sSortDescending'),
            ],
        ];
    }
}

/////// Validate Helper Functions ///////
if (!function_exists('v_image')) {
    function v_image($ext = null) {
        if ($ext === null) {
            return 'image|mimes:jpg,jpeg,png,gif,bmp';
        } else {
            return 'image|mimes:'.$ext;
        }
    }
}
/////// Validate Helper Functions ///////
/////// Get Days ///////
if (!function_exists('WeakDays')) {
    function WeakDays() {
       $days = array(
         0 => "Saturday",
         1 => "Sunday",
         2 => "Monday",
         3 => "Tuesday",
         4 => "Wednesday",
         5 => "Thursday",
         6 => "Friday",
       );

       return $days;
    }
}
/////// Validate Helper Functions ///////



if (!function_exists('icons')) {
    function get_font_icons()
    {
        $icons = array(
            0 => 'fa fa-500px',
            1 => 'fa fa-address-book',
            2 => 'fa fa-address-book-o',
            3 => 'fa fa-address-card',
            4 => 'fa fa-address-card-o',
            5 => 'fa fa-adjust',
            6 => 'fa fa-adn',
            7 => 'fa fa-align-center',
            8 => 'fa fa-align-justify',
            9 => 'fa fa-align-left',
            10 => 'fa fa-align-right',
            11 => 'fa fa-amazon',
            12 => 'fa fa-ambulance',
            13 => 'fa fa-american-sign-language-interpreting',
            14 => 'fa fa-anchor',
            15 => 'fa fa-android',
            16 => 'fa fa-angellist',
            17 => 'fa fa-angle-double-down',
            18 => 'fa fa-angle-double-left',
            19 => 'fa fa-angle-double-right',
            20 => 'fa fa-angle-double-up',
            21 => 'fa fa-angle-down',
            22 => 'fa fa-angle-left',
            23 => 'fa fa-angle-right',
            24 => 'fa fa-angle-up',
            25 => 'fa fa-apple',
            26 => 'fa fa-archive',
            27 => 'fa fa-area-chart',
            28 => 'fa fa-arrow-circle-down',
            29 => 'fa fa-arrow-circle-left',
            30 => 'fa fa-arrow-circle-o-down',
            31 => 'fa fa-arrow-circle-o-left',
            32 => 'fa fa-arrow-circle-o-right',
            33 => 'fa fa-arrow-circle-o-up',
            34 => 'fa fa-arrow-circle-right',
            35 => 'fa fa-arrow-circle-up',
            36 => 'fa fa-arrow-down',
            37 => 'fa fa-arrow-left',
            38 => 'fa fa-arrow-right',
            39 => 'fa fa-arrow-up',
            40 => 'fa fa-arrows',
            41 => 'fa fa-arrows-alt',
            42 => 'fa fa-arrows-h',
            43 => 'fa fa-arrows-v',
            44 => 'fa fa-asl-interpreting',
            45 => 'fa fa-assistive-listening-systems',
            46 => 'fa fa-asterisk',
            47 => 'fa fa-at',
            48 => 'fa fa-audio-description',
            49 => 'fa fa-automobile',
            50 => 'fa fa-backward',
            51 => 'fa fa-balance-scale',
            52 => 'fa fa-ban',
            53 => 'fa fa-bandcamp',
            54 => 'fa fa-bank',
            55 => 'fa fa-bar-chart',
            56 => 'fa fa-bar-chart-o',
            57 => 'fa fa-barcode',
            58 => 'fa fa-bars',
            59 => 'fa fa-bath',
            60 => 'fa fa-bathtub',
            61 => 'fa fa-battery',
            62 => 'fa fa-battery-0',
            63 => 'fa fa-battery-1',
            64 => 'fa fa-battery-2',
            65 => 'fa fa-battery-3',
            66 => 'fa fa-battery-4',
            67 => 'fa fa-battery-empty',
            68 => 'fa fa-battery-full',
            69 => 'fa fa-battery-half',
            70 => 'fa fa-battery-quarter',
            71 => 'fa fa-battery-three-quarters',
            72 => 'fa fa-bed',
            73 => 'fa fa-beer',
            74 => 'fa fa-behance',
            75 => 'fa fa-behance-square',
            76 => 'fa fa-bell',
            77 => 'fa fa-bell-o',
            78 => 'fa fa-bell-slash',
            79 => 'fa fa-bell-slash-o',
            80 => 'fa fa-bicycle',
            81 => 'fa fa-binoculars',
            82 => 'fa fa-birthday-cake',
            83 => 'fa fa-bitbucket',
            84 => 'fa fa-bitbucket-square',
            85 => 'fa fa-bitcoin',
            86 => 'fa fa-black-tie',
            87 => 'fa fa-blind',
            88 => 'fa fa-bluetooth',
            89 => 'fa fa-bluetooth-b',
            90 => 'fa fa-bold',
            91 => 'fa fa-bolt',
            92 => 'fa fa-bomb',
            93 => 'fa fa-book',
            94 => 'fa fa-bookmark',
            95 => 'fa fa-bookmark-o',
            96 => 'fa fa-braille',
            97 => 'fa fa-briefcase',
            98 => 'fa fa-btc',
            99 => 'fa fa-bug',
            100 => 'fa fa-building',
            101 => 'fa fa-building-o',
            102 => 'fa fa-bullhorn',
            103 => 'fa fa-bullseye',
            104 => 'fa fa-bus',
            105 => 'fa fa-buysellads',
            106 => 'fa fa-cab',
            107 => 'fa fa-calculator',
            108 => 'fa fa-calendar',
            109 => 'fa fa-calendar-check-o',
            110 => 'fa fa-calendar-minus-o',
            111 => 'fa fa-calendar-o',
            112 => 'fa fa-calendar-plus-o',
            113 => 'fa fa-calendar-times-o',
            114 => 'fa fa-camera',
            115 => 'fa fa-camera-retro',
            116 => 'fa fa-car',
            117 => 'fa fa-caret-down',
            118 => 'fa fa-caret-left',
            119 => 'fa fa-caret-right',
            120 => 'fa fa-caret-square-o-down',
            121 => 'fa fa-caret-square-o-left',
            122 => 'fa fa-caret-square-o-right',
            123 => 'fa fa-caret-square-o-up',
            124 => 'fa fa-caret-up',
            125 => 'fa fa-cart-arrow-down',
            126 => 'fa fa-cart-plus',
            127 => 'fa fa-cc',
            128 => 'fa fa-cc-amex',
            129 => 'fa fa-cc-diners-club',
            130 => 'fa fa-cc-discover',
            131 => 'fa fa-cc-jcb',
            132 => 'fa fa-cc-mastercard',
            133 => 'fa fa-cc-paypal',
            134 => 'fa fa-cc-stripe',
            135 => 'fa fa-cc-visa',
            136 => 'fa fa-certificate',
            137 => 'fa fa-chain',
            138 => 'fa fa-chain-broken',
            139 => 'fa fa-check',
            140 => 'fa fa-check-circle',
            141 => 'fa fa-check-circle-o',
            142 => 'fa fa-check-square',
            143 => 'fa fa-check-square-o',
            144 => 'fa fa-chevron-circle-down',
            145 => 'fa fa-chevron-circle-left',
            146 => 'fa fa-chevron-circle-right',
            147 => 'fa fa-chevron-circle-up',
            148 => 'fa fa-chevron-down',
            149 => 'fa fa-chevron-left',
            150 => 'fa fa-chevron-right',
            151 => 'fa fa-chevron-up',
            152 => 'fa fa-child',
            153 => 'fa fa-chrome',
            154 => 'fa fa-circle',
            155 => 'fa fa-circle-o',
            156 => 'fa fa-circle-o-notch',
            157 => 'fa fa-circle-thin',
            158 => 'fa fa-clipboard',
            159 => 'fa fa-clock-o',
            160 => 'fa fa-clone',
            161 => 'fa fa-close',
            162 => 'fa fa-cloud',
            163 => 'fa fa-cloud-download',
            164 => 'fa fa-cloud-upload',
            165 => 'fa fa-cny',
            166 => 'fa fa-code',
            167 => 'fa fa-code-fork',
            168 => 'fa fa-codepen',
            169 => 'fa fa-codiepie',
            170 => 'fa fa-coffee',
            171 => 'fa fa-cog',
            172 => 'fa fa-cogs',
            173 => 'fa fa-columns',
            174 => 'fa fa-comment',
            175 => 'fa fa-comment-o',
            176 => 'fa fa-commenting',
            177 => 'fa fa-commenting-o',
            178 => 'fa fa-comments',
            179 => 'fa fa-comments-o',
            180 => 'fa fa-compass',
            181 => 'fa fa-compress',
            182 => 'fa fa-connectdevelop',
            183 => 'fa fa-contao',
            184 => 'fa fa-copy',
            185 => 'fa fa-copyright',
            186 => 'fa fa-creative-commons',
            187 => 'fa fa-credit-card',
            188 => 'fa fa-credit-card-alt',
            189 => 'fa fa-crop',
            190 => 'fa fa-crosshairs',
            191 => 'fa fa-css3',
            192 => 'fa fa-cube',
            193 => 'fa fa-cubes',
            194 => 'fa fa-cut',
            195 => 'fa fa-cutlery',
            196 => 'fa fa-dashboard',
            197 => 'fa fa-dashcube',
            198 => 'fa fa-database',
            199 => 'fa fa-deaf',
            200 => 'fa fa-deafness',
            201 => 'fa fa-dedent',
            202 => 'fa fa-delicious',
            203 => 'fa fa-desktop',
            204 => 'fa fa-deviantart',
            205 => 'fa fa-diamond',
            206 => 'fa fa-digg',
            207 => 'fa fa-dollar',
            208 => 'fa fa-dot-circle-o',
            209 => 'fa fa-download',
            210 => 'fa fa-dribbble',
            211 => 'fa fa-drivers-license',
            212 => 'fa fa-drivers-license-o',
            213 => 'fa fa-dropbox',
            214 => 'fa fa-drupal',
            215 => 'fa fa-edge',
            216 => 'fa fa-edit',
            217 => 'fa fa-eercast',
            218 => 'fa fa-eject',
            219 => 'fa fa-ellipsis-h',
            220 => 'fa fa-ellipsis-v',
            221 => 'fa fa-empire',
            222 => 'fa fa-envelope',
            223 => 'fa fa-envelope-o',
            224 => 'fa fa-envelope-open',
            225 => 'fa fa-envelope-open-o',
            226 => 'fa fa-envelope-square',
            227 => 'fa fa-envira',
            228 => 'fa fa-eraser',
            229 => 'fa fa-etsy',
            230 => 'fa fa-eur',
            231 => 'fa fa-euro',
            232 => 'fa fa-exchange',
            233 => 'fa fa-exclamation',
            234 => 'fa fa-exclamation-circle',
            235 => 'fa fa-exclamation-triangle',
            236 => 'fa fa-expand',
            237 => 'fa fa-expeditedssl',
            238 => 'fa fa-external-link',
            239 => 'fa fa-external-link-square',
            240 => 'fa fa-eye',
            241 => 'fa fa-eye-slash',
            242 => 'fa fa-eyedropper',
            243 => 'fa fa-fa',
            244 => 'fa fa-facebook',
            245 => 'fa fa-facebook-f',
            246 => 'fa fa-facebook-official',
            247 => 'fa fa-facebook-square',
            248 => 'fa fa-fast-backward',
            249 => 'fa fa-fast-forward',
            250 => 'fa fa-fax',
            251 => 'fa fa-feed',
            252 => 'fa fa-female',
            253 => 'fa fa-fighter-jet',
            254 => 'fa fa-file',
            255 => 'fa fa-file-archive-o',
            256 => 'fa fa-file-audio-o',
            257 => 'fa fa-file-code-o',
            258 => 'fa fa-file-excel-o',
            259 => 'fa fa-file-image-o',
            260 => 'fa fa-file-movie-o',
            261 => 'fa fa-file-o',
            262 => 'fa fa-file-pdf-o',
            263 => 'fa fa-file-photo-o',
            264 => 'fa fa-file-picture-o',
            265 => 'fa fa-file-powerpoint-o',
            266 => 'fa fa-file-sound-o',
            267 => 'fa fa-file-text',
            268 => 'fa fa-file-text-o',
            269 => 'fa fa-file-video-o',
            270 => 'fa fa-file-word-o',
            271 => 'fa fa-file-zip-o',
            272 => 'fa fa-files-o',
            273 => 'fa fa-film',
            274 => 'fa fa-filter',
            275 => 'fa fa-fire',
            276 => 'fa fa-fire-extinguisher',
            277 => 'fa fa-firefox',
            278 => 'fa fa-first-order',
            279 => 'fa fa-flag',
            280 => 'fa fa-flag-checkered',
            281 => 'fa fa-flag-o',
            282 => 'fa fa-flash',
            283 => 'fa fa-flask',
            284 => 'fa fa-flickr',
            285 => 'fa fa-floppy-o',
            286 => 'fa fa-folder',
            287 => 'fa fa-folder-o',
            288 => 'fa fa-folder-open',
            289 => 'fa fa-folder-open-o',
            290 => 'fa fa-font',
            291 => 'fa fa-font-awesome',
            292 => 'fa fa-fonticons',
            293 => 'fa fa-fort-awesome',
            294 => 'fa fa-forumbee',
            295 => 'fa fa-forward',
            296 => 'fa fa-foursquare',
            297 => 'fa fa-free-code-camp',
            298 => 'fa fa-frown-o',
            299 => 'fa fa-futbol-o',
            300 => 'fa fa-gamepad',
            301 => 'fa fa-gavel',
            302 => 'fa fa-gbp',
            303 => 'fa fa-ge',
            304 => 'fa fa-gear',
            305 => 'fa fa-gears',
            306 => 'fa fa-genderless',
            307 => 'fa fa-get-pocket',
            308 => 'fa fa-gg',
            309 => 'fa fa-gg-circle',
            310 => 'fa fa-gift',
            311 => 'fa fa-git',
            312 => 'fa fa-git-square',
            313 => 'fa fa-github',
            314 => 'fa fa-github-alt',
            315 => 'fa fa-github-square',
            316 => 'fa fa-gitlab',
            317 => 'fa fa-gittip',
            318 => 'fa fa-glass',
            319 => 'fa fa-glide',
            320 => 'fa fa-glide-g',
            321 => 'fa fa-globe',
            322 => 'fa fa-google',
            323 => 'fa fa-google-plus',
            324 => 'fa fa-google-plus-circle',
            325 => 'fa fa-google-plus-official',
            326 => 'fa fa-google-plus-square',
            327 => 'fa fa-google-wallet',
            328 => 'fa fa-graduation-cap',
            329 => 'fa fa-gratipay',
            330 => 'fa fa-grav',
            331 => 'fa fa-group',
            332 => 'fa fa-h-square',
            333 => 'fa fa-hacker-news',
            334 => 'fa fa-hand-grab-o',
            335 => 'fa fa-hand-lizard-o',
            336 => 'fa fa-hand-o-down',
            337 => 'fa fa-hand-o-left',
            338 => 'fa fa-hand-o-right',
            339 => 'fa fa-hand-o-up',
            340 => 'fa fa-hand-paper-o',
            341 => 'fa fa-hand-peace-o',
            342 => 'fa fa-hand-pointer-o',
            343 => 'fa fa-hand-rock-o',
            344 => 'fa fa-hand-scissors-o',
            345 => 'fa fa-hand-spock-o',
            346 => 'fa fa-hand-stop-o',
            347 => 'fa fa-handshake-o',
            348 => 'fa fa-hard-of-hearing',
            349 => 'fa fa-hashtag',
            350 => 'fa fa-hdd-o',
            351 => 'fa fa-header',
            352 => 'fa fa-headphones',
            353 => 'fa fa-heart',
            354 => 'fa fa-heart-o',
            355 => 'fa fa-heartbeat',
            356 => 'fa fa-history',
            357 => 'fa fa-home',
            358 => 'fa fa-hospital-o',
            359 => 'fa fa-hotel',
            360 => 'fa fa-hourglass',
            361 => 'fa fa-hourglass-1',
            362 => 'fa fa-hourglass-2',
            363 => 'fa fa-hourglass-3',
            364 => 'fa fa-hourglass-end',
            365 => 'fa fa-hourglass-half',
            366 => 'fa fa-hourglass-o',
            367 => 'fa fa-hourglass-start',
            368 => 'fa fa-houzz',
            369 => 'fa fa-html5',
            370 => 'fa fa-i-cursor',
            371 => 'fa fa-id-badge',
            372 => 'fa fa-id-card',
            373 => 'fa fa-id-card-o',
            374 => 'fa fa-ils',
            375 => 'fa fa-image',
            376 => 'fa fa-imdb',
            377 => 'fa fa-inbox',
            378 => 'fa fa-indent',
            379 => 'fa fa-industry',
            380 => 'fa fa-info',
            381 => 'fa fa-info-circle',
            382 => 'fa fa-inr',
            383 => 'fa fa-instagram',
            384 => 'fa fa-institution',
            385 => 'fa fa-internet-explorer',
            386 => 'fa fa-intersex',
            387 => 'fa fa-ioxhost',
            388 => 'fa fa-italic',
            389 => 'fa fa-joomla',
            390 => 'fa fa-jpy',
            391 => 'fa fa-jsfiddle',
            392 => 'fa fa-key',
            393 => 'fa fa-keyboard-o',
            394 => 'fa fa-krw',
            395 => 'fa fa-language',
            396 => 'fa fa-laptop',
            397 => 'fa fa-lastfm',
            398 => 'fa fa-lastfm-square',
            399 => 'fa fa-leaf',
            400 => 'fa fa-leanpub',
            401 => 'fa fa-legal',
            402 => 'fa fa-lemon-o',
            403 => 'fa fa-level-down',
            404 => 'fa fa-level-up',
            405 => 'fa fa-life-bouy',
            406 => 'fa fa-life-buoy',
            407 => 'fa fa-life-ring',
            408 => 'fa fa-life-saver',
            409 => 'fa fa-lightbulb-o',
            410 => 'fa fa-line-chart',
            411 => 'fa fa-link',
            412 => 'fa fa-linkedin',
            413 => 'fa fa-linkedin-square',
            414 => 'fa fa-linode',
            415 => 'fa fa-linux',
            416 => 'fa fa-list',
            417 => 'fa fa-list-alt',
            418 => 'fa fa-list-ol',
            419 => 'fa fa-list-ul',
            420 => 'fa fa-location-arrow',
            421 => 'fa fa-lock',
            422 => 'fa fa-long-arrow-down',
            423 => 'fa fa-long-arrow-left',
            424 => 'fa fa-long-arrow-right',
            425 => 'fa fa-long-arrow-up',
            426 => 'fa fa-low-vision',
            427 => 'fa fa-magic',
            428 => 'fa fa-magnet',
            429 => 'fa fa-mail-forward',
            430 => 'fa fa-mail-reply',
            431 => 'fa fa-mail-reply-all',
            432 => 'fa fa-male',
            433 => 'fa fa-map',
            434 => 'fa fa-map-marker',
            435 => 'fa fa-map-o',
            436 => 'fa fa-map-pin',
            437 => 'fa fa-map-signs',
            438 => 'fa fa-mars',
            439 => 'fa fa-mars-double',
            440 => 'fa fa-mars-stroke',
            441 => 'fa fa-mars-stroke-h',
            442 => 'fa fa-mars-stroke-v',
            443 => 'fa fa-maxcdn',
            444 => 'fa fa-meanpath',
            445 => 'fa fa-medium',
            446 => 'fa fa-medkit',
            447 => 'fa fa-meetup',
            448 => 'fa fa-meh-o',
            449 => 'fa fa-mercury',
            450 => 'fa fa-microchip',
            451 => 'fa fa-microphone',
            452 => 'fa fa-microphone-slash',
            453 => 'fa fa-minus',
            454 => 'fa fa-minus-circle',
            455 => 'fa fa-minus-square',
            456 => 'fa fa-minus-square-o',
            457 => 'fa fa-mixcloud',
            458 => 'fa fa-mobile',
            459 => 'fa fa-mobile-phone',
            460 => 'fa fa-modx',
            461 => 'fa fa-money',
            462 => 'fa fa-moon-o',
            463 => 'fa fa-mortar-board',
            464 => 'fa fa-motorcycle',
            465 => 'fa fa-mouse-pointer',
            466 => 'fa fa-music',
            467 => 'fa fa-navicon',
            468 => 'fa fa-neuter',
            469 => 'fa fa-newspaper-o',
            470 => 'fa fa-object-group',
            471 => 'fa fa-object-ungroup',
            472 => 'fa fa-odnoklassniki',
            473 => 'fa fa-odnoklassniki-square',
            474 => 'fa fa-opencart',
            475 => 'fa fa-openid',
            476 => 'fa fa-opera',
            477 => 'fa fa-optin-monster',
            478 => 'fa fa-outdent',
            479 => 'fa fa-pagelines',
            480 => 'fa fa-paint-brush',
            481 => 'fa fa-paper-plane',
            482 => 'fa fa-paper-plane-o',
            483 => 'fa fa-paperclip',
            484 => 'fa fa-paragraph',
            485 => 'fa fa-paste',
            486 => 'fa fa-pause',
            487 => 'fa fa-pause-circle',
            488 => 'fa fa-pause-circle-o',
            489 => 'fa fa-paw',
            490 => 'fa fa-paypal',
            491 => 'fa fa-pencil',
            492 => 'fa fa-pencil-square',
            493 => 'fa fa-pencil-square-o',
            494 => 'fa fa-percent',
            495 => 'fa fa-phone',
            496 => 'fa fa-phone-square',
            497 => 'fa fa-photo',
            498 => 'fa fa-picture-o',
            499 => 'fa fa-pie-chart',
            500 => 'fa fa-pied-piper',
            501 => 'fa fa-pied-piper-alt',
            502 => 'fa fa-pied-piper-pp',
            503 => 'fa fa-pinterest',
            504 => 'fa fa-pinterest-p',
            505 => 'fa fa-pinterest-square',
            506 => 'fa fa-plane',
            507 => 'fa fa-play',
            508 => 'fa fa-play-circle',
            509 => 'fa fa-play-circle-o',
            510 => 'fa fa-plug',
            511 => 'fa fa-plus',
            512 => 'fa fa-plus-circle',
            513 => 'fa fa-plus-square',
            514 => 'fa fa-plus-square-o',
            515 => 'fa fa-podcast',
            516 => 'fa fa-power-off',
            517 => 'fa fa-print',
            518 => 'fa fa-product-hunt',
            519 => 'fa fa-puzzle-piece',
            520 => 'fa fa-qq',
            521 => 'fa fa-qrcode',
            522 => 'fa fa-question',
            523 => 'fa fa-question-circle',
            524 => 'fa fa-question-circle-o',
            525 => 'fa fa-quora',
            526 => 'fa fa-quote-left',
            527 => 'fa fa-quote-right',
            528 => 'fa fa-ra',
            529 => 'fa fa-random',
            530 => 'fa fa-ravelry',
            531 => 'fa fa-rebel',
            532 => 'fa fa-recycle',
            533 => 'fa fa-reddit',
            534 => 'fa fa-reddit-alien',
            535 => 'fa fa-reddit-square',
            536 => 'fa fa-refresh',
            537 => 'fa fa-registered',
            538 => 'fa fa-remove',
            539 => 'fa fa-renren',
            540 => 'fa fa-reorder',
            541 => 'fa fa-repeat',
            542 => 'fa fa-reply',
            543 => 'fa fa-reply-all',
            544 => 'fa fa-resistance',
            545 => 'fa fa-retweet',
            546 => 'fa fa-rmb',
            547 => 'fa fa-road',
            548 => 'fa fa-rocket',
            549 => 'fa fa-rotate-left',
            550 => 'fa fa-rotate-right',
            551 => 'fa fa-rouble',
            552 => 'fa fa-rss',
            553 => 'fa fa-rss-square',
            554 => 'fa fa-rub',
            555 => 'fa fa-ruble',
            556 => 'fa fa-rupee',
            557 => 'fa fa-s15',
            558 => 'fa fa-safari',
            559 => 'fa fa-save',
            560 => 'fa fa-scissors',
            561 => 'fa fa-scribd',
            562 => 'fa fa-search',
            563 => 'fa fa-search-minus',
            564 => 'fa fa-search-plus',
            565 => 'fa fa-sellsy',
            566 => 'fa fa-send',
            567 => 'fa fa-send-o',
            568 => 'fa fa-server',
            569 => 'fa fa-share',
            570 => 'fa fa-share-alt',
            571 => 'fa fa-share-alt-square',
            572 => 'fa fa-share-square',
            573 => 'fa fa-share-square-o',
            574 => 'fa fa-shekel',
            575 => 'fa fa-sheqel',
            576 => 'fa fa-shield',
            577 => 'fa fa-ship',
            578 => 'fa fa-shirtsinbulk',
            579 => 'fa fa-shopping-bag',
            580 => 'fa fa-shopping-basket',
            581 => 'fa fa-shopping-cart',
            582 => 'fa fa-shower',
            583 => 'fa fa-sign-in',
            584 => 'fa fa-sign-language',
            585 => 'fa fa-sign-out',
            586 => 'fa fa-signal',
            587 => 'fa fa-signing',
            588 => 'fa fa-simplybuilt',
            589 => 'fa fa-sitemap',
            590 => 'fa fa-skyatlas',
            591 => 'fa fa-skype',
            592 => 'fa fa-slack',
            593 => 'fa fa-sliders',
            594 => 'fa fa-slideshare',
            595 => 'fa fa-smile-o',
            596 => 'fa fa-snapchat',
            597 => 'fa fa-snapchat-ghost',
            598 => 'fa fa-snapchat-square',
            599 => 'fa fa-snowflake-o',
            600 => 'fa fa-soccer-ball-o',
            601 => 'fa fa-sort',
            602 => 'fa fa-sort-alpha-asc',
            603 => 'fa fa-sort-alpha-desc',
            604 => 'fa fa-sort-amount-asc',
            605 => 'fa fa-sort-amount-desc',
            606 => 'fa fa-sort-asc',
            607 => 'fa fa-sort-desc',
            608 => 'fa fa-sort-down',
            609 => 'fa fa-sort-numeric-asc',
            610 => 'fa fa-sort-numeric-desc',
            611 => 'fa fa-sort-up',
            612 => 'fa fa-soundcloud',
            613 => 'fa fa-space-shuttle',
            614 => 'fa fa-spinner',
            615 => 'fa fa-spoon',
            616 => 'fa fa-spotify',
            617 => 'fa fa-square',
            618 => 'fa fa-square-o',
            619 => 'fa fa-stack-exchange',
            620 => 'fa fa-stack-overflow',
            621 => 'fa fa-star',
            622 => 'fa fa-star-half',
            623 => 'fa fa-star-half-empty',
            624 => 'fa fa-star-half-full',
            625 => 'fa fa-star-half-o',
            626 => 'fa fa-star-o',
            627 => 'fa fa-steam',
            628 => 'fa fa-steam-square',
            629 => 'fa fa-step-backward',
            630 => 'fa fa-step-forward',
            631 => 'fa fa-stethoscope',
            632 => 'fa fa-sticky-note',
            633 => 'fa fa-sticky-note-o',
            634 => 'fa fa-stop',
            635 => 'fa fa-stop-circle',
            636 => 'fa fa-stop-circle-o',
            637 => 'fa fa-street-view',
            638 => 'fa fa-strikethrough',
            639 => 'fa fa-stumbleupon',
            640 => 'fa fa-stumbleupon-circle',
            641 => 'fa fa-subscript',
            642 => 'fa fa-subway',
            643 => 'fa fa-suitcase',
            644 => 'fa fa-sun-o',
            645 => 'fa fa-superpowers',
            646 => 'fa fa-superscript',
            647 => 'fa fa-support',
            648 => 'fa fa-table',
            649 => 'fa fa-tablet',
            650 => 'fa fa-tachometer',
            651 => 'fa fa-tag',
            652 => 'fa fa-tags',
            653 => 'fa fa-tasks',
            654 => 'fa fa-taxi',
            655 => 'fa fa-telegram',
            656 => 'fa fa-television',
            657 => 'fa fa-tencent-weibo',
            658 => 'fa fa-terminal',
            659 => 'fa fa-text-height',
            660 => 'fa fa-text-width',
            661 => 'fa fa-th',
            662 => 'fa fa-th-large',
            663 => 'fa fa-th-list',
            664 => 'fa fa-themeisle',
            665 => 'fa fa-thermometer',
            666 => 'fa fa-thermometer-0',
            667 => 'fa fa-thermometer-1',
            668 => 'fa fa-thermometer-2',
            669 => 'fa fa-thermometer-3',
            670 => 'fa fa-thermometer-4',
            671 => 'fa fa-thermometer-empty',
            672 => 'fa fa-thermometer-full',
            673 => 'fa fa-thermometer-half',
            674 => 'fa fa-thermometer-quarter',
            675 => 'fa fa-thermometer-three-quarters',
            676 => 'fa fa-thumb-tack',
            677 => 'fa fa-thumbs-down',
            678 => 'fa fa-thumbs-o-down',
            679 => 'fa fa-thumbs-o-up',
            680 => 'fa fa-thumbs-up',
            681 => 'fa fa-ticket',
            682 => 'fa fa-times',
            683 => 'fa fa-times-circle',
            684 => 'fa fa-times-circle-o',
            685 => 'fa fa-times-rectangle',
            686 => 'fa fa-times-rectangle-o',
            687 => 'fa fa-tint',
            688 => 'fa fa-toggle-down',
            689 => 'fa fa-toggle-left',
            690 => 'fa fa-toggle-off',
            691 => 'fa fa-toggle-on',
            692 => 'fa fa-toggle-right',
            693 => 'fa fa-toggle-up',
            694 => 'fa fa-trademark',
            695 => 'fa fa-train',
            696 => 'fa fa-transgender',
            697 => 'fa fa-transgender-alt',
            698 => 'fa fa-trash',
            699 => 'fa fa-trash-o',
            700 => 'fa fa-tree',
            701 => 'fa fa-trello',
            702 => 'fa fa-tripadvisor',
            703 => 'fa fa-trophy',
            704 => 'fa fa-truck',
            705 => 'fa fa-try',
            706 => 'fa fa-tty',
            707 => 'fa fa-tumblr',
            708 => 'fa fa-tumblr-square',
            709 => 'fa fa-turkish-lira',
            710 => 'fa fa-tv',
            711 => 'fa fa-twitch',
            712 => 'fa fa-twitter',
            713 => 'fa fa-twitter-square',
            714 => 'fa fa-umbrella',
            715 => 'fa fa-underline',
            716 => 'fa fa-undo',
            717 => 'fa fa-universal-access',
            718 => 'fa fa-university',
            719 => 'fa fa-unlink',
            720 => 'fa fa-unlock',
            721 => 'fa fa-unlock-alt',
            722 => 'fa fa-unsorted',
            723 => 'fa fa-upload',
            724 => 'fa fa-usb',
            725 => 'fa fa-usd',
            726 => 'fa fa-user',
            727 => 'fa fa-user-circle',
            728 => 'fa fa-user-circle-o',
            729 => 'fa fa-user-md',
            730 => 'fa fa-user-o',
            731 => 'fa fa-user-plus',
            732 => 'fa fa-user-secret',
            733 => 'fa fa-user-times',
            734 => 'fa fa-users',
            735 => 'fa fa-vcard',
            736 => 'fa fa-vcard-o',
            737 => 'fa fa-venus',
            738 => 'fa fa-venus-double',
            739 => 'fa fa-venus-mars',
            740 => 'fa fa-viacoin',
            741 => 'fa fa-viadeo',
            742 => 'fa fa-viadeo-square',
            743 => 'fa fa-video-camera',
            744 => 'fa fa-vimeo',
            745 => 'fa fa-vimeo-square',
            746 => 'fa fa-vine',
            747 => 'fa fa-vk',
            748 => 'fa fa-volume-control-phone',
            749 => 'fa fa-volume-down',
            750 => 'fa fa-volume-off',
            751 => 'fa fa-volume-up',
            752 => 'fa fa-warning',
            753 => 'fa fa-wechat',
            754 => 'fa fa-weibo',
            755 => 'fa fa-weixin',
            756 => 'fa fa-whatsapp',
            757 => 'fa fa-wheelchair',
            758 => 'fa fa-wheelchair-alt',
            759 => 'fa fa-wifi',
            760 => 'fa fa-wikipedia-w',
            761 => 'fa fa-window-close',
            762 => 'fa fa-window-close-o',
            763 => 'fa fa-window-maximize',
            764 => 'fa fa-window-minimize',
            765 => 'fa fa-window-restore',
            766 => 'fa fa-windows',
            767 => 'fa fa-won',
            768 => 'fa fa-wordpress',
            769 => 'fa fa-wpbeginner',
            770 => 'fa fa-wpexplorer',
            771 => 'fa fa-wpforms',
            772 => 'fa fa-wrench',
            773 => 'fa fa-xing',
            774 => 'fa fa-xing-square',
            775 => 'fa fa-y-combinator',
            776 => 'fa fa-y-combinator-square',
            777 => 'fa fa-yahoo',
            778 => 'fa fa-yc',
            779 => 'fa fa-yc-square',
            780 => 'fa fa-yelp',
            781 => 'fa fa-yen',
            782 => 'fa fa-yoast',
            783 => 'fa fa-youtube',
            784 => 'fa fa-youtube-play',
            785 => 'fa fa-youtube-square',
        );
        return $icons;
    }
}
if (!function_exists('phone_code')) {
    function phone_code()
    {
        $phone=   array(
            '+44' => 'UK (+44)',
            '+1' => 'USA (+1)',
            '+213' => 'Algeria (+213)',
            '+376' => 'Andorra (+376)',
            '+244' => 'Angola (+244)',
            '+1264' => 'Anguilla (+1264)',
            '+1268' => 'Antigua & Barbuda (+1268)',
            '+54' => 'Argentina (+54)',
            '+374' => 'Armenia (+374)',
            '+297' => 'Aruba (+297)',
            '+61' => 'Australia (+61)',
            '+43' => 'Austria (+43)',
            '+994' => 'Azerbaijan (+994)',
            '+1242' => 'Bahamas (+1242)',
            '+973' => 'Bahrain (+973)',
            '+880' => 'Bangladesh (+880)',
            '+1246' => 'Barbados (+1246)',
            '+375' => 'Belarus (+375)',
            '+32' => 'Belgium (+32)',
            '+501' => 'Belize (+501)',
            '+229' => 'Benin (+229)',
            '+1441' => 'Bermuda (+1441)',
            '+975' => 'Bhutan (+975)',
            '+591' => 'Bolivia (+591)',
            '+387' => 'Bosnia Herzegovina (+387)',
            '+267' => 'Botswana (+267)',
            '+55' => 'Brazil (+55)',
            '+673' => 'Brunei (+673)',
            '+359' => 'Bulgaria (+359)',
            '+226' => 'Burkina Faso (+226)',
            '+257' => 'Burundi (+257)',
            '+855' => 'Cambodia (+855)',
            '+237' => 'Cameroon (+237)',
            '+1' => 'Canada (+1)',
            '+238' => 'Cape Verde Islands (+238)',
            '+1345' => 'Cayman Islands (+1345)',
            '+236' => 'Central African Republic (+236)',
            '+56' => 'Chile (+56)',
            '+86' => 'China (+86)',
            '+57' => 'Colombia (+57)',
            '+269' => 'Comoros (+269)',
            '+242' => 'Congo (+242)',
            '+682' => 'Cook Islands (+682)',
            '+506' => 'Costa Rica (+506)',
            '+385' => 'Croatia (+385)',
            '+53' => 'Cuba (+53)',
            '+90392' => 'Cyprus North (+90392)',
            '+357' => 'Cyprus South (+357)',
            '+42' => 'Czech Republic (+42)',
            '+45' => 'Denmark (+45)',
            '+253' => 'Djibouti (+253)',
            '+1809' => 'Dominica (+1809)',
            '+1809' => 'Dominican Republic (+1809)',
            '+593' => 'Ecuador (+593)',
            '+20' => 'Egypt (+20)',
            '+503' => 'El Salvador (+503)',
            '+240' => 'Equatorial Guinea (+240)',
            '+291' => 'Eritrea (+291)',
            '+372' => 'Estonia (+372)',
            '+251' => 'Ethiopia (+251)',
            '+500' => 'Falkland Islands (+500)',
            '+298' => 'Faroe Islands (+298)',
            '+679' => 'Fiji (+679)',
            '+358' => 'Finland (+358)',
            '+33' => 'France (+33)',
            '+594' => 'French Guiana (+594)',
            '+689' => 'French Polynesia (+689)',
            '+241' => 'Gabon (+241)',
            '+220' => 'Gambia (+220)',
            '+7880' => 'Georgia (+7880)',
            '+49' => 'Germany (+49)',
            '+233' => 'Ghana (+233)',
            '+350' => 'Gibraltar (+350)',
            '+30' => 'Greece (+30)',
            '+299' => 'Greenland (+299)',
            '+1473' => 'Grenada (+1473)',
            '+590' => 'Guadeloupe (+590)',
            '+671' => 'Guam (+671)',
            '+502' => 'Guatemala (+502)',
            '+224' => 'Guinea (+224)',
            '+245' => 'Guinea - Bissau (+245)',
            '+592' => 'Guyana (+592)',
            '+509' => 'Haiti (+509)',
            '+504' => 'Honduras (+504)',
            '+852' => 'Hong Kong (+852)',
            '+36' => 'Hungary (+36)',
            '+354' => 'Iceland (+354)',
            '+91' => 'India (+91)',
            '+62' => 'Indonesia (+62)',
            '+98' => 'Iran (+98)',
            '+964' => 'Iraq (+964)',
            '+353' => 'Ireland (+353)',
            '+972' => 'Israel (+972)',
            '+39' => 'Italy (+39)',
            '+1876' => 'Jamaica (+1876)',
            '+81' => 'Japan (+81)',
            '+962' => 'Jordan (+962)',
            '+7' => 'Kazakhstan (+7)',
            '+254' => 'Kenya (+254)',
            '+686' => 'Kiribati (+686)',
            '+850' => 'Korea North (+850)',
            '+82' => 'Korea South (+82)',
            '+965' => 'Kuwait (+965)',
            '+996' => 'Kyrgyzstan (+996)',
            '+856' => 'Laos (+856)',
            '+371' => 'Latvia (+371)',
            '+961' => 'Lebanon (+961)',
            '+266' => 'Lesotho (+266)',
            '+231' => 'Liberia (+231)',
            '+218' => 'Libya (+218)',
            '+417' => 'Liechtenstein (+417)',
            '+370' => 'Lithuania (+370)',
            '+352' => 'Luxembourg (+352)',
            '+853' => 'Macao (+853)',
            '+389' => 'Macedonia (+389)',
            '+261' => 'Madagascar (+261)',
            '+265' => 'Malawi (+265)',
            '+60' => 'Malaysia (+60)',
            '+960' => 'Maldives (+960)',
            '+223' => 'Mali (+223)',
            '+356' => 'Malta (+356)',
            '+692' => 'Marshall Islands (+692)',
            '+596' => 'Martinique (+596)',
            '+222' => 'Mauritania (+222)',
            '+269' => 'Mayotte (+269)',
            '+52' => 'Mexico (+52)',
            '+691' => 'Micronesia (+691)',
            '+373' => 'Moldova (+373)',
            '+377' => 'Monaco (+377)',
            '+976' => 'Mongolia (+976)',
            '+1664' => 'Montserrat (+1664)',
            '+212' => 'Morocco (+212)',
            '+258' => 'Mozambique (+258)',
            '+95' => 'Myanmar (+95)',
            '+264' => 'Namibia (+264)',
            '+674' => 'Nauru (+674)',
            '+977' => 'Nepal (+977)',
            '+31' => 'Netherlands (+31)',
            '+687' => 'New Caledonia (+687)',
            '+64' => 'New Zealand (+64)',
            '+505' => 'Nicaragua (+505)',
            '+227' => 'Niger (+227)',
            '+234' => 'Nigeria (+234)',
            '+683' => 'Niue (+683)',
            '+672' => 'Norfolk Islands (+672)',
            '+670' => 'Northern Marianas (+670)',
            '+47' => 'Norway (+47)',
            '+968' => 'Oman (+968)',
            '+680' => 'Palau (+680)',
            '+507' => 'Panama (+507)',
            '+675' => 'Papua New Guinea (+675)',
            '+595' => 'Paraguay (+595)',
            '+51' => 'Peru (+51)',
            '+63' => 'Philippines (+63)',
            '+48' => 'Poland (+48)',
            '+351' => 'Portugal (+351)',
            '+1787' => 'Puerto Rico (+1787)',
            '+974' => 'Qatar (+974)',
            '+262' => 'Reunion (+262)',
            '+40' => 'Romania (+40)',
            '+7' => 'Russia (+7)',
            '+250' => 'Rwanda (+250)',
            '+378' => 'San Marino (+378)',
            '+239' => 'Sao Tome & Principe (+239)',
            '+966' => 'Saudi Arabia (+966)',
            '+221' => 'Senegal (+221)',
            '+381' => 'Serbia (+381)',
            '+248' => 'Seychelles (+248)',
            '+232' => 'Sierra Leone (+232)',
            '+65' => 'Singapore (+65)',
            '+421' => 'Slovak Republic (+421)',
            '+386' => 'Slovenia (+386)',
            '+677' => 'Solomon Islands (+677)',
            '+252' => 'Somalia (+252)',
            '+27' => 'South Africa (+27)',
            '+34' => 'Spain (+34)',
            '+94' => 'Sri Lanka (+94)',
            '+290' => 'St. Helena (+290)',
            '+1869' => 'St. Kitts (+1869)',
            '+1758' => 'St. Lucia (+1758)',
            '+249' => 'Sudan (+249)',
            '+597' => 'Suriname (+597)',
            '+268' => 'Swaziland (+268)',
            '+46' => 'Sweden (+46)',
            '+41' => 'Switzerland (+41)',
            '+963' => 'Syria (+963)',
            '+886' => 'Taiwan (+886)',
            '+7' => 'Tajikstan (+7)',
            '+66' => 'Thailand (+66)',
            '+228' => 'Togo (+228)',
            '+676' => 'Tonga (+676)',
            '+1868' => 'Trinidad & Tobago (+1868)',
            '+216' => 'Tunisia (+216)',
            '+90' => 'Turkey (+90)',
            '+7' => 'Turkmenistan (+7)',
            '+993' => 'Turkmenistan (+993)',
            '+1649' => 'Turks & Caicos Islands (+1649)',
            '+688' => 'Tuvalu (+688)',
            '+256' => 'Uganda (+256)',
            '+380' => 'Ukraine (+380)',
            '+971' => 'United Arab Emirates (+971)',
            '+598' => 'Uruguay (+598)',
            '+7' => 'Uzbekistan (+7)',
            '+678' => 'Vanuatu (+678)',
            '+379' => 'Vatican City (+379)',
            '+58' => 'Venezuela (+58)',
            '+84' => 'Vietnam (+84)',
            '+84' => 'Virgin Islands - British (+1284)',
            '+84' => 'Virgin Islands - US (+1340)',
            '+681' => 'Wallis & Futuna (+681)',
            '+969' => 'Yemen (North)(+969)',
            '+967' => 'Yemen (South)(+967)',
            '+260' => 'Zambia (+260)',
            '+263' => 'Zimbabwe (+263)',
        );
        return $phone;
    }
}


if (!function_exists('all_country')) {
    function all_country()
    {
        $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
        return $countries;
    }
}
if (!function_exists('get_file')) {
    function get_file($image) {
        return $image!=null?asset($image):asset('site/img/logo.png');
    }
}

if (!function_exists('delete_file')) {
    function delete_file($file) {
        if (is_array($file)){
            if (in_array('site/img/logo.png',$file)){
                $file = array_diff($file,['site/img/logo.png']);
            }
                   return File::delete($file);
        }else{
            if ($file != 'site/img/logo.png'){
                return File::delete($file);
            }
        }

    }
}
if (!function_exists('Export_Database')) {
    function Export_Database($host,$user,$pass,$name,  $tables=false, $backup_name=false )
    {
//        /////////////////////////////////////////////////////////////////////////////////
//        //ENTER THE RELEVANT INFO BELOW
//        $mysqlUserName      = "root";
//        $mysqlPassword      = "";
//        $mysqlHostName      = "localhost";
//        $DbName             = "hype";
//        $backup_name        = "mybackup.sql";
//        $tables             = "users";
//
//        //or add 5th parameter(array) of specific tables:    array("mytable1","mytable2","mytable3") for multiple tables
//
//        return Export_Database($mysqlHostName,$mysqlUserName,$mysqlPassword,$DbName,  $tables=false, $backup_name=false );
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        $mysqli = new \mysqli($host,$user,$pass,$name);
        $mysqli->select_db($name);
        $mysqli->query("SET NAMES 'utf8'");

        $queryTables    = $mysqli->query('SHOW TABLES');
        while($row = $queryTables->fetch_row())
        {
            $target_tables[] = $row[0];
        }
        if($tables !== false)
        {
            $target_tables = array_intersect( $target_tables, $tables);
        }
        foreach($target_tables as $table)
        {
            $result         =   $mysqli->query('SELECT * FROM '.$table);
            $fields_amount  =   $result->field_count;
            $rows_num=$mysqli->affected_rows;
            $res            =   $mysqli->query('SHOW CREATE TABLE '.$table);
            $TableMLine     =   $res->fetch_row();
            $content        = (!isset($content) ?  '' : $content) . "\n\n".$TableMLine[1].";\n\n";

            for ($i = 0, $st_counter = 0; $i < $fields_amount;   $i++, $st_counter=0)
            {
                while($row = $result->fetch_row())
                { //when started (and every after 100 command cycle):
                    if ($st_counter%100 == 0 || $st_counter == 0 )
                    {
                        $content .= "\nINSERT INTO ".$table." VALUES";
                    }
                    $content .= "\n(";
                    for($j=0; $j<$fields_amount; $j++)
                    {
                        $row[$j] = str_replace("\n","\\n", addslashes($row[$j]) );
                        if (isset($row[$j]))
                        {
                            $content .= '"'.$row[$j].'"' ;
                        }
                        else
                        {
                            $content .= '""';
                        }
                        if ($j<($fields_amount-1))
                        {
                            $content.= ',';
                        }
                    }
                    $content .=")";
                    //every after 100 command cycle [or at last line] ....p.s. but should be inserted 1 cycle eariler
                    if ( (($st_counter+1)%100==0 && $st_counter!=0) || $st_counter+1==$rows_num)
                    {
                        $content .= ";";
                    }
                    else
                    {
                        $content .= ",";
                    }
                    $st_counter=$st_counter+1;
                }
            } $content .="\n\n\n";
        }
        //$backup_name = $backup_name ? $backup_name : $name."___(".date('H-i-s')."_".date('d-m-Y').")__rand".rand(1,11111111).".sql";
        $backup_name = $backup_name ? $backup_name : $name.".sql";
        header('Content-Type: application/octet-stream');
        header("Content-Transfer-Encoding: Binary");
        header("Content-disposition: attachment; filename=\"".$backup_name."\"");
        return $content;

        exit;
    }

}

if (!function_exists('store_file')) {
    function store_file($request,$file_name,$path) {
        return 'storage/'.$request->file($file_name)->store($path,'public');
    }
}

if (!function_exists('trans_sql')) {
    function trans_sql($title,$name) {
        $name = $name.'_'.app('lang');
        return $title->$name;
    }
}

if (!function_exists('get_youtube_video_id')) {
    function get_youtube_video_id($link) {
        if (!is_null($link)) {
            $video_id = explode("?v=", $link); // For videos like http://www.youtube.com/watch?v=...
            if (empty($video_id[1]))
                $video_id = explode("/v/", $link); // For videos like http://www.youtube.com/watch/v/..
            $video_id = explode("&", $video_id[1]); // Deleting any other params
            return $video_id[0];
        } else {
            return '5cRODRjUBdg';
        }
    }
}

if (!function_exists('store_tostar')) {
    function store_tostar($words) {
        if (!is_null($words)) {
            return array(
                'message' => $words,
                'alert-type' => 'success'
            );
        }
    }
}

if (!function_exists('edit_tostar')) {
    function edit_tostar($words) {
        if (!is_null($words)) {
            return array(
                'message' => $words,
                'alert-type' => 'warning'
            );
        }
    }
}

if (!function_exists('delete_tostar')) {
    function delete_tostar($words) {
        if (!is_null($words)) {
            return array(
                'message' => $words,
                'alert-type' => 'info'
            );
        }
    }
}

if (!function_exists('error_tostar')) {
    function error_tostar($words) {
        if (!is_null($words)) {
            return array(
                'message' => $words,
                'alert-type' => 'error'
            );
        }
    }
}

if (!function_exists('aroute')) {
    function aroute($url) {
        if (!is_null($url)) {
            return "admin/$url";
        }
    }
}
if (!function_exists('check_delete')) {
    function check_delete($request) {
        if (!is_null($request)) {
            return explode(",", $request->id);;
        }
    }
}


if (!function_exists('id')) {
    function id($id) {
        return "<input name='id' hidden value='$id->id'>";
    }
}

if (!function_exists('can')) {
    function can($details) {
        if (!admin()->user()->can($details)){
            $notification = error_tostar('ليس لديك الصلاحيات للدخول هنا');
            return back()->with($notification);
        }else{

        }
    }
}






if (!function_exists('alert')) {
    function alert() {
        if(session()->has('alert')){
            if (session()->get("type") == "success"){
                return  '<div class="alert" style="background-color: #3f8665">
                        <div class="line-success"></div>
              <span class="closebtn" >&times;</span>
              <strong style="color:#fff;">'.session()->get("message").'</strong>
          </div>';
            }elseif(session()->get("type") == "info"){
                return  '<div class="alert" style="background-color: #2196F3">
                        <div class="line-info"></div>
              <span class="closebtn">&times;</span>
              <strong style="color:#fff;">'.session()->get("message").'</strong>
          </div>';
            }elseif(session()->get("type") == "error"){
                return  '<div class="alert" style="background-color: #f44336">
                        <div class="line-error"></div>
              <span class="closebtn" >&times;</span>
              <strong style="color:#fff;">'.session()->get("message").'</strong>
          </div>';
            }elseif(session()->get("type") == "warning"){
                return  '<div class="alert" style="background-color: #ff9800">
                        <div class="line-warning"></div>
              <span class="closebtn">&times;</span>
              <strong style="color:#fff;">'.session()->get("message").'</strong>
          </div>';
            }
        }


    }
}


if (!function_exists('notification')) {
    function notification($user_id,$deal_id,$value,$deal,$discribe) {

        if ($discribe == 'deal'){
            $message = "تم إضافة $value جنية إلى حسابك من رصيد $deal .";
        }

        $new=\App\Models\Notifications::create([
            'value'=>$value,
            'user_id'=>$user_id,
            'deal_id'=>$deal_id,
            'details'=>$message,
            'date'=>strtotime(date('Y-m-d')),
        ]);
        $url = 'https://fcm.googleapis.com/fcm/send';

        $token=Token::where('user_id', $user_id)->pluck('token')->toArray();
        $fields = array (
            'registration_ids' => $token,
            'data' =>[
                'user_id'=>$user_id,
                'title'=>'إشعار جديد',
                'body'=>$new->details,
            ]
        );
        $fields = json_encode($fields);
        $headers = array (
            'Authorization: key=' . "AAAAH2nNRY0:APA91bHwEolXlokJx0r1SZ5MNYtRbAjc3fKRbzGivSYfJ1dyBROUxPouoJWtQW35Af0p--qA548wdcyBGObm8yjqFN1G4R1h8jZbNt57qVqaYMOZI_GenhZZVCR5sl8Ri9ytZQVLNCxK",
            'Content-Type: application/json'
        );

        $ch = curl_init ();
        curl_setopt ( $ch, CURLOPT_URL, $url );
        curl_setopt ( $ch, CURLOPT_POST, true );
        curl_setopt ( $ch, CURLOPT_HTTPHEADER, $headers );
        curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt ( $ch, CURLOPT_POSTFIELDS, $fields );

        $result = curl_exec ( $ch );
        //   echo $result;
        curl_close ( $ch );
        return $result;
    }
}


// -------------------------------  Upload Image -------------------------------


if (!function_exists('upload_image')) {
    function upload_image($path_='', $file_name='', $delete_file=''){
        // delete old file
        $delete_file!='' ? Storage::delete($delete_file) : '';
        $path = request()->file($file_name)->store($path_);
        return $path;
    }
}

if (!function_exists('delete_image')) {
    function delete_image($img){
        // delete old file
        $img!='' ? Storage::delete($img) : '';
    }
}


//===================  toaster ===========================
if (!function_exists('notifications')) {
    function notifications($message,$alert_type) {
        $notification=array(
            'message' => $message,
            'alert-type' => $alert_type
        );
        return $notification;
    }
}

if (!function_exists('right')) {
    function right() {

        return app('lang') == 'en' ?'left':'right';
    }
}





