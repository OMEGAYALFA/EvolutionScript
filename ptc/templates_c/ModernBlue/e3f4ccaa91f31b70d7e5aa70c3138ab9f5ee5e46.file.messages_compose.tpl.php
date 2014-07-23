<?php /* Smarty version Smarty-3.1.13, created on 2014-07-13 01:18:02
         compiled from "/home/arshadir/public_html/ptc/templates/ModernBlue/messages_compose.tpl" */ ?>
<?php /*%%SmartyHeaderCode:148007614053c19f02cff0b2-24912870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3f4ccaa91f31b70d7e5aa70c3138ab9f5ee5e46' => 
    array (
      0 => '/home/arshadir/public_html/ptc/templates/ModernBlue/messages_compose.tpl',
      1 => 1405031196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148007614053c19f02cff0b2-24912870',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'usrid' => 0,
    'user_to' => 0,
    'subject' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53c19f02d85787_44367325',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c19f02d85787_44367325')) {function content_53c19f02d85787_44367325($_smarty_tpl) {?><!-- Content -->
<link href="images/forum/bbcode/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="images/forum/bbcode/set.js"></script>
<script type="text/javascript" src="images/forum/bbcode/jquery.markitup.js"></script>

<script>
$(function(){
	$("#textarea").markItUp(mySettings);
    $('#emoticons a').click(function() {
        emoticon = $(this).attr("title");
        $.markItUp( { replaceWith:emoticon } );
    });

});


</script>


<form method="post" onsubmit="return submitform(this.id)" id="massage_form">
<table width="100%" class="widget-tbl">
	<tr>
    	<td valign="top" width="220" rowspan="4">
        <div id="bbcodearea">
        </div>
        </td>

        <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['to'];?>
:</td>
        <td><?php if ($_smarty_tpl->tpl_vars['usrid']->value!=0){?>
            <input type="text" disabled="disabled" value="<?php echo $_smarty_tpl->tpl_vars['user_to']->value;?>
" />
            <input type="hidden" name="user_to_id" value="<?php echo $_smarty_tpl->tpl_vars['usrid']->value;?>
" />
            <?php }else{ ?>
            <input type="text" name="user_to" />
            <?php }?>
        </td>
   </tr>
   <tr>
		<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['subject'];?>
:</td>
        <td><input type="text" name="subject" value="<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
" /></td>
	</tr>
    <tr>
    	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['message'];?>
:</td>
        <td><textarea name="message" style="width:95%; height:100px" id="textarea"><?php if (!empty($_smarty_tpl->tpl_vars['message']->value)){?>[quote source=<?php echo $_smarty_tpl->tpl_vars['user_to']->value;?>
]<?php echo $_smarty_tpl->tpl_vars['message']->value;?>
[/quote]<?php }?></textarea></td>
	</tr>
    <tr>
        <td colspan="2" align="center">
            	<input type="hidden" name="do" value="send" />
            	<input type="submit" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['send'];?>
" />
                <input type="button" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['preview'];?>
" onclick="forum_preview();" />

        </td>
    </tr>
</table>
</form>



<!-- End Content --><?php }} ?>