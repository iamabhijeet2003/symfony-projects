<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_player' => [[], ['_controller' => 'App\\Controller\\PlayerController::index'], [], [['text', '/player']], [], [], []],
    'new_player' => [['name', 'country', 'age', 'id_team'], ['_controller' => 'App\\Controller\\PlayerController::newPlayer'], [], [['variable', '/', '[^/]++', 'id_team', true], ['variable', '/', '[^/]++', 'age', true], ['variable', '/', '[^/]++', 'country', true], ['variable', '/', '[^/]++', 'name', true], ['text', '/player/add/new']], [], [], []],
    'single_player' => [['id'], ['id' => '', '_controller' => 'App\\Controller\\PlayerController::playerById'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/playerById']], [], [], []],
    'players_by_team_id' => [['teamId'], ['teamId' => '', '_controller' => 'App\\Controller\\PlayerController::playersByTeamId'], ['teamId' => '\\d+'], [['variable', '/', '\\d+', 'teamId', true], ['text', '/playersByTeamId']], [], [], []],
    'move_player' => [['playerId', 'newTeamId'], ['playerId' => '', 'newTeamId' => '', '_controller' => 'App\\Controller\\PlayerController::movePlayer'], ['playerId' => '\\d+', 'newTeamId' => '\\d+'], [['variable', '/', '\\d+', 'newTeamId', true], ['variable', '/', '\\d+', 'playerId', true], ['text', '/player/move']], [], [], []],
    'app_team' => [[], ['_controller' => 'App\\Controller\\TeamController::index'], [], [['text', '/team']], [], [], []],
    'new_team' => [['name', 'city'], ['_controller' => 'App\\Controller\\TeamController::newTeam'], [], [['variable', '/', '[^/]++', 'city', true], ['variable', '/', '[^/]++', 'name', true], ['text', '/team/test/new']], [], [], []],
    'team_edit' => [['name', 'id'], ['_controller' => 'App\\Controller\\TeamController::updateTeam'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['variable', '/', '[^/]++', 'name', true], ['text', '/team/test/edit']], [], [], []],
    'single_team' => [['id'], ['id' => '', '_controller' => 'App\\Controller\\TeamController::teamById'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/teambyid']], [], [], []],
    'team_list' => [[], ['_controller' => 'App\\Controller\\TeamController::teamList'], [], [['text', '/team_list']], [], [], []],
    'App\Controller\PlayerController::index' => [[], ['_controller' => 'App\\Controller\\PlayerController::index'], [], [['text', '/player']], [], [], []],
    'App\Controller\PlayerController::newPlayer' => [['name', 'country', 'age', 'id_team'], ['_controller' => 'App\\Controller\\PlayerController::newPlayer'], [], [['variable', '/', '[^/]++', 'id_team', true], ['variable', '/', '[^/]++', 'age', true], ['variable', '/', '[^/]++', 'country', true], ['variable', '/', '[^/]++', 'name', true], ['text', '/player/add/new']], [], [], []],
    'App\Controller\PlayerController::playerById' => [['id'], ['id' => '', '_controller' => 'App\\Controller\\PlayerController::playerById'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/playerById']], [], [], []],
    'App\Controller\PlayerController::playersByTeamId' => [['teamId'], ['teamId' => '', '_controller' => 'App\\Controller\\PlayerController::playersByTeamId'], ['teamId' => '\\d+'], [['variable', '/', '\\d+', 'teamId', true], ['text', '/playersByTeamId']], [], [], []],
    'App\Controller\PlayerController::movePlayer' => [['playerId', 'newTeamId'], ['playerId' => '', 'newTeamId' => '', '_controller' => 'App\\Controller\\PlayerController::movePlayer'], ['playerId' => '\\d+', 'newTeamId' => '\\d+'], [['variable', '/', '\\d+', 'newTeamId', true], ['variable', '/', '\\d+', 'playerId', true], ['text', '/player/move']], [], [], []],
    'App\Controller\TeamController::index' => [[], ['_controller' => 'App\\Controller\\TeamController::index'], [], [['text', '/team']], [], [], []],
    'App\Controller\TeamController::newTeam' => [['name', 'city'], ['_controller' => 'App\\Controller\\TeamController::newTeam'], [], [['variable', '/', '[^/]++', 'city', true], ['variable', '/', '[^/]++', 'name', true], ['text', '/team/test/new']], [], [], []],
    'App\Controller\TeamController::updateTeam' => [['name', 'id'], ['_controller' => 'App\\Controller\\TeamController::updateTeam'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['variable', '/', '[^/]++', 'name', true], ['text', '/team/test/edit']], [], [], []],
    'App\Controller\TeamController::teamById' => [['id'], ['id' => '', '_controller' => 'App\\Controller\\TeamController::teamById'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/teambyid']], [], [], []],
    'App\Controller\TeamController::teamList' => [[], ['_controller' => 'App\\Controller\\TeamController::teamList'], [], [['text', '/team_list']], [], [], []],
];
