{\rtf1\ansi\ansicpg1252\cocoartf2870
\cocoatextscaling0\cocoaplatform0{\fonttbl\f0\froman\fcharset0 Times-Roman;}
{\colortbl;\red255\green255\blue255;\red0\green0\blue0;}
{\*\expandedcolortbl;;\cssrgb\c0\c0\c0;}
\margl1440\margr1440\vieww11520\viewh8400\viewkind0
\deftab720
\pard\pardeftab720\partightenfactor0

\f0\fs24 \cf0 \expnd0\expndtw0\kerning0
\outl0\strokewidth0 \strokec2 ---\
chunk_id: guide_configuration_11\
title: Contraintes et notifications\
category: configuration\
role:\
- gestionnaire\
keywords:\
- contraintes\
- notifications\
- alertes\
- planificateur\
- consommateurs\
- r\'f4le\
- priorit\'e9\
- courriel\
source: Guide de configuration Team2Book v1.0\
---\
\
# Configuration #16 - Contraintes\
\
## Objectif\
\
Les contraintes permettent \'e0 Team2Book de v\'e9rifier automatiquement si certaines r\'e8gles op\'e9rationnelles sont respect\'e9es.\
\
Elles servent principalement \'e0 d\'e9tecter les situations o\'f9 le nombre de consommateurs disponibles est insuffisant pour r\'e9pondre aux besoins de l'organisation.\
\
Lorsqu'une contrainte n'est pas respect\'e9e :\
\
- le gestionnaire est avis\'e9;\
- le probl\'e8me appara\'eet dans le planificateur;\
- une intervention peut \'eatre effectu\'e9e avant que le probl\'e8me n'ait un impact op\'e9rationnel.\
\
---\
\
# Pourquoi utiliser des contraintes ?\
\
Les contraintes permettent de transformer des r\'e8gles d'affaires en v\'e9rifications automatiques.\
\
Elles aident \'e0 :\
\
- assurer une couverture minimale;\
- d\'e9tecter rapidement les probl\'e8mes;\
- r\'e9duire les risques d'oublis;\
- am\'e9liorer la qualit\'e9 des horaires.\
\
---\
\
# Exemples de contraintes\
\
## Nombre minimal de m\'e9decins\
\
Une clinique peut exiger :\
\
- au moins 2 m\'e9decins pr\'e9sents chaque jour.\
\
---\
\
## Nombre minimal de professionnels par semaine\
\
Une \'e9quipe peut exiger :\
\
- au moins 3 professionnels diff\'e9rents disponibles chaque semaine.\
\
---\
\
## Nombre minimal de secr\'e9taires\
\
Une organisation peut exiger :\
\
- au moins 2 secr\'e9taires pr\'e9sentes chaque matin.\
\
---\
\
## Contraintes personnalis\'e9es\
\
Les contraintes peuvent \'eatre adapt\'e9es \'e0 la r\'e9alit\'e9 de l'organisation.\
\
Chaque r\'e8gle doit repr\'e9senter un besoin op\'e9rationnel r\'e9el.\
\
---\
\
# Fonctionnement des alertes\
\
## D\'e9tection automatique\
\
Lorsqu'une contrainte n'est pas respect\'e9e :\
\
- Team2Book d\'e9tecte le probl\'e8me;\
- une alerte peut \'eatre g\'e9n\'e9r\'e9e;\
- l'information demeure visible dans le planificateur.\
\
---\
\
## Courriels d'alerte\
\
Le syst\'e8me peut transmettre des notifications lorsqu'une contrainte n'est pas satisfaite.\
\
Cette approche permet aux gestionnaires d'agir rapidement.\
\
---\
\
# Cr\'e9ation d'une contrainte\
\
## \'c9tape 1\
\
Acc\'e9der \'e0 la section :\
\
**Tableau de bord \uc0\u8594  Contraintes**\
\
---\
\
## \'c9tape 2\
\
S\'e9lectionner :\
\
**Ajouter**\
\
---\
\
## \'c9tape 3\
\
Configurer les param\'e8tres souhait\'e9s.\
\
---\
\
# Nombre minimum de consommateurs\
\
## D\'e9finition\
\
Indique le nombre minimal de consommateurs requis.\
\
---\
\
## Exemple\
\
Valeur :\
\
**2**\
\
Signifie :\
\
- au moins deux consommateurs doivent \'eatre pr\'e9sents durant la p\'e9riode analys\'e9e.\
\
---\
\
# Ciblage des consommateurs\
\
## Objectif\
\
D\'e9terminer quels consommateurs sont pris en compte.\
\
---\
\
## Option 1 - R\'f4le\
\
La contrainte s'applique \'e0 un r\'f4le particulier.\
\
### Exemple\
\
- M\'e9decins\
- Infirmi\'e8res\
- Pharmaciens\
\
---\
\
## Option 2 - Priorit\'e9\
\
La contrainte s'applique selon le niveau de priorit\'e9.\
\
---\
\
## Option 3 - R\'f4le et priorit\'e9\
\
La contrainte applique simultan\'e9ment :\
\
- un r\'f4le;\
- une priorit\'e9.\
\
---\
\
## Option 4 - Aucun\
\
Tous les consommateurs sont consid\'e9r\'e9s.\
\
---\
\
# Intervalles de temps disponibles\
\
## Matin\
\
Analyse la pr\'e9sence durant la p\'e9riode du matin.\
\
---\
\
## Apr\'e8s-midi\
\
Analyse la pr\'e9sence durant la p\'e9riode de l'apr\'e8s-midi.\
\
---\
\
## Jour\
\
Analyse la pr\'e9sence sur l'ensemble d'une journ\'e9e.\
\
---\
\
## Semaine\
\
Analyse la pr\'e9sence sur une semaine compl\'e8te.\
\
---\
\
## Par jour personnalis\'e9\
\
Permet de s\'e9lectionner des journ\'e9es pr\'e9cises.\
\
---\
\
## Intervalle personnalis\'e9\
\
Permet de d\'e9finir :\
\
- une heure de d\'e9but;\
- une heure de fin.\
\
---\
\
# Contraintes strictes\
\
## Valeur Oui\
\
Le consommateur doit respecter exactement l'intervalle demand\'e9.\
\
---\
\
## Exemple\
\
Si la contrainte exige :\
\
- pr\'e9sence \'e0 partir de 8h00;\
\
un consommateur arrivant \'e0 8h10 pourrait ne pas \'eatre consid\'e9r\'e9 pr\'e9sent.\
\
---\
\
# Contraintes non strictes\
\
## Valeur Non\
\
Une certaine tol\'e9rance est appliqu\'e9e.\
\
---\
\
## Avantage\
\
Cette approche :\
\
- r\'e9duit les faux avertissements;\
- refl\'e8te mieux la r\'e9alit\'e9 op\'e9rationnelle;\
- facilite la gestion des horaires.\
\
---\
\
# Tol\'e9rance des contraintes\
\
La tol\'e9rance utilis\'e9e pour les contraintes non strictes est configur\'e9e dans :\
\
**Tableau de bord \uc0\u8594  Param\'e8tres \u8594  Seuils**\
\
Cette configuration permet d'ajouter de la flexibilit\'e9 lors de l'\'e9valuation des contraintes.\
\
---\
\
# Bonnes pratiques pour les contraintes\
\
## Commencer simple\
\
Cr\'e9er d'abord les contraintes r\'e9ellement essentielles.\
\
---\
\
## \'c9viter les contraintes excessives\
\
Un trop grand nombre de contraintes peut g\'e9n\'e9rer :\
\
- des alertes inutiles;\
- une surcharge de v\'e9rifications;\
- des interventions fr\'e9quentes.\
\
---\
\
## Valider r\'e9guli\'e8rement\
\
Les contraintes devraient \'eatre revues lorsque :\
\
- les horaires changent;\
- les effectifs \'e9voluent;\
- les besoins de l'organisation se transforment.\
\
---\
\
# R\'e9sultat attendu\
\
\'c0 la fin de cette \'e9tape :\
\
- les r\'e8gles essentielles de couverture sont configur\'e9es;\
- Team2Book peut d\'e9tecter les manques de personnel;\
- les gestionnaires re\'e7oivent les alertes appropri\'e9es.\
\
---\
\
# Configuration #17 - Notifications\
\
## Objectif\
\
Le module de notifications permet de g\'e9rer les communications automatiques transmises aux consommateurs.\
\
Les notifications servent principalement \'e0 rappeler aux utilisateurs d'entrer leurs disponibilit\'e9s et leurs non-disponibilit\'e9s.\
\
---\
\
# Structure du module Notifications\
\
La section Notifications comporte deux parties principales :\
\
1. Notifications activ\'e9es par l'utilisateur\
2. Notifications\
\
---\
\
# Notifications activ\'e9es par l'utilisateur\
\
## Objectif\
\
Permet de contr\'f4ler quelles notifications sont actives pour chaque utilisateur.\
\
---\
\
## Configuration globale\
\
Le gestionnaire peut :\
\
- activer certaines notifications;\
- d\'e9sactiver certaines notifications;\
- contr\'f4ler les communications utilisateur par utilisateur.\
\
---\
\
## Relation avec les consommateurs\
\
Cette configuration produit le m\'eame effet que le param\'e8tre :\
\
**Autoriser les notifications par courriel**\
\
pr\'e9sent dans la fiche d'un consommateur.\
\
---\
\
## Utilisation\
\
Cette section permet notamment :\
\
- d'activer rapidement les rappels;\
- de suspendre les notifications;\
- d'adapter les communications \'e0 certains utilisateurs.\
\
---\
\
# Notification d'entr\'e9e des disponibilit\'e9s\
\
## Objectif principal\
\
Inviter les consommateurs \'e0 entrer leurs disponibilit\'e9s.\
\
---\
\
## Fonctionnement\
\
Le consommateur re\'e7oit :\
\
- une notification initiale;\
- puis un rappel quelques jours plus tard.\
\
---\
\
## Avantage\
\
Cette automatisation r\'e9duit les oublis et am\'e9liore la qualit\'e9 des horaires produits.\
\
---\
\
# Onglet Notifications\
\
## Objectif\
\
Permet de personnaliser les messages envoy\'e9s aux utilisateurs.\
\
---\
\
# Personnalisation des messages\
\
Le gestionnaire peut adapter :\
\
- le contenu;\
- les instructions;\
- les liens;\
- la terminologie utilis\'e9e.\
\
---\
\
## Exemples d'informations utiles\
\
Certaines organisations ajoutent :\
\
- des consignes internes;\
- des rappels administratifs;\
- des liens vers les tutoriels;\
- des proc\'e9dures particuli\'e8res.\
\
---\
\
# Renvoi manuel des notifications\
\
## Fonction\
\
Le gestionnaire peut d\'e9cider de transmettre de nouveau un message au moment souhait\'e9.\
\
---\
\
## Utilisation\
\
Cette fonction est utile lorsque :\
\
- de nouveaux utilisateurs arrivent;\
- des rappels suppl\'e9mentaires sont n\'e9cessaires;\
- certaines p\'e9riodes n\'e9cessitent davantage de suivi.\
\
---\
\
# Variables personnalis\'e9es\
\
## Principe\
\
Les notifications peuvent utiliser des variables automatiquement remplac\'e9es lors de l'envoi.\
\
---\
\
## Exemple\
\
Variable :\
\
```text\
\{calendar_link\}\
```\
\
---\
\
## R\'e9sultat\
\
Lors de l'envoi :\
\
- Team2Book remplace automatiquement la variable par le lien personnel du consommateur.\
\
---\
\
# Avantages des variables\
\
Les variables permettent :\
\
- de personnaliser les messages;\
- de r\'e9duire le travail administratif;\
- d'\'e9viter les erreurs de copie.\
\
---\
\
# Bonnes pratiques pour les notifications\
\
## Garder les messages simples\
\
Les notifications doivent \'eatre :\
\
- claires;\
- courtes;\
- faciles \'e0 comprendre.\
\
---\
\
## Inclure les ressources utiles\
\
Il est recommand\'e9 d'ajouter :\
\
- les tutoriels importants;\
- les consignes r\'e9currentes;\
- les rappels fr\'e9quents.\
\
---\
\
## R\'e9viser p\'e9riodiquement les messages\
\
Les besoins \'e9voluent avec le temps.\
\
Les mod\'e8les de notification devraient \'eatre mis \'e0 jour r\'e9guli\'e8rement.\
\
---\
\
# Cas d'utilisation typique\
\
## Rappel mensuel\
\
La plupart des organisations utilisent les notifications pour :\
\
1. demander l'entr\'e9e des disponibilit\'e9s;\
2. transmettre un rappel;\
3. aider les utilisateurs \'e0 respecter les \'e9ch\'e9ances.\
\
---\
\
# R\'e9sultat attendu\
\
\'c0 la fin de cette configuration :\
\
- les notifications sont activ\'e9es;\
- les mod\'e8les de messages sont personnalis\'e9s;\
- les rappels automatiques sont fonctionnels;\
- les consommateurs re\'e7oivent les communications appropri\'e9es.\
\
---\
\
# R\'e9sum\'e9\
\
Les Configurations #16 et #17 permettent de surveiller la qualit\'e9 des horaires et d'am\'e9liorer les communications avec les utilisateurs.\
\
Les contraintes servent \'e0 :\
\
1. d\'e9tecter les manques de personnel;\
2. v\'e9rifier le respect des r\'e8gles;\
3. g\'e9n\'e9rer des alertes.\
\
Les notifications servent \'e0 :\
\
1. rappeler l'entr\'e9e des disponibilit\'e9s;\
2. communiquer avec les consommateurs;\
3. automatiser certaines t\'e2ches administratives;\
4. am\'e9liorer l'adoption de Team2Book.\
\
Ensemble, ces deux modules contribuent \'e0 maintenir une planification plus fiable et une meilleure participation des utilisateurs.\
}