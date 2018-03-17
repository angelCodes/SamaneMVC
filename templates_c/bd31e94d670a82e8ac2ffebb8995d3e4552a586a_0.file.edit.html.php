<?php
/* Smarty version 3.1.30, created on 2018-03-17 16:37:26
  from "C:\xampp\htdocs\samaneMVC\view\User\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aad36369bf412_16813584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd31e94d670a82e8ac2ffebb8995d3e4552a586a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\samaneMVC\\view\\User\\edit.html',
      1 => 1521301033,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aad36369bf412_16813584 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>page d'accueil</title>
		<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
	</head>
	<body>
		<div class="container">
		  <nav class="navbar navbar-default">
		    <div class="container-fluid">
		      <div class="navbar-header">
		        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
		          <span class="sr-only">Toggle navigation</span>
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		        </button>
		      </div>
		      
		      <div class="brand-centered">
		      <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Accueil/index"><img style="margin-right: 10px; padding: 0;" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/logo.jpg" alt="Samane">Samane MVC
		      </a>
		      </div>
		      
		      <div id="menu" class="navbar-collapse collapse">
		        <ul class="nav navbar-nav navbar-left">
		          <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Accueil/index">Accueil</a></li>
		          <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/add">Ajouter Utilisateur</a></li>
		          <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/liste">Liste Utilisateur</a></li>
		        </ul>
		      </div>
		      <!--/.nav-collapse -->
		    </div>
		    <!--/.container-fluid -->
		  </nav>
		<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:150px;">
			<div class="panel panel-info">
				<div class="panel-heading">BIENVENUE A VOTRE MODELE MVC</div>
				<div class="panel-body">
					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/update">
						<div class="form-group">
							<label class="control-label">ID du User</label>
							<input class="form-control" readonly type="text" name="id" id="id" value="<?php if (isset($_smarty_tpl->tpl_vars['User']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['User']->value['ID'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Login du User</label>
							<input class="form-control" type="text" name="login" id="login" value="<?php if (isset($_smarty_tpl->tpl_vars['User']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['User']->value['login'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">password du User</label>
							<input class="form-control" type="password" name="password" id="password" value="<?php if (isset($_smarty_tpl->tpl_vars['User']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['User']->value['password'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Email du User</label>
							<input class="form-control" type="email" name="email" id="email" value="<?php if (isset($_smarty_tpl->tpl_vars['User']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['User']->value['email'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<input class="btn btn-success" type="submit" name="modifier" value="Modifier"/>
							<a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/liste">Retour</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html><?php }
}
