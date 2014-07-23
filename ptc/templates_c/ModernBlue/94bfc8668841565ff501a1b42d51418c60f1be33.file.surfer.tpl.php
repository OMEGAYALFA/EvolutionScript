<?php /* Smarty version Smarty-3.1.13, created on 2014-07-14 11:34:31
         compiled from "/home/arshadir/public_html/ptc/templates/ModernBlue/surfer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165677035853c380ff9992a7-90153843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94bfc8668841565ff501a1b42d51418c60f1be33' => 
    array (
      0 => '/home/arshadir/public_html/ptc/templates/ModernBlue/surfer.tpl',
      1 => 1405031196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165677035853c380ff9992a7-90153843',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'lang' => 0,
    'template_name' => 0,
    'error_msg' => 0,
    'ad_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53c380ffad3ba5_14778426',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c380ffad3ba5_14778426')) {function content_53c380ffad3ba5_14778426($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html style="height:100%">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['settings']->value['site_title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['surfertitle'];?>
</title>
<link href="templates/<?php echo $_smarty_tpl->tpl_vars['template_name']->value;?>
/surfbar.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="./js/jquery.min.js"></script>
<script type="text/javascript" src="js/link2progress.js"></script>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['force_viewads']==1){?>
<script type="text/javascript" src="js/nsurfer.js"></script>
<?php }else{ ?>
<script type="text/javascript" src="js/surfer.js"></script>
<?php }?>
<script type="text/javascript">	
$(function(){
	looknrun('<?php echo $_smarty_tpl->tpl_vars['settings']->value['autoloadad_secs'];?>
', '<?php echo $_smarty_tpl->tpl_vars['error_msg']->value;?>
');
});
<?php if ($_smarty_tpl->tpl_vars['ad_info']->value['time']==''){?>
var secs=0;
<?php }else{ ?>
var secs=<?php echo $_smarty_tpl->tpl_vars['ad_info']->value['time'];?>
;
<?php }?>
var tway=1;
var activeWindowsAd = 'true';
var activeFrameAd = 'true';
var adtk = '<?php echo mb_convert_encoding(htmlspecialchars($_REQUEST['t'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
';
var sitename = '<?php echo $_smarty_tpl->tpl_vars['settings']->value['site_name'];?>
';
var siteurl = '<?php echo $_smarty_tpl->tpl_vars['ad_info']->value['url'];?>
';
var adwait = '<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['adwait'];?>
';
var adcredited = '<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['accountcredited'];?>
';
</script>
</head>
<body>
<div class="surfbar">
	<div class="logo"></div>    
	<div id="surfbar"></div>
    
    <div id="vnumbers" style="display:none">
    	<table>
        	<tr>
				<td style="font-size:16px" valign="middle">Click the upside<br />down picture</td>
                <td valign="middle">

<map name="Map" id="Map">
<area shape="rect" coords="0,0,50,50" href="javascript:void(0);" onclick="endprogress(1);" />
<area shape="rect" coords="100,0,50,50" href="javascript:void(0);" onclick="endprogress(2);" />
<area shape="rect" coords="150,0,50,50" href="javascript:void(0);" onclick="endprogress(3);" />
<area shape="rect" coords="200,0,50,50" href="javascript:void(0);" onclick="endprogress(4);" />
<area shape="rect" coords="250,0,50,50" href="javascript:void(0);" onclick="endprogress(5);" />
<area shape="rect" coords="300,0,50,50" href="javascript:void(0);" onclick="endprogress(6);" />
</map>                
<img src="modules.php?m=surfer&show=captcha" usemap="#Map" border="0" />
                </td>
            </tr>
        </table> 
    </div>
    
    <div class="banner"><?php if (showrotatingbanners()){?><?php }?></div>
</div>

<iframe src="<?php echo $_smarty_tpl->tpl_vars['ad_info']->value['url'];?>
" id="pgl" class="surfer_frame" frameborder = "0"></iframe>
  <div id="mask"></div>
</div>
</body>
</html><?php }} ?>