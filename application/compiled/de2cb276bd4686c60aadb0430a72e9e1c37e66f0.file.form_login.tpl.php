<?php /* Smarty version Smarty-3.1.7, created on 2013-02-15 20:44:40
         compiled from "application/views\form_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18936511e9028ef6862-77839224%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de2cb276bd4686c60aadb0430a72e9e1c37e66f0' => 
    array (
      0 => 'application/views\\form_login.tpl',
      1 => 1360946362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18936511e9028ef6862-77839224',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_511e90290258b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511e90290258b')) {function content_511e90290258b($_smarty_tpl) {?>
    <div id="box">
      <div class="block" id="block-login">
        <h2>Please login</h2>
        <div class="content login">
		<?php if (isset($_smarty_tpl->tpl_vars['error']->value)){?>
          <div class="flash">
            <div class="message error">
              <p>Incorrect username or password!</p>
            </div>
          </div>
		<?php }?>
          <form action="login/validate" class="form login" method="post" enctype="multipart/form-data">
            <div class="group wat-cf">
              <div class="left">
                <label class="label right">Login</label>
              </div>
              <div class="right">
                <input type="text" name="user" class="text_field" />
              </div>
            </div>
            <div class="group wat-cf">
              <div class="left">
                <label class="label right">Password</label>
              </div>
              <div class="right">
                <input type="password" name="pass" class="text_field" />
              </div>
            </div>
            <div class="group navform wat-cf">
              <div class="right">
                <button class="button" type="submit">
                  <img src="iscaffold/backend_skins/images/icons/key.png" alt="Save" /> Login
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
      
      <script type="text/javascript" language="JavaScript">
               document.forms[0].elements[0].focus();
     </script>
<?php }} ?>