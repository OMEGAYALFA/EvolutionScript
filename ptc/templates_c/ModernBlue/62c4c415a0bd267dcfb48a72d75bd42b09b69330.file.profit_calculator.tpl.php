<?php /* Smarty version Smarty-3.1.13, created on 2014-03-19 20:48:11
         compiled from "C:\WampDeveloper\Websites\collection.me\webroot\templates\ModernBlue\profit_calculator.tpl" */ ?>
<?php /*%%SmartyHeaderCode:310615329d153b766b7-35267504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62c4c415a0bd267dcfb48a72d75bd42b09b69330' => 
    array (
      0 => 'C:\\WampDeveloper\\Websites\\collection.me\\webroot\\templates\\ModernBlue\\profit_calculator.tpl',
      1 => 1394168000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '310615329d153b766b7-35267504',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'membershiplist' => 0,
    'click_value' => 0,
    'settings' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5329d153bf4f82_49548217',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5329d153bf4f82_49548217')) {function content_5329d153bf4f82_49548217($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'C:\\WampDeveloper\\Websites\\collection.me\\webroot\\includes\\plugins\\smarty\\plugins\\modifier.replace.php';
?>
<!-- Content -->
<script>
<?php echo $_smarty_tpl->tpl_vars['membershiplist']->value;?>

var totalmemberships = membershipList.membership.length;
var click_value = <?php echo $_smarty_tpl->tpl_vars['click_value']->value;?>
;

		$(function(){


			var r = 0;
			for(r=0;r<totalmemberships;r++){
				if(r != 0){
					$("#referral_select").append('<div id="referraldiv'+r+'"><select name="referrals'+r+'" id="referrals'+r+'" onchange="calculateprofit();"></select></div>');
				}else{
					$("#referral_select").append('<div id="referraldiv'+r+'"><select name="referrals'+r+'" id="referrals'+r+'" onchange="calculateprofit();"></select></div>');
				}
				var i=0;
				var b = 0;
				if(membershipList.membership[r].rentedref_limit == -1){
					membershipList.membership[r].rentedref_limit = 1000;
				}
				for (i=0;i<=membershipList.membership[r].rentedref_limit;i++){
					i = i+100;
					b = b+100;
					$('#referrals'+r).append('<option>'+b+'</option>');
				}
			}
			for(r=1;r<totalmemberships;r++){
				$("#referraldiv"+r).hide();
			}
			
	var membership = $("#membership").val();
	var clicksxday = $("#clicksxday").val();
	var referrals_value = $("#referrals"+membership).val();
	var dailyprofit = (clicksxday*click_value*referrals_value*membershipList.membership[membership].ref_click)/100

	var monthlyprofit = dailyprofit*30;
	var yearlyprofit = monthlyprofit*12;
	$("#dailyprofit").html("$"+dailyprofit);
	$("#monthlyprofit").html("$"+monthlyprofit);
	$("#yearlyprofit").html("$"+yearlyprofit);
			
		});



function recalculateprofit(){
	var membership = $("#membership").val();
	var referral_current = $("#referral_current").val();
	$("#referraldiv"+referral_current).hide();
	$("#referraldiv"+membership).show();
	$("#referral_current").val(membership);
	
	var clicksxday = $("#clicksxday").val();
	var referrals_value = $("#referrals"+membership).val();
	var dailyprofit = (clicksxday*click_value*referrals_value*membershipList.membership[membership].ref_click)/100

	var monthlyprofit = dailyprofit*30;
	var yearlyprofit = monthlyprofit*12;
	$("#dailyprofit").html("$"+dailyprofit);
	$("#monthlyprofit").html("$"+monthlyprofit);
	$("#yearlyprofit").html("$"+yearlyprofit);
}

function calculateprofit(){
	var membership = $("#membership").val();
	var clicksxday = $("#clicksxday").val();
	var referrals_value = $("#referrals"+membership).val();
	var dailyprofit = (clicksxday*click_value*referrals_value*membershipList.membership[membership].ref_click)/100

	var monthlyprofit = dailyprofit*30;
	var yearlyprofit = monthlyprofit*12;
	$("#dailyprofit").html("$"+dailyprofit);
	$("#monthlyprofit").html("$"+monthlyprofit);
	$("#yearlyprofit").html("$"+yearlyprofit);
}

</script>
<div class="widget-main-title"><?php echo $_smarty_tpl->tpl_vars['settings']->value['site_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['profit_calculator'];?>
</div>
<div class="widget-content">
	<div class="info_box"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lang']->value['txt']['profict_calcdescr'],"%sitename",$_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
</div>
<input type="hidden" name="referral_current" id="referral_current" value="0" />
<table align="center" class="widget-tbl">
	<tr>
    	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['membership'];?>
:</td>
		<td>
        		<select name="membership" id="membership" onchange="recalculateprofit();">
<script>

for (var k in membershipList.membership){
	document.write('<option value="'+k+'">'+membershipList.membership[k].name+'</option>');
}

</script>
				</select>
  
		</td>
	</tr>
    <tr>                  
        <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['clickxday'];?>
:</td>
        <td>
    <select name="clicksxday" id="clicksxday" onchange="calculateprofit();">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
    </select>
        </td>
    </tr>
    <tr>
        <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['referrals'];?>
:</td>
        <td>
        <div id="referral_select"></div>
        </td>
    </tr>
    <tr>
    	<td colspan="2" style="padding:5px" align="center">
        <div style="font-family:Georgia; font-size:15px; font-weight:bold; text-shadow:0 0 1px #000000; cursor:default">
        <table>
        	<tr>
            	<td>&rarr;&nbsp;<span><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['dailyprofit'];?>
</span> &larr;</td>
                <td>&rarr;&nbsp;<span><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['monthlyprofit'];?>
</span> &larr;</td>
                <td>&rarr;&nbsp;<span><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['yearlyprofit'];?>
</span> &larr;</td>
			</tr>
            <tr>
            	<td align="center"><span style="color:#327e04" id="dailyprofit"></span></td>
                <td align="center"><span style="color:#327e04" id="monthlyprofit"></span></td>
                <td align="center"><span style="color:#327e04" id="yearlyprofit"></span></td>
			</tr>
        </table>                
               </div> 

        </td>
    </tr>
</table>             

<div align="center" style="color:#990000"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['profict_calcdescr2'];?>
</div>
</div>


<!-- End Content --><?php }} ?>