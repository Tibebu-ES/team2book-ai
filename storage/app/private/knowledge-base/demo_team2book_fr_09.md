{\rtf1\ansi\ansicpg1252\cocoartf2870
\cocoatextscaling0\cocoaplatform0{\fonttbl\f0\froman\fcharset0 Times-Roman;}
{\colortbl;\red255\green255\blue255;\red0\green0\blue0;}
{\*\expandedcolortbl;;\cssrgb\c0\c0\c0;}
\margl1440\margr1440\vieww11520\viewh8400\viewkind0
\deftab720
\pard\pardeftab720\partightenfactor0

\f0\fs24 \cf0 \expnd0\expndtw0\kerning0
\outl0\strokewidth0 \strokec2 ---\
chunk_id: demo_team2book_fr_09\
title: Priorit\'e9s et pr\'e9f\'e9rences de ressources\
category: demo\
role:\
- gestionnaire\
- professionnel\
keywords:\
- priorit\'e9\
- pr\'e9f\'e9rence\
- ressource r\'e9serv\'e9e\
- bureau r\'e9serv\'e9\
- attribution des locaux\
- ressources\
- planification\
- Team2Book\
source: D\'e9monstration Team2Book (Fran\'e7ais)\
---\
\
# Priorit\'e9s et pr\'e9f\'e9rences\
\
## Vue d'ensemble\
\
L'attribution automatique des locaux dans Team2Book repose notamment sur deux concepts essentiels :\
\
- les priorit\'e9s;\
- les pr\'e9f\'e9rences.\
\
Bien que ces notions soient compl\'e9mentaires, elles remplissent des fonctions diff\'e9rentes dans le processus de planification.\
\
Comprendre leur distinction est essentiel pour configurer correctement les ressources et obtenir les r\'e9sultats souhait\'e9s.\
\
---\
\
# Qu'est-ce qu'une priorit\'e9 ?\
\
## D\'e9finition\
\
La priorit\'e9 d\'e9termine l'ordre dans lequel Team2Book attribue les ressources aux consommateurs.\
\
Les consommateurs ayant une priorit\'e9 plus \'e9lev\'e9e sont \'e9valu\'e9s avant ceux ayant une priorit\'e9 plus faible.\
\
---\
\
## Objectif\
\
Les priorit\'e9s permettent de respecter certaines r\'e8gles organisationnelles telles que :\
\
- des bureaux r\'e9serv\'e9s;\
- des ententes particuli\'e8res;\
- des droits d'utilisation privil\'e9gi\'e9s;\
- certaines exigences op\'e9rationnelles.\
\
---\
\
# Priorit\'e9 1 et ressources r\'e9serv\'e9es\
\
## Bureau garanti\
\
Une priorit\'e9 de niveau 1 est g\'e9n\'e9ralement associ\'e9e \'e0 une ressource r\'e9serv\'e9e.\
\
Lorsqu'un consommateur ayant une ressource r\'e9serv\'e9e est disponible, cette ressource lui est attribu\'e9e automatiquement.\
\
---\
\
## Exemple\
\
Michel b\'e9n\'e9ficie d'un acc\'e8s garanti au local 120.\
\
Sa configuration est :\
\
- Priorit\'e9 : 1\
- Ressource r\'e9serv\'e9e : Local 120\
\
---\
\
## R\'e9sultat\
\
Chaque fois que Michel est disponible :\
\
- le local 120 lui est attribu\'e9.\
\
Lorsque Michel est absent :\
\
- le local 120 devient disponible pour les autres professionnels.\
\
---\
\
# Avantages des ressources r\'e9serv\'e9es\
\
## Stabilit\'e9\
\
Le professionnel sait \'e0 l'avance o\'f9 il travaillera.\
\
---\
\
## Pr\'e9visibilit\'e9\
\
Certaines ressources importantes demeurent r\'e9serv\'e9es aux personnes qui doivent les utiliser.\
\
---\
\
## Simplification\
\
Les r\'e8gles particuli\'e8res sont appliqu\'e9es automatiquement par Team2Book.\
\
---\
\
# Qu'est-ce qu'une pr\'e9f\'e9rence ?\
\
## D\'e9finition\
\
Les pr\'e9f\'e9rences repr\'e9sentent l'ordre souhait\'e9 des ressources qu'un consommateur aimerait utiliser.\
\
Contrairement \'e0 une ressource r\'e9serv\'e9e, une pr\'e9f\'e9rence n'est pas garantie.\
\
---\
\
## Objectif\
\
Lorsqu'une ressource r\'e9serv\'e9e n'existe pas, Team2Book tente d'attribuer les ressources selon l'ordre des pr\'e9f\'e9rences configur\'e9es.\
\
---\
\
# Classement des pr\'e9f\'e9rences\
\
## Liste ordonn\'e9e\
\
Chaque consommateur peut d\'e9finir plusieurs pr\'e9f\'e9rences.\
\
Exemple :\
\
1. Local 120\
2. Local 130\
3. Local 140\
\
---\
\
## Fonctionnement\
\
Le syst\'e8me tente d'attribuer la premi\'e8re ressource disponible dans cette liste.\
\
Si elle est indisponible, il passe \'e0 la suivante.\
\
---\
\
# Exemple pratique\
\
## Situation\
\
Consid\'e9rons deux professionnels :\
\
- Pierre, infirmier;\
- Jean, psychologue.\
\
Aucun des deux ne poss\'e8de de local r\'e9serv\'e9.\
\
---\
\
# Configuration de Pierre\
\
## Priorit\'e9 sup\'e9rieure\
\
Pierre poss\'e8de :\
\
- Priorit\'e9 2\
- Pr\'e9f\'e9rence 1 : Local 120\
- Pr\'e9f\'e9rence 2 : Local 130\
- Pr\'e9f\'e9rence 3 : Local 140\
\
---\
\
# Configuration de Jean\
\
## Priorit\'e9 inf\'e9rieure\
\
Jean poss\'e8de :\
\
- Priorit\'e9 3\
- Pr\'e9f\'e9rence 1 : Local 120\
- Pr\'e9f\'e9rence 2 : Local 130\
- Pr\'e9f\'e9rence 3 : Local 140\
\
---\
\
# Processus d'attribution\
\
## Premi\'e8re \'e9tape\
\
Team2Book consulte les priorit\'e9s.\
\
Pierre est \'e9valu\'e9 avant Jean puisque :\
\
- Pierre poss\'e8de la priorit\'e9 2;\
- Jean poss\'e8de la priorit\'e9 3.\
\
---\
\
## Deuxi\'e8me \'e9tape\
\
Le syst\'e8me tente d'attribuer \'e0 Pierre sa premi\'e8re pr\'e9f\'e9rence disponible.\
\
Ordre d'\'e9valuation :\
\
1. Local 120\
2. Local 130\
3. Local 140\
\
---\
\
## Troisi\'e8me \'e9tape\
\
Une fois Pierre assign\'e9, Team2Book analyse les pr\'e9f\'e9rences de Jean et lui attribue la meilleure ressource encore disponible.\
\
---\
\
# Influence des ressources r\'e9serv\'e9es\
\
## Lorsque Michel travaille\
\
Puisque Michel poss\'e8de :\
\
- une priorit\'e9 1;\
- le local 120 r\'e9serv\'e9;\
\
le local 120 n'est pas disponible pour Pierre ou Jean.\
\
Pierre recevra alors sa meilleure option restante.\
\
---\
\
## Lorsque Michel est absent\
\
Le local 120 redevient disponible.\
\
Pierre, ayant la priorit\'e9 la plus \'e9lev\'e9e parmi les consommateurs restants, recevra normalement le local 120.\
\
Jean recevra ensuite la meilleure ressource disponible selon ses pr\'e9f\'e9rences.\
\
---\
\
# Diff\'e9rence entre priorit\'e9 et pr\'e9f\'e9rence\
\
## La priorit\'e9 d\'e9termine l'ordre\
\
La priorit\'e9 r\'e9pond \'e0 la question :\
\
> Qui est \'e9valu\'e9 en premier ?\
\
---\
\
## La pr\'e9f\'e9rence d\'e9termine le choix\
\
La pr\'e9f\'e9rence r\'e9pond \'e0 la question :\
\
> Quel local doit \'eatre attribu\'e9 en priorit\'e9 ?\
\
---\
\
## Utilisation combin\'e9e\
\
Team2Book applique d'abord :\
\
1. les priorit\'e9s;\
2. puis les pr\'e9f\'e9rences.\
\
Cette combinaison permet d'obtenir des r\'e9sultats coh\'e9rents et pr\'e9visibles.\
\
---\
\
# Pourquoi utiliser les priorit\'e9s ?\
\
## Respect des exigences organisationnelles\
\
Certaines organisations doivent garantir des ressources \'e0 :\
\
- certains m\'e9decins;\
- certains propri\'e9taires;\
- certains professionnels sp\'e9cialis\'e9s;\
- certains r\'f4les critiques.\
\
---\
\
## Gestion transparente\
\
Les priorit\'e9s fournissent un cadre clair pour l'attribution des ressources.\
\
---\
\
# Pourquoi utiliser les pr\'e9f\'e9rences ?\
\
## Am\'e9lioration de la satisfaction\
\
Les professionnels peuvent indiquer les ressources qu'ils pr\'e9f\'e8rent utiliser.\
\
---\
\
## Meilleur jumelage\
\
Certaines ressources sont mieux adapt\'e9es \'e0 certaines pratiques ou habitudes de travail.\
\
---\
\
## R\'e9duction du travail manuel\
\
Le syst\'e8me effectue automatiquement les choix lorsqu'il existe plusieurs options disponibles.\
\
---\
\
# Bonnes pratiques\
\
## R\'e9server uniquement les ressources n\'e9cessaires\
\
Un trop grand nombre de ressources r\'e9serv\'e9es r\'e9duit la flexibilit\'e9 du syst\'e8me.\
\
---\
\
## Maintenir une structure simple\
\
Une hi\'e9rarchie de priorit\'e9s simple est g\'e9n\'e9ralement plus facile \'e0 g\'e9rer.\
\
---\
\
## D\'e9finir plusieurs pr\'e9f\'e9rences\
\
Plus la liste de pr\'e9f\'e9rences est compl\'e8te, plus Team2Book dispose de flexibilit\'e9.\
\
---\
\
## R\'e9viser p\'e9riodiquement les pr\'e9f\'e9rences\
\
Les besoins des professionnels peuvent \'e9voluer avec le temps.\
\
---\
\
# Logique globale d'attribution\
\
L'attribution des ressources suit g\'e9n\'e9ralement la s\'e9quence suivante :\
\
1. V\'e9rifier les disponibilit\'e9s.\
2. \'c9valuer les priorit\'e9s.\
3. Attribuer les ressources r\'e9serv\'e9es.\
4. Consulter les pr\'e9f\'e9rences.\
5. Assigner la meilleure ressource disponible.\
6. R\'e9p\'e9ter pour le consommateur suivant.\
\
---\
\
# Avantages du mod\'e8le\
\
La combinaison des priorit\'e9s et des pr\'e9f\'e9rences permet :\
\
- d'assurer des acc\'e8s privil\'e9gi\'e9s lorsque requis;\
- d'augmenter la satisfaction des utilisateurs;\
- de r\'e9duire les interventions manuelles;\
- d'am\'e9liorer l'utilisation des locaux.\
\
---\
\
# R\'e9sum\'e9\
\
Team2Book utilise deux m\'e9canismes compl\'e9mentaires pour attribuer les ressources.\
\
## Priorit\'e9s\
\
Les priorit\'e9s d\'e9terminent :\
\
- l'ordre d'attribution;\
- l'acc\'e8s aux ressources r\'e9serv\'e9es;\
- les privil\'e8ges organisationnels.\
\
---\
\
## Pr\'e9f\'e9rences\
\
Les pr\'e9f\'e9rences d\'e9terminent :\
\
- l'ordre souhait\'e9 des bureaux;\
- les ressources pr\'e9f\'e9r\'e9es;\
- les choix effectu\'e9s lorsqu'il existe plusieurs options.\
\
En combinant priorit\'e9s et pr\'e9f\'e9rences, Team2Book est capable d'\'e9quilibrer les besoins de l'organisation avec ceux des professionnels tout en optimisant l'utilisation des ressources disponibles.\
}