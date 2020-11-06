<?php /*%%SmartyHeaderCode:5706543725f9a884c7b6164-41165446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8b27059435e8a9df7b28980763add16ad655f99' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lookhijab.byranti\\themes\\default-bootstrap\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1556617332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5706543725f9a884c7b6164-41165446',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5f9a909f552648_40896843',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9a909f552648_40896843')) {function content_5f9a909f552648_40896843($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//localhost/lookhijab.byranti/id/cari" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Cari" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Cari</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP -->
<?php }} ?>
