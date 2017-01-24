<?php /* Smarty version 3.1.27, created on 2016-12-11 17:45:52
         compiled from "C:\OpenServer\domains\cp.ua\manager\templates\default\resource\staticresource\create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11656584d66a01f4c94_46698244%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bdb72dc236c148a164559db050589f32dfaf901' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cp.ua\\manager\\templates\\default\\resource\\staticresource\\create.tpl',
      1 => 1469114022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11656584d66a01f4c94_46698244',
  'variables' => 
  array (
    'tvOutput' => 0,
    'onDocFormPrerender' => 0,
    'resource' => 0,
    '_config' => 0,
    'onRichTextEditorInit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584d66a02ac640_78816388',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584d66a02ac640_78816388')) {
function content_584d66a02ac640_78816388 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11656584d66a01f4c94_46698244';
?>
<div id="modx-panel-static-div"></div>
<div id="modx-resource-tvs-div" class="modx-resource-tab x-form-label-left x-panel"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['tvOutput']->value)===null||$tmp==='' ? '' : $tmp);?>
</div>

<?php echo $_smarty_tpl->tpl_vars['onDocFormPrerender']->value;?>

<?php if ($_smarty_tpl->tpl_vars['resource']->value->richtext && $_smarty_tpl->tpl_vars['_config']->value['use_editor']) {?>
    <?php echo $_smarty_tpl->tpl_vars['onRichTextEditorInit']->value;?>

<?php }

}
}
?>