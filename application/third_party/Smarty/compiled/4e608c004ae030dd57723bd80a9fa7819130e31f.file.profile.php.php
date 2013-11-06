<?php /* Smarty version Smarty-3.1.13, created on 2013-11-06 14:48:13
         compiled from "application/views/v_users/profile.php" */ ?>
<?php /*%%SmartyHeaderCode:2039472887527a56adc58347-63369820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e608c004ae030dd57723bd80a9fa7819130e31f' => 
    array (
      0 => 'application/views/v_users/profile.php',
      1 => 1383697280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2039472887527a56adc58347-63369820',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_527a56ae0f8ba9_08210273',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527a56ae0f8ba9_08210273')) {function content_527a56ae0f8ba9_08210273($_smarty_tpl) {?>Hello user <?php echo $_smarty_tpl->tpl_vars['username']->value;?>

<br>
<?php echo form_open('user/handler_logout');?>

<?php echo form_submit('submit','Logout');?>

<?php echo form_close();?>
<?php }} ?>