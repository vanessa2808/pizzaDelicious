
<div class="left-sidebar-pro">
    <nav id="sidebar">
        <div class="sidebar-header">
            <a href="#"><img src="admin/img/message/1.jpg" alt="" />
            </a>
            @if(Auth::user()->role_id == 0)
            <h3>Manager</h3>
            @else
                <h3>Staff</h3>

            @endif
            <p>Developer</p>
            <strong>AP+</strong>
        </div>

        <div class="left-custom-menu-adp-wrap">
            <ul class="nav navbar-nav left-sidebar-menu-pro">
                @if(Auth::user()->role_id == 2)

                <li class="nav-item hidden">
                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn">members</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                        <a href="admin/users/add_users" class="dropdown-item">Add members</a>
                        <a href="admin/users/list_users" class="dropdown-item disabled">List members</a>
                    </div>
                </li>
                    @elseif(Auth::user()->role_id ==0)
                    <li class="nav-item ">
                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn">members</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                        <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                            <a href="admin/users/add_users" class="dropdown-item">Add_members</a>
                            <a href="admin/users/list_users" class="dropdown-item">List_members</a>
                        </div>
                    </li>
                @endif
                    @if(Auth::user()->role_id == 2)
                <li class="nav-item hidden"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-envelope"></i> <span class="mini-dn">Activities</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                        <a href="admin/activities/add_activities" class="dropdown-item">Add_activities</a>
                        <a href="admin/activities/list_activities" class="dropdown-item">List_activity</a>
                        <a href="admin/activities/add_image" class="dropdown-item">Add_image</a>

                        <a href="admin/activities/list_image" class="dropdown-item">List_image</a>
                    </div>
                </li>
                <li class="nav-item hidden"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-flask"></i> <span class="mini-dn">address</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                        <a href="admin/address/add_address" class="dropdown-item">Add address</a>
                        <a href="admin/address/list_address" class="dropdown-item">List address</a>

                    </div>
                </li>
                        @elseif(Auth::user()->role_id == 0)
                            <li class="nav-item hidden"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-envelope"></i> <span class="mini-dn">Activities</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                                <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                    <a href="admin/activities/add_activities" class="dropdown-item">Add_activities</a>
                                    <a href="admin/activities/list_activities" class="dropdown-item">List_activity</a>
                                    <a href="admin/activities/add_image" class="dropdown-item">Add_image</a>

                                    <a href="admin/activities/list_image" class="dropdown-item">List_image</a>
                                </div>
                            </li>
                            <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-flask"></i> <span class="mini-dn">address</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                                <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                    <a href="admin/address/add_address" class="dropdown-item">Add address</a>
                                    <a href="admin/address/list_address" class="dropdown-item">List address</a>

                                </div>
                            </li>
                        @endif
                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-pie-chart"></i> <span class="mini-dn">Food</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                        <a href="admin/food/add_pizza" class="dropdown-item">Add food</a>
                        <a href="admin/food/list_pizza" class="dropdown-item">List food</a>
                        <a href="admin/food/add_drink" class="dropdown-item">Add drink</a>
                        <a href="admin/food/list_drink" class="dropdown-item">List drink </a>
                        <a href="admin/food/add_fasta" class="dropdown-item">Add fasta</a>
                        <a href="admin/food/list_fasta" class="dropdown-item">List fasta</a>
                        <a href="admin/food/add_bugger" class="dropdown-item">Add buggers</a>
                        <a href="admin/food/list_bugger" class="dropdown-item">List buggers</a>


                    </div>
                </li>
                    @if(Auth::user()->role_id == 2)

                    <li class="nav-item hidden"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-bar-chart-o"></i> <span class="mini-dn">Chef</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown chart-left-menu-std animated flipInX">
                        <a href="admin/chef/add_chef" class="dropdown-item">Add chef</a>
                        <a href="admin/chef/list_chef" class="dropdown-item">List chef</a>
                    </div>
                </li>
                    @elseif(Auth::user()->role_id == 0)
                        <li class="nav-item hidden"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-bar-chart-o"></i> <span class="mini-dn">Chef</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown chart-left-menu-std animated flipInX">
                                <a href="admin/chef/add_chef" class="dropdown-item">Add chef</a>
                                <a href="admin/chef/list_chef" class="dropdown-item">List chef</a>
                            </div>
                        </li>
                    @endif
                    @if(Auth::user()->role_id == 2)

                    <li class="nav-item hidden"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-table"></i> <span class="mini-dn">Menu</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                        <a href="admin/menu/add_menu" class="dropdown-item">Add menu</a>
                        <a href="admin/menu/list_menu" class="dropdown-item">List menu</a>
                    </div>
                </li>

                <li class="nav-item hidden"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-edit"></i> <span class="mini-dn">Menu pricing</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown form-left-menu-std animated flipInX">
                        <a href="admin/menuPricing/add_menuPricing" class="dropdown-item">Add menuPricing</a>
                        <a href="admin/menuPricing/list_menuPricing" class="dropdown-item">List menuPricing</a>

                    </div>
                </li>
                <li class="nav-item hidden"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-desktop"></i> <span class="mini-dn">Function services</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown apps-left-menu-std animated flipInX">
                        <a href="admin/services/add_services" class="dropdown-item">Add  services</a>
                        <a href="admin/services/list_services" class="dropdown-item">List  services</a>

                        <a href="admin/services/add_functionServices" class="dropdown-item">Add function services</a>
                        <a href="admin/services/list_functionServices" class="dropdown-item">List function services</a>


                    </div>
                </li>
                        @elseif(Auth::user()->role_id == 0)


                    <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-edit"></i> <span class="mini-dn">Menu pricing</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                        <div role="menu" class="dropdown-menu left-menu-dropdown form-left-menu-std animated flipInX">
                            <a href="admin/menuPricing/add_menuPricing" class="dropdown-item">Add menuPricing</a>
                            <a href="admin/menuPricing/list_menuPricing" class="dropdown-item">List menuPricing</a>

                        </div>
                    </li>
                    <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-desktop"></i> <span class="mini-dn">Function services</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                        <div role="menu" class="dropdown-menu left-menu-dropdown apps-left-menu-std animated flipInX">
                            <a href="admin/services/add_services" class="dropdown-item">Add  services</a>
                            <a href="admin/services/list_services" class="dropdown-item">List  services</a>

                            <a href="admin/services/add_functionServices" class="dropdown-item">Add function services</a>
                            <a href="admin/services/list_functionServices" class="dropdown-item">List function services</a>


                        </div>
                    </li>
                    @endif
                    @if(Auth::user()->role_id == 2)

                    <li class="nav-item hidden"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-files-o"></i> <span class="mini-dn">Blog</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown pages-left-menu-std animated flipInX">
                        <a href="admin/blog/add_blog" class="dropdown-item">Add blog</a>
                        <a href="admin/blog/list_blog" class="dropdown-item">List BLog</a>
                        <a href="admin/blog/add_numBlog" class="dropdown-item">Add numblog</a>
                        <a href="admin/blog/list_numBlog" class="dropdown-item">List numblog</a>

                    </div>
                </li>
                <li class="nav-item hidden"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-edit"></i> <span class="mini-dn">Contact Information</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown form-left-menu-std animated flipInX">
                        <a href="admin/contact/add_contact" class="dropdown-item">Add contact</a>
                        <a href="admin/contact/list_contact" class="dropdown-item">List contact</a>

                    </div>
                </li>
                <li class="nav-item hidden"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-files-o"></i> <span class="mini-dn">Header</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown pages-left-menu-std animated flipInX">
                        <a href="admin/header/add_header" class="dropdown-item">Add header</a>
                        <a href="admin/header/list_header" class="dropdown-item">List header</a>
                        <a href="admin/header/add_headerAbout" class="dropdown-item">add headerAbout</a>

                        <a href="admin/header/list_headerAbout" class="dropdown-item">List headerAbout</a>
                        <a href="admin/header/add_headerMenu" class="dropdown-item">Add headerMenu</a>

                        <a href="admin/header/list_headerMenu" class="dropdown-item">List headerMenu</a>

                        <a href="admin/header/add_headerService" class="dropdown-item">Add headerService</a>

                        <a href="admin/header/list_headerService" class="dropdown-item">List headerService</a>
                        <a href="admin/header/add_headerBlog" class="dropdown-item">Add headerBlog</a>

                        <a href="admin/header/list_headerBlog" class="dropdown-item">List headerBlog</a>
                        <a href="admin/header/add_headerContact" class="dropdown-item">add headerContact</a>

                        <a href="admin/header/list_headerContact" class="dropdown-item">List headerContact</a>


                    </div>
                </li>
                        @elseif(Auth::user()->role_id == 0)
                        <li class="nav-item "><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-files-o"></i> <span class="mini-dn">Blog</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown pages-left-menu-std animated flipInX">
                                <a href="admin/blog/add_blog" class="dropdown-item">Add blog</a>
                                <a href="admin/blog/list_blog" class="dropdown-item">List BLog</a>
                                <a href="admin/blog/add_numBlog" class="dropdown-item">Add numblog</a>
                                <a href="admin/blog/list_numBlog" class="dropdown-item">List numblog</a>

                            </div>
                        </li>
                        <li class="nav-item "><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-edit"></i> <span class="mini-dn">Contact Information</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown form-left-menu-std animated flipInX">
                                <a href="admin/contact/add_contact" class="dropdown-item">Add contact</a>
                                <a href="admin/contact/list_contact" class="dropdown-item">List contact</a>

                            </div>
                        </li>
                        <li class="nav-item "><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-files-o"></i> <span class="mini-dn">Header</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown pages-left-menu-std animated flipInX">
                                <a href="admin/header/add_header" class="dropdown-item">Add header</a>
                                <a href="admin/header/list_header" class="dropdown-item">List header</a>
                                <a href="admin/header/add_headerAbout" class="dropdown-item">add headerAbout</a>

                                <a href="admin/header/list_headerAbout" class="dropdown-item">List headerAbout</a>
                                <a href="admin/header/add_headerMenu" class="dropdown-item">Add headerMenu</a>

                                <a href="admin/header/list_headerMenu" class="dropdown-item">List headerMenu</a>

                                <a href="admin/header/add_headerService" class="dropdown-item">Add headerService</a>

                                <a href="admin/header/list_headerService" class="dropdown-item">List headerService</a>
                                <a href="admin/header/add_headerBlog" class="dropdown-item">Add headerBlog</a>

                                <a href="admin/header/list_headerBlog" class="dropdown-item">List headerBlog</a>
                                <a href="admin/header/add_headerContact" class="dropdown-item">add headerContact</a>

                                <a href="admin/header/list_headerContact" class="dropdown-item">List headerContact</a>


                            </div>
                        </li>
                    @endif

                        <li class="nav-item">
                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn">feedback</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                        <a href="admin/comments/add_comment" class="dropdown-item">add_feedback</a>

                        <a href="admin/comments/list_comment" class="dropdown-item">list feedback</a>
                    </div>
                </li>

                    <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-pie-chart"></i> <span class="mini-dn">orders</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                        <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                        <a href="admin/orders/add_orders" class="dropdown-item">add orders</a>

                        <a href="admin/orders/list_orders" class="dropdown-item">List orders</a>
                        <a href="admin/orders/list_orderDetails" class="dropdown-item">List orderDetails</a>
                        <a href="admin/orders/takeFoodAndServe" class="dropdown-item">takeFoodAndServe</a>





                    </div>
                </li>

                    <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-pie-chart"></i> <span class="mini-dn">ingredients</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                        <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                        <a href="admin/ingredientTypes/add_ingredientTypes" class="dropdown-item"> Add Ingredient Types</a>

                        <a href="admin/ingredientTypes/list_ingredientTypes" class="dropdown-item"> List Ingredient Types</a>
                        <a href="admin/ingredients/add_ingredients" class="dropdown-item"> Add Ingredients </a>
                        <a href="admin/ingredients/list_ingredients" class="dropdown-item"> list Ingredients </a>






                    </div>
                </li>
                    @if(Auth::user()->role_id == 2)

                    <li class="nav-item hidden">
                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn">CustomPizza</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                        <a href="admin/custom/list_customPizza" class="dropdown-item">list_customPizza</a>
                        <a href="admin/custom/add_customPizzaIngredients" class="dropdown-item">add_customPizzaIngredients</a>
                        <a href="admin/custom/list_customPizzaIngredients" class="dropdown-item">list_customPizzaIngredients</a>

                    </div>
                        @elseif(Auth::user()->role_id == 0)

                            <li class="nav-item ">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn">CustomPizza</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                                <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                    <a href="admin/custom/list_customPizza" class="dropdown-item">list_customPizza</a>
                                    <a href="admin/custom/add_customPizzaIngredients" class="dropdown-item">add_customPizzaIngredients</a>
                                    <a href="admin/custom/list_customPizzaIngredients" class="dropdown-item">list_customPizzaIngredients</a>

                                </div>

                        @endif
                @if(Auth::user()->role_id == 2)
                <li   class="nav-item hidden"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-edit"></i> <span class="mini-dn">statistics</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div  role="menu" class="dropdown-menu disabled left-menu-dropdown form-left-menu-std animated flipInX">
                        <a href="admin/statistic/list_statistics"class="dropdown-item disabled">list_statistic</a>

                    </div>
                </li>
                    @else(Auth::user()->role_id == 0)
                        <li   class="nav-item "><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-edit"></i> <span class="mini-dn">statistics</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div  role="menu" class="dropdown-menu disabled left-menu-dropdown form-left-menu-std animated flipInX">
                                <a href="admin/statistic/list_statistics"class="dropdown-item disabled">list_statistic</a>

                            </div>
                        </li>
                    @endif




            </ul>
        </div>
    </nav>
</div>

        </div>
    </div>
</div>
