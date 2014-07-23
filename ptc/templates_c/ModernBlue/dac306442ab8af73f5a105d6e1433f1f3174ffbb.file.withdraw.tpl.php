<?php /* Smarty version Smarty-3.1.13, created on 2014-07-13 06:27:56
         compiled from "/home/arshadir/public_html/ptc/templates/ModernBlue/withdraw.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82002807553c1e4ad12c702-04839080%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dac306442ab8af73f5a105d6e1433f1f3174ffbb' => 
    array (
      0 => '/home/arshadir/public_html/ptc/templates/ModernBlue/withdraw.tpl',
      1 => 1405216674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82002807553c1e4ad12c702-04839080',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53c1e4ad1efec6_23422207',
  'variables' => 
  array (
    'lang' => 0,
    'user_info' => 0,
    'minimum_cashout' => 0,
    'settings' => 0,
    'can_cashout' => 0,
    'mymembership' => 0,
    'next_datec' => 0,
    'gateway' => 0,
    'usrgateway' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c1e4ad1efec6_23422207')) {function content_53c1e4ad1efec6_23422207($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/arshadir/public_html/ptc/includes/plugins/smarty/plugins/modifier.replace.php';
?><!-- Content -->
<div class="widget-main-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['withdrawtitle'];?>
</div>

<div class="widget-content">
<?php if ($_smarty_tpl->tpl_vars['user_info']->value['money']<$_smarty_tpl->tpl_vars['minimum_cashout']->value){?>
	<div class="error_box">
	<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lang']->value['txt']['nocashout'],"%money",$_smarty_tpl->tpl_vars['minimum_cashout']->value);?>

    </div>
<?php }elseif($_smarty_tpl->tpl_vars['user_info']->value['clicks']<$_smarty_tpl->tpl_vars['settings']->value['withdraw_clicks']){?>
	<div class="error_box">
	<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lang']->value['txt']['nocashout2'],"%minclicks",$_smarty_tpl->tpl_vars['settings']->value['withdraw_clicks']);?>

    </div>
<?php }elseif($_smarty_tpl->tpl_vars['can_cashout']->value=='no'){?>
	<div class="error_box">
	<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['lang']->value['txt']['nocashout3'],"%days",$_smarty_tpl->tpl_vars['mymembership']->value['cashout_time']),"%nextcashout",$_smarty_tpl->tpl_vars['next_datec']->value);?>

    </div>
<?php }else{ ?>
<div style="display:none" id="message_sent"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['paymentsent'];?>
</div>
<script>
function showoption(id){
	$("#paymentgateways").hide();
	$("#gateway-"+id).fadeIn();
}
function showgateways(id){
	$("#gateway-"+id).hide();
	$("#paymentgateways").fadeIn();
}
</script>
    <div id="paymentgateways" align="center">
    	<div class="padding5" align="right">لطفا یک روش برای تسویه حساب انتخاب نمایید</div>
    	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['gateway']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total']);
?>
        	<img src="images/gateways/<?php echo $_smarty_tpl->tpl_vars['gateway']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id'];?>
.png" class="pointer" onclick="showoption(<?php echo $_smarty_tpl->tpl_vars['gateway']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id'];?>
);" />
        <?php endfor; endif; ?>
    </div>

    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['gateway']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total']);
?>
	<div id="gateway-<?php echo $_smarty_tpl->tpl_vars['gateway']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id'];?>
" style="display:none">
<form class="formclass" id="withdrawform-<?php echo $_smarty_tpl->tpl_vars['gateway']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id'];?>
" onsubmit="return submitform(this.id);">
<table cellpadding="4" width="100%" class="widget-tbl">
<tr>
	<td align="right" width="50%"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['paymentmethod'];?>
:</td>
    <td><?php echo $_smarty_tpl->tpl_vars['gateway']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['name'];?>
</td>
</tr>
<tr>
	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['paymentacc'];?>
:</td>
    <td>
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['u'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['u']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['u']['name'] = 'u';
$_smarty_tpl->tpl_vars['smarty']->value['section']['u']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['usrgateway']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['u']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['u']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['u']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['u']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['u']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['u']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['u']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['u']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['u']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['u']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['u']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['u']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['u']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['u']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['u']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['u']['total']);
?>
    	<?php if ($_smarty_tpl->tpl_vars['usrgateway']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['id']==$_smarty_tpl->tpl_vars['gateway']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id']){?>
        	<?php echo $_smarty_tpl->tpl_vars['usrgateway']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['account'];?>

        <?php }?>
    <?php endfor; endif; ?>
    </td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['mymembership']->value['max_withdraw']>0){?>
<tr>
	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['max_witdraw'];?>
:</td>
    <td><?php echo $_smarty_tpl->tpl_vars['mymembership']->value['max_withdraw'];?>
 تومان</td>
</tr>
<?php }?>
<tr>
	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['withdrawfee'];?>
:</td>
    <td><?php echo $_smarty_tpl->tpl_vars['gateway']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['withdraw_fee'];?>
% + <?php echo $_smarty_tpl->tpl_vars['gateway']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['withdraw_fee_fixed'];?>
 تومان</td>
</tr>
<tr id="total">
	<td colspan="2" align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['youwillreceive'];?>
 <strong>
    <?php if ($_smarty_tpl->tpl_vars['mymembership']->value['max_withdraw']>0){?>
    	<?php if ($_smarty_tpl->tpl_vars['user_info']->value['money']-$_smarty_tpl->tpl_vars['gateway']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['withdraw_fee_fixed']-$_smarty_tpl->tpl_vars['user_info']->value['money']*$_smarty_tpl->tpl_vars['gateway']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['withdraw_fee']/100>$_smarty_tpl->tpl_vars['mymembership']->value['max_withdraw']){?>
			<?php echo $_smarty_tpl->tpl_vars['mymembership']->value['max_withdraw']-$_smarty_tpl->tpl_vars['gateway']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['withdraw_fee_fixed']-$_smarty_tpl->tpl_vars['mymembership']->value['max_withdraw']*$_smarty_tpl->tpl_vars['gateway']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['withdraw_fee']/100;?>

        <?php }else{ ?>
        	<?php echo $_smarty_tpl->tpl_vars['user_info']->value['money']-$_smarty_tpl->tpl_vars['gateway']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['withdraw_fee_fixed']-$_smarty_tpl->tpl_vars['user_info']->value['money']*$_smarty_tpl->tpl_vars['gateway']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['withdraw_fee']/100;?>

        <?php }?>
   	<?php }else{ ?>
    	<?php echo $_smarty_tpl->tpl_vars['user_info']->value['money']-$_smarty_tpl->tpl_vars['gateway']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['withdraw_fee_fixed']-$_smarty_tpl->tpl_vars['user_info']->value['money']*$_smarty_tpl->tpl_vars['gateway']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['withdraw_fee']/100;?>

    <?php }?>
        تومان</strong></td>
</tr>
<tr>
	<td align="center" colspan="2">
    <input type="hidden" name="a" value="submit" />
    <input type="hidden" name="gatewayid" value="<?php echo $_smarty_tpl->tpl_vars['gateway']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id'];?>
" />
    <input type="submit" name="send" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['send'];?>
" />
    <input type="button" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['cancel'];?>
" class="buttonblue" onclick="showgateways(<?php echo $_smarty_tpl->tpl_vars['gateway']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id'];?>
);" />
	</td>
</tr>
</table>



</form>
    
    </div>
    <?php endfor; endif; ?>
    
    

<?php }?>
</div>




<!-- End Content --><?php }} ?>