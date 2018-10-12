# EXERCICE : CREATION D'UN MINI-BLOG EN PHP

## BUT

Construire un mini blog en php, html, css et javascript pour une évaluation des connaissances de base.

Sera regardé aussi la qualité du code produit.

## CONTRAINTES

Pour réaliser cet excercice, il ne faut utiliser que du PHP "pur", c'est à dire :

- sans utilisation d'aucun framework ni CMS PHP
- sans utilisation d'aucun ORM
- sans aucun paquets tiers (de packagist, ou autre)

Est autorisé, l'utilisation de composer

## FONCTIONNALITÉS

### BASE DE DONNÉES

Utiliser MySQL ou sqlite, avec la classe **PDO**

### PAGES

Le blog comportera deux sections, un front coté visiteurs et une administration en accès restreint.

Il devra avoir une présentation propre, avec l'utilisation de Twitter Bootstrap

#### Le front

- sur toutes les page, un menu de navigation.
- une page d'accueil présentant les 5 derniers articles, classés par date du plus au moins récent (voir définition d'un article plus bas).
- une page "tous les articles", articles classés comme ci-dessus, paginée serait un plus .
- une page par article
- une page de formulaire de contact (voir définition du contact plus bas)

#### L'administration

- accessible uniquement aux utilisateurs par une page de login
- doit contenir une section de gestion des articles (listing / édition / création / suppression)
- doit contenir une section 'mon profil' : modification des données de l'utilisateur connecté
- doit contenir une section de gestion des autres utilisateurs (listing / édition / création / suppression)
- doit contenir une section de gestion des messages envoyés par le formulaire de contact (listing / lecture unitaire / suppression)


### DÉFINITIONS

Sauf si indiqué, pour chaque entité, tous les champs sont obligatoires.

#### UTILISATEUR ( user )

un utilisateur est défini par :

- un id (identifiant unique)
- un pseudo (unique)
- un mot de passe
- un email (unique)


#### ARTICLE ( post )

un article est défini par :

- un id (identifiant unique)
- un titre (nullable)
- un contenu (nullable)
- une date de création
- une date de mise à jour
- un auteur ( -> relation avec 'user' )

serait un plus : un système de gestion du status de l'article (brouillon/publié/...)

#### CONTACT ( contact )

un contact est défini par :

- un id (identifiant unique)
- un sujet
- un email
- un message 
- une date de création
