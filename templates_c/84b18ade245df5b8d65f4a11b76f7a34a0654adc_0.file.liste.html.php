<?php
/* Smarty version 3.1.30, created on 2018-03-17 17:25:11
  from "C:\xampp\htdocs\samaneMVC\view\User\liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aad4167046e59_14580613',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84b18ade245df5b8d65f4a11b76f7a34a0654adc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\samaneMVC\\view\\User\\liste.html',
      1 => 1521303860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aad4167046e59_14580613 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Liste User</title>
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
		          <li ><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/index">Accueil</a></li>
		          <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/add">Ajouter Utilisateur</a></li>
		          <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
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
					<?php if (isset($_smarty_tpl->tpl_vars['Users']->value)) {?>
						<?php if ($_smarty_tpl->tpl_vars['Users']->value != null) {?>
							<table class="table table-bordered table-stripped">
								<tr>
									<th>Identifiant</th>
									<th>Login</th>
									<th>Password</th>
									<th>Email</th>
									<th>Action</th>
									<th>Action</th>
								</tr>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Users']->value, 'User');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['User']->value) {
?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['User']->value['ID'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['User']->value['login'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['User']->value['password'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['User']->value['email'];?>
</td>
										<td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/delete/<?php echo $_smarty_tpl->tpl_vars['User']->value['ID'];?>
">Supprimer</a></td>
										<td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/edit/<?php echo $_smarty_tpl->tpl_vars['User']->value['ID'];?>
">Editer</a></td>
									</tr>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							</table>
						<?php } else { ?>
							Liste vide
						<?php }?>
					<?php }?>
				</div>
				<a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/add">Ajout d'un User</a>
			</div>
		</div>
	</div>
	</body>
</html>

	<?php }
}
