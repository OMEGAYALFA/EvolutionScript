<?php /* Smarty version Smarty-3.1.13, created on 2014-07-11 09:41:46
         compiled from "/home/arshadir/public_html/ptc/templates/ModernBlue/thankyou.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198316817053bf7212aa0336-67645064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '400153248d4e8bb1360a9452729fcb2f44322c0d' => 
    array (
      0 => '/home/arshadir/public_html/ptc/templates/ModernBlue/thankyou.tpl',
      1 => 1405031196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198316817053bf7212aa0336-67645064',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'order' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53bf7212b2cfe7_11322199',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bf7212b2cfe7_11322199')) {function content_53bf7212b2cfe7_11322199($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/arshadir/public_html/ptc/includes/plugins/smarty/plugins/modifier.replace.php';
?><!-- Content -->
<div class="widget-main-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['thankyoutitle'];?>
</div>

<div class="widget-content">
<?php if ($_GET['type']=='funds'){?>
	<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['fundsreceived'];?>

<?php }elseif($_GET['type']=='upgrade'){?>
	<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['accountupgraded'];?>

<?php }else{ ?>
<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['thankyoupurchase'];?>

    <p><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['lang']->value['txt']['orderreceived'],"%ordern",$_smarty_tpl->tpl_vars['order']->value['id']),"%product",$_smarty_tpl->tpl_vars['order']->value['name']);?>
</p>
    <?php if ($_smarty_tpl->tpl_vars['order']->value['status']=='Pending'){?>
        <p><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['orderpending'];?>
</p>
    <?php }elseif($_smarty_tpl->tpl_vars['order']->value['status']=='Completed'){?>
        <p style="color:green"><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['orderdone'];?>
</strong></p>
    <?php }?>
<?php }?>
</div>
          
<!-- End Content -->
<?php }} ?>