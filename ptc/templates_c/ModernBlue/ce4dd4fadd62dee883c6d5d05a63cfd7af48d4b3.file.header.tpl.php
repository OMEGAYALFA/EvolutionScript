<?php /* Smarty version Smarty-3.1.13, created on 2014-07-07 14:45:29
         compiled from "C:\WampDeveloper\Websites\exe.ir\webroot\EvolutionScript\templates\ModernBlue\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1485553bab289b1c216-86014364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce4dd4fadd62dee883c6d5d05a63cfd7af48d4b3' => 
    array (
      0 => 'C:\\WampDeveloper\\Websites\\exe.ir\\webroot\\EvolutionScript\\templates\\ModernBlue\\header.tpl',
      1 => 1396164176,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1485553bab289b1c216-86014364',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'logged' => 0,
    'user_info' => 0,
    'lang' => 0,
    'memberonly_support' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53bab289c162c6_31389298',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bab289c162c6_31389298')) {function content_53bab289c162c6_31389298($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\WampDeveloper\\Websites\\exe.ir\\webroot\\EvolutionScript\\includes\\plugins\\smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['settings']->value['site_title'];?>
</title>
<link href="./templates/ModernBlue/css/global.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="./js/jquery.min.js"></script>
<script type="text/javascript" src="./js/jquery-ui-1.9.1.custom.min.js"></script>
<link href="./templates/ModernBlue/css/evolutionscript/jquery-ui-1.9.2.custom.css" rel="stylesheet">
<script type="text/javascript" src="./js/evolutionscript.js"></script>
<script type="text/javascript" src="js/l2blockit.js"></script>
<script>
$(function(){
	$(".navbar .submenu").hover(function(){
		$(this).children('ul').show();
	}, function(){
		$(this).children('ul').hide();
	});
<?php if ($_smarty_tpl->tpl_vars['logged']->value=='yes'){?>
	var stickyNavTop = $('.flotator').offset().top;  	
	stickyNavTop= stickyNavTop+130;
	var stickyNav = function(){  
	var scrollTop = $(window).scrollTop();  		   
	if (scrollTop > (stickyNavTop)) { 
		$('.member_toolbar').show();  
		$('.flotator').addClass('sticky');  
	} else {  
		$('.member_toolbar').hide();
		$('.flotator').removeClass('sticky');   
	}  
	};  	  
	stickyNav();    
	$(window).scroll(function() {  
		stickyNav();  
});
<?php }?>
	}); 
mydate = new Date("<?php echo smarty_modifier_date_format(time(),"%d %b %Y %H:%M:%S");?>
");


	$(document).ready(function() {	
		dateTimer();
	});
	
	

	
	</script>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['googleanalytics']=='yes'){?>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '<?php echo $_smarty_tpl->tpl_vars['settings']->value['googleanalyticsid'];?>
']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<?php }?>
</head>

<body>
<div class="fullsite">
    <div class="wrapper">
        <div id="header">
<?php if ($_smarty_tpl->tpl_vars['logged']->value=='yes'){?>
<div class="flotator">
    <div class="member_toolbar" style="display:none">
    	
        <ul>
        	<li class="mini_logo"><img src="./templates/ModernBlue/css/images/mini_logo.png" align="absmiddle" /></li>
            <li title="Username"><a href="/?view=account"><img src="images/memberbar/account.png" align="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['user_info']->value['username'];?>
</a></li>
            <li title="Account balance"><a href="/?view=account"><img src="images/memberbar/coins.png" align="absmiddle" /> $<?php echo $_smarty_tpl->tpl_vars['user_info']->value['money'];?>
</a></li>
            <li title="Purchase balance"><a href="/?view=account&page=addfunds"><img src="images/memberbar/coins_add.png" align="absmiddle" />  $<?php echo $_smarty_tpl->tpl_vars['user_info']->value['purchase_balance'];?>
</a></li>
            <li title="Direct referrals"><a href="/?view=account&page=referrals"><img src="images/memberbar/refs.png" align="absmiddle" />  <?php echo $_smarty_tpl->tpl_vars['user_info']->value['referrals'];?>
</li>
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['rent_referrals']=='yes'){?>
            <li title="Rented referrals"><a href="/?view=account&page=rented_referrals"><img src="images/memberbar/rentedrefs.png" align="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['user_info']->value['rented_referrals'];?>
</a>
            </li>
            <?php }?>
            <li title="Account settings">
                <a href="/?view=account&page=settings"><img src="images/memberbar/settings.png" align="absmiddle" /></a>
            </li>
            <li title="My orders">
                <a href="/?view=account&page=history"><img src="images/memberbar/cart.png" align="absmiddle" /></a>
            </li>
            <li title="Statistics">
                <a href="/?view=account&page=statistics"><img src="images/memberbar/stats.png" align="absmiddle" /></a>
            </li>
            <li title="Private messages">
                <a href="/?view=account&page=messages"><img src="images/memberbar/email.png" align="absmiddle" /></a>
            </li>
            <li title="Logout">
                <a href="/?view=logout"><img src="images/memberbar/lock.png" align="absmiddle" /></a>
            </li>
            <li title="Server Time">
                <img src="images/memberbar/clock.png" align="absmiddle" /> <span id="timenow"></span>
            </li>
        </ul>
        <div class="clear"></div>
    </div>
</div>
<?php }?>
            <div id="logo">
                <a href="/"></a>
            </div>
            <div class="top-banner"><?php if (showrotatingbanners()){?><?php }?>
            <div style="clear:both; height:10px;"></div>
            <a href="index.php?view=login" class="LoginB">ورود</a>
            <div class="PhoneHeader">پشتیبانی : 09381585940 :: طاووسی</div>
            </div></div>
            <div class="clear"></div>
            <div class="navbar">
                <ul>
                    <li><a style="border-radius: 3px;" href="./" <?php if ($_SERVER['SCRIPT_NAME']=='/index.php'&&$_GET['view']==''||$_GET['view']=='home'){?>class="current"<?php }?>><span class="white-icon ui-icon-home"></span>صفحه اصلی</a></li>
                        <li><a href="index.php?view=advertise" <?php if ($_GET['view']=='advertise'){?>class="current"<?php }?>><span class="white-icon ui-icon-cart"></span><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['advertise'];?>
</a></li>
                        
                        <li class="submenu"><a href="javascript:void();" <?php if ($_GET['view']=='ads'){?>class="current"<?php }?>><span class="white-icon ui-icon-star"></span>کسب درآمد</a>
                        	<ul>
                            	<li><a href="index.php?view=ads"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['viewads'];?>
</a></li>
                                <?php if ($_smarty_tpl->tpl_vars['logged']->value=='yes'&&$_smarty_tpl->tpl_vars['settings']->value['ptsu_available']=='yes'){?>
                                <li><a href="index.php?view=account&page=ptsu"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['ptsu'];?>
</a></li>
                                <?php }?>
                            </ul>
                        </li>
                        <?php if ($_smarty_tpl->tpl_vars['logged']->value!='yes'){?>
                        <li><a href="index.php?view=login" <?php if ($_GET['view']=='login'){?>class="current"<?php }?>><span class="white-icon ui-icon-person"></span><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['login'];?>
</a></li>
                        <li><a href="index.php?view=register" <?php if ($_GET['view']=='register'){?>class="current"<?php }?>><span class="white-icon ui-icon-star"></span><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['register'];?>
</a></li>
                        <?php }else{ ?>
                        <li><a href="index.php?view=account" <?php if ($_GET['view']=='account'){?>class="current"<?php }?>><span class="white-icon ui-icon-person"></span><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['myaccount'];?>
</a></li>
                        <?php }?>
                        <li><a href="index.php?view=faq" <?php if ($_GET['view']=='faq'){?>class="current"<?php }?>><span class="white-icon ui-icon-note"></span><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['faq'];?>
</a></li>
                        <?php if (($_smarty_tpl->tpl_vars['logged']->value=='yes'&&$_smarty_tpl->tpl_vars['memberonly_support']->value=='yes')||($_smarty_tpl->tpl_vars['memberonly_support']->value!='yes')){?>
                        <li><a href="index.php?view=contact" <?php if ($_GET['view']=='contact'){?>class="current"<?php }?>><span class="white-icon ui-icon-flag"></span><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['support'];?>
</a></li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['logged']->value!='yes'){?>
                        <li><a href="index.php?view=terms" <?php if ($_GET['view']=='terms'){?>class="current"<?php }?>><span class="white-icon ui-icon-document"></span><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['terms'];?>
</a></li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['forum_active']=='yes'){?>
                        <li><a href="forum.php" <?php if ($_SERVER['SCRIPT_NAME']=='/forum.php'){?>class="current"<?php }?>><span class="white-icon ui-icon-comment"></span><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['forum'];?>
</a></li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['logged']->value=='yes'){?>
                        <li><a href="index.php?view=logout"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['logout'];?>
</a></li>
                        <?php }?>
                </ul>
            <div class="clear"></div>

            </div>
        </div>
     
        <div id="content">
<?php if ($_SERVER['SCRIPT_NAME']=='/forum.php'){?>
<div class="site_title"><?php echo $_smarty_tpl->tpl_vars['settings']->value['site_name'];?>
 Forum</div>
<div class="site_content">
<?php }?><?php }} ?>