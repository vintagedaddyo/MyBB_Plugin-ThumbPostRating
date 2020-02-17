# MyBB_Plugin-ThumbPostRating

Thumbs Post Rating MyBB Plugin
 
Plugin Version                                   : 1.3
Released date                                   : September 8, 2011
Supported MyBB version             : 1.4 - 1.6
License                                                 : GNU/GPL
 
@ MyBB Mod site            : http://mods.mybb.com/view/thumbs-post-rating
@ MyBB Community      : http://community.mybb.com/thread-84250.html
 
Author                                  : TY Yew
Author contact                  : [Email] or [PM] me via MyBB Community Forum
 
Due to multiple requests for a working version for 1.8...

Plugin Version                                   : 1.4
Released date                                   : August 12, 2019
Supported MyBB version             : 1.8
License                                                 : GNU/GPL
 
@ MyBB Mod site            : https://community.mybb.com/mods.php?acti...w&pid=1297
@ MyBB Community      : http://community.mybb.com/thread-84250.html
 
Author                                  : Vintagedaddyo
Author contact                  : [Email] or [PM] me via MyBB Community Forum


Plugin Version                                   : 1.5
Released date                                   : Feb 16, 2020
Supported MyBB version             : 1.8
License                                                 : GNU/GPL
 
@ MyBB Mod site            : https://community.mybb.com/mods.php?acti...w&pid=1297
@ MyBB Community      : http://community.mybb.com/thread-84250.html
 
Author                                  : Vintagedaddyo
Author contact                  : [Email] or [PM] me via MyBB Community Forum


Current localization:

- english
- englishgb
- espanol
- french
- italiano


Overview:
This plugin will add a thumbs up / thumbs down rating system on every individual posts.
Just like the one on the YouTube comment.
 
Features:
·         Non-obstructive AJAX (sends the rating and updates the result instantly without refreshing the page)
·         Language file support
·         Option to set which usergroup allowed to rate
·         Option to set which forum to be excluded to have the post rating function
·         Option to enable/disable self-rating
·         Option to enable/disable undo rating
·         Option to enable/disable rating in a closed thread
·         Compatible with both normal and classic postbit
  
Installation:
1.        Extract the files inside the "Upload" folder of Thumbs Post Rating zip package.
2.        Upload all the files extracted to the root of your forum directory.
3.        Login to ACP, go to Configuration > Plugins.
4.        Click "Install & Activate" next to the Thumbs Post Rating.
 
Uninstallation:
1.        Login to ACP, go to Configuration > Plugins.
2.        Click "Uninstall" next to the Thumbs Post Rating.
 
Upgrading from previous version:
1.        Login to ACP, go to Configuration > Plugins.
2.        Click "Deactivate" next to the Thumbs Post Rating.
3.        Extract the files inside the "Upload" folder of Thumbs Post Rating zip package.
4.        Upload all the files extracted to the root of your forum directory.
5.        If required, choose to replace any old files.
6.        Back to ACP Plugins section, click "Activate" next to the Thumbs Post Rating. 
 
FAQ
Q: How do I change the position of the rating box?
A: Move the <div class="float_right">{$post['tprdsp']}</div> code in the postbit template.
 
Q: How do I change the background color of the rating box?
A: Edit the background color value at .tpr_box in [forum directory]/CSS/thumbspostrating.css file.
 
Comments / Suggestion / Bug report:
Please post your feedback at the MyBB Community.
Your feedback is very much appreciated.
 
Credits:
I would like to thank for the following MyBB Community Forum members in helping me in this plugin:
·         Yumi
·         Steven
 
Technical information:
Number of files                : 6
Database changes           : Added 1 new table and 2 columns on an existing table
Template changes           : Modified 2 templates
SQL queries                        : One per page on showthread.php
 
Change Log
1.5 – 02/16/2020
- due to a user request, minor changes as follows: 
- primary stylesheet removal 
- theme attached stylesheet addition 
- font awesome usage instructions

1.4 – 08/12/2019
- minor changes for usage with MyBB 1.8 and also php 7.x
 
1.3 – 09/08/2011
- New: Undo rating
- New: Set whether the user can rate if the thread is closed
- New: Feedback when the post is not rated successfully
- New: Work with JavaScript disabled
- New: Deleting thread or post deletes rating
- Fixed: Take into consideration user's secondary usergroups when considering the permission
- Fixed: Block against guest rating
- Fixed: SQL injection vulnerability
- Fixed: Request forging vulnerability
- Improved: Codes improvement and rewrite
- Improved: Rating permission includes check for post/thread visibility
- Improved: Disable AJAX if MyBB's disable xmlhttp setting is set
- Improved: JS, CSS, template and language files only loaded when needed
- Improved: Calculation of new rating after submission is done server side (previously client-side)
- Improved: Reduces SQL queries to only 1 per thread (previously 1 per post)
- Improved: Reduces thumb image size by 95%
 
1.2 - 01/09/2011
- New: Language files support
- New: Ability to set which forum to be excluded to have the post rating function
- New: Ability to enable/disable self-rating
- Improved: Reduces SQL queries
- Improved: Code cleanup
 
1.1 - 12/24/2010
- Fixed: Rating maybe rated for unlimited no. of times
 
1.0 - 12/15/2010
- Initial release


Further Instructions for FA usage:

So you want to use this plugin but your theme uses font awesome and you would like to have the post thumbs also fontawesome icons?

ok, well first, find out if your theme uses font awesome 4 or 5 and then.....

Font Awesome 4:

Replace thumbpostrating.css with:

.tpr_box {
    border: 1px solid #9a9a9a;
    background-color: #ffff;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}

.tu_stat {
    color: #080;
    font-size: small;
}

.td_stat {
    color: #ff0000;
    font-size: small;
}

.small {
    font-size: xx-small;
}

.tpr_thumb {
    display: block;
    width: 15px;
    height: 16px;
    font-size: 14px;
    font-family: "FontAwesome";
}

.tu1:before,
.tu2:hover {
    content: "\f164";
    color: #080;
    text-decoration: none;
}

.td0:before,
.td2:before {
    content: "\f165";
    color: #ecbcb4;
    text-decoration: none;
}

.tu0:before,
.tu2:before {
    content: "\f164";
    color: #ecbcb4;
    text-decoration: none;
}

.td1:before,
.td2:hover {
    content: "\f165";
    color: #ff0000;
    text-decoration: none;
}




Font Awesome 5:

Replace thumbpostrating.css with:

.tpr_box {
    border: 1px solid #9a9a9a;
    background-color: #ffff;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}

.tu_stat {
    color: #080;
    font-size: small;
}

.td_stat {
    color: #ff0000;
    font-size: small;
}

.small {
    font-size: xx-small;
}

.tpr_thumb {
    display: block;
    width: 15px;
    height: 16px;
    font-size: 14px;
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
}

.tu1:before,
.tu2:hover {
    content: "\f164";
    color: #080;
    text-decoration: none;
}

.td0:before,
.td2:before {
    content: "\f165";
    color: #ecbcb4;
    text-decoration: none;
}

.tu0:before,
.tu2:before {
    content: "\f164";
    color: #ecbcb4;
    text-decoration: none;
}

.td1:before,
.td2:hover {
    content: "\f165";
    color: #ff0000;
    text-decoration: none;
}

