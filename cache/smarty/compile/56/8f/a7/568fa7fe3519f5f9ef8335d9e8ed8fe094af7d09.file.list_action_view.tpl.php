<?php /* Smarty version Smarty-3.1.19, created on 2020-07-10 08:26:15
         compiled from "C:\xampp\htdocs\sumiarsacompany\admin\themes\default\template\helpers\list\list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12711707225f080a079f71f1-51085976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '568fa7fe3519f5f9ef8335d9e8ed8fe094af7d09' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sumiarsacompany\\admin\\themes\\default\\template\\helpers\\list\\list_action_view.tpl',
      1 => 1556617332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12711707225f080a079f71f1-51085976',
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
  'unifunc' => 'content_5f080a07a4fb94_43591834',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f080a07a4fb94_43591834')) {function content_5f080a07a4fb94_43591834($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
	<i class="icon-search-plus"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a>
<?php }} ?>
