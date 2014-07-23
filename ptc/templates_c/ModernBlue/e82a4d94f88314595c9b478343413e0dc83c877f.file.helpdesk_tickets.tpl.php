<?php /* Smarty version Smarty-3.1.13, created on 2014-07-13 05:36:04
         compiled from "/home/arshadir/public_html/ptc/templates/ModernBlue/helpdesk_tickets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152573550953c1da8533a376-78878851%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e82a4d94f88314595c9b478343413e0dc83c877f' => 
    array (
      0 => '/home/arshadir/public_html/ptc/templates/ModernBlue/helpdesk_tickets.tpl',
      1 => 1405213556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152573550953c1da8533a376-78878851',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53c1da853a5412_37794319',
  'variables' => 
  array (
    'settings' => 0,
    'lang' => 0,
    'helpdesk_enable' => 0,
    'ticket_info' => 0,
    'reply_info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c1da853a5412_37794319')) {function content_53c1da853a5412_37794319($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/arshadir/public_html/ptc/includes/plugins/smarty/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- Content -->
<div class="site_title"><?php echo $_smarty_tpl->tpl_vars['settings']->value['site_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['support'];?>
</div>
<div class="site_content">
<?php if ($_smarty_tpl->tpl_vars['helpdesk_enable']->value!='yes'){?>
<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['supportcenterdisabled'];?>

<?php }else{ ?>
	<div class="widget-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['ticketinformation'];?>
</div>
    <div class="widget-content">
<table width="100%" class="widget-tbl">
	<tr>
    	<td width="150" align="right"><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['ticketid'];?>
:</strong></td>
        <td><?php echo $_smarty_tpl->tpl_vars['ticket_info']->value['ticket'];?>
</td>
    </tr>
	<tr>
    	<td align="right"><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['ticketadded'];?>
:</strong></td>
        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['ticket_info']->value['date'],"%A %B %e %Y در ساعت %I:%M %p");?>
</td>
    </tr>
	<tr>
    	<td align="right"><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['ticketstatus'];?>
:</strong></td>
        <td><?php echo $_smarty_tpl->tpl_vars['ticket_info']->value['status_name'];?>
</td>
    </tr>
	<tr>
    	<td align="right"><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['ticketsubject'];?>
:</strong></td>
        <td><?php echo $_smarty_tpl->tpl_vars['ticket_info']->value['subject'];?>
</td>
    </tr>
</table>  
    </div>
    
    <div class="widget-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['conversation'];?>
</div>

<fieldset class="ticket-user">
	<legend>You, <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['ticket_info']->value['date'],"%A %B %e %Y در ساعت %I:%M %p");?>
</legend>
    <?php echo $_smarty_tpl->tpl_vars['ticket_info']->value['message'];?>

</fieldset>    

<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['r'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['r']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['name'] = 'r';
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['reply_info']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['r']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['r']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['r']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['r']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['r']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['r']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['total']);
?>
  <?php if ($_smarty_tpl->tpl_vars['reply_info']->value[$_smarty_tpl->getVariable('smarty')->value['section']['r']['index']]['user_reply']!=0){?>
<fieldset class="ticket-user">  
  <legend>You, <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['reply_info']->value[$_smarty_tpl->getVariable('smarty')->value['section']['r']['index']]['date'],"%A %B %e %Y در ساعت %I:%M %p");?>
</legend>
	<?php }else{ ?>
<fieldset class="ticket-admin">  
  <legend><strong>Administrator, <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['reply_info']->value[$_smarty_tpl->getVariable('smarty')->value['section']['r']['index']]['date'],"%A %B %e %Y در ساعت %I:%M %p");?>
</strong></legend>
    <?php }?>
<?php echo $_smarty_tpl->tpl_vars['reply_info']->value[$_smarty_tpl->getVariable('smarty')->value['section']['r']['index']]['message'];?>

</fieldset>
<?php endfor; endif; ?>  
    
 <?php if ($_smarty_tpl->tpl_vars['ticket_info']->value['status']!=4){?>
<form method="post" id="frmreply" onsubmit="return submitform(this.id);">
<input type="hidden" name="ticketid" id="ticketid" value="<?php echo $_smarty_tpl->tpl_vars['ticket_info']->value['ticket'];?>
">
<input type="hidden" name="action" value="reply">
<div align="center" style="padding-top:10px; padding-bottom:5px;">
	<div style="padding-bottom:5px">
	<textarea style="width:90%; height:100px" name="message" id="hdmessage"></textarea>
    </div>
    <input type="submit" name="sent" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['reply'];?>
">
    <input type="button" name="btn" value="بازگشت" onclick="history.back();" />
</div>
</form>
<?php }?>


<?php }?>


</div>


<!-- End Content -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>