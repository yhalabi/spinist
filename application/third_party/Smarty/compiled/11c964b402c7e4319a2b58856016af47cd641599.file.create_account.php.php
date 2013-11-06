<?php /* Smarty version Smarty-3.1.13, created on 2013-11-06 03:57:31
         compiled from "application\views\v_users\create_account.php" */ ?>
<?php /*%%SmartyHeaderCode:7184527825bc091df4-15163552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11c964b402c7e4319a2b58856016af47cd641599' => 
    array (
      0 => 'application\\views\\v_users\\create_account.php',
      1 => 1383695850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7184527825bc091df4-15163552',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_527825bc0ca5c6_84097034',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527825bc0ca5c6_84097034')) {function content_527825bc0ca5c6_84097034($_smarty_tpl) {?><h3> Create Account </h3>
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