<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'eve' => [
        'sso' => [
            'id' => env('EVESSO_CLIENT_ID'),
            'secret' => env('EVESSO_CLIENT_SECRET'),
            'callback' => 'sso.callback' // name of the route that generates the sso call back url
        ],
        'urls' => [
            'sso' => "https://login.eveonline.com",
            'esi' => "https://esi.tech.ccp.is",
            'img' => "https://imageserver.eveonline.com",
            'km' => "https://zkillboard.com/",
            'dotlan' => "https://evemaps.dotlan.net/",
            'who' => "https://evewho.com",
            'sde' => "http://sde.zzeve.com"
        ],
        'sde' => [
            'import' => [
                'invGroups','invCategories','mapRegions',
                'mapConstellations', 'chrAncestries', 'chrBloodlines',
                'chrRaces'
            ]
        ],
        'scope_map'=>[
            'readCharacterBookmarks' => "esi-bookmarks.read_character_bookmarks.v1",
            'readCharacterClones' => "esi-clones.read_clones.v1",
            'readCharacterCloneImplants' => "esi-clones.read_implants.v1",
            'readCharacterContracts' => "esi-contracts.read_character_contracts.v1",
            'readCharacterLocation' => "esi-location.read_location.v1",
            'readCharacterShip' => "esi-location.read_ship_type.v1",
            'readCharacterSkills' => "esi-skills.read_skills.v1",
            'readCharacterSkillQueue' => "esi-skills.read_skillqueue.v1",
            'readCharacterWallet' => "esi-wallet.read_character_wallet.v1",
            'readUniverseStructures' => "esi-universe.read_structures.v1",
        ]
    ],

    'bitbucket' => [
        'url' => "https://bitbucket.org/douglaswebdev/esim/issues"
    ]

];
