
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('materialize/css/bootstrap.min.css') }}">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{ asset('materialize/css/mdb.min.css') }}">
    <!-- DataTables.net -->
    <link rel="stylesheet" type="text/css" href="{{ asset('materialize/css/dataTables.bootstrap4.min.css') }}"/>
 
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="{{ asset('materialize/css/site.css') }}">
    
</head>

<body class="fixed-sn white-skin">

    <!--Main Navigation-->
    <header>

        <!-- Sidebar navigation -->
        <ul id="slide-out" class="side-nav fixed custom-scrollbar">
            <!-- Logo -->
            <li class="logo-sn waves-effect">
                <div class=" text-center">
                    <a href="#" class="pl-0"><img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" class=""></a>
                </div>
            </li>
            <!--/. Logo -->

            <!--Search Form-->
            <li>
                <form class="search-form" role="search">
                    <div class="form-group waves-effect">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </form>
            </li>
            <!--/.Search Form-->
            <!-- Side navigation links -->
            <li>
                <ul class="collapsible collapsible-accordion">
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-tachometer"></i> Dashboards<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="../dashboards/v-1.html" class="waves-effect">Version 1</a>
                                </li>
                                <li><a href="../dashboards/v-2.html" class="waves-effect">Version 2</a>
                                </li>
                                <li><a href="../dashboards/v-3.html" class="waves-effect">Version 3</a>
                                </li>
                                <li><a href="../dashboards/v-4.html" class="waves-effect">Version 4</a>
                                </li>
                                <li><a href="../dashboards/v-5.html" class="waves-effect">Version 5</a>
                                </li>
                                <li><a href="../dashboards/v-6.html" class="waves-effect">Version 6</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-photo"></i> Pages<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="../pages/login.html" class="waves-effect">Login</a>
                                </li>
                                <li><a href="../pages/register.html" class="waves-effect">Register</a>
                                </li>
                                <li><a href="../pages/pricing.html" class="waves-effect">Pricing</a>
                                </li>
                                <li><a href="../pages/about.html" class="waves-effect">About us</a>
                                </li>
                                <li><a href="../pages/single.html" class="waves-effect">Single post</a>
                                </li>
                                <li><a href="../pages/post.html" class="waves-effect">Post listing</a>
                                </li>
                                <li><a href="../pages/landing.html" class="waves-effect">Landing page</a>
                                </li>
                                <li><a href="../pages/customers.html" class="waves-effect">Cusomers</a>
                                </li>
                                <li><a href="../pages/invoice.html" class="waves-effect">Invoice</a>
                                </li>
                                <li><a href="../pages/page-creator.html" class="waves-effect">Page Creator</a>
                                </li>
                                <li><a href="../pages/support.html" class="waves-effect">Support</a>
                                </li>
                                <li><a href="../pages/chat.html" class="waves-effect">Chat</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-user"></i> Profile<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="../profile/basic-1.html" class="waves-effect">Basic 1</a>
                                </li>
                                <li><a href="../profile/basic-2.html" class="waves-effect">Basic 2</a>
                                </li>
                                <li><a href="../profile/extended.html" class="waves-effect">Extended</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-css3"></i> CSS<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="../css/grid.html" class="waves-effect">Grid system</a>
                                </li>
                                <li><a href="../css/media.html" class="waves-effect">Media object</a>
                                </li>
                                <li><a href="../css/utilities.html" class="waves-effect">Utilities / helpers</a>
                                </li>
                                <li><a href="../css/code.html" class="waves-effect">Code</a>
                                </li>
                                <li><a href="../css/icons.html" class="waves-effect">Icons</a>
                                </li>
                                <li><a href="../css/images.html" class="waves-effect">Images</a>
                                </li>
                                <li><a href="../css/typography.html" class="waves-effect">Typography</a>
                                </li>
                                <li><a href="../css/animations.html" class="waves-effect">Animations</a>
                                </li>
                                <li><a href="../css/colors.html" class="waves-effect">Colors</a>
                                </li>
                                <li><a href="../css/hover.html" class="waves-effect">Hover effects</a>
                                </li>
                                <li><a href="../css/masks.html" class="waves-effect">Masks</a>
                                </li>
                                <li><a href="../css/shadows.html" class="waves-effect">Shadows</a>
                                </li>
                                <li><a href="../css/skins.html" class="waves-effect">Skins</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-th"></i> Components<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="../components/buttons.html" class="waves-effect">Buttons</a>
                                </li>
                                <li><a href="../components/cards.html" class="waves-effect">Cards</a>
                                </li>
                                <li><a href="../components/panels.html" class="waves-effect">Panels</a>
                                </li>
                                <li><a href="../components/list.html" class="waves-effect">List group</a>
                                </li>
                                <li><a href="../components/pagination.html" class="waves-effect">Pagination</a>
                                </li>
                                <li><a href="../components/progress.html" class="waves-effect">Progress bars</a>
                                </li>
                                <li><a href="../components/tabs.html" class="waves-effect">Tabs & pills</a>
                                </li>
                                <li><a href="../components/tags.html" class="waves-effect">Tags, labels & badges</a>
                                </li>
                                <li><a href="../components/collapse.html" class="waves-effect">Collapse</a>
                                </li>
                                <li><a href="../components/date.html" class="waves-effect">Date picker</a>
                                </li>
                                <li><a href="../components/time.html" class="waves-effect">Time picker</a>
                                </li>
                                <li><a href="../components/tooltips.html" class="waves-effect">Tooltips</a>
                                </li>
                                <li><a href="../components/popovers.html" class="waves-effect">Popovers</a>
                                </li>
                                <li><a href="../components/stepper.html" class="waves-effect">Stepper</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-check-square-o"></i> Forms<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="../forms/basic.html" class="waves-effect">Basic</a>
                                </li>
                                <li><a href="../forms/extended.html" class="waves-effect">Extended</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-table"></i> Tables<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="../tables/basic.html" class="waves-effect">Basic</a>
                                </li>
                                <li><a href="../tables/extended.html" class="waves-effect">Extended</a>
                                </li>
                                <li><a href="../tables/datatables.html" class="waves-effect">DataTables.net</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-map"></i> Maps<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="../maps/google.html" class="waves-effect">Google Maps</a>
                                </li>
                                <li><a href="../maps/full.html" class="waves-effect">Full screen map</a>
                                </li>
                                <li><a href="../maps/vector.html" class="waves-effect">Vector world map</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Simple link -->
                    <li><a href="../alerts/alerts.html" class="collapsible-header waves-effect"><i class="fa fa-bell-o"></i> Alerts</a></li>

                    <li><a href="../modals/modals.html" class="collapsible-header waves-effect"><i class="fa fa-bolt"></i> Modals</a></li>

                    <li><a href="../charts/charts.html" class="collapsible-header waves-effect"><i class="fa fa-pie-chart"></i> Charts</a></li>

                    <li><a href="../calendar/calendar.html" class="collapsible-header waves-effect"><i class="fa fa-calendar-check-o"></i> Calendar</a></li>

                    <li><a href="../sections/sections.html" class="collapsible-header waves-effect"><i class="fa fa-th-large"></i> Sections</a></li>

                </ul>
            </li>
            <!--/. Side navigation links -->
            <div class="sidenav-bg mask-strong"></div>
        </ul>
        <!--/. Sidebar navigation -->

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav">
            <!-- SideNav slide-out button -->
            <div class="float-left">
                <a href="#" data-activates="slide-out" class="button-collapse black-text"><i class="fa fa-bars"></i></a>
            </div>
            <!-- Breadcrumb-->
            <div class="breadcrumb-dn mr-auto">
                <p>Datatables</p>
            </div>

            <!--Navbar links-->
            <ul class="nav navbar-nav nav-flex-icons ml-auto">

                <!-- Dropdown -->
                <li class="nav-item dropdown notifications-nav">
                    <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <span class="badge red">3</span> <i class="fa fa-bell"></i>
                        <span class="d-none d-md-inline-block">Notifications</span>
                    </a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-money mr-2" aria-hidden="true"></i>
                            <span>New order received</span>
                            <span class="float-right"><i class="fa fa-clock-o" aria-hidden="true"></i> 13 min</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-money mr-2" aria-hidden="true"></i>
                            <span>New order received</span>
                            <span class="float-right"><i class="fa fa-clock-o" aria-hidden="true"></i> 33 min</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-line-chart mr-2" aria-hidden="true"></i>
                            <span>Your campaign is about to end</span>
                            <span class="float-right"><i class="fa fa-clock-o" aria-hidden="true"></i> 53 min</span>
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect"><i class="fa fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Contact</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect"><i class="fa fa-comments-o"></i> <span class="clearfix d-none d-sm-inline-block">Support</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Profile</span></a>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Log Out</a>
                        <a class="dropdown-item" href="#">My account</a>
                    </div>
                </li>

            </ul>
            <!--/Navbar links-->
        </nav>
        <!-- /.Navbar -->

    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main>
        <div class="container-fluid mb-5">

            <!--Section: Basic examples-->
            <section>

                <div class="row">
                    
                    <div class="col-md-12">
                                                
                        <div class="card">
                            <div class="card-body">
                                <table id="datatables" class="table table-hover table-sm mb-0" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>$86,000</td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                            <td>$433,060</td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr>
                                            <td>Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2012/12/02</td>
                                            <td>$372,000</td>
                                        </tr>
                                        <tr>
                                            <td>Herrod Chandler</td>
                                            <td>Sales Assistant</td>
                                            <td>San Francisco</td>
                                            <td>59</td>
                                            <td>2012/08/06</td>
                                            <td>$137,500</td>
                                        </tr>
                                        <tr>
                                            <td>Rhona Davidson</td>
                                            <td>Integration Specialist</td>
                                            <td>Tokyo</td>
                                            <td>55</td>
                                            <td>2010/10/14</td>
                                            <td>$327,900</td>
                                        </tr>
                                        <tr>
                                            <td>Colleen Hurst</td>
                                            <td>Javascript Developer</td>
                                            <td>San Francisco</td>
                                            <td>39</td>
                                            <td>2009/09/15</td>
                                            <td>$205,500</td>
                                        </tr>
                                        <tr>
                                            <td>Sonya Frost</td>
                                            <td>Software Engineer</td>
                                            <td>Edinburgh</td>
                                            <td>23</td>
                                            <td>2008/12/13</td>
                                            <td>$103,600</td>
                                        </tr>
                                        <tr>
                                            <td>Jena Gaines</td>
                                            <td>Office Manager</td>
                                            <td>London</td>
                                            <td>30</td>
                                            <td>2008/12/19</td>
                                            <td>$90,560</td>
                                        </tr>
                                        <tr>
                                            <td>Quinn Flynn</td>
                                            <td>Support Lead</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2013/03/03</td>
                                            <td>$342,000</td>
                                        </tr>
                                        <tr>
                                            <td>Charde Marshall</td>
                                            <td>Regional Director</td>
                                            <td>San Francisco</td>
                                            <td>36</td>
                                            <td>2008/10/16</td>
                                            <td>$470,600</td>
                                        </tr>
                                        <tr>
                                            <td>Haley Kennedy</td>
                                            <td>Senior Marketing Designer</td>
                                            <td>London</td>
                                            <td>43</td>
                                            <td>2012/12/18</td>
                                            <td>$313,500</td>
                                        </tr>
                                        <tr>
                                            <td>Tatyana Fitzpatrick</td>
                                            <td>Regional Director</td>
                                            <td>London</td>
                                            <td>19</td>
                                            <td>2010/03/17</td>
                                            <td>$385,750</td>
                                        </tr>
                                        <tr>
                                            <td>Michael Silva</td>
                                            <td>Marketing Designer</td>
                                            <td>London</td>
                                            <td>66</td>
                                            <td>2012/11/27</td>
                                            <td>$198,500</td>
                                        </tr>
                                        <tr>
                                            <td>Paul Byrd</td>
                                            <td>Chief Financial Officer (CFO)</td>
                                            <td>New York</td>
                                            <td>64</td>
                                            <td>2010/06/09</td>
                                            <td>$725,000</td>
                                        </tr>
                                        <tr>
                                            <td>Gloria Little</td>
                                            <td>Systems Administrator</td>
                                            <td>New York</td>
                                            <td>59</td>
                                            <td>2009/04/10</td>
                                            <td>$237,500</td>
                                        </tr>
                                        <tr>
                                            <td>Bradley Greer</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>41</td>
                                            <td>2012/10/13</td>
                                            <td>$132,000</td>
                                        </tr>
                                        <tr>
                                            <td>Dai Rios</td>
                                            <td>Personnel Lead</td>
                                            <td>Edinburgh</td>
                                            <td>35</td>
                                            <td>2012/09/26</td>
                                            <td>$217,500</td>
                                        </tr>
                                        <tr>
                                            <td>Jenette Caldwell</td>
                                            <td>Development Lead</td>
                                            <td>New York</td>
                                            <td>30</td>
                                            <td>2011/09/03</td>
                                            <td>$345,000</td>
                                        </tr>
                                        <tr>
                                            <td>Yuri Berry</td>
                                            <td>Chief Marketing Officer (CMO)</td>
                                            <td>New York</td>
                                            <td>40</td>
                                            <td>2009/06/25</td>
                                            <td>$675,000</td>
                                        </tr>
                                        <tr>
                                            <td>Caesar Vance</td>
                                            <td>Pre-Sales Support</td>
                                            <td>New York</td>
                                            <td>21</td>
                                            <td>2011/12/12</td>
                                            <td>$106,450</td>
                                        </tr>
                                        <tr>
                                            <td>Doris Wilder</td>
                                            <td>Sales Assistant</td>
                                            <td>Sidney</td>
                                            <td>23</td>
                                            <td>2010/09/20</td>
                                            <td>$85,600</td>
                                        </tr>
                                        <tr>
                                            <td>Angelica Ramos</td>
                                            <td>Chief Executive Officer (CEO)</td>
                                            <td>London</td>
                                            <td>47</td>
                                            <td>2009/10/09</td>
                                            <td>$1,200,000</td>
                                        </tr>
                                        <tr>
                                            <td>Gavin Joyce</td>
                                            <td>Developer</td>
                                            <td>Edinburgh</td>
                                            <td>42</td>
                                            <td>2010/12/22</td>
                                            <td>$92,575</td>
                                        </tr>
                                        <tr>
                                            <td>Jennifer Chang</td>
                                            <td>Regional Director</td>
                                            <td>Singapore</td>
                                            <td>28</td>
                                            <td>2010/11/14</td>
                                            <td>$357,650</td>
                                        </tr>
                                        <tr>
                                            <td>Brenden Wagner</td>
                                            <td>Software Engineer</td>
                                            <td>San Francisco</td>
                                            <td>28</td>
                                            <td>2011/06/07</td>
                                            <td>$206,850</td>
                                        </tr>
                                        <tr>
                                            <td>Fiona Green</td>
                                            <td>Chief Operating Officer (COO)</td>
                                            <td>San Francisco</td>
                                            <td>48</td>
                                            <td>2010/03/11</td>
                                            <td>$850,000</td>
                                        </tr>
                                        <tr>
                                            <td>Shou Itou</td>
                                            <td>Regional Marketing</td>
                                            <td>Tokyo</td>
                                            <td>20</td>
                                            <td>2011/08/14</td>
                                            <td>$163,000</td>
                                        </tr>
                                        <tr>
                                            <td>Michelle House</td>
                                            <td>Integration Specialist</td>
                                            <td>Sidney</td>
                                            <td>37</td>
                                            <td>2011/06/02</td>
                                            <td>$95,400</td>
                                        </tr>
                                        <tr>
                                            <td>Suki Burks</td>
                                            <td>Developer</td>
                                            <td>London</td>
                                            <td>53</td>
                                            <td>2009/10/22</td>
                                            <td>$114,500</td>
                                        </tr>
                                        <tr>
                                            <td>Prescott Bartlett</td>
                                            <td>Technical Author</td>
                                            <td>London</td>
                                            <td>27</td>
                                            <td>2011/05/07</td>
                                            <td>$145,000</td>
                                        </tr>
                                        <tr>
                                            <td>Gavin Cortez</td>
                                            <td>Team Leader</td>
                                            <td>San Francisco</td>
                                            <td>22</td>
                                            <td>2008/10/26</td>
                                            <td>$235,500</td>
                                        </tr>
                                        <tr>
                                            <td>Martena Mccray</td>
                                            <td>Post-Sales support</td>
                                            <td>Edinburgh</td>
                                            <td>46</td>
                                            <td>2011/03/09</td>
                                            <td>$324,050</td>
                                        </tr>
                                        <tr>
                                            <td>Unity Butler</td>
                                            <td>Marketing Designer</td>
                                            <td>San Francisco</td>
                                            <td>47</td>
                                            <td>2009/12/09</td>
                                            <td>$85,675</td>
                                        </tr>
                                        <tr>
                                            <td>Howard Hatfield</td>
                                            <td>Office Manager</td>
                                            <td>San Francisco</td>
                                            <td>51</td>
                                            <td>2008/12/16</td>
                                            <td>$164,500</td>
                                        </tr>
                                        <tr>
                                            <td>Hope Fuentes</td>
                                            <td>Secretary</td>
                                            <td>San Francisco</td>
                                            <td>41</td>
                                            <td>2010/02/12</td>
                                            <td>$109,850</td>
                                        </tr>
                                        <tr>
                                            <td>Vivian Harrell</td>
                                            <td>Financial Controller</td>
                                            <td>San Francisco</td>
                                            <td>62</td>
                                            <td>2009/02/14</td>
                                            <td>$452,500</td>
                                        </tr>
                                        <tr>
                                            <td>Timothy Mooney</td>
                                            <td>Office Manager</td>
                                            <td>London</td>
                                            <td>37</td>
                                            <td>2008/12/11</td>
                                            <td>$136,200</td>
                                        </tr>
                                        <tr>
                                            <td>Jackson Bradshaw</td>
                                            <td>Director</td>
                                            <td>New York</td>
                                            <td>65</td>
                                            <td>2008/09/26</td>
                                            <td>$645,750</td>
                                        </tr>
                                        <tr>
                                            <td>Olivia Liang</td>
                                            <td>Support Engineer</td>
                                            <td>Singapore</td>
                                            <td>64</td>
                                            <td>2011/02/03</td>
                                            <td>$234,500</td>
                                        </tr>
                                        <tr>
                                            <td>Bruno Nash</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>38</td>
                                            <td>2011/05/03</td>
                                            <td>$163,500</td>
                                        </tr>
                                        <tr>
                                            <td>Sakura Yamamoto</td>
                                            <td>Support Engineer</td>
                                            <td>Tokyo</td>
                                            <td>37</td>
                                            <td>2009/08/19</td>
                                            <td>$139,575</td>
                                        </tr>
                                        <tr>
                                            <td>Thor Walton</td>
                                            <td>Developer</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2013/08/11</td>
                                            <td>$98,540</td>
                                        </tr>
                                        <tr>
                                            <td>Finn Camacho</td>
                                            <td>Support Engineer</td>
                                            <td>San Francisco</td>
                                            <td>47</td>
                                            <td>2009/07/07</td>
                                            <td>$87,500</td>
                                        </tr>
                                        <tr>
                                            <td>Serge Baldwin</td>
                                            <td>Data Coordinator</td>
                                            <td>Singapore</td>
                                            <td>64</td>
                                            <td>2012/04/09</td>
                                            <td>$138,575</td>
                                        </tr>
                                        <tr>
                                            <td>Zenaida Frank</td>
                                            <td>Software Engineer</td>
                                            <td>New York</td>
                                            <td>63</td>
                                            <td>2010/01/04</td>
                                            <td>$125,250</td>
                                        </tr>
                                        <tr>
                                            <td>Zorita Serrano</td>
                                            <td>Software Engineer</td>
                                            <td>San Francisco</td>
                                            <td>56</td>
                                            <td>2012/06/01</td>
                                            <td>$115,000</td>
                                        </tr>
                                        <tr>
                                            <td>Jennifer Acosta</td>
                                            <td>Junior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>43</td>
                                            <td>2013/02/01</td>
                                            <td>$75,650</td>
                                        </tr>
                                        <tr>
                                            <td>Cara Stevens</td>
                                            <td>Sales Assistant</td>
                                            <td>New York</td>
                                            <td>46</td>
                                            <td>2011/12/06</td>
                                            <td>$145,600</td>
                                        </tr>
                                        <tr>
                                            <td>Hermione Butler</td>
                                            <td>Regional Director</td>
                                            <td>London</td>
                                            <td>47</td>
                                            <td>2011/03/21</td>
                                            <td>$356,250</td>
                                        </tr>
                                        <tr>
                                            <td>Lael Greer</td>
                                            <td>Systems Administrator</td>
                                            <td>London</td>
                                            <td>21</td>
                                            <td>2009/02/27</td>
                                            <td>$103,500</td>
                                        </tr>
                                        <tr>
                                            <td>Jonas Alexander</td>
                                            <td>Developer</td>
                                            <td>San Francisco</td>
                                            <td>30</td>
                                            <td>2010/07/14</td>
                                            <td>$86,500</td>
                                        </tr>
                                        <tr>
                                            <td>Shad Decker</td>
                                            <td>Regional Director</td>
                                            <td>Edinburgh</td>
                                            <td>51</td>
                                            <td>2008/11/13</td>
                                            <td>$183,000</td>
                                        </tr>
                                        <tr>
                                            <td>Michael Bruce</td>
                                            <td>Javascript Developer</td>
                                            <td>Singapore</td>
                                            <td>29</td>
                                            <td>2011/06/27</td>
                                            <td>$183,000</td>
                                        </tr>
                                        <tr>
                                            <td>Donna Snider</td>
                                            <td>Customer Support</td>
                                            <td>New York</td>
                                            <td>27</td>
                                            <td>2011/01/25</td>
                                            <td>$112,000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                </div>

            </section>
            <!--Section: Basic examples-->

        </div>
    </main>
    <!--Main layout-->



    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script src="{{ asset('materialize/js/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{ asset('materialize/js/popper.min.js') }}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('materialize/js/bootstrap.js') }}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ asset('materialize/js/mdb.min.js') }}"></script>
    <!-- DataTables.net -->
    <script type="text/javascript" src="{{ asset('materialize/js/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('materialize/js/dataTables.bootstrap4.min.js') }}"></script>
    <!--Custom scripts-->
    <script>
        // SideNav Initialization
        $(".button-collapse").sideNav();

        var container = document.getElementById('slide-out');
        Ps.initialize(container, {
            wheelSpeed: 2,
            wheelPropagation: true,
            minScrollbarLength: 20
        });

        $(document).ready(function() {
            $('#datatables').DataTable();
        });

        // Material Select Initialization
        $(document).ready(function () {
            $('select[name="datatables_length"]').material_select();
        });

    </script>
</body>

</html>