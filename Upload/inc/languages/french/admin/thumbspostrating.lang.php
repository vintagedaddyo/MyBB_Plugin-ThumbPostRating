<?php
/*
 * MyBB: Thumbs Post Rating
 *
 * File: thumbpostrating.php (admin)
 *
 * Authors: TY Yew & Vintagedaddyo
 *
 * MyBB Version: 1.8
 *
 * Plugin Version: 1.4
 *
 *  This file is part of Thumbs Post Rating plugin for MyBB.
 *
 *  Thumbs Post Rating plugin for MyBB is free software; you can
 *  redistribute it and/or modify it under the terms of the GNU General
 *  Public License as published by the Free Software Foundation; either
 *  version 3 of the License, or (at your option) any later version.
 *
 *  Thumbs Post Rating plugin for MyBB is distributed in the hope that it
 *  will be useful, but WITHOUT ANY WARRANTY; without even the implied
 *  warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See
 *  the GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http:www.gnu.org/licenses/>.
 */

//

$l['tpr_info_name'] = 'Notation apres publication';

$l['tpr_info_desc'] = 'Ajoutez un systeme de notation pour chaque poste individuel.';

//

$l['tpr_set_group_1_title'] = 'Classement des annonces par les pouces';

$l['tpr_set_group_1_desc'] = 'Parametres du plugin Thumbs Post Rating.';

//

$l['tpr_set_usergroups_title'] = 'Groupes d utilisateurs';

$l['tpr_set_usergroups_desc'] = 'Groupes d utilisateurs ayant autorise l evaluation de la publication. (Par defaut: 2,3,4,6) <br /> 0 signifie que tous les groupes d utilisateurs peuvent attribuer une note, a l exception de l invite.';

//

$l['tpr_set_forums_title'] = 'Forums';

$l['tpr_set_forums_desc'] = 'Les forums a exclure pour avoir la fonction de postage. 0 signifie que tous les forums peuvent utiliser la fonction d evaluation. <br /> Remarque: vous devrez egalement saisir l identifiant du sous-forum.';

//

$l['tpr_set_selfrate_title'] = 'Desactiver l auto-evaluation';

$l['tpr_set_selfrate_desc'] = 'En desactivant l auto-evaluation, l’utilisateur ne peut pas evaluer son propre message.';

//

$l['tpr_set_undorate_title'] = 'Activer la notation d annulation';

$l['tpr_set_undorate_desc'] = 'Si active, l utilisateur peut supprimer (et changer) sa note apres avoir evalue une publication.';

//

$l['tpr_set_closerate_title'] = 'Activer la classification du fil ferme';

$l['tpr_set_closerate_desc'] = 'Si active, l utilisateur peut evaluer les publications dans un fil de discussion ferme.';

?>