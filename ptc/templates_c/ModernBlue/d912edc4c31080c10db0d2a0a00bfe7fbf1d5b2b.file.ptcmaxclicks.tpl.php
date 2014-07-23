<?php /* Smarty version Smarty-3.1.13, created on 2014-07-14 00:36:24
         compiled from "/home/arshadir/public_html/ptc/templates/ModernBlue/ptcmaxclicks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179189031353c2e6c02a5b60-17267778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd912edc4c31080c10db0d2a0a00bfe7fbf1d5b2b' => 
    array (
      0 => '/home/arshadir/public_html/ptc/templates/ModernBlue/ptcmaxclicks.tpl',
      1 => 1405031196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179189031353c2e6c02a5b60-17267778',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'referrer' => 0,
    'ad' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53c2e6c0366662_40945059',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2e6c0366662_40945059')) {function content_53c2e6c0366662_40945059($_smarty_tpl) {?><!-- Content -->
<div class="widget-main-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['setmaxclick'];?>
</div>
<div class="widget-content">
       	
<div class="errorbox" id="errorbox" style="display:none"></div>
<div style="display:none" id="message_sent">
<div>
<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['adupdated'];?>

</div>
<div>
<input type="button" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['continuebutton'];?>
" class="buttonblue" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['referrer']->value;?>
'" />
</div>
</div>
<form method="post" id="ptcfrm" onsubmit="return submitform(this.id);">
<input type="hidden" name="do" value="update" />
<table class="widget-tbl" width="100%">
            	<tr>
                	<td align="right" width="50%"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['ad'];?>
:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['ad']->value['title'];?>
</td>
                </tr>
                <tr>
                	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['maxclicksperday'];?>
:</td>
                    <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['ad']->value['clicks_day'];?>
" name="clicks_day" /> <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['zerodisabled'];?>
</td>
                </tr>
       
<tr>
	<td colspan="2" align="center">

<input type="submit" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['send'];?>
" />
<input type="button" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['cancel'];?>
" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['referrer']->value;?>
'" />

	</td>
</tr>    
</table>
</form>
</div>
<!-- End Content --><?php }} ?>