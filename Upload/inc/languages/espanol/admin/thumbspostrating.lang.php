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
 * Plugin Version: 1.5
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

$l['tpr_info_name'] = 'Calificacion de publicacion de Thumbs';

$l['tpr_info_desc'] = 'Agregar un sistema de calificacion de aprobacion / rechazo en cada publicacion individual';

//

$l['tpr_set_group_1_title'] = 'Calificacion de publicacion de Thumbs';

$l['tpr_set_group_1_desc'] = 'Configuracion para el complemento Thumbs Post Rating.';

//

$l['tpr_set_usergroups_title'] = 'Grupos de usuarios';

$l['tpr_set_usergroups_desc'] = 'Grupos de usuarios que permitieron calificar la publicacion. (Predeterminado: 2,3,4,6) <br /> Los huespedes no estan permitidos.';

//

$l['tpr_set_forums_title'] = 'Foros';

$l['tpr_set_forums_desc'] = 'Foros que se excluiran para tener la funcion de calificacion de publicacion. 0 significa que todos los foros pueden usar la funcion de calificacion. <br /> Nota: Tambien debera ingresar la identificacion del sub-foro.';

//

$l['tpr_set_selfrate_title'] = 'Desactivar la autoevaluacion';

$l['tpr_set_selfrate_desc'] = 'Al deshabilitar la autoevaluacion, el usuario no puede calificar su propia publicacion.';

//

$l['tpr_set_undorate_title'] = 'Habilitar calificacion de deshacer';

$l['tpr_set_undorate_desc'] = 'Si esta habilitado, el usuario puede eliminar (y cambiar) su calificacion despues de haber calificado una publicacion.';

//

$l['tpr_set_closerate_title'] = 'Habilitar clasificacion de hilo cerrado';

$l['tpr_set_closerate_desc'] = 'Si esta habilitado, el usuario puede calificar las publicaciones en un hilo cerrado.';

?>