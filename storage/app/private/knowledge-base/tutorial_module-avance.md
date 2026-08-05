---
title: "Module avancé - Team2Book!"
url: "https://team2book.com/tutoriels/module-avance?lang=fr"
---

Introduction
============

Dans ce tutoriel, nous allons présenter les fonctions du module avancé et vous guider pour les utiliser efficacement. Actuellement, deux onglets divisent les fonctionnalités avancées : Seuil de configuration et paramètre de l’Assignateur.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh3.googleusercontent.com/zxqVdHPkgZmU97PVTt0gxoEn5orLI1upGVW30py-BjoKWkASXW1nq5n-UJD2D8fa1wePztizAsu6DKh7Ug1DF2I_b_llGQn6cVlY_nYBlFo-ia5jTL6N2eAzCbv2BaK3dp5w_2l7XduhYXB5Zz1fVfo)</noscript></figure>La section **Seuil** de configuration vous permet de configurer des seuils pour divers aspects. Par exemple, les ressources libres, la disponibilité des consommateurs et les événements de ressources.

La section Paramètres de l’**Assignateur**, vous trouverez des paramètres supplémentaires pour affiner le processus d’assignation des consommateurs. Ici, vous pouvez définir l’écart minimum entre des événements spéciaux consécutifs. La section **Assignateur** vous permet de définir le nombre de quarts de travail consécutif. Ceci pour chaque consommateurs et chaque type d’[événements spéciaux](https://team2book.com/tutoriels/module-des-evenements-speciaux?lang=fr).

Pour accéder au menu avancé dans Team2Book, veuillez suivre ces étapes :

1. Commencez par vous connecter à votre compte Gestionnaire d’équipe Team2Book. Une fois connecté, Team2Book vous dirigera vers sa page d’accueil.
2. Recherchez l’onglet “Espace membres” sur la page d’accueil et cliquez dessus.
3. À l’intérieur de l’espace membres, vous trouverez un menu.
4. Localisez et cliquez sur “Tableau de bord client” dans le menu.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh4.googleusercontent.com/OuQtIv6rHaltvR8FRlVwG0Zp03gKNK0FF6Byi9YzagO-fLZlfdyRmUflTlfm5fmr63GH2t4-v2p3PpVMw2EH0sKD5P2aF8rVx4wc7q8er0z_k9XGzmhkz92woM2mojhV2JsO2hCpMg9GzyVS6Wz713c)</noscript></figure>5. Sur le tableau de bord client, accédez au coin inférieur gauche de l’écran.
6. Dans cette zone, vous verrez une option intitulée “Avancé”. Cliquez dessus pour accéder au menu avancé.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh4.googleusercontent.com/7LOok0T8dDMawwLoKACbndD38XBg0pA1uGUxTnxqkwdmEEURapSmByxzBrgxQG17aQI5E4kAzrlk8DetccbM1x3Sy3tQoMNL-RNvVvUTz5V-Q73kSbeXFDThTdqzM5uj0Jkah5exT8_K0UTGM1Hpgcg)</noscript></figure>Plongeons dans les détails de chaque onglet.

Seuil de configuration
======================

Avec la fonctionnalité Seuil de configuration dans Team2Book, définissez des intervalles de temps en heures pour les paramètres. Voici les principaux paramètres que vous pouvez configurer :

1. **Ignorer les ressources libres inférieures à (heures) :** en configurant ce paramètre, vous pouvez déterminer la durée minimale pendant laquelle une ressource doit être disponible pour être affichée dans le sous-calendrier “Ressources libres”. Par exemple, si vous indiquez 2 heures, toute ressource libre disponible pendant moins de 2 heures ne sera pas affichée sur le sous-calendrier.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh4.googleusercontent.com/LoIo6wDO0zVzExv6WCYXELy4RNe5HisQ7mDpfR1nDze-yq924EA7zXArss01vN_wBG14fOMdtrPOQKITfjtyKNLAPPys9K7dfgys_fBLVTOKcQZRf29_racoemWM097ivziismbclFBJBg9W1FsNbHU)</noscript></figure>Dans Team2Book, l’[activation des ressources libres et des options de réservation](https://team2book.com/tutoriels/module-details-du-client?lang=fr) affiche toutes les ressources sur un sous-calendrier séparé. Les consommateurs peuvent ensuite réserver des ressources à l’aide de leur sous-calendrier de disponibilité. Cependant, en utilisant les fonctionnalités avancées de configuration de seuil, vous pouvez définir des valeurs d’heure spécifiques. En définissant “Ignorer les ressources gratuites inférieures à”, les ressources dont la disponibilité est courte n’apparaîtront pas dans le sous-calendrier “Ressources gratuites”.

2. **Ignorer la disponibilité des consommateurs inférieure à (heures) :** ce paramètre vous permet de définir l’intervalle de temps minimum pendant lequel un consommateur doit être disponible pour être éligible à l’affectation de ressources. Par exemple, si vous le définissez sur 3 heures, le planificateur n’affectera pas de ressource à un consommateur si sa disponibilité est inférieure à 3 heures.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh6.googleusercontent.com/BAcUWWeQnauOeE2Y7Fc5_P_PPq34x57I4uG-DZ6X5K0cThtiLpBvomHEqgo13GcKlhQluKnJKsNcyVBDKKon6tLL70TwHjewS-UuLnAiQF6bpImMdMNaRDPtuim2po55IHZhsMzD9yEAbmLT7eKIgNg)</noscript></figure>De même, dans [Team2Book](https://team2book.com/?lang=fr), le planificateur attribue une ressource à un consommateur si la disponibilité du consommateur concorde avec cette ressource. En configurant “Ignorer la disponibilité des consommateurs inférieure à”, le planificateur n’attribuera pas de ressources aux consommateurs dont la disponibilité est inférieure à la valeur horaire spécifiée, ce qui permet une planification efficace dans Team2Book.

3. **Intervalle minimal souhaité entre les événements de ressource (heures) :** avec cette configuration, vous pouvez spécifier l’intervalle de temps minimal requis entre les événements de ressource consécutifs. Par exemple, si vous le définissez sur 1 heure, il doit y avoir un intervalle d’au moins 1 heure entre deux événements de ressource pour la même ressource. Team2Book tentera d’affecter des consommateurs à sa ressource préférée si cette ressource est libre pendant au moins X heures après une affectation précédente. Si le nombre de ressources est insuffisant, Team2Book ignorera ce paramètre.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh6.googleusercontent.com/ephgNFgUbxaQdXvjilzeDD-SaQNouqAXBCt_yRooS3BVkZI-Wi8v7Dhq35Adk-B4Coyj4Wt_u4YL-8BDDs_z2XbYOrcp94Ut_j4mKyApCK_semGht33Kgok4yW96O8zmN16WFfbpOnH-KH-Om1dk9Ts)</noscript></figure>Tolérance de contrainte pour différents intervalles de temps
------------------------------------------------------------

Dans Team2Book, le concept de [contrainte](https://team2book.com/tutoriels/module-de-contraintes?lang=fr) fait référence au nombre minimum de consommateurs disponibles requis dans un laps de temps spécifique. La configuration de la tolérance de contrainte offre la possibilité de modifier les valeurs de tolérance en fonction des besoins des clients.

Personnalisez les niveaux de tolérance de contrainte pour différents intervalles de temps avec la fonctionnalité “Tolérance de contrainte pour différents intervalles de temps”. Les paramètres suivants sont disponibles pour la configuration :

1. **Tolérance de contrainte – Matin (heures) :** Avec ce paramètre, vous pouvez définir la tolérance de contrainte pour l’intervalle de temps du matin. Team2Book considère un consommateur présent s’il est disponible entre début de journée **+ X heures** et **midi – X heures**. Ce paramètre s’applique uniquement à la section contrainte du tableau de bord.

Par exemple, définissez la valeur de ce champ sur 1.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh6.googleusercontent.com/H6xPp3gAqQRTKViMjwKkaSw7BJGDoKdUvPUustRo5IVfrsBhTWbcUwjXZRBZPcNWrMfoVaTsKybly3rk0NYwq9I7nGHCfuIvuZDECTvOCcemq4wNWPs9Zhv1wHU8ffAph77w6i26ZcB8t8PxVehuOEA)</noscript></figure>Par exemple, supposons que la journée de travail de votre organisation s’étende de **8 h 30 à 17 h 00**. L’heure du lunch commençant à 12 h 30. Si la valeur de ce champ est à 1, Team2Book considérera un consommateur présent le matin s’il est disponible de **9h30 (8h30 + 1h)** à **11h30 (12h30 – 1h)**. Vous n’êtes pas disponible dans cette plage horaire ? Vous ne serez pas compté pour respecter cette contrainte.

2. **Tolérance de contrainte – Après-midi (heures) :** ce paramètre vous permet de spécifier la tolérance de contrainte pour l’intervalle de temps de l’après-midi. Team2Book considère un consommateur présent s’il est disponible entre **midi + X heures** et **fin de journée de travail – X heures**. Encore une fois, ce paramètre s’applique uniquement à la section contrainte du tableau de bord.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh3.googleusercontent.com/MfelzESFeBDBD2UYOOcSHCIPsaPvph7Uv4CHQ58H22CkrNWM_2w09v_5Gd17hvcxqttI7cgYoh73Tzw1Y0w2lkRjG1pPO28N3PPfZPKU-GJ28AI9zBorVlcFJVa0k476bNNa6GxjDTTb_cZwety-vZc)</noscript></figure>En reprenant l’exemple précédent d’une journée de travail de **8h30 à 17h00**. avec l’heure du lunch à **12h30**, si la valeur de ce champ est à 1, Team2Book considérera un consommateur présent l’après-midi s’il est disponible à partir de **13h30**. **(12h30 + 1h) à 16h00 (17h – 1h)**. En dehors de cette plage horaire ? Vous ne serez pas compté parmi les consommateurs disponibles pour cette contrainte.

3. **Tolérance de contrainte – Jour (heures) :** Ce paramètre permet de définir la tolérance de contrainte pour toute la journée. Team2Book considère qu’un consommateur est présent s’il est disponible entre le **début de la journée + X heures** et la fin de la **journée de travail – X heures**.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh4.googleusercontent.com/7gbLX2_9yFhcjr1jP24q0dFGmT8TmrjxdqD4FF5HnoPIsL9_UMfkM__JZVRrT65r0Orw2wCQXN6h-KeUH6UV23c8y9vi2JTcoiJWn6n85F_rEEa7k0zMYb_3dpxrlYkLwTDQlD-7t1NEjwwJWmAzF2o)</noscript></figure>Semblable aux paramètres précédents, cela s’applique uniquement à la section contrainte du tableau de bord. En reprenant l’exemple d’une journée ouvrable de **8h30 à 17h**, si la valeur de ce champ est à 2, Team2Book considérera un consommateur présent pour la journée s’il est disponible de **10h30** (8h30 + 2 heures) à **15h00**. (17h – 2h). En dehors de cette plage horaire ? Vous ne serez pas compté parmi les consommateurs disponibles pour cette contrainte.

Ajustez la tolérance aux contraintes pour aligner les affectations des consommateurs sur des intervalles de temps spécifiques dans Team2Book.

Paramètres de l’assignateur
===========================

Lorsque vous activez l’attribution automatique, le planificateur s’occupe d’attribuer automatiquement les événements spéciaux aux consommateurs correspondants. Cependant, si vous voulez peut-être plus de contrôle sur le processus d’affectation. Dans de tels cas, nous avons fourni une option pour sélectionner manuellement un consommateur et personnaliser certaines fonctionnalités avancées.

Paramètres d’attribution dans le module avanc de Team2Book : **écart minimum** entre les événements spéciaux consécutifs et le **nombre d’événements consécutifs**.

Écart minimum entre les événements spéciaux consécutifs
-------------------------------------------------------

L’attribut **Écart minimum** entre les événements spéciaux consécutifs dans Team2Book vous permet de spécifier l’écart de temps minimum requis entre les événements spéciaux consécutifs attribués à un consommateur. Ce paramètre garantit qu’il y a une durée minimum spécifique entre deux événements spéciaux consécutifs.

L’attribut **Écart minimum** entre événements spéciaux consécutifs offre une fonction de filtre pour les options consommateur, type d’événement spécial source et type d’événement spécial de destination. En appuyant sur la case de chaque paramètre, vous pouvez facilement filtrer vos sélections pour le consommateur, le type d’événement spécial source et le type d’événement spécial destination. Une fois que vous les avez choisis, le système affiche leurs combinaisons correspondantes, vous permettant de définir un écart minimum entre les événements spéciaux consécutifs pour le consommateur sélectionné.

Par exemple, choisissez “Efirem Tamiru” comme consommateur, “Emergency AM” comme type d’événement spécial source et type d’événement spécial destination.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh4.googleusercontent.com/acGHIpXcotADanJj42QH6oj7VECI_9tKNEwW9GURvq08bmRhd3vhxhLAuJn7z04UM1vLCWl7nBljXnRWa3nfAnv2jXogyZL1lPFg0mBNYw9gn_h9id6ZK0Cm4ySNHO2B8sy-7pHoSQSt6qc2aQj9Fzw)</noscript></figure><figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh5.googleusercontent.com/3mge72aE1bYyScQ-Nv0YIgfLANuUlWJaGaqnqqE9ak5bXf6sR1bOGCKr3lohzRp_OB41tzh5Hj51NIPhXFreY_YpuEcnRtK5SV1FhkzCTkVrZfeKoqKsBxQGA9dFqtxHAgMJfAQ5odIKLzFFHTAnXPE)</noscript></figure>La fonction “Ecart minimum entre les événements spéciaux consécutifs” offre plusieurs attributs pour personnaliser le processus d’affectation. Voici les principaux aspects de cette fonctionnalité :

- Liste des consommateurs : cet attribut vous permet d’afficher et de sélectionner n’importe quel consommateur dans une liste. Une fois que vous avez sélectionné le consommateur, le système affichera les détails de son événement spécial pour une personnalisation plus poussée.

- Type d’événement spécial source : cet attribut fait référence à l’événement auquel le consommateur participe ou travaille actuellement.

- Type d’événement spécial de destination : cet attribut indique le prochain événement auquel le consommateur sera affecté au travail. Les types d’événements spéciaux source et destination peuvent être identiques ou différents. Par exemple, les événements nommés « Week-end » et « Urgence » peuvent se combiner de différentes manières.

- Écart minimum (heures) : cet attribut vous permet de définir l’intervalle de temps minimum entre des événements spéciaux consécutifs pour un consommateur. En ajustant cette valeur, vous vous assurez que le système n’affecte pas un autre événement spécial au consommateur pendant la durée d’intervalle minimale spécifiée.

Le système génère automatiquement une liste d’arrangements possibles entre les types d’événements spéciaux source et destination.

Pour afficher la combinaison de type d’événement spécial, il y a deux conditions essentielles à considérer :

**Attribution automatique :** Assurez-vous que l’attribution automatique est activée pour le type d’événement spécial sélectionné. Lorsque cette fonction est activée, le système affecte automatiquement les consommateurs au type d’événement spécial en fonction de leurs préférences et de leurs disponibilités.

**Consommateurs cibles :** confirmez que le consommateur est désigné comme l’un des consommateurs cibles pour le type d’événement spécial source ou destination. En désignant des consommateurs spécifiques comme cibles, vous pouvez vous assurer qu’ils feront partis de la liste des consommateurs pouvant être affectés automatiquement à ces événements spéciaux.

Les utilisateurs ont la possibilité de gérer ces conditions via la page Tableau de bord -&gt; Types d’événements spéciaux. Ils peuvent activer ou désactiver l’attribution automatique pour des types d’événements spéciaux particuliers et définir les consommateurs cibles désirés.

En remplissant ces deux conditions, vous optimisez le processus d’affectation, en vous assurant que les consommateurs sont efficacement affectés à leurs types d’événements spéciaux préférés en fonction de leur disponibilité et des préférences.

Pour vous fournir une meilleure compréhension de la fonctionnalité “Ecart minimum entre les événements spéciaux consécutifs”, passons en revue un scénario spécifique. Supposons que nous sélectionnions un consommateur nommé Efirem Tamiru et que nous souhaitions personnaliser les types d’événements spéciaux source et destination, ainsi qu’une durée d’intervalle minimale.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh3.googleusercontent.com/N8qONiu4fg3kswPMIRyozfoyG1pPshMtkFn3s0LohwFS5tEgfjpqAvZQhI9iRNGjRhwlQ-EyU4cxZ2Hr4iA_dWLye8zMeODgTVK-aMSwDocpPnhexPBBC6orp9dGvWH6ihp33Y0EtZMqMk98Pniy7GA)</noscript></figure>Choisissons “Emergency AM” à la fois comme type d’événement spécial de source et comme type d’événement spécial de destination. Cela signifie qu’Efirem Tamiru participe actuellement à l’événement “Emergency AM” et sera ensuite affecté au même événement.

Ensuite, définissons un écart minimum de 24 heures. **Cela garantit qu’une fois qu’Efirem Tamiru a terminé l’événement “Emergency AM”, il ne se verra pas attribuer un autre événement “Emergency AM” pendant au moins 24 heures.**

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh5.googleusercontent.com/3mge72aE1bYyScQ-Nv0YIgfLANuUlWJaGaqnqqE9ak5bXf6sR1bOGCKr3lohzRp_OB41tzh5Hj51NIPhXFreY_YpuEcnRtK5SV1FhkzCTkVrZfeKoqKsBxQGA9dFqtxHAgMJfAQ5odIKLzFFHTAnXPE)</noscript></figure>Cliquez sur cette icône pour enregistrer l’entrée

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh4.googleusercontent.com/KnKIBVviisGjC8iKR02Z_eZEn-RZAV3BECpYV1uktgqoK6S1w-m3X_pgy_uTgARJa7CED6Ro2qeQgjN-BiuNEpqCi4alxhEDfePdf-6aUFPguaKSJXrokhIBPt4Si8b-NQ_FPXoDWuGid60cszM0GiY)</noscript></figure>Vous obtiendrez des informations pour votre nouvelle mise à jour

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh6.googleusercontent.com/9hXiUY71TOxvXxAPIE2u8jNGb9tT0XMoUEqEYUuU2Nitz2ngPovF_cdoBXKNI7B-hGsk37X6TTl9xaosTVE5ZPVPNdXb0QtGQAXaDEmS91uxzgXxNYhpQKkn9AZHg6qgjksOWtBXvmTAMZq4kDtbBdU)</noscript></figure>Après avoir enregistré ces modifications, accédez au tableau de bord du planificateur et cliquez sur “Attribuer des événements spéciaux”.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh3.googleusercontent.com/7oER8YZJ1Yajhe7YZ9bf6E_wORtpKWz7FdknFZXlvKa2l1_rW0WQjk3Ua0B4SMV95ee-C6VVdEZvUOCe-3jH3glAIvidHzPWX3FhnWyT-M5k8dOYLYDUCGAFz1fPQyisnbtXVveWcgFXFawexvWuJVI)</noscript></figure>Sélectionnez le type d’événement spécial souhaité, qui dans ce cas est “Emergency AM”. Entrez la date correspondante et cliquez sur “Attribuer”.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh4.googleusercontent.com/hGOvPt-vjpTdx4YUusFSwLCX5MIvuhQOtDXzpdXV7SniV3mJ_jrrvwr7rL7NE8ZB0dTxht9ofmn49MC4N6QjfOwcBvtAhaPHuPF2RnUUoxpI8hBfoq3E7ew8iax6NCTsipf_Qa5E8pZk3qEOD91cAQk)</noscript></figure>En faisant cela, vous pourrez voir les informations sur l’événement récemment mises à jour.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh3.googleusercontent.com/NBS_KqhN037A46B6HIQclvsv4FD-KSSnIvWJHT42i4K-udRv3u0WEG6XtusceyZ93zZxD90lciL7L3Z5uOCUEr9bsIOsGYOPAcoWsg4xszJM0svJDYjW27ntey4TEe5bRhtSrT1WGgwFhfPf2FoRnGM)</noscript></figure>Le calendrier du planificateur indiquera l’attribution réussie de “Emergency AM” à Efirem Tamiru avec l’écart minimum désigné.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh5.googleusercontent.com/8OCJM5mD7p6_tStkctHRxiZOuoAzXa6AZIkAAjE28ehwfeH6SbIF3K-LgL13mRDIWiJlA-cNwAEQSqVLrRtGJa3lezvZhCibAMMSWD_e6ga3UwPKhWL_M6lfI0PMQUWz1qjWOjN0HZwQ_wLxUVzt34E)</noscript></figure>Team2Book veillera à ce qu’il y ait au moins un intervalle d’un jour (24h) entre deux événements spéciaux consécutifs. Cela signifie qu’une fois qu’un consommateur a participé à un événement spécial “Emergency AM”, Efirem Tamiru ne se verra pas attribuer un autre événement spécial pendant au moins 24 heures.

La valeur de l’écart minimum entre les événements spéciaux consécutifs peut être comprise entre 0 et 744.

Voici quelques exemples:

- Définir la valeur sur 0 signifie qu’aucun écart minimum n’est requis entre des événements spéciaux consécutifs. Cela permet l’attribution consécutive immédiate d’événements spéciaux à un consommateur.

- Si vous définissez la valeur sur 24, cela indique un intervalle minimum de 24 heures entre des événements spéciaux consécutifs. Cela garantit qu’un consommateur dispose d’une journée complète de repos entre deux événements spéciaux.

- Si vous définissez la valeur sur 168, cela représente un écart minimum de 168 heures, équivalent à 1 semaine. Cela signifie qu’un consommateur doit avoir au moins une semaine de repos entre des événements spéciaux consécutifs.

- Si vous définissez la valeur sur 744, cela signifie un écart minimum de 744 heures, équivalent à 31 jours. Cela garantit qu’il y a un mois complet entre des événements spéciaux consécutifs pour un consommateur.

Pour clarifier davantage le concept “d’écart minimum entre des événements spéciaux consécutifs”, explorons un autre exemple. Le consommateur Efirem Tamiru préfère l’équipe du soir le vendredi, pas les événements spéciaux du weekend.

Dans ce cas, le premieer événement spécial est « Quart de soirée (Evenings) » et le deuxième événement est « Weekend ». Efirem Tamiru veut s’assurer qu’il y ait un minimum d’écart entre ces deux événements.

Pour y parvenir, nous devons fixer un écart minimum de 48 heures. Ceci représente un écart de 2 jours (samedi et dimanche) entre les deux événements spéciaux consécutifs.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh6.googleusercontent.com/K1iESJdrF8MDDrjAZsjHyEJxRJ-iRsu5xNxWrMjTrNAJU9sFHtJ_3__QEywHRZ6PTIYmBPCeYGcechnxOwNxcA8kzhmwHV4977xsTDPKEWm0xJTuL3tBRwryhyfdgPnx-z4WCSIQNRLlmld5sSyywqA)</noscript></figure>Enregistrez la modification pour empêcher l’affectation du weekend d’Efirem Tamiru pendant 48 heures après l’équipe du soir. Pour observer le résultat mis à jour, accédez au tableau de bord du planificateur et cliquez sur “Attribuer des événements spéciaux”. Sélectionnez les types d’événements spéciaux pertinents, dans ce cas, l’équipe du soir et le weekend. Entrez la date appropriée et cliquez sur “Attribuer”. Après la mise à jour, affichez les informations sur l’événement reflétant l’écart minimum entre les événements spéciaux consécutifs.

La planificateur n’affectera pas qu’Efirem Tamiru à l’événement spécial Weekend pendant 48 heures après avoir terminé un quart de soir.

**Pour définir un écart minimum pour tous les consommateurs**

Pour définir un écart minimum pour tous les consommateurs, utilisez la fonction de filtre “Définir l’écart minimum pour tous les consommateurs”. Appuyez sur les options Type d’événement spécial source et Type d’événement spécial de destination pour sélectionner le type d’événement spécial souhaité. Après cela, définissez l’écart minimum pour tous les consommateurs et cliquez sur Enregistrer. Cette option pratique vous permet d’appliquer le même écart minimum pour tous les consommateurs.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh6.googleusercontent.com/ZLcDJE-Ux-cp3hawnItHTetjjei7ppFQk6b5LHUsLJWjTSPVCk2JPCCg48LWPOsNAj0ovunc4r2aFj1iVVxk_w3MpWNEnb5eLsIWzXqRliwoRi4jsQBEapd1uTrHIb_I3Tuu7G05usqtW7siOJyymsI)</noscript></figure>Le réglage du paramètre Écart minimum contrôle la fréquence et l’espacement des affectations d’événements spéciaux. Ce réglage s’applique à tous les consommateurs en fonction de vos besoins.

Nombre d’affectations consécutives à des événements spéciaux
------------------------------------------------------------

Le paramètre “Nombre d’événements consécutifs” dans Team2Book vous permet de contrôler l’affectation consécutive d’un consommateur à un type d’événement spécial spécifique. En définissant cette valeur, vous pouvez déterminer combien de fois attribuer consécutivement à un consommateur le même type d’événement spécial.

L’attribut Nombre d’affectations d’événements spéciaux consécutifs fournit une fonction de filtre pour les options consommateur, premier événement spécial et le deuxième événement spécial. En appuyant sur la case de chaque paramètre, vous pouvez facilement filtrer vos sélections. Une fois que vous les avez choisis, le système affiche leurs combinaisons correspondantes. Cela permet d’affecter consécutivement des consommateurs pour le consommateur sélectionné. Par exemple, sélectionnez “Efirem Tamiru” comme consommateur et “Emergency AM” comme Premier événement spécal et deuxième événement spécial.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh4.googleusercontent.com/2TDEmDArJOdBiunV9gQibrn6sQxCsT1NN22Mu2SHr9nKSg8G6DEdlhf1g8tGM_-IZ1BMn_V1wKR1VFRP0VHfeMIcD7kYU-aIvJjUpAaW6n1msQMOFQ8U2drN4iwPEWamv4o4cSHP69gk_5mwk3QlHTQ)</noscript></figure>Avec cette fonctionnalité, vous avez la possibilité d’attribuer des événements spéciaux consécutifs pour un consommateur. Par exemple, si vous souhaitez programmer trois événements spéciaux consécutifs pour un consommateur. Vous pouvez facilement définir le “Nombre d’affectations d’événements spéciaux consécutifs” sur 3. Cela signifie que le système attribuera au consommateur trois événements spéciaux consécutifs sans aucun intervalle entre les deux.

Définir la valeur sur 2 permet à Consommateur – Efirem Tamiru d’être affecté a Emergency AM deux fois de suite.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh4.googleusercontent.com/rx5RmE0MPjFJUFTv5xLlg_54Gwe4ctE8qagSYt0yuaoAVDbyIHL_nEi6BCrkTVF2KivfmY04_ZUup06WDRpw-6ckmH-LSKi8pFbWkRGjlVAGrjp7PpZKKhu2ayyFXQLEK5qj366B2DRXRWsb20QX2HU)</noscript></figure>Cela garantit qu’Efirem Tamiru participe au type d’événement spécial – Emergency AM pour deux occurrences consécutives.

Il est important de noter que la valeur sur 0 ou 1 n’a aucun effet sur les affectations d’événements consécutifs. Pour activer les affectations d’événements consécutifs, vous devez définir la valeur sur 2 ou plus.

De plus, il existe le paramètre “Écart maximal (heures)”, qui détermine l’intervalle de temps maximum autorisé entre des événements consécutifs. Si l’écart entre deux événements dépasse l’écart maximal spécifié, l’assignateur n’attribuera pas ces événements consécutivement à un consommateur.

Par exemple, si vous souhaitez affecter le Consommateur X deux fois le samedi et le dimanche. De plus vous voulez éviter les affectations consécutives le dimanche et le samedi suivant. Dans ce cas, vous pouvez définir l’écart maximum sur 24 heures. Cela signifie qu’il doit y avoir un intervalle de moins de 24 heures entre les affectations du dimanche et du samedi.

Par défaut, le système fixe l’intervalle maximal entre les événements spéciaux consécutifs à 168 heures, soit l’équivalent d’une semaine. Si aucune valeur spécifique n’est attribuée pour l’écart maximal, le système assumera automatiquement cet écart par défaut. Le paramètre par défaut de 168 heures indique que si l’intervalle ente 2 événements spéciaux est de plus de 1 semaine, le compteur d’événements spéciaux consécutifs sera réinitialisé et l’assignateur aura l’option de choisir un autre consommateur. Veuillez noter que vous avez la possibilité de personnaliser ce paramètre en fonction de vos besoins spécifiques. Si vous préférez une durée d’intervalle maximale différente entre les événements spéciaux, vous pouvez facilement ajuster la valeur en conséquence.

**Pour définir le nombre d’affectations consécutives d’événements spéciaux pour tous les consommateurs**

Utilisez la fonction de filtre “Définir le nombre d’affectations d’événements spéciaux consécutifs pour tous les consommateurs” pour définir le nombre d’affectations d’événements spéciaux consécutifs pour tous les consommateurs. Appuyez sur les options premier événement spécial et deuxième événement spécial pour sélectionner le type d’événement spécial souhaité. Après cela, spécifiez le nombre d’événements consécutifs et l’intervalle maximal (heures), puis cliquez sur Enregistrer. Cette option vous permet de définir le nombre d’affectations d’événements spéciaux consécutifs pour tous les consommateurs.

<figure class="wp-block-image">![](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![](https://lh3.googleusercontent.com/zWEEcSMzhDTGC7s6mLEDoYOWQlJ_OdwLkBCLXlfVonA9FuimOgBCO-glGJXk4s8mjjC85vh-95b4oLBgSocnCjVwnATTJNPpLlZUVCduvjqa5Gxyp58rEwiYqT-PL56PAQ5N_mHeMMjEe1Bsrh7BYZo)</noscript></figure>**Conditions simultanées : écart minimum et nombre d’affectations consécutives**

Dans les cas où les conditions « Écart minimum entre événements spéciaux consécutifs » et « Nombre d’affectations d’événements spéciaux consécutifs » s’appliquent à un scénario, le système donnera la priorité à la condition « Nombre d’affectations d’événements spéciaux consécutifs ». Cela signifie que le système remplacera l’exigence d’écart minimum et planifiera des événements spéciaux en fonction du nombre spécifié d’affectations consécutives.

Par exemple, supposons qu’un consommateur définisse un intervalle minimum de 24 heures entre les événements spéciaux. De plus, la condition “Nombre d’affectations d’événements spéciaux consécutifs” pour programmer trois événements spéciaux consécutifs pour lui-même. Dans ce scénario, le système priorise les affectations consécutives. Il programme les trois événements consécutifs, sans tenir compte de l’exigence d’écart minimum.

Conséquemment, notez que le nombre spécifié d’affectations d’événements spéciaux consécutifs a priorité sur l’exigence d’écart minimum.