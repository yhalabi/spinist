<?php /* Smarty version Smarty-3.1.13, created on 2013-11-06 03:17:42
         compiled from "application\views\v_templates\warnings.php" */ ?>
<?php /*%%SmartyHeaderCode:474352796d40079767-64328530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80719f508305fa4dda04f4d7e36d820e8ba15bee' => 
    array (
      0 => 'application\\views\\v_templates\\warnings.php',
      1 => 1383693461,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '474352796d40079767-64328530',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52796d40089805_78051784',
  'variables' => 
  array (
    'warnings' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52796d40089805_78051784')) {function content_52796d40089805_78051784($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['warnings']->value)){?> Warning: <?php echo $_smarty_tpl->tpl_vars['warnings']->value;?>
 <?php }?>
<?php echo validation_errors();?>

<br><?php }} ?>