<?php /* Smarty version Smarty-3.1.13, created on 2014-07-13 05:13:17
         compiled from "/home/arshadir/public_html/ptc/templates/ModernBlue/forgot.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105072848753c1d625497a02-21685960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adc8d063d61c81e1a123243b5ef6ea4ab7043376' => 
    array (
      0 => '/home/arshadir/public_html/ptc/templates/ModernBlue/forgot.tpl',
      1 => 1405031196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105072848753c1d625497a02-21685960',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53c1d6254f4bf4_32902605',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c1d6254f4bf4_32902605')) {function content_53c1d6254f4bf4_32902605($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- Content -->
<div class="PageTitle"><h1><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['requestpassword'];?>
</h1></div>
<div class="site_content">    
   <form method="post" id="recoveryform" onsubmit="return submitform(this.id)">
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
        <input type="submit" name="send" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['send'];?>
" class="orange" />
        <input type="hidden" name="a" value="submit" />
        <input type="hidden" name="class" value="forgot" />
        </td>
    </tr>
   </table>
   </form>
</div>      
<!-- End Content -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>