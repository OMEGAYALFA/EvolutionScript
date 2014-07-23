<?php /* Smarty version Smarty-3.1.13, created on 2014-03-15 20:21:04
         compiled from "C:\WampDeveloper\Websites\collection.me\webroot\templates\ModernBlue\terms.tpl" */ ?>
<?php /*%%SmartyHeaderCode:33585324b6307beef6-98829590%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4fadf1d06766cdac9e508bf9f5fdd42f9b2e66e' => 
    array (
      0 => 'C:\\WampDeveloper\\Websites\\collection.me\\webroot\\templates\\ModernBlue\\terms.tpl',
      1 => 1394168001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33585324b6307beef6-98829590',
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
  'unifunc' => 'content_5324b630811c42_64991633',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5324b630811c42_64991633')) {function content_5324b630811c42_64991633($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- Content -->
<div class="site_title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['termstitle'];?>
</div>
<div class="site_content">
<?php echo $_smarty_tpl->tpl_vars['terms_content']->value;?>

</div>
<!-- End Content -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>