---
title: "Module des événements spéciaux - Team2Book!"
url: "https://team2book.com/tutoriels/module-des-evenements-speciaux?lang=fr"
---

Introduction
------------

Team2Book peut agir comme un logiciel de gestion des horaires de travail. Ce guide explique comment utiliser la fonctionnalité **Événements spéciaux** et comment utiliser le menu **Types d’événements spéciaux** à partir du tableau de bord client.

Dans cette rubrique, vous pourrez :

- Activer les événements spéciaux
- Utiliser le menu Types d’événements spéciaux à partir du tableau de bord client
- Ajouter, mettre à jour et supprimez votre type d’événement spécial.
- Réserver une ressource pour un type d’événement spécial.
- Entrez un événement spécial dans le calendrier Teamup (uniquement les gestionnaires d’équipe).
- Voyez si la programmation des événements spéciaux est juste en utilisant le module statistique.

Que sont les événements spéciaux
--------------------------------

Un événement spécial est lorsque le gestionnaire d’équipe affecte un consommateur donné à un quart de travail spécifique (soir, week-end) ou à une ressource spécifique (par exemple, salle d’urgence, bureau d’accueil d’urgence, etc.).

Habituellement, les gestionnaires d’équipe assigne les consommateurs à des événements spéciaux après que les consommateurs aient entré leur disponibilités/non-disponibilités et avant que Team2Book commence à assigner des ressources aux consommateurs. Vous pouvez tirer parti du décalage horaire (à partir du menu Détails du client) pour vous donner suffisamment de temps pour effectuer cette tâche. Pas besoin de s’inquiéter, Team2Book planifiera toujours les équipes spéciales en priorité sur les affectations de ressources normales. Par conséquent, terminer les affectations des quarts de travail spéciaux avant le jour de **décalage de l’horaire** est préférable mais pas obligatoire.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh4.googleusercontent.com/TvPsVX26fP-s_q14BIK5zZZKPBlb9HF_l0bL0gG1lyEuuSFEkuwYFrfOfqRH8i-W5Rn-Qmg6M4XRcCFCzbUY7aN-kQ_WVn_qbPU8ixdoIVlrYcp_EMurl1AUhMuYpxMa1bsii4R2Nz6WEQS5P3uEWehP54aZTCylcxHN8E1KsdxcoFdfr1AUHe5VWw)</noscript></figure>### Attributs de type d’événement spécial

Le type d’événement spécial contient deux attributs. **Nom** et **Abréviation** du type spécial.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh4.googleusercontent.com/t72_E3kJTVHrqNIqyWCsJBb2CtYfblpvxeQ-3CgcylDzre-0bkPWGNP9Adirjm6WO0XL5SUQ7qLwr094832lmm_-HTaCRh8j-wtsRKeA0ad6RzbG9clO8PlBKg8-Yow8l1lpKwhGqEyMiC9xRXHQaDGaKLj6Kp8_LlLdvYpVpqWhSCR_f3jZq0CPLw)</noscript></figure>#### Nom

Le **nom** est le champ obligatoire dans la table des types d’événements spéciaux. Vous pouvez attribuer un nom unique d’au moins 3 caractères. Le (\*) après le **Nom** indique que vous devez spécifier un nom pour votre type d’événement spécial.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh6.googleusercontent.com/jbfAPuRxI_Y5LRV4V6dptXj8lHTplCCOvND-Lwg-Vui4tnVNDcvtw-fXWKpKOwetsUib8OkiotZsi0D4-izTOxr3QD59s0H6euVFBJTgJ61uGH46JHc6Q0I-CqyHaH9CEj9WcKBmTLpTbdZTCG-GovyN1uQO0e7uYQ6VKnf41lt2L73MvWvcHELD)</noscript></figure>#### Abréviation

L’**abréviation** est un champ obligatoire dans la table des types d’événements spéciaux pour le nom du type d’événement spécial. Vous pouvez attribuer un caractère unique, 2 à 5 caractères sont autorisés. L’abréviation sera utilisée sur les titres des événements de ressources dans le calendrier Teamup. . Le (\*) suivant l’abréviation indique que vous devez spécifier un caractère pour le nom de votre type d’événement spécial.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh6.googleusercontent.com/1XP4Y-FdnS7beavmnGjDtq8wVtBQ7XVtUS2BbUypCte_a95QYnCZlTs6cIjZRToLxP89XSauSXmcePtxcJJ92XPMgmvXGfYPxSYMsJbNG_xXgIf8eP8uC313KezRIhv_7FpXJ-DIbqM62u1C9YCC68_lzMDenUATocizimI2sR6xAGOK-UhLw9lA)</noscript></figure>Prérequis pour utiliser les événements spéciaux
-----------------------------------------------

Un abonnement séparé à Teamup Calendar est nécessaire pour utiliser Team2Book. L’abonnement Teamup Calendar comprend 4 plans d’abonnement. Les événements spéciaux nécessitent la fonctionnalité Champs personnalisés (custom fields) du calendrier Teamup. Par conséquent, pour utiliser les événements spéciaux, vous aurez besoin d’un plan d’abonnement **Teamup Calendar** **Premium** ou **Enterprise**.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh3.googleusercontent.com/QfU14sIMrOuddscTqCd7OUm4tvjdOLYgR7FAr7qz9jYqMdRSTi_gAwPk3tb-u8GEac4PUlU1r3VsnXGiUzlceqn7Ns28e2MeMymNAsE0GrZWOEmtsBFADJgwpXAq4Wt4I_auhmpyd5Sr9v6lxhK9_03hNa44dK0HBwbzfxkY3dz3TBfnXBqmIVsFqg)</noscript></figure>La seule condition préalable pour utiliser et accéder aux fonctionnalités de type d’évènement spécial est la mise à niveau du plan d’abonnement vers le plan d’abonnement **Premium** ou **Enterprise** de Teamup Calendar.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh3.googleusercontent.com/lgpgMgF8JhZpFvVHBlMWWiAMudJ5mv4BQhiEKaVsd__P70ETPG60DUpUqj4QFJ86TpRoxN41LNYvg35dPvlFERwpeg7ddEm70fU6pn6TW4qBVOAALW-4rs9WEFuj_tKtfNnsMckUON-8ZJxayBVe71Lc-tj81pSjelDlMHhK1t-ooiELrhBFbezo)</noscript></figure>Team2Book est en mesure de connaître automatiquement le plan Teamup Calendar que vous avez. Team2Book vous permettra d’activer la fonction Événements spéciaux uniquement si vous avez un abonnement mensuel ou annuel au forfait **Premium** ou **Enterprise** de **Teamup Calendar**.

Veuillez noter que vous pouvez utiliser n’importe quel plan d’abonnement Team2Book.

Comment activer les événements spéciaux
---------------------------------------

Veuillez d’abord lire nos conditions préalables, ci-dessus, pour utiliser la fonction événement spécial. Pour activer les événements spéciaux et afficher le menu des types d’événements spéciaux à partir du tableau de bord du client, accédez à la section des **détails du client** et activez-la.

Voici comment **Activer** les événements spéciaux

1. Connectez-vous à votre compte **Gestionnaires d’équipe Team2Book.**
2. Depuis le menu principal de Team2Book, passez la souris sur **Espace membres.**
3. Cliquez sur **Tableau de bord du client** dans le menu de la **Espace membre**s.
4. Cliquez sur **Détails du client** dans le menu de gauche. Faites défiler jusqu’à la section des **événements spéciaux.**

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh4.googleusercontent.com/dcg16q5-TyM3_le81WP2NZWJ9fZO0aih8Tk2x_2zK7-czYog_wP0ZRiggsX0vVcg6KQvCuDQMIhNPh1RAfH_S0uUBAMILzz4yi67lhXodgJfTGMKjE5G5Qz29TSavKoNLqMJ17D8KzGqQPs4xmvSjaRLfRGYC8n7atOxSo982r54YALedXtl-v4oQw)</noscript></figure>Voici les champs de la section Événements spéciaux :

- **Événement spécial**,
- **Planifiez des événements spéciaux les jours de fermeture**,
- **Vérifier la disponibilité des consommateurs les jours de fermeture**, et
- **Consommateurs pouvant être affectés à des événements spéciaux**.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh6.googleusercontent.com/epW_nX9tTrdoi5Rg-sXzU3z4WNPTg6N3sFMQ25Hi33PeLacemmsBdXBDIZLVXO-_jUJP__GO7tKeR2FvqsgAA6cKkB6R8phPwdR8qjlEggf1ZQ1lLn4rB-qWkh9LhN06GIHMDg6mKFZ3tlgAnQYdpc_LGL_Cu6YoPR8AmzRxgjuw79dTL87g3uBAZw)</noscript></figure>5. Sous Événement spécial, cliquez sur **Activer**

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh6.googleusercontent.com/PI-90u8frTuBfyXU4Y202FPCIsy2IGvmXr3vLlCgtu2y5AnVbW7_Cv2AmsVjkSn0uXSqj2mQS5f7-qeybfBP7A8br2VpHus9wo7qm6keHaEN_OLn39jsyvmjlGMO0BJlX27g06F4CadFT123bXXLB8IQx4T5lwEPUocBxgzOYbQkBy-0pT5ngeKvhA)</noscript></figure>6. Cliquez sur **Sauvegarder**

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh4.googleusercontent.com/X4u62wbV_x6oKosxpCIYETFf5VkR3CBTBvIzRjhYiu-OFAhbf62xoJpVgMbDhQB6kyr0AkDL6l6Q_jl4GFs6eRQaIWWOf2hLhHkJbvmj5m3rLYheIt4ZkSQrbo2N2Hw29JykeeeGAPHyY_ekK8ao0cT98aIYH4P1zYn7eox8GmFWJlprnK_pzcQFXg)</noscript></figure>7. Vous recevrez un message indiquant que vous avez **mis à jour** les détails du client.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh4.googleusercontent.com/ouFBKGq6I7rm6yKxGkhM8yNc-js0oqTiXih9z9iUwblvwkv-qrIQ5tX_PTSaaeQnGYJZZdMEWft6J0u93s1yvDIr_N8j82CbhXUPNL9be5eT64VQ_dhRnV_2NhLNK4NBBe72Rr49WKFE6XVOKM4UERSpV3eCtCDmAF4Tl7tmTaWNZb6EUS6NSxeGhw)</noscript></figure>Désormais, le menu **Évéments spéciaux** s’affichera dans le **tableau de bord client.**

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh4.googleusercontent.com/dCIhaxjKEdw1_HYrIqz2eB0yww0VUNtPbheow1sEOzFebaAeqwp_SIX0ZrTR5UlLg_wALTA7lM4xm9KUPs5-I3-4E1rBU9msJLDjtM1nuQU8sT1Xr-KMmpcSDmqngBe_lQA415w_jcykCYal_iXuDOgSbjM6rzrAMUE3MyWGBdsuWmpJsV2nIdDFuQ)</noscript></figure>Vous ne pouvez pas voir et utiliser le menu des **types d’événements spéciaux** tant que vous n’avez pas **activé les événements spéciaux** dans les **détails du client**. Après avoir activé les événements spéciaux, vous pourrez accéder aux fonctionnalités des événements spéciaux et les utiliser.

### Planifiez des événements spéciaux les jours de fermeture

Par défault, le planificateur Team2Book ignore les jours fermés. Activez cette option pour permettre la programmation des événements spéciaux même au cours des **jours de fermeture**. Par exemple, si vous l’activez, vous pouvez programmer des événements spéciaux le samedi et le dimanche même si les samedis et dimanches sont généralement définis comme des jours fermés.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh5.googleusercontent.com/lc0K-wDXj_D3V-_TtiinaXEAw8NYMjCdbaR3ybaZrEw1CA3CenvZy_66AtzPMwcSs-adhGY14QSX-nNTSQZPxSBx3WbhgdAJ8gRc41PMh6oHNBrKODKSGu_tzBTA0WQ_VA4iQkrgFjAeCYKBJ4ZAQ6ApliVwOq-l7VuAcZP_YuKTJWSePuCKzOzwVw)</noscript></figure>Pour activer et programmer des événements spéciaux les jours de fermeture

1. Connectez-vous à votre compte **Gestionnaires d’équipe Team2Book.**
2. Depuis le menu principal de Team2Book, passez la souris sur **Espace membres.**
3. Cliquez sur **Tableau de bord client** dans le menu de la **Espace membres**.
4. Cliquez sur **Détails du client**. C’est là que vous trouverez la section **champs pour les événements spéciaux.**
5. Sélectionnez **Activer** pour le champ **Programmer des événements spéciaux les jours de fermeture.**

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh6.googleusercontent.com/DFs388r50iSAnwD8HKzsLBq7NhinMt8w0GnlkiS4QmNjt9oq7bmI5XZcLvUwsez_7GgUEra5M6PmcbkmIyEQwmhdZbkl3heKkTonceQuRb_ltqaQE9fkZ7dwXdn-wOxNILSQUYgdvXpo1wI3rlJTXuTt-za_ahmUDmxXxFD3MnHSIWIPrxm9ZAeiCg)</noscript></figure>6. Cliquez sur **Sauvegarder**

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh6.googleusercontent.com/FcrjnqZu619Ag9JoBYt5Pn4ikOAnauxgqFI2pVmusZ-p5_jkDBA_ZzrQaKrSL8f55c8WXTg5-aNBgF5UeFdMXRrKSLmsOTPQMnh7I6qK2bWEslNMkRYdP8fZvzeNVtpi-v6M69eAkWv2H4NTEY78O_qi8JijaC8d3kFT4aSm3J_1UztgsSW-BNlYTQ)</noscript></figure>### Vérifier la disponibilité des consommateurs les jours de fermeture

Vérifier la disponibilité des consommateurs affectés aux événements spéciaux les jours de fermeture. Si cette option est désactivée, les gestionnaires ne recevront pas de notifications relatives aux consommateurs indisponibles affectés à des événements spéciaux les jours de fermeture.

1. Connectez-vous à votre compte **Gestionnaires d’équipe Team2Book**.
2. Depuis le menu principal de Team2Book, passez la souris sur **Espace membres.**
3. Cliquez sur **Tableau de bord client** dans le menu **Espace membres**.
4. Cliquez sur **Détails du client**. C’est là que vous trouverez les **champs pour les événements spéciaux.**
5. Sélectionnez **Activer** pour le champ **Vérifier la disponibilité des consommateurs les jours de fermeture.**

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh3.googleusercontent.com/bMfh-7_Dh-OpRuQrJMt62P8R9oRwsjiF2VUtH-L-gmiLlvYv0i9DQ68b_aO8Bo04wK-Pv6WRs8PsnHMAlreK-drZeML9J44iTNXeXktIrrShOg9rw5bceiGx53HvErYfZFbMH_bEWwGp1kPYnb1NrC9VT5ZCjXGEoWKYZPVUgxplXi0amPiQKvhyGA)</noscript></figure>6. Cliquez sur **Sauvegarder**

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh6.googleusercontent.com/FcrjnqZu619Ag9JoBYt5Pn4ikOAnauxgqFI2pVmusZ-p5_jkDBA_ZzrQaKrSL8f55c8WXTg5-aNBgF5UeFdMXRrKSLmsOTPQMnh7I6qK2bWEslNMkRYdP8fZvzeNVtpi-v6M69eAkWv2H4NTEY78O_qi8JijaC8d3kFT4aSm3J_1UztgsSW-BNlYTQ)</noscript></figure>### Consommateurs pouvant être affectés à des événements spéciaux

Les gestionnaires d’équipe peuvent ajouter ou supprimer des consommateurs à la liste des **consommateurs pouvant être affectés à des événements spéciaux**.

Les consommateurs répertoriés ici seront affichés dans l’interface utilisateur du calendrier Teamup lors de l’attribution d’un quart de travail spécial. Le maintien d’une courte liste de possibilités facilitera la recherche d’un consommateur spécifique à partir de l’interface utilisateur du calendrier Teamup et évitera les erreurs.

Par exemple, voici la liste des consommateurs pouvant être affectés à des événements spéciaux. Un gestionnaire d’équipe peut ajouter un consommateur spécifique à cette liste en cliquant sur le signe plus (+) vert et peut supprimer un consommateur spécifique en cliquant sur le signe moins (-) rouge.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh5.googleusercontent.com/xqvpqxNZI9L7NcMg4ZKkw52FhGiNPoVP2514VNu-248XB2OfVhyuxKcQNZz2bbGAwWV9WvRLa6OJsRWdichdsM4iMgEyCI3zQSONYnc8T9SRz9USoq5tKn4kuBKV7ckwJCVJGVCEkk_rm0bYW42xhAfl-Pv2hZDaELcp2d8xY-pcD_dBKiz_59Gcdg)</noscript></figure>Alternativement, le gestionnaire d’équipe peut ajouter un consommateur donné à la liste des **consommateurs pouvant être affectés à des événements spéciaux** en activant les options **Autoriser l’affectation d’événements spéciaux** lors de l’ajout d’un nouveau consommateur ou lors de la mise à jour des détails d’un consommateur existant.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh5.googleusercontent.com/WoqOTrQOOPl44mstpqGQ2rybzFS4i8pGYdyVM0BUnnJo1MU_wEg0cmoLEhvgbGpMuYKY7I_Th0DoUXm0WtnC3A6ZriFxdvzzh6GiAW3eDUHkgniH6IERAfkZscVmCEge47DIRS413WeSc6x4PANKKvDQrXkK-pIOCro2xCjlpB3gUa5n9XxLA3-vsA)</noscript></figure>Comment utiliser le menu des types d’événements spéciaux à partir du tableau de bord client
-------------------------------------------------------------------------------------------

Un type d’événement spécial est un nom que l’on donne à un ensemble d’événements similaires. Par exemple: Soirs, Fin\_de\_semaine, Urgence sont des types d’événements spéciaux. Ces noms apparaîtront dans l’inteface de Teamup Calendar et dans notre module statistique.

Voici comment accéder au menu **Type d’événement spécial** :

1. Connectez-vous à votre compte **Gestionnaires d’équipe Team2Book.**
2. Depuis le menu principal de Team2Book, passez la souris sur **Espace membres**.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh4.googleusercontent.com/_LJleWN7KwMmo6LMYqP7ztO56a9npI_VhjSvoNY_M3duxLNAxotZyencv2vKgsGK-ngDgwKjkBqrpCmDRcqMM8-T0GeZz33DKcFtASe8PzEJsjR43PAbK6bqnGATCAqbdGLFYsv-C2qgwRv5JQajqfz85F9ODkv-ZamZ9Dz9ZD9ePQhYRxAV76wdPA)</noscript></figure>3. Cliquez sur **Tableau de bord client** dans le menu **Espace membres**.
4. Cliquez sur **Événements spéciaux** dans le menu de gauche.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh6.googleusercontent.com/yZHqmgB3J5xAoO8cwN64VfZetEKF9C52QTao6nMf3o0MzApaJA3X4eAq6hlJV46-Sf-bREyiTf9x1mDl5tFsqh-5lBmLOCCOUIg2Ms9gnC_qayHZD1Tjbz7-Q4zk24K8PYezPGT7UFxhEY0QIlg-EJovqIqYHHmRiicrNulv3xT29beu0m7ioc08tw)</noscript></figure>### Pour ajouter un nouveau type d’événement spécial

Voici comment ajouter un nouveau **type d’événement spécial** :

1. Connectez-vous à votre compte **Gestionnaires d’équipe Team2Book.**
2. Depuis le menu principal de Team2Book, passez la souris sur **Espace membres**.
3. Cliquez sur **Tableau de bord client** dans le menu de **Espace membres**.
4. Cliquez sur **Types d’événements spéciaux** dans le menu de gauche.
5. Cliquez sur **Ajouter** nouveau (section en haut à droite de la page).

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh3.googleusercontent.com/67rAgozjYfYjFzAWmXrWgAjLeFEv1sAYHgsDQTts4EjpHO38-xarwhXpnh9AxiTiQXdw5xYpM4mtFc0rggFugtYWC2k8Oda_aBCFLM8GaspmTQ-xK_FHfoN1Uezs0VCxUQ21yNgALwaeWsm6qZKvgWws1Ztq5GGiGBnx2CT2aHGqUcPO9hU5JYdySg)</noscript></figure>6. Une nouvelle page **Ajouter un type d’événement spécial** apparaîtra

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh5.googleusercontent.com/D99YPHZDhoGAjYrImkvZZ4_OKFY2RqEbTBx5d_txRd49YeOgxYHEe30-cq-Y3c3mWa-1hragOvwVRWrvW2ndR5swFj_rIgTBuD63O-IC2DbZpq_C4B_KOZf8uDIpD8sS0kHxW3Gk0AQLUzPkzs7QlFhpCaRJ36nIgDL7MPjAEYNOeZJxWfyDQ2pI4w)</noscript></figure>Le nom et les abréviations sont des champs obligatoires pour ajouter un nouveau type d’événement spécial.

7. Entrez le nom et l’abréviation.
8. Décidez si ces événements spéciaux nécessitent une ressource spécifique. Par exemple, les quarts de nuit dans une clinique médicale peuvent ne pas nécessiter de ressource spécifique. Les quarts d’urgence ou les quarts de fin de semaine peuvent nécessiter la ressource de la salle d’urgence. Avec cet exemple, vous créerez un type d’événement spécial de nuit et un type d’événement spécial d’urgence.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh4.googleusercontent.com/8Yd81P77KQ9woLsb3Kp0EQ8mbADUv4wr0039fNSc0KYHnJKokn-TqBWO0AUA0DZA10A0sj2fqUaEnkb4QTWHtG-bXOTDek97VW2KIHd1Wrjw6Aq-fXkse6_l75kuJkrsV4nzW2bmoD_0DmRlgmmaa3ExhWu0GWGUCickdNboZO956ZgyHRPLzeFkow)</noscript></figure>Le champ de sélection **Ressource réservée** répertorie les ressources disponibles non réservées par un consommateur de priorité 1 ou par d’autres **types d’événements spéciaux**.

S’il n’y a pas de ressource disponible à réserver, Team2Book vous avertit que toutes les ressources sont réservées.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh3.googleusercontent.com/lM57qbQkfMhz6leZA_nvRnjDVKrTQ7VKsAvHitAjKLSjUxqkV60oNPK-fb1HkS1rdHn0GHe5To9Iit67oTrnBGIEfkB2O28h68haJtYm4dXewOBAaPV_miQ3BrBheg76SwEG8HIsJ3jPreY0uH91WMyVuX-nI9lzwP-UyOQe0sEl252lFLPI9_lL1A)</noscript></figure>9. Après vous être assuré que nous avons spécifié le nom et l’abréviation requis pour le type d’événement spécial, et optionnellement sélectionné une ressource réservée, cliquez sur le bouton **Soumettre**.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh5.googleusercontent.com/3Ec4nF8j4K9Uf40N5dswTwcWNjybSbhe2tdGrWdRdS0d3h29l_5kEZ1ob3xe-wsSJRHoI33KIJqOTcecdWfGnUYlfNHum6CVq4RQIwA-9x4pja2BRuEWm0wPTglnuh4dNIIXueH__Qr6OJHkofrPN7cDU5Y4l2-7jLZk39y3uLsOXj1vou830b1oBw)</noscript></figure><figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh3.googleusercontent.com/a-N-4FakXRMfC8rZOHpkknaInk840zeL5BBDrnlGjOvembY8xPtYrTpj7UUhQ90ItjhBr-wmG7SnMQfemSawyg0yuLM65xz1CCtJsI7TnbNyl4mr6TYEn46MjCbUYjARlyqNiqAbpmA9jDbK0vdxfWk7Herp7BSVmF91cEANtK0zCbGoLxIIxcaU6g)</noscript></figure>10. Le système vous ramènera au tableau des types d’événements spéciaux et vous obtiendrez votre type d’événement spécial nouvellement ajouté avec un message **Nouveau type d’événement spécial ajouté avec succès**.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh5.googleusercontent.com/Feu27-MYazSTmGoEpjZXynwgfu1sYH_fcfE5GPX3QntO1M_njXbCmw6x3F37rgm9rjdUFOdF7KiiaBU0KyIe7FPorXj-cSO1kNPvxRvRjowOEPGrcUEfQpIjaAPCVp7xPM_JZC0zjOTSd4nTRxXn2X2Tn5r_zFRxU4EuBn6-18XaneyVhguLQ33N8w)</noscript></figure>Le tableau Types d’événements spéciaux répertorie tous les types d’événements spéciaux ajoutés. Sous la colonne **Ressource réservé**e, vous pouvez voir si un type d’événement spécial a une ressource réservée. Actuellement, une ressource donnée ne peut être affectée qu’à un seul type d’événement spécial ou à un seul consommateur de priorité 1.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh3.googleusercontent.com/GDB56YllCH4LY7zDw-WafRdi8a_IeA2FHs9b6qh75bQWQcCSegD68NGyp4U19FGuONZQBZhXjezuLoiui8ACcyEkSWU7u1qnpfWgK1ltJad2pBXhke8adl8sF0OaJOKtaeKCmVKn66ycPC4IoGVkjeQY-lk8MnSCKl1wQnrgaceBV0RtWz6rt6UWJQ)</noscript></figure>### Pour mettre à jour/modifier un type d’événement spécial

Voici comment mettre à jour/modifier un nouveau **type d’événement spécial** :

1. Connectez-vous à votre compte Gestionnaires d’équipe Team2Book
2. Depuis le menu principal de Team2Book, passez la souris sur **Espace membres**.
3. Cliquez sur **Tableau de bord client** dans le menu **Espace membres**.
4. Cliquez sur **Événements spéciaux** dans le menu de gauche.
5. Accédez au tableau des types d’événements spéciaux.
6. Sélectionnez le type d’événement spécial que vous souhaitez mettre à jour et cliquez sur le bouton mettre à jour (update). Lorsque vous passez la souris sur l’extrémité droite du type d’événement spécial sélectionné et que le curseur se trouve sur le bouton d’édition/mise à jour, les informations de mise à jour s’affichent. Cliquez sur l’icône (crayon) **Mettre à jour**

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh3.googleusercontent.com/7Ys9Kbbf56FzCgRgUwcaatOwIEmMv-k3cwCObWTFawm8_QT5Qa6p1Ks_fdivhaE9KTolnFJlC8CJpFdYXpeFQk20GynCkEOmFmhXm4SY9Iy8EoyJjhPA4XKnPEPeaVmWsxN5zh9BfBkMsECWPY5TzGZPO4RpZPHK3p4sf3uW0LAfBxwyRuvGjJvp1w)</noscript></figure>7. Une nouvelle page apparaîtra après avoir cliqué sur l’icône (crayon) **Mettre à jour.**
8. Vous pouvez modifier ou mettre à jour le **nom** de votre type d’événement spécial, l’**abréviation** et la **ressource réservée** en fonction de vos besoins.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh4.googleusercontent.com/unuRU9e2MeNzwaj-KoI_VxXZLRG6mQt-4Ar4Nnpa2DSUBbTIL61CyaoK8br3COzxfH1uFKGHeagbdeKL6s9yT-_gwYubxk1ejDdftWD7rdUnI6JmNfDr2iY30q2luPjjJgNY4QCJ2teZu9sEVkepm2Pdh5HEJu3519mf-aW_Tu58HrJ3XghawZAQ1g)</noscript></figure>9. Après avoir modifié ou mis à jour les champs souhaités du type d’événement spécial, cliquez sur **Soumettre**.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh3.googleusercontent.com/yD55QEp4KOQ5MpvDbwGktibQeZtIyeGpzOGQjQXJ3X-lzx8Azka9qLAKTBhyh8AyqEDKtV0KdU0FpYv82vdE_Vf0d1lOwWOedY6fNgO0N0FIaTl7VacC8ouL3hG0ujrp9ruOjRNlkSTP36K7IjUP5rB3PA9BTEow_91AlPvHysPgaYR_vAZ8q5rw4A)</noscript></figure>10. Le système vous ramènera au tableau des **types d’événements spéciaux** et vous obtiendrez un type d’événement spécial mis à jour avec un message **Type d’événement spécial mis à jour.**

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh4.googleusercontent.com/x3Kcsg5rDJtFZoxuXNU8Sfvnyb8vEMbxTs-RFdPx6IJz-mALxm-CGoIl70jwmMJmDX8IrSVBHWWIhdPi89dCvjbNbiUI3MZqo5PSGRGJj-W5jj_-2HuHv_dJogsm6ts3BGhHiPu-Ni0rEPR9_onUGQUFKbKBgxKV9-3H_QWFKBf27V_UpQbcKJPklQ)</noscript></figure>### Pour supprimer/effacer un type d’événement spécial

Étapes pour supprimer ou supprimer un type d’événement spécial :

1. Sélectionnez le type d’événement spécial que vous souhaitez supprimer ou effacer dans le tableau des types d’événements spéciaux et cliquez sur le bouton **Supprimer**. Lorsque vous passez la souris sur l’extrémité droite de l’événement spécial sélectionné et que le curseur est sur l’icône de la corbeille vous verrez l’info-bulle supprimer (Delete).

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh5.googleusercontent.com/sEq72KCX5MJv9a_hOo8RbcTKOFdNXI4BX52fRRhSH0v91PYVS9tCZ8ytZVyh6iFkt3IpUhGe-jArr5S5DIuv4g9Knm6q5L5pK1wD6dPsH96M_hcnPOyTHvzSWobEYaKK-vIAH9G4j0Q8Hgy1fHX0MLg7MVFcYkeBevg0Mut3_8F5Q3Pt6o_snklFjA)</noscript></figure>2. Après avoir cliqué sur l’icône de la corbeil supprimer (delete), une nouvelle page d’informations apparaîtra.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh5.googleusercontent.com/hdgYt3xIBkC7p-ZqFhFLPbEen0gtRzfgquqo0-bE14oeSPuSiDhOD5jPG0yquzGA4tDJiATeagBQVXUpCrqGhFWLXi6Dsgmkrhrj2-XmqmZEKqvwrajukHv_lKm6SYONztidYbc3ilFNojrpaxVOEWGI9hxaCcRbnfH5Y3gKjZXG9ryfYpm74BOXZQ)</noscript></figure>3. Si vous êtes sûr de supprimer le type d’événement spécial sélectionné, vous pouvez cliquer sur le bouton **Oui.** Si vous n’êtes pas sûr du type d’événement spécial sélectionné, vous pouvez annuler en cliquant sur le bouton **X** dans la nouvelle page contextuelle et vous reviendrez à votre tableau des **types d’événements spéciaux**.
4. Lorsque vous cliquez sur le bouton **Oui**, le système supprime et retire automatiquement votre type d’événement spécial dans le tableau des types d’événements spéciaux.
5. Vous reviendrez au tableau des types d’événements spéciaux avec un message **Type d’événement spécial supprimé avec succès.**

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh5.googleusercontent.com/meokV1VWKqh72s1iz7HWPmqd5gjTxlF21cjWt1x4VIvSCUCLi9xOYKV8UuYjCvsZlR-ng5WRakojG9ogTRNDUb0jYJz5KSmZj0n1fEnXa8ZVBNlLEENNrCYm4gFzgQ4GM650yfEwrUMMehH-uvTR4Yb-iRVEaADRSWNOVJbI-xr8_EBv7DCOtl3l)</noscript></figure>### Type d’événement spécial avec ou sans ressource réservée et planification des ressources.

Si le type d’événement spécial a une ressource réservée, le planificateur assigne le consommateur sur la ressource réservée. Si ce n’est pas le cas, il attribuera le consommateur en fonction des préférences de ressources des consommateurs.

Par exemple, l’événement spécial Nuits (Nights) a une ressource réservée appelée Salle d’urgence (Emergency Room). Le planificateur assigne la salle d’urgence à un consommateur affecté à un événement spécial de type **Nuits**.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh6.googleusercontent.com/W_E1egpffs5fUkIKDciS_1lBrrO2n-ug721EOTpf4s8MZgBUIo7fKixgCkiLtxi_lr0tilQyZrqn8YVQ8EmZbXJbHoqRe2jKyIj5EQRRr6B9-1ORusNH33CuEZtumVnsnsEQdWPZTEcScFmF6moZxHjJM-jTn4FpATCm1SXzflIqSA0nGkzTf6qCYg)</noscript></figure>L’événement spécial de type **Weekends** n’a pas de ressource réservée, donc le planificateur attribue une ressource aux consommateurs en fonction des préférences de ressources de ces consommateurs.

Les événements spéciaux ont priorité sur les événements normaux de disponibilités/non-disponibilités. Si un gestionnaire d’équipe affecte un consommateur indisponible à un événement spécial, le consommateur sera toujours affecté à cet événement spécial mais le gestionnaire d’équipe en sera avisé. De cette façon, le gestionnaire d’équipe peut assigner quelqu’un d’autre ou demander au consommateur de modifier son sous-calendrier de disponibilités/non-disponibilités en conséquence.

Voici un autre exemple :

- E. Tamiru a inscrit une disponibilité pour toute la journée du 2 novembre.
- Le gestionnaire d’équipe a défini un type d’événement spécial appelé Urgence (**Emergency**) avec l’abréviation **emr.** Ce type d’événement spécial à une ressource réservée soit la salle d’urgence (**Emergency Room)**.
- Le chargé de clientèle a assigné E. Tamiru à l’événement spécial Urgence (**Emergency**) le 2 novembre de 8:30 à 12:00.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh6.googleusercontent.com/wfwtzE3bCITT2R8JhQLtzf-0e7XUu0bfpmUcxoSsbTHUeDJOrBhKk6tcWVDdRDa5HyeU3mKpDBa5-mWPKGbQW7aWZAQ_fv2Qv9qu7lwx9gZdLrhNd7ZYMMo8U9TOEhAXmdpolqd1VzwcOb1zTgXBaXz1C-KF09WI8k1P-JV7LLVcilNxKkdPKuT4)</noscript></figure><figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh3.googleusercontent.com/vEInY76BlULZN92F6xZA0gpzhPv8D1P7lB6-YkORnhdJW9JB9zX9IQS8QFmKWGUd1XADNk89HzXfnzojZFIJ7d1-qfDztSaOG2tK1pH5jGcS8TnbPpGz6w_7KjB5-woZvcfc6goH7NJgd8kjis2CDQ0VZGlzqCO3hTvWncSsGKzRq3nfciVughw9)</noscript></figure><figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh3.googleusercontent.com/8M2EGdO5znPsqJEQ_TdyAAS3qzXVVMaDYxEdeNleSqFgZwNMXEYz1M4m9PfTqnsFMXWpBeWIOl0UaFxNKim64ULUulX8NvGkba02qI9WniU0TyFQH_jPj9U-0BD05vyozBb7LBO4YoKXfKi-j--wgLZtZ5tIq5yRcL6teJ9MbsNaeM7yLWzWaZ1B)</noscript></figure>- Résultat, E. Tamiru est assigné à la salle d’urgence (**Emergency**) **de 8:30 à 12:00** puis il est assigné à sa ressource préférée de 12h00 jusqu’à la fin de la journée.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh5.googleusercontent.com/TxgdAb1Ko26odg5Cv7Femrj0oUkWOjJ_M4F1uAlZ8Jdf3IOiXEAg4aUdVNKUSRRb2KLLsRjoh9zTXsKRdKkGV-Ur4kcgMcoWvATRlcYxzdQTb-iw51kSzbq1G34jzHzU7ag1YRiS4RopJm9i8_iDsKAmGzfQwP5HSBg0g0kkrmPHY3SLGgrg-47N)</noscript></figure>Comment entrer un événement spécial dans le calendrier Teamup
-------------------------------------------------------------

Seul le gestionnaire d’équipe peut entrer des événements spéciaux dans le calendrier Teamup. Par exemple, le gestionnaire d’équipe peut assigner un consommateur spécifique à un quart de nuit ou de week-end, etc. Pour ce faire, le gestionnaire d’équipe ajoutera un événement Teamup en utilisant le type d’événement spécial, la date/heure et le consommateur au sous-calendrier de l’événement spécial.

Voici comment saisir un **type d’événement spécial** dans le calendrier Teamup :

1. Connectez-vous à votre compte **Gestionnaires d’équipe Team2Book**.
2. Depuis le menu principal de Team2Book, passez la souris sur **Espace membres**.
3. Cliquez sur **Tableau de bord client** dans le menu de la **Espace membres**.
4. Cliquez sur **Planificateur** dans le menu de gauche. C’est ici que vous pouvez voir le **calendrier Teamup.**
5. Cliquez sur une date souhaitée dans la vue du calendrier.
6. Sélectionnez le sous-calendrier **Gestionnaire** -&gt; **Spéciaux** (Manager -&gt; Special).

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh3.googleusercontent.com/eDE7e9ebaGn3w6R1oJ91S5UhXOki102iTaAEH0cMZM3mQNyBemeQquYVES5yMhr494q60heaH6HMlZoC1yHIbXHjzmF78K0Lj7D2CG4JNApupnyZQKf8T7LJu9QIVQTmrGVRV1jVIN5284ZLACUtfdqWdou_IOJL-aXprrloxOHAMd1k2snfYvxK)</noscript></figure>7. Dans le champ personnalisé **Type d’événement spécial**, choisissez un **type d’événement** spécial

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh5.googleusercontent.com/6ta6sHAKUsEQk3XqV5H_DHtoc6O6-8nFGAcFgIO-FP9JMaKEMu5q8aRnbkPY24h414M9HIfeJE9D8iRviP0AW-SFvuJgpdB80KLTmrs1s3GRJRShrXWUPPee-NMoW5Idx2ya2p0Ob7-4sXm3b7cmI0bGRlSjTsiA83cUr6a1gTA9vh82ahuk9Oqm)</noscript></figure>8. Dans le champ **personnalisé Consommateur** affecté, **sélectionnez un consommateur** à affecter au type d’événement spécial.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh6.googleusercontent.com/UWEn8LILPaYzIJCndezOLbUzpo-pdEClzL9aArkCCcvZU5mL0CgQ2A0VPwsT9l3mifJ3smK03FUxypVGPhIcISYqkQHJ_3XqAIexHZHB_1JXelo69DjOXCzh4kUn5u-cqOcejwA87SmoxyJq_btVCNvOveZItUUn2P-S9Mryea8HKvD06YhIfG2a)</noscript></figure><figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh5.googleusercontent.com/9AcVJD2Knm4diZDjucXjnQiJciqollqv7PTwMqgcS4sNo9_R3-zeifegE2eZvFMUSoLXfXUsv7ZattkLZlLO98-3IDWMXPFt32_bDM8PItPqvBXh7aLQGN8kFr4PzNuMh7ddHnQH5Wb3xYLDMHWS056Uscc_dxOomqMAL5sx5WTzjhcHBOO2TIro)</noscript></figure><figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh4.googleusercontent.com/6Mt5fWWdp3UOFS5ZfmEQZwQObNq5OMXkucogzol8LjlIHN0s9xL-JArqTgyL7kYM08QdfvxZOi3-EZEzaBqehgKeshqVfekpJKcMyFYhKvh2lGmMhH4bB2w4_gC0eH5zZYWBiUbBM1gLCBawe5ePfor4rnm1sjGC5kW9r0qe0yNjTh6XNY1LdBb1)</noscript></figure>9. Réglez la date et l’heure de l’événement.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh3.googleusercontent.com/sm_t6EGNvjOGeiRM6OXrsb-0LEW4h88eC5EpuHCwcFDBYWgvl4LZVBRISWmSVLssJ4brgiCoO5pd3Tx-JFkQVc3fpDpryh9AOLKgtvGrWLIisU6HMRbGtApC5uLAhc735q-5Rc84rxCyHDIoTIgJVC9Bt5Hbq_iEGBcxnK-kNBnX5heeBKriqs30)</noscript></figure>10. Cliquez sur **Enregistrer** (Save)

Sur la base de l’exemple ci-dessus, le planificateur affectera **E. Tamiru** à l’événement spécial **Nuits**. Si le type d’événement spécial **Nuits** a une ressource réservée, E. Tamiru travaillera/utilisera cette ressource.

*Remarque : Avec certaines configurations avancées, vous pouvez voir un autre nom de champ personnalisé* ***Resource****. Vous pouvez ignorer ce champ personnalisé lors de l’attribution d’un événement spécial à un consommateur.*

La notification que les gestionnaires d’équipe recevront si une ressource assignée n’est pas disponible.
--------------------------------------------------------------------------------------------------------

Une notification sera envoyée aux gestionnaires d’équipe et les problèmes de planification seront également affichés au bas de l’onglet du calendrier du planificateur. Les gestionnaires d’équipe recevront des e-mails de notification lorsqu’ils attribuent **un événement à un consommateur indisponible** et lorsqu’**aucune ressource n’est plus disponible** pour être attribuée à un événement spécial.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh5.googleusercontent.com/PaauwYn502o9d9KLpZl8h7mQuPTLn3uvHt0T1RFjytv02ahWfRvLsshUV093knHYpGjYOQIIGmbeIm9r3OJTlrmEt_b7rDK4tOy26kqXFsCtD-PsNhdN_FxvMrzOOFSpiq6qRGOwA3Ku4ZV4ieDFkK3HvbTBvoTVdxWU3giNB60QbPdH3JCT_HdvHg)</noscript></figure>**Les événements spéciaux attribués aux consommateurs indisponibles** peuvent être trouvés au bas du calendrier du planificateur dans le menu du planificateur du tableau de bord du client jusqu’à ce que les corrections nécessaires soient apportées aux calendriers.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh5.googleusercontent.com/OO5dUaPMmIBuyVPetKYNQR6BG0KQRuySfdhDMsbcgWhea6vJnerYN0b4mDU2Rxu-utZifRLQjwuePd0LlFP3No0V2QV6jTJXE6FKxMwATwrsx58WdO08CIpz548ISQhzC1w5gred8AGDa2EMU-9RdQqrD9HgK0C45neUzKEzjZcj8uNlQP2URl71)</noscript></figure>Comment voir si la planification des événements spéciaux est juste en utilisant le module statistique.
------------------------------------------------------------------------------------------------------

En faisant varier la section de filtre de données Type d’événement, les gestionnaires de clients peuvent voir les distributions du type d’événement spécial parmi les consommateurs.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh6.googleusercontent.com/IK31cyzRSmozwR0JWZ97lAIDfsoygS5dJGjUkidF9Tw5REcfUHKkagRrEV-8WUV1nxl8Yey01exUqIx_fi-07zsjaV_lMMSPAt0YWFhCOBfhWYZpmHXwCaXEzd-qFEdkjBMee78Z8VgkRLOzXKegraPoKAw1djwJOsrRw1XyJcgclWR_T_TDkzPk)</noscript></figure><figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh6.googleusercontent.com/Dk5Z55zOd5YGHTOJWbnAnReoyaouNtc8jQcwoVO58DhUjA9wBB7Pif-YNc1Sb90ailJlspXKKVkoAtN0Td76fH3jPLcRCF4K4-txvU2rcZa1Ga5-FVkAa-NwbcUkr40gHlkQvEg-d0fQ3sPiAhFZJ0jkjr1qYocakDftiiayH_ZzeM4aLnq92UL9kQ)</noscript></figure>Le graphique circulaire montre comment l’événement spécial est divisé entre les consommateurs sous la forme d’un cercle divisé en nombre de jours ouvrables pour chaque consommateur. Ici, le graphique représente l’ensemble du type d’événement spécial, et les “tranches” représentent les parties du nombre de jours de travail pour chaque consommateur.

Vous pouvez modifier la plage des statistiques à l’aide des filtres supérieurs.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh6.googleusercontent.com/IyGMiSR6Ham1n2yOlJ2fH1SpmYZ3FpOpkUrYOOVyogqlQbiSmt7ppNoa-XwVjbo1gdDvRA3YedwSms5Vy0_kbYPFvnC1ZQ2zj_k56OpvgPCuZzB3YECIZhqtU3Q7APH3IWW_1FF_ir4lQ9Tw3I12-1CO7JaRWMFB-y3EDDiNN7RN0-0jxFUX2QTp)</noscript></figure>Dans l’exemple ci-dessus, nous pouvons voir que A.Auger (vert foncé) travaille un total de 3 soirs en octobre 2022. C.Bouthillier (jaune) travaille 1 soir. Sur la base des statistiques passées, vous pouvez mieux répartir le type d’événement spécial pour la prochaine période.