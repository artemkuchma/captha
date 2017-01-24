<?php
//Using [[get_user_results?user_id='id пользователя']]
$user_id = isset($user_id)? $user_id : '';

$myPackage = 'capthapackage';
$myPrefix = 'modx_custom_';
$path = MODX_CORE_PATH . 'components/' . $myPackage . '/';
$modx->addPackage($myPackage, $path . 'model/', $myPrefix);

$result = $modx->getCollection('CaptchaRezalts', array('user_id' => $user_id));
 if (! $result) {
          return;
      }

    $data = '';
    $count = 0;
        foreach($result as $row){
          
            $count ++;
            $data .= '<tr>';
            $data .= '<td>'.$count.'</td>';
            $data .= '<td>'.$row->get('level').'</td>';
            $data .= '<td>'.$row->get('equation').'</td>';
            $data .= '<td>'.$row->get('result').'</td>';
            $data .= '<td>'.$row->get('cost').'</td>';
            $data .= '<td>'.$row->get('date').'</td>';
            $data .= '</tr>';
        }
        
       $count_total = $modx->query("SELECT SUM(cost) FROM modx_custom_captcha_rezalts WHERE user_id=$user_id");
   $r = $count_total->fetch(PDO::FETCH_ASSOC);
  
  
    $data .= '<tr class="total_result">';
    $data .= '<td>Сумма</td>';
    $data .= '<td></td>';
    $data .= '<td></td>';
    $data .= '<td></td>';
    $data .= '<td>'.$r['SUM(cost)'].'</td>';
    $data .= '<td></td>';
    $data .= '</tr>';
   
   

      
        return $data;
return;
