<?php /* Smarty version Smarty-3.1.13, created on 2014-03-30 12:01:34
         compiled from "C:\WampDeveloper\Websites\collection.me\webroot\templates\ModernBlue\resend_activation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12535336eb083685c2-65837321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6ca26d99db7ffe57b73dd0d834e07afb79696ad' => 
    array (
      0 => 'C:\\WampDeveloper\\Websites\\collection.me\\webroot\\templates\\ModernBlue\\resend_activation.tpl',
      1 => 1396164692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12535336eb083685c2-65837321',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5336eb083b9a76_62399589',
  'variables' => 
  array (
    'lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5336eb083b9a76_62399589')) {function content_5336eb083b9a76_62399589($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- Content -->
<div class="PageTitle"><h1><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['resendactivationtitle'];?>
</h1></div>
<div class="site_content">
   <form method="post" id="recoveryform" onsubmit="return submitform(this.id);">
   <table cellpadding="4" width="400" align="center">
   	<tr>
    	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['username'];?>
:</td>
        <td><input type="text" name="username" style="width:100%" /></td>
    </tr>
   	<tr>
    	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['email'];?>
:</td>
        <td><input type="text" name="email" style="width:100%" /></td>
    </tr>
    <tr>
    	<td></td>
    	<td>
        <input type="hidden" name="a" value="submit" />
        <input type="hidden" name="class" value="activation" />
        <input type="submit" name="send" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['send'];?>
" />
        </td>
    </tr>
   </table>
   </form>
    
</div>    
<!-- End Content -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>