<?php /* Smarty version Smarty-3.1.13, created on 2014-03-15 20:21:06
         compiled from "C:\WampDeveloper\Websites\collection.me\webroot\templates\ModernBlue\forum_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9725324b63270e522-30441952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfa54ce700ed7eecfd8adeef264370ef39a61f5c' => 
    array (
      0 => 'C:\\WampDeveloper\\Websites\\collection.me\\webroot\\templates\\ModernBlue\\forum_search_form.tpl',
      1 => 1394167997,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9725324b63270e522-30441952',
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
  'unifunc' => 'content_5324b63271fa09_34341030',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5324b63271fa09_34341030')) {function content_5324b63271fa09_34341030($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['settings']->value['forum_search']==1||($_smarty_tpl->tpl_vars['logged']->value=='yes'&&$_smarty_tpl->tpl_vars['settings']->value['forum_search']==2)){?>
<div class="forum_search">
<form method="post" action="./forum.php?page=search">
<input type="hidden" name="do" value="search" />
<input type="text" name="search_word" class="frm_search_txt" /> 
<input type="hidden" />
<input type="submit" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['search'];?>
" class="frm_search_btn" />
</div>
<?php }?><?php }} ?>