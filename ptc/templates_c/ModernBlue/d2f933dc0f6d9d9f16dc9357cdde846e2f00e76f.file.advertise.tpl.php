<?php /* Smarty version Smarty-3.1.13, created on 2014-07-16 01:34:58
         compiled from "/home/arshadir/public_html/ptc/templates/ModernBlue/advertise.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196138024853c0cabc063289-00517626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2f933dc0f6d9d9f16dc9357cdde846e2f00e76f' => 
    array (
      0 => '/home/arshadir/public_html/ptc/templates/ModernBlue/advertise.tpl',
      1 => 1405210432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196138024853c0cabc063289-00517626',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53c0cabc4e1922_59629591',
  'variables' => 
  array (
    'settings' => 0,
    'specialpackitems' => 0,
    'lang' => 0,
    'ad_prices' => 0,
    'loginad_prices' => 0,
    'ptsu_price' => 0,
    'fads_price' => 0,
    'banner_price' => 0,
    'flinks_price' => 0,
    'specialpacks' => 0,
    'logged' => 0,
    'user_info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c0cabc4e1922_59629591')) {function content_53c0cabc4e1922_59629591($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/arshadir/public_html/ptc/includes/plugins/smarty/plugins/modifier.replace.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript">
<?php if ($_smarty_tpl->tpl_vars['settings']->value['special_available']=='yes'){?>
	<?php echo $_smarty_tpl->tpl_vars['specialpackitems']->value;?>

	
		$(function(){
			updatepack();
		});
	
<?php }?>
</script>
<!-- Content -->   
<div class="PageTitle"><h1><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lang']->value['txt']['advertiseon'],"%mysite",$_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
</h1></div>
<div class="site_content">
<div class="menu-content">
	<div style="display:none" id="errorbox" class="errorbox"></div>  
    
 	<div id="ads_list">
    
    
    <div class="shopcart">
    	<div class="shoptitle"><div class="carticon"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['ptcads'];?>
</div></div>
        <div class="shopcontent">
    	<form method="post" id="ptcform" onsubmit="return prepare_payment('ptcform');" class="formclass">
        <input type="hidden" id="ptcformproduct" name="ptcformproduct" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['ptcads'];?>
">
        <input type="hidden" name="buy" value="ptc_credits">
                       <select name="item" id="ptcformlist">
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ad_prices']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                            <option value="<?php echo $_smarty_tpl->tpl_vars['ad_prices']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ad_prices']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['credits'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['credits'];?>
 - <?php echo $_smarty_tpl->tpl_vars['ad_prices']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['price'];?>
 تومان</option>
                        <?php endfor; endif; ?>
                        </select>
                        <input type="submit" name="send" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['buynow'];?>
">
        </form>
        </div>
    </div>
    
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['loginads_available']=='yes'){?>
    <div class="shopcart">
    	<div class="shoptitle"><div class="carticon"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['loginads'];?>
</div></div>
        <div class="shopcontent">
    	<form method="post" id="loginadform" onsubmit="return prepare_payment('loginadform');">
        <input type="hidden" id="loginadformproduct" name="loginadformproduct" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['loginads'];?>
">
        <input type="hidden" name="buy" value="loginads_credits">
                       <select name="item" id="loginadformlist">
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['loginad_prices']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                            <option value="<?php echo $_smarty_tpl->tpl_vars['loginad_prices']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['loginad_prices']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['days'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['days'];?>
 - <?php echo $_smarty_tpl->tpl_vars['loginad_prices']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['price'];?>
 تومان</option>
                        <?php endfor; endif; ?>
                        </select>
                        <input type="submit" name="send" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['buynow'];?>
">
        </form>
        </div>
    </div>
    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['ptsu_available']=='yes'){?>
    <div class="shopcart">
    	<div class="shoptitle"><div class="carticon"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['ptsu'];?>
</div></div>
        <div class="shopcontent">
    	<form method="post" id="ptsuform" onsubmit="return prepare_payment('ptsuform');" class="formclass">
        <input type="hidden" id="ptsuformproduct" name="ptsuformproduct" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['ptsu'];?>
">
        <input type="hidden" name="buy" value="ptsu_credits"> 
                        <select name="item" id="ptsuformlist">
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ptsu_price']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                            <option value="<?php echo $_smarty_tpl->tpl_vars['ptsu_price']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ptsu_price']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['credits'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['credits'];?>
 - <?php echo $_smarty_tpl->tpl_vars['ptsu_price']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['price'];?>
 تومان</option>
                        <?php endfor; endif; ?>
                        </select>   
                        <input type="submit" name="send" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['buynow'];?>
">
        </form>
        </div>
    </div>
    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['fads_available']=='yes'){?>
    <div class="shopcart">
    	<div class="shoptitle"><div class="carticon"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['featuredad'];?>
</div></div>
        <div class="shopcontent">
    	<form method="post" id="feadform" onsubmit="return prepare_payment('feadform');" class="formclass">
        <input type="hidden" id="feadformproduct" name="feadformproduct" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['featuredad'];?>
">
        		<input type="hidden" name="buy" value="fad_credits">
                        <select name="item" id="feadformlist">
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['fads_price']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                            <option value="<?php echo $_smarty_tpl->tpl_vars['fads_price']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['fads_price']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['credits'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['credits'];?>
 - <?php echo $_smarty_tpl->tpl_vars['fads_price']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['price'];?>
 تومان</option>
                        <?php endfor; endif; ?>
                        </select>  
                        <input type="submit" name="send" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['buynow'];?>
">
        </form>
        </div>
    </div>   
    <?php }?>
    
    
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['bannerads_available']=='yes'){?>
    <div class="shopcart">
    	<div class="shoptitle"><div class="carticon"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['bannerad'];?>
</div></div>
        <div class="shopcontent">
    	<form method="post" id="bannerform" onsubmit="return prepare_payment('bannerform');" class="formclass">
        	<input type="hidden" id="bannerformproduct" name="bannerformproduct" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['bannerad'];?>
">
        		<input type="hidden" name="buy" value="bannerad_credits">
                        <select name="item" id="bannerformlist">
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['banner_price']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                            <option value="<?php echo $_smarty_tpl->tpl_vars['banner_price']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['banner_price']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['credits'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['credits'];?>
 - <?php echo $_smarty_tpl->tpl_vars['banner_price']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['price'];?>
 تومان</option>
                        <?php endfor; endif; ?>
                        </select> 
                        <input type="submit" name="send" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['buynow'];?>
">
        </form>
        </div>
    </div> 
    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['flinks_available']=='yes'){?>
    <div class="shopcart">
    	<div class="shoptitle"><div class="carticon"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['featuredlink'];?>
</div></div>
        <div class="shopcontent">
    	<form method="post" id="flinkform" onsubmit="return prepare_payment('flinkform');" class="formclass">
        	<input type="hidden" id="flinkformproduct" name="flinkformproduct" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['featuredlink'];?>
">
        		<input type="hidden" name="buy" value="flink_credits">
                        <select name="item" id="flinkformlist">
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['flinks_price']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                            <option value="<?php echo $_smarty_tpl->tpl_vars['flinks_price']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['flinks_price']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['month'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['months'];?>
 - <?php echo $_smarty_tpl->tpl_vars['flinks_price']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['price'];?>
 تومان</option>
                        <?php endfor; endif; ?>
                        </select> 
                        <input type="submit" name="send" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['buynow'];?>
">
        </form>
        </div>
    </div>
    <?php }?>
    
    
 <?php if ($_smarty_tpl->tpl_vars['settings']->value['special_available']=='yes'){?>    
    <div class="shopcart">
    	<div class="shoptitle"><div class="carticon"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['specialpacks'];?>
</div></div>
        <div class="shopcontent">
    	<form method="post" id="spackform" onsubmit="return prepare_payment('spackform');" class="formclass">
        		<input type="hidden" name="spackformproduct" id="spackformproduct" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['specialpacks'];?>
" />
                <input type="hidden" name="buy" value="specialpack">
                        <select class="primary textbox" name="item" id="spackformlist" onchange="updatepack();">
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['specialpacks']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                            <option value="<?php echo $_smarty_tpl->tpl_vars['specialpacks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['specialpacks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['name'];?>
 - <?php echo $_smarty_tpl->tpl_vars['specialpacks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['price'];?>
 تومان</option>
                        <?php endfor; endif; ?>
                        </select> 
                        <input type="submit" name="send" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['buynow'];?>
">
        </form>
        </div>
    </div>
   <?php }?>  	  
 
             	
            	

    
    <div class="clear"></div>
	<?php if ($_smarty_tpl->tpl_vars['settings']->value['special_available']=='yes'){?>
    	<div id="specialdescription"><div id="specialpackdescr"></div></div>
    <?php }?>
    </div>
    
    
            <div id="payment_form" style="display:none;">
            <?php if ($_smarty_tpl->tpl_vars['logged']->value=='yes'){?>
            <form method="post" id="checkoutform" onsubmit="return submitpayment();" class="formclass">
            <input type="hidden" name="action" value="buy" />
            <div id="payment_details"></div>
            <table align="center" class="widget-tbl" width="500">
            	<tr class="titles">
                	<td colspan="2">تکمیل سفارش</td>
                </tr>
            	<tr>
                	<td align="right"><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['product'];?>
:</strong></td>
                    <td><span id="productname"></span></td>
                </tr>
            	<tr>
                	<td align="right"><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['item'];?>
:</strong></td>
                    <td><span id="itemname"></span></td>
                </tr>
            	<tr>
                	<td align="right"><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['purchasebalance'];?>
:</strong></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user_info']->value['purchase_balance'];?>
 تومان</td>
                </tr>
                <tr>
                	<td colspan="2" align="center">
                    	<input type="submit" name="send" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['buynow'];?>
">
                        <input type="button" onclick="cancel_payad();" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['cancel'];?>
">
                   </td>
                </tr>
            </table>
            </form>
            <?php }else{ ?>
            <div align="center" style="padding:10px;"><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['notloggedin'];?>
</strong><br><br>
            <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['cancel'];?>
" onclick="cancel_payad();" />
            </div>
            <?php }?>
            </div>
</div>
</div>
<!-- End Content -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>