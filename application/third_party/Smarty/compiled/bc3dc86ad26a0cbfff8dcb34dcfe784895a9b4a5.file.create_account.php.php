<?php /* Smarty version Smarty-3.1.13, created on 2013-11-06 13:14:31
         compiled from "application/views/v_users/create_account.php" */ ?>
<?php /*%%SmartyHeaderCode:29079767527a40b7016a79-80924873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc3dc86ad26a0cbfff8dcb34dcfe784895a9b4a5' => 
    array (
      0 => 'application/views/v_users/create_account.php',
      1 => 1383697280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29079767527a40b7016a79-80924873',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_527a40b7081c11_17183656',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527a40b7081c11_17183656')) {function content_527a40b7081c11_17183656($_smarty_tpl) {?><h3> Create Account </h3>
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
<?php echo form_open('user/handler_create_account');?>

<?php echo form_input('username','','placeholder="Username" class="text01"');?>

<?php echo form_input('email','','placeholder="Email" class="text01"');?>

<?php echo form_password('password','','placeholder="Password" class="text01"');?>

<?php echo form_submit('submit','Create','class="button01"');?>

<?php echo form_close();?>

or <a href="<?php echo base_url();?>
login">Login</a><?php }} ?>