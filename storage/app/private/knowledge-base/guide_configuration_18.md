{\rtf1\ansi\ansicpg1252\cocoartf2870
\cocoatextscaling0\cocoaplatform0{\fonttbl\f0\froman\fcharset0 Times-Roman;}
{\colortbl;\red255\green255\blue255;\red0\green0\blue0;}
{\*\expandedcolortbl;;\cssrgb\c0\c0\c0;}
\margl1440\margr1440\vieww11520\viewh8400\viewkind0
\deftab720
\pard\pardeftab720\partightenfactor0

\f0\fs24 \cf0 \expnd0\expndtw0\kerning0
\outl0\strokewidth0 \strokec2 ---\
chunk_id: guide_configuration_18\
title: Param\'e8tres - Onglet Seuils et conclusion de la configuration\
category: configuration\
role:\
- gestionnaire\
keywords:\
- seuils\
- ressources libres\
- disponibilit\'e9s\
- contraintes\
- planification partielle\
- tampon\
- tol\'e9rance\
- configuration\
source: Guide de configuration Team2Book v1.0\
prerequis:\
- guide_configuration_12\
---\
\
# Param\'e8tres - Onglet Seuils\
\
## Objectif\
\
L'onglet **Seuils** permet d'ajuster plusieurs param\'e8tres utilis\'e9s par le moteur de planification de Team2Book.\
\
Ces param\'e8tres influencent notamment :\
\
- l'affichage des ressources libres;\
- l'attribution des ressources;\
- l'analyse des contraintes;\
- la gestion des disponibilit\'e9s;\
- les d\'e9cisions du planificateur lorsqu'il existe plusieurs solutions possibles.\
\
Une bonne configuration des seuils permet d'adapter Team2Book \'e0 la r\'e9alit\'e9 op\'e9rationnelle de chaque organisation.\
\
---\
\
# Ignorer les ressources libres pour moins de X heures\
\
## Description\
\
Ce param\'e8tre d\'e9finit la dur\'e9e minimale pendant laquelle une ressource doit demeurer libre avant d'appara\'eetre dans la liste des ressources vacantes.\
\
---\
\
## Exemple\
\
Valeur :\
\
**1 heure**\
\
Si un bureau est libre pendant :\
\
- 15 minutes;\
- 30 minutes;\
- 45 minutes;\
\
il n'appara\'eetra pas comme ressource libre.\
\
---\
\
## Avantages\
\
Cette approche permet :\
\
- d'\'e9liminer les p\'e9riodes peu utiles;\
- de r\'e9duire le bruit visuel;\
- de mettre en \'e9vidence les v\'e9ritables opportunit\'e9s de r\'e9servation.\
\
---\
\
# Ignorer les consommateurs disponibles moins de X heures\
\
## Description\
\
Permet d'exclure certaines disponibilit\'e9s trop courtes de la planification.\
\
---\
\
## Exemple\
\
Valeur :\
\
**1 heure**\
\
Si un consommateur indique une disponibilit\'e9 de :\
\
- 30 minutes;\
\
aucune ressource ne lui sera attribu\'e9e.\
\
---\
\
## Objectif\
\
\'c9viter l'utilisation inefficace des ressources pour des p\'e9riodes tr\'e8s courtes.\
\
---\
\
## Avantages\
\
- Planification plus r\'e9aliste;\
- meilleure utilisation des locaux;\
- r\'e9duction des affectations peu utiles.\
\
---\
\
# \'c9cart minimal souhaitable entre deux \'e9v\'e9nements de ressources\
\
## Description\
\
Permet de d\'e9finir un d\'e9lai tampon souhaitable entre deux affectations successives d'une m\'eame ressource.\
\
---\
\
## Objectif\
\
R\'e9duire les changements imm\'e9diats entre deux utilisateurs.\
\
---\
\
## Exemple\
\
Une organisation peut souhaiter pr\'e9voir du temps pour :\
\
- le nettoyage;\
- la pr\'e9paration d'une salle;\
- les d\'e9placements;\
- l'installation d'\'e9quipement.\
\
---\
\
## B\'e9n\'e9fices\
\
Cette marge r\'e9duit les risques de conflits op\'e9rationnels.\
\
---\
\
# Tol\'e9rance des contraintes - Matin\
\
## Description\
\
Permet de d\'e9terminer la flexibilit\'e9 appliqu\'e9e aux contraintes \'e9valu\'e9es durant la p\'e9riode du matin.\
\
---\
\
## Fonctionnement\
\
Lorsqu'un consommateur est disponible pendant la majeure partie de la p\'e9riode cibl\'e9e, Team2Book peut continuer \'e0 le consid\'e9rer pr\'e9sent malgr\'e9 de l\'e9gers \'e9carts horaires.\
\
---\
\
## Avantage\
\
R\'e9duit les fausses alertes lorsque les horaires ne correspondent pas exactement aux heures th\'e9oriques.\
\
---\
\
# Tol\'e9rance des contraintes - Apr\'e8s-midi\
\
## Description\
\
Fonctionne selon le m\'eame principe que la tol\'e9rance du matin.\
\
---\
\
## Objectif\
\
Ajouter une flexibilit\'e9 raisonnable lors de l'analyse des contraintes de l'apr\'e8s-midi.\
\
---\
\
## R\'e9sultat\
\
Davantage de r\'e9alisme dans l'\'e9valuation des pr\'e9sences.\
\
---\
\
# Tol\'e9rance des contraintes - Jour\
\
## Description\
\
Permet de g\'e9rer les contraintes \'e9valu\'e9es sur une journ\'e9e compl\'e8te.\
\
---\
\
## Utilit\'e9\
\
Certaines contraintes visent :\
\
- la pr\'e9sence quotidienne;\
- une couverture minimale;\
- un nombre de professionnels disponibles.\
\
---\
\
## Avantage\
\
Cette tol\'e9rance \'e9vite qu'un l\'e9ger \'e9cart horaire provoque une alerte inutile.\
\
---\
\
# Pourquoi utiliser les tol\'e9rances ?\
\
## R\'e9alit\'e9 op\'e9rationnelle\
\
Dans la pratique, les horaires :\
\
- d\'e9butent rarement exactement \'e0 la m\'eame minute;\
- peuvent varier l\'e9g\'e8rement;\
- comportent parfois des impr\'e9cisions.\
\
---\
\
## R\'e9sultat\
\
Les tol\'e9rances permettent d'obtenir une \'e9valuation plus r\'e9aliste de la couverture de service.\
\
---\
\
# Seuil de planification partielle\
\
## Description\
\
Ce param\'e8tre aide Team2Book \'e0 choisir entre :\
\
- une planification partielle dans une seule ressource;\
- une planification plus compl\'e8te utilisant plusieurs ressources.\
\
---\
\
# Exemple\
\
## Contexte\
\
Un consommateur est disponible de :\
\
- 8h30 \'e0 16h30\
\
Aucune ressource n'est disponible pendant toute cette p\'e9riode.\
\
---\
\
## Solution 1\
\
Attribuer :\
\
- Bureau 1\
- de 8h30 \'e0 14h30\
\
Dur\'e9e couverte :\
\
- 6 heures\
\
---\
\
## Solution 2\
\
Attribuer :\
\
- Bureau 2 de 8h30 \'e0 12h30\
- Bureau 3 de 12h30 \'e0 16h00\
\
Dur\'e9e couverte :\
\
- 7,5 heures\
\
---\
\
# Influence du seuil\
\
## Seuil faible\
\
Le planificateur favorisera g\'e9n\'e9ralement la solution couvrant davantage d'heures.\
\
---\
\
## Seuil \'e9lev\'e9\
\
Le planificateur peut pr\'e9f\'e9rer une solution utilisant moins de ressources m\'eame si elle couvre l\'e9g\'e8rement moins de temps.\
\
---\
\
# Objectif\
\
Trouver un \'e9quilibre entre :\
\
- la stabilit\'e9 des affectations;\
- la couverture maximale;\
- la simplicit\'e9 op\'e9rationnelle.\
\
---\
\
# Quand ajuster les seuils ?\
\
## Apr\'e8s quelques semaines d'utilisation\
\
Il est recommand\'e9 de :\
\
1. observer le fonctionnement r\'e9el;\
2. analyser les r\'e9sultats du planificateur;\
3. ajuster progressivement les seuils.\
\
---\
\
## \'c9viter les changements excessifs\
\
Modifier plusieurs seuils simultan\'e9ment peut rendre l'analyse plus difficile.\
\
---\
\
# Bonnes pratiques\
\
## Commencer avec les valeurs par d\'e9faut\
\
Les param\'e8tres par d\'e9faut conviennent g\'e9n\'e9ralement \'e0 la majorit\'e9 des organisations.\
\
---\
\
## Ajuster selon les op\'e9rations r\'e9elles\
\
Les seuils devraient refl\'e9ter :\
\
- les habitudes de travail;\
- les contraintes physiques;\
- les objectifs de planification.\
\
---\
\
## R\'e9viser p\'e9riodiquement\
\
Les besoins de l'organisation \'e9voluent avec le temps.\
\
Une r\'e9vision r\'e9guli\'e8re permet de maintenir une configuration optimale.\
\
---\
\
## Tester avant les changements majeurs\
\
Apr\'e8s une modification importante :\
\
- surveiller les r\'e9sultats;\
- consulter les utilisateurs;\
- valider les impacts.\
\
---\
\
# V\'e9rification finale de la configuration\
\
Une fois les 18 configurations compl\'e9t\'e9es, il est recommand\'e9 de v\'e9rifier :\
\
## Ressources\
\
- Cat\'e9gories\
- Couleurs\
- Horaires\
- Disponibilit\'e9\
\
---\
\
## Consommateurs\
\
- R\'f4les\
- Priorit\'e9s\
- Pr\'e9f\'e9rences\
- Types de sous-calendriers\
\
---\
\
## \'c9v\'e9nements sp\'e9ciaux\
\
- Types d'\'e9v\'e9nements\
- Consommateurs admissibles\
- Param\'e8tres d'assignation\
\
---\
\
## Contraintes\
\
- Nombre minimal requis\
- Intervalles de temps\
- Tol\'e9rances\
\
---\
\
## Notifications\
\
- Messages personnalis\'e9s\
- Rappels\
- Variables\
\
---\
\
## Param\'e8tres avanc\'e9s\
\
- Ressources libres\
- Permissions\
- Sous-calendriers\
- Tableau de bord consommateur\
- Seuils\
\
---\
\
# Conclusion\
\
Une fois la configuration compl\'e9t\'e9e, Team2Book est pr\'eat \'e0 soutenir la planification des ressources et des utilisateurs de l'organisation.\
\
Le syst\'e8me permet alors :\
\
- l'attribution automatique des ressources;\
- la gestion des disponibilit\'e9s;\
- la gestion des \'e9v\'e9nements sp\'e9ciaux;\
- la surveillance des contraintes;\
- la production de statistiques;\
- l'automatisation de plusieurs t\'e2ches administratives.\
\
---\
\
# Support\
\
## Assistance\
\
Si une aide suppl\'e9mentaire est n\'e9cessaire, les gestionnaires peuvent communiquer avec l'\'e9quipe de soutien Team2Book.\
\
Le support peut notamment aider pour :\
\
- la configuration;\
- les ajustements avanc\'e9s;\
- les \'e9v\'e9nements sp\'e9ciaux;\
- les contraintes;\
- les meilleures pratiques d'utilisation.\
\
---\
\
# Am\'e9lioration continue\
\
La configuration initiale repr\'e9sente le point de d\'e9part.\
\
Les organisations sont encourag\'e9es \'e0 :\
\
- revoir p\'e9riodiquement leurs param\'e8tres;\
- ajuster leurs processus;\
- tirer profit des nouvelles fonctionnalit\'e9s;\
- optimiser continuellement leur utilisation de Team2Book.\
\
---\
\
# R\'e9sum\'e9\
\
L'onglet **Seuils** permet d'ajuster plusieurs m\'e9canismes influen\'e7ant directement la qualit\'e9 de la planification :\
\
1. ressources libres;\
2. disponibilit\'e9s minimales;\
3. d\'e9lais tampons;\
4. tol\'e9rances de contraintes;\
5. planification partielle.\
\
Avec cette derni\'e8re configuration, l'ensemble du Guide de configuration Team2Book est compl\'e9t\'e9.\
\
Les 18 configurations couvrent :\
\
1. l'environnement de base;\
2. les ressources;\
3. les consommateurs;\
4. les \'e9v\'e9nements sp\'e9ciaux;\
5. les contraintes;\
6. les notifications;\
7. les param\'e8tres avanc\'e9s.\
\
L'organisation dispose maintenant de toutes les connaissances n\'e9cessaires pour configurer, administrer et faire \'e9voluer efficacement son environnement Team2Book.\
}