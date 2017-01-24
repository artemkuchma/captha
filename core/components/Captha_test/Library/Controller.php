<?php


class Controller
{

    private function render(array $args = array())
    {
        extract($args);


        $captcha_1 = $this->createCaptchaAction(1);
        $captcha_2 = $this->createCaptchaAction(2);
        $captcha_3 = $this->createCaptchaAction(3);

     //   ob_start();
        require VIEW_DIR . 'layout_captcha.phtml';
        return ob_get_clean();

    }

    private function render_captcha(array $args = array())
    {

        extract($args);
        ob_start();
        require VIEW_DIR . 'captcha.phtml';
        return ob_get_clean();

    }

    private function render_admin(array $args = array())
    {

        extract($args);
       
        if (isset($edit) ) {
            $admin_list = '';
            $edit_form = $this->GetEditAdminAction();
            $admin_options = '';
            $users_result_list = '';
            $users_result_details_list = '';
        }elseif (isset($options)) {
            $admin_list = '';
            $admin_options = $this->GetOptionsAdminAction();
            $edit_form = '';
            $users_result_list = '';
            $users_result_details_list = '';
         }elseif (isset($users_result)) {
            $admin_list = '';
            $admin_options = '';
            $edit_form = '';
            $users_result_list = $this->GetUsersResultAdminAction();
            $users_result_details_list = '';
        }elseif (isset($users_result_details)) {
            $admin_list = '';
            $admin_options = '';
            $edit_form = '';
            $users_result_list = '';
            $users_result_details_list = $this -> GetUsersResultDetailsAdminAction();

        } else {
            $admin_list = $this->GetListAdminAction();
            $edit_form = '';
            $admin_options = '';
            $users_result_list = '';
            $users_result_details_list = '';
        }
        ob_start();
        require VIEW_DIR . 'admin_layout.phtml';
        return ob_get_clean();
    }

    private function render_admin_list(array $args = array())
    {
        extract($args);
        ob_start();
        require VIEW_DIR . 'listAdmin.phtml';
        return ob_get_clean();
    }

    private function render_admin_edit(array $args = array())
    {
        extract($args);

        ob_start();
        
        require VIEW_DIR . 'editAdmin.phtml';
        return ob_get_clean();
    }
    private function render_admin_options(array $args = array())
    {
        extract($args);
        ob_start();
        require VIEW_DIR . 'optionsAdmin.phtml';
        return ob_get_clean();
    }

    private function render_admin_users_result(array $args = array())
    {
        extract($args);
        ob_start();
        require VIEW_DIR . 'usersResultAdmin.phtml';
        return ob_get_clean();
    }

    private function render_admin_users_result_details(array $args = array())
    {
        extract($args);
        ob_start();
        require VIEW_DIR . 'usersResultDetailsAdmin.phtml';
        return ob_get_clean();
    }

    public function indexAction()
    {


$session = new Session();


global $modx_data;
echo $modx_data['user_name'];

//echo "</br>";

//echo $test_user;

     //   require_once ("C:/OpenServer/domains/cp.ua/core/model/modx/modx.class.php");
    //    $modx = new modX();
  //      $currentResource = $modx->resource;
//$currentUser = $modx->user->get('id');

//Debugger::PrintR($currentUser);

//echo $user_t->get('username');

       
       // $modx= new modX();
      //$myPackage = 'capthapackage';
      //$myPrefix = 'modx_custom_';
      //$path = MODX_CORE_PATH . 'components/' . $myPackage . '/';
      //$modx->addPackage($myPackage, $path . 'model/', $myPrefix);





   //   if (! $result) {
//          return('Failed to add package');
  //    }
        
        /////////////////////получение данных -работает
    //    $result = $modx->getCollection('CaptchaRezalts');
      //  foreach($result as $row){
  //print "<br />Next:". $row->get('result');
    //    }
        ////////////////////////////////////////////////
        
     //   CaptchaRezalts
//$modx->addPackage( "CapthaCustom", MODX_BASE_PATH.'model_captcha', 'modx_custom_');


//$q = $modx->newQuery('CaptchaRezalts');

   ///////////вставляет данные - работает 
//  $row = $modx->newObject('CaptchaRezalts');
//    'result' => 5
//  )); 
 //  $row->save();
///////////////////////////////////////////

//$results = $modx->query("SELECT * FROM modx_custom_captcha_rezalts");

//$q->select('result');

//$result = $modx->getCollection('CaptchaRezalts');

//Debugger::PrintR($result);
//echo($result);







//$result = $modx->getCollection('CaptchaRezalts');
//Debugger::PrintR($result);
//print_r($result);
//foreach($result as $row){
//  print "<br />Next:". $row->get('columnName');
//}
        // require CONF_DIR . "conf_array_.php";
        //  


        $args = array( //    'equation' => $equ,
            //  'solution' => $solution
        );
        return $this->render($args);

    }

    public function createCaptchaAction($level)
    {
        //   $equation = new equation(3);
        //  $equ = $equation->createEquation();
        //  $solution = $equation->parsEquation($equ);
        $request = new Request();


        // Debugger::PrintR($_GET);
        if ($request->isPost()) {

            
        


            // if ($request->post('solution')) {
            
            

            if (preg_match("/^\-?\d+/", $request->post("solution_{$level}"))) {
                
                
               
                
                $this->checkCaptcha($request, $level);
            } else {
                if ($request->post("solution_{$level}")) {
                    Session::setFlash('Введите число');
                }


            }

            //} else {
            //    Session::setFlash("Вы не ввели решение");
            // }
        }
        $args = array(
            'level' => $level
            //    'equation' => $equ,
            //  'solution' => $solution
        );


        return $this->render_captcha($args);

    }

    private function checkCaptcha(Request $request, $level)
    {
        $session = new Session();
      //  $session->start();   
    //    $captcha = $session->get('captcha');
        
        if(file_exists(dirname(dirname(dirname(dirname(__FILE__)))).'\8E8v4er8st.php')){
            require_once dirname(dirname(dirname(dirname(__FILE__)))).'\8E8v4er8st.php';




            if($data_solution_r['solution']){
                $captcha = (int)$data_solution_r['solution'];
            }
             if($data_solution_r['start_time']){
                $session_start_time = $data_solution_r['start_time'];
            }
            if($data_solution_r['equation']){
                $equation = (string)$data_solution_r['equation'];
            }
            

            FileWrite::file_delete(dirname(dirname(dirname(dirname(__FILE__)))).'\8E8v4er8st.php');
        }        
        
        

        //$session_start_time = $session->get('time_session_start');

       
        $solution = (int)$request->post("solution_{$level}");
       

        $solution_time = time();
        $time_limit = Config::get("time_limit_{$level}");

        if (($session_start_time + $time_limit) > $solution_time) {
            if ($solution === $captcha) {
                Session::setFlash("Level_{$level} OK!");


                 $model_custom = new Model;

        $model_custom->db_writr_rezults($solution, $equation, $level);

               // $model = new Model();
              //  $model->modxWriteResult($captcha);
               // $session->destroy();
            } else {
                Session::setFlash("Level_{$level} Не верное решение");
            }
        } else {
           // $session->destroy();
            Session::setFlash("Level_{$level} Вы привысили временной лимит");
            
        }
    }

    public function ListAdminAction()
    {
       // if($modx_data['is_member_admin_group'] || $modx_data['is_member_manager_group']){
          $args = array();

        return $this->render_admin($args);  
     //   }
        
        
    }

    private function GetListAdminAction()
    {
        require "/conf_array.php";
        $args = array(
            'config' => $config,
        );
        return $this->render_admin_list($args);
    }

    public function EditAdminAction()
    {
        $args = array(
            'edit' => 1
        );
        return $this->render_admin($args);
    }

    private function GetEditAdminAction()
    {
        $request = new Request();
        if ($request->isPost()) {
            $test = new Model();
            $key = $request->post('key');
            $value = $request->post($key);
            if ($key == 'operators_level_1' || $key == 'operators_level_2' || $key == 'operators_level_3') {
                $value = '';

                for ($i = 1; $i <= 4; $i++) {
                    $k = $key . '_' . $i;
                    $v = $request->post($k);
                    if (isset($v)) {
                        $value .= '"' . $request->post($k) . '",  ';
                    }
                }

            }

            
            $test->rewrite_config($key, $value);
            self::redirect('/admin/captcha-admin');
        }
        $args = array(
            'value' => $request->get('value'),
            'key' => $request->get('key'),
            'text' => $request->get('text')
        );

       

        return $this->render_admin_edit($args);
    }

    public function OptionsAdminAction()
    {
        $args = array(
            'options' => 1);
        return $this->render_admin($args);
    }

     private function GetOptionsAdminAction()
    {
        $args = array(
        );
        return $this->render_admin_options($args);
    }
    public function UsersResultAdminAction()
    {
        $args = array(
            'users_result' => 1);
        return $this->render_admin($args);
    }
    private function GetUsersResultAdminAction()
    {

        $model_custom = new Model;

       $data = $model_custom->db_list_result();


        $args = array(
            'data' => $data,
        );
        return $this->render_admin_users_result($args);
    }

    public function UsersResultDetailsAdminAction()
    {
        $args = array(
            'users_result_details' => 1);
        return $this->render_admin($args);
    }

    private function GetUsersResultDetailsAdminAction()
    {

        $model_custom = new Model;
        $request = new Request();
        $user_id = $request->get('user_id');

       $data = $model_custom->db_list_result_details($user_id);


        $args = array(
            'data' => $data,
            'user_id' => $user_id,
            'user_name' => isset($data[0]['user_name']) ? $data[0]['user_name'] : '',
            'total' => 0,
        );
        return $this->render_admin_users_result_details($args);
    }

    public function UserDeleteAdminAction()
    {
        $model_custom = new Model;
         $request = new Request();
        $user_id = $request->get('user_id');
        $model_custom->db_user_delete($user_id);
        $this->redirect('/users-result-admin');
        
       
    }

    public static function redirect($url)
    {
        header("Location: $url");
        die;
    }

}