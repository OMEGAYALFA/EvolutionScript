<?php /* Smarty version Smarty-3.1.13, created on 2014-07-14 00:17:55
         compiled from "/home/arshadir/public_html/ptc/templates/ModernBlue/validate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194930581953c2e26ba1d428-78083407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f45cdfc554eb92c2eef7c0095d04a0624e6bb6a' => 
    array (
      0 => '/home/arshadir/public_html/ptc/templates/ModernBlue/validate.tpl',
      1 => 1405031196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194930581953c2e26ba1d428-78083407',
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
  'unifunc' => 'content_53c2e26babffd9_96452000',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c2e26babffd9_96452000')) {function content_53c2e26babffd9_96452000($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html style="height:100%">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['settings']->value['site_title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['validatingad'];?>
</title>
<link href="templates/<?php echo $_smarty_tpl->tpl_vars['template_name']->value;?>
/surfbar.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="./js/jquery.min.js"></script>
<script type="text/javascript" src="./js/jquery-ui-1.9.1.custom.min.js"></script>
<script type="text/javascript" src="./js/link2progress.js"></script>
<script type="text/javascript" src="./js/ptcevolution.js"></script>
<script type="text/javascript">	
var secs=15;
var tway=1;
var adid = '<?php echo mb_convert_encoding(htmlspecialchars($_REQUEST['id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
';
var adwait = '<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['adwait'];?>
';
var adcredited = '<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['advalidated'];?>
';
$(document).ready(ptcevolution_surfer);
</script>
</head>
<body onload="vshowadbar('<?php echo $_smarty_tpl->tpl_vars['error_msg']->value;?>
');">

<div class="surfbar">
	<div class="logo"></div>    
	<div id="surfbar"></div>
    <div id="vnumbers" style="display:none" align="center">
    	<table>
        	<tr>
            	<td style="font-size:20px" valign="middle">Click the upside<br />down picture</td>
                <td valign="middle" style="border:1px dashed;">
<map name="Map" id="Map">
<area shape="rect" coords="0,0,50,50" href="javascript:void(0);" onclick="vendprogress(1);" />
<area shape="rect" coords="100,0,50,50" href="javascript:void(0);" onclick="vendprogress(2);" />
<area shape="rect" coords="150,0,50,50" href="javascript:void(0);" onclick="vendprogress(3);" />
<area shape="rect" coords="200,0,50,50" href="javascript:void(0);" onclick="vendprogress(4);" />
<area shape="rect" coords="250,0,50,50" href="javascript:void(0);" onclick="vendprogress(5);" />
<area shape="rect" coords="300,0,50,50" href="javascript:void(0);" onclick="vendprogress(6);" />
</map>                
<img src="modules.php?m=surfer&show=captcha" usemap="#Map" border="0" />                </td>
            </tr>
        </table>
    </div>
     <div class="banner"><?php if (showrotatingbanners()){?><?php }?></div>
</div>
<iframe src="<?php echo $_smarty_tpl->tpl_vars['ad_info']->value['url'];?>
" id="pgl" class="surfer_frame" frameborder = "0"></iframe>

</body>
</html><?php }} ?>