<?php /* Smarty version Smarty-3.1.13, created on 2014-07-16 01:36:12
         compiled from "/home/arshadir/public_html/ptc/templates/ModernBlue/forum_index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76784196953c1dc00dba0d8-75854682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd78f83a3ac0d0aab04f3515c86c981c13e653cc1' => 
    array (
      0 => '/home/arshadir/public_html/ptc/templates/ModernBlue/forum_index.tpl',
      1 => 1405456254,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76784196953c1dc00dba0d8-75854682',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53c1dc00e609e6_43206777',
  'variables' => 
  array (
    'cat' => 0,
    'catid' => 0,
    'board' => 0,
    'boards' => 0,
    'board_checked' => 0,
    'lang' => 0,
    'last_msg' => 0,
    'yesterday' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c1dc00e609e6_43206777')) {function content_53c1dc00e609e6_43206777($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/arshadir/public_html/ptc/includes/plugins/smarty/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("forum_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['c'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['c']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['name'] = 'c';
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['cat']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total']);
?>
<div style="margin-bottom:10px">
	<div class="frm-title pointer" onclick="location.href='forum.php?cat=<?php echo $_smarty_tpl->tpl_vars['cat']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['id'];?>
';"><?php echo $_smarty_tpl->tpl_vars['cat']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['name'];?>
</div>
    <div class="frm-content">
        <div class="forum-tblc">
        <table width="100%" class="frm-tbl">
        <?php $_smarty_tpl->tpl_vars['catid'] = new Smarty_variable($_smarty_tpl->tpl_vars['cat']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['id'], null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['boards'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['boards']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['board']->value[$_smarty_tpl->tpl_vars['catid']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['boards']->key => $_smarty_tpl->tpl_vars['boards']->value){
$_smarty_tpl->tpl_vars['boards']->_loop = true;
?>
        <tr>
            <td width="50" align="center">
            <?php if ($_smarty_tpl->tpl_vars['board_checked']->value[$_smarty_tpl->tpl_vars['boards']->value['id']]=='old'){?>
            <img src="images/forum/forum.png" />
            <?php }else{ ?>
            <img src="images/forum/forum_new.png" />
            <?php }?>
            </td>
            <td>
                <div class="frm_title"><a href="forum.php?board=<?php echo $_smarty_tpl->tpl_vars['boards']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['boards']->value['name'];?>
</a></div>
                <div class=""><?php echo $_smarty_tpl->tpl_vars['boards']->value['descr'];?>
</div>
            </td>
            <td align="right" width="100">
            <strong><?php echo $_smarty_tpl->tpl_vars['boards']->value['topics'];?>
</strong> <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['topics'];?>
<br />
            <strong><?php echo $_smarty_tpl->tpl_vars['boards']->value['posts'];?>
</strong> <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['posts'];?>

            </td>
            <td width="300" align="left" valign="top">
            <div class="frm_last_post">
            <?php if (empty($_smarty_tpl->tpl_vars['last_msg']->value[$_smarty_tpl->tpl_vars['boards']->value['id']])){?>
            	<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['never'];?>

            <?php }else{ ?>

                <a href="forum.php?topic=<?php echo $_smarty_tpl->tpl_vars['last_msg']->value[$_smarty_tpl->tpl_vars['boards']->value['id']]['topic_rel'];?>
"><?php echo $_smarty_tpl->tpl_vars['last_msg']->value[$_smarty_tpl->tpl_vars['boards']->value['id']]['title'];?>
</a>
                <div>by <strong><?php echo $_smarty_tpl->tpl_vars['last_msg']->value[$_smarty_tpl->tpl_vars['boards']->value['id']]['author'];?>
</strong></div>
                <span>
            <?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['last_msg']->value[$_smarty_tpl->tpl_vars['boards']->value['id']]['date'])==smarty_modifier_date_format(time())){?>
           		<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['todayat'];?>
 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['last_msg']->value[$_smarty_tpl->tpl_vars['boards']->value['id']]['date'],"%H:%M");?>

            <?php }elseif(smarty_modifier_date_format($_smarty_tpl->tpl_vars['last_msg']->value[$_smarty_tpl->tpl_vars['boards']->value['id']]['date'])==smarty_modifier_date_format($_smarty_tpl->tpl_vars['yesterday']->value)){?>
            	<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['yesterdayat'];?>
 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['last_msg']->value[$_smarty_tpl->tpl_vars['boards']->value['id']]['date'],"%H:%M");?>

            <?php }else{ ?>
            	<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['last_msg']->value[$_smarty_tpl->tpl_vars['boards']->value['id']]['date'],"%Y-%m-%d ساعت %H:%M");?>

            <?php }?>
            	</span>
                    <?php }?>
            </div>
            </td>
        </tr>
        <?php } ?> 
        </table>
        </div>
    </div>
</div>
<?php endfor; endif; ?>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>