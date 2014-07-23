<?php /* Smarty version Smarty-3.1.13, created on 2014-03-15 20:26:29
         compiled from "C:\WampDeveloper\Websites\collection.me\webroot\templates\ModernBlue\ptsu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:237865324b7752bf394-62626372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6a9b595739142cdc09bfdfaaf1b4022e3fb6d0c' => 
    array (
      0 => 'C:\\WampDeveloper\\Websites\\collection.me\\webroot\\templates\\ModernBlue\\ptsu.tpl',
      1 => 1394168000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '237865324b7752bf394-62626372',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'myads' => 0,
    'advertisement' => 0,
    'ad' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5324b77532f205_74866695',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5324b77532f205_74866695')) {function content_5324b77532f205_74866695($_smarty_tpl) {?><!-- Content -->
    
    <script>
	$(function(){
		$(".ad_info").hover(function(){
			$(this).addClass('ui-state-hover');
		}, function(){
			$(this).removeClass('ui-state-hover');
		});
		$(".ad-visited td").addClass('ui-state-default');
	});
	</script>
    
<div class="widget-main-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['ptsu'];?>
</div>

<div class="widget-content">
<?php if ($_smarty_tpl->tpl_vars['myads']->value!=0){?>
<table width="100%">
	<tr>
    	<td><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['title'];?>
</strong></td>
        <td width="80" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['reward'];?>
</strong></td>
    </tr>
                <?php  $_smarty_tpl->tpl_vars['ad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['advertisement']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ad']->key => $_smarty_tpl->tpl_vars['ad']->value){
$_smarty_tpl->tpl_vars['ad']->_loop = true;
?>
    <tr>
    	<td class="ptsu_content">
        <div onclick="location.href='index.php?view=account&page=ptsu&id=<?php echo $_smarty_tpl->tpl_vars['ad']->value['id'];?>
';">
        <div class="ptsu_title"><?php echo $_smarty_tpl->tpl_vars['ad']->value['title'];?>
</div>
        <div class="ptsu_descr"><?php echo $_smarty_tpl->tpl_vars['ad']->value['descr'];?>
</div>
        <div class="ptsu_url"><?php echo $_smarty_tpl->tpl_vars['ad']->value['web'];?>
</div>
        </div>
        </td>
        <td align="center" class="ptsu_content ptsu_reward">
        $<?php echo $_smarty_tpl->tpl_vars['ad']->value['value'];?>

        </td>
    </tr>           
                                
                <?php } ?>    
</table>

    
	

    	
    
<?php }else{ ?>

	<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['adnotfound'];?>


<?php }?>
</div>

   
<!-- End Content -->
<?php }} ?>