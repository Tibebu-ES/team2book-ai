{\rtf1\ansi\ansicpg1252\cocoartf2870
\cocoatextscaling0\cocoaplatform0{\fonttbl\f0\froman\fcharset0 Times-Roman;}
{\colortbl;\red255\green255\blue255;\red0\green0\blue0;}
{\*\expandedcolortbl;;\cssrgb\c0\c0\c0;}
\margl1440\margr1440\vieww11520\viewh8400\viewkind0
\deftab720
\pard\pardeftab720\partightenfactor0

\f0\fs24 \cf0 \expnd0\expndtw0\kerning0
\outl0\strokewidth0 \strokec2 ---\
chunk_id: guide_configuration_07\
title: Couleurs des sous-calendriers, types de calendriers et disponibilit\'e9s habituelles\
category: configuration\
role:\
- gestionnaire\
keywords:\
- couleurs\
- sous-calendriers\
- disponibilit\'e9s\
- non-disponibilit\'e9s\
- calendrier mixte\
- Teamup\
- heures habituelles\
- consommateurs\
source: Guide de configuration Team2Book v1.0\
---\
\
# Configuration #8 - Couleur du sous-calendrier de disponibilit\'e9s\
\
## Objectif\
\
Chaque consommateur poss\'e8de normalement un sous-calendrier dans Teamup lui permettant d'entrer ses disponibilit\'e9s ou ses non-disponibilit\'e9s.\
\
La couleur du sous-calendrier permet d'identifier rapidement les utilisateurs dans Teamup et facilite la lecture des horaires.\
\
---\
\
# Pourquoi d\'e9finir une strat\'e9gie de couleurs ?\
\
Une bonne strat\'e9gie de couleurs am\'e9liore :\
\
- la lisibilit\'e9 du calendrier;\
- l'identification rapide des utilisateurs;\
- la navigation dans Teamup;\
- la gestion quotidienne des horaires.\
\
Une strat\'e9gie coh\'e9rente facilite consid\'e9rablement l'adoption du syst\'e8me par les utilisateurs.\
\
---\
\
# Strat\'e9gie 1 - Une couleur par consommateur\
\
## Description\
\
Chaque consommateur re\'e7oit une couleur diff\'e9rente.\
\
---\
\
## Avantages\
\
- Identification rapide des individus.\
- Distinction visuelle imm\'e9diate.\
- Tr\'e8s facile \'e0 comprendre.\
\
---\
\
## Recommandation\
\
Cette approche est particuli\'e8rement adapt\'e9e aux petites \'e9quipes.\
\
---\
\
# Strat\'e9gie 2 - Une couleur par r\'f4le\
\
## Description\
\
Les consommateurs partageant le m\'eame r\'f4le utilisent la m\'eame couleur.\
\
---\
\
## Exemple\
\
- M\'e9decins : rouge\
- Infirmi\'e8res : bleu\
- Pharmaciens : jaune\
- Administration : vert\
\
---\
\
## Avantages\
\
- Identification rapide du r\'f4le.\
- Vision globale simplifi\'e9e.\
- Tr\'e8s utile dans les grandes organisations.\
\
---\
\
# Strat\'e9gie 3 - M\'eame couleur que la ressource r\'e9serv\'e9e\
\
## Description\
\
Le consommateur re\'e7oit la m\'eame couleur que sa ressource r\'e9serv\'e9e.\
\
---\
\
## Avantages\
\
- Association visuelle rapide.\
- Facilit\'e9 d'identification.\
- R\'e9duction des erreurs de lecture.\
\
---\
\
# Nombre de couleurs disponibles\
\
Teamup offre plusieurs dizaines de couleurs permettant de construire une convention visuelle adapt\'e9e aux besoins de l'organisation.\
\
---\
\
# Bonnes pratiques\
\
## \'catre coh\'e9rent\
\
La m\'eame logique devrait \'eatre utilis\'e9e pour tous les consommateurs.\
\
---\
\
## \'c9viter les couleurs trop semblables\
\
Des couleurs trop proches peuvent compliquer :\
\
- la lecture;\
- l'identification;\
- la navigation.\
\
---\
\
## Documenter la strat\'e9gie\
\
La convention choisie devrait \'eatre connue des gestionnaires afin d'assurer une maintenance coh\'e9rente.\
\
---\
\
# R\'e9sultat attendu\
\
\'c0 la fin de cette \'e9tape :\
\
- tous les consommateurs poss\'e8dent une couleur de sous-calendrier;\
- la structure visuelle de Teamup est coh\'e9rente.\
\
---\
\
# Configuration #9 - Type de sous-calendrier de disponibilit\'e9s\
\
## Objectif\
\
D\'e9terminer comment chaque consommateur saisira ses disponibilit\'e9s.\
\
Pour chaque consommateur, le gestionnaire doit d\'e9terminer si ce dernier utilisera :\
\
- un calendrier de disponibilit\'e9s;\
- un calendrier de non-disponibilit\'e9s;\
- un calendrier mixte.\
\
---\
\
# Type 1 - Sous-calendrier de disponibilit\'e9s\
\
## Description\
\
Le consommateur entre uniquement les journ\'e9es o\'f9 il souhaite travailler.\
\
---\
\
## Fonctionnement\
\
Lorsqu'une disponibilit\'e9 est inscrite :\
\
- Team2Book consid\'e8re que le consommateur est disponible.\
\
Lorsqu'aucun \'e9v\'e9nement n'est inscrit :\
\
- Team2Book consid\'e8re que le consommateur est indisponible.\
\
---\
\
## Cas d'utilisation id\'e9al\
\
Cette approche est particuli\'e8rement utile lorsque :\
\
- le consommateur travaille peu de jours par semaine;\
- les disponibilit\'e9s changent souvent;\
- les journ\'e9es travaill\'e9es sont variables.\
\
---\
\
## Recommandation du guide\
\
Il s'agit du type recommand\'e9 et utilis\'e9 par d\'e9faut dans Team2Book.\
\
---\
\
## Exemple\
\
Dr Tremblay travaille :\
\
- lundi;\
- mercredi;\
- vendredi.\
\
Il cr\'e9e simplement trois disponibilit\'e9s.\
\
---\
\
# \'c9v\'e9nements r\'e9currents\
\
## Simplification\
\
Teamup permet la cr\'e9ation d'\'e9v\'e9nements r\'e9currents.\
\
---\
\
## Exemple\
\
Si Dr Tremblay travaille tous les lundis :\
\
- un seul \'e9v\'e9nement r\'e9current peut \'eatre cr\'e9\'e9;\
- il se r\'e9p\'e9tera automatiquement chaque semaine.\
\
---\
\
## Avantage\
\
Cette approche r\'e9duit consid\'e9rablement le travail administratif.\
\
---\
\
# Type 2 - Sous-calendrier de non-disponibilit\'e9s\
\
## Description\
\
Le consommateur indique uniquement les journ\'e9es o\'f9 il ne souhaite pas travailler.\
\
---\
\
## Fonctionnement\
\
Lorsqu'aucun \'e9v\'e9nement n'est inscrit :\
\
- Team2Book suppose que le consommateur est disponible.\
\
Lorsqu'une non-disponibilit\'e9 est indiqu\'e9e :\
\
- Team2Book consid\'e8re que le consommateur est absent.\
\
---\
\
## Cas d'utilisation id\'e9al\
\
Cette approche convient particuli\'e8rement aux consommateurs qui travaillent r\'e9guli\'e8rement :\
\
- trois jours;\
- quatre jours;\
- cinq jours par semaine.\
\
---\
\
## Exemple\
\
Une infirmi\'e8re travaille normalement du lundi au vendredi.\
\
Elle entre uniquement :\
\
- ses vacances;\
- ses cong\'e9s;\
- ses absences.\
\
---\
\
## Avantages\
\
- Moins d'\'e9v\'e9nements \'e0 cr\'e9er.\
- Moins d'entretien.\
- Plus efficace pour les horaires r\'e9guliers.\
\
---\
\
# Type 3 - Sous-calendrier mixte\
\
## Description\
\
Le consommateur peut saisir :\
\
- des disponibilit\'e9s;\
- des non-disponibilit\'e9s;\
\
dans le m\'eame sous-calendrier.\
\
---\
\
## Fonctionnement\
\
Chaque \'e9v\'e9nement doit \'eatre identifi\'e9 explicitement comme :\
\
- disponibilit\'e9;\
- ou non-disponibilit\'e9.\
\
---\
\
## Pourquoi ?\
\
Team2Book ne peut pas deviner automatiquement le type de l'\'e9v\'e9nement.\
\
Le consommateur doit donc pr\'e9ciser son intention lors de chaque saisie.\
\
---\
\
# Avantages\
\
Le calendrier mixte offre davantage de flexibilit\'e9.\
\
---\
\
## Cas d'utilisation\
\
Cette approche peut \'eatre utile lorsque :\
\
- les horaires sont complexes;\
- plusieurs cycles de planification existent;\
- les besoins changent fr\'e9quemment.\
\
---\
\
# Inconv\'e9nients\
\
Le consommateur doit effectuer davantage de travail :\
\
- davantage d'attention;\
- davantage de saisie;\
- davantage de validation.\
\
---\
\
# Activation du mode mixte\
\
## Important\
\
Le mode mixte est d\'e9sactiv\'e9 par d\'e9faut.\
\
Le gestionnaire doit l'activer dans les param\'e8tres de Team2Book avant de pouvoir l'utiliser.\
\
---\
\
# Strat\'e9gies de d\'e9ploiement\
\
## Strat\'e9gie uniforme\
\
Certaines organisations imposent le m\'eame type de calendrier \'e0 tous les consommateurs.\
\
---\
\
## Avantages\
\
- Formation plus simple;\
- moins de confusion;\
- implantation plus rapide.\
\
---\
\
# Strat\'e9gie flexible\
\
D'autres organisations permettent \'e0 chaque consommateur de choisir son type de calendrier.\
\
---\
\
## Avantages\
\
- Plus d'autonomie;\
- adaptation aux habitudes de travail.\
\
---\
\
# Strat\'e9gie hybride\
\
Certaines organisations utilisent un mod\'e8le mixte.\
\
---\
\
## Exemple\
\
Premi\'e8re phase :\
\
- collecte des non-disponibilit\'e9s.\
\
Deuxi\'e8me phase :\
\
- ajout de disponibilit\'e9s particuli\'e8res.\
\
Dans ce contexte, le calendrier mixte peut repr\'e9senter une solution int\'e9ressante.\
\
---\
\
# R\'e9sultat attendu\
\
\'c0 la fin de cette \'e9tape :\
\
- chaque consommateur poss\'e8de un type de calendrier adapt\'e9 \'e0 sa r\'e9alit\'e9;\
- la m\'e9thode de collecte des disponibilit\'e9s est d\'e9finie.\
\
---\
\
# Configuration #10 - Heures habituelles de disponibilit\'e9\
\
## Objectif\
\
Permettre \'e0 Team2Book d'interpr\'e9ter correctement les disponibilit\'e9s entr\'e9es sous la forme \'ab Toute la journ\'e9e \'bb.\
\
---\
\
# Fonctionnement\
\
Lorsqu'un consommateur clique sur :\
\
**Toute la journ\'e9e**\
\
Team2Book utilise automatiquement les heures habituelles configur\'e9es pour ce consommateur.\
\
---\
\
## Exemple\
\
Consommateur :\
\
- D\'e9but habituel : 8h30\
- Fin habituelle : 17h30\
\
Si une disponibilit\'e9 est cr\'e9\'e9e pour une journ\'e9e compl\'e8te :\
\
Team2Book consid\'e8re automatiquement :\
\
- disponible de 8h30 \'e0 17h30.\
\
---\
\
# Pourquoi configurer ces heures ?\
\
Cette configuration permet :\
\
- de r\'e9duire la saisie n\'e9cessaire;\
- d'acc\'e9l\'e9rer l'entr\'e9e des disponibilit\'e9s;\
- d'am\'e9liorer la coh\'e9rence des horaires.\
\
---\
\
# Heures \'e0 documenter\
\
Pour chaque consommateur, il est recommand\'e9 de d\'e9finir :\
\
- l'heure habituelle de d\'e9but;\
- l'heure habituelle de fin.\
\
---\
\
# Exemples\
\
## M\'e9decin\
\
- D\'e9but : 8h30\
- Fin : 17h30\
\
---\
\
## Infirmi\'e8re\
\
- D\'e9but : 8h00\
- Fin : 16h00\
\
---\
\
## Pharmacien\
\
- D\'e9but : 9h00\
- Fin : 17h00\
\
---\
\
# Bonnes pratiques\
\
## Utiliser les horaires r\'e9els\
\
Les heures configur\'e9es devraient refl\'e9ter la pratique habituelle du consommateur.\
\
---\
\
## R\'e9viser p\'e9riodiquement\
\
Les horaires peuvent \'e9voluer dans le temps.\
\
Une r\'e9vision p\'e9riodique permet de maintenir une configuration exacte.\
\
---\
\
## Compl\'e9ter cette information avant la cr\'e9ation des consommateurs\
\
Cette donn\'e9e sera utilis\'e9e lors de la Configuration #12.\
\
Il est donc recommand\'e9 de la pr\'e9parer d\'e8s maintenant.\
\
---\
\
# R\'e9sultat attendu\
\
\'c0 la fin de cette \'e9tape :\
\
- les couleurs des sous-calendriers sont d\'e9finies;\
- le type de calendrier de chaque consommateur est identifi\'e9;\
- les heures habituelles de disponibilit\'e9 sont document\'e9es.\
\
---\
\
# R\'e9sum\'e9\
\
Les Configurations #8, #9 et #10 servent \'e0 pr\'e9parer les informations n\'e9cessaires \'e0 la cr\'e9ation des consommateurs.\
\
Elles permettent de d\'e9finir :\
\
1. la couleur du sous-calendrier;\
2. le type de calendrier utilis\'e9;\
3. les heures habituelles de disponibilit\'e9.\
\
Ces informations am\'e9lioreront l'exp\'e9rience utilisateur, la qualit\'e9 des horaires produits et la facilit\'e9 de navigation dans Teamup.\
}