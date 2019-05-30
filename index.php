<?php
require('config/DBCNX.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title> ZBook - Accueil </title>
	<link rel="stylesheet" href="img/favicon.ico" type='image/x-icon'/>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>
	</head>
<body>

	<!-- barre du haut, contiendra logo, shearchbar etc -->
	<div id="TOPBAR">
		<ul id="TOPBARLIST">
			<li><a href="index.html"><img src="img/mainlogo.png" id="LOGO"></a></li>
			<li>
				<div class="search">
    				<input type="text" class="searchTerm" placeholder="Rechercher ...">
    				<button type="submit" class="searchButton"></button>
        		</div>
        	</li>
		</ul>
	</div>
<!-- contient la page en elle même, timeline + barre latérale, .... -->
<div id="FULLPAGE">	

	<!-- Barre latérale gauche -->
	<div class="sidebar">
		<ul id="LEFTBAR">
			<li class="sidebarlink"><a href="">PROFIL</a></li>
			<li class="sidebarlink"><a href="">CHAT</a></li>
			<li class="sidebarlink"><a href="">AMIS</a></li>
		</ul>
	</div>

	<!-- contient la division centrale de la page (timeline + module de publication) -->
	<div id="MIDDLE">

		<!-- module de publication -->
		<div id="PUBLISHER">
			<form id="submit_post">
			<p>Publier :</p>
			<input type="text" name="postContent" id="postContent">
			<input type="submit" value="Send">
			</form>
		</div>
		
		<!-- la timeline en elle même -->
		<div id="TIMELINE">

			<!-- ceci est un type post: -->

		<div id="newpost">

		</div>
<?php
		if ($fetch = $mysqli->query("SELECT DatePost, ContentPost FROM POST ORDER BY DatePost DESC")) {
			while ($post = $fetch->fetch_assoc()) {
				echo "<article class=\"fullpost\">
				<p><a href=\"\">Robert Roger</a><small>".$post['DatePost']."</small></p>
				<p class=\"postcontent\">" . $post['ContentPost'] . "</p></article>";
			}
		}
		$mysqli->close();
?>
		
			<!-- <article class="fullpost">
				<p><a href="">Robert Roger</a></p>
				<p class="postcontent">J'ai mangé un ananas ce midi, c'était bon putain! j'aime me mettre des concombres dans les oreilles en pensant à ta mère. Je crois bien que je vis ma meilleure vie. #CACTUS</p>
			</article> -->

		</div>
	</div>


	<!-- Barre latérale de menu -->
	<div class="sidebar">
		<ul id="RIGHTBAR">
			<li class="sidebarlink"><a href="">PROFIL</a></li>
			<li class="sidebarlink"><a href="">CHAT</a></li>
			<li class="sidebarlink"><a href="">AMIS</a></li>
		</ul>
	</div>
</div>

<script src="publications.js"></script>
</body>
</html>