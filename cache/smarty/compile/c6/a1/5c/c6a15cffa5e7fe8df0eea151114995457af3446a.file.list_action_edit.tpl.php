<?php /* Smarty version Smarty-3.1.19, created on 2020-10-29 15:54:50
         compiled from "C:\xampp\htdocs\sumiarsacompany\adminrel\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8768082145f9a835a459be1-31113472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6a15cffa5e7fe8df0eea151114995457af3446a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sumiarsacompany\\adminrel\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1556617332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8768082145f9a835a459be1-31113472',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5f9a835ae1cdc4_16660175',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9a835ae1cdc4_16660175')) {function content_5f9a835ae1cdc4_16660175($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a>
<?php }} ?>
