<?php /* Smarty version Smarty-3.1.13, created on 2014-03-15 20:20:38
         compiled from "C:\WampDeveloper\Websites\collection.me\webroot\templates\ModernBlue\faq.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36465324b616a516b2-15156674%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6fd62afc96136ccbe9e015e1bda61cc8e33d183' => 
    array (
      0 => 'C:\\WampDeveloper\\Websites\\collection.me\\webroot\\templates\\ModernBlue\\faq.tpl',
      1 => 1394167996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36465324b616a516b2-15156674',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'faq' => 0,
    'n' => 0,
    'f' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5324b616abaf47_18458737',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5324b616abaf47_18458737')) {function content_5324b616abaf47_18458737($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- Content -->
<div class="site_title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['faq_name'];?>
</div>
<div class="site_content">
    <?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['faq']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value){
$_smarty_tpl->tpl_vars['f']->_loop = true;
?>
    <?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable($_smarty_tpl->tpl_vars['n']->value+1, null, 0);?>
    <div class="faq_num"><?php echo $_smarty_tpl->tpl_vars['n']->value;?>
</div>
   	<div class="faq">
        <div class="faq_question">
           <?php echo $_smarty_tpl->tpl_vars['f']->value['question'];?>

        </div>
         <div class="faq_answer">
         <?php echo $_smarty_tpl->tpl_vars['f']->value['answer'];?>

         </div>    
    </div>
    <?php } ?>
</div>
<!-- End Content -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>