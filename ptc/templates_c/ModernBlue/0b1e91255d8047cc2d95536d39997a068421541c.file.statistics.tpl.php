<?php /* Smarty version Smarty-3.1.13, created on 2014-07-13 07:15:45
         compiled from "/home/arshadir/public_html/ptc/templates/ModernBlue/statistics.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213246876853c1f2d9cddb23-28559874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b1e91255d8047cc2d95536d39997a068421541c' => 
    array (
      0 => '/home/arshadir/public_html/ptc/templates/ModernBlue/statistics.tpl',
      1 => 1405031196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213246876853c1f2d9cddb23-28559874',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'myclicks' => 0,
    'refclicks' => 0,
    'settings' => 0,
    'rentedrefclicks' => 0,
    'autopayclicks' => 0,
    'initmember' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53c1f2d9d5be56_92921407',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c1f2d9d5be56_92921407')) {function content_53c1f2d9d5be56_92921407($_smarty_tpl) {?><!-- Content -->
<div class="widget-main-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['statistics'];?>
</div>
<div class="widget-content">

<script language="JavaScript" src="js/FusionCharts.js"></script>

<table width="100%">
	<tr>
    	<td width="50%">

	<div id="chartdiv" align="center"> 
        FusionCharts. </div>
      <script type="text/javascript">
		   var chart = new FusionCharts("js/Line.swf?ChartNoDataText=Please select a record above", "ChartId", "280", "144", "0", "0");
		   chart.setDataXML("<chart bgSWF='charts/chart.png' canvasBorderColor='e0e0e0' lineColor='33373e' showShadow='1' shadowColor='bdbdbd' anchorBgColor='f1cc2b' caption='<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['chart1'];?>
' showLabels='0' numVDivLines='8' hoverCapBgColor='f7df39' decimalPrecision='2' formatNumberScale='0' showValues='0'  divLineAlpha='20' alternateHGridAlpha='6'><?php echo $_smarty_tpl->tpl_vars['myclicks']->value;?>
</chart>");		   
		   chart.render("chartdiv");
		</script>
 

		</td>

		<td>


	<div id="chartdiv2" align="center"> 
        FusionCharts. </div>
      <script type="text/javascript">
		   var chart = new FusionCharts("js/Line.swf?ChartNoDataText=Please select a record above", "ChartId", "280", "144", "0", "0");
		   chart.setDataXML("<chart bgSWF='charts/chart.png' canvasBorderColor='e0e0e0' lineColor='33373e' showShadow='1' shadowColor='bdbdbd' anchorBgColor='f1cc2b' caption='<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['chart2'];?>
' showLabels='0' numVDivLines='8' hoverCapBgColor='f7df39' decimalPrecision='2' formatNumberScale='0' showValues='0'  divLineAlpha='20' alternateHGridAlpha='6'><?php echo $_smarty_tpl->tpl_vars['refclicks']->value;?>
</chart>");		   
		   chart.render("chartdiv2");
		</script>
 

		</td>
	</tr>
    
   <?php if ($_smarty_tpl->tpl_vars['settings']->value['rent_referrals']=='yes'){?> 
    <tr>
    	<td><br />

	<div id="chartdiv3" align="center"> 
        FusionCharts. </div>
      <script type="text/javascript">
		   var chart = new FusionCharts("js/Line.swf?ChartNoDataText=Please select a record above", "ChartId", "280", "144", "0", "0");
		   chart.setDataXML("<chart bgSWF='charts/chart.png' canvasBorderColor='e0e0e0' lineColor='33373e' showShadow='1' shadowColor='bdbdbd' anchorBgColor='f1cc2b' caption='<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['chart3'];?>
' showLabels='0' numVDivLines='8' hoverCapBgColor='f7df39' decimalPrecision='2' formatNumberScale='0' showValues='0'  divLineAlpha='20' alternateHGridAlpha='6'><?php echo $_smarty_tpl->tpl_vars['rentedrefclicks']->value;?>
</chart>");		   
		   chart.render("chartdiv3");
		</script>
        
        </td>
    	<td><br />

	<div id="chartdiv4" align="center"> 
        FusionCharts. </div>
      <script type="text/javascript">
		   var chart = new FusionCharts("js/Line.swf?ChartNoDataText=Please select a record above", "ChartId", "280", "144", "0", "0");
		   chart.setDataXML("<chart bgSWF='charts/chart.png' canvasBorderColor='e0e0e0' lineColor='33373e' showShadow='1' shadowColor='bdbdbd' anchorBgColor='f1cc2b' caption='<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['chart4'];?>
' showLabels='0' numVDivLines='8' hoverCapBgColor='f7df39' decimalPrecision='4' formatNumberScale='0' showValues='0'  divLineAlpha='20' alternateHGridAlpha='6'><?php echo $_smarty_tpl->tpl_vars['autopayclicks']->value;?>
</chart>");		   
		   chart.render("chartdiv4");
		</script>
        </td>

   </tr>
   <?php }?>
</table>

</div>
<?php echo $_smarty_tpl->tpl_vars['initmember']->value;?>


<!-- End Content --><?php }} ?>