<?php /* Smarty version Smarty-3.1.13, created on 2013-11-06 13:17:25
         compiled from "application/views/v_templates/warnings.php" */ ?>
<?php /*%%SmartyHeaderCode:632936003527a41659cf0e1-51725945%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7ddbfc4842ab1841aa9cd35cf1ca2392bf324cb' => 
    array (
      0 => 'application/views/v_templates/warnings.php',
      1 => 1383697280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '632936003527a41659cf0e1-51725945',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'warnings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_527a4166518073_95742219',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527a4166518073_95742219')) {function content_527a4166518073_95742219($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['warnings']->value)){?> Warning: <?php echo $_smarty_tpl->tpl_vars['warnings']->value;?>
 <?php }?>
<?php echo validation_errors();?>

<br><?php }} ?>