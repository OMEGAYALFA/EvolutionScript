<?php /* Smarty version Smarty-3.1.13, created on 2014-03-19 20:48:33
         compiled from "C:\WampDeveloper\Websites\collection.me\webroot\templates\ModernBlue\banners.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180475329d169ede850-81320707%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1303a83b4f0bae5a566711546bcbe41788e0154b' => 
    array (
      0 => 'C:\\WampDeveloper\\Websites\\collection.me\\webroot\\templates\\ModernBlue\\banners.tpl',
      1 => 1394167986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180475329d169ede850-81320707',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'lang' => 0,
    'user_info' => 0,
    'total_banners' => 0,
    'foo' => 0,
    'banner' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5329d16a068203_33351543',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5329d16a068203_33351543')) {function content_5329d16a068203_33351543($_smarty_tpl) {?><div class="widget-main-title"><?php echo $_smarty_tpl->tpl_vars['settings']->value['site_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['banners'];?>
</div>
<div class="info_box"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['yourreflink'];?>
: <?php echo $_smarty_tpl->tpl_vars['settings']->value['site_url'];?>
?ref=<?php echo $_smarty_tpl->tpl_vars['user_info']->value['username'];?>
</div>
<?php if ($_smarty_tpl->tpl_vars['total_banners']->value>=1){?>
<div id="tabs">
	<ul>
    <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int)ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['total_banners']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['total_banners']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0){
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++){
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
    <li><a href="#tab-<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
">Banner <?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a></li>
    <?php }} ?>
	</ul>
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['banner']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
    <div id="tab-<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['n']['index']+1;?>
">
    	<div class="widget-content" align="center"><img src="<?php echo $_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['url'];?>
" /></div>
        <div><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['bannerurl'];?>
</strong></div>
        <div class="widget-content">
        <?php echo $_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['url'];?>

        </div>
        
        <div><strong>HTML</strong></div>
        <div class="widget-content">&lt;a target=&quot;_blank&quot;   href=&quot;<?php echo $_smarty_tpl->tpl_vars['settings']->value['site_url'];?>
?ref=<?php echo $_smarty_tpl->tpl_vars['user_info']->value['username'];?>
&quot;&gt;&lt;img   src=&quot;<?php echo $_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['url'];?>
&quot;   border=&quot;0&quot; width=&quot;<?php echo $_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['width'];?>
&quot; height=&quot;<?php echo $_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['height'];?>
&quot; /&gt;&lt;/a&gt;</div>
        
        <div><strong>BBCode</strong></div>
        <div class="widget-content">[url=<?php echo $_smarty_tpl->tpl_vars['settings']->value['site_url'];?>
?ref=<?php echo $_smarty_tpl->tpl_vars['user_info']->value['username'];?>
][img]<?php echo $_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['url'];?>
[/img][/url]</div>
    </div>
    <?php endfor; endif; ?>
</div>
<?php }?>

<!-- End Content --><?php }} ?>