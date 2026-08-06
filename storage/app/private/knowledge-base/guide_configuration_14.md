{\rtf1\ansi\ansicpg1252\cocoartf2870
\cocoatextscaling0\cocoaplatform0{\fonttbl\f0\froman\fcharset0 Times-Roman;}
{\colortbl;\red255\green255\blue255;\red0\green0\blue0;}
{\*\expandedcolortbl;;\cssrgb\c0\c0\c0;}
\margl1440\margr1440\vieww11520\viewh8400\viewkind0
\deftab720
\pard\pardeftab720\partightenfactor0

\f0\fs24 \cf0 \expnd0\expndtw0\kerning0
\outl0\strokewidth0 \strokec2 ---\
chunk_id: guide_configuration_14\
title: Param\'e8tres - Onglet Planificateur\
category: configuration\
role:\
- gestionnaire\
keywords:\
- planificateur\
- planification\
- d\'e9calage\
- notifications\
- gel des horaires\
- calendrier\
- attribuer ressources\
- automatisation\
source: Guide de configuration Team2Book v1.0\
prerequis:\
- guide_configuration_12\
---\
\
# Param\'e8tres - Onglet Planificateur\
\
## Objectif\
\
L'onglet **Planificateur** permet de contr\'f4ler le comportement du moteur de planification de Team2Book.\
\
Ces param\'e8tres influencent :\
\
- la p\'e9riode planifi\'e9e;\
- les notifications;\
- la g\'e9n\'e9ration des horaires;\
- la stabilit\'e9 des affectations;\
- l'automatisation de certaines op\'e9rations.\
\
Ils constituent une partie importante de la configuration globale du syst\'e8me.\
\
---\
\
# Nombre de mois \'e0 planifier\
\
## Description\
\
Ce param\'e8tre d\'e9finit le nombre de mois que Team2Book doit planifier automatiquement.\
\
La p\'e9riode s\'e9lectionn\'e9e inclut le mois en cours.\
\
---\
\
## Exemple\
\
Si la valeur est :\
\
**3 mois**\
\
Team2Book planifie :\
\
- le mois courant;\
- le mois suivant;\
- le troisi\'e8me mois \'e0 venir.\
\
---\
\
## Impact\
\
Plus le nombre de mois est \'e9lev\'e9 :\
\
- plus les affectations futures sont visibles;\
- plus les utilisateurs peuvent consulter leurs horaires \'e0 l'avance.\
\
---\
\
## Consid\'e9ration\
\
Une p\'e9riode trop longue peut toutefois rendre les ajustements futurs plus fr\'e9quents lorsque les disponibilit\'e9s changent.\
\
---\
\
# D\'e9calage (jours)\
\
## Description\
\
Le d\'e9calage d\'e9termine le moment o\'f9 Team2Book ajoute automatiquement une nouvelle p\'e9riode de planification.\
\
---\
\
## Exemple\
\
Valeur :\
\
**15**\
\
Cela signifie que le 15 de chaque mois, Team2Book planifie automatiquement un mois suppl\'e9mentaire.\
\
---\
\
## Objectif\
\
Maintenir en permanence un horizon de planification suffisant.\
\
---\
\
## Avantages\
\
Cette approche permet :\
\
- d'automatiser la cr\'e9ation des horaires;\
- de maintenir une visibilit\'e9 constante;\
- d'\'e9viter les p\'e9riodes non planifi\'e9es.\
\
---\
\
# Jour de notification\
\
## Description\
\
D\'e9termine la journ\'e9e du mois o\'f9 les consommateurs re\'e7oivent leur demande d'entr\'e9e de disponibilit\'e9s ou de non-disponibilit\'e9s.\
\
---\
\
## Objectif\
\
Inviter les utilisateurs \'e0 fournir leurs informations avant la prochaine p\'e9riode de planification.\
\
---\
\
## Importance\
\
Une notification transmise trop tard peut r\'e9duire la qualit\'e9 des horaires produits.\
\
---\
\
## Bonnes pratiques\
\
Choisir une date suffisamment t\'f4t afin de permettre aux consommateurs :\
\
- d'entrer leurs disponibilit\'e9s;\
- de les corriger au besoin;\
- de r\'e9pondre avant les rappels.\
\
---\
\
# Jour de notification de rappel\
\
## Description\
\
D\'e9termine le jour o\'f9 Team2Book transmet automatiquement un rappel aux utilisateurs qui n'ont pas encore compl\'e9t\'e9 leurs disponibilit\'e9s.\
\
---\
\
## Objectif\
\
R\'e9duire les oublis.\
\
---\
\
## Avantages\
\
Les rappels permettent :\
\
- d'obtenir davantage de disponibilit\'e9s;\
- d'am\'e9liorer la qualit\'e9 des donn\'e9es;\
- de r\'e9duire le travail administratif du gestionnaire.\
\
---\
\
# Relation entre les deux notifications\
\
## S\'e9quence typique\
\
1. Notification principale.\
2. Attente de la r\'e9ponse des consommateurs.\
3. Notification de rappel.\
\
---\
\
## R\'e9sultat\
\
Cette strat\'e9gie augmente g\'e9n\'e9ralement le taux de participation des utilisateurs.\
\
---\
\
# Nombre de jours pour geler les \'e9v\'e9nements de ressources\
\
## Description\
\
Ce param\'e8tre permet de surveiller les modifications de derni\'e8re minute apport\'e9es aux affectations.\
\
---\
\
## Fonctionnement\
\
Le gestionnaire d\'e9finit un nombre de jours.\
\
Exemple :\
\
**7 jours**\
\
---\
\
## Cons\'e9quence\
\
Lorsqu'une modification survient dans les sept prochains jours :\
\
- le syst\'e8me peut signaler la situation;\
- le gestionnaire peut \'eatre avis\'e9.\
\
---\
\
# Pourquoi utiliser le gel des horaires ?\
\
## Stabilit\'e9\
\
Cette fonction contribue \'e0 maintenir la stabilit\'e9 des horaires.\
\
---\
\
## R\'e9duction des surprises\
\
Les utilisateurs peuvent mieux planifier leurs activit\'e9s lorsque les changements de derni\'e8re minute sont surveill\'e9s.\
\
---\
\
## Gestion des risques\
\
Cette approche aide \'e0 identifier :\
\
- les modifications tardives;\
- les impacts op\'e9rationnels;\
- les ajustements urgents.\
\
---\
\
# Choisir une valeur appropri\'e9e\
\
## Petite organisation\
\
Une p\'e9riode courte est souvent suffisante.\
\
Exemple :\
\
- 3 jours;\
- 5 jours.\
\
---\
\
## Grande organisation\
\
Une p\'e9riode plus longue peut \'eatre utile.\
\
Exemples :\
\
- 7 jours;\
- 14 jours;\
- 30 jours.\
\
---\
\
## Facteurs \'e0 consid\'e9rer\
\
- stabilit\'e9 des horaires;\
- nombre d'utilisateurs;\
- fr\'e9quence des changements;\
- contraintes op\'e9rationnelles.\
\
---\
\
# Impact sur la planification\
\
Les param\'e8tres du planificateur influencent directement :\
\
- les ressources attribu\'e9es;\
- les p\'e9riodes visibles;\
- les notifications automatiques;\
- l'exp\'e9rience des consommateurs;\
- l'automatisation du syst\'e8me.\
\
---\
\
# Strat\'e9gie recommand\'e9e\
\
## D\'e9but d'implantation\
\
Utiliser des param\'e8tres simples :\
\
- horizon de planification mod\'e9r\'e9;\
- notifications standard;\
- p\'e9riode de gel raisonnable.\
\
---\
\
## Apr\'e8s stabilisation\
\
Ajuster progressivement les param\'e8tres afin d'am\'e9liorer :\
\
- l'efficacit\'e9;\
- la visibilit\'e9;\
- l'automatisation.\
\
---\
\
# Exemples de sc\'e9narios\
\
## Clinique m\'e9dicale\
\
Configuration possible :\
\
- 3 mois \'e0 planifier;\
- notification le 1er du mois;\
- rappel le 5 du mois;\
- gel des horaires de 7 jours.\
\
---\
\
## Organisation avec horaires tr\'e8s variables\
\
Configuration possible :\
\
- p\'e9riode plus courte;\
- notifications plus fr\'e9quentes;\
- gel r\'e9duit.\
\
---\
\
## Organisation avec horaires tr\'e8s stables\
\
Configuration possible :\
\
- horizon de planification plus long;\
- gel plus important;\
- moins de corrections manuelles.\
\
---\
\
# Bonnes pratiques\
\
## Planifier suffisamment \'e0 l'avance\
\
Permet aux consommateurs :\
\
- d'organiser leur travail;\
- de pr\'e9voir leurs absences;\
- de consulter leurs horaires.\
\
---\
\
## Utiliser les rappels\
\
Les rappels am\'e9liorent g\'e9n\'e9ralement la qualit\'e9 des donn\'e9es re\'e7ues.\
\
---\
\
## Surveiller les modifications tardives\
\
Le gel des horaires aide \'e0 maintenir la stabilit\'e9 du syst\'e8me.\
\
---\
\
## R\'e9viser p\'e9riodiquement les param\'e8tres\
\
Les besoins peuvent \'e9voluer selon :\
\
- la croissance de l'organisation;\
- les changements de processus;\
- les nouvelles r\'e9alit\'e9s op\'e9rationnelles.\
\
---\
\
# Erreurs fr\'e9quentes\
\
## Horizon trop court\
\
Peut entra\'eener :\
\
- un manque de visibilit\'e9;\
- davantage de planification manuelle.\
\
---\
\
## Horizon trop long\
\
Peut g\'e9n\'e9rer :\
\
- davantage de modifications;\
- davantage d'ajustements futurs.\
\
---\
\
## Notifications trop tardives\
\
Peuvent r\'e9duire le nombre de disponibilit\'e9s re\'e7ues avant la planification.\
\
---\
\
## Gel excessif\
\
Une p\'e9riode de gel trop \'e9lev\'e9e peut compliquer les ajustements n\'e9cessaires.\
\
---\
\
# R\'e9sultat attendu\
\
\'c0 la fin de cette configuration :\
\
- l'horizon de planification est d\'e9fini;\
- les notifications sont programm\'e9es;\
- les rappels sont configur\'e9s;\
- les changements de derni\'e8re minute sont encadr\'e9s.\
\
---\
\
# R\'e9sum\'e9\
\
L'onglet **Planificateur** contr\'f4le plusieurs m\'e9canismes essentiels de Team2Book :\
\
1. le nombre de mois \'e0 planifier;\
2. le jour de d\'e9calage;\
3. le jour de notification;\
4. le jour de rappel;\
5. le gel des \'e9v\'e9nements de ressources.\
\
Ces param\'e8tres permettent d'\'e9quilibrer la visibilit\'e9 des horaires, l'automatisation du processus de planification et la stabilit\'e9 des affectations produites par Team2Book.\
}