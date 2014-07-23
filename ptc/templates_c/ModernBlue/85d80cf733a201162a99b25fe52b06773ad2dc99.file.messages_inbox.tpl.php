<?php /* Smarty version Smarty-3.1.13, created on 2014-03-15 20:26:00
         compiled from "C:\WampDeveloper\Websites\collection.me\webroot\templates\ModernBlue\messages_inbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43185324b758870915-67281182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85d80cf733a201162a99b25fe52b06773ad2dc99' => 
    array (
      0 => 'C:\\WampDeveloper\\Websites\\collection.me\\webroot\\templates\\ModernBlue\\messages_inbox.tpl',
      1 => 1394167999,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43185324b758870915-67281182',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'user_info' => 0,
    'paginator' => 0,
    'thelist' => 0,
    'item' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5324b758982c82_75976569',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5324b758982c82_75976569')) {function content_5324b758982c82_75976569($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\WampDeveloper\\Websites\\collection.me\\webroot\\includes\\plugins\\smarty\\plugins\\modifier.date_format.php';
?><div class="widget-main-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['message_center'];?>
</div>
        <?php if ($_smarty_tpl->tpl_vars['user_info']->value['personal_msg']!='yes'){?>
        	<div align="center" class="widget-content"><h3><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['msgcenterdisabled'];?>
. <a href="index.php?view=account&page=settings"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['click2activate'];?>
</a></h3></div>
        
        <?php }else{ ?>

<div id="tabs">
	<ul>
    	<li><a href="#tab-1"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['inbox'];?>
</a></li>
        <li><a href="#tab-2"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['compose'];?>
</a></li>
    </ul>
    <div id="tab-1">
        <form method="post" onsubmit="return submitform(this.id);" id="msglist">
        <table width="100%" class="widget-tbl">
        <tr class="titles">
                <td><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('user_read','&nbsp;');?>
</td>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('date',$_smarty_tpl->tpl_vars['lang']->value['txt']['date']);?>
</td>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('subject',$_smarty_tpl->tpl_vars['lang']->value['txt']['subject']);?>
</td>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['paginator']->value->linkorder('user_from',$_smarty_tpl->tpl_vars['lang']->value['txt']['from']);?>
</td>
                <td align="center"><input type="checkbox" id="checkall" /></td>
            </tr>
            

                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['thelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    <tr <?php if ($_smarty_tpl->tpl_vars['item']->value['user_read']=='no'){?>style="font-weight:bold;"<?php }?>>
                        <td align="center"><img src="images/memberbar/email<?php if ($_smarty_tpl->tpl_vars['item']->value['user_read']!='no'){?>_open<?php }?>.png" /></td>
                       <td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['date'],"%b %e, %Y %r");?>
</td>
                        <td align="center"><a href="./?view=account&page=messages&read=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['subject'];?>
</a></td>
                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['user_from'];?>
</td>
                        <td align="center"><input type="checkbox" name="msg[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="checkall" /></td>
                    </tr>
                <?php } ?>    
 
                <?php if ($_smarty_tpl->tpl_vars['paginator']->value->totalResults()==0){?>
                <tr>
                    <td colspan="10" align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['nohavemessages'];?>
</td>
                </tr>
                <?php }?>
        </table>
        
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
            
        
        <?php if ($_smarty_tpl->tpl_vars['paginator']->value->totalResults()!=0){?>
                            <table><tr><td><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['selectedmessages'];?>
: </td><td>
                            <input type="hidden" name="do" value="action" />
                            <select name="action" id="msgaction">
                                <option value="1"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['delete'];?>
</option>
                                <option value="2"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['setasunread'];?>
</option>
                                <option value="3"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['setasread'];?>
</option>
                            </select></td><td>
                            <input type="submit" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['go'];?>
" />
                            </td>
                            </tr>
                            </table>
        <?php }?>
        </form>
    </div>
    <div id="tab-2">
    	<?php echo $_smarty_tpl->getSubTemplate ("messages_compose.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
</div>
		<?php }?><?php }} ?>