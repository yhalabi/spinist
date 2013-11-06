<?php /* Smarty version Smarty-3.1.13, created on 2013-11-06 13:13:20
         compiled from "application/views/v_users/login.php" */ ?>
<?php /*%%SmartyHeaderCode:1434809150527a407049c6f5-60837205%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31f2921593f65d07dea64a29a12cd7e117f37a10' => 
    array (
      0 => 'application/views/v_users/login.php',
      1 => 1383697280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1434809150527a407049c6f5-60837205',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_527a40704dffd2_07849690',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527a40704dffd2_07849690')) {function content_527a40704dffd2_07849690($_smarty_tpl) {?><h3> Login </h3>
<style>
body{
	font-family: calibri;
}
.text01{
	padding: 5px;
	padding-left: 10px;
	padding-right: 10px;
}
.button01{
	padding: 5px;
	padding-left: 10px;
	padding-right: 10px;
}
</style>
<?php echo form_open('user/handler_login');?>

<?php echo form_input('username_or_email','','placeholder="Username or Email" class="text01"');?>

<?php echo form_password('password','','placeholder="Password" class="text01"');?>

<?php echo form_submit('submit','Login','class="button01"');?>

<?php echo form_close();?>

<br>
or <a href="<?php echo base_url();?>
create">Create new account</a><?php }} ?>