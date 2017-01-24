<?php /* Smarty version 3.1.27, created on 2016-12-04 13:30:26
         compiled from "C:\OpenServer\domains\cp.ua\manager\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:138555843f0428d6ff9_03303445%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b96d5c9ea8e3d24e6f37392d5ec192eb55732035' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cp.ua\\manager\\templates\\default\\welcome.tpl',
      1 => 1469114022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138555843f0428d6ff9_03303445',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5843f0428dae72_70319682',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5843f0428dae72_70319682')) {
function content_5843f0428dae72_70319682 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '138555843f0428d6ff9_03303445';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>