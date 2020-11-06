<?php /* Smarty version Smarty-3.1.19, created on 2020-10-29 16:19:55
         compiled from "C:\xampp\htdocs\lookhijab.byranti\adminrel\themes\default\template\helpers\list\list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17390476715f9a893b4db3d2-77472083%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23166c58fd8d625ebd3013d32a09f774a420c78b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lookhijab.byranti\\adminrel\\themes\\default\\template\\helpers\\list\\list_action_view.tpl',
      1 => 1556617332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17390476715f9a893b4db3d2-77472083',
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
  'unifunc' => 'content_5f9a893b588c26_26523295',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9a893b588c26_26523295')) {function content_5f9a893b588c26_26523295($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
	<i class="icon-search-plus"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a>
<?php }} ?>
