<?php
/* Smarty version 3.1.30, created on 2018-03-17 17:30:21
  from "C:\xampp\htdocs\samaneMVC\view\User\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aad429db51165_20351562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '152ba2e6ad681b7f35b66a9331cef74850518ab4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\samaneMVC\\view\\User\\login.html',
      1 => 1521304182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aad429db51165_20351562 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Connexion</title>
		<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/login.css"/>
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
		          <li class="active"> <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/index">Accueil</a></li>
		          <li ><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/add">Ajouter Utilisateur</a></li>
		          <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/liste">Liste Utilisateur</a></li>
		        </ul>
		      </div>
		      <!--/.nav-collapse -->
		    </div>
		    <!--/.container-fluid -->
		  </nav>
		
	<div class="loginbox">
		<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/avatar.png" class="avatar"></img>
		<h1>Connexion</h1>
		<form action="" method="post" accept-charset="utf-8">
			<p>Login</p>
			<input type="text" name="login" value="" placeholder="Enter Login">
			<p>Password</p>
			<input type="password" name="password" value="" placeholder="Enter Password">
			<input type="submit" name="login" value="Se Connecter">
			<a href="#" title="">Mot de Passe Oublié?</a>
			<a href="#" title="">Envie d'un compte?</a>
		</form>
	</div>
</div>
</body>
</html><?php }
}
