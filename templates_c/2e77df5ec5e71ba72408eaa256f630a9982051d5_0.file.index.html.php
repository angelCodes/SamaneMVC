<?php
/* Smarty version 3.1.30, created on 2018-03-17 17:05:06
  from "C:\xampp\htdocs\samaneMVC\view\accueil\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aad3cb20d2ba3_26806857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e77df5ec5e71ba72408eaa256f630a9982051d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\samaneMVC\\view\\accueil\\index.html',
      1 => 1521302578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aad3cb20d2ba3_26806857 (Smarty_Internal_Template $_smarty_tpl) {
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
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/ir-black.css"/>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/jquery-2.1.1.min.js"><?php echo '</script'; ?>
>
  		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/highlight.pack.js"><?php echo '</script'; ?>
>
		<!-- Integration de javascript dans le moteur de rendu de vue Smarty -->
		
			<?php echo '<script'; ?>
 language=javascript>
			 function load_design() {
			   document.getElementById("design_js").style.color = "#40007d";
			 }

			<?php echo '</script'; ?>
>
		
		

			
 		    <?php echo '<script'; ?>
 type="text/javascript">
             hljs.initHighlightingOnLoad();
 		    <?php echo '</script'; ?>
>
		
	</head>
	<body onload="load_design()">
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
User/index">Accueil</a></li>
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
		</div>


		<blockquote>
			Je vous ai préparé un CRUD qui marche, il suffit tout simplement d'importer
			la base de données qui se trouve dans le dossier view puis user (view/user);
			cette base s'appelle samane_user.sql et elle comporte une seule table nommée user.
			ça vous sera très utile j'espère.
			<span>Ngor Seck</span>
		</blockquote>
		
		<div class="container">
			
		
			<div class="col-md-12 col-xs-12" style="margin-top:10px;">
				<div class="panel">
					<div class="panel-heading">BIENVENUE A VOTRE MODELE MVC</div>
					<div class="panel-body">
						<h3 class="text-primary">Et surtout noubliez pas de configurer votre base de données : ou?
							Y'a pas plus simple. <br> Rendez vous dans le fichier database.php qui se trouve dans le dossier config!</h3>
						<pre class="col-md-5 col-md-offset-1 ">
<code class="php">
// Par défaut on a:
function connexion_params(){
	return array(
		    'host' => '127.0.0.1',
		    'user' => 'root',
		    'password' => '',
		    'database_name' => 'test',
		    'etat' => 'off'
	    );
}
</code>
						</pre>
					    <pre class="col-md-5 ">
<code class="php">
//Changer à: 
function connexion_params(){
	return array(
            'host' => '127.0.0.1',
            'user' => 'root',
            'password' => '',
            'database_name' => 'test',
            'etat' => 'on'// Mettre à on
	    );
}
</code>
						</pre>
										
					
				</div>
				<div class="panel-footer">
					
					<div id="design_js" class="text-right">MODELE DEVELOPPE PAR Ngor SECK ! <h1>Version 1.0.3</h1></div>
				
				</div>
			</div>
		</div>
	</div>
	</body>
</html>
<?php }
}
