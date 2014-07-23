<?php /* Smarty version Smarty-3.1.13, created on 2014-03-15 20:24:53
         compiled from "C:\WampDeveloper\Websites\collection.me\webroot\templates\ModernBlue\loginoutprocess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93755324b7151bc3a4-37725422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9813245096b0e9ab180ed1571f31868c3e7a23d7' => 
    array (
      0 => 'C:\\WampDeveloper\\Websites\\collection.me\\webroot\\templates\\ModernBlue\\loginoutprocess.tpl',
      1 => 1394167998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93755324b7151bc3a4-37725422',
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
  'unifunc' => 'content_5324b71521ced8_45888772',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5324b71521ced8_45888772')) {function content_5324b71521ced8_45888772($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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