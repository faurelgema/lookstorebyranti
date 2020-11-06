<?php /* Smarty version Smarty-3.1.19, created on 2020-10-29 16:17:45
         compiled from "C:\xampp\htdocs\lookhijab.byranti\adminrel\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2104799395f9a88b9e2c1a2-44870445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2766f70ed29dd5dbea1623360c54df96f51809a7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lookhijab.byranti\\adminrel\\themes\\default\\template\\content.tpl',
      1 => 1556617332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2104799395f9a88b9e2c1a2-44870445',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5f9a88b9e9b5f4_04071300',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9a88b9e9b5f4_04071300')) {function content_5f9a88b9e9b5f4_04071300($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
