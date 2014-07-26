<?php /* Smarty version Smarty-3.1.16, created on 2014-07-25 16:52:13
         compiled from ".\APP\view\Default\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:994953d21291a1e081-30384404%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41e796a3729df37510c21613be040028da02a076' => 
    array (
      0 => '.\\APP\\view\\Default\\index.tpl',
      1 => 1406278332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '994953d21291a1e081-30384404',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53d21291a60713_61082429',
  'variables' => 
  array (
    'data' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d21291a60713_61082429')) {function content_53d21291a60713_61082429($_smarty_tpl) {?>
<!doctype html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>GitCafe</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">
  <style>
    body, html, #main {
      text-align: center;
    }
    #info {
      font: 15px/1.5 'Times', 'Times New Roman';
      font-style: italic;
      display: block;
      padding-top: 38%;
    }
  </style>
</head>
<body>
  <div role="main" id="main">
   <span id="info">
      <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <?php echo $_smarty_tpl->tpl_vars['item']->value['account'];?>

      <?php } ?>
   </span>
  </div>


</body>
</html>
<?php }} ?>
