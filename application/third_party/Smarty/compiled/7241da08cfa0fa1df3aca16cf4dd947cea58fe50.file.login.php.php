<?php /* Smarty version Smarty-3.1.13, created on 2013-11-06 03:57:33
         compiled from "application\views\v_users\login.php" */ ?>
<?php /*%%SmartyHeaderCode:276325279763912aa92-26255356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7241da08cfa0fa1df3aca16cf4dd947cea58fe50' => 
    array (
      0 => 'application\\views\\v_users\\login.php',
      1 => 1383695843,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '276325279763912aa92-26255356',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_527976391662f9_80258932',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527976391662f9_80258932')) {function content_527976391662f9_80258932($_smarty_tpl) {?><h3> Login </h3>
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