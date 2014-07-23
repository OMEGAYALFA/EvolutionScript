<?php /* Smarty version Smarty-3.1.13, created on 2014-03-29 14:21:22
         compiled from "C:\WampDeveloper\Websites\collection.me\webroot\templates\ModernBlue\withdraw_history.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120865336979adf0bf8-12701115%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9887616ac022fbf6b67fbfab3e0b7da84385667a' => 
    array (
      0 => 'C:\\WampDeveloper\\Websites\\collection.me\\webroot\\templates\\ModernBlue\\withdraw_history.tpl',
      1 => 1394168002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120865336979adf0bf8-12701115',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'paginator' => 0,
    'thelist' => 0,
    'item' => 0,
    'settings' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5336979aedcf95_33176634',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5336979aedcf95_33176634')) {function content_5336979aedcf95_33176634($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\WampDeveloper\\Websites\\collection.me\\webroot\\includes\\plugins\\smarty\\plugins\\modifier.date_format.php';
?><!-- Content -->

<div class="widget-main-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['withdrawhistory'];?>
</div>
<div class="widget-content">
<table width="100%" class="widget-tbl">
<tr class="titles">
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('date',$_smarty_tpl->tpl_vars['lang']->value['txt']['date']);?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('account',$_smarty_tpl->tpl_vars['lang']->value['txt']['account']);?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('method',$_smarty_tpl->tpl_vars['lang']->value['txt']['method']);?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('amount',$_smarty_tpl->tpl_vars['lang']->value['txt']['amount']);?>
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
                <td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['date'],"%b %e %Y %r");?>
</td>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['account'];?>
</td>
                <td align="center"><img src="images/proofs/<?php echo $_smarty_tpl->tpl_vars['item']->value['method'];?>
.gif" /></td>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['amount'];?>
</td>
                <td align="center">
                <?php if ($_smarty_tpl->tpl_vars['item']->value['status']=='Completed'){?>
                <span class="item_completed"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['statuscompleted'];?>
</span>
                <?php }elseif($_smarty_tpl->tpl_vars['item']->value['status']=='Pending'){?>
                <span class="item_pending"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['statuspending'];?>
</span>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['cancel_pendingwithdraw']=='yes'){?>- <a href="./?view=account&page=withdraw_history&cancel=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['cancel'];?>
</a><?php }?>
                <?php }else{ ?><span class="item_pending"><?php echo $_smarty_tpl->tpl_vars['item']->value['status'];?>
</span><?php }?>
                </td>
            </tr>
        <?php } ?>    

        <?php if ($_smarty_tpl->tpl_vars['paginator']->value->totalResults()==0){?>
        <tr>
            <td colspan="5" align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['no_withdraw'];?>
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
<!-- End Content --><?php }} ?>