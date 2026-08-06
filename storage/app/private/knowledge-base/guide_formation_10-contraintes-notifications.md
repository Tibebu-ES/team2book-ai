{\rtf1\ansi\ansicpg1252\cocoartf2870
\cocoatextscaling0\cocoaplatform0{\fonttbl\f0\froman\fcharset0 Times-Roman;}
{\colortbl;\red255\green255\blue255;\red0\green0\blue0;}
{\*\expandedcolortbl;;\cssrgb\c0\c0\c0;}
\margl1440\margr1440\vieww11520\viewh8400\viewkind0
\deftab720
\pard\pardeftab720\partightenfactor0

\f0\fs24 \cf0 \expnd0\expndtw0\kerning0
\outl0\strokewidth0 \strokec2 ---\
chunk_id: guide_formation_10-contraintes-notifications\
title: Contraintes, notifications et surveillance de la planification\
category: administration\
role:\
- gestionnaire\
keywords:\
- contraintes\
- notifications\
- planificateur\
- planificateur complet\
- alertes\
- supervision\
- erreurs\
- surveillance\
source: Guide de formation Team2Book v1.0\
prerequis:\
- t2b-006-gestionnaire-module1\
- t2b-008-gestionnaire-module-2-configuration\
- t2b-009-gestionnaire-module-3-evenements-speciaux\
---\
\
# Contraintes et notifications dans Team2Book\
\
## Objectif\
\
Les contraintes et les notifications permettent au gestionnaire de s'assurer que la planification produite par Team2Book respecte les besoins r\'e9els de l'organisation.\
\
Contrairement \'e0 l'attribution des ressources, qui vise \'e0 trouver la meilleure affectation possible, les contraintes servent \'e0 valider si le r\'e9sultat obtenu r\'e9pond aux exigences op\'e9rationnelles.\
\
---\
\
# Comprendre les contraintes\
\
## D\'e9finition\
\
Une contrainte repr\'e9sente une r\'e8gle que l'organisation souhaite respecter pendant la planification.\
\
Une contrainte peut \'eatre utilis\'e9e pour imposer :\
\
- un nombre minimal de professionnels ;\
- une couverture minimale d'un service ;\
- la pr\'e9sence obligatoire de certains r\'f4les ;\
- des exigences particuli\'e8res propres \'e0 l'organisation.\
\
---\
\
# Pourquoi utiliser les contraintes ?\
\
Sans contraintes, le planificateur attribue les ressources en fonction :\
\
- des disponibilit\'e9s ;\
- des ressources ;\
- des priorit\'e9s ;\
- des pr\'e9f\'e9rences.\
\
Toutefois, certaines organisations doivent garantir des seuils minimaux d'effectifs.\
\
Les contraintes servent \'e0 v\'e9rifier automatiquement le respect de ces exigences.\
\
---\
\
# Exemples de contraintes\
\
## Couverture minimale le matin\
\
Exemple :\
\
- minimum de 3 m\'e9decins pr\'e9sents chaque matin.\
\
---\
\
## Couverture minimale l'apr\'e8s-midi\
\
Exemple :\
\
- minimum de 5 m\'e9decins disponibles en apr\'e8s-midi.\
\
---\
\
## Couverture d'un service sp\'e9cifique\
\
Exemple :\
\
- toujours maintenir au moins un m\'e9decin affect\'e9 \'e0 un secteur donn\'e9.\
\
---\
\
## Exigence organisationnelle\
\
Exemple :\
\
- maintenir un certain nombre de professionnels dans un site particulier.\
\
---\
\
# Cr\'e9ation d'une contrainte\
\
## Proc\'e9dure g\'e9n\'e9rale\
\
Pour cr\'e9er une contrainte :\
\
1. Ouvrir la section **Contraintes**.\
2. S\'e9lectionner **Ajouter**.\
3. D\'e9finir la r\'e8gle d\'e9sir\'e9e.\
4. D\'e9terminer les param\'e8tres applicables.\
5. Enregistrer.\
\
---\
\
## Choix des valeurs\
\
Il est recommand\'e9 de d\'e9finir des valeurs r\'e9alistes qui refl\'e8tent la r\'e9alit\'e9 op\'e9rationnelle.\
\
Des exigences trop \'e9lev\'e9es peuvent produire de nombreux avertissements qui compliquent l'analyse.\
\
---\
\
# Validation des contraintes\
\
## \'c9tape importante\
\
Apr\'e8s avoir ajout\'e9 une contrainte, il est recommand\'e9 d'ex\'e9cuter le planificateur complet.\
\
Cette op\'e9ration permet :\
\
- de recalculer les affectations ;\
- d'analyser les contraintes ;\
- de mettre \'e0 jour les notifications ;\
- de d\'e9tecter les probl\'e8mes.\
\
---\
\
# Planificateur r\'e9gulier\
\
## Fonction du planificateur r\'e9gulier\
\
Le planificateur r\'e9gulier :\
\
- attribue les ressources ;\
- met \'e0 jour les affectations ;\
- applique les r\'e8gles de planification.\
\
---\
\
## Limites\
\
Le planificateur r\'e9gulier ne r\'e9alise pas n\'e9cessairement toutes les analyses avanc\'e9es li\'e9es aux contraintes et aux notifications.\
\
---\
\
# Planificateur complet\
\
## Fonction du planificateur complet\
\
Le planificateur complet r\'e9alise toutes les op\'e9rations du planificateur r\'e9gulier et ajoute plusieurs analyses suppl\'e9mentaires.\
\
---\
\
## Op\'e9rations suppl\'e9mentaires\
\
Le planificateur complet permet notamment :\
\
- la mise \'e0 jour des notifications ;\
- la liste des probl\'e8mes d\'e9tect\'e9s ;\
- la validation des contraintes ;\
- l'analyse compl\'e8te de la planification.\
\
---\
\
## Quand l'utiliser ?\
\
Il est recommand\'e9 de lancer le planificateur complet :\
\
- apr\'e8s la cr\'e9ation d'une contrainte ;\
- apr\'e8s des modifications importantes ;\
- avant de v\'e9rifier les alertes ;\
- lors des audits de qualit\'e9 de la planification.\
\
---\
\
# Contraintes non respect\'e9es\
\
## D\'e9tection automatique\
\
Team2Book analyse automatiquement le r\'e9sultat de la planification.\
\
Lorsqu'une r\'e8gle d\'e9finie dans une contrainte n'est pas respect\'e9e, le syst\'e8me signale un probl\'e8me.\
\
---\
\
## Exemple typique\
\
Supposons qu'une organisation exige :\
\
- 5 m\'e9decins en apr\'e8s-midi.\
\
Si seulement 3 m\'e9decins sont disponibles :\
\
- Team2Book d\'e9tecte la situation ;\
- une alerte est produite ;\
- la contrainte appara\'eet comme non respect\'e9e.\
\
---\
\
# Interpr\'e9tation des r\'e9sultats\
\
## Pr\'e9sence d'une alerte\
\
Une alerte n'indique pas n\'e9cessairement une erreur de configuration.\
\
Elle signifie simplement que les r\'e8gles d\'e9finies ne peuvent pas \'eatre satisfaites avec les informations actuellement disponibles.\
\
---\
\
## Causes possibles\
\
Parmi les causes fr\'e9quentes :\
\
- manque de disponibilit\'e9s ;\
- absences ;\
- vacances ;\
- trop peu de ressources ;\
- contraintes trop exigeantes ;\
- erreurs de saisie.\
\
---\
\
# Analyse des contraintes non respect\'e9es\
\
## R\'f4le du gestionnaire\
\
Le gestionnaire doit analyser chaque situation afin de comprendre :\
\
- pourquoi l'alerte existe ;\
- quelles donn\'e9es sont impliqu\'e9es ;\
- quelles actions doivent \'eatre prises.\
\
---\
\
## Actions possibles\
\
Le gestionnaire peut :\
\
- modifier les disponibilit\'e9s ;\
- ajuster les affectations ;\
- revoir certaines contraintes ;\
- demander une intervention de l'\'e9quipe concern\'e9e.\
\
---\
\
# Modification d'une contrainte\
\
## Quand modifier une contrainte ?\
\
Une contrainte doit \'eatre modifi\'e9e lorsque :\
\
- les besoins changent ;\
- l'organisation \'e9volue ;\
- les exigences initiales ne sont plus valides.\
\
---\
\
## Exemples\
\
Une organisation peut :\
\
- augmenter le nombre minimal requis ;\
- diminuer temporairement certaines exigences ;\
- ajouter de nouvelles r\'e8gles.\
\
---\
\
# Suppression d'une contrainte\
\
## Quand supprimer une contrainte ?\
\
Une contrainte peut \'eatre retir\'e9e lorsqu'elle :\
\
- n'est plus utile ;\
- produit des alertes inutiles ;\
- ne correspond plus \'e0 la r\'e9alit\'e9 op\'e9rationnelle.\
\
---\
\
## Recommandation\
\
Avant de supprimer une contrainte, il est recommand\'e9 de valider la d\'e9cision aupr\'e8s des responsables concern\'e9s.\
\
---\
\
# Comprendre les notifications\
\
## D\'e9finition\
\
Les notifications sont des messages produits ou transmis par Team2Book afin de communiquer certaines informations aux utilisateurs.\
\
---\
\
# Objectifs des notifications\
\
Les notifications servent principalement \'e0 :\
\
- informer ;\
- rappeler ;\
- avertir ;\
- soutenir les op\'e9rations.\
\
---\
\
# Types de notifications\
\
## Rappels\
\
Exemples :\
\
- saisie des disponibilit\'e9s ;\
- \'e9ch\'e9ances ;\
- activit\'e9s \'e0 compl\'e9ter.\
\
---\
\
## Messages d'information\
\
Exemples :\
\
- rappels administratifs ;\
- soutien \'e0 la formation ;\
- communications organisationnelles.\
\
---\
\
## Avertissements\
\
Exemples :\
\
- contraintes non respect\'e9es ;\
- probl\'e8mes de planification ;\
- cas n\'e9cessitant une intervention.\
\
---\
\
# Personnalisation des notifications\
\
## Flexibilit\'e9\
\
Le gestionnaire peut adapter certaines notifications selon les besoins de son organisation.\
\
---\
\
## Contenus recommand\'e9s\
\
Plusieurs organisations ajoutent :\
\
- des instructions ;\
- des proc\'e9dures ;\
- des liens vers des tutoriels ;\
- des rappels de bonnes pratiques.\
\
---\
\
# Exemple de notification mensuelle\
\
Une notification p\'e9riodique peut rappeler aux consommateurs :\
\
- de saisir leurs disponibilit\'e9s ;\
- de v\'e9rifier leurs affectations ;\
- de consulter les tutoriels importants.\
\
---\
\
## Avantages\
\
Cette approche permet :\
\
- d'am\'e9liorer l'autonomie ;\
- de r\'e9duire les demandes de soutien ;\
- de diminuer les erreurs r\'e9p\'e9titives.\
\
---\
\
# Gestion proactive de la planification\
\
## Vision globale\
\
Les contraintes et notifications permettent de passer d'une gestion r\'e9active \'e0 une gestion proactive.\
\
Au lieu de d\'e9couvrir les probl\'e8mes apr\'e8s leur apparition, le gestionnaire est inform\'e9 \'e0 l'avance.\
\
---\
\
## B\'e9n\'e9fices\
\
Cette approche contribue \'e0 :\
\
- r\'e9duire les oublis ;\
- am\'e9liorer la couverture des services ;\
- maintenir une meilleure qualit\'e9 d'horaire ;\
- simplifier le travail administratif.\
\
---\
\
# Bonnes pratiques\
\
## V\'e9rifier r\'e9guli\'e8rement les contraintes\
\
Il est recommand\'e9 de consulter r\'e9guli\'e8rement :\
\
- les contraintes actives ;\
- les contraintes non respect\'e9es ;\
- les nouvelles alertes.\
\
---\
\
## Ex\'e9cuter p\'e9riodiquement le planificateur complet\
\
Le planificateur complet permet d'obtenir une vue plus exacte de la situation.\
\
---\
\
## Maintenir des notifications \'e0 jour\
\
Les messages transmis aux utilisateurs doivent \'eatre revus r\'e9guli\'e8rement afin de demeurer pertinents.\
\
---\
\
## \'c9viter les contraintes excessives\
\
Un trop grand nombre de contraintes ou des contraintes irr\'e9alistes peuvent g\'e9n\'e9rer des alertes inutiles.\
\
---\
\
# R\'e9sum\'e9\
\
Les contraintes permettent \'e0 Team2Book de v\'e9rifier si la planification satisfait les besoins de l'organisation.\
\
Les notifications permettent d'informer les utilisateurs et les gestionnaires des actions \'e0 entreprendre.\
\
Le planificateur complet joue un r\'f4le central puisqu'il :\
\
1. met \'e0 jour les affectations ;\
2. \'e9value les contraintes ;\
3. g\'e9n\'e8re les alertes ;\
4. met \'e0 jour les notifications ;\
5. aide le gestionnaire \'e0 surveiller la qualit\'e9 de la planification.\
\
Une bonne utilisation de ces outils permet de d\'e9tecter rapidement les probl\'e8mes et d'assurer une planification plus fiable.\
}