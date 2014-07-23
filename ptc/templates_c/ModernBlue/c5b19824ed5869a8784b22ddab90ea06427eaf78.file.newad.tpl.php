<?php /* Smarty version Smarty-3.1.13, created on 2014-07-14 10:45:44
         compiled from "/home/arshadir/public_html/ptc/templates/ModernBlue/newad.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126886405953c0ca68b36a28-84851635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5b19824ed5869a8784b22ddab90ea06427eaf78' => 
    array (
      0 => '/home/arshadir/public_html/ptc/templates/ModernBlue/newad.tpl',
      1 => 1405318512,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126886405953c0ca68b36a28-84851635',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53c0ca6944b360_02721928',
  'variables' => 
  array (
    'page_title' => 0,
    'lang' => 0,
    'referrer' => 0,
    'page_id' => 0,
    'user_info' => 0,
    'settings' => 0,
    'listvalue' => 0,
    'advalue' => 0,
    'countrylist' => 0,
    'country' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c0ca6944b360_02721928')) {function content_53c0ca6944b360_02721928($_smarty_tpl) {?><!-- Content -->
<script>
function textCounter(field,field2,maxlimit)
{
 var countfield = document.getElementById(field2);
 if ( field.value.length > maxlimit ) {
  field.value = field.value.substring( 0, maxlimit );
  return false;
 } else {
  charleft = field.value.length;
  $("#"+field2).html(charleft);
 }
}
</script>
<div class="widget-main-title"><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['creationform'];?>
</div>
<div class="menu-content">

<table width="100%" cellpadding="5">
    <tr>
    	<td>
<div style="display:none" id="message_sent">
    <div><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['adcreated'];?>
</div>
    <div style="margin-top:1px;">
    <input type="button" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['continuebutton'];?>
" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['referrer']->value;?>
';">
    </div>
</div>



<?php if ($_smarty_tpl->tpl_vars['page_id']->value=='ads'){?>
<?php if ($_smarty_tpl->tpl_vars['user_info']->value['ad_credits']>0){?>


<form class="formclass" method="post" id="create_ad" onsubmit="return createad('<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
');">
<table width="100%" class="widget-tbl">
	<tr>
    	<td align="right" width="150"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['title'];?>
*</td>
        <td><input name="title" type="text" id="title" maxlength="<?php echo $_smarty_tpl->tpl_vars['settings']->value['ptc_chars_title'];?>
" onkeyup="textCounter(this,'counter',<?php echo $_smarty_tpl->tpl_vars['settings']->value['ptc_chars_title'];?>
);" /> <span id="counter">0</span>/<?php echo $_smarty_tpl->tpl_vars['settings']->value['ptc_chars_title'];?>
 کاراکتر</td>
    </tr>
    <tr>
    	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['subtitle'];?>
</td>
        <td><input name="subtitle" type="text" id="subtitle" maxlength="<?php echo $_smarty_tpl->tpl_vars['settings']->value['ptc_chars_descr'];?>
" onkeyup="textCounter(this,'counter2',<?php echo $_smarty_tpl->tpl_vars['settings']->value['ptc_chars_descr'];?>
);" /> <span id="counter2">0</span>/<?php echo $_smarty_tpl->tpl_vars['settings']->value['ptc_chars_descr'];?>
 کاراکتر</td>
    </tr>
    <tr>
    	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['targeturl'];?>
*</td>
        <td><input style="direction:ltr !important;" name="url" type="text" id="url" value="http://" maxlength="200" onkeyup="textCounter(this,'counter3',200);" /> <span id="counter3">0</span>/200 کاراکتر</td>
    </tr>
    <tr>
    	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['imageurl'];?>
</td>
        <td><input style="direction:ltr !important;" name="imgurl" type="text" id="imgurl" value="http://" maxlength="200" onkeyup="textCounter(this,'counter4',200);" /> <span id="counter4">0</span>/200 کاراکتر</td>
    </tr>
    <tr>
    	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['maxclicksperday'];?>
</td>
        <td><input name="clicks_day" type="text" maxlength="11" value="0" /> <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['zerodisabled'];?>
</td>
    </tr>
    <tr>
    	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['premiumonly'];?>
*</td>
        <td>
        	<div id="radio">
           <input type="radio" name="premium" value="yes" id="premium_yes" /> <label for="premium_yes"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['yes'];?>
</label>
           <input type="radio" name="premium" value="no" id="premium_no" checked /> <label for="premium_no"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['no'];?>
</label>
           </div>
        </td>
    </tr>
    <tr>
    	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['advalue'];?>
*</td>
        <td>
           <select name="advalue" id="advalue" style="width:300px;">
           <?php  $_smarty_tpl->tpl_vars['advalue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['advalue']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listvalue']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['advalue']->key => $_smarty_tpl->tpl_vars['advalue']->value){
$_smarty_tpl->tpl_vars['advalue']->_loop = true;
?>
           		<option value="<?php echo $_smarty_tpl->tpl_vars['advalue']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['perclick'];?>
 <?php echo $_smarty_tpl->tpl_vars['advalue']->value['value'];?>
 تومان - <?php echo $_smarty_tpl->tpl_vars['advalue']->value['time'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['seconds'];?>
</option>
           <?php } ?>
          </select>
        </td>
    </tr>
    <tr>
    	<td align="right" style="display:none !important;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['targetcountry'];?>
</td>
        <td style="display:none !important;">
        
        <div class="celltop"><input type="checkbox" name="country_all" value="all" id="checkall" checked="checked"/><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['allcountries'];?>
</div>
        <div style="overflow:auto; height:100px">
        <?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countrylist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value){
$_smarty_tpl->tpl_vars['country']->_loop = true;
?>
	        <?php if ($_smarty_tpl->tpl_vars['country']->value['name']!='-'){?>
    	    <input type="checkbox" name="country[]" value="<?php echo $_smarty_tpl->tpl_vars['country']->value['country'];?>
" class="checkall" checked="checked"/> <?php echo $_smarty_tpl->tpl_vars['country']->value['country'];?>
<br />
            <?php }?>            
        <?php } ?>
        </div>


        </td>
    </tr>
    <tr>
    	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['terms'];?>
*</td>
        <td><input type="checkbox" id="terms" name="terms" /><label for="terms"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['tosad'];?>
</label>
        </td>    
    </tr>
    <tr>
    	<td colspan="2" align="right">
        <input type="submit" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['send'];?>
" class="orange" />
		<input type="button" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['cancel'];?>
" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['referrer']->value;?>
'" />
        </td>
    </tr>
</table>  
</form>
<?php }else{ ?>
    <div class="padding5">
    <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['no_credits'];?>

    </div>
<div class="padding5">
<input type="button" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['continuebutton'];?>
" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['referrer']->value;?>
';">
</div>
<?php }?>


<?php }elseif($_smarty_tpl->tpl_vars['page_id']->value=='banner_ads'){?>
<?php if ($_smarty_tpl->tpl_vars['user_info']->value['banner_credits']>0){?>
<form class="formclass" method="post" id="create_ad" onsubmit="return createad('<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
');">
<table width="100%" class="widget-tbl">

	<tr>
    	<td align="right" width="150"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['title'];?>
*</td>
        <td><input name="title" type="text" id="title" maxlength="<?php echo $_smarty_tpl->tpl_vars['settings']->value['bannerad_chars_title'];?>
" onkeyup="textCounter(this,'counter',<?php echo $_smarty_tpl->tpl_vars['settings']->value['bannerad_chars_title'];?>
);" /> <span id="counter">0</span>/<?php echo $_smarty_tpl->tpl_vars['settings']->value['bannerad_chars_title'];?>
 chars</td>
    </tr>
    <tr>
    	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['targeturl'];?>
*</td>
        <td><input name="url" type="text" id="url" value="http://" maxlength="200" onkeyup="textCounter(this,'counter2',200);" /> <span id="counter2">0</span>/200 chars</td>
    </tr>
    <tr>
    	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['bannerurl'];?>
*</td>
        <td><input name="banner" type="text" id="banner" value="http://" maxlength="200" onkeyup="textCounter(this,'counter3',200);" /> <span id="counter3">0</span>/200 chars</td>
    </tr>

    <tr>
    	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['terms'];?>
*</td>
        <td><input type="checkbox" id="terms" name="terms" /><label for="terms"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['tosad'];?>
</label>
        </td>    
    </tr>
    <tr>
    	<td colspan="2" align="right">
        <input type="submit" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['send'];?>
" class="orange" />
		<input type="button" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['cancel'];?>
" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['referrer']->value;?>
'" />
        </td>
    </tr>
</table>  
</form>
<?php }else{ ?>
    <div class="padding5">
    <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['no_credits'];?>

    </div>
<div class="padding5">
<input type="button" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['continuebutton'];?>
" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['referrer']->value;?>
';">
</div>
<?php }?>


<?php }elseif($_smarty_tpl->tpl_vars['page_id']->value=='featured_ads'){?>
<?php if ($_smarty_tpl->tpl_vars['user_info']->value['fads_credits']>0){?>
<form class="formclass" method="post" id="create_ad" onsubmit="return createad('<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
');">
<table width="100%" class="widget-tbl">
	<tr>
    	<td align="right" width="150"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['title'];?>
*</td>
        <td><input name="title" type="text" id="title"  maxlength="<?php echo $_smarty_tpl->tpl_vars['settings']->value['featuredad_chars_title'];?>
" onkeyup="textCounter(this,'counter',<?php echo $_smarty_tpl->tpl_vars['settings']->value['featuredad_chars_title'];?>
);" /> <span id="counter">0</span>/<?php echo $_smarty_tpl->tpl_vars['settings']->value['featuredad_chars_title'];?>
 chars</td>
    </tr>
    <tr>
    	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['targeturl'];?>
*</td>
        <td><input name="url" type="text" id="url" value="http://" maxlength="200" onkeyup="textCounter(this,'counter3',200);" /> <span id="counter3">0</span>/200 chars</td>
    </tr>
    <tr>
    	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['featuredad'];?>
*</td>
        <td><input type="text" name="featuredad" id="featuredad" maxlength="<?php echo $_smarty_tpl->tpl_vars['settings']->value['featuredad_chars_descr'];?>
" onkeyup="textCounter(this,'counter2',<?php echo $_smarty_tpl->tpl_vars['settings']->value['featuredad_chars_descr'];?>
);" /> <span id="counter2">0</span>/<?php echo $_smarty_tpl->tpl_vars['settings']->value['featuredad_chars_descr'];?>
 chars</td>
    </tr>

    <tr>
    	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['terms'];?>
*</td>
        <td><input type="checkbox" id="terms" name="terms" /><label for="terms"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['tosad'];?>
</label>
        </td>    
    </tr>
    <tr>
    	<td colspan="2" align="right">
        <input type="submit" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['send'];?>
" class="orange" />
		<input type="button" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['cancel'];?>
" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['referrer']->value;?>
'" />
        </td>
    </tr>
</table>  
</form>
<?php }else{ ?>
    <div class="padding5">
    <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['no_credits'];?>

    </div>
<div class="padding5">
<input type="button" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['continuebutton'];?>
" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['referrer']->value;?>
';">
</div>
<?php }?>


<?php }elseif($_smarty_tpl->tpl_vars['page_id']->value=='featured_link'){?>
<?php if ($_smarty_tpl->tpl_vars['user_info']->value['flink_credits']>0){?>
<form class="formclass" method="post" id="create_ad" onsubmit="return createad('<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
');">
<table width="100%" class="widget-tbl">
	<tr>
    	<td align="right" width="150"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['title'];?>
*</td>
        <td><input name="title" type="text" id="title" maxlength="<?php echo $_smarty_tpl->tpl_vars['settings']->value['featuredlink_chars_title'];?>
" onkeyup="textCounter(this,'counter',<?php echo $_smarty_tpl->tpl_vars['settings']->value['featuredlink_chars_title'];?>
);" /> <span id="counter">0</span>/<?php echo $_smarty_tpl->tpl_vars['settings']->value['featuredlink_chars_title'];?>
 chars</td>
    </tr>
    
    <tr>
    	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['targeturl'];?>
*</td>
        <td><input name="url" type="text" id="url" value="http://" maxlength="200" onkeyup="textCounter(this,'counter2',200);" /> <span id="counter2">0</span>/200 chars</td>
    </tr>
    <tr>
    	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['terms'];?>
*</td>
        <td><input type="checkbox" id="terms" name="terms" /><label for="terms"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['tosad'];?>
</label>
        </td>    
    </tr>
    <tr>
    	<td colspan="2" align="right">
        <input type="submit" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['send'];?>
" class="orange" />
		<input type="button" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['cancel'];?>
" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['referrer']->value;?>
'" />
        </td>
    </tr>
</table>  
</form>
<?php }else{ ?>
    <div class="padding5">
    <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['no_credits'];?>

    </div>
<div class="padding5">
<input type="button" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['continuebutton'];?>
" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['referrer']->value;?>
';">
</div>
<?php }?>


<?php }elseif($_smarty_tpl->tpl_vars['page_id']->value=='login_ads'){?>
<?php if ($_smarty_tpl->tpl_vars['user_info']->value['loginads_credits']>0){?>
<form class="formclass" method="post" id="create_ad" onsubmit="return createad('<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
');">
<table width="100%" class="widget-tbl">
	<tr>
    	<td align="right" width="150"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['title'];?>
*</td>
        <td><input name="title" type="text" id="title" maxlength="<?php echo $_smarty_tpl->tpl_vars['settings']->value['loginad_chars_title'];?>
" onkeyup="textCounter(this,'counter',<?php echo $_smarty_tpl->tpl_vars['settings']->value['loginad_chars_title'];?>
);" /> <span id="counter">0</span>/<?php echo $_smarty_tpl->tpl_vars['settings']->value['loginad_chars_title'];?>
 chars</td>
    </tr>
    <tr>
    	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['targeturl'];?>
*</td>
        <td><input name="url" type="text" id="url" value="http://" maxlength="200" onkeyup="textCounter(this,'counter2',200);" /> <span id="counter2">0</span>/200 chars</td>
    </tr>
    <tr>
    	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['bannerurl'];?>
*</td>
        <td><input name="banner" type="text" id="banner" value="http://" maxlength="200" onkeyup="textCounter(this,'counter3',200);" /> <span id="counter3">0</span>/200 chars</td>
    </tr>
    <tr>
    	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['terms'];?>
*</td>
        <td><input type="checkbox" id="terms" name="terms" /><label for="terms"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['tosad'];?>
</label>
        </td>    
    </tr>
    <tr>
    	<td colspan="2" align="right">
        <input type="submit" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['send'];?>
" class="orange" />
		<input type="button" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['cancel'];?>
" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['referrer']->value;?>
'" />
        </td>
    </tr>
</table>  
</form>
<?php }else{ ?>
    <div class="padding5">
    <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['no_credits'];?>

    </div>
<div class="padding5">
<input type="button" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['continuebutton'];?>
" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['referrer']->value;?>
';">
</div>
<?php }?>



<?php }elseif($_smarty_tpl->tpl_vars['page_id']->value=='ptsu_offers'){?>
<?php if ($_smarty_tpl->tpl_vars['user_info']->value['ptsu_credits']>0){?>
<form class="formclass" method="post" id="create_ad" onsubmit="return createad('<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
');">
<table width="100%" class="widget-tbl">
	<tr>
    	<td align="right" width="150"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['title'];?>
*</td>
        <td><input name="title" type="text" id="title" maxlength="<?php echo $_smarty_tpl->tpl_vars['settings']->value['ptsu_chars_title'];?>
" onkeyup="textCounter(this,'counter',<?php echo $_smarty_tpl->tpl_vars['settings']->value['ptsu_chars_title'];?>
);" /> <span id="counter">0</span>/<?php echo $_smarty_tpl->tpl_vars['settings']->value['ptsu_chars_title'];?>
 chars</td>
    </tr>

	<tr>
    	<td align="right" width="150"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['subtitle'];?>
*</td>
        <td><input name="subtitle" type="text" id="subtitle" maxlength="<?php echo $_smarty_tpl->tpl_vars['settings']->value['ptsu_chars_descr'];?>
" onkeyup="textCounter(this,'counter2',<?php echo $_smarty_tpl->tpl_vars['settings']->value['ptsu_chars_descr'];?>
);" /> <span id="counter2">0</span>/<?php echo $_smarty_tpl->tpl_vars['settings']->value['ptsu_chars_descr'];?>
 chars</td>
    </tr>
    
	<tr>
    	<td align="right" width="150"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['instructions'];?>
</td>
        <td><textarea name="instructions" id="instructions" style="height:100px; width:95%"></textarea></td>
    </tr>
    
	<tr>
    	<td align="right" width="150"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['targeturl'];?>
*</td>
        <td><input name="url" type="text" id="url" value="http://" /></td>
    </tr>
    
	<tr>
    	<td align="right" width="150"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['advalue'];?>
*</td>
        <td>
           <select name="advalue" id="advalue">
           <?php  $_smarty_tpl->tpl_vars['advalue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['advalue']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listvalue']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['advalue']->key => $_smarty_tpl->tpl_vars['advalue']->value){
$_smarty_tpl->tpl_vars['advalue']->_loop = true;
?>
           		<option value="<?php echo $_smarty_tpl->tpl_vars['advalue']->value['id'];?>
">$<?php echo $_smarty_tpl->tpl_vars['advalue']->value['value'];?>
</option>
           <?php } ?>
          </select>
        </td>
    </tr>
    
	<tr>
    	<td align="right" width="150"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['premiumonly'];?>
*</td>
        <td>
   		<div id="radio">
           <input type="radio" name="premium" value="yes" id="premium_yes" /> <label for="premium_yes"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['yes'];?>
</label>
           <input type="radio" name="premium" value="no" id="premium_no" checked /> <label for="premium_no"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['no'];?>
</label>
        </div>
        </td>
    </tr>
    
	<tr>
    	<td align="right" width="150"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['targetcountry'];?>
</td>
        <td>
        <div class="celltop"><input type="checkbox" name="country_all" value="all" id="checkall" /><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['allcountries'];?>
</div>
        <div style="overflow:auto; height:100px">
        <?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countrylist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value){
$_smarty_tpl->tpl_vars['country']->_loop = true;
?>
	        <?php if ($_smarty_tpl->tpl_vars['country']->value['name']!='-'){?>
    	    <input type="checkbox" name="country[]" value="<?php echo $_smarty_tpl->tpl_vars['country']->value['country'];?>
" class="checkall" /> <?php echo $_smarty_tpl->tpl_vars['country']->value['country'];?>
<br />
            <?php }?>            
        <?php } ?>
        </div>
        </td>
    </tr>
    
	<tr>
    	<td align="right" width="150"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['terms'];?>
</td>
        <td><input type="checkbox" id="terms" name="terms" /><label for="terms"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['tosad'];?>
</label></td>
    </tr>

    <tr>
    	<td colspan="2" align="right">
        <input type="submit" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['send'];?>
" class="orange" />
		<input type="button" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['cancel'];?>
" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['referrer']->value;?>
'" />
        </td>
    </tr>
</table>  
</form>
<?php }else{ ?>
    <div class="padding5">
    <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['no_credits'];?>

    </div>
    
<div class="padding5">
<input type="button" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['continuebutton'];?>
" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['referrer']->value;?>
';">
</div>
<?php }?>

<?php }?>

</td>
</tr>
</table>


</div>
<!-- End Content --><?php }} ?>