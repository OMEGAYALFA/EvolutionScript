<?php /* Smarty version Smarty-3.1.13, created on 2014-07-13 01:24:36
         compiled from "/home/arshadir/public_html/ptc/templates/ModernBlue/rented_referrals.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140035971353c1a08c9b3548-42212550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0701ff50074a4db7f544fa160619b24519f2ac3d' => 
    array (
      0 => '/home/arshadir/public_html/ptc/templates/ModernBlue/rented_referrals.tpl',
      1 => 1405031196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140035971353c1a08c9b3548-42212550',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'recycle_price' => 0,
    'renew_price' => 0,
    'user_info' => 0,
    'lang' => 0,
    'ref_discount' => 0,
    'paginator' => 0,
    'thelist' => 0,
    'item' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53c1a08cb2dbf7_43579373',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c1a08cb2dbf7_43579373')) {function content_53c1a08cb2dbf7_43579373($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/arshadir/public_html/ptc/includes/plugins/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_replace')) include '/home/arshadir/public_html/ptc/includes/plugins/smarty/plugins/modifier.replace.php';
?><script>
$(document).on('click','input[type=checkbox]', function(){
	showextensionbar();
});
var recycle_price = <?php echo $_smarty_tpl->tpl_vars['recycle_price']->value;?>
;
var renew_price = <?php echo $_smarty_tpl->tpl_vars['renew_price']->value;?>
;
var rental_balance = <?php echo $_smarty_tpl->tpl_vars['user_info']->value['purchase_balance'];?>
;
var noenoughfunds = '<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['nofoundspb'];?>
';
var totaltopay = '<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['totaltopay'];?>
';

var ref_discount = new Array();
var ref_extension = new Array();
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['d'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['d']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['name'] = 'd';
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ref_discount']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total']);
?>                  
ref_discount[<?php echo $_smarty_tpl->tpl_vars['ref_discount']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['id'];?>
] = <?php echo $_smarty_tpl->tpl_vars['ref_discount']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['discount'];?>
;
ref_extension[<?php echo $_smarty_tpl->tpl_vars['ref_discount']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['id'];?>
] = <?php echo $_smarty_tpl->tpl_vars['ref_discount']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['days'];?>
;
<?php endfor; endif; ?>
</script>

<!-- Content -->

<script>
function changepage(){
	var rpage = $('#pageselector').val();

	
	location.href = 'index.php?view=account&page=rented_referrals&sortby={$sortby}&tsort={$tsort}&p='+rpage;
}
</script>

<div class="widget-main-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['rentedrefs'];?>
</div>
<div class="widget-content">
	<div class="info_box"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['autopay'];?>
:
<?php if ($_smarty_tpl->tpl_vars['user_info']->value['autopay']=='no'){?>
<span style="color:red; font-weight:bold"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['disable'];?>
</span>, <a href="index.php?view=account&page=rented_referrals&autopay=on"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['clickheretochange'];?>
</a>
<?php }else{ ?>
<span style="color:green; font-weight:bold"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['enable'];?>
</span>, <a href="index.php?view=account&page=rented_referrals&autopay=off"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['clickheretochange'];?>
</a>
<?php }?></div>

<form method="post" onsubmit="return submitform(this.id);" id="reflist">
<input type="hidden" name="do" value="rentact" />
<table width="100%" class="widget-tbl">
<tr class="titles">
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('id',$_smarty_tpl->tpl_vars['lang']->value['txt']['ref']);?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('rented_time',$_smarty_tpl->tpl_vars['lang']->value['txt']['refsince']);?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('rented_expires',$_smarty_tpl->tpl_vars['lang']->value['txt']['expires']);?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('rented_lastclick',$_smarty_tpl->tpl_vars['lang']->value['txt']['lastclick']);?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('rented_clicks',$_smarty_tpl->tpl_vars['lang']->value['txt']['clicks']);?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('rented_earned',$_smarty_tpl->tpl_vars['lang']->value['txt']['earned']);?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('rented_avg',$_smarty_tpl->tpl_vars['lang']->value['txt']['avarage']);?>
</td>
        <td align="center"><input type="checkbox" id="checkall" /></td>
    </tr>

        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['thelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <tr>
                <td align="center">R<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
                <td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['rented_time'],"%d-%m-%Y");?>
</td>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['days_left'];?>
 days</td>
                <td align="center"><?php if ($_smarty_tpl->tpl_vars['item']->value['rented_lastclick']!=0){?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['rented_lastclick'],"%d-%m-%Y");?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['never'];?>
<?php }?></td>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['rented_clicks'];?>
</td>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['rented_earned'];?>
</td>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['avarage'];?>
</td>
                <td align="center"><input type="checkbox" name="ref[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="checkall" /></td>
            </tr>
        <?php } ?>    

        <?php if ($_smarty_tpl->tpl_vars['paginator']->value->totalResults()==0){?>
        <tr>
            <td colspan="10" align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['no_rentedrefs'];?>
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
    <div id="rentedbar" style="display:none" align="center">
    
      <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['refquestaction'];?>

      <div style="padding-top:5px">
      <select name="action" id="descr" onchange="showextensionbar()">
        <option value="">--- <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['selectone'];?>
 ---</option>
        <option value="recycle"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['irecycle'];?>
</option>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['d'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['d']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['name'] = 'd';
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ref_discount']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total']);
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['ref_discount']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['id'];?>
"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lang']->value['txt']['iwantextendmoredays'],"%days%",$_smarty_tpl->tpl_vars['ref_discount']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['days']);?>
<?php if ($_smarty_tpl->tpl_vars['ref_discount']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['discount']!=0){?> - <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lang']->value['txt']['percentageoff'],"%number%",$_smarty_tpl->tpl_vars['ref_discount']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['discount']);?>
<?php }?></option>
        <?php endfor; endif; ?>
      </select>
      </div>
      <div id="priceref" style="padding:10px; color:#008000; font-weight:bold; display:none">
      </div>
      <div id="priceref2" style="padding:10px; color:#ff0000; font-weight:bold; display:none">
      </div>
      <input type="submit" id="paybutton" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['doit'];?>
" class="orange" />
      <input type="button" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['addfunds'];?>
" class="buttonblue" onclick="location.href='./?view=account&page=addfunds';" />
      
    
    </div>
</form>
</div>




<!-- End Content --><?php }} ?>