<?php /* Smarty version Smarty-3.1.13, created on 2013-11-06 01:47:36
         compiled from "application\views\v_users\profile.php" */ ?>
<?php /*%%SmartyHeaderCode:13254527964a74208d0-67205244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fd771316c705c44d7ffb3303f59b4c474870f89' => 
    array (
      0 => 'application\\views\\v_users\\profile.php',
      1 => 1383688049,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13254527964a74208d0-67205244',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_527964a7453ef1_15026918',
  'variables' => 
  array (
    'username' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527964a7453ef1_15026918')) {function content_527964a7453ef1_15026918($_smarty_tpl) {?>Hello user <?php echo $_smarty_tpl->tpl_vars['username']->value;?>

<br>
<?php echo form_open('user/handler_logout');?>

<?php echo form_submit('submit','Logout');?>

<?php echo form_close();?>
<?php }} ?>