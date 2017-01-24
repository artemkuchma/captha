<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 18,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Информация о пользователе',
    'longtitle' => '',
    'description' => '',
    'alias' => 'lichnyij-kabinet',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 1,
    'introtext' => '',
    'content' => '',
    'richtext' => 1,
    'template' => 10,
    'menuindex' => 18,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1482105693,
    'editedby' => 1,
    'editedon' => 1484772288,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1482105660,
    'publishedby' => 1,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'lichnyij-kabinet',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    '_content' => '<!DOCTYPE html>
<html>
    <head>
    <base href="http://cp.ua/" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Captha</title>
	<!-- core CSS -->
    <link href="/assets/templates/custom_temp/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/templates/custom_temp/css/font-awesome.min.css" rel="stylesheet">
      
    <link href="/assets/templates/custom_temp/css/main.css" rel="stylesheet">
    
    <!--[if lt IE 9]>
    <script src="/assets/templates/main_temp/js/html5shiv.js"></script>
    <script src="/assets/templates/main_temp/js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="/assets/templates/images/ico/favicon.ico">
    <link rel="stylesheet" href="/assets/components/Captha_test/css/captcha.css"/>
    <script src="/assets/templates/custom_temp/js/jquery.js"></script>
    <script src="/assets/templates/custom_temp/js/bootstrap.min.js"></script>
    
   
    
</head><!--/head-->
    <body id="home" class="homepage">
      
       
 <header id="header">
     <nav id="main-menu" class="navbar navbar-inverse navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                </div>
				
                <div class="collapse navbar-collapse navbar-right" id=\'scroll\'>
                    <ul class="nav navbar-nav" >
                        <li class="scroll"><a href="/">Вернутся на сайт</a></li>
                        <li class="scroll"><a href="/lichnyij-kabinet">Информация о пользователе</a></li>
                        <li class="scroll"><a href="/lichnyij-kabinet/izmenenie-parolya">Изменить пароль</a></li>
                        <li class="scroll"><a href="/lichnyij-kabinet/nastrojka-akkaunta">Редактировать данные</a></li>
                        <li class="scroll"><a href="/lichnyij-kabinet/statistika-rezultatov">Статистика результатов</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav>
       
    </header><!--/header-->
       
       <div class="container">
            <div class="section-header">
            
                <h1 class="section-title text-center">Информация о пользователе</h1>
            </div>
           

[[!Profile? &prefix=`usr.`]]
 
<div class="panel panel-primary">
  <div class="panel-heading"><i class="glyphicon glyphicon-edit"></i> Личный кабинет пользователя</div>
    <div class="panel-body">
      <p>Имя пользователя: [[+usr.username]]</p>
      <p>Телефон: [[+usr.phone]]</p>
      <p>Мобильный телефон: [[+usr.mobilephone]]</p>
      <p>Email: [[+usr.email]]</p>
      <hr>
      <p>Адрес: [[+usr.address]]</p>
      <p>Страна: [[+usr.country]]</p>
      <p>Город: [[+usr.city]]</p>
      <p>Веб-сайт: [[+usr.website]]</p>
      <hr>
      <div class="col-xs-4" style="margin-bottom:8px;">
       <i class="glyphicon glyphicon-pencil"></i> <a href="lichnyij-kabinet/izmenenie-parolya" title="Изменение пароля">Изменение пароля</a>
      </div>
      <div class="col-xs-4" style="margin-bottom:8px;">
        <i class="glyphicon glyphicon-cog"></i> <a href="lichnyij-kabinet/nastrojka-akkaunta" title="Редактирование данных">Редактирование данных</a>
      </div>
      <div class="col-xs-4" style="margin-bottom:8px;">
        <i class="glyphicon glyphicon-list-alt"></i> <a href="lichnyij-kabinet/statistika-rezultatov" title="Статистика результатов">Статистика результатов</a>
      </div>
    </div>
  </div>
</div>
        
        </div> 
       
     <footer id="footer" class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2017 Капча
                </div>
                
            </div>
        </div>
    </footer><!--/#footer-->
     <script src="/assets/templates/custom_temp/js/jquery.js"></script>
    <script src="/assets/templates/custom_temp/js/bootstrap.min.js"></script>
   <script src="/assets/templates/custom_temp/js/active_class.js"></script>
   
    <script src="/assets/templates/custom_temp/js/wow.min.js"></script>
    <script src="/assets/templates/custom_temp/js/main.js"></script>
   <!-- скрипт для прижатия футера к нижней части страници в случае когда контент не заполняет всю страницу.
   скприпт запускается только когда размер документа меньше размера окна-->
     <script type="text/javascript">
        if ($(document).height() <= $(window).height()) 
         $("footer.footer").addClass("navbar-fixed-bottom");
     </script>
     <script>
     on("click", ".scroll", alert(\'test\'));
         $("#scroll").on("click", ".scroll", function(){
        $("#scroll .scroll").removeClass("active"); //удаляем класс во всех вкладках
        $(this).addClass("active"); //добавляем класс текущей (нажатой)
             });
     </script>
     
    
<script  type="text/javascript" src="/assets/components/Captha_test/js/captha.js"></script>   

    </body>
    
    
</html>',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '',
    'headers' => NULL,
    'binary' => 0,
  ),
  'resourceGroups' => 
  array (
    2 => 
    array (
      'id' => 2,
      'document_group' => 1,
      'document' => 18,
    ),
  ),
  'policyCache' => 
  array (
    'modAccessResourceGroup' => 
    array (
      1 => 
      array (
        0 => 
        array (
          'principal' => '2',
          'authority' => '9999',
          'policy' => 
          array (
            'add_children' => true,
            'create' => true,
            'copy' => true,
            'delete' => true,
            'list' => true,
            'load' => true,
            'move' => true,
            'publish' => true,
            'remove' => true,
            'save' => true,
            'steal_lock' => true,
            'undelete' => true,
            'unpublish' => true,
            'view' => true,
          ),
        ),
        1 => 
        array (
          'principal' => '3',
          'authority' => '9999',
          'policy' => 
          array (
            'load' => true,
            'list' => true,
            'view' => true,
            'save' => true,
            'remove' => true,
            'copy' => true,
            'view_unpublished' => true,
          ),
        ),
      ),
    ),
  ),
  'elementCache' => 
  array (
    '[[$html_header]]' => '<head>
    <base href="http://cp.ua/" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Captha</title>
	<!-- core CSS -->
    <link href="/assets/templates/custom_temp/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/templates/custom_temp/css/font-awesome.min.css" rel="stylesheet">
      
    <link href="/assets/templates/custom_temp/css/main.css" rel="stylesheet">
    
    <!--[if lt IE 9]>
    <script src="/assets/templates/main_temp/js/html5shiv.js"></script>
    <script src="/assets/templates/main_temp/js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="/assets/templates/images/ico/favicon.ico">
    <link rel="stylesheet" href="/assets/components/Captha_test/css/captcha.css"/>
    <script src="/assets/templates/custom_temp/js/jquery.js"></script>
    <script src="/assets/templates/custom_temp/js/bootstrap.min.js"></script>
    
   
    
</head><!--/head-->',
    '[[$header]]' => '
 <header id="header">
     <nav id="main-menu" class="navbar navbar-inverse navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                </div>
				
                <div class="collapse navbar-collapse navbar-right" id=\'scroll\'>
                    <ul class="nav navbar-nav" >
                        <li class="scroll"><a href="/">Вернутся на сайт</a></li>
                        <li class="scroll"><a href="/lichnyij-kabinet">Информация о пользователе</a></li>
                        <li class="scroll"><a href="/lichnyij-kabinet/izmenenie-parolya">Изменить пароль</a></li>
                        <li class="scroll"><a href="/lichnyij-kabinet/nastrojka-akkaunta">Редактировать данные</a></li>
                        <li class="scroll"><a href="/lichnyij-kabinet/statistika-rezultatov">Статистика результатов</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav>
       
    </header><!--/header-->',
    '[[*pagetitle]]' => 'Информация о пользователе',
    '[[~17]]' => 'lichnyij-kabinet/izmenenie-parolya',
    '[[~13]]' => 'lichnyij-kabinet/nastrojka-akkaunta',
    '[[~19]]' => 'lichnyij-kabinet/statistika-rezultatov',
    '[[$footer]]' => '<footer id="footer" class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2017 Капча
                </div>
                
            </div>
        </div>
    </footer><!--/#footer-->
     <script src="/assets/templates/custom_temp/js/jquery.js"></script>
    <script src="/assets/templates/custom_temp/js/bootstrap.min.js"></script>
   <script src="/assets/templates/custom_temp/js/active_class.js"></script>
   
    <script src="/assets/templates/custom_temp/js/wow.min.js"></script>
    <script src="/assets/templates/custom_temp/js/main.js"></script>
   <!-- скрипт для прижатия футера к нижней части страници в случае когда контент не заполняет всю страницу.
   скприпт запускается только когда размер документа меньше размера окна-->
     <script type="text/javascript">
        if ($(document).height() <= $(window).height()) 
         $("footer.footer").addClass("navbar-fixed-bottom");
     </script>
     <script>
     on("click", ".scroll", alert(\'test\'));
         $("#scroll").on("click", ".scroll", function(){
        $("#scroll .scroll").removeClass("active"); //удаляем класс во всех вкладках
        $(this).addClass("active"); //добавляем класс текущей (нажатой)
             });
     </script>
     
    
<script  type="text/javascript" src="/assets/components/Captha_test/js/captha.js"></script>',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'html_header' => 
      array (
        'fields' => 
        array (
          'id' => 2,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'html_header',
          'description' => '',
          'editor_type' => 0,
          'category' => 7,
          'cache_type' => 0,
          'snippet' => '<head>
    <base href="[[++site_url]]" />
    <meta charset="[[++modx_charset]]">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Captha</title>
	<!-- core CSS -->
    <link href="/assets/templates/custom_temp/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/templates/custom_temp/css/font-awesome.min.css" rel="stylesheet">
      
    <link href="/assets/templates/custom_temp/css/main.css" rel="stylesheet">
    
    <!--[if lt IE 9]>
    <script src="/assets/templates/main_temp/js/html5shiv.js"></script>
    <script src="/assets/templates/main_temp/js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="/assets/templates/images/ico/favicon.ico">
    <link rel="stylesheet" href="/assets/components/Captha_test/css/captcha.css"/>
    <script src="/assets/templates/custom_temp/js/jquery.js"></script>
    <script src="/assets/templates/custom_temp/js/bootstrap.min.js"></script>
    
   
    
</head><!--/head-->',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<head>
    <base href="[[++site_url]]" />
    <meta charset="[[++modx_charset]]">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Captha</title>
	<!-- core CSS -->
    <link href="/assets/templates/custom_temp/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/templates/custom_temp/css/font-awesome.min.css" rel="stylesheet">
      
    <link href="/assets/templates/custom_temp/css/main.css" rel="stylesheet">
    
    <!--[if lt IE 9]>
    <script src="/assets/templates/main_temp/js/html5shiv.js"></script>
    <script src="/assets/templates/main_temp/js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="/assets/templates/images/ico/favicon.ico">
    <link rel="stylesheet" href="/assets/components/Captha_test/css/captcha.css"/>
    <script src="/assets/templates/custom_temp/js/jquery.js"></script>
    <script src="/assets/templates/custom_temp/js/bootstrap.min.js"></script>
    
   
    
</head><!--/head-->',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'header' => 
      array (
        'fields' => 
        array (
          'id' => 3,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'header',
          'description' => '',
          'editor_type' => 0,
          'category' => 7,
          'cache_type' => 0,
          'snippet' => '
 <header id="header">
     <nav id="main-menu" class="navbar navbar-inverse navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                </div>
				
                <div class="collapse navbar-collapse navbar-right" id=\'scroll\'>
                    <ul class="nav navbar-nav" >
                        <li class="scroll"><a href="/">Вернутся на сайт</a></li>
                        <li class="scroll"><a href="/lichnyij-kabinet">Информация о пользователе</a></li>
                        <li class="scroll"><a href="/lichnyij-kabinet/izmenenie-parolya">Изменить пароль</a></li>
                        <li class="scroll"><a href="/lichnyij-kabinet/nastrojka-akkaunta">Редактировать данные</a></li>
                        <li class="scroll"><a href="/lichnyij-kabinet/statistika-rezultatov">Статистика результатов</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav>
       
    </header><!--/header-->',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '
 <header id="header">
     <nav id="main-menu" class="navbar navbar-inverse navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                </div>
				
                <div class="collapse navbar-collapse navbar-right" id=\'scroll\'>
                    <ul class="nav navbar-nav" >
                        <li class="scroll"><a href="/">Вернутся на сайт</a></li>
                        <li class="scroll"><a href="/lichnyij-kabinet">Информация о пользователе</a></li>
                        <li class="scroll"><a href="/lichnyij-kabinet/izmenenie-parolya">Изменить пароль</a></li>
                        <li class="scroll"><a href="/lichnyij-kabinet/nastrojka-akkaunta">Редактировать данные</a></li>
                        <li class="scroll"><a href="/lichnyij-kabinet/statistika-rezultatov">Статистика результатов</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav>
       
    </header><!--/header-->',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'footer' => 
      array (
        'fields' => 
        array (
          'id' => 4,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'footer',
          'description' => '',
          'editor_type' => 0,
          'category' => 8,
          'cache_type' => 0,
          'snippet' => '<footer id="footer" class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2017 [[++site_name]]
                </div>
                
            </div>
        </div>
    </footer><!--/#footer-->
     <script src="/assets/templates/custom_temp/js/jquery.js"></script>
    <script src="/assets/templates/custom_temp/js/bootstrap.min.js"></script>
   <script src="/assets/templates/custom_temp/js/active_class.js"></script>
   
    <script src="/assets/templates/custom_temp/js/wow.min.js"></script>
    <script src="/assets/templates/custom_temp/js/main.js"></script>
   <!-- скрипт для прижатия футера к нижней части страници в случае когда контент не заполняет всю страницу.
   скприпт запускается только когда размер документа меньше размера окна-->
     <script type="text/javascript">
        if ($(document).height() <= $(window).height()) 
         $("footer.footer").addClass("navbar-fixed-bottom");
     </script>
     <script>
     on("click", ".scroll", alert(\'test\'));
         $("#scroll").on("click", ".scroll", function(){
        $("#scroll .scroll").removeClass("active"); //удаляем класс во всех вкладках
        $(this).addClass("active"); //добавляем класс текущей (нажатой)
             });
     </script>
     
    
<script  type="text/javascript" src="/assets/components/Captha_test/js/captha.js"></script>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<footer id="footer" class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2017 [[++site_name]]
                </div>
                
            </div>
        </div>
    </footer><!--/#footer-->
     <script src="/assets/templates/custom_temp/js/jquery.js"></script>
    <script src="/assets/templates/custom_temp/js/bootstrap.min.js"></script>
   <script src="/assets/templates/custom_temp/js/active_class.js"></script>
   
    <script src="/assets/templates/custom_temp/js/wow.min.js"></script>
    <script src="/assets/templates/custom_temp/js/main.js"></script>
   <!-- скрипт для прижатия футера к нижней части страници в случае когда контент не заполняет всю страницу.
   скприпт запускается только когда размер документа меньше размера окна-->
     <script type="text/javascript">
        if ($(document).height() <= $(window).height()) 
         $("footer.footer").addClass("navbar-fixed-bottom");
     </script>
     <script>
     on("click", ".scroll", alert(\'test\'));
         $("#scroll").on("click", ".scroll", function(){
        $("#scroll .scroll").removeClass("active"); //удаляем класс во всех вкладках
        $(this).addClass("active"); //добавляем класс текущей (нажатой)
             });
     </script>
     
    
<script  type="text/javascript" src="/assets/components/Captha_test/js/captha.js"></script>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modSnippet' => 
    array (
      'Profile' => 
      array (
        'fields' => 
        array (
          'id' => 26,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'Profile',
          'description' => 'Displays Profile data for a User.',
          'editor_type' => 0,
          'category' => 15,
          'cache_type' => 0,
          'snippet' => '/**
 * Profile
 *
 * Copyright 2010 by Shaun McCormick <shaun@modx.com>
 *
 * Register is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Register is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Register; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package login
 */
/**
 * MODx Profile Snippet. Sets Profile data for a user to placeholders
 *
 * @package login
 */
require_once $modx->getOption(\'login.core_path\',null,$modx->getOption(\'core_path\').\'components/login/\').\'model/login/login.class.php\';
$login = new Login($modx,$scriptProperties);

$controller = $login->loadController(\'Profile\');
return $controller->run($scriptProperties);',
          'locked' => false,
          'properties' => 
          array (
            'prefix' => 
            array (
              'name' => 'prefix',
              'desc' => 'prop_profile.prefix_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'A string to prefix all placeholders for fields that will be set by this Snippet.',
              'area_trans' => '',
            ),
            'user' => 
            array (
              'name' => 'user',
              'desc' => 'prop_profile.user_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'Optional. Either a user ID or username. If set, will use this user rather than the currently logged in one.',
              'area_trans' => '',
            ),
            'useExtended' => 
            array (
              'name' => 'useExtended',
              'desc' => 'prop_profile.useextended_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'Whether or not to set any extra fields in the form to the Profiles extended field. This can be useful for storing extra user fields.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * Profile
 *
 * Copyright 2010 by Shaun McCormick <shaun@modx.com>
 *
 * Register is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Register is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Register; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package login
 */
/**
 * MODx Profile Snippet. Sets Profile data for a user to placeholders
 *
 * @package login
 */
require_once $modx->getOption(\'login.core_path\',null,$modx->getOption(\'core_path\').\'components/login/\').\'model/login/login.class.php\';
$login = new Login($modx,$scriptProperties);

$controller = $login->loadController(\'Profile\');
return $controller->run($scriptProperties);',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);