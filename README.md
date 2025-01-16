Redefinir le point d'entrée de xampp dans le dossier public
Pour cela il faut modifier le fichier C:\xampp\apache\conf\extra\httpd-vhosts.conf

Dans se fichier il faut ajouter cet extrait de code:

<VirtualHost *:80>
	ServerName Portfolio.local
	DocumentRoot "C:\xampp\htdocs\Portfolio\public"
	<Directory  "C:\xampp\htdocs\Portfolio\public">
		Options +Indexes +Includes +FollowSymLinks +MultiViews
		AllowOverride All
		Require local
	</Directory>
</VirtualHost>

afin il faut relancer xampp
