@include('partials.head')

<body class="{{ $class }}" id="projects">

<div id="wrapper">

    <div id="sidebar-default" class="main-sidebar fix-scroll" style="display: block;">
        <div class="current-user">
            <a href="/" class="name">
        <span>
          OURASMR
        </span>
            </a>

        </div>
        <div class="menu-section">
            <h3>Library</h3>
            <ul>
                <li class="option">
                    <a href="#" data-toggle="sidebar" class="active toggled">
                        <i class="ion-earth"></i> <span>Organize</span>
                        <i class="fa fa-chevron-down"></i>
                    </a>
                    <ul class="submenu active">
                        <li><a href="#">Folders</a></li>
                        <li><a href="#">Playlists</a></li>
                        <li><a href="#">Favorites</a></li>
                        <li><a href="#">Saved</a></li>
                    </ul>
                </li>
                <li class="option">
                    <a href="#" data-toggle="sidebar">
                        <i class="ion-card"></i> <span>Discover</span>
                        <i class="fa fa-chevron-down"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="#">Browse</a></li>
                        <li><a href="#">Search</a></li>
                        <li><a href="#">Artists</a></li>
                        <li><a href="#">Popular</a></li>
                    </ul>
                </li>
                <li class="option">
                    <a href="#" data-toggle="sidebar">
                        <i class="ion-flash"></i> <span>My Account</span>
                        <i class="fa fa-chevron-down"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="#">My Profile</a></li>
                        <li><a href="#">Settings</a></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </div>

    <div id="content">


        <div class="menubar">
            <div class="sidebar-toggler visible-xs">
                <i class="ion-navicon"></i>
            </div>

            <div class="page-title">
                My Projects
                <small class="hidden-xs">(Widget list concept)</small>
            </div>
            <a href="http://wolfadmin.herokuapp.com/1.1/forms/new_product" class="new-user btn btn-success pull-right">
                <span>Add project</span>
            </a>
        </div>

        <div class="content-wrapper clearfix">
            <div class="row project-list">
                <div class="project new">
                    <a href="http://wolfadmin.herokuapp.com/1.1/pages/projects#">
                        <i class="ion-ios7-plus-outline"></i>
				<span class="info">
					Create a New Project
				</span>
                    </a>
                </div>
                <div class="project">
                    <div class="info">
                        <div class="name">Dashboard Design</div>
                        <div class="category">Design &amp; Development</div>
                        <div class="last-update">
                            Last updated 3 hours ago
                        </div>
                    </div>
                    <div class="members">
                        <img alt="3" src="./library_files/3-92c3675516dd81ac898a7064ee9636bc.jpg">
                        <img alt="7" src="./library_files/7-b553f4126f8fb9c86a5b59336f2cb9de.jpg">
                        <img alt="14" src="./library_files/14-c1c925a714f13541271d8876f84dd107.jpg">
                        <img alt="15" src="./library_files/15-0dcff0b0e87ac1437ea09bcb51c642b4.jpg">

                        <a href="http://wolfadmin.herokuapp.com/1.1/pages/projects#" class="add-more">
                            <i class="fa fa-plus"></i>
                        </a>
                        <ul class="menu">
                            <li><a href="http://wolfadmin.herokuapp.com/1.1/pages/projects#">Invite a new user</a></li>
                            <li><a href="http://wolfadmin.herokuapp.com/1.1/pages/projects#">Change name</a></li>
                            <li><a href="http://wolfadmin.herokuapp.com/1.1/pages/projects#">Delete project</a></li>
                        </ul>
                    </div>
                </div>
                <div class="project">
                    <div class="info">
                        <div class="name">iOS App</div>
                        <div class="category">Mobile Development</div>
                        <div class="last-update">
                            Last updated 1 week ago
                        </div>
                    </div>
                    <div class="members">
                        <img alt="6" src="./library_files/6-fe6fbd5de7355525845e2b52f7bdcc9f.jpg">
                        <img alt="4" src="./library_files/4-b1e8e285c7135bbb2d0b3ac333037713.jpg">
                        <img alt="10" src="./library_files/10-dfab47b3ebee731d5dc45ace37acbefd.jpg">

                        <a href="http://wolfadmin.herokuapp.com/1.1/pages/projects#" class="add-more">
                            <i class="fa fa-plus"></i>
                        </a>
                        <ul class="menu">
                            <li><a href="http://wolfadmin.herokuapp.com/1.1/pages/projects#">Invite a new user</a></li>
                            <li><a href="http://wolfadmin.herokuapp.com/1.1/pages/projects#">Change name</a></li>
                            <li><a href="http://wolfadmin.herokuapp.com/1.1/pages/projects#">Delete project</a></li>
                        </ul>
                    </div>
                </div>
                <div class="project">
                    <div class="info">
                        <div class="name">Marketing Writeup</div>
                        <div class="category">Marketing</div>
                        <div class="last-update">
                            Last updated 2 days ago
                        </div>
                    </div>
                    <div class="members">
                        <img alt="4" src="./library_files/4-b1e8e285c7135bbb2d0b3ac333037713.jpg">
                        <img alt="8" src="./library_files/8-1b90501554fc255a8a00e07c01c7b196.jpg">
                        <img alt="9" src="./library_files/9-e7c0953061ebca7af350a6d553d661ba.jpg">
                        <img alt="16" src="./library_files/16-d920ead0154f6f2b29f34c811d563245.jpg">

                        <a href="http://wolfadmin.herokuapp.com/1.1/pages/projects#" class="add-more">
                            <i class="fa fa-plus"></i>
                        </a>
                        <ul class="menu">
                            <li><a href="http://wolfadmin.herokuapp.com/1.1/pages/projects#">Invite a new user</a></li>
                            <li><a href="http://wolfadmin.herokuapp.com/1.1/pages/projects#">Change name</a></li>
                            <li><a href="http://wolfadmin.herokuapp.com/1.1/pages/projects#">Delete project</a></li>
                        </ul>
                    </div>
                </div>
                <div class="project">
                    <div class="info">
                        <div class="name">New Blog Posts</div>
                        <div class="category">Writing</div>
                        <div class="last-update">
                            Last updated 13 hours ago
                        </div>
                    </div>
                    <div class="members">
                        <img alt="10" src="./library_files/10-dfab47b3ebee731d5dc45ace37acbefd.jpg">
                        <img alt="11" src="./library_files/11-5e3fb59dc737c93a37f0c7e55156e27c.jpg">
                        <img alt="12" src="./library_files/12-73c93cf90fa2fa2609ab6822797cec85.jpg">
                        <img alt="17" src="./library_files/17-56780bd01420f3ca8b89b3a0cba4d2ea.jpg">

                        <a href="http://wolfadmin.herokuapp.com/1.1/pages/projects#" class="add-more">
                            <i class="fa fa-plus"></i>
                        </a>
                        <ul class="menu">
                            <li><a href="http://wolfadmin.herokuapp.com/1.1/pages/projects#">Invite a new user</a></li>
                            <li><a href="http://wolfadmin.herokuapp.com/1.1/pages/projects#">Change name</a></li>
                            <li><a href="http://wolfadmin.herokuapp.com/1.1/pages/projects#">Delete project</a></li>
                        </ul>
                    </div>
                </div>
                <div class="project">
                    <div class="info">
                        <div class="name">New Album Cover</div>
                        <div class="category">Design</div>
                        <div class="last-update">
                            Last updated 1 day ago
                        </div>
                    </div>
                    <div class="members">
                        <img src="./library_files/128.jpg">
                        <img src="./library_files/128(1).jpg">

                        <a href="http://wolfadmin.herokuapp.com/1.1/pages/projects#" class="add-more">
                            <i class="fa fa-plus"></i>
                        </a>
                        <ul class="menu">
                            <li><a href="http://wolfadmin.herokuapp.com/1.1/pages/projects#">Invite a new user</a></li>
                            <li><a href="http://wolfadmin.herokuapp.com/1.1/pages/projects#">Change name</a></li>
                            <li><a href="http://wolfadmin.herokuapp.com/1.1/pages/projects#">Delete project</a></li>
                        </ul>
                    </div>
                </div>
                <div class="project">
                    <div class="info">
                        <div class="name">New Theme Development</div>
                        <div class="category">Design</div>
                        <div class="last-update">
                            Last updated 11 day ago
                        </div>
                    </div>
                    <div class="members">
                        <img alt="8" src="./library_files/8-1b90501554fc255a8a00e07c01c7b196.jpg">
                        <img alt="5" src="./library_files/5-f81555f2bb8bd9fb40d8df51a65f515c.jpg">
                        <img alt="13" src="./library_files/13-fae20c117fcdf91ef91522c37669ddf6.jpg">

                        <a href="http://wolfadmin.herokuapp.com/1.1/pages/projects#" class="add-more">
                            <i class="fa fa-plus"></i>
                        </a>
                        <ul class="menu">
                            <li><a href="http://wolfadmin.herokuapp.com/1.1/pages/projects#">Invite a new user</a></li>
                            <li><a href="http://wolfadmin.herokuapp.com/1.1/pages/projects#">Change name</a></li>
                            <li><a href="http://wolfadmin.herokuapp.com/1.1/pages/projects#">Delete project</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('partials.footer')
</body>
