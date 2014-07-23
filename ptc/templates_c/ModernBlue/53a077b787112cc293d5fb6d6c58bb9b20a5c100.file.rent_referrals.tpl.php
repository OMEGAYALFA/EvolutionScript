<?php /* Smarty version Smarty-3.1.13, created on 2014-07-13 01:40:25
         compiled from "/home/arshadir/public_html/ptc/templates/ModernBlue/rent_referrals.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196677872553c1a44125c057-97596691%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53a077b787112cc293d5fb6d6c58bb9b20a5c100' => 
    array (
      0 => '/home/arshadir/public_html/ptc/templates/ModernBlue/rent_referrals.tpl',
      1 => 1405031196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196677872553c1a44125c057-97596691',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'show_error' => 0,
    'error' => 0,
    'ref_pack' => 0,
    'pack' => 0,
    'rent_price' => 0,
    'user_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53c1a4412e6eb0_41729732',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c1a4412e6eb0_41729732')) {function content_53c1a4412e6eb0_41729732($_smarty_tpl) {?><!-- Content -->
<div class="widget-main-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['rentrefs'];?>
</div>
<div class="widget-content">
<?php if ($_smarty_tpl->tpl_vars['show_error']->value=='yes'){?>
<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

<?php }else{ ?>
<div style="display:none" id="errorbox" class="errorbox"></div> 
<form class="formclass" onsubmit="return submitpayment();" id="checkoutform">
<input type="hidden" name="action" value="buy" />
<input type="hidden" name="buy" value="rent_referrals" />
<table class="widget-tbl" width="100%">
	<tr>
    	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['item'];?>
:</td>
        <td>
                <select name="item" id="item">
                	<?php  $_smarty_tpl->tpl_vars['pack'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pack']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ref_pack']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pack']->key => $_smarty_tpl->tpl_vars['pack']->value){
$_smarty_tpl->tpl_vars['pack']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['pack']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['pack']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['referrals'];?>
 - $<?php echo $_smarty_tpl->tpl_vars['rent_price']->value*$_smarty_tpl->tpl_vars['pack']->value;?>
</option>
                   	<?php } ?>
                </select>
		</td>                
    </tr>
    <tr>
    	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['purchasebalance'];?>
:</td>
        <td>$<?php echo $_smarty_tpl->tpl_vars['user_info']->value['purchase_balance'];?>
</td>
    </tr>
    <tr>
    	<td colspan="2" align="center"><input type="submit" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['rentnow'];?>
" class="orange" /></td>
    </tr>
</table>

</form>
<?php }?>
</div>
<!-- End Content --><?php }} ?>