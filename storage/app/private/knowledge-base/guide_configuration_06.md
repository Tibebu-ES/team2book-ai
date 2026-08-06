{\rtf1\ansi\ansicpg1252\cocoartf2870
\cocoatextscaling0\cocoaplatform0{\fonttbl\f0\froman\fcharset0 Times-Roman;}
{\colortbl;\red255\green255\blue255;\red0\green0\blue0;}
{\*\expandedcolortbl;;\cssrgb\c0\c0\c0;}
\margl1440\margr1440\vieww11520\viewh8400\viewkind0
\deftab720
\pard\pardeftab720\partightenfactor0

\f0\fs24 \cf0 \expnd0\expndtw0\kerning0
\outl0\strokewidth0 \strokec2 ---\
chunk_id: guide_configuration_06\
title: Priorit\'e9s des consommateurs et pr\'e9f\'e9rences de ressources\
category: configuration\
role:\
- gestionnaire\
keywords:\
- priorit\'e9\
- pr\'e9f\'e9rences\
- consommateurs\
- bureaux\
- ressources\
- attribution\
- planificateur\
- ressources r\'e9serv\'e9es\
source: Guide de configuration Team2Book v1.0\
---\
\
# Configuration #6 - Priorit\'e9 des consommateurs\
\
## Objectif\
\
Les priorit\'e9s permettent \'e0 Team2Book de d\'e9terminer l'ordre dans lequel les ressources sont attribu\'e9es aux consommateurs.\
\
Le concept de priorit\'e9 ne repr\'e9sente pas l'importance d'un employ\'e9 ou d'un professionnel dans l'organisation.\
\
Dans Team2Book, la priorit\'e9 repr\'e9sente uniquement l'ordre utilis\'e9 lors de l'attribution des ressources.\
\
---\
\
# Comment fonctionne la priorit\'e9 ?\
\
Chaque consommateur re\'e7oit une priorit\'e9 de :\
\
- 1 \'e0 10\
\
o\'f9 :\
\
- 1 est la priorit\'e9 la plus \'e9lev\'e9e;\
- 10 est la priorit\'e9 la plus faible.\
\
Lorsqu'il existe un nombre limit\'e9 de ressources disponibles, Team2Book attribue d'abord les ressources aux consommateurs ayant les priorit\'e9s les plus \'e9lev\'e9es.\
\
---\
\
# Particularit\'e9 de la priorit\'e9 1\
\
## Ressource r\'e9serv\'e9e\
\
La priorit\'e9 1 poss\'e8de un comportement sp\'e9cial.\
\
Lorsqu'un consommateur poss\'e8de une priorit\'e9 1, une ressource sp\'e9cifique lui est r\'e9serv\'e9e.\
\
---\
\
## Fonctionnement\
\
Lorsque le consommateur est disponible :\
\
- la ressource r\'e9serv\'e9e lui est automatiquement attribu\'e9e.\
\
Lorsque le consommateur est absent :\
\
- la ressource peut \'eatre utilis\'e9e par un autre consommateur.\
\
---\
\
## Exemple\
\
Supposons :\
\
- Dr Tremblay\
- Priorit\'e9 1\
- Ressource r\'e9serv\'e9e : Bureau 1\
\
Si Dr Tremblay travaille :\
\
- Bureau 1 lui est automatiquement attribu\'e9.\
\
Si Dr Tremblay est absent :\
\
- Bureau 1 peut \'eatre utilis\'e9 par d'autres utilisateurs.\
\
---\
\
# Priorit\'e9s 2 \'e0 10\
\
## Diff\'e9rence importante\
\
Pour les priorit\'e9s de 2 \'e0 10 :\
\
- aucune ressource n'est r\'e9serv\'e9e;\
- Team2Book utilise les pr\'e9f\'e9rences de ressources du consommateur.\
\
---\
\
## Fonctionnement g\'e9n\'e9ral\
\
Le syst\'e8me :\
\
1. analyse les consommateurs selon leur priorit\'e9;\
2. examine leurs pr\'e9f\'e9rences;\
3. attribue les ressources disponibles.\
\
---\
\
# Consommateurs ayant la m\'eame priorit\'e9\
\
## Cas d'\'e9galit\'e9\
\
Lorsque deux consommateurs poss\'e8dent la m\'eame priorit\'e9 :\
\
- Team2Book traite ces consommateurs au m\'eame niveau de priorit\'e9.\
\
---\
\
## Attribution\
\
Dans cette situation, Team2Book s\'e9lectionne un consommateur et tente de lui attribuer une ressource selon ses pr\'e9f\'e9rences.\
\
Cette approche contribue \'e0 maintenir une r\'e9partition \'e9quilibr\'e9e lorsque plusieurs utilisateurs partagent le m\'eame niveau de priorit\'e9.\
\
---\
\
# Exemple complet de priorit\'e9s\
\
## Contexte\
\
Une clinique poss\'e8de :\
\
- 6 professionnels;\
- 3 bureaux.\
\
Professionnels :\
\
- Dr Tremblay\
- Dr Gagnon\
- Dr Gervais\
- Serge Beaudoin (Infirmier)\
- Nathalie Boileau (Infirmi\'e8re)\
- Pauline Brunet (Pharmacienne)\
\
---\
\
## Objectif organisationnel\
\
La clinique souhaite :\
\
- r\'e9server un bureau aux propri\'e9taires;\
- privil\'e9gier les m\'e9decins;\
- ensuite les infirmi\'e8res;\
- puis le pharmacien.\
\
---\
\
## Priorit\'e9s configur\'e9es\
\
### Dr Tremblay\
\
- Priorit\'e9 1\
- Bureau r\'e9serv\'e9 : Bureau 1\
\
---\
\
### Dr Gagnon\
\
- Priorit\'e9 1\
- Bureau r\'e9serv\'e9 : Bureau 2\
\
---\
\
### Dr Gervais\
\
- Priorit\'e9 2\
- Utilisation des pr\'e9f\'e9rences de ressources\
\
---\
\
### Serge Beaudoin\
\
- Priorit\'e9 3\
- Utilisation des pr\'e9f\'e9rences de ressources\
\
---\
\
### Nathalie Boileau\
\
- Priorit\'e9 3\
- Utilisation des pr\'e9f\'e9rences de ressources\
\
---\
\
### Pauline Brunet\
\
- Priorit\'e9 4\
- Utilisation des pr\'e9f\'e9rences de ressources\
\
---\
\
## R\'e9sultat attendu\
\
Dans cette configuration :\
\
1. Dr Tremblay re\'e7oit Bureau 1.\
2. Dr Gagnon re\'e7oit Bureau 2.\
3. Dr Gervais obtient ensuite le meilleur bureau disponible.\
4. Les infirmi\'e8res sont trait\'e9es apr\'e8s les m\'e9decins.\
5. La pharmacienne est trait\'e9e en dernier.\
\
---\
\
# Pourquoi d\'e9finir les priorit\'e9s avant les consommateurs ?\
\
## Pr\'e9paration\
\
Avant d'ajouter les consommateurs, il est recommand\'e9 d'identifier :\
\
- les ressources r\'e9serv\'e9es;\
- les besoins particuliers;\
- les r\'e8gles organisationnelles.\
\
---\
\
## Avantage\
\
Cette r\'e9flexion facilite \'e9norm\'e9ment la cr\'e9ation des consommateurs lors de la Configuration #12.\
\
---\
\
# Bonnes pratiques pour les priorit\'e9s\
\
## Utiliser la priorit\'e9 1 avec mod\'e9ration\
\
Il est recommand\'e9 de limiter le nombre de consommateurs ayant une priorit\'e9 1.\
\
---\
\
## R\'e9server seulement les ressources v\'e9ritablement n\'e9cessaires\
\
Les ressources r\'e9serv\'e9es devraient \'eatre utilis\'e9es uniquement lorsqu'une justification op\'e9rationnelle existe.\
\
---\
\
## Cr\'e9er une hi\'e9rarchie simple\
\
Une structure simple est g\'e9n\'e9ralement plus facile \'e0 comprendre et \'e0 maintenir.\
\
---\
\
## Documenter les d\'e9cisions\
\
Conserver une note expliquant pourquoi certaines priorit\'e9s ont \'e9t\'e9 attribu\'e9es facilite la gestion future.\
\
---\
\
# Configuration #7 - Pr\'e9f\'e9rences de ressources\
\
## Objectif\
\
Les pr\'e9f\'e9rences de ressources permettent \'e0 Team2Book de conna\'eetre les ressources privil\'e9gi\'e9es par un consommateur.\
\
Ces pr\'e9f\'e9rences sont utilis\'e9es pour tous les consommateurs qui :\
\
- n'ont pas une ressource r\'e9serv\'e9e;\
- poss\'e8dent g\'e9n\'e9ralement une priorit\'e9 de 2 \'e0 10.\
\
---\
\
# Pourquoi utiliser les pr\'e9f\'e9rences ?\
\
Les pr\'e9f\'e9rences permettent :\
\
- d'am\'e9liorer la satisfaction des utilisateurs;\
- de respecter certaines contraintes pratiques;\
- de r\'e9duire les changements de bureaux;\
- de favoriser certaines habitudes de travail.\
\
---\
\
# Exemple simple\
\
Supposons qu'un professionnel pr\'e9f\'e8re travailler dans :\
\
1. Bureau 201\
2. Bureau 203\
3. Bureau 205\
\
Team2Book tentera d'attribuer les ressources dans cet ordre.\
\
---\
\
# D\'e9terminer les pr\'e9f\'e9rences\
\
## Inclure toutes les possibilit\'e9s r\'e9alistes\
\
La liste de pr\'e9f\'e9rences devrait inclure toutes les ressources qui peuvent raisonnablement \'eatre utilis\'e9es.\
\
---\
\
## \'c9liminer les ressources impossibles\
\
Certaines ressources ne devraient jamais appara\'eetre dans la liste.\
\
Exemples :\
\
- bureau sans \'e9quipement requis;\
- salle incompatible avec le type de pratique;\
- local non accessible.\
\
---\
\
# Exemple clinique\
\
Supposons que :\
\
- Bureau 3 ne poss\'e8de pas de table d'examen.\
\
Dans ce cas, un m\'e9decin n\'e9cessitant une table d'examen ne devrait pas avoir Bureau 3 dans ses pr\'e9f\'e9rences.\
\
---\
\
# Ordre des pr\'e9f\'e9rences\
\
## Importance\
\
L'ordre est essentiel.\
\
Le premier choix repr\'e9sente la ressource la plus d\'e9sir\'e9e.\
\
Le second choix repr\'e9sente l'alternative privil\'e9gi\'e9e.\
\
Et ainsi de suite.\
\
---\
\
## Exemple\
\
Pr\'e9f\'e9rences :\
\
1. Bureau 1\
2. Bureau 2\
3. Bureau 3\
\
Si Bureau 1 est disponible :\
\
- il sera normalement attribu\'e9.\
\
Si Bureau 1 est occup\'e9 :\
\
- Team2Book \'e9valuera Bureau 2.\
\
---\
\
# Interaction entre priorit\'e9s et pr\'e9f\'e9rences\
\
## Ordre d'analyse\
\
Team2Book applique g\'e9n\'e9ralement la logique suivante :\
\
1. Priorit\'e9 du consommateur.\
2. Ressource r\'e9serv\'e9e (si priorit\'e9 1).\
3. Pr\'e9f\'e9rences de ressources.\
4. Disponibilit\'e9 r\'e9elle des ressources.\
\
---\
\
## Cons\'e9quence\
\
Une pr\'e9f\'e9rence tr\'e8s \'e9lev\'e9e ne permet pas de contourner une priorit\'e9 plus \'e9lev\'e9e.\
\
Les priorit\'e9s demeurent toujours le premier m\'e9canisme d'attribution.\
\
---\
\
# Bonnes pratiques pour les pr\'e9f\'e9rences\
\
## Classer toutes les ressources pertinentes\
\
Plus la liste est compl\'e8te, plus Team2Book poss\'e8de de flexibilit\'e9.\
\
---\
\
## Garder un ordre logique\
\
Les pr\'e9f\'e9rences devraient correspondre aux besoins r\'e9els du consommateur.\
\
---\
\
## R\'e9viser p\'e9riodiquement\
\
Les pr\'e9f\'e9rences peuvent \'e9voluer :\
\
- nouveaux bureaux;\
- nouvelles \'e9quipes;\
- changements d'\'e9quipement;\
- nouvelles pratiques de travail.\
\
---\
\
## \'c9viter les pr\'e9f\'e9rences inutiles\
\
Une liste de pr\'e9f\'e9rences trop restrictive peut r\'e9duire inutilement les possibilit\'e9s d'attribution.\
\
---\
\
# R\'e9sultat attendu\
\
\'c0 la fin des Configurations #6 et #7 :\
\
- toutes les priorit\'e9s sont d\'e9finies;\
- les ressources r\'e9serv\'e9es sont identifi\'e9es;\
- les pr\'e9f\'e9rences sont document\'e9es;\
- les r\'e8gles d'attribution sont \'e9tablies;\
- l'organisation est pr\'eate pour la cr\'e9ation compl\'e8te des consommateurs.\
\
---\
\
# R\'e9sum\'e9\
\
Les priorit\'e9s d\'e9terminent l'ordre dans lequel Team2Book attribue les ressources.\
\
Les pr\'e9f\'e9rences d\'e9terminent quelles ressources un consommateur souhaite obtenir lorsqu'elles sont disponibles.\
\
Ensemble, ces deux m\'e9canismes permettent \'e0 Team2Book :\
\
1. d'appliquer les r\'e8gles de l'organisation;\
2. de respecter les besoins particuliers;\
3. d'optimiser l'utilisation des ressources;\
4. de produire des affectations coh\'e9rentes et pr\'e9visibles.\
}