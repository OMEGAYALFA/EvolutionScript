<?php /* Smarty version Smarty-3.1.13, created on 2014-03-17 12:16:40
         compiled from "C:\WampDeveloper\Websites\collection.me\webroot\templates\ModernBlue\history.tpl" */ ?>
<?php /*%%SmartyHeaderCode:94325326e7a8075991-91592069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5acae02affdc814ec67b1fb1ece812fa8f37bae' => 
    array (
      0 => 'C:\\WampDeveloper\\Websites\\collection.me\\webroot\\templates\\ModernBlue\\history.tpl',
      1 => 1394167998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94325326e7a8075991-91592069',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'paginator' => 0,
    'thelist' => 0,
    'item' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5326e7a81fd293_98186353',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5326e7a81fd293_98186353')) {function content_5326e7a81fd293_98186353($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\WampDeveloper\\Websites\\collection.me\\webroot\\includes\\plugins\\smarty\\plugins\\modifier.date_format.php';
?><!-- Content -->
<div class="widget-main-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['orderhistory'];?>
</div>
<div class="widget-content">
<table width="100%" class="widget-tbl">
<tr class="titles">
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('date',$_smarty_tpl->tpl_vars['lang']->value['txt']['date']);?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('type',$_smarty_tpl->tpl_vars['lang']->value['txt']['product']);?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('price',$_smarty_tpl->tpl_vars['lang']->value['txt']['price']);?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('status',$_smarty_tpl->tpl_vars['lang']->value['txt']['status']);?>
</td>
    </tr>
    
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['thelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <tr>
                <td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['date'],"%b %e, %Y");?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</td>
                <td align="center">
                <?php if ($_smarty_tpl->tpl_vars['item']->value['status']=='Completed'){?><span class="item_completed"><?php echo $_smarty_tpl->tpl_vars['item']->value['status'];?>
</span><?php }else{ ?><span class="item_pending"><?php echo $_smarty_tpl->tpl_vars['item']->value['status'];?>
</span><?php }?>
                </td>
            </tr>
        <?php } ?>    

        <?php if ($_smarty_tpl->tpl_vars['paginator']->value->totalResults()==0){?>
        <tr>
            <td colspan="10" align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['no_order'];?>
</td>
        </tr>
        <?php }?>
</table>

<div style="margin-top:10px">
    <input type="button" value="&larr; <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['prev_page'];?>
" <?php if ($_smarty_tpl->tpl_vars['paginator']->value->totalPages()==1||$_smarty_tpl->tpl_vars['paginator']->value->getPage()==1){?>disabled class="btn-disabled"<?php }else{ ?>onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['paginator']->value->prevpage();?>
';"<?php }?> />

    <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['next_page'];?>
 &rarr;" <?php if ($_smarty_tpl->tpl_vars['paginator']->value->totalPages()==0||$_smarty_tpl->tpl_vars['paginator']->value->totalPages()==$_smarty_tpl->tpl_vars['paginator']->value->getPage()){?>disabled class="btn-disabled"<?php }else{ ?>onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['paginator']->value->nextpage();?>
';"<?php }?> />
    	<?php if ($_smarty_tpl->tpl_vars['paginator']->value->totalPages()>1){?>
        <div style="float:right">
        <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['jump_page'];?>
: 
        <select name="p" style="min-width:inherit;" id="pagid" onchange="gotopage(this.value)">
           <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['paginator']->value->totalPages()+1 - (1) : 1-($_smarty_tpl->tpl_vars['paginator']->value->totalPages())+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
				<?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['paginator']->value->getPage()){?>
                	<option selected value="<?php echo $_smarty_tpl->tpl_vars['paginator']->value->gotopage($_smarty_tpl->tpl_vars['i']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
				<?php }else{ ?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['paginator']->value->gotopage($_smarty_tpl->tpl_vars['i']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
				<?php }?>
            <?php }} ?>
        </select> 
        <script type="text/javascript">
			function gotopage(pageid){
				location.href=pageid;
			}
		</script>
        </div> 
        <div class="clear"></div>
        <?php }?>
    </div>



</div>
<?php }} ?>