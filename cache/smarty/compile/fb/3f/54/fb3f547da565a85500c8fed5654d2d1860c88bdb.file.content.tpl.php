<?php /* Smarty version Smarty-3.1.19, created on 2020-07-10 13:59:28
         compiled from "C:\xampp\htdocs\sumiarsacompany\adminrel\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15415567205f0811d06a5cd7-89557592%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb3f547da565a85500c8fed5654d2d1860c88bdb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sumiarsacompany\\adminrel\\themes\\default\\template\\content.tpl',
      1 => 1556617332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15415567205f0811d06a5cd7-89557592',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5f0811d071b205_89373211',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f0811d071b205_89373211')) {function content_5f0811d071b205_89373211($_smarty_tpl) {?>
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
