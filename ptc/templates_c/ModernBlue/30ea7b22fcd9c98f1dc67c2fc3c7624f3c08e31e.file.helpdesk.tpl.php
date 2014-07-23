<?php /* Smarty version Smarty-3.1.13, created on 2014-07-16 01:36:19
         compiled from "/home/arshadir/public_html/ptc/templates/ModernBlue/helpdesk.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162090255153c1b9a9319326-28868147%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30ea7b22fcd9c98f1dc67c2fc3c7624f3c08e31e' => 
    array (
      0 => '/home/arshadir/public_html/ptc/templates/ModernBlue/helpdesk.tpl',
      1 => 1405218234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162090255153c1b9a9319326-28868147',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53c1b9a9449b29_30751739',
  'variables' => 
  array (
    'settings' => 0,
    'lang' => 0,
    'helpdesk_enable' => 0,
    'logged' => 0,
    'daparment' => 0,
    'captcha' => 0,
    'thelist' => 0,
    'item' => 0,
    'paginator' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c1b9a9449b29_30751739')) {function content_53c1b9a9449b29_30751739($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/arshadir/public_html/ptc/includes/plugins/smarty/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- Content -->
<div class="PageTitle"><h1><?php echo $_smarty_tpl->tpl_vars['settings']->value['site_name'];?>
 :: <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['support'];?>
</h1></div>
<div class="site_content">
<?php if ($_smarty_tpl->tpl_vars['helpdesk_enable']->value!='yes'){?>
<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['supportcenterdisabled'];?>

<?php }else{ ?>

<?php if ($_GET['t']=='new'){?>
<form method="post" onsubmit="return submitform(this.id);" id="helpdeskform">
<input type="hidden" name="action" value="open" />
<table width="100%" class="widget-tbl">
	<?php if ($_smarty_tpl->tpl_vars['logged']->value!='yes'){?>
	<tr>
    	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['fullname'];?>
:</td>
        <td><input type="text" name="name" id="hdname" /></td>
	</tr>
	<tr>
    	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['email'];?>
:</td>
        <td><input type="text" name="email" id="hdemail" /></td>
	</tr>
    <?php }?>
    <tr>
    	<td width="150" align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['department'];?>
:</td>
        <td>
			<select name="department" id="departmentshd">
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['d'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['d']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['name'] = 'd';
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['daparment']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total']);
?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['daparment']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['id'];?>
" class="whoo"><?php echo $_smarty_tpl->tpl_vars['daparment']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['name'];?>
</option>
<?php endfor; endif; ?> 
			</select>
        </td>
    </tr>
	<tr>
    	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['subject'];?>
:</td>
        <td><input type="text" name="subject" id="hdsubject" />		</td>
	</tr>
    <tr>
    	<td colspan="2" align="center">
        <textarea name="message" id="hdmessage" style="width:95%; height:200px"></textarea>
        </td>
    </tr>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['captcha_contact']=='yes'&&$_smarty_tpl->tpl_vars['settings']->value['captcha_type']!=0){?>
    <tr>
    	<td align="right" valign="top"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['imgverification'];?>
:</td>
        <td><?php echo $_smarty_tpl->tpl_vars['captcha']->value;?>
</td>
    </tr>
    <?php }?>
    <tr>
    	<td></td>
        <td><input type="submit" name="send" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['send'];?>
"> <input type="button" name="btn" value="بازگشت" onclick="history.back();" /></td>
    </tr>
</table>
</form>
          
<?php }else{ ?>


<?php if ($_smarty_tpl->tpl_vars['logged']->value!='yes'){?>

<p>با سلام خدمت شما . در صورتی که نیاز به ارسال پیام و یا پشتیبانی دارید میتوانید از باکس سمت راست استفاده نمایید و اگر قبلا تیکتی ارسال کرده اید ، برای پیگیری آن از باکس سمت چپ استفاده نمایید . تشکر</p>

<form method="post" id="checkticketsfrm" onsubmit="return submitform(this.id);">
<input type="hidden" name="do" value="checkticket" />
<table>
	<tr>
    	<td width="50%" valign="top">
        	<div class="widget-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['opennewticket'];?>
</div>
            <div class="widget-content" style="height:130px">
                <div class="open-ticket-box">
                    <div><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['opennewticketdescr'];?>
</div>
                    <div><input type="button" onclick="location.href='./?view=contact&t=new';" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['opennewticket'];?>
" />
                </div>
            </div>
        </td>
        <td valign="top">
        	<div class="widget-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['checkticketstatus'];?>
</div>
            <div class="widget-content" style="height:130px">
        	<div class="view-ticket-box">
                <div style="padding-bottom:10px;">برای پیگری تیکت ارسالی خود کافیست ID آن را وارد نموده و دکمه زیر استفاده نمایید </div>
                <div>
                                <table>
                	<tr>
                    	<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['ticketid'];?>
:</td>
                        <td><input type="text" name="ticketid" id="ticketid" class="input_txt"></td>
                    </tr>
                    <tr>
                    	<td></td>
                    	<td>
                        	<input type="submit" name="send" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['viewticket'];?>
">
                        </td>
                    </tr>
                </table>
                </div>
            </div>
            </div>
        </td>
    </tr>
</table>
</form>
<?php }else{ ?>
<script type="text/javascript">
$(function(){
	$("#tablelist tr:even").addClass("tr1");
	$("#tablelist tr:odd").addClass("tr2");
});
</script>
<div class="widget-content">
	<table width="100%" class="tbl-content">
    	<tr>
        	<td width="20"><span class="system-icon application_form_add"></span></td>
            <td width="200"><a href="/?view=contact&t=new"><strong>ارسال تیکت پشتیبانی &raquo;</strong></a></td>
            <td>تیکت های پشتیبانی بعد از بررسی در اسرع وقت پاسخ داده خواهند شد</td>
        </tr>
        <tr>
        	<td><span class="system-icon flag_orange"></span></td>
            <td><a href="/?view=contact&sort=2">مشاهده تیکت های فعال شما</a></td>
            <td>تیکت هایی که تازه پاسخ داده شدند یا پاسخ داده اید.</td>
        </tr>
        <tr>
        	<td><span class="system-icon flag_green"></span></td>
            <td><a href="/?view=contact&sort=1">نمایش تیکت های باز</a></td>
            <td>تیکت های باز به دلیل عدم رفع مشکل شما.</td>
        </tr>
        <tr>
        	<td><span class="system-icon flag_red"></span></td>
            <td><a href="/?view=contact&sort=3">نمایش تیکت های بسته</a></td>
            <td>تیکت های بسته به دلیل بر طرف شدن مشکل شما.</td>
        </tr>
    </table>
</div>
<div class="widget-title">تیکت های من</div>
<table width="100%" class="widget-tbl">
	<tr class="titles">
        <td align="center">ID تیکت</td>
        <td align="center">موضوع</td>
        <td align="center">آخرین بروزرسانی</td>
        <td align="center">وضعیت</td>
    </tr>
    <tbody id="tablelist">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['thelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <tr>
                <td align="center"><a href="/?view=contact&view_ticket=<?php echo $_smarty_tpl->tpl_vars['item']->value['ticket'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['ticket'];?>
</a></td>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['subject'];?>
</td>
                <td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['last_update'],"%e %B %Y %r");?>
</td>
                <td align="center">
                <?php if ($_smarty_tpl->tpl_vars['item']->value['status']==1){?>
                	<span style="color:green">باز</span>
               <?php }elseif($_smarty_tpl->tpl_vars['item']->value['status']==2){?>
                	<span style="color:#000000">پاسخ داده شده</span>
               <?php }elseif($_smarty_tpl->tpl_vars['item']->value['status']==3){?>
                	<span style="color:#ff6600">در انتظار پاسخ</span>
               <?php }elseif($_smarty_tpl->tpl_vars['item']->value['status']==4){?>
                	<span style="color:#888888">بسته</span>
               	<?php }?>
                </td>
            </tr>
        <?php } ?>    
    </tbody>
        <?php if ($_smarty_tpl->tpl_vars['paginator']->value->totalResults()==0){?>
        <tr>
            <td colspan="10" align="center">موردی یافت نشد</td>
        </tr>
        <?php }?>

</table>

<div style="margin-top:10px">
    <input type="button" value="&rarr; <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['prev_page'];?>
" <?php if ($_smarty_tpl->tpl_vars['paginator']->value->totalPages()==1||$_smarty_tpl->tpl_vars['paginator']->value->getPage()==1){?>disabled class="btn-disabled"<?php }else{ ?>onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['paginator']->value->prevpage();?>
';"<?php }?> />

    <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['next_page'];?>
 &larr;" <?php if ($_smarty_tpl->tpl_vars['paginator']->value->totalPages()==0||$_smarty_tpl->tpl_vars['paginator']->value->totalPages()==$_smarty_tpl->tpl_vars['paginator']->value->getPage()){?>disabled class="btn-disabled"<?php }else{ ?>onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['paginator']->value->nextpage();?>
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
<?php }?>

<?php }?>

<?php }?>

</div>
<!-- End Content -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>