# Utilise l’image officielle PHP avec le serveur embarqué
FROM php:8.2-cli

# Copie tous les fichiers de ton repo dans le conteneur
COPY . /var/www/html

# Définit le dossier de travail
WORKDIR /var/www/html

# Ouvre le port requis par Render
EXPOSE 10000

# Démarre le serveur PHP
CMD ["php", "-S", "0.0.0.0:10000"]
