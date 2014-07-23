<?php /* Smarty version Smarty-3.1.13, created on 2014-03-15 20:26:04
         compiled from "C:\WampDeveloper\Websites\collection.me\webroot\templates\ModernBlue\settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7035324b75cc89866-95175582%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb67b0d51d09c1111077eeda8ad71f763c0b7b48' => 
    array (
      0 => 'C:\\WampDeveloper\\Websites\\collection.me\\webroot\\templates\\ModernBlue\\settings.tpl',
      1 => 1394168001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7035324b75cc89866-95175582',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'user_info' => 0,
    'settings' => 0,
    'gateway' => 0,
    'usrgateway' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5324b75cd72df6_22630044',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5324b75cd72df6_22630044')) {function content_5324b75cd72df6_22630044($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'C:\\WampDeveloper\\Websites\\collection.me\\webroot\\includes\\plugins\\smarty\\plugins\\modifier.replace.php';
?><!-- Content -->
<div class="widget-main-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['personalsettings'];?>
</div>
<div class="widget-content">
<div id="errorbox" class="errorbox" style="display:none"></div>
<?php if (!empty($_smarty_tpl->tpl_vars['user_info']->value['new_email'])){?>        
<div style="display:none" class="success_box" id="message_sent"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['personalsaved'];?>
</div>
<div style="display:none" class="success_box" id="message_sent2"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['personalrestored'];?>
</div>
<form id="settingsform" onsubmit="return updateemail('activate');">
<input type="hidden" name="do" value="it" />
        <div class="info_box"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lang']->value['txt']['personalvalidatemsg'],"%email",$_smarty_tpl->tpl_vars['user_info']->value['new_email']);?>
</div>
<table cellpadding="4" width="100%" class="widget-tbl">
	<tr>
    	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['activationid'];?>
:</td>
        <td><input type="text" name="code" id="aid" /></td>
    </tr>
    <tr>
    	<td colspan="2" align="center">
        	<input type="submit" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['send'];?>
" class="orange" />
            <input type="button" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['cancel'];?>
" class="buttonblue" onclick="updateemail('restore')" />
        </td>
    </tr>
</table>  
</form>       
<?php }else{ ?>
<form id="settingsform" onsubmit="return submitform(this.id);">
<input type="hidden" name="a" value="submit" />
<table cellpadding="4" width="100%" align="center" class="widget-tbl">
	<tr>
    	<td class="widget-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['personaldata'];?>
</td>
    </tr>
    <tr>
    	<td>
                <table cellpadding="4" width="100%">
                <tr>
                    <td align="right" width="50%"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['email'];?>
:</td>
                    <td><input type="text" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['email'];?>
" /></td>
                </tr>
                <tr>
                    <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['acceptemail'];?>
:</td>
                    <td>
                            <input type="radio" name="aemail" value="yes" id="aemail_1" <?php if ($_smarty_tpl->tpl_vars['user_info']->value['acceptmails']=='yes'){?>checked<?php }?> /><label for="aemail_1"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['yes'];?>
</label>
                            <input type="radio" name="aemail" value="no" id="aemail_2" <?php if ($_smarty_tpl->tpl_vars['user_info']->value['acceptmails']=='no'){?>checked<?php }?> /><label for="aemail_2"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['no'];?>
</label>
                    </td>            
                </tr>
                </table>
    </td>
    </tr>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['message_system']=='yes'){?>
	<tr>
    	<td class="widget-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['message_system'];?>
</td>
    </tr> 
     <tr>
    	<td>
                <table cellpadding="4" width="100%">
                    <td align="right" width="50%"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['msgsystem_enabled'];?>
:</td>
                    <td>
                            <input type="radio" name="personal_msg" value="yes" id="msg_system_1" <?php if ($_smarty_tpl->tpl_vars['user_info']->value['personal_msg']=='yes'){?>checked<?php }?> /><label for="msg_system_1"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['yes'];?>
</label>
                            <input type="radio" name="personal_msg" value="no" id="msg_system_2" <?php if ($_smarty_tpl->tpl_vars['user_info']->value['personal_msg']=='no'){?>checked<?php }?> /><label for="msg_system_2"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['no'];?>
</label>
                    </td>            
                </tr>
                </table>
    </td>
    </tr>       
    <?php }?>
	<tr>
    	<td class="widget-title">Payment Method</td>
    </tr>
    <tr>
    	<td>
                <table cellpadding="4" width="100%">
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['g'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['g']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['name'] = 'g';
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['gateway']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['g']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['g']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['g']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['g']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['g']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['g']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['total']);
?>
                <tr>
                    <td align="right" width="50%">
                    <?php echo $_smarty_tpl->tpl_vars['gateway']->value[$_smarty_tpl->getVariable('smarty')->value['section']['g']['index']]['name'];?>
:
                    </td>
                    <td><input type="text" name="gatewayid[<?php echo $_smarty_tpl->tpl_vars['gateway']->value[$_smarty_tpl->getVariable('smarty')->value['section']['g']['index']]['id'];?>
]" value="<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['usrgateway']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><?php if ($_smarty_tpl->tpl_vars['usrgateway']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id']==$_smarty_tpl->tpl_vars['gateway']->value[$_smarty_tpl->getVariable('smarty')->value['section']['g']['index']]['id']){?><?php echo $_smarty_tpl->tpl_vars['usrgateway']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['account'];?>
<?php }?><?php endfor; endif; ?><?php echo $_smarty_tpl->tpl_vars['gateway']->value[$_smarty_tpl->getVariable('smarty')->value['section']['g']['index']]['member'];?>
" /></td>
                </tr>
                <?php endfor; endif; ?>
                </table>
    </td>
    </tr>

    
	<tr>
    	<td class="widget-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['updpassword'];?>
</td>
    </tr>
    <tr>
    	<td>
                <table cellpadding="4" width="100%">
                <tr>
                    <td align="right" width="50%"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['newpassword'];?>
:</td>
                    <td><input type="password" name="newpassword" id="newpassword" /></td>
                </tr>
                <tr>
                    <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['newpasswordconfirm'];?>
:</td>
                    <td><input type="password" name="newpassword2" id="newpassword2" /></td>
                </tr>
                </table>
    </td>
    </tr>
    
	<tr>
    	<td class="widget-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['send'];?>
</td>
    </tr>
    <tr>
    	<td>
        <div class="info_box"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['newpasswordmsg'];?>
</div>
        <div class="padding5 " align="center"><input type="password" name="password" id="password" /></div>
        <div align="center" class="padding5 " style="margin-top:1px">
        <input type="submit" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['send'];?>
" class="orange" />
        </div>
        </td>
    </tr>
</table>  
</form>

<?php }?>

</div>
<!-- End Content --><?php }} ?>