<?php /* Smarty version Smarty-3.1.13, created on 2014-07-13 05:38:16
         compiled from "/home/arshadir/public_html/ptc/templates/ModernBlue/forum_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150164053353c1dc00e6cdd1-56619713%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '799691763402621d60869ee4ff0988ffbae9ecd8' => 
    array (
      0 => '/home/arshadir/public_html/ptc/templates/ModernBlue/forum_search_form.tpl',
      1 => 1405031196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150164053353c1dc00e6cdd1-56619713',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'logged' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53c1dc00e96e08_17825472',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c1dc00e96e08_17825472')) {function content_53c1dc00e96e08_17825472($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['settings']->value['forum_search']==1||($_smarty_tpl->tpl_vars['logged']->value=='yes'&&$_smarty_tpl->tpl_vars['settings']->value['forum_search']==2)){?>
<div class="forum_search">
<form method="post" action="./forum.php?page=search">
<input type="hidden" name="do" value="search" />
<input type="text" name="search_word" class="frm_search_txt" /> 
<input type="hidden" />
<input type="submit" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['search'];?>
" class="frm_search_btn" />
</div>
<?php }?><?php }} ?>