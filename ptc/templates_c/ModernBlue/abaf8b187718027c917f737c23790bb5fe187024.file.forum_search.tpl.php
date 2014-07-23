<?php /* Smarty version Smarty-3.1.13, created on 2014-03-19 20:39:30
         compiled from "C:\WampDeveloper\Websites\collection.me\webroot\templates\ModernBlue\forum_search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:154635329cf4ab64b59-93264147%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abaf8b187718027c917f737c23790bb5fe187024' => 
    array (
      0 => 'C:\\WampDeveloper\\Websites\\collection.me\\webroot\\templates\\ModernBlue\\forum_search.tpl',
      1 => 1394167997,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154635329cf4ab64b59-93264147',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'settings' => 0,
    'uri' => 0,
    'boardlist' => 0,
    'paginator' => 0,
    'thelist' => 0,
    'item' => 0,
    'yesterday' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5329cf4ad59287_92405331',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5329cf4ad59287_92405331')) {function content_5329cf4ad59287_92405331($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\WampDeveloper\\Websites\\collection.me\\webroot\\includes\\plugins\\smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="forum_shortlinks">
    <a href="./forum.php"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['forum'];?>
 <?php echo $_smarty_tpl->tpl_vars['settings']->value['site_name'];?>
</a> &nbsp; &rarr; &nbsp;
    <a href="<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['search'];?>
</a>
</div>

<div class="frm-title">
	<span><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['set_search_params'];?>
</span>
</div>
<div class="widget-content" style="margin-top:5px">
	<div class="forum-topiclist" style="padding:10px">
    	<form method="post">
        <input type="hidden" name="do" value="search" />
   		<table align="center">
        	<tr>
            	<td><strong>Search for:</strong></td>
                <td><strong>by user:</strong></td>
            </tr>
            <tr>
            	<td>
                	<input type="text" name="search_word" value="<?php echo mb_convert_encoding(htmlspecialchars($_REQUEST['search_word'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
                	<select name="searchtype">
                    	<option value="1">Match all words</option>
                        <option value="2" <?php if ($_REQUEST['searchtype']==2){?>selected<?php }?>>Match any words</option>
                    </select>
                </td>
                <td><input type="text" name="author" value="<?php echo mb_convert_encoding(htmlspecialchars($_REQUEST['author'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" /></td>
            </tr>
        	<tr>
            	<td><strong>Choose a board to search in:</strong></td>
            	<td><strong>Options:</strong></td>
            </tr>
            <tr>
            	<td>
                <select name="bid">
                	<option value="">All</option>
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['boardlist']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total']);
?>
                    	<option value="<?php echo $_smarty_tpl->tpl_vars['boardlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['boardlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id']==$_REQUEST['bid']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['boardlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['name'];?>
</option>
                    <?php endfor; endif; ?>
                </select>
                	</td>
            	<td><label><input type="checkbox" name="subjectonly" value="1" <?php if ($_REQUEST['subjectonly']==1){?>checked<?php }?> />  Search in topic subjects only </label></td>
            </tr>
            <tr>
            	<td colspan="2"><input type="submit" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['search'];?>
" class="frm_search_btn" /></td>
            </tr>
        </table>
        </form>
<?php if ($_smarty_tpl->tpl_vars['paginator']->value){?>
<div style="margin-bottom:10px">
    	<?php if ($_smarty_tpl->tpl_vars['paginator']->value->totalPages()>1){?>
        <div class="forum_top_bar">
        <?php echo $_smarty_tpl->tpl_vars['paginator']->value->getPagination($_smarty_tpl->tpl_vars['lang']->value['txt']['prev'],$_smarty_tpl->tpl_vars['lang']->value['txt']['next']);?>

        </div> 
        <?php }?>
        <div class="clear"></div>
</div>
<?php }?>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['thelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <div class="forum_username pointer" onclick="location.href='./forum.php?topic=<?php echo $_smarty_tpl->tpl_vars['item']->value['topic_rel'];?>
';">
       	<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>

        </div>
        <div style="padding:10px;">
                <div class="forum_post_date">
                 Message by <?php echo $_smarty_tpl->tpl_vars['item']->value['author'];?>

                <div style="float:right">
                Posted
                <?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['date'])==smarty_modifier_date_format(time())){?>
                    <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['todayat'];?>
 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['date'],"%H:%M");?>

                <?php }elseif(smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['date'])==smarty_modifier_date_format($_smarty_tpl->tpl_vars['yesterday']->value)){?>
                    <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['yesterdayat'];?>
 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['date'],"%H:%M");?>

                <?php }else{ ?>
                    on <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['date'],"%Y-%m-%d at %H:%M");?>

                <?php }?>
                </div>
                <div class="clear"></div>
                </div>
        <?php echo $_smarty_tpl->tpl_vars['item']->value['message'];?>

        </div>
        <?php } ?>
    </div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>