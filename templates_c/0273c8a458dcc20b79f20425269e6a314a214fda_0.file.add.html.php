<?php
/* Smarty version 3.1.30, created on 2018-03-17 17:28:59
  from "C:\xampp\htdocs\samaneMVC\view\User\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aad424beb4d95_49648604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0273c8a458dcc20b79f20425269e6a314a214fda' => 
    array (
      0 => 'C:\\xampp\\htdocs\\samaneMVC\\view\\User\\add.html',
      1 => 1521304134,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aad424beb4d95_49648604 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Add User</title>
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
		          <li> <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/index">Accueil</a></li>
		          <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
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
			<div class="panel">
				<div class="panel-heading">BIENVENUE A VOTRE MODELE MVC</div>
				<div class="panel-body">
					<?php if (isset($_smarty_tpl->tpl_vars['ok']->value)) {?>
						<?php if ($_smarty_tpl->tpl_vars['ok']->value != 0) {?>
							<div class="alert alert-success">Données ajoutées!</div>
						<?php } else { ?>
							<div class="alert alert-danger">Erreur!</div>
						<?php }?>
					<?php }?>
					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/add">
						<div class="form-group">
							<label class="control-label">Login du User</label>
							<input class="form-control" type="text" name="login" id="login"/>
						</div>
						<div class="form-group">
							<label class="control-label">password du User</label>
							<input class="form-control" type="password" name="password" id="password"/>
						</div>
						<div class="form-group">
							<label class="control-label">Email du User</label>
							<input class="form-control" type="mail" name="email" id="email"/>
						</div>
						<div class="form-group">
							<input class="btn btn-success" type="submit" name="valider" value="ENvoyer"/>
							<input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>
						</div>
					</form>
				</div>
			</div>
		</div>
		
		</div>
	</body>
</html><?php }
}
