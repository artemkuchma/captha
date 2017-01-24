<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 5,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Регистрация',
    'longtitle' => '',
    'description' => '',
    'alias' => 'registracziya',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '<p></p>',
    'richtext' => 1,
    'template' => 4,
    'menuindex' => 4,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1481467850,
    'editedby' => 1,
    'editedon' => 1481474757,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1481467800,
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
    'uri' => 'registracziya',
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
            
                <h1 class="section-title text-center">Регистрация</h1>
            </div>
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                   <p>Поля, отмеченные (<span class="error">*</span>) - обязательны к заполнению!</p>
                   
[[!Register?
    &submitVar=`registerbtn`
    
    &activationResourceId=`7`
    &activationEmailTpl=`customActivationEmailTpl`
    &activationEmailSubject=`Подтверждение регистрации`
    &submittedResourceId=`6`
    &usergroups=`register_users`
    &activation=`0`
  
]]



[[!$customRegisterFormTpl]]
                    <p class="text-left wow fadeInDown"><p></p></p>
                    
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
  'policyCache' => 
  array (
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
    '[[*pagetitle]]' => 'Регистрация',
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
    '[[*id]]' => 5,
    '[[~5]]' => 'registracziya',
    '[[%register.username? &namespace=`login` &topic=`register`]]' => 'Имя пользователя',
    '[[%register.password]]' => 'Пароль',
    '[[%register.password_confirm]]' => 'Подтвердите пароль',
    '[[%register.email]]' => 'Адрес электронной почты',
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
      'customRegisterFormTpl' => 
      array (
        'fields' => 
        array (
          'id' => 17,
          'source' => 2,
          'property_preprocess' => false,
          'name' => 'customRegisterFormTpl',
          'description' => '',
          'editor_type' => 0,
          'category' => 16,
          'cache_type' => 0,
          'snippet' => '<div class="register">
    <div class="registerMessage">[[+error.message]]</div>
    
    <form class="form" action="[[~[[*id]]]]" method="post">
        <input type="hidden" name="nospam" value="" />
        
        <label for="username">[[%register.username? &namespace=`login` &topic=`register`]]
            <span class="error">[[+error.username]]</span>
        </label>
        <input type="text" name="username" id="username" value="[[+username]]" />
        
        <label for="password">[[%register.password]]
            <span class="error">[[+error.password]]</span>
        </label>
        <input type="password" name="password" id="password" value="[[+password]]" />
        
        <label for="password_confirm">[[%register.password_confirm]]
            <span class="error">[[+error.password_confirm]]</span>
        </label>
        <input type="password" name="password_confirm" id="password_confirm" value="[[+password_confirm]]" />
        
       
        <label for="email">[[%register.email]]
            <span class="error">[[+error.email]]</span>
        </label>
        <input type="text" name="email" id="email" value="[[+email]]" />
        
        <br class="clear" />

        [[+register.recaptcha_html]]
        [[+error.recaptcha]]
        
        <div class="form-buttons">
            <input type="submit" name="registerbtn" value="Зарегистрироваться" />
        </div>
    </form>
</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div class="register">
    <div class="registerMessage">[[+error.message]]</div>
    
    <form class="form" action="[[~[[*id]]]]" method="post">
        <input type="hidden" name="nospam" value="" />
        
        <label for="username">[[%register.username? &namespace=`login` &topic=`register`]]
            <span class="error">[[+error.username]]</span>
        </label>
        <input type="text" name="username" id="username" value="[[+username]]" />
        
        <label for="password">[[%register.password]]
            <span class="error">[[+error.password]]</span>
        </label>
        <input type="password" name="password" id="password" value="[[+password]]" />
        
        <label for="password_confirm">[[%register.password_confirm]]
            <span class="error">[[+error.password_confirm]]</span>
        </label>
        <input type="password" name="password_confirm" id="password_confirm" value="[[+password_confirm]]" />
        
       
        <label for="email">[[%register.email]]
            <span class="error">[[+error.email]]</span>
        </label>
        <input type="text" name="email" id="email" value="[[+email]]" />
        
        <br class="clear" />

        [[+register.recaptcha_html]]
        [[+error.recaptcha]]
        
        <div class="form-buttons">
            <input type="submit" name="registerbtn" value="Зарегистрироваться" />
        </div>
    </form>
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
    ),
    'modSnippet' => 
    array (
      'Register' => 
      array (
        'fields' => 
        array (
          'id' => 27,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'Register',
          'description' => 'Handles forms for registering users on the front-end.',
          'editor_type' => 0,
          'category' => 15,
          'cache_type' => 0,
          'snippet' => '/**
 * Register
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
 * MODx Register Snippet. Handles User registrations.
 * 
 * @package login
 */
require_once $modx->getOption(\'login.core_path\',null,$modx->getOption(\'core_path\').\'components/login/\').\'model/login/login.class.php\';
$login = new Login($modx,$scriptProperties);

$controller = $login->loadController(\'Register\');
$output = $controller->run($scriptProperties);
return $output;',
          'locked' => false,
          'properties' => 
          array (
            'activation' => 
            array (
              'name' => 'activation',
              'desc' => 'prop_register.activation_desc',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'Whether or not to require activation for proper registration. If true, users will not be marked active until they have activated their account. Defaults to true. Will only work if the registration form passes an email field.',
              'area_trans' => '',
            ),
            'activationEmail' => 
            array (
              'name' => 'activationEmail',
              'desc' => 'prop_register.activationemail_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If set, will sent activation emails to this address instead of the newly registered user&apos;s address.',
              'area_trans' => '',
            ),
            'activationEmailSubject' => 
            array (
              'name' => 'activationEmailSubject',
              'desc' => 'prop_register.activationemailsubject_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The subject of the activation email.',
              'area_trans' => '',
            ),
            'activationEmailTpl' => 
            array (
              'name' => 'activationEmailTpl',
              'desc' => 'prop_register.activationemailtpl_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'lgnActivateEmailTpl',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The activation email tpl.',
              'area_trans' => '',
            ),
            'activationEmailTplAlt' => 
            array (
              'name' => 'activationEmailTplAlt',
              'desc' => 'prop_register.activationemailtplalt_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => '(Optional) Plain-text alternative for the activation email tpl.',
              'area_trans' => '',
            ),
            'activationEmailTplType' => 
            array (
              'name' => 'activationEmailTplType',
              'desc' => 'prop_register.activationemailtpltype_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => 'modChunk',
                  'text' => 'Chunk',
                  'name' => 'Chunk',
                ),
                1 => 
                array (
                  'value' => 'file',
                  'text' => 'File',
                  'name' => 'File',
                ),
                2 => 
                array (
                  'value' => 'inline',
                  'text' => 'Inline',
                  'name' => 'Inline',
                ),
                3 => 
                array (
                  'value' => 'embedded',
                  'text' => 'Embedded',
                  'name' => 'Embedded',
                ),
              ),
              'value' => 'modChunk',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The type of tpls being provided for the activation email.',
              'area_trans' => '',
            ),
            'activationResourceId' => 
            array (
              'name' => 'activationResourceId',
              'desc' => 'prop_register.activationresourceid_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '1',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The Resource ID where the ConfirmRegister snippet for activation is located.',
              'area_trans' => '',
            ),
            'activationttl' => 
            array (
              'name' => 'activationttl',
              'desc' => 'prop_register.activationttl_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '180',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'Number of minutes until the activation email expires. Defaults to 3 hours.',
              'area_trans' => '',
            ),
            'allowedFields' => 
            array (
              'name' => 'allowedFields',
              'desc' => 'prop_register.allowedfields_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If set, will limit the fields that are allowed to be set on the newly created user to this comma-separated list. Also restricts extended fields.',
              'area_trans' => '',
            ),
            'emailField' => 
            array (
              'name' => 'emailField',
              'desc' => 'prop_register.emailfield_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'email',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The name of the field to use for the new User&apos;s email address.',
              'area_trans' => '',
            ),
            'ensurePasswordStrength' => 
            array (
              'name' => 'ensurePasswordStrength',
              'desc' => 'prop_register.ensurePasswordStrength_desc',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If set to Yes, Register will ensure the user enters a strong enough password. Strong passwords are passwords with multiple words or non-alphabetic characters in them.',
              'area_trans' => '',
            ),
            'ensurePasswordStrengthSuggestions' => 
            array (
              'name' => 'ensurePasswordStrengthSuggestions',
              'desc' => 'prop_register.ensurePasswordStrengthSuggestions_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '5',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'prop_register.ensurePasswordStrengthSuggestions_desc',
              'area_trans' => '',
            ),
            'excludeExtended' => 
            array (
              'name' => 'excludeExtended',
              'desc' => 'prop_register.excludeextended_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'A comma-separated list of fields to exclude from setting as extended fields.',
              'area_trans' => '',
            ),
            'generatePassword' => 
            array (
              'name' => 'generatePassword',
              'desc' => 'prop_register.generatepassword_desc',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If set to Yes, Register will generate a random password for the user, overwriting any passed password. Useful for automatic generation of passwords.',
              'area_trans' => '',
            ),
            'mathField' => 
            array (
              'name' => 'mathField',
              'desc' => 'prop_register.mathfield_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'math',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If `math` is set as a preHook, the name of the input field for the answer.',
              'area_trans' => '',
            ),
            'mathMaxRange' => 
            array (
              'name' => 'mathMaxRange',
              'desc' => 'prop_register.mathmaxrange_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '100',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If `math` is set as a preHook, the maximum range for each number in the equation.',
              'area_trans' => '',
            ),
            'mathMinRange' => 
            array (
              'name' => 'mathMinRange',
              'desc' => 'prop_register.mathminrange_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '10',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If `math` is set as a preHook, the minimum range for each number in the equation.',
              'area_trans' => '',
            ),
            'mathOp1Field' => 
            array (
              'name' => 'mathOp1Field',
              'desc' => 'prop_register.mathop1field_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'op1',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If `math` is set as a preHook, the name of the field for the 1st number in the equation.',
              'area_trans' => '',
            ),
            'mathOp2Field' => 
            array (
              'name' => 'mathOp2Field',
              'desc' => 'prop_register.mathop2field_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'op2',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If `math` is set as a preHook, the name of the field for the 2nd number in the equation.',
              'area_trans' => '',
            ),
            'mathOperatorField' => 
            array (
              'name' => 'mathOperatorField',
              'desc' => 'prop_register.mathoperatorfield_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'operator',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If `math` is set as a preHook, the name of the field for the operator in the equation.',
              'area_trans' => '',
            ),
            'maximumPossibleStrongerPasswords' => 
            array (
              'name' => 'maximumPossibleStrongerPasswords',
              'desc' => 'prop_register.maximumPossibleStrongerPasswords_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '25',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If ensurePasswordStrength is set to Yes, then this is the maximum amount of suggestions that Register can find to consider the supplied password "strong". Making this number higher makes the check more lenient; lower makes it tougher.',
              'area_trans' => '',
            ),
            'minimumStrongPasswordWordCount' => 
            array (
              'name' => 'minimumStrongPasswordWordCount',
              'desc' => 'prop_register.minimumStrongPasswordWordCount_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '3',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If ensurePasswordStrength is set to Yes, if a supplied password has this many words, then it will be consider a strong password.',
              'area_trans' => '',
            ),
            'moderatedResourceId' => 
            array (
              'name' => 'moderatedResourceId',
              'desc' => 'prop_register.moderatedresourceid_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If a prehook sets the user as moderated, then send to this Resource instead of the submittedResourceId. Leave blank to bypass.',
              'area_trans' => '',
            ),
            'passwordField' => 
            array (
              'name' => 'passwordField',
              'desc' => 'prop_register.passwordfield_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'password',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The name of the field to use for the new User&apos;s password.',
              'area_trans' => '',
            ),
            'passwordWordSeparator' => 
            array (
              'name' => 'passwordWordSeparator',
              'desc' => 'prop_register.passwordWordSeparator_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => ' ',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If ensurePasswordStrength is set to Yes, this will be the separator between words when determining how many words are in a supplied password.',
              'area_trans' => '',
            ),
            'persistParams' => 
            array (
              'name' => 'persistParams',
              'desc' => 'prop_register.persistparams_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'Optional. A JSON object of parameters to persist across the register process. Useful when using redirect on ConfirmRegister to redirect to another page (eg, for shopping carts).',
              'area_trans' => '',
            ),
            'placeholderPrefix' => 
            array (
              'name' => 'placeholderPrefix',
              'desc' => 'prop_register.placeholderprefix_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The prefix to use for all placeholders set by this snippet.',
              'area_trans' => '',
            ),
            'postHooks' => 
            array (
              'name' => 'postHooks',
              'desc' => 'prop_register.posthooks_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'What scripts to fire, if any, after the user has been registered. This can be a comma-separated list of hooks, and if the first fails, the proceeding ones will not fire. A hook can also be a Snippet name that will execute that Snippet.',
              'area_trans' => '',
            ),
            'preHooks' => 
            array (
              'name' => 'preHooks',
              'desc' => 'prop_register.prehooks_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'What scripts to fire, if any, before the form passes validation. This can be a comma-separated list of hooks, and if the first fails, the proceeding ones will not fire. A hook can also be a Snippet name that will execute that Snippet.',
              'area_trans' => '',
            ),
            'recaptchaTheme' => 
            array (
              'name' => 'recaptchaTheme',
              'desc' => 'prop_register.recaptchatheme_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => 'red',
                  'text' => 'Red',
                  'name' => 'Red',
                ),
                1 => 
                array (
                  'value' => 'white',
                  'text' => 'White',
                  'name' => 'White',
                ),
                2 => 
                array (
                  'value' => 'clean',
                  'text' => 'Clean',
                  'name' => 'Clean',
                ),
                3 => 
                array (
                  'value' => 'blackglass',
                  'text' => 'Black Glass',
                  'name' => 'Black Glass',
                ),
              ),
              'value' => 'clean',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If `recaptcha` is set as a preHook, this will select a theme for the reCaptcha widget.',
              'area_trans' => '',
            ),
            'removeExpiredRegistrations' => 
            array (
              'name' => 'removeExpiredRegistrations',
              'desc' => 'prop_register.removeexpiredregistrations_desc',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If true, will remove registered users that have an expired, unused activation request and have never activated. It is recommended to leave this on to prevent spam.',
              'area_trans' => '',
            ),
            'submitVar' => 
            array (
              'name' => 'submitVar',
              'desc' => 'prop_register.submitvar_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The var to check for to load the Register functionality. If empty or set to false, Register will process the form on all POST requests.',
              'area_trans' => '',
            ),
            'submittedResourceId' => 
            array (
              'name' => 'submittedResourceId',
              'desc' => 'prop_register.submittedresourceid_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If set, will redirect to the specified Resource after the User submits the registration form.',
              'area_trans' => '',
            ),
            'successMsg' => 
            array (
              'name' => 'successMsg',
              'desc' => 'prop_register.successmsg_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'Optional. If not redirecting using the submittedResourceId parameter, will display this message instead.',
              'area_trans' => '',
            ),
            'trimPassword' => 
            array (
              'name' => 'trimPassword',
              'desc' => 'prop_register.trimpassword_desc',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If set to Yes, Register will trim the submitted password for whitespace.',
              'area_trans' => '',
            ),
            'useExtended' => 
            array (
              'name' => 'useExtended',
              'desc' => 'prop_register.useextended_desc',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'Whether or not to set any extra fields in the form to the Profiles extended field. This can be useful for storing extra user fields.',
              'area_trans' => '',
            ),
            'usergroups' => 
            array (
              'name' => 'usergroups',
              'desc' => 'prop_register.usergroups_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'Optional. A comma-separated list of User Group names or IDs to add the newly-registered User to.',
              'area_trans' => '',
            ),
            'usergroupsField' => 
            array (
              'name' => 'usergroupsField',
              'desc' => 'prop_register.usergroupsfield_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The name of the field to use to specify the User Group(s) to automatically add the new User to. Only used if this value is not blank.',
              'area_trans' => '',
            ),
            'usernameField' => 
            array (
              'name' => 'usernameField',
              'desc' => 'prop_register.usernamefield_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'username',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The name of the field to use for the new User&apos;s username.',
              'area_trans' => '',
            ),
            'validatePassword' => 
            array (
              'name' => 'validatePassword',
              'desc' => 'prop_register.validatepassword_desc',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'Whether or not to validate the sent password when registering. Recommended to leave this Yes unless you are generating your own password in a hook.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * Register
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
 * MODx Register Snippet. Handles User registrations.
 * 
 * @package login
 */
require_once $modx->getOption(\'login.core_path\',null,$modx->getOption(\'core_path\').\'components/login/\').\'model/login/login.class.php\';
$login = new Login($modx,$scriptProperties);

$controller = $login->loadController(\'Register\');
$output = $controller->run($scriptProperties);
return $output;',
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