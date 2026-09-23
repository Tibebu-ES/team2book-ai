# Infolettre Team2Book — Juillet 2026

> Cette documentation reprend les nouveautés et améliorations présentées dans l’infolettre de juillet 2026. Elle est structurée pour permettre au ChatBot AI de Team2Book de répondre aux questions des clients.

## Quoi de neuf ?

### Plan de formation

Team2Book offre maintenant un plan de formation structuré pour les gestionnaires d’équipes :

- 4 séances de formation de 2 à 3 heures pour les nouveaux clients.
- Une série d’exercices ciblés.
- Des vidéos de formation.

### Démonstrations et besoins des cliniques

Team2Book répond notamment à des besoins liés à :

- La production des horaires sans consacrer plusieurs jours de temps de médecin à chaque production d’horaire.
- L’obtention de statistiques sur l’utilisation des locaux par les groupes de cliniques.

---

# Nouvelles fonctions

## Vue en mosaïque de Teamup sur les appareils mobiles

Team2Book a optimisé l’utilisation de la vue en mosaïque (« Tiles ») de Teamup sur les appareils mobiles.

Cette vue permet d’afficher l’horaire de façon plus visuelle.

Pour les sous-calendriers **Équipe** et **Ressources**, la vue peut afficher :

- Une image correspondant à l’activité, selon le champ « Activité » d’un événement de disponibilité.
- Le champ « Avec », correspondant à « En équipe avec » ou « Consommateurs Liés ».
- Le bureau.
- Les heures.

### Activer la vue en mosaïque

1. Activer le champ personnalisé **Type d’activité**.
2. Renseigner ce champ lorsque des événements de disponibilité sont créés.
3. Dans le tableau de bord Team2Book, aller à :
   **Paramètres → Champs personnalisés → Vue en mosaïque (Tiles)**.
4. Choisir la vue en mosaïque (« Tiles ») dans l’application mobile.
5. Activer le sous-calendrier de présence de l’équipe.
6. Filtrer pour un nom de consommateur.

### Recommandation pour les images d’activité

Il est recommandé d’utiliser une image qui représente clairement l’activité et d’y ajouter le nom de l’activité.

---

# Assignateur d’assistants cliniques

L’**Assignateur** permet d’attribuer automatiquement un assistant clinique ou une infirmière à chaque médecin pour une période donnée.

Il est possible de :

- Définir des groupes d’assistants.
- Définir le nombre de médecins qu’un assistant peut assister simultanément.
- Définir le pourcentage désiré d’attribution d’assistants pour chaque médecin.

## Ignorer les événements spéciaux

Il est maintenant possible d’ignorer les événements spéciaux lors de l’attribution automatique des assistants.

Dans la fenêtre **Assigner des assistants**, cocher :

**Ignorer les événements spéciaux**

## Exclure certains types d’activité

Il est possible d’exclure certains types d’activités lors de l’attribution automatique des assistants.

## Plusieurs événements par jour

Un médecin qui effectue deux activités différentes dans une même journée peut maintenant recevoir un assistant pour chacune de ses activités.

---

# Instructions des professionnels

Certaines cliniques utilisent Teamup pour communiquer des instructions au personnel responsable des horaires.

Une approche recommandée consiste à activer le champ personnalisé **Description**.

## Activer le champ Description

Dans Team2Book :

**Tableau de bord → Paramètres → Événements → Champs de description**

Une fois activé, les consommateurs voient apparaître un champ personnalisé appelé **Description**, ou le nom choisi pour ce champ, dans leur sous-calendrier de disponibilité.

## Recopie des instructions

Team2Book recopie maintenant le contenu du champ Description lors de l’attribution des événements de ressources ou de présences.

Cela peut réduire le besoin d’afficher les sous-calendriers de disponibilités des professionnels et permet de communiquer les instructions plus efficacement dans Teamup.

---

# Attribution des ressources

Team2Book tente maintenant de conserver la même ressource (par exemple, un bureau) lorsqu’un consommateur effectue deux activités ou travaille pendant deux périodes dans la même journée.

### Exemple

- Sébastien assiste Dre Tremblay le matin et Dr Gagnon l’après-midi.
- Le bureau 1, préféré de Sébastien, n’est pas disponible le matin.
- Team2Book attribue donc le bureau 2, son deuxième choix.
- L’après-midi, le bureau 1 devient disponible.
- Team2Book privilégie maintenant le bureau 2 afin d’éviter de déplacer Sébastien.

**Objectif :** maintenir autant que possible la même ressource pour un consommateur pendant toute sa journée.

---

# Création d’événements

La limite de **2 événements par jour par consommateur** a été supprimée.

Il est maintenant possible d’ajouter un nombre illimité d’événements par jour pour un consommateur.

---

# Recopie des horaires dans le DMÉ

Team2Book propose maintenant un nouveau sous-calendrier **Présences de l’équipe** conçu pour faciliter la recopie des horaires dans le dossier médical électronique (DMÉ).

## Caractéristiques

Le sous-calendrier peut :

- Ne pas inclure le nom de la ressource attribuée.
- Permettre de ne pas inclure le contenu du champ Description.
- Ne pas inclure les assistants.
- Permettre d’exclure les événements attribués à certaines ressources, par exemple une garde à l’hôpital.
- Permettre d’inclure uniquement certains rôles de consommateurs, par exemple les médecins et les IPSPL.

L’objectif est d’éliminer les informations superflues qui compliquent le filtrage et la recopie des horaires des médecins dans le DMÉ.

## Activer le sous-calendrier Présences de l’équipe

Dans Team2Book :

**Tableau de bord → Paramètres → Sous-calendriers → Présences de l’équipe**

## Plusieurs sous-calendriers

Il est maintenant possible d’ajouter plus d’un sous-calendrier pour :

- Les présences de l’équipe.
- Le travail de l’équipe.

Il est donc possible, par exemple, de créer différents sous-calendriers selon le type de professionnel.

---

# Ressources libres

Team2Book offre davantage de contrôle sur l’affichage des ressources libres.

## Ignorer les ressources libres après une certaine heure

Il est maintenant possible d’indiquer à Team2Book d’ignorer les ressources libres après une certaine heure.

Cela permet de réduire le nombre d’événements affichés dans le sous-calendrier des ressources libres.

Dans Team2Book :

**Tableau de bord → Paramètres → Seuils → Ignorer les ressources libres après cette heure**

## Exclure certaines ressources

Il est également possible d’ignorer les ressources libres de certaines ressources.

Exemples :

- Garde à l’hôpital.
- Télétravail.
- Autres ressources pour lesquelles l’affichage des disponibilités n’est pas pertinent.

---

# Notifications

## Désactiver certaines notifications

Les notifications suivantes peuvent maintenant être désactivées :

- Nombre d’événements spéciaux.
- Règles d’attribution d’événements spéciaux non respectées.

Pour configurer ces notifications :

**Tableau de bord Team2Book → Notifications → onglet Notifications**

## Configurer les contraintes relatives aux événements spéciaux

Pour être avisé lorsque les règles relatives aux événements spéciaux ne sont pas respectées, configurer les contraintes dans :

**Tableau de bord Team2Book → Paramètres → Assignateur**

Les contraintes peuvent notamment comprendre :

- Un écart minimum entre deux événements spéciaux.
  - Exemple : au moins 72 heures entre deux affectations de soirs.
- Un nombre d’événements spéciaux consécutifs souhaités.
  - Exemple : travailler le dimanche lorsqu’on est de garde le samedi.
- Un nombre maximum d’événements spéciaux par mois.
  - Exemple : pas plus de 3 événements « sans rendez-vous » par mois.

---

# Notifications lors des modifications des événements de ressources

Lorsque le paramètre **Nombre de jours pour geler les événements de ressources** est activé dans les paramètres du planificateur, il est maintenant possible de recevoir une notification uniquement lorsqu’un consommateur effectue une modification.

Par défaut, Team2Book ne vous avise pas lorsque le gestionnaire d’équipe effectue lui-même une modification.

Cette option permet de réduire les notifications inutiles.

Les notifications peuvent également être moins longues en n’incluant pas, par défaut, toutes les modifications aux ressources (locaux).

---

# Champs personnalisés supplémentaires

Team2Book utilise plusieurs champs personnalisés internes, notamment :

- Type d’événement spécial.
- Consommateurs.
- Type d’activité.
- Ressources.
- Caractéristique du consommateur.
- Caractéristique de la ressource.
- En équipe avec.

Il est maintenant possible d’ajouter des **champs personnalisés supplémentaires** pour les besoins internes de la clinique.

## Exemples

Une clinique pourrait ajouter :

- **Approbation requise**
- **Équipement 1 requis**

Ces champs peuvent servir à indiquer qu’une approbation ou un équipement particulier est nécessaire pour un événement.

## Ajouter un champ personnalisé

Dans Team2Book :

**Tableau de bord → Paramètres → Champs personnalisés → Champs personnalisés supplémentaires**

> **Attention :** les champs personnalisés utilisés par Team2Book pour son fonctionnement ne doivent pas être modifiés ou utilisés à d’autres fins sans comprendre leur rôle. Les champs personnalisés supplémentaires sont destinés aux besoins internes de la clinique.

---

# Authentification et chargement des données

Lors de la connexion à Team2Book, le système doit récupérer les données de la clinique afin de les présenter dans le tableau de bord.

Auparavant, aucune indication de progression n’était affichée pendant cette opération.

Certains gestionnaires pouvaient donc croire que l’authentification avait échoué lorsque le chargement prenait un certain temps.

Team2Book affiche maintenant la progression de cette initialisation.

**Si le chargement semble prendre du temps, vérifier la progression affichée avant de conclure que la connexion a échoué.**

---

# Planificateur

La planification n’est maintenant plus présentée comme un processus en deux étapes.

Team2Book affiche plutôt la progression de la planification sous forme de pourcentage.

Cela permet :

- De connaître plus précisément l’état d’avancement de la planification.
- De réduire le risque d’envoi de certaines notifications en double.

---

# Documentation

## Guide pour les secrétaires sentinelles

Team2Book propose une formation spécifique pour les **secrétaires sentinelles**.

Ce guide est particulièrement utile lorsqu’une clinique souhaite permettre à des secrétaires sentinelles de modifier directement les disponibilités de leur groupe de professionnels.

Les guides pour les nouveaux clients sont accessibles aux utilisateurs connectés à Team2Book.

---

# Ressources d’aide

Les ressources disponibles comprennent :

- Tutoriels textes.
- Tutoriels vidéo.
- Vidéo de produit.
- Questions fréquentes.
- Infolettres.
- Blogue.
- Guides pour les nouveaux clients.

Les guides pour les nouveaux clients nécessitent une connexion à Team2Book.

---

# Obtenir de l’aide

Pour obtenir de l’aide avec Team2Book :

- Consulter les tutoriels et la documentation.
- Consulter les questions fréquentes.
- Demander une séance virtuelle Zoom.
- Communiquer avec le support Team2Book à **support@team2book.com**.

---

# Résumé des nouveautés de juillet 2026

Les principales améliorations sont :

1. Vue en mosaïque optimisée sur mobile.
2. Meilleur affichage des activités, personnes, bureaux et heures dans la vue en mosaïque.
3. Assignateur d’assistants cliniques amélioré.
4. Possibilité d’ignorer les événements spéciaux dans l’assignateur.
5. Possibilité d’exclure certains types d’activité dans l’assignateur.
6. Possibilité d’attribuer plusieurs assistants à un médecin pour différentes activités le même jour.
7. Meilleure transmission des instructions via le champ Description.
8. Meilleure conservation des ressources attribuées pendant une même journée.
9. Suppression de la limite de deux événements par jour par consommateur.
10. Nouveau sous-calendrier Présences de l’équipe pour faciliter la recopie dans le DMÉ.
11. Possibilité de créer plusieurs sous-calendriers de présences ou de travail.
12. Meilleur contrôle de l’affichage des ressources libres.
13. Possibilité d’exclure certaines ressources de l’affichage des ressources libres.
14. Contrôle accru de certaines notifications.
15. Notifications plus ciblées pour les changements effectués par les consommateurs.
16. Possibilité d’ajouter des champs personnalisés supplémentaires.
17. Affichage de la progression lors du chargement initial des données.
18. Affichage du pourcentage de progression du planificateur.
19. Nouvelle documentation pour les secrétaires sentinelles.
