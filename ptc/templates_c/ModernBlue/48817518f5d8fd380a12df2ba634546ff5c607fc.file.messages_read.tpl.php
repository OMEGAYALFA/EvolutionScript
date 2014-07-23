<?php /* Smarty version Smarty-3.1.13, created on 2014-07-13 05:47:46
         compiled from "/home/arshadir/public_html/ptc/templates/ModernBlue/messages_read.tpl" */ ?>
<?php /*%%SmartyHeaderCode:58935729953c1dd5e34e113-48663129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48817518f5d8fd380a12df2ba634546ff5c607fc' => 
    array (
      0 => '/home/arshadir/public_html/ptc/templates/ModernBlue/messages_read.tpl',
      1 => 1405214265,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58935729953c1dd5e34e113-48663129',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53c1dd5e3a6a66_54801998',
  'variables' => 
  array (
    'lang' => 0,
    'msg_info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c1dd5e3a6a66_54801998')) {function content_53c1dd5e3a6a66_54801998($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/arshadir/public_html/ptc/includes/plugins/smarty/plugins/modifier.date_format.php';
?><!-- Content -->
<div class="widget-main-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['message_center'];?>
</div>
<div class="widget-content">
    <table width="100%" class="widget-tbl">
        <tr>
            <td width="100" align="right"><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['from'];?>
:</strong></td>
            <td><?php echo $_smarty_tpl->tpl_vars['msg_info']->value['user_from'];?>
</td>
        </tr>
        <tr>
            <td align="right"><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['subject'];?>
:</strong></td>
            <td><?php echo $_smarty_tpl->tpl_vars['msg_info']->value['subject'];?>
</td>
        </tr>
        <tr>
            <td align="right"><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['date'];?>
:</strong></td>
            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['msg_info']->value['date'],"%e %B %Y %r");?>
</td>
        </tr>
    </table>
<div  style="margin-top:5px"></div>
<div style class="widget-content"><?php echo $_smarty_tpl->tpl_vars['msg_info']->value['message'];?>
</div>
<form class="formclass">
    <input type="button" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['reply'];?>
" onclick="location.href='./?view=account&page=messages&reply=<?php echo $_smarty_tpl->tpl_vars['msg_info']->value['id'];?>
#tab-2'; "class="buttonblue" />
    
    <input type="button" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['quote'];?>
" onclick="location.href='./?view=account&page=messages&quote=<?php echo $_smarty_tpl->tpl_vars['msg_info']->value['id'];?>
#tab-2';" class="buttonblue" />
    
    <input type="button" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['delete'];?>
" onclick="location.href='./?view=account&page=messages&read=<?php echo $_smarty_tpl->tpl_vars['msg_info']->value['id'];?>
&do=delete';" class="buttonblue" />
    <input type="button" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['return'];?>
" onclick="history.back();" />
</form>
</div>
        


<!-- End Content --><?php }} ?>