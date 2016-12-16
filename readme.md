# P4 - SquadLocker

Live URL:
    http://p4.kidcoder.me/

Description:
    Squad Locker allows NBA 2K video game players to form more successful teams by facilitating finding teammates based on a created players’ stats, attributes, and play styles. The website will provide information about players and teams in an informative and appealing manner, to include:
        - Player/team stats
        - Avatar attributes
        - User determined play styles
        - Competitive reviews/grades
    In addition, the site will offer Twitter and Disqus integrations to enable communication, networking, and trash talking amongst users.

Screencast Demo: https://youtu.be/q93Uge6L2Qk

Code/Comment Samples:
    - https://github.com/deluongo/p4/blob/master/app/Http/Controllers/NewTeamController.php
    - https://github.com/deluongo/p4/blob/master/app/Http/Controllers/NewPlayerController.php
    - https://github.com/deluongo/p4/blob/master/app/Http/Controllers/TeamUpdateController.php
    - https://github.com/deluongo/p4/blob/master/app/Http/Controllers/UpdateController.php
    Note: I probably put 500 more hours into this than necessary. I've provided sample code from the controllers that are managing the functionality mandated by the rubric. I did not have time to make the rest of my code as perfect as these files and almost all of the commented out code is commented out for a reason. I am not ready to remove it yet as this will become an on-going project for me.

HTML Validation Samples:
    - https://github.com/deluongo/p4/blob/master/resources/views/player/show.blade.php
    - https://github.com/deluongo/p4/blob/master/resources/views/findteam/show.blade.php
    - https://github.com/deluongo/p4/blob/master/resources/views/update/show.blade.php
    - https://github.com/deluongo/p4/blob/master/resources/views/TeamUpdate/show.blade.php


Non-Functioning JS Features:
    A number of features that have been built into the site UI require JS, which was out of scope for this project. Susan asked that I point out these features so that you can navigate around them. My understanding is that these features will not negatively impact my grade. Listed:
    - Certain JS options widgets usually found on the block title
    - Sending/receiving squad invitations
        The Database is set up with a pivot table to accommodate this feature, but the execution requires JS which was out of scope for this project.
    - Global Search
    - Instant messaging

Bugs:
    - Double clicking during form submission will create multiple submissions.
        - I will add a JS onclick() method to prevent this client side later
    - Twitter scrolling and loading on page resize.

Outside Code:
    The HTML & CSS leveraged the OneUI Framework, but was heavily customized. Disqus and Twitter integrations was installed in accordance with their respective site guidelines

Page Loading:
    You may notice that the images load more slowly than the rest of the site. This is because the files are hi-res. I chose to do it this way, because that typical user will frequent this site regularly and spent a good deal of time there. The images get cached fairly quickly.

    Furthermore, for the finished product I plan to replace the URL image loading, by giving users the ability to upload files.

Plugins/Libraries:
    JQuery
    OneUI - https://themeforest.net/item/oneui-bootstrap-admin-dashboard-template-ui-framework-angularjs/11820082
