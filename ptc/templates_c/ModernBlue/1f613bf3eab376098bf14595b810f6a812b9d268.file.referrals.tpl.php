<?php /* Smarty version Smarty-3.1.13, created on 2014-07-13 01:24:22
         compiled from "/home/arshadir/public_html/ptc/templates/ModernBlue/referrals.tpl" */ ?>
<?php /*%%SmartyHeaderCode:188799783253c1a07ee89485-25300802%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f613bf3eab376098bf14595b810f6a812b9d268' => 
    array (
      0 => '/home/arshadir/public_html/ptc/templates/ModernBlue/referrals.tpl',
      1 => 1405031196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188799783253c1a07ee89485-25300802',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ref_deletion' => 0,
    'user_info' => 0,
    'lang' => 0,
    'paginator' => 0,
    'settings' => 0,
    'thelist' => 0,
    'item' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53c1a07f0a5403_78569931',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c1a07f0a5403_78569931')) {function content_53c1a07f0a5403_78569931($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/arshadir/public_html/ptc/includes/plugins/smarty/plugins/modifier.date_format.php';
?><!-- Content -->
<script type="text/javascript">
$(document).on('click','input[type=checkbox]', function(){
	sowdeletionbar();
});
var deletion_price = <?php echo $_smarty_tpl->tpl_vars['ref_deletion']->value;?>
;
var rental_balance = <?php echo $_smarty_tpl->tpl_vars['user_info']->value['purchase_balance'];?>
;
var noenoughfunds = '<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['nofoundspb'];?>
';
var totaltopay = '<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['totaltopay'];?>
';
</script>

<div class="widget-main-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['directrefs'];?>
</div>
<div class="widget-content">
<form method="post" onsubmit="return submitform(this.id);" id="reflist">
<table width="100%" class="widget-tbl">
<tr class="titles">
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('username',$_smarty_tpl->tpl_vars['lang']->value['txt']['ref']);?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('country',$_smarty_tpl->tpl_vars['lang']->value['txt']['country']);?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('signup',$_smarty_tpl->tpl_vars['lang']->value['txt']['refsince']);?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('for_reflastclick',$_smarty_tpl->tpl_vars['lang']->value['txt']['lastclick']);?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('for_refclicks',$_smarty_tpl->tpl_vars['lang']->value['txt']['clicks']);?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('for_refearned',$_smarty_tpl->tpl_vars['lang']->value['txt']['earned']);?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('comes_from',$_smarty_tpl->tpl_vars['lang']->value['txt']['comes_from']);?>
</td>
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['ref_deletion']=='yes'){?>
        <td align="center"><input type="checkbox" id="checkall" /></td>
        <?php }?>
    </tr>

        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['thelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <tr>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['username'];?>
</td>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['country'];?>
</td>
                <td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['signup'],"%b %e, %Y");?>
</td>
                <td align="center"><?php if ($_smarty_tpl->tpl_vars['item']->value['for_reflastclick']==0){?><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['never'];?>
<?php }else{ ?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['for_reflastclick'],"%b %e, %Y");?>
<?php }?></td>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['for_refclicks'];?>
</td>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['for_refearned'];?>
</td>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['comes_from'];?>
</td>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['ref_deletion']=='yes'){?>
                <td align="center"><input type="checkbox" name="ref[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="checkall" /></td>
                <?php }?>
            </tr>
        <?php } ?>    

        <?php if ($_smarty_tpl->tpl_vars['paginator']->value->totalResults()==0){?>
        <tr>
            <td colspan="10" align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['no_directrefs'];?>
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
    

<?php if ($_smarty_tpl->tpl_vars['paginator']->value->totalResults()!=0){?>
        <div class="widget-ref-option">
        
          <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['refquestaction'];?>

          <div style="padding-top:5px">
          <select name="action" id="descr" onchange="sowdeletionbar()" class="primary textbox">
          <option value="">--- <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['selectone'];?>
 ---</option>
          <option value="delete"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['ideletethem'];?>
</option>
          </select>
          </div>
          <div id="priceref" style="padding:10px; color:#008000; font-weight:bold; display:none">
          </div>
          <div id="priceref2" style="padding:10px; color:#ff0000; font-weight:bold; display:none">
          </div>
          <input type="submit" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['doit'];?>
" class="orange" id="paybutton" style="display:none" />
        
        </div>
<?php }?>
</form>


</div><?php }} ?>