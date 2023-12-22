<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/player' => [[['_route' => 'app_player', '_controller' => 'App\\Controller\\PlayerController::index'], null, null, null, false, false, null]],
        '/team' => [[['_route' => 'app_team', '_controller' => 'App\\Controller\\TeamController::index'], null, null, null, false, false, null]],
        '/team_list' => [[['_route' => 'team_list', '_controller' => 'App\\Controller\\TeamController::teamList'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/player(?'
                    .'|/(?'
                        .'|add/new/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:259)'
                        .'|move(?:/(\\d+)(?:/(\\d+))?)?(*:293)'
                    .')'
                    .'|ById(?:/(\\d+))?(*:317)'
                    .'|sByTeamId(?:/(\\d+))?(*:345)'
                .')'
                .'|/team(?'
                    .'|/test/(?'
                        .'|new/([^/]++)/([^/]++)(*:392)'
                        .'|edit/([^/]++)/(\\d+)(*:419)'
                    .')'
                    .'|byid(?:/(\\d+))?(*:443)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        259 => [[['_route' => 'new_player', '_controller' => 'App\\Controller\\PlayerController::newPlayer'], ['name', 'country', 'age', 'id_team'], null, null, false, true, null]],
        293 => [[['_route' => 'move_player', 'playerId' => '', 'newTeamId' => '', '_controller' => 'App\\Controller\\PlayerController::movePlayer'], ['playerId', 'newTeamId'], null, null, false, true, null]],
        317 => [[['_route' => 'single_player', 'id' => '', '_controller' => 'App\\Controller\\PlayerController::playerById'], ['id'], null, null, false, true, null]],
        345 => [[['_route' => 'players_by_team_id', 'teamId' => '', '_controller' => 'App\\Controller\\PlayerController::playersByTeamId'], ['teamId'], null, null, false, true, null]],
        392 => [[['_route' => 'new_team', '_controller' => 'App\\Controller\\TeamController::newTeam'], ['name', 'city'], null, null, false, true, null]],
        419 => [[['_route' => 'team_edit', '_controller' => 'App\\Controller\\TeamController::updateTeam'], ['name', 'id'], null, null, false, true, null]],
        443 => [
            [['_route' => 'single_team', 'id' => '', '_controller' => 'App\\Controller\\TeamController::teamById'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
