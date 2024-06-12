<div align="center">
  <img src="https://media.giphy.com/media/WS5sXfOx1q2kK/giphy.gif" width="150"/>
  <h1>💬 Application Web de Chat 💬</h1>
  <p>
    <img src="https://img.shields.io/badge/Language-HTML%2C%20PHP%2C%20CSS%2C%20JavaScript-blue" alt="Language">
    <img src="https://img.shields.io/badge/Status-En%20Cours-brightgreen" alt="Status">
    <img src="https://img.shields.io/github/license/votre-nom/application-web-chat" alt="License">
  </p>
  <p>Ce dépôt GitHub contient le code source d'une application web de chat, développée en utilisant HTML, PHP, CSS, JavaScript et SQL. Cette application permet aux utilisateurs de s'inscrire, de se connecter, de participer à des salons de discussion et de gérer leurs interactions en temps réel.</p>
</div>

## Fonctionnalités :

### Authentification

- **Inscription** : Les utilisateurs peuvent créer un compte en fournissant une adresse e-mail, un mot de passe et la confirmation du mot de passe. Les informations sont validées côté client et serveur pour garantir l'intégrité des données.
- **Connexion** : Les utilisateurs enregistrés peuvent se connecter en utilisant leur adresse e-mail et leur mot de passe. Une gestion des erreurs est mise en place pour traiter les cas de mauvaises informations d'identification.

### Gestion des Utilisateurs

- **Base de Données** : Les informations des utilisateurs sont stockées dans une base de données SQL. Les mots de passe sont hachés pour garantir la sécurité.
- **Sessions** : Les sessions PHP sont utilisées pour maintenir l'état de connexion de l'utilisateur et pour sécuriser les pages de l'application.

### Salons de Discussion

- **Chat en Temps Réel** : Les utilisateurs peuvent envoyer et recevoir des messages en temps réel grâce à JavaScript et aux WebSockets.
- **Interface Utilisateur** : Une interface utilisateur intuitive permet aux utilisateurs de naviguer facilement entre les différents salons de discussion.

### Gestion des Erreurs

- **Validation Côté Client** : Les formulaires d'inscription et de connexion utilisent JavaScript pour valider les entrées avant l'envoi au serveur.
- **Validation Côté Serveur** : PHP vérifie les données reçues pour prévenir les erreurs et les attaques potentielles (par exemple, injection SQL).
- **Messages d'Erreur** : Les messages d'erreur sont affichés de manière conviviale pour aider les utilisateurs à corriger leurs entrées.

## Installation et Configuration

1. **Cloner le Dépôt** : Clonez ce dépôt sur votre machine locale.
   ```bash
   git clone https://github.com/votre-utilisateur/votre-repo.git
CREATE DATABASE chat;
USE chat;
SOURCE db/schema.sql;
