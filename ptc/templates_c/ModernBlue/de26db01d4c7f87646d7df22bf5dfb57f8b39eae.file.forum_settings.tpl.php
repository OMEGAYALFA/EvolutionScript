<?php /* Smarty version Smarty-3.1.13, created on 2014-03-16 09:09:28
         compiled from "C:\WampDeveloper\Websites\collection.me\webroot\templates\ModernBlue\forum_settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1916353256a480dbe13-50576711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de26db01d4c7f87646d7df22bf5dfb57f8b39eae' => 
    array (
      0 => 'C:\\WampDeveloper\\Websites\\collection.me\\webroot\\templates\\ModernBlue\\forum_settings.tpl',
      1 => 1394167997,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1916353256a480dbe13-50576711',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'lang' => 0,
    'user_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53256a481b3730_90172678',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53256a481b3730_90172678')) {function content_53256a481b3730_90172678($_smarty_tpl) {?><!-- Content -->
<?php if ($_smarty_tpl->tpl_vars['settings']->value['forum_signature']=='yes'){?>
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
<?php }?>
<div class="widget-main-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['forum_settings'];?>
</div>
<div class="widget-content">

<form id="settingsform" onsubmit="return submitform(this.id);">
<input type="hidden" name="a" value="submit" />
                <table cellpadding="4" width="100%" class="widget-tbl">
                <tr>
                    <td align="right" width="300"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['forum_avatar'];?>
:</td>
                    <td><input type="text" name="forum_avatar" id="forum_avatar" value="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['forum_avatar'];?>
" /></td>
                </tr>
                <tr>
                    <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['show_statistics'];?>
:</td>
                    <td>
                            <label><input type="radio" name="forum_stats" value="yes" <?php if ($_smarty_tpl->tpl_vars['user_info']->value['forum_stats']=='yes'){?>checked<?php }?> /> <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['yes'];?>
</label>
                            <label><input type="radio" name="forum_stats" value="no" <?php if ($_smarty_tpl->tpl_vars['user_info']->value['forum_stats']=='no'){?>checked<?php }?> /> <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['no'];?>
</label>
                    </td>            
                </tr>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['forum_signature']=='yes'){?>
                
                <tr>
                    <td colspan="2" class="widget-title">
<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['signature'];?>
:
                    </td>
                </tr>
                    <td colspan="2">
                    
        <div id="bbcodearea">
        </div>
         <textarea style="width:95%; height:200px" id="textarea" name="forum_signature"><?php echo $_smarty_tpl->tpl_vars['user_info']->value['forum_signature'];?>
</textarea>
                    </td>            
                </tr>
                
                <?php }?>
                <tr>
                    <td></td>
                    <td>
                    <input type="submit" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['send'];?>
" class="orange" />
                    </td>
                </tr>
                </table>  
</form>

</div>
<!-- End Content --><?php }} ?>