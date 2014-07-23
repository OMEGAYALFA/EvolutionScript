<?php /* Smarty version Smarty-3.1.13, created on 2014-03-20 15:21:06
         compiled from "C:\WampDeveloper\Websites\collection.me\webroot\templates\ModernBlue\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:238975324b5ea487007-18145594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f70e4b7c248ec857a0dd88e49d94b7dd9a9cbe4' => 
    array (
      0 => 'C:\\WampDeveloper\\Websites\\collection.me\\webroot\\templates\\ModernBlue\\footer.tpl',
      1 => 1395316264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '238975324b5ea487007-18145594',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5324b5ea4dea53_71624387',
  'variables' => 
  array (
    'lang' => 0,
    'settings' => 0,
    'forum_active' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5324b5ea4dea53_71624387')) {function content_5324b5ea4dea53_71624387($_smarty_tpl) {?><?php if ($_SERVER['SCRIPT_NAME']=='/forum.php'){?></div><?php }?>

        <div class="processorlist">
        </div>
	</div>
   </div> 
	<div id="footer">
    <div style=" width:1040px; margin:0 auto; ">
        <div class="links">
        <a href="index.php"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['home'];?>
</a>
        <a href="index.php?view=faq"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['faq'];?>
</a>
        <a href="index.php?view=contact"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['support'];?>
</a>
        <a href="index.php?view=terms"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['terms'];?>
</a>
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['payment_proof']=='yes'){?>
        <a href="index.php?view=payment_proof"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['paymentproof'];?>
</a>
        <?php }?>
        <a href="index.php?view=news"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['news'];?>
</a>
        <?php if ($_smarty_tpl->tpl_vars['forum_active']->value=='yes'){?>
        <a href="forum.php"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['forum'];?>
</a>
        <?php }?>
        <a style="float:left;" href="#Seyed-AmirHossein-Tavousi#Tell:09381585940">طراحی و برنامه نویسی : سید امیرحسین طاووسی</a>
        </div>
        <div class="clear"></div>
        <div style="float: right;padding: 7px 10px;width: 600px;text-align: right;">
        کلیه حقوق برای وبسایت رسمی هیت باکس محفوظ است و هرگونه کپی برداری پیگرد قانونی خواهد داشت.
        </div>
    </div>
</div>
</div>


</body>
</html>    
    
<?php }} ?>