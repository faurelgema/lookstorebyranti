<?php /* Smarty version Smarty-3.1.19, created on 2020-07-10 13:57:11
         compiled from "C:\xampp\htdocs\sumiarsacompany\modules\blockfacebook\blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20052753185f08114778b539-67369103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be02edd19e74eabccf7156109f592bf3aa40f99d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sumiarsacompany\\modules\\blockfacebook\\blockfacebook.tpl',
      1 => 1556617332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20052753185f08114778b539-67369103',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5f081147886ca3_68049225',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f081147886ca3_68049225')) {function content_5f081147886ca3_68049225($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
