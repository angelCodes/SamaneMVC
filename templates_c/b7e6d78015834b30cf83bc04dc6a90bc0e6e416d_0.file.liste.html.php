<?php
/* Smarty version 3.1.30, created on 2018-03-05 16:07:05
  from "C:\xampp\htdocs\samaneMVC\view\user\liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9d5d190a6bb1_52121075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7e6d78015834b30cf83bc04dc6a90bc0e6e416d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\samaneMVC\\view\\user\\liste.html',
      1 => 1520262420,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9d5d190a6bb1_52121075 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['id']->value)) {?>
  J'edite un user :<?php echo $_smarty_tpl->tpl_vars['id']->value;?>

<?php } else { ?>
  Je donne la liste des users
<?php }
}
}
