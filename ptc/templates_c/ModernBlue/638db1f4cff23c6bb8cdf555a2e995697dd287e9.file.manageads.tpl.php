<?php /* Smarty version Smarty-3.1.13, created on 2014-07-14 00:31:29
         compiled from "/home/arshadir/public_html/ptc/templates/ModernBlue/manageads.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139841431253bf78da5cec42-30224530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '638db1f4cff23c6bb8cdf555a2e995697dd287e9' => 
    array (
      0 => '/home/arshadir/public_html/ptc/templates/ModernBlue/manageads.tpl',
      1 => 1405281672,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139841431253bf78da5cec42-30224530',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53bf78da7b12a3_11786669',
  'variables' => 
  array (
    'lang' => 0,
    'page_title' => 0,
    'pages' => 0,
    'k' => 0,
    'pagesid' => 0,
    'v' => 0,
    'page_id' => 0,
    'paginator' => 0,
    'thelist' => 0,
    'item' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bf78da7b12a3_11786669')) {function content_53bf78da7b12a3_11786669($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/arshadir/public_html/ptc/includes/plugins/smarty/plugins/modifier.date_format.php';
?><!-- Content -->
<script>

function showconfirm(adid,classid){
	$( "#dialog-confirm" ).dialog({
		resizable: false,
		autoOpen: false,
		modal: true,
		width:500,
		buttons: {
			"<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['delete'];?>
": function() {
				$( this ).dialog( "close" );
				adcontrol(adid, 'delete', classid);
			},
			"<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['cancel'];?>
": function() {
				$( this ).dialog( "close" );
				return false;
			}
		}
	});
	return $( "#dialog-confirm" ).dialog( "open" );
}
</script>
<div id="dialog-confirm" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['myads'];?>
 - <?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
" style="display:none">
	<p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Do you really want to delete this Ad? - This action is not reversible!</p>
</div>

<div class="widget-main-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['manage'];?>
</div>


<table width="100%" class="widget-tbl">
	<tr>
    	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['manage'];?>
:</td>
    	<td>
               <select name="type" onchange="return location.href='./?view=account&page=manageads&class='+this.value;" id="manage_ads">
               <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
               		<?php if ($_REQUEST['class']==$_smarty_tpl->tpl_vars['pagesid']->value[$_smarty_tpl->tpl_vars['k']->value]){?>
	               	<option value="<?php echo $_smarty_tpl->tpl_vars['pagesid']->value[$_smarty_tpl->tpl_vars['k']->value];?>
" selected><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
                	<?php }else{ ?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['pagesid']->value[$_smarty_tpl->tpl_vars['k']->value];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
                    <?php }?>
               <?php } ?>
               </select>
       </td>
     </tr>
</table>     
<div style="margin-top:5px"></div>


<div class="widget-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['myads'];?>
 - <?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</div>
<div class="widget-content">
<div class="info_box"><a href="./?view=account&page=newad&class=<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['click_to_add_advertisement'];?>
</a></div>



	<div id="admanagefrm">
<?php if ($_smarty_tpl->tpl_vars['page_id']->value=='ads'){?>
<table width="100%" class="widget-tbl">
<tr class="titles">
        <td><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('title',$_smarty_tpl->tpl_vars['lang']->value['txt']['ad']);?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('click_pack',$_smarty_tpl->tpl_vars['lang']->value['txt']['credits']);?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('clicks',$_smarty_tpl->tpl_vars['lang']->value['txt']['clicks']);?>
 / <?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('outside_clicks',$_smarty_tpl->tpl_vars['lang']->value['txt']['outside']);?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('clicks_today',$_smarty_tpl->tpl_vars['lang']->value['txt']['clicks_today']);?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['action'];?>
</td>
    </tr>

        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['thelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['status']=='Inactive'){?>
                <tr>
                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></td>
                    <td align="center" colspan="3"><strong><a href="index.php?view=account&page=validate&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['clicktovalidatead'];?>
</a></strong></td>
                </tr>
            <?php }elseif($_smarty_tpl->tpl_vars['item']->value['status']=='Pending'){?>
                <tr>
                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></td>
                    <td align="center" colspan="3"><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['pendingreview'];?>
</strong></td>
                </tr>
            <?php }else{ ?>
            <tr id="tbody<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                <td><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></td>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['click_pack'];?>
</td>
                <td align="center"><span style="color:#FF9900"><?php echo $_smarty_tpl->tpl_vars['item']->value['clicks'];?>
</span> / <span style="color:green"><?php echo $_smarty_tpl->tpl_vars['item']->value['outside_clicks'];?>
</span></td>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['clicks_today'];?>
</td>
                <td align="center">
				<span id="control<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                	<?php if ($_smarty_tpl->tpl_vars['item']->value['status']=='Paused'){?>
                    	<a href="javascript:void(0);" onclick="adcontrol('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
', 'start', '<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
');"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['start'];?>
</a>
                    <?php }elseif($_smarty_tpl->tpl_vars['item']->value['status']=='Active'){?>
                    	<a href="javascript:void(0);" onclick="adcontrol('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
', 'pause', '<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
');"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['pause'];?>
</a>
                    <?php }?></span> / 
                    
                    <a href="javascript:void(0);" onclick="showconfirm('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
');"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['delete'];?>
</a> / 
                    <a href="./?view=account&page=allocate&class=<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
&aid=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['allocatecredits'];?>
</a> /
                    <a href="./?view=account&page=ptcmaxclicks&aid=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['setmaxclick'];?>
</a>
                </td>
            </tr>
            <?php }?>
        <?php } ?>    

        <?php if ($_smarty_tpl->tpl_vars['paginator']->value->totalResults()==0){?>
        <tr>
            <td colspan="5" align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['no_records'];?>
</td>
        </tr>
        <?php }?>
</table>



<?php }elseif($_smarty_tpl->tpl_vars['page_id']->value=='ptsu_offers'){?>
<table width="100%" class="widget-tbl">
<tr class="titles">
        <td><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('title',$_smarty_tpl->tpl_vars['lang']->value['txt']['ad']);?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('credits',$_smarty_tpl->tpl_vars['lang']->value['txt']['slots']);?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('approved',$_smarty_tpl->tpl_vars['lang']->value['txt']['approved']);?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('pending',$_smarty_tpl->tpl_vars['lang']->value['txt']['pending']);?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['action'];?>
</td>
    </tr>

        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['thelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['status']=='Pending'){?>
                <tr>
                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></td>
                    <td align="center" colspan="4"><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['pendingreview'];?>
</strong></td>
                </tr>
            <?php }else{ ?>
            <tr id="tbody<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                <td><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></td>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['credits'];?>
</td>
                <td align="center"><span style="color:green"><?php echo $_smarty_tpl->tpl_vars['item']->value['approved'];?>
</span></td>
                <td align="center"><span><a href="index.php?view=account&page=pending_ptsu&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" style="color:#FF9900"><?php echo $_smarty_tpl->tpl_vars['item']->value['pending'];?>
</a></span></td>
                <td align="center">
                    <a href="./?view=account&page=allocate&class=<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
&aid=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['allocatecredits'];?>
</a>
                </td>
            </tr>
            <?php }?>
        <?php } ?>    
        <?php if ($_smarty_tpl->tpl_vars['paginator']->value->totalResults()==0){?>
        <tr>
            <td colspan="10" align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['no_records'];?>
</td>
        </tr>
        <?php }?>
</table>


<?php }elseif($_smarty_tpl->tpl_vars['page_id']->value=='banner_ads'||$_smarty_tpl->tpl_vars['page_id']->value=='featured_ads'){?>
<table width="100%" class="widget-tbl">
<tr class="titles">
        <td><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('title',$_smarty_tpl->tpl_vars['lang']->value['txt']['ad']);?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('credits',$_smarty_tpl->tpl_vars['lang']->value['txt']['credits']);?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('views',$_smarty_tpl->tpl_vars['lang']->value['txt']['views']);?>
 / <?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('clicks',$_smarty_tpl->tpl_vars['lang']->value['txt']['clicks']);?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['action'];?>
</td>
    </tr>
    
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['thelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['status']=='Pending'){?>
                <tr>
                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></td>
                    <td align="center" colspan="3"><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['pendingreview'];?>
</strong></td>
                </tr>
            <?php }else{ ?>
            <tr id="tbody<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                <td><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></td>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['credits'];?>
</td>
                <td align="center"><span style="color:#FF9900"><?php echo $_smarty_tpl->tpl_vars['item']->value['views'];?>
</span> / <span style="color:green"><?php echo $_smarty_tpl->tpl_vars['item']->value['clicks'];?>
</span></td>
                <td align="center">
				<span id="control<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">                   
                    <a href="javascript:void(0);" onclick="showconfirm('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
');"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['delete'];?>
</a> / 
                    <a href="./?view=account&page=allocate&class=<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
&aid=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['allocatecredits'];?>
</a>
                </td>
            </tr>
            <?php }?>
        <?php } ?>    

        <?php if ($_smarty_tpl->tpl_vars['paginator']->value->totalResults()==0){?>
        <tr>
            <td colspan="5" align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['no_records'];?>
</td>
        </tr>
        <?php }?>
</table>




<?php }elseif($_smarty_tpl->tpl_vars['page_id']->value=='featured_link'||$_smarty_tpl->tpl_vars['page_id']->value=='login_ads'){?>
<table width="100%" class="widget-tbl">
<tr class="titles">
        <td><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('title',$_smarty_tpl->tpl_vars['lang']->value['txt']['ad']);?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('expires',$_smarty_tpl->tpl_vars['lang']->value['txt']['expires']);?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('views',$_smarty_tpl->tpl_vars['lang']->value['txt']['views']);?>
 / <?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('clicks',$_smarty_tpl->tpl_vars['lang']->value['txt']['clicks']);?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['action'];?>
</td>
    </tr>
    
  
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['thelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['status']=='Pending'){?>
                <tr>
                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></td>
                    <td align="center" colspan="3"><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['pendingreview'];?>
</strong></td>
                </tr>
            <?php }else{ ?>
            <tr id="tbody<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                <td><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></td>
                <td align="center"><?php if ($_smarty_tpl->tpl_vars['item']->value['expires']==0){?><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['noactive'];?>
<?php }else{ ?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['expires'],"%d-%m-%Y");?>
<?php }?></td>
                <td align="center"><span style="color:#FF9900"><?php echo $_smarty_tpl->tpl_vars['item']->value['views'];?>
</span> / <span style="color:green"><?php echo $_smarty_tpl->tpl_vars['item']->value['clicks'];?>
</span></td>
                <td align="center">
				<span id="control<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">                   
                    <a href="javascript:void(0);" onclick="showconfirm('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
');"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['delete'];?>
</a> / 
                    <a href="./?view=account&page=allocate&class=<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
&aid=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['allocatecredits'];?>
</a>
                </td>
            </tr>
            <?php }?>
        <?php } ?>    
 
        <?php if ($_smarty_tpl->tpl_vars['paginator']->value->totalResults()==0){?>
        <tr>
            <td colspan="5" align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['no_records'];?>
</td>
        </tr>
        <?php }?>
</table>
<?php }?>

<div style="margin-top:10px">
    <input type="button" value="&larr; <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['prev_page'];?>
" <?php if ($_smarty_tpl->tpl_vars['paginator']->value->totalPages()==1||$_smarty_tpl->tpl_vars['paginator']->value->getPage()==1){?>disabled class="btn-disabled"<?php }else{ ?>onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['paginator']->value->prevpage();?>
';"<?php }?> />

    <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['next_page'];?>
 &rarr;" <?php if ($_smarty_tpl->tpl_vars['paginator']->value->totalPages()==0||$_smarty_tpl->tpl_vars['paginator']->value->totalPages()==$_smarty_tpl->tpl_vars['paginator']->value->getPage()){?>disabled class="btn-disabled"<?php }else{ ?>onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['paginator']->value->nextpage();?>
';"<?php }?> />
    	<?php if ($_smarty_tpl->tpl_vars['paginator']->value->totalPages()>1){?>
        <div style="float:right">
        <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['jump_page'];?>
: 
        <select name="p" style="min-width:inherit;" id="pagid" onchange="gotopage(this.value)">
           <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['paginator']->value->totalPages()+1 - (1) : 1-($_smarty_tpl->tpl_vars['paginator']->value->totalPages())+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
				<?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['paginator']->value->getPage()){?>
                	<option selected value="<?php echo $_smarty_tpl->tpl_vars['paginator']->value->gotopage($_smarty_tpl->tpl_vars['i']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
				<?php }else{ ?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['paginator']->value->gotopage($_smarty_tpl->tpl_vars['i']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
				<?php }?>
            <?php }} ?>
        </select> 
        <script type="text/javascript">
			function gotopage(pageid){
				location.href=pageid;
			}
		</script>
        </div> 
        <div class="clear"></div>
        <?php }?>
    </div>
	</div>

</div>
<!-- End Content --><?php }} ?>