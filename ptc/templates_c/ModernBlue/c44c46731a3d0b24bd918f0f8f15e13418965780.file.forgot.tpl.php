<?php /* Smarty version Smarty-3.1.13, created on 2014-03-30 12:00:45
         compiled from "C:\WampDeveloper\Websites\collection.me\webroot\templates\ModernBlue\forgot.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1057953354ef5256a74-27631776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c44c46731a3d0b24bd918f0f8f15e13418965780' => 
    array (
      0 => 'C:\\WampDeveloper\\Websites\\collection.me\\webroot\\templates\\ModernBlue\\forgot.tpl',
      1 => 1396164643,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1057953354ef5256a74-27631776',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53354ef5361b96_90352766',
  'variables' => 
  array (
    'lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53354ef5361b96_90352766')) {function content_53354ef5361b96_90352766($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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