<?php /* Smarty version Smarty-3.1.13, created on 2014-07-14 00:19:28
         compiled from "/home/arshadir/public_html/ptc/templates/ModernBlue/allocate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70097665653c2e2c8d0f4b7-36765760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7716b3655adb4744aaa0a4edbefbba9acc7df6d8' => 
    array (
      0 => '/home/arshadir/public_html/ptc/templates/ModernBlue/allocate.tpl',
      1 => 1405031196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70097665653c2e2c8d0f4b7-36765760',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_title' => 0,
    'lang' => 0,
    'referrer' => 0,
    'aditem' => 0,
    'page_id' => 0,
    'user_info' => 0,
    'creditcost' => 0,
    'advalue' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53c2e2c8f05a95_89424670',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2e2c8f05a95_89424670')) {function content_53c2e2c8f05a95_89424670($_smarty_tpl) {?><!-- Content -->
<div class="widget-main-title"><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['allocatecredits'];?>
</div>
<div class="widget-content">
       	
<div class="errorbox" id="errorbox" style="display:none"></div>
<div style="display:none" id="message_sent">
<div>
<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['adupdated'];?>

</div>
<div>
<input type="button" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['continuebutton'];?>
" class="buttonblue" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['referrer']->value;?>
'" />
</div>
</div>
<form class="formclass" method="post" id="allocateform" onsubmit="return allocatead();">
<input type="hidden" name="adid" value="<?php echo $_smarty_tpl->tpl_vars['aditem']->value['id'];?>
" id="adid" />
<input type="hidden" name="class" value="<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
" />
<input type="hidden" name="a" value="submit" />
<table class="widget-tbl" width="100%">
<?php if ($_smarty_tpl->tpl_vars['page_id']->value=='ads'){?>
           
            	<tr>
                	<td align="right" width="50%"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['ad'];?>
:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['aditem']->value['title'];?>
</td>
                </tr>
                <tr>
                	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['mycredits'];?>
:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user_info']->value['ad_credits'];?>
</td>
                </tr>
                <tr>
                	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['creditstoallocate'];?>
:</td>
                    <td><input type="text" value="0" onkeyup="calculatecredits('<?php echo $_smarty_tpl->tpl_vars['creditcost']->value;?>
');" name="allocate" id="allocate" /></td>
                </tr>
                
                <tr>
                	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['cost'];?>
 (Value = $<?php echo $_smarty_tpl->tpl_vars['advalue']->value;?>
 = <?php echo $_smarty_tpl->tpl_vars['creditcost']->value;?>
 credits):</td>
                    <td><input type="text" value="0" id="creditcost" name="creditcost" onkeyup="recalculatecredits('<?php echo $_smarty_tpl->tpl_vars['creditcost']->value;?>
');" disabled  /></td>
                </tr>
            
<?php }elseif($_smarty_tpl->tpl_vars['page_id']->value=='banner_ads'){?>
            	<tr>
                	<td align="right" width="50%"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['ad'];?>
:</td>
                    <td><?php echo stripslashes($_smarty_tpl->tpl_vars['aditem']->value['title']);?>
</td>
                </tr>
                <tr>
                	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['mycredits'];?>
:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user_info']->value['banner_credits'];?>
</td>
                </tr>
                <tr>
                	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['creditstoallocate'];?>
:</td>
                    <td><input type="text" value="0" name="allocate" id="allocate" /></td>
                </tr>
                
                

<?php }elseif($_smarty_tpl->tpl_vars['page_id']->value=='featured_ads'){?>
            	<tr>
                	<td align="right" width="50%"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['ad'];?>
:</td>
                    <td><?php echo stripslashes($_smarty_tpl->tpl_vars['aditem']->value['title']);?>
</td>
                </tr>
                <tr>
                	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['mycredits'];?>
:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user_info']->value['fads_credits'];?>
</td>
                </tr>
                <tr>
                	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['creditstoallocate'];?>
:</td>
                    <td><input type="text" value="0" name="allocate" id="allocate" /></td>
                </tr>


<?php }elseif($_smarty_tpl->tpl_vars['page_id']->value=='featured_link'){?>
            	<tr>
                	<td align="right" width="50%"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['ad'];?>
:</td>
                    <td><?php echo stripslashes($_smarty_tpl->tpl_vars['aditem']->value['title']);?>
</td>
                </tr>
                <tr>
                	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['mycredits'];?>
:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user_info']->value['flink_credits'];?>
</td>
                </tr>
                <tr>
                	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['creditstoallocate'];?>
:</td>
                    <td><input type="text" value="0" name="allocate" id="allocate" /></td>
                </tr>
<?php }elseif($_smarty_tpl->tpl_vars['page_id']->value=='login_ads'){?>
            	<tr>
                	<td align="right" width="50%"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['ad'];?>
:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['aditem']->value['title'];?>
</td>
                </tr>
                <tr>
                	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['mycredits'];?>
:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user_info']->value['loginads_credits'];?>
</td>
                </tr>
                <tr>
                	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['creditstoallocate'];?>
:</td>
                    <td><input type="text" value="0" name="allocate" id="allocate" /></td>
                </tr>
<?php }elseif($_smarty_tpl->tpl_vars['page_id']->value=='ptsu_offers'){?>
            	<tr>
                	<td align="right" width="50%"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['ad'];?>
:</td>
                    <td><?php echo stripslashes($_smarty_tpl->tpl_vars['aditem']->value['title']);?>
</td>
                </tr>
                <tr>
                	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['mycredits'];?>
:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user_info']->value['ptsu_credits'];?>
</td>
                </tr>
                <tr>
                	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['creditstoallocate'];?>
:</td>
                    <td><input type="text" value="0" onkeyup="calculatecredits('<?php echo $_smarty_tpl->tpl_vars['creditcost']->value;?>
');" name="allocate" id="allocate" /></td>
                </tr>
                <tr>
                	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['cost'];?>
  (<?php echo $_smarty_tpl->tpl_vars['creditcost']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['credits'];?>
 = 1 <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['slots'];?>
)</td>
                    <td><input type="text" value="0" id="creditcost" name="creditcost" onkeyup="recalculatecredits('<?php echo $_smarty_tpl->tpl_vars['creditcost']->value;?>
');" disabled  /></td>
                </tr>
<?php }?>

<tr>
	<td colspan="2" align="center">

<input type="submit" name="btn" class="orange" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['allocatecredits'];?>
" />
<input type="button" name="btn" class="buttonblue" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['cancel'];?>
" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['referrer']->value;?>
'" />

	</td>
</tr>    
</table>
</form>
</div>
<!-- End Content --><?php }} ?>