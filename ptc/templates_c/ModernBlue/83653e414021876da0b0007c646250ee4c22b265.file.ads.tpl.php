<?php /* Smarty version Smarty-3.1.13, created on 2014-07-16 01:24:33
         compiled from "/home/arshadir/public_html/ptc/templates/ModernBlue/ads.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207028017953c0cd0400c9d4-47361488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83653e414021876da0b0007c646250ee4c22b265' => 
    array (
      0 => '/home/arshadir/public_html/ptc/templates/ModernBlue/ads.tpl',
      1 => 1405449492,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207028017953c0cd0400c9d4-47361488',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53c0cd041def46_02946156',
  'variables' => 
  array (
    'lang' => 0,
    'logged' => 0,
    'show_advice' => 0,
    'adsreset' => 0,
    'myads' => 0,
    'adminAdvertisement' => 0,
    'user_info' => 0,
    'adcategory' => 0,
    'advertisement' => 0,
    'ad' => 0,
    'adnumber' => 0,
    'advisited' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c0cd041def46_02946156')) {function content_53c0cd041def46_02946156($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/arshadir/public_html/ptc/includes/plugins/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_math')) include '/home/arshadir/public_html/ptc/includes/plugins/smarty/plugins/function.math.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="site_title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['viewads'];?>
</div>
<div class="site_content">
    <script>
	$(function(){
		$(".blockthis").l2block("#ffffff", 35);
	});
	</script>
<?php if ($_smarty_tpl->tpl_vars['logged']->value=='yes'){?>
    <?php if ($_smarty_tpl->tpl_vars['show_advice']->value=='yes'){?>
        <div class="dashboardbox"><?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['lang']->value['txt']['adsviewed'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?><br />
        <?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['lang']->value['txt']['needadstoview'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?>
        </div>
    <?php }?>

<div class="adtimereset corner-all">
	<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['time_reset'];?>
 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['adsreset']->value,"%H:%M");?>

</div>    

<?php }?>


<?php if ($_smarty_tpl->tpl_vars['myads']->value!=0){?>
    <?php if (!empty($_smarty_tpl->tpl_vars['adminAdvertisement']->value)&&$_smarty_tpl->tpl_vars['user_info']->value['adminad']==0){?>
    <div id="admin_advertisement">
        <div align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['click_to_unlock_ads'];?>
</div>
        <div class="ad-div">
            <div class="ad-title pointer">
                <span class="ad-name" onclick="window.open('index.php?view=surfer&t=YWRtaW5hZHZlcnRpc2VtZW50','_blank'); "><?php echo stripslashes($_smarty_tpl->tpl_vars['adminAdvertisement']->value['ad_title']);?>
</span>
            </div>
            <div class="ad-content">
                <?php echo stripslashes($_smarty_tpl->tpl_vars['adminAdvertisement']->value['ad_descr']);?>

            </div>
        </div>
    </div>
    <?php }?>
    
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['c'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['c']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['name'] = 'c';
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['adcategory']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
	    <?php $_smarty_tpl->tpl_vars["adnumber"] = new Smarty_variable("0", null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['ad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['advertisement']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ad']->key => $_smarty_tpl->tpl_vars['ad']->value){
$_smarty_tpl->tpl_vars['ad']->_loop = true;
?>
        	<?php if ($_smarty_tpl->tpl_vars['ad']->value['category']==$_smarty_tpl->tpl_vars['adcategory']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['id']){?>
                <?php echo smarty_function_math(array('equation'=>"x + 1",'x'=>$_smarty_tpl->tpl_vars['adnumber']->value,'assign'=>"adnumber"),$_smarty_tpl);?>

            <?php }?>
       	<?php } ?> 
        
        <?php if ($_smarty_tpl->tpl_vars['adnumber']->value>0){?>
    		<h3><?php echo $_smarty_tpl->tpl_vars['adcategory']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['name'];?>
</h3>
            <?php  $_smarty_tpl->tpl_vars['ad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['advertisement']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ad']->key => $_smarty_tpl->tpl_vars['ad']->value){
$_smarty_tpl->tpl_vars['ad']->_loop = true;
?>
            	<?php if ($_smarty_tpl->tpl_vars['ad']->value['category']==$_smarty_tpl->tpl_vars['adcategory']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['id']){?>
                <div class="ad-block <?php if (!empty($_smarty_tpl->tpl_vars['adminAdvertisement']->value)&&$_smarty_tpl->tpl_vars['user_info']->value['adminad']==0){?>blockthis<?php }?> <?php if (in_array($_smarty_tpl->tpl_vars['ad']->value['id'],$_smarty_tpl->tpl_vars['advisited']->value)){?>disabled<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['ad']->value['token'];?>
" style="margin-bottom:5px; <?php if ($_SESSION['adSync']==$_smarty_tpl->tpl_vars['ad']->value['token']){?>display:none<?php }?>">
                
                
                        <div class="ad-title">
                            <span class="pointer" onclick="window.open('index.php?view=surfer&t=<?php echo $_smarty_tpl->tpl_vars['ad']->value['token'];?>
','_blank');"><?php echo stripslashes($_smarty_tpl->tpl_vars['ad']->value['title']);?>
</span>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['adcategory']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['hide_descr']!=1){?>
                        <div class="ad-content">
                        <table cellpadding="5" width="100%">
                        <tr>
            <?php if (!empty($_smarty_tpl->tpl_vars['ad']->value['img'])&&$_smarty_tpl->tpl_vars['ad']->value['img']!='http://'){?>
            <td valign="top" width="100">
            <img src="<?php echo $_smarty_tpl->tpl_vars['ad']->value['img'];?>
" style="max-height:100px; max-width:100px" />
            </td>
            <?php }?>
                 <td valign="top"><?php echo stripslashes($_smarty_tpl->tpl_vars['ad']->value['descr']);?>
</td>
                 </tr>
                 </table>
                        </div>
                        <?php }?>
                        <div class="ad-footer">
                        <?php echo $_smarty_tpl->tpl_vars['ad']->value['value'];?>
 تومان به دست آورید
                        </div>
                </div> 
                <?php }?>
            <?php } ?> 
            <div class="clear"></div>
        <?php }?>
    <?php endfor; endif; ?>

	<?php  $_smarty_tpl->tpl_vars['ad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['advertisement']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ad']->key => $_smarty_tpl->tpl_vars['ad']->value){
$_smarty_tpl->tpl_vars['ad']->_loop = true;
?>
    
    
    

    
    

                <?php } ?>    
    
   

    
	

    	
    
<?php }else{ ?>
<div class="error_box"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['noadsfoundmsg'];?>
</div>
<?php }?>


</div>
<!-- End Content -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>