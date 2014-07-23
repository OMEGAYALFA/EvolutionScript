<?php /* Smarty version Smarty-3.1.13, created on 2014-07-11 05:02:00
         compiled from "/home/arshadir/public_html/ptc/templates/ModernBlue/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:106516359653bf30807fa5d8-86710565%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3930a0cc26e4b9d38736fc186e114f16cfeedd97' => 
    array (
      0 => '/home/arshadir/public_html/ptc/templates/ModernBlue/register.tpl',
      1 => 1405031196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106516359653bf30807fa5d8-86710565',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'settings' => 0,
    'referrer' => 0,
    'captcha' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53bf3080c000b5_02794282',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bf3080c000b5_02794282')) {function content_53bf3080c000b5_02794282($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/arshadir/public_html/ptc/includes/plugins/smarty/plugins/modifier.replace.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- Content -->
<div class="PageTitle"><h1><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['registration'];?>
</h1></div>
<div class="site_content">
<div style="width:600px; margin:0 auto">

<div style="display:none" id="message_sent">
<?php if ($_smarty_tpl->tpl_vars['settings']->value['register_activation']=='yes'){?>
<div align="center">
<h3><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lang']->value['txt']['activationrequired'],"%site",$_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
</h3>
<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['registrationmsg'];?>
<br />
</div>
<?php }else{ ?>
<div align="center">
<h3><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lang']->value['txt']['welcometo'],"%site",$_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
</h3>
<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lang']->value['txt']['activationmsg'],"%site",$_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
<br />
</div>
<?php }?>
</div>          
 <form method="post" id="registerform" onsubmit="return submitform(this.id);">
<input type="hidden" name="token" value="<?php echo getToken('register');?>
" />
<div class="widget-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['generalinformation'];?>
</div>
<table width="100%" class="widget-tbl">
    <tr>
        <td width="200" align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['fullname'];?>
:</td>
        <td><input type="text" name="fullname" /></td>
    </tr>
    <tr>
        <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['email'];?>
:</td>
        <td><input type="text" name="email" /></td>
    </tr>
    <tr>
        <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['confirmemail'];?>
:</td>
        <td><input type="text" name="email2" /></td>
    </tr>
    <tr>
        <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['username'];?>
:</td>
        <td><input type="text" name="username" /></td>
    </tr>
    <tr>
        <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['password'];?>
:</td>
        <td><input type="password" name="password" id="rpassword" /></td>
    </tr>
    <tr>
        <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['confirmpassword'];?>
:</td>
        <td><input type="password" name="password2" id="rpassword2" /></td>
    </tr>
    <?php if (!empty($_smarty_tpl->tpl_vars['referrer']->value)){?>
    <tr>
        <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['referrer'];?>
:</td>
        <td><input type="text" name="referrer" id="referrer" value="<?php echo $_smarty_tpl->tpl_vars['referrer']->value;?>
" disabled="disabled" /></td>
    </tr>
    <?php }?>
</table> 
<?php if ($_smarty_tpl->tpl_vars['settings']->value['captcha_register']=='yes'&&$_smarty_tpl->tpl_vars['settings']->value['captcha_type']!=0){?>
<div class="widget-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['imgverification'];?>
</div>
<table width="100%" class="widget-tbl">
	<tr>
    	<td align="center"><?php echo $_smarty_tpl->tpl_vars['captcha']->value;?>
</td>
	</tr>
</table>
<?php }?>    
        <div class="widget-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['terms'];?>
</div>
<table width="100%" class="widget-tbl">
    <tr>
    	<td align="right" width="200"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['terms'];?>
</td>
        <td><input type="checkbox" name="terms" /> <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lang']->value['txt']['agreeterms'],"%site",$_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
</td>
    </tr>
    <tr>
    	<td></td>
        <td><input type="submit" name="login" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['registersend'];?>
" /> <input type="hidden" name="a" value="submit" /></td>
    </tr>
</table>
</form>
</div>


</div>
<!-- End Content -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>