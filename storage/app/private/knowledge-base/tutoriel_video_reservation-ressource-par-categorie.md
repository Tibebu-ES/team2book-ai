# Réservation d'une ressource en spécifiant sa catégorie (Team2Book)

## Introduction

La réservation de ressources par catégorie permet de gérer des situations où une organisation possède plusieurs sites physiques différents, par exemple une clinique médicale répartie sur deux édifices.

Généralement, il est préférable de laisser Team2Book attribuer automatiquement une ressource (bureau, salle de travail, équipement) à un consommateur disponible (par exemple un professionnel de la santé). Plutôt que d'effectuer une réservation de ressources manuelle, lorsqu'un consommateur est disponible, Team2Book examine la liste de ses ressources préférées avant de lui attribuer une ressource toujours disponible, en fonction de ses préférences.

## Exemple de mise en situation

Prenons le consommateur Mathieu Gagnon. Ses ressources préférées incluent des bureaux situés au site A (préfixe « A », ex. : A101, A202) et d'autres situés au site B (préfixe « B », ex. : B101).

Supposons que Mathieu Gagnon travaille :
- Tous les **lundis** au site A
- Tous les **mardis** au site B

**Sans la réservation par catégorie**, Team2Book tenterait d'attribuer les ressources dans l'ordre de préférence sans tenir compte du site physique : par exemple, il essaierait d'abord le bureau A101, puis le bureau B101 si A101 est occupé, puis le bureau A202 en troisième choix — peu importe le lieu physique.

**Avec la réservation par catégorie**, on peut indiquer à Team2Book que Mathieu Gagnon doit absolument recevoir un bureau du site A (selon ses préférences) les lundis, et un bureau du site B (selon ses préférences) les mardis.

## Préalables (à effectuer par le gestionnaire d'équipe)

Avant de pouvoir utiliser la réservation par catégorie, le gestionnaire d'équipe doit effectuer les étapes suivantes à partir du tableau de bord de Team2Book :

1. **Activer les fonctions** « Ressource » et « Réservation ».
2. **Ajouter les catégories de ressources** (par exemple : catégorie « Site A » et catégorie « Site B »).
3. **Assigner chaque ressource à sa catégorie** (indiquer quels bureaux appartiennent à l'édifice A et lesquels appartiennent à l'édifice B).
4. **Configurer les ressources préférées de chaque consommateur** travaillant sur plusieurs sites. Cette liste doit contenir au minimum une ressource de chacun des sites concernés, idéalement plusieurs.

## Comment réserver une ressource par catégorie — à partir d'un ordinateur

1. Connectez-vous à Teamup à partir de votre lien d'accès personnalisé.
2. Dans la vue de calendrier, choisissez la date désirée.
3. Assurez-vous que votre calendrier de disponibilité est bien sélectionné.
4. Si vous utilisez un sous-calendrier de type mixte, assurez-vous que la valeur « Disponibilité » est affichée dans le champ « Type d'événement ».
5. Dans le champ « Ressources », consultez la liste des ressources disponibles et des catégories de ressources.
6. Choisissez la catégorie de ressources désirée.
7. Enregistrez votre événement.

Après quelques minutes, le planificateur de Team2Book s'exécutera automatiquement. Vous pourrez ensuite rafraîchir votre fenêtre Teamup pour vérifier la ressource qui vous a été attribuée.

## Comment réserver une ressource par catégorie — à partir de l'application mobile Teamup

1. Ouvrez l'application mobile Teamup.
2. Choisissez la date désirée et cliquez sur l'icône « + » pour ajouter un événement.
3. Indiquez la date de début et de fin, ou choisissez « Toute la journée ».
4. Assurez-vous que votre calendrier de disponibilité est sélectionné.
5. Pour un type mixte, indiquez la valeur « Disponibilité » dans le champ « Type d'événement ».
6. Dans le champ « Ressources », choisissez la catégorie désirée.
7. Enregistrez l'événement.

## Notes importantes

- Si aucune ressource de la catégorie choisie n'est disponible, un courriel sera transmis à l'utilisateur ainsi qu'au gestionnaire (si les notifications sont activées).
- Même avec un sous-calendrier de type « Non disponibilité », dès que le champ « Ressource » contient une valeur, Team2Book considère l'événement comme une disponibilité.
