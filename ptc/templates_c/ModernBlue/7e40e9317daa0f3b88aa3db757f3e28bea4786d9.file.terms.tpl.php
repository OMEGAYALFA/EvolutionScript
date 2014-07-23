<?php /* Smarty version Smarty-3.1.13, created on 2014-07-12 12:15:13
         compiled from "/home/arshadir/public_html/ptc/templates/ModernBlue/terms.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200804474153c0e78967c001-02554598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e40e9317daa0f3b88aa3db757f3e28bea4786d9' => 
    array (
      0 => '/home/arshadir/public_html/ptc/templates/ModernBlue/terms.tpl',
      1 => 1405031196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200804474153c0e78967c001-02554598',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'terms_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53c0e7899a2552_37917577',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c0e7899a2552_37917577')) {function content_53c0e7899a2552_37917577($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- Content -->
<div class="site_title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['termstitle'];?>
</div>
<div class="site_content">
<?php echo $_smarty_tpl->tpl_vars['terms_content']->value;?>

</div>
<!-- End Content -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>