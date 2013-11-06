<?php /* Smarty version Smarty-3.1.13, created on 2013-11-06 02:12:16
         compiled from "application\views\v_templates\errors.php" */ ?>
<?php /*%%SmartyHeaderCode:532552796d4001ade3-10602046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6e8c8832d70c75af7055fdf8f13228bdd22f7bc' => 
    array (
      0 => 'application\\views\\v_templates\\errors.php',
      1 => 1383688859,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '532552796d4001ade3-10602046',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52796d40055155_04419945',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52796d40055155_04419945')) {function content_52796d40055155_04419945($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['errors']->value)){?> Error: <?php echo $_smarty_tpl->tpl_vars['errors']->value;?>
 <?php }?> 
<br><?php }} ?>