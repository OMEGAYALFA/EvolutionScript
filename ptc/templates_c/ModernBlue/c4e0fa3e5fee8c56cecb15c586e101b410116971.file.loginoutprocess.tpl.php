<?php /* Smarty version Smarty-3.1.13, created on 2014-07-11 05:07:27
         compiled from "/home/arshadir/public_html/ptc/templates/ModernBlue/loginoutprocess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:39424087953bf31c706ee17-67723435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4e0fa3e5fee8c56cecb15c586e101b410116971' => 
    array (
      0 => '/home/arshadir/public_html/ptc/templates/ModernBlue/loginoutprocess.tpl',
      1 => 1405031196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39424087953bf31c706ee17-67723435',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'loginout_process' => 0,
    'lang' => 0,
    'user_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53bf31c70fcbb3_91370246',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bf31c70fcbb3_91370246')) {function content_53bf31c70fcbb3_91370246($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="site_content">
<!-- Content -->
<script type="text/javascript" src="js/link2progress.js"></script>	
	<script>
	var actionloginout = '<?php echo $_smarty_tpl->tpl_vars['loginout_process']->value;?>
';
	
		$(function(){
			loginoutprocess(actionloginout);
		});
	
</script>
<div style="width:500px; margin:0 auto">
<div class="widget-main-title">
<?php if ($_smarty_tpl->tpl_vars['loginout_process']->value=='login'){?>
	<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['welcome_back'];?>
 <strong><?php echo $_smarty_tpl->tpl_vars['user_info']->value['username'];?>
</strong>!
<?php }else{ ?>
	<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['good_bye'];?>

<?php }?>
</div>
<div class="widget-content">
<div align="center">
<?php if ($_smarty_tpl->tpl_vars['loginout_process']->value=='login'){?>
	<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['please_wait_login'];?>

<?php }else{ ?>
	<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['please_wait_logout'];?>

<?php }?>
</div>

<table align="center">
	<tr><td>
                        <div class="progressbar" id="progress">
                            <div id="progressbar"></div>
                        </div>
	</td></tr>
</table>
</div>   
</div>
<!-- End Content -->


</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>