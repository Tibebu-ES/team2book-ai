{\rtf1\ansi\ansicpg1252\cocoartf2870
\cocoatextscaling0\cocoaplatform0{\fonttbl\f0\froman\fcharset0 Times-Roman;}
{\colortbl;\red255\green255\blue255;\red0\green0\blue0;}
{\*\expandedcolortbl;;\cssrgb\c0\c0\c0;}
\margl1440\margr1440\vieww11520\viewh8400\viewkind0
\deftab720
\pard\pardeftab720\partightenfactor0

\f0\fs24 \cf0 \expnd0\expndtw0\kerning0
\outl0\strokewidth0 \strokec2 ---\
chunk_id: guide_configuration_13\
title: Param\'e8tres - Onglet \'c9v\'e9nements\
category: configuration\
role:\
- gestionnaire\
keywords:\
- param\'e8tres\
- \'e9v\'e9nements\
- \'e9v\'e9nements sp\'e9ciaux\
- ciblage d'\'e9v\'e9nements\
- \'e9v\'e9nements li\'e9s\
- disponibilit\'e9\
- ressources\
- assignation\
source: Guide de configuration Team2Book v1.0\
prerequis:\
- guide_configuration_10\
- guide_configuration_12\
---\
\
# Param\'e8tres - Onglet \'c9v\'e9nements\
\
## Objectif\
\
L'onglet **\'c9v\'e9nements** regroupe les param\'e8tres qui contr\'f4lent le comportement des \'e9v\'e9nements r\'e9guliers et des \'e9v\'e9nements sp\'e9ciaux dans Team2Book.\
\
Ces param\'e8tres permettent notamment :\
\
- d'activer certaines fonctionnalit\'e9s;\
- de contr\'f4ler les \'e9v\'e9nements sp\'e9ciaux;\
- de personnaliser les affectations;\
- d'am\'e9liorer la coordination entre les consommateurs et les ressources.\
\
---\
\
# Activer les \'e9v\'e9nements sp\'e9ciaux\
\
## Description\
\
Ce param\'e8tre permet d'activer le module des \'e9v\'e9nements sp\'e9ciaux.\
\
Lorsque cette fonction est activ\'e9e, Team2Book permet :\
\
- la cr\'e9ation d'\'e9v\'e9nements sp\'e9ciaux;\
- l'attribution de consommateurs \'e0 des t\'e2ches sp\'e9cifiques;\
- la gestion des gardes;\
- la planification d'activit\'e9s sp\'e9ciales.\
\
---\
\
## Exemples d'\'e9v\'e9nements sp\'e9ciaux\
\
- Garde de soir\
- Clinique sans rendez-vous\
- Urgence\
- Fin de semaine\
- Permanence\
- Quart de travail sp\'e9cialis\'e9\
\
---\
\
## Recommandation\
\
Activer cette fonctionnalit\'e9 uniquement si l'organisation utilise r\'e9ellement des \'e9v\'e9nements sp\'e9ciaux.\
\
---\
\
# Planifier des \'e9v\'e9nements sp\'e9ciaux les jours de fermeture\
\
## Description\
\
Ce param\'e8tre permet l'utilisation d'\'e9v\'e9nements sp\'e9ciaux durant les journ\'e9es o\'f9 l'organisation est normalement ferm\'e9e.\
\
---\
\
## Exemples\
\
M\'eame lorsqu'une clinique est ferm\'e9e :\
\
- le samedi;\
- le dimanche;\
- un jour f\'e9ri\'e9;\
\
des \'e9v\'e9nements sp\'e9ciaux peuvent continuer d'\'eatre planifi\'e9s.\
\
---\
\
## Cas d'utilisation\
\
Cette option est particuli\'e8rement utile pour :\
\
- les gardes;\
- les urgences;\
- les activit\'e9s de fin de semaine;\
- les cliniques sp\'e9ciales.\
\
---\
\
# V\'e9rifier la disponibilit\'e9 des consommateurs les jours de fermeture\
\
## Description\
\
Ce param\'e8tre permet au syst\'e8me de v\'e9rifier si les consommateurs affect\'e9s durant une journ\'e9e de fermeture sont r\'e9ellement disponibles.\
\
---\
\
## Objectif\
\
Pr\'e9venir certaines affectations probl\'e9matiques.\
\
---\
\
## Exemple\
\
Si un professionnel est affect\'e9 \'e0 une garde de fin de semaine alors qu'il n'est pas disponible, Team2Book peut signaler cette situation.\
\
---\
\
# Consommateurs pouvant \'eatre affect\'e9s \'e0 des \'e9v\'e9nements sp\'e9ciaux\
\
## Description\
\
Cette liste d\'e9termine quels consommateurs sont admissibles aux \'e9v\'e9nements sp\'e9ciaux.\
\
---\
\
## Utilit\'e9\
\
Lorsqu'un consommateur ne fait pas partie de cette liste :\
\
- il ne peut pas \'eatre affect\'e9;\
- il n'appara\'eet pas dans certaines listes d'attribution.\
\
---\
\
## Exemple\
\
Une organisation peut autoriser :\
\
- tous les m\'e9decins;\
- certaines infirmi\'e8res;\
\
et exclure :\
\
- les pharmaciens;\
- le personnel administratif.\
\
---\
\
# Ciblage d'\'e9v\'e9nements\
\
## Description\
\
Cette fonctionnalit\'e9 permet de d\'e9terminer \'e0 quels types d'\'e9v\'e9nements une disponibilit\'e9 s'applique.\
\
---\
\
## Possibilit\'e9s\
\
Une disponibilit\'e9 peut \'eatre utilis\'e9e pour :\
\
- les \'e9v\'e9nements r\'e9guliers;\
- les \'e9v\'e9nements sp\'e9ciaux;\
- les deux types d'\'e9v\'e9nements.\
\
---\
\
## Avantages\
\
Cette option offre davantage de contr\'f4le sur l'utilisation des disponibilit\'e9s.\
\
---\
\
## Exemple\
\
Un consommateur pourrait :\
\
- accepter les \'e9v\'e9nements r\'e9guliers;\
- refuser certaines gardes sp\'e9ciales.\
\
---\
\
# \'c9v\'e9nements li\'e9s\
\
## Description\
\
Les \'e9v\'e9nements li\'e9s permettent d'affecter plusieurs consommateurs simultan\'e9ment \'e0 une m\'eame activit\'e9.\
\
---\
\
## Exemple\
\
Une activit\'e9 n\'e9cessite :\
\
- un m\'e9decin;\
- une infirmi\'e8re.\
\
Les deux affectations peuvent \'eatre li\'e9es ensemble.\
\
---\
\
## Avantages\
\
Cette fonctionnalit\'e9 am\'e9liore :\
\
- la coordination;\
- la synchronisation des horaires;\
- la gestion des \'e9quipes de travail.\
\
---\
\
## V\'e9rification des ressources\
\
Lorsqu'un \'e9v\'e9nement li\'e9 est cr\'e9\'e9, Team2Book peut v\'e9rifier si les ressources n\'e9cessaires sont disponibles pour tous les participants.\
\
---\
\
# Champ Description\
\
## Description\
\
Ce param\'e8tre active l'affichage d'un champ personnalis\'e9 nomm\'e9 :\
\
**Description**\
\
dans les \'e9v\'e9nements.\
\
---\
\
## Utilisation\
\
Le champ Description peut \'eatre utilis\'e9 pour :\
\
- ajouter des notes;\
- documenter certaines situations;\
- conserver des informations compl\'e9mentaires.\
\
---\
\
## Exemples\
\
- d\'e9tails d'une garde;\
- instructions particuli\'e8res;\
- commentaires administratifs.\
\
---\
\
# Titre de l'\'e9v\'e9nement\
\
## Description\
\
Ce param\'e8tre contr\'f4le le contenu du titre affich\'e9 pour les \'e9v\'e9nements.\
\
---\
\
## Option disponible\
\
Inclure automatiquement le nom de la ressource dans le titre.\
\
---\
\
## Exemple\
\
Sans cette option :\
\
```text\
Dr Tremblay\
```\
\
Avec cette option :\
\
```text\
Dr Tremblay - Bureau 3\
```\
\
---\
\
## Avantages\
\
Cette approche :\
\
- am\'e9liore la lisibilit\'e9;\
- facilite les recherches;\
- simplifie la consultation de Teamup.\
\
---\
\
# Quand utiliser ces param\'e8tres ?\
\
## Petite organisation\
\
Les param\'e8tres par d\'e9faut sont g\'e9n\'e9ralement suffisants.\
\
---\
\
## Organisation avec gardes\
\
Il est fortement recommand\'e9 d'activer :\
\
- les \'e9v\'e9nements sp\'e9ciaux;\
- les consommateurs admissibles;\
- les v\'e9rifications de disponibilit\'e9.\
\
---\
\
## Organisation utilisant le travail d'\'e9quipe\
\
Les \'e9v\'e9nements li\'e9s peuvent offrir un avantage important lorsque plusieurs professionnels doivent travailler ensemble.\
\
---\
\
# Bonnes pratiques\
\
## Limiter les \'e9v\'e9nements sp\'e9ciaux aux besoins r\'e9els\
\
Plus les \'e9v\'e9nements sp\'e9ciaux sont nombreux, plus leur gestion devient complexe.\
\
---\
\
## D\'e9finir clairement les consommateurs admissibles\
\
Maintenir une liste coh\'e9rente r\'e9duit les erreurs d'affectation.\
\
---\
\
## Tester les \'e9v\'e9nements li\'e9s avant le d\'e9ploiement\
\
Cette fonctionnalit\'e9 modifie la logique de planification et m\'e9rite une validation pr\'e9alable.\
\
---\
\
## Standardiser les descriptions\
\
Lorsque le champ Description est utilis\'e9, adopter une convention uniforme facilite les recherches futures.\
\
---\
\
# Impact sur le planificateur\
\
Les param\'e8tres de cet onglet influencent directement :\
\
- les \'e9v\'e9nements sp\'e9ciaux;\
- les v\'e9rifications de disponibilit\'e9;\
- les affectations automatiques;\
- certaines r\'e8gles de coordination entre consommateurs.\
\
Le gestionnaire devrait donc valider soigneusement ces param\'e8tres avant leur d\'e9ploiement \'e0 grande \'e9chelle.\
\
---\
\
# R\'e9sultat attendu\
\
\'c0 la fin de cette configuration :\
\
- les \'e9v\'e9nements sp\'e9ciaux sont configur\'e9s selon les besoins de l'organisation;\
- les consommateurs admissibles sont identifi\'e9s;\
- les \'e9v\'e9nements li\'e9s sont activ\'e9s au besoin;\
- les informations compl\'e9mentaires peuvent \'eatre affich\'e9es;\
- l'environnement de planification est adapt\'e9 aux r\'e9alit\'e9s op\'e9rationnelles.\
\
---\
\
# R\'e9sum\'e9\
\
L'onglet **\'c9v\'e9nements** permet de contr\'f4ler plusieurs fonctionnalit\'e9s importantes de Team2Book :\
\
1. activation des \'e9v\'e9nements sp\'e9ciaux;\
2. utilisation des \'e9v\'e9nements lors des jours de fermeture;\
3. v\'e9rification des disponibilit\'e9s;\
4. s\'e9lection des consommateurs admissibles;\
5. ciblage des \'e9v\'e9nements;\
6. \'e9v\'e9nements li\'e9s;\
7. champ Description;\
8. personnalisation des titres d'\'e9v\'e9nements.\
\
Ces param\'e8tres constituent la base de la gestion avanc\'e9e des \'e9v\'e9nements dans Team2Book.\
}