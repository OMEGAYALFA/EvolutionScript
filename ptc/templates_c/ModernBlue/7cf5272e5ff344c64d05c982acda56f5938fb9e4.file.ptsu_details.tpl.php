<?php /* Smarty version Smarty-3.1.13, created on 2014-07-14 11:34:19
         compiled from "/home/arshadir/public_html/ptc/templates/ModernBlue/ptsu_details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186700870353c380f3a92992-86668175%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cf5272e5ff344c64d05c982acda56f5938fb9e4' => 
    array (
      0 => '/home/arshadir/public_html/ptc/templates/ModernBlue/ptsu_details.tpl',
      1 => 1405031196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186700870353c380f3a92992-86668175',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'myads' => 0,
    'ptsu_details' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53c380f3b232e5_69192267',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c380f3b232e5_69192267')) {function content_53c380f3b232e5_69192267($_smarty_tpl) {?><!-- Content -->
<div class="widget-main-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['ptsu'];?>
</div>
<div class="widget-content">
    <div id="message_sent" style="display:none">
    <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['ptsu_received'];?>

    <form class="formclass" id="redirectme">
    <input type="button" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['continuebutton'];?>
" onclick="location.href='./?view=account&page=ptsu'" />
    </form>
    </div>
    
    <?php if ($_smarty_tpl->tpl_vars['myads']->value!=0){?>
    <form class="formclass" id="submitptsu" onsubmit="return submitform(this.id);" method="post">
    <input type="hidden" name="action" value="submit" />
    <div class="info_box"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['cheatmsg'];?>
</div>
    <table class="widget-tbl" width="100%">
        <tr>
            <td align="right" width="300"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['link'];?>
:</td>
            <td><strong><a href="<?php echo $_smarty_tpl->tpl_vars['ptsu_details']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['ptsu_details']->value['url'];?>
</a></strong> <div style="font-size:10px">(<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['ptsu_descr1'];?>
)</div>
            </td>                
        </tr>
        <tr>
            <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['ptsu_descr2'];?>
:</td>
            <td><strong style="color:#009900">$<?php echo $_smarty_tpl->tpl_vars['ptsu_details']->value['value'];?>
</strong></td>
        </tr>
        <tr>
            <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['instructions'];?>
:</td>
            <td><?php echo $_smarty_tpl->tpl_vars['ptsu_details']->value['instructions'];?>
</td>
        </tr>
        <tr>
            <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['ptsu_descr3'];?>
:</td>
            <td><input type="text" name="username" /></td>
        </tr>
        <tr>
            <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['ptsu_descr4'];?>
:</td>
            <td><textarea name="message" style="width:95%; height:100px"></textarea></td>
        </tr>
        <tr>
        	<td></td>
            <td><input type="submit" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['send'];?>
" />
            <input type="button" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['return'];?>
" onclick="history.back();"/>
            </td>
        </tr>
    </table>
    </form>        
        
    <?php }else{ ?>
        <strong>   <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['adnotfound'];?>
</strong>
        <p><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['noadsfoundmsg'];?>
</p>
    <?php }?>

</div>
<!-- End Content -->
<?php }} ?>