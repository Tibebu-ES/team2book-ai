# Sous-calendrier de type mixte (Team2Book)

> Prérequis : il est recommandé de d'abord consulter le document « Comment entrer des disponibilités ou des non-disponibilités » avant celui-ci.

## Pourquoi un calendrier de type mixte ?

Pour certains consommateurs, il n'est pas souhaitable ou possible d'entrer uniquement des disponibilités ou uniquement des non-disponibilités. Pour ces consommateurs, un calendrier de type mixte est nécessaire, car ils doivent, selon les moments, entrer soit des disponibilités, soit des non-disponibilités.

**Exemple :** les médecins d'une clinique médicale doivent parfois entrer à l'avance leur non-disponibilité pour la clinique d'urgence. Une fois l'horaire de la clinique d'urgence complété, ces médecins voudront offrir des disponibilités pour leurs quarts de travail réguliers, en fonction de cet horaire. Ils ont donc besoin d'entrer à la fois des non-disponibilités (pour la clinique d'urgence) et des disponibilités (pour les quarts réguliers) — d'où le besoin d'un calendrier de type mixte.

Puisque le nombre de manipulations est légèrement supérieur avec ce type de calendrier, il est recommandé de l'utiliser uniquement pour les consommateurs qui ont réellement besoin d'entrer à la fois des disponibilités et des non-disponibilités.

## Configuration (par le gestionnaire d'équipe)

Le gestionnaire d'équipe peut modifier le type de sous-calendrier à partir du tableau de bord de Team2Book :

1. Dans la section **« Détails du client »**, activer les sous-calendriers de type mixte.
2. Pour chaque consommateur, indiquer s'il utilisera un calendrier de type **disponibilité** ou **mixte**.

## Entrer un événement avec un sous-calendrier de type mixte

Avec un calendrier de type mixte, il est **obligatoire** d'indiquer le type de chaque événement : soit une disponibilité, soit une non-disponibilité.

Pour ce faire, sur la page de création de l'événement, repérez le champ personnalisé **« Type d'événement »**. Une fois les détails de l'événement entrés, choisissez l'une des deux options.

### À partir de l'ordinateur de bureau
1. Entrez les détails de l'événement.
2. Choisissez le type d'événement : « Disponibilité » ou « Non disponibilité ».
3. Cliquez sur « Enregistrer ».

### À partir de l'application mobile Teamup
1. Entrez les détails de l'événement.
2. Sous le champ personnalisé « Type d'événement », choisissez « Disponibilité » ou « Non disponibilité ».
3. Enregistrez.

### Repérage visuel dans le calendrier
Dans la vue de calendrier, des icônes permettent d'identifier rapidement le type d'événement :
- ✔ (crochet) = événement de disponibilité
- ✘ (X) = événement de non-disponibilité

> **Note importante :** Team2Book ignorera tout événement d'un calendrier de type mixte si le type d'événement n'est pas spécifié. Team2Book ne peut pas faire ce choix à votre place.

## Le champ « Cible de l'événement »

À partir de la page « Détails du client », le gestionnaire d'équipe peut activer le champ **« Cible de l'événement »**. Une fois activé, ce champ apparaît lors de la création d'un événement, avec les choix suivants :
- **Tous**
- **Événements réguliers**
- **Événements spéciaux**

Ce champ permet d'indiquer à quelle catégorie d'événements s'applique une disponibilité ou une non-disponibilité.

### Exemple 1 — Non disponible pour les événements spéciaux uniquement
Vous pourriez être non disponible pour un événement spécial (par exemple, une fin de semaine en clinique d'urgence) tout en demeurant disponible pour un événement régulier.
- Type d'événement : **Non disponibilité**
- Cible de l'événement : **Événements spéciaux**

Team2Book comprendra alors que vous êtes non disponible pour les événements spéciaux, mais toujours disponible pour les événements réguliers.

### Exemple 2 — Disponible pour les événements réguliers uniquement
- Type d'événement : **Disponibilité**
- Cible de l'événement : **Événements réguliers**

Team2Book comprendra que vous êtes disponible pour les ressources régulières durant cette période, mais non disponible pour les événements spéciaux. Si un gestionnaire d'équipe tente malgré tout de vous assigner manuellement à un événement spécial pendant cette période, il recevra une notification d'erreur.

### Champ laissé vide
Si le champ « Cible de l'événement » est laissé vide, Team2Book considère que l'événement s'applique à la fois aux événements réguliers et aux événements spéciaux. Dans la vue de calendrier, la cible de l'événement s'affiche entre parenthèses pour faciliter le repérage.

### Recommandation générale
En général, lorsqu'un événement s'applique à toutes les cibles d'événements, il est recommandé de laisser le champ « Cible de l'événement » vide, ou de choisir l'option « Tous ».
