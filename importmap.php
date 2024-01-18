<?php

/**
 * Returns the importmap for this application.
 *
 * - "path" is a path inside the asset mapper system. Use the
 *     "debug:asset-map" command to see the full list of paths.
 *
 * - "entrypoint" (JavaScript only) set to true for any module that will
 *     be used as an "entrypoint" (and passed to the importmap() Twig function).
 *
 * The "importmap:require" command can be used to add new entries to this file.
 *
 * This file has been auto-generated by the importmap commands.
 */
return [
    'app' => [
        'path' => './assets/app.js',
        'entrypoint' => true,
    ],
    '@hotwired/stimulus' => [
        'version' => '3.2.2',
//        'url' => 'https://cdn.jsdelivr.net/npm/@hotwired/stimulus@3.2.2/+esm',
//        'url' => 'https://ga.jspm.io/npm:@hotwired/stimulus@3.2.2/dist/stimulus.js',
//        'path' => '@symfony/stimulus-bundle/loader.js',
    ],
    '@symfony/stimulus-bundle' => [
//        'path' => './vendor/symfony/stimulus-bundle/assets/dist/loader.js',
        'path' => '@symfony/stimulus-bundle/loader.js',
    ],
//    '@symfony/ux-turbo' => [
////        'path' => './vendor/symfony/stimulus-bundle/assets/dist/loader.js',
//        'path' => '@symfony/ux-turbo/package.json',
//    ],
    '@hotwired/turbo' => [
        'version' => '7.3.0',
    ],
];
