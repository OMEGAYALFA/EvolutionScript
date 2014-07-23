<?php /* Smarty version Smarty-3.1.13, created on 2014-07-13 05:11:50
         compiled from "/home/arshadir/public_html/ptc/templates/ModernBlue/resend_activation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:159565831453c1d5ce8a82c0-78351656%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ff8a9cf84dbe4df0f6e10d20a602cad8a6f86ad' => 
    array (
      0 => '/home/arshadir/public_html/ptc/templates/ModernBlue/resend_activation.tpl',
      1 => 1405031196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159565831453c1d5ce8a82c0-78351656',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53c1d5ce8fa2a1_13817131',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c1d5ce8fa2a1_13817131')) {function content_53c1d5ce8fa2a1_13817131($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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