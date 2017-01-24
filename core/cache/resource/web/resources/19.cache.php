<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 19,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Статистика результатов',
    'longtitle' => '',
    'description' => '',
    'alias' => 'statistika-rezultatov',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 18,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '',
    'richtext' => 1,
    'template' => 12,
    'menuindex' => 2,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1482788483,
    'editedby' => 1,
    'editedon' => 1482790647,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1482788460,
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
    'uri' => 'lichnyij-kabinet/statistika-rezultatov',
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
            
                <h1 class="section-title text-center">Статистика результатов</h1>
            </div>
           


 
<div class="panel panel-primary">
  <div class="panel-heading"><i class="glyphicon glyphicon-edit"></i> Статистика результатов</div>
    <div class="panel-body">
      <table class="table">
    <thead>
        <th>№</th>
        <th>Уровень сложности</th>
        <th>Уравнение</th>
        <th>Решение</th>
        <th>Стоимость</th>
        <th>Дата</th>
    </thead>
    <tbody>
        [[!get_user_results?user_id=[[!+modx.user.id]]]]
        
    </tbody>
  </table>
  
   <hr>
      <div class="col-xs-4" style="margin-bottom:8px;">
       <i class="glyphicon glyphicon-pencil"></i> <a href="lichnyij-kabinet/izmenenie-parolya" title="Изменение пароля">Изменение пароля</a>
      </div>
      <div class="col-xs-4" style="margin-bottom:8px;">
        <i class="glyphicon glyphicon-cog"></i> <a href="lichnyij-kabinet/nastrojka-akkaunta" title="Редактирование данных">Редактирование данных</a>
      </div>
      <div class="col-xs-4" style="margin-bottom:8px;">
        <i class="glyphicon  glyphicon-stats"></i> <a href="lichnyij-kabinet/statistika-rezultatov" title="Статистика результатов">Статистика результатов</a>
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
    4 => 
    array (
      'id' => 4,
      'document_group' => 1,
      'document' => 19,
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
    '[[*pagetitle]]' => 'Статистика результатов',
    '[[~17]]' => 'lichnyij-kabinet/izmenenie-parolya',
    '[[~13]]' => 'lichnyij-kabinet/nastrojka-akkaunta',
    '[[~19]]' => 'lichnyij-kabinet/statistika-rezultatov',
    '[[$panel_footer_menu]]' => ' <hr>
      <div class="col-xs-4" style="margin-bottom:8px;">
       <i class="glyphicon glyphicon-pencil"></i> <a href="lichnyij-kabinet/izmenenie-parolya" title="Изменение пароля">Изменение пароля</a>
      </div>
      <div class="col-xs-4" style="margin-bottom:8px;">
        <i class="glyphicon glyphicon-cog"></i> <a href="lichnyij-kabinet/nastrojka-akkaunta" title="Редактирование данных">Редактирование данных</a>
      </div>
      <div class="col-xs-4" style="margin-bottom:8px;">
        <i class="glyphicon  glyphicon-stats"></i> <a href="lichnyij-kabinet/statistika-rezultatov" title="Статистика результатов">Статистика результатов</a>
      </div>',
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
      'panel_footer_menu' => 
      array (
        'fields' => 
        array (
          'id' => 20,
          'source' => 2,
          'property_preprocess' => false,
          'name' => 'panel_footer_menu',
          'description' => '',
          'editor_type' => 0,
          'category' => 8,
          'cache_type' => 0,
          'snippet' => ' <hr>
      <div class="col-xs-4" style="margin-bottom:8px;">
       <i class="glyphicon glyphicon-pencil"></i> <a href="[[~17]]" title="Изменение пароля">Изменение пароля</a>
      </div>
      <div class="col-xs-4" style="margin-bottom:8px;">
        <i class="glyphicon glyphicon-cog"></i> <a href="[[~13]]" title="Редактирование данных">Редактирование данных</a>
      </div>
      <div class="col-xs-4" style="margin-bottom:8px;">
        <i class="glyphicon  glyphicon-stats"></i> <a href="[[~19]]" title="Статистика результатов">Статистика результатов</a>
      </div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => ' <hr>
      <div class="col-xs-4" style="margin-bottom:8px;">
       <i class="glyphicon glyphicon-pencil"></i> <a href="[[~17]]" title="Изменение пароля">Изменение пароля</a>
      </div>
      <div class="col-xs-4" style="margin-bottom:8px;">
        <i class="glyphicon glyphicon-cog"></i> <a href="[[~13]]" title="Редактирование данных">Редактирование данных</a>
      </div>
      <div class="col-xs-4" style="margin-bottom:8px;">
        <i class="glyphicon  glyphicon-stats"></i> <a href="[[~19]]" title="Статистика результатов">Статистика результатов</a>
      </div>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 2,
          'name' => 'Изображения основных страниц',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
            'basePath' => 
            array (
              'name' => 'basePath',
              'desc' => 'prop_file.basePath_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'assets/images/basic_page/',
              'lexicon' => 'core:source',
            ),
            'baseUrl' => 
            array (
              'name' => 'baseUrl',
              'desc' => 'prop_file.baseUrl_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'assets/images/basic_page/',
              'lexicon' => 'core:source',
            ),
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
      'get_user_results' => 
      array (
        'fields' => 
        array (
          'id' => 32,
          'source' => 2,
          'property_preprocess' => false,
          'name' => 'get_user_results',
          'description' => 'получает из базы данных все результаты по определенному пользователю',
          'editor_type' => 0,
          'category' => 18,
          'cache_type' => 0,
          'snippet' => '//Using [[get_user_results?user_id=\'id пользователя\']]
$user_id = isset($user_id)? $user_id : \'\';

$myPackage = \'capthapackage\';
$myPrefix = \'modx_custom_\';
$path = MODX_CORE_PATH . \'components/\' . $myPackage . \'/\';
$modx->addPackage($myPackage, $path . \'model/\', $myPrefix);

$result = $modx->getCollection(\'CaptchaRezalts\', array(\'user_id\' => $user_id));
 if (! $result) {
          return;
      }

    $data = \'\';
    $count = 0;
        foreach($result as $row){
          
            $count ++;
            $data .= \'<tr>\';
            $data .= \'<td>\'.$count.\'</td>\';
            $data .= \'<td>\'.$row->get(\'level\').\'</td>\';
            $data .= \'<td>\'.$row->get(\'equation\').\'</td>\';
            $data .= \'<td>\'.$row->get(\'result\').\'</td>\';
            $data .= \'<td>\'.$row->get(\'cost\').\'</td>\';
            $data .= \'<td>\'.$row->get(\'date\').\'</td>\';
            $data .= \'</tr>\';
        }
        
       $count_total = $modx->query("SELECT SUM(cost) FROM modx_custom_captcha_rezalts WHERE user_id=$user_id");
   $r = $count_total->fetch(PDO::FETCH_ASSOC);
  
  
    $data .= \'<tr class="total_result">\';
    $data .= \'<td>Сумма</td>\';
    $data .= \'<td></td>\';
    $data .= \'<td></td>\';
    $data .= \'<td></td>\';
    $data .= \'<td>\'.$r[\'SUM(cost)\'].\'</td>\';
    $data .= \'<td></td>\';
    $data .= \'</tr>\';
   
   

      
        return $data;',
          'locked' => false,
          'properties' => 
          array (
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '//Using [[get_user_results?user_id=\'id пользователя\']]
$user_id = isset($user_id)? $user_id : \'\';

$myPackage = \'capthapackage\';
$myPrefix = \'modx_custom_\';
$path = MODX_CORE_PATH . \'components/\' . $myPackage . \'/\';
$modx->addPackage($myPackage, $path . \'model/\', $myPrefix);

$result = $modx->getCollection(\'CaptchaRezalts\', array(\'user_id\' => $user_id));
 if (! $result) {
          return;
      }

    $data = \'\';
    $count = 0;
        foreach($result as $row){
          
            $count ++;
            $data .= \'<tr>\';
            $data .= \'<td>\'.$count.\'</td>\';
            $data .= \'<td>\'.$row->get(\'level\').\'</td>\';
            $data .= \'<td>\'.$row->get(\'equation\').\'</td>\';
            $data .= \'<td>\'.$row->get(\'result\').\'</td>\';
            $data .= \'<td>\'.$row->get(\'cost\').\'</td>\';
            $data .= \'<td>\'.$row->get(\'date\').\'</td>\';
            $data .= \'</tr>\';
        }
        
       $count_total = $modx->query("SELECT SUM(cost) FROM modx_custom_captcha_rezalts WHERE user_id=$user_id");
   $r = $count_total->fetch(PDO::FETCH_ASSOC);
  
  
    $data .= \'<tr class="total_result">\';
    $data .= \'<td>Сумма</td>\';
    $data .= \'<td></td>\';
    $data .= \'<td></td>\';
    $data .= \'<td></td>\';
    $data .= \'<td>\'.$r[\'SUM(cost)\'].\'</td>\';
    $data .= \'<td></td>\';
    $data .= \'</tr>\';
   
   

      
        return $data;',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 2,
          'name' => 'Изображения основных страниц',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
            'basePath' => 
            array (
              'name' => 'basePath',
              'desc' => 'prop_file.basePath_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'assets/images/basic_page/',
              'lexicon' => 'core:source',
            ),
            'baseUrl' => 
            array (
              'name' => 'baseUrl',
              'desc' => 'prop_file.baseUrl_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'assets/images/basic_page/',
              'lexicon' => 'core:source',
            ),
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);