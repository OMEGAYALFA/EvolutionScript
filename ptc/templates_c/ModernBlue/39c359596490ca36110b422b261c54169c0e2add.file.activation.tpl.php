<?php /* Smarty version Smarty-3.1.13, created on 2014-07-11 05:07:08
         compiled from "/home/arshadir/public_html/ptc/templates/ModernBlue/activation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57146875753bf31b4de6386-07805033%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39c359596490ca36110b422b261c54169c0e2add' => 
    array (
      0 => '/home/arshadir/public_html/ptc/templates/ModernBlue/activation.tpl',
      1 => 1405031196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57146875753bf31b4de6386-07805033',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53bf31b4f26868_30161077',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bf31b4f26868_30161077')) {function content_53bf31b4f26868_30161077($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/arshadir/public_html/ptc/includes/plugins/smarty/plugins/modifier.replace.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- Content -->
<div class="widget-main-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['activationtitle'];?>
</div>
<div class="widget-content">

    <div style="display:none" id="message_sent" align="center">
    <h3><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lang']->value['txt']['welcometo'],"%site",$_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
</h3>
    <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lang']->value['txt']['activationmsg'],"%sitename",$_smarty_tpl->tpl_vars['settings']->value['site_name']);?>

    </div> 



<form method="post" id="activationform" onsubmit="return submitform(this.id);">
<input type="hidden" name="a" value="submit" />
   <table cellpadding="4" width="400" align="center">
   	<tr>
    	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['username'];?>
:</td>
        <td><input type="text" name="username" id="ausername" class="primary textbox" value="
<?php echo mb_convert_encoding(htmlspecialchars($_REQUEST['username'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" style="width:100%" /></td>
    </tr>
   	<tr>
    	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['activationid'];?>
:</td>
        <td><input type="text" name="code" id="aid" class="primary textbox" value="<?php echo mb_convert_encoding(htmlspecialchars($_REQUEST['i'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" style="width:100%" /></td>
    </tr>
    <tr>
    	<td></td>
    	<td>
        <input type="submit" name="send" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['send'];?>
" class="orange" />
        </td>
    </tr>
   </table>


</form>    

				</div>               

<!-- End Content -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>