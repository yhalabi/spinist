<?php /* Smarty version Smarty-3.1.13, created on 2013-11-05 02:22:52
         compiled from "application\views\welcome_message.php" */ ?>
<?php /*%%SmartyHeaderCode:2995452781c36c15db1-58718653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3672befd4b651eb797846ddb433ce338da1d87e3' => 
    array (
      0 => 'application\\views\\welcome_message.php',
      1 => 1383603771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2995452781c36c15db1-58718653',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52781c36c51da2_20382252',
  'variables' => 
  array (
    'time' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52781c36c51da2_20382252')) {function content_52781c36c51da2_20382252($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to Spinist's CodeIgniter!</h1>

	<div id="body">
		<p>The site is currently under active development, we will be online as soon as we are ready, thank you for the visit.</p>

		<p> <a href="user_guide/">Development Guide</a></p>
	</div>

	<p class="footer">Page rendered in <strong><?php echo $_smarty_tpl->tpl_vars['time']->value;?>
</strong> seconds</p>
</div>

</body>
</html><?php }} ?>