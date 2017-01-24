<?php

require "/conf_array.php";
//Debugger::PrintR($config);

Config::set('number_limit_level_1', $config['number_limit_level_1']['value']);
Config::set('number_limit_level_2', $config['number_limit_level_2']['value']);
Config::set('number_limit_level_3', $config['number_limit_level_3']['value']);

$operators_1 = $config['operators_level_1']['value'];
Config::set('operators_level_1', $operators_1);

$operators_2 = $config['operators_level_2']['value'];
Config::set('operators_level_2', $operators_2);

$operators_3 = $config['operators_level_3']['value'];
Config::set('operators_level_3', $operators_3);

Config::set('number_elements_level_1', $config['number_elements_level_1']['value']);
Config::set('number_elements_level_2', $config['number_elements_level_2']['value']);
Config::set('number_elements_level_3', $config['number_elements_level_3']['value']);

Config::set('time_limit_1',$config['time_limit_1']['value'] );//время в секундах
Config::set('time_limit_2',$config['time_limit_2']['value'] );//время в секундах
Config::set('time_limit_3',$config['time_limit_3']['value'] );//время в секундах

Config::set('cost_level_1',$config['cost_level_1']['value'] );
Config::set('cost_level_2',$config['cost_level_2']['value'] );
Config::set('cost_level_3',$config['cost_level_3']['value'] );
