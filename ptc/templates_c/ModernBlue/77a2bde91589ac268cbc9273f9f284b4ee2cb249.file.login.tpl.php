<?php /* Smarty version Smarty-3.1.13, created on 2014-07-11 05:07:15
         compiled from "/home/arshadir/public_html/ptc/templates/ModernBlue/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22786298953bf31bb722234-52459099%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77a2bde91589ac268cbc9273f9f284b4ee2cb249' => 
    array (
      0 => '/home/arshadir/public_html/ptc/templates/ModernBlue/login.tpl',
      1 => 1405031196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22786298953bf31bb722234-52459099',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'settings' => 0,
    'captcha_login' => 0,
    'captcha' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53bf31bb7b6e31_26496931',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bf31bb7b6e31_26496931')) {function content_53bf31bb7b6e31_26496931($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="PageTitle"><h1><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['loginacc'];?>
</h1></div>
<div class="site_content">
<div style="width:600px; margin:0 auto;">
<div class="widget-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['loginacc'];?>
</div>
<form id="loginform" method="post" onsubmit="return submitform(this.id);">
<input type="hidden" name="token" value="<?php echo getToken('login');?>
" />
<input type="hidden" name="a" value="submit" />
	<table width="100%" class="widget-tbl">
    	<tr>
        	<td align="right" width="200"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['username'];?>
:</td>
            <td><input dir="ltr" type="text" name="username" size="40" /></td>
		</tr>
        <tr>
            <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['password'];?>
:</td>
            <td><input dir="ltr" type="password" name="password" size="40" /></td>
        </tr>
        <tr>
            <td colspan="2">
            	<div style="width:360px; margin:0 auto;">
            
            <ul id="keyboard">
                <li class="symbol"><span class="off">`</span><span class="on">~</span></li>
                <li class="symbol"><span class="off">1</span><span class="on">!</span></li>
                <li class="symbol"><span class="off">2</span><span class="on">@</span></li>
                <li class="symbol"><span class="off">3</span><span class="on">#</span></li>
                <li class="symbol"><span class="off">4</span><span class="on">$</span></li>
                <li class="symbol"><span class="off">5</span><span class="on">%</span></li>
                <li class="symbol"><span class="off">6</span><span class="on">^</span></li>
                <li class="symbol"><span class="off">7</span><span class="on">&amp;</span></li>
                <li class="symbol"><span class="off">8</span><span class="on">*</span></li>
                <li class="symbol"><span class="off">9</span><span class="on">(</span></li>
                <li class="symbol"><span class="off">0</span><span class="on">)</span></li>
                <li class="symbol"><span class="off">-</span><span class="on">_</span></li>
                <li class="symbol"><span class="off">=</span><span class="on">+</span></li>
                <li class="delete lastitem">delete</li>
                <li class="tab">tab</li>
                <li class="letter">q</li>
                <li class="letter">w</li>
                <li class="letter">e</li>
                <li class="letter">r</li>
                <li class="letter">t</li>
                <li class="letter">y</li>
                <li class="letter">u</li>
                <li class="letter">i</li>
                <li class="letter">o</li>
                <li class="letter">p</li>
                <li class="symbol"><span class="off">[</span><span class="on">{</span></li>
                <li class="symbol"><span class="off">]</span><span class="on">}</span></li>
                <li class="symbol lastitem"><span class="off">\</span><span class="on">|</span></li>
                <li class="capslock">caps lock</li>
                <li class="letter">a</li>
                <li class="letter">s</li>
                <li class="letter">d</li>
                <li class="letter">f</li>
                <li class="letter">g</li>
                <li class="letter">h</li>
                <li class="letter">j</li>
                <li class="letter">k</li>
                <li class="letter">l</li>
                <li class="symbol"><span class="off">;</span><span class="on">:</span></li>
                <li class="symbol"><span class="off">'</span><span class="on">&quot;</span></li>
                <li class="return lastitem">return</li>
                <li class="left-shift">shift</li>
                <li class="letter">z</li>
                <li class="letter">x</li>
                <li class="letter">c</li>
                <li class="letter">v</li>
                <li class="letter">b</li>
                <li class="letter">n</li>
                <li class="letter">m</li>
                <li class="symbol"><span class="off">,</span><span class="on">&lt;</span></li>
                <li class="symbol"><span class="off">.</span><span class="on">&gt;</span></li>
                <li class="symbol"><span class="off">/</span><span class="on">?</span></li>
                <li class="right-shift lastitem">shift</li>
                <li class="space lastitem">&nbsp;</li>
              </ul>
                            
              </div>
              </td>
        </tr>
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['captcha_login']=='yes'){?> 
        	<?php if ($_smarty_tpl->tpl_vars['settings']->value['captcha_type']==1){?>
            <tr>
                <td></td>
                <td><?php echo $_smarty_tpl->tpl_vars['captcha_login']->value;?>
</td>
            </tr>
            <tr>
                <td></td>
                <td><input style="text-align:center" type="text" name="captcha" id="captcha_login" size="40" /></td>
            </tr>
        	<?php }else{ ?>
            <tr>
            	<td colspan="2" align="center"><?php echo $_smarty_tpl->tpl_vars['captcha']->value;?>

                </td>
            </tr>            
            <?php }?>
        <?php }?>
        <tr>
        	<td></td>
            <td><input type="submit" name="login" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['login'];?>
" /></td>
        </tr>
        <tr>
        	<td colspan="2" align="center">
            <a href="./?view=forgot"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['forgotpassword'];?>
</a>
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['register_activation']=='yes'){?>
            &nbsp;&nbsp;&bull;&nbsp;&nbsp; <a href="./?view=forgot&page=resend_activation"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['resendactivation'];?>
</a>
            <?php }?>
            </td>
        </tr>
    </table>

</form>
 
</div>
       
<script type="text/javascript">
$(function(){
loginkeyboard();		
});</script>       


</div>
<!-- End Content -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>