<?php /* Smarty version Smarty-3.1.19, created on 2020-10-29 16:18:39
         compiled from "C:\xampp\htdocs\lookhijab.byranti\adminrel\themes\default\template\helpers\list\list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12944479285f9a88ef67f8b0-85233485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '586823ce46fe1e623acfefcbeef363a951c2ad01' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lookhijab.byranti\\adminrel\\themes\\default\\template\\helpers\\list\\list_action_delete.tpl',
      1 => 1556617332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12944479285f9a88ef67f8b0-85233485',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5f9a88ef6ac447_00137823',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9a88ef6ac447_00137823')) {function content_5f9a88ef6ac447_00137823($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)) {?> onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){return true;}else{event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="delete">
	<i class="icon-trash"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a>
<?php }} ?>
