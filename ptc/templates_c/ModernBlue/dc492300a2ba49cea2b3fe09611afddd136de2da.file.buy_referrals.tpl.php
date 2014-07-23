<?php /* Smarty version Smarty-3.1.13, created on 2014-07-12 10:16:50
         compiled from "/home/arshadir/public_html/ptc/templates/ModernBlue/buy_referrals.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82549536653c0cbca98e7e6-38491550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc492300a2ba49cea2b3fe09611afddd136de2da' => 
    array (
      0 => '/home/arshadir/public_html/ptc/templates/ModernBlue/buy_referrals.tpl',
      1 => 1405031196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82549536653c0cbca98e7e6-38491550',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'countref' => 0,
    'buy_refs' => 0,
    'referral' => 0,
    'user_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53c0cbcaa3eba8_21134239',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c0cbcaa3eba8_21134239')) {function content_53c0cbcaa3eba8_21134239($_smarty_tpl) {?><!-- Content -->
<div class="widget-main-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['buyrefs'];?>
</div>
<div class="widget-content">
<?php if ($_smarty_tpl->tpl_vars['countref']->value==0){?>
<div id="error_box" class="errorbox"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['noenoughrefs'];?>
</div>
<?php }else{ ?>
<form class="formclass" onsubmit="return submitpayment();" id="checkoutform">
<input type="hidden" name="action" value="buy" />
<input type="hidden" name="buy" value="referrals" />
<table class="widget-tbl" width="100%">
	<tr>
    	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['item'];?>
:</td>
        <td>
                <select name="item" id="item">
                    <?php  $_smarty_tpl->tpl_vars['referral'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['referral']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['buy_refs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['referral']->key => $_smarty_tpl->tpl_vars['referral']->value){
$_smarty_tpl->tpl_vars['referral']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['referral']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['referral']->value['refs'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['referrals'];?>
 - $<?php echo $_smarty_tpl->tpl_vars['referral']->value['price'];?>
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
    	<td colspan="2" align="center"><input type="submit" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['buynow'];?>
" class="orange"></td>
    </tr>
</table>

</form>
<?php }?>
</div>
<?php }} ?>