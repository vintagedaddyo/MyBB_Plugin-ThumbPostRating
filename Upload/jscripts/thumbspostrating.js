/*
 * MyBB: Thumbs Post Rating
 *
 * File: thumbpostrating.js
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

function thumbRate(tu,td,pid)
{
	new Ajax.Request('xmlhttp.php?action=tpr&tu=' + tu + '&td=' + td + '&pid=' + pid + "&ajax=1&my_post_key=" + my_post_key,{onComplete:thumbResponse});
	return false;
}

function thumbResponse(request)
{
	if(error = request.responseText.match(/<error>(.*)<\/error>/))
		alert("An error occurred when rating the post.\n\n" + error[1]);		
	else
	{
		response = request.responseText.split('||');
		if(response[0] != 'success')
			alert("An unknown error occurred when rating the post.");
		else
		{
			var pid = parseInt(response[1]);
			var x=document.getElementById('tpr_stat_' + pid).rows[0].cells;	
			if( response[4] == 1 )
			{
				x[1].innerHTML = '<div class="tpr_thumb tu1"></div>';
				x[2].innerHTML = '<div class="tpr_thumb td0"></div>';
			}
			else if( response[4] == -1 )
			{
				x[1].innerHTML = '<div class="tpr_thumb tu0"></div>';
				x[2].innerHTML = '<div class="tpr_thumb td1"></div>';
			}
			else if( response[4] == 0 )
			{
				x[1].innerHTML = '<a href="JavaScript:void(0);" class="tpr_thumb tu2" title="Rate thumbs up" onclick="return thumbRate(1,0,' + pid + ')" ></a>';
				x[2].innerHTML = '<a href="JavaScript:void(0);" class="tpr_thumb td2" title="Rate thumbs down" onclick="return thumbRate(0,1,' + pid + ')" ></a>';
			}
			else
			{
				alert('Error: Invalid rating input.')
			}

			x[0].innerHTML = parseInt(response[2]);
			x[3].innerHTML = parseInt(response[3]);

			if(response[5] == 'show_undo')
			{
				document.getElementById('tpr_remove_' + pid).innerHTML = '<a href="JavaScript:void(0);" onclick="thumbRate(0,0,' + pid + ')" >Undo rating</a><br />';
			}

			if(response[5] == 'hide_undo')
			{
				document.getElementById('tpr_remove_' + pid).innerHTML = '';
			}
		}
	}
	return false;
}