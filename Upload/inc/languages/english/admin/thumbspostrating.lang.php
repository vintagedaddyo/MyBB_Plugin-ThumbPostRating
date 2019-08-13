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

$l['tpr_info_name'] = 'Thumbs Post Rating';

$l['tpr_info_desc'] = 'Add a thumbs up/thumbs down rating system on every individual post.';

//

$l['tpr_set_group_1_title'] = 'Thumbs Post Rating';

$l['tpr_set_group_1_desc'] = 'Settings for the Thumbs Post Rating plugin.';

//

$l['tpr_set_usergroups_title'] = 'Usergroups';

$l['tpr_set_usergroups_desc'] = 'Usergroups who allowed to rate the post. (Default: 2,3,4,6)<br /> 0 means all usergroups can rate, except guest.';

//

$l['tpr_set_forums_title'] = 'Forums';

$l['tpr_set_forums_desc'] = 'Forums to be excluded to have the post rating function. 0 means all forums can use the rating function.<br />Note: You will need to enter the sub-forum id as well.';

//

$l['tpr_set_selfrate_title'] = 'Disable self-rating';

$l['tpr_set_selfrate_desc'] = 'By disabling self-rating, user may not rate their own post.';

//

$l['tpr_set_undorate_title'] = 'Enable undo rating';

$l['tpr_set_undorate_desc'] = 'If enabled, user may remove (and change) their rating after they have rated a post.';

//

$l['tpr_set_closerate_title'] = 'Enable closed thread rating';

$l['tpr_set_closerate_desc'] = 'If enabled, user may rate the posts in a closed thread.';

?>