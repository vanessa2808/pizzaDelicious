<?php




Route::get('/', function () {
    return view('page.home');
});
Route::get('/home', function () {
    return view('page.home');
});
Route::get('/about', function () {
    return view('page.about');
});
Route::get('/service', function () {
    return view('page.service');
});
Route::get('/blog', function () {
    return view('page.blog');
});
Route::get('/contact', function () {
    return view('page.contact');
});
Route::get('/menu','Page\FrontEndController@getMenuPage' , function () {
    return view('page.pizza');
});

    Route::get('/pizzaDetails/{id}','Page\FrontEndController@getPizzaDetails', function () {
    return view('page.pizza_details');
});
Route::get('/custom_pizza',function () {
    return view('page.customPizza');
});

Route::get('/custom_beefPizza', function () {
    return view('page.custom_beefPizza');
});



Route::get('/admin/comments/list_comments', 'CommentController@index')->name('');
Auth::routes(['verify' => false, 'register' => false]);

Route::group(['namespace' => 'Admin', 'middleware' => 'verified', 'middleware' => 'administrator'], function() {
    Route::get('/admin', 'HomeController@dashboard')->name('dashboard');

    Route::group(['prefix' => '/admin/product_categories'], function () {
        Route::get('/add_categories', ['as' => 'admin.product_categories.add_categories', 'uses' => 'CategoryController@getAdd']);
        Route::post('/add_categories', ['as' => 'admin.product_categories.add_categories', 'uses' => 'CategoryController@postAdd']);
        Route::get('/list_categories', ['as' => 'admin.product_categories.list_categories', 'uses' => 'CategoryController@index']);

        Route::get('edit_categories/{id}', ['as' => 'admin.product_categories.edit_categories', 'uses' => 'CategoryController@getEdit']);
        Route::post('edit_categories/{id}', ['as' => 'admin.product_categories.edit_categories', 'uses' => 'CategoryController@postEdit']);
        Route::get('delete/{id}', ['as' => 'admin.product_categories.delete', 'uses' => 'CategoryController@delete']);
    });
    Route::group(['prefix' => '/admin/users'], function () {
        Route::get('/add_users', ['as' => 'admin.users.add_users', 'uses' => 'UserController@getAdd']);
        Route::post('/add_users', ['as' => 'admin.users.add_users', 'uses' => 'UserController@postAdd']);
        Route::get('/list_users', ['as' => 'admin.users.list_users', 'uses' => 'UserController@index']);

        Route::get('edit_users/{id}', ['as' => 'admin.users.edit_users', 'uses' => 'UserController@getEdit']);
        Route::post('edit_users/{id}', ['as' => 'admin.users.edit_users', 'uses' => 'UserController@postEdit']);
        Route::get('delete/{id}', ['as' => 'admin.users.delete', 'uses' => 'UserController@delete']);
    });
    Route::group(['prefix' => '/admin/blog'], function () {
        Route::get('/add_blog', ['as' => 'admin.blog.add_blog', 'uses' => 'BlogController@getAddBlog']);
        Route::post('/add_blog', ['as' => 'admin.blog.add_blog', 'uses' => 'BlogController@postAddBlog']);
        Route::get('/list_blog', ['as' => 'admin.blog.list_blog', 'uses' => 'BlogController@index']);

        Route::get('edit_blog/{id}', ['as' => 'admin.blog.edit_blog', 'uses' => 'BlogController@getEditBlog']);
        Route::post('edit_blog/{id}', ['as' => 'admin.blog.edit_blog', 'uses' => 'BlogController@postEditBlog']);
        Route::get('deBlog/{id}', ['as' => 'admin.blog.deBlog', 'uses' => 'BlogController@deBlog']);
    });
    Route::group(['prefix' => '/admin/blog'], function () {
        Route::get('/add_numBlog', ['as' => 'admin.blog.add_numBlog', 'uses' => 'NumBlogController@getAddNumBlog']);
        Route::post('/add_numBlog', ['as' => 'admin.blog.add_numBlog', 'uses' => 'NumBlogController@postAddNumBlog']);
        Route::get('/list_numBlog', ['as' => 'admin.blog.list_numBlog', 'uses' => 'NumBlogController@index']);

        Route::get('edit_numBlog/{id}', ['as' => 'admin.blog.edit_numBlog', 'uses' => 'NumBlogController@getEditNumBlog']);
        Route::post('edit_numBlog/{id}', ['as' => 'admin.blog.edit_numBlog', 'uses' => 'NumBlogController@postEditNumBlog']);
        Route::get('delete/{id}', ['as' => 'admin.blog.delete', 'uses' => 'NumBlogController@delete']);
    });
    Route::group(['prefix' => '/admin/activities'], function () {
        Route::get('/add_activities', ['as' => 'admin.activities.add_activities', 'uses' => 'ActivitiesController@getAddActivities']);
        Route::post('/add_activities', ['as' => 'admin.activities.add_activities', 'uses' => 'ActivitiesController@postAddActivities']);
        Route::get('/list_activities', ['as' => 'admin.activities.list_activities', 'uses' => 'ActivitiesController@index']);

        Route::get('edit_activities/{id}', ['as' => 'admin.activities.edit_activities', 'uses' => 'ActivitiesController@getEditActivities']);
        Route::post('edit_activities/{id}', ['as' => 'admin.activities.edit_activities', 'uses' => 'ActivitiesController@postEditActivities']);
        Route::get('deleActivities/{id}', ['as' => 'admin.activities.deleActivities', 'uses' => 'ActivitiesController@deleActivities']);
    });

    Route::group(['prefix' => '/admin/activities'], function () {
        Route::get('/add_image', ['as' => 'admin.activities.add_image', 'uses' => 'ImageController@getAddImage']);
        Route::post('/add_image', ['as' => 'admin.activities.add_image', 'uses' => 'ImageController@postAddImage']);
        Route::get('/list_image', ['as' => 'admin.activities.list_image', 'uses' => 'ImageController@index']);

        Route::get('edit_image/{id}', ['as' => 'admin.activities.edit_image', 'uses' => 'ImageController@getEditImage']);
        Route::post('edit_image/{id}', ['as' => 'admin.activities.edit_image', 'uses' => 'ImageController@postEditImage']);
        Route::get('delete/{id}', ['as' => 'admin.activities.delete', 'uses' => 'ImageController@delete']);
    });

    Route::group(['prefix' => '/admin/food'], function () {
        Route::get('/add_pizza', ['as' => 'admin.food.add_pizza', 'uses' => 'PizzaController@getAddPizza']);
        Route::post('/add_pizza', ['as' => 'admin.food.add_pizza', 'uses' => 'PizzaController@postAddPizza']);
        Route::get('/list_pizza', ['as' => 'admin.food.list_pizza', 'uses' => 'PizzaController@index']);

        Route::get('edit_pizza/{id}', ['as' => 'admin.food.edit_pizza', 'uses' => 'PizzaController@getEditPizza']);
        Route::post('edit_pizza/{id}', ['as' => 'admin.food.edit_pizza', 'uses' => 'PizzaController@postEditPizza']);
        Route::get('delePizza/{id}', ['as' => 'admin.food.delePizza', 'uses' => 'PizzaController@delePizza']);

        // drink

        Route::get('/add_drink', ['as' => 'admin.food.add_drink', 'uses' => 'DrinkController@getAddDrink']);
        Route::post('/add_drink', ['as' => 'admin.food.add_drink', 'uses' => 'DrinkController@postAddDrink']);
        Route::get('/list_drink', ['as' => 'admin.food.list_drink', 'uses' => 'DrinkController@index']);

        Route::get('edit_drink/{id}', ['as' => 'admin.food.edit_drink', 'uses' => 'DrinkController@getEditDrink']);
        Route::post('edit_drink/{id}', ['as' => 'admin.food.edit_drink', 'uses' => 'DrinkController@postEditDrink']);
        Route::get('deleDrink/{id}', ['as' => 'admin.food.deleDrink', 'uses' => 'DrinkController@deleDrink']);
        //buggers
        Route::get('/add_bugger', ['as' => 'admin.food.add_bugger', 'uses' => 'BuggerController@getAddBuggers']);
        Route::post('/add_bugger', ['as' => 'admin.food.add_bugger', 'uses' => 'BuggerController@postAddBuggers']);
        Route::get('/list_bugger', ['as' => 'admin.food.list_bugger', 'uses' => 'BuggerController@index']);

        Route::get('edit_bugger/{id}', ['as' => 'admin.food.edit_bugger', 'uses' => 'BuggerController@getEditBuggers']);
        Route::post('edit_bugger/{id}', ['as' => 'admin.food.edit_bugger', 'uses' => 'BuggerController@postEditBuggers']);
        Route::get('deleBuggers/{id}', ['as' => 'admin.food.deleBuggers', 'uses' => 'BuggerController@deleBuggers']);

        // fasta

        Route::get('/add_fasta', ['as' => 'admin.food.add_fasta', 'uses' => 'FastaController@getAddFasta']);
        Route::post('/add_fasta', ['as' => 'admin.food.add_fasta', 'uses' => 'FastaController@postAddFasta']);
        Route::get('/list_fasta', ['as' => 'admin.food.list_fasta', 'uses' => 'FastaController@index']);

        Route::get('edit_fasta/{id}', ['as' => 'admin.food.edit_fasta', 'uses' => 'FastaController@getEditFasta']);
        Route::post('edit_fasta/{id}', ['as' => 'admin.food.edit_fasta', 'uses' => 'FastaController@postEditFasta']);
        Route::get('delete/{id}', ['as' => 'admin.food.delete', 'uses' => 'FastaController@delete']);

    });
    //

    Route::group(['prefix' => '/admin/address'], function () {
        Route::get('/add_address', ['as' => 'admin.address.add_address', 'uses' => 'AddressController@getAddAddress']);
        Route::post('/add_address', ['as' => 'admin.address.add_address', 'uses' => 'AddressController@postAddAddress']);
        Route::get('/list_address', ['as' => 'admin.address.list_address', 'uses' => 'AddressController@index']);

        Route::get('edit_address/{id}', ['as' => 'admin.address.edit_address', 'uses' => 'AddressController@getEditAddress']);
        Route::post('edit_address/{id}', ['as' => 'admin.address.edit_address', 'uses' => 'AddressController@postEditAddress']);
        Route::get('delete/{id}', ['as' => 'admin.address.delete', 'uses' => 'AddressController@delete']);
    });

    Route::group(['prefix' => '/admin/header'], function () {
        Route::get('/add_header', ['as' => 'admin.header.add_header', 'uses' => 'HeaderController@getAddHeader']);
        Route::post('/add_header', ['as' => 'admin.header.add_header', 'uses' => 'HeaderController@postAddHeader']);
        Route::get('/list_header', ['as' => 'admin.header.list_header', 'uses' => 'HeaderController@index']);

        Route::get('edit_header/{id}', ['as' => 'admin.header.edit_header', 'uses' => 'HeaderController@getEditHeader']);
        Route::post('edit_header/{id}', ['as' => 'admin.header.edit_header', 'uses' => 'HeaderController@postEditHeader']);
        Route::get('deleHeader/{id}', ['as' => 'admin.header.deleHeader', 'uses' => 'HeaderController@deleHeader']);

        Route::get('/add_headerAbout', ['as' => 'admin.header.add_headerAbout', 'uses' => 'HeaderAboutController@getAddHeaderAbout']);
        Route::post('/add_headerAbout', ['as' => 'admin.header.add_headerAbout', 'uses' => 'HeaderAboutController@postAddHeaderAbout']);

        Route::get('/list_headerAbout', ['as' => 'admin.header.list_headerAbout', 'uses' => 'HeaderAboutController@index']);

        Route::get('edit_headerAbout/{id}', ['as' => 'admin.header.edit_headerAbout', 'uses' => 'HeaderAboutController@getEditHeaderAbout']);
        Route::post('edit_headerAbout/{id}', ['as' => 'admin.header.edit_headerAbout', 'uses' => 'HeaderAboutController@postEditHeaderAbout']);

        Route::get('deleAbout/{id}', ['as' => 'admin.header.deleAbout', 'uses' => 'HeaderAboutController@deleAbout']);
        //blog
        Route::get('/add_headerBlog', ['as' => 'admin.header.add_header', 'uses' => 'HeaderBlogController@getAddHeaderBlog']);
        Route::post('/add_headerBlog', ['as' => 'admin.header.add_header', 'uses' => 'HeaderBlogController@postAddHeaderBlog']);

        Route::get('/list_headerBlog', ['as' => 'admin.header.list_headerBlog', 'uses' => 'HeaderBlogController@index']);

        Route::get('edit_headerBlog/{id}', ['as' => 'admin.header.edit_headerBlog', 'uses' => 'HeaderBlogController@getEditHeaderBlog']);
        Route::post('edit_headerBlog/{id}', ['as' => 'admin.header.edit_headerBlog', 'uses' => 'HeaderBlogController@postEditHeaderBlog']);

        Route::get('deleBlog/{id}', ['as' => 'admin.header.deleBlog', 'uses' => 'HeaderBlogController@deleBlog']);

        Route::get('/add_headerMenu', ['as' => 'admin.header.add_header', 'uses' => 'HeaderMenuController@getAddHeaderMenu']);
        Route::post('/add_headerMenu', ['as' => 'admin.header.add_header', 'uses' => 'HeaderMenuController@postAddHeaderMenu']);

        Route::get('/list_headerMenu', ['as' => 'admin.header.list_headerMenu', 'uses' => 'HeaderMenuController@index']);

        Route::get('edit_headerMenu/{id}', ['as' => 'admin.header.edit_headerMenu', 'uses' => 'HeaderMenuController@getEditHeaderMenu']);
        Route::post('edit_headerMenu/{id}', ['as' => 'admin.header.edit_headerMenu', 'uses' => 'HeaderMenuController@postEditHeaderMenu']);

        Route::get('deleMenu/{id}', ['as' => 'admin.header.deleMenu', 'uses' => 'HeaderMenuController@deleMenu']);
        // service

        Route::get('/add_headerService', ['as' => 'admin.header.add_header', 'uses' => 'HeaderServiceController@getAddHeaderService']);
        Route::post('/add_headerService', ['as' => 'admin.header.add_header', 'uses' => 'HeaderServiceController@postAddHeaderService']);

        Route::get('/list_headerService', ['as' => 'admin.header.list_headerService', 'uses' => 'HeaderServiceController@index']);

        Route::get('edit_headerService/{id}', ['as' => 'admin.header.edit_headerService', 'uses' => 'HeaderServiceController@getEditHeaderService']);
        Route::post('edit_headerService/{id}', ['as' => 'admin.header.edit_headerService', 'uses' => 'HeaderServiceController@postEditHeaderService']);

        Route::get('deleServices/{id}', ['as' => 'admin.header.deleServices', 'uses' => 'HeaderServiceController@deleServices']);
        // Contact

        Route::get('/add_headerContact', ['as' => 'admin.header.add_headerContact', 'uses' => 'HeaderContactController@getAddHeaderContact']);
        Route::post('/add_headerContact', ['as' => 'admin.header.add_headerContact', 'uses' => 'HeaderContactController@postAddHeaderContact']);

        Route::get('/list_headerContact', ['as' => 'admin.header.list_headerContact', 'uses' => 'HeaderContactController@index']);

        Route::get('edit_headerContact/{id}', ['as' => 'admin.header.edit_headerContact', 'uses' => 'HeaderContactController@getEditHeaderContact']);
        Route::post('edit_headerContact/{id}', ['as' => 'admin.header.edit_headerContact', 'uses' => 'HeaderContactController@postEditHeaderContact']);

        Route::get('delete/{id}', ['as' => 'admin.header.delete', 'uses' => 'HeaderContactController@delete']);

    });

// Main

    Route::group(['prefix' => '/admin/main'], function () {
        Route::get('/add_main', ['as' => 'admin.main.add_main', 'uses' => 'MainController@getAddMain']);
        Route::post('/add_main', ['as' => 'admin.main.add_main', 'uses' => 'MainController@postAddMain']);
        Route::get('/list_main', ['as' => 'admin.main.list_main', 'uses' => 'MainController@index']);

        Route::get('edit_main/{id}', ['as' => 'admin.main.edit_main', 'uses' => 'MainController@getEditMain']);
        Route::post('edit_main/{id}', ['as' => 'admin.main.edit_main', 'uses' => 'MainController@postEditMain']);
        Route::get('delete/{id}', ['as' => 'admin.main.delete', 'uses' => 'MainController@delete']);
    });

    Route::group(['prefix' => '/admin/sidebar'], function () {
        Route::get('/add_sidebar', ['as' => 'admin.sidebar.add_sidebar', 'uses' => 'SidebarController@getAddSidebar']);
        Route::post('/add_sidebar', ['as' => 'admin.sidebar.add_sidebar', 'uses' => 'SidebarController@postAddSidebar']);
        Route::get('/list_sidebar', ['as' => 'admin.sidebar.list_sidebar', 'uses' => 'SidebarController@index']);

        Route::get('edit_sidebar/{id}', ['as' => 'admin.sidebar.edit_sidebar', 'uses' => 'SidebarController@getEditSidebar']);
        Route::post('edit_sidebar/{id}', ['as' => 'admin.sidebar.edit_sidebar', 'uses' => 'SidebarController@postEditSidebar']);
        Route::get('delete/{id}', ['as' => 'admin.sidebar.delete', 'uses' => 'SidebarController@delete']);
    });

    Route::group(['prefix' => '/admin/about'], function () {
        Route::get('/add_about', ['as' => 'admin.about.add_about', 'uses' => 'AboutController@getAddAbout']);
        Route::post('/add_about', ['as' => 'admin.about.add_about', 'uses' => 'AboutController@postAddAbout']);
        Route::get('/list_about', ['as' => 'admin.about.list_about', 'uses' => 'AboutController@index']);

        Route::get('edit_about/{id}', ['as' => 'admin.about.edit_about', 'uses' => 'AboutController@getEditAbout']);
        Route::post('edit_about/{id}', ['as' => 'admin.about.edit_about', 'uses' => 'AboutController@postEditAbout']);
        Route::get('delete/{id}', ['as' => 'admin.about.delete', 'uses' => 'AboutController@delete']);
    });
    // Chef

    Route::group(['prefix' => '/admin/chef'], function () {
        Route::get('/add_chef', ['as' => 'admin.chef.add_chef', 'uses' => 'ChefController@getAddChef']);
        Route::post('/add_chef', ['as' => 'admin.chef.add_chef', 'uses' => 'ChefController@postAddChef']);
        Route::get('/list_chef', ['as' => 'admin.chef.list_chef', 'uses' => 'ChefController@index']);

        Route::get('edit_chef/{id}', ['as' => 'admin.chef.edit_chef', 'uses' => 'ChefController@getEditChef']);
        Route::post('edit_chef/{id}', ['as' => 'admin.chef.edit_chef', 'uses' => 'ChefController@postEditChef']);
        Route::get('delete/{id}', ['as' => 'admin.chef.delete', 'uses' => 'ChefController@delete']);
    });

    Route::group(['prefix' => '/admin/menu'], function () {
        Route::get('/add_menu', ['as' => 'admin.menu.add_menu', 'uses' => 'MenuController@getAddMenu']);
        Route::post('/add_menu', ['as' => 'admin.menu.add_menu', 'uses' => 'MenuController@postAddMenu']);
        Route::get('/list_menu', ['as' => 'admin.menu.list_menu', 'uses' => 'MenuController@index']);

        Route::get('edit_menu/{id}', ['as' => 'admin.menu.edit_menu', 'uses' => 'MenuController@getEditMenu']);
        Route::post('edit_menu/{id}', ['as' => 'admin.menu.edit_menu', 'uses' => 'MenuController@postEditMenu']);
        Route::get('delete/{id}', ['as' => 'admin.menu.delete', 'uses' => 'MenuController@delete']);
    });

    Route::group(['prefix' => '/admin/menuPricing'], function () {
        Route::get('/add_menuPricing', ['as' => 'admin.menuPricing.add_menuPricing', 'uses' => 'MenuPricingController@getAddMenuPricing']);
        Route::post('/add_menuPricing', ['as' => 'admin.menuPricing.add_menuPricing', 'uses' => 'MenuPricingController@postAddMenuPricing']);
        Route::get('/list_menuPricing', ['as' => 'admin.menuPricing.list_menuPricing', 'uses' => 'MenuPricingController@index']);

        Route::get('edit_menuPricing/{id}', ['as' => 'admin.menuPricing.edit_menuPricing', 'uses' => 'MenuPricingController@getEditMenuPricing']);
        Route::post('edit_menuPricing/{id}', ['as' => 'admin.menuPricing.edit_menuPricing', 'uses' => 'MenuPricingController@postEditMenuPricing']);
        Route::get('delete/{id}', ['as' => 'admin.menuPricing.delete', 'uses' => 'MenuPricingController@delete']);
    });

    Route::group(['prefix' => '/admin/services'], function () {
        Route::get('/add_services', ['as' => 'admin.services.add_services', 'uses' => 'ServiceController@getAddServices']);
        Route::post('/add_services', ['as' => 'admin.services.add_services', 'uses' => 'ServiceController@postAddServices']);
        Route::get('/list_services', ['as' => 'admin.services.list_services', 'uses' => 'ServiceController@index']);

        Route::get('edit_services/{id}', ['as' => 'admin.services.edit_services', 'uses' => 'ServiceController@getEditServices']);
        Route::post('edit_services/{id}', ['as' => 'admin.services.edit_services', 'uses' => 'ServiceController@postEditServices']);
        Route::get('delete/{id}', ['as' => 'admin.services.delete', 'uses' => 'ServiceController@delete']);
    });

    Route::group(['prefix' => '/admin/services'], function () {
        Route::get('/add_functionServices', ['as' => 'admin.services.add_functionServices', 'uses' => 'FunctionServiceController@getAddFunctionServices']);
        Route::post('/add_functionServices', ['as' => 'admin.services.add_functionServices', 'uses' => 'FunctionServiceController@postAddFunctionServices']);
        Route::get('/list_functionServices', ['as' => 'admin.services.list_functionServices', 'uses' => 'FunctionServiceController@index']);

        Route::get('edit_functionServices/{id}', ['as' => 'admin.services.edit_functionServices', 'uses' => 'FunctionServiceController@getEditFunctionServices']);
        Route::post('edit_functionServices/{id}', ['as' => 'admin.services.edit_functionServices', 'uses' => 'FunctionServiceController@postEditFunctionServices']);
        Route::get('delete/{id}', ['as' => 'admin.services.delete', 'uses' => 'FunctionServiceController@delete']);
    });
    Route::group(['prefix' => '/admin/contactInformation'], function () {

        Route::get('/list_contactInformation', ['as' => 'admin.contactInformation.list_contactInformation', 'uses' => 'ContactInformationController@index']);

        Route::get('delete/{id}', ['as' => 'admin.contactInformation.delete', 'uses' => 'ContactInformationController@delete']);
    });
    Route::group(['prefix'=>'admin/orders'], function() {
            Route::get('/list_orders', ['as' => 'admin.orders.list_orders', 'uses' =>'OrderController@index']);
            Route::get('/list_orderDetails/{id}', ['as' => 'admin.orders.list_orderDetails', 'uses' =>'OrderController@orderDetails']);
            Route::get('/editOrders/{id}', ['as' => 'admin.orders.editOrders', 'uses' =>'OrderController@editOrders']);
            Route::post('/updateOrders/{id}', ['as' => 'admin.orders.updateOrders', 'uses' =>'OrderController@updateOrders']);
            Route::get('/delete/{id}', ['as' => 'admin.orders.delete', 'uses' =>'OrderController@delete']);
    });
        Route::group(['prefix' => '/admin/recipes'], function () {
            Route::get('/add_recipe', ['as' => 'admin.recipes.add_recipe', 'uses' => 'RecipeController@getAddRecipe']);
            Route::post('/add_recipe', ['as' => 'admin.recipes.add_recipe', 'uses' => 'RecipeController@postAddRecipe']);
            Route::get('/list_recipe', ['as' => 'admin.recipes.list_recipe', 'uses' => 'RecipeController@index']);
            Route::get('/list_pizzaRecipes', ['as' => 'admin.recipes.list_pizzaRecipes', 'uses' => 'PizzaRecipeController@index']);

            Route::get('edit_recipe/{id}', ['as' => 'admin.recipes.edit_recipe', 'uses' => 'RecipeController@getEditRecipe']);
            Route::post('edit_recipe/{id}', ['as' => 'admin.recipes.edit_recipe', 'uses' => 'RecipeController@postEditRecipe']);
            Route::get('delete/{id}', ['as' => 'admin.recipes.delete', 'uses' => 'RecipeController@delete']);
        });

    Route::group(['prefix' => '/admin/recipeTypes'], function () {
        Route::get('/add_recipeTypes', ['as' => 'admin.recipeTypes.add_recipeTypes', 'uses' => 'RecipeTypeController@getAddRecipeTypes']);
        Route::post('/add_recipeTypes', ['as' => 'admin.recipeTypes.add_recipeTypes', 'uses' => 'RecipeTypeController@postAddRecipeTypes']);
        Route::get('/list_recipeTypes', ['as' => 'admin.recipeTypes.list_recipeTypes', 'uses' => 'RecipeTypeController@index']);

        Route::get('edit_recipeTypes/{id}', ['as' => 'admin.recipeTypes.edit_recipeTypes', 'uses' => 'RecipeTypeController@getEditRecipeTypes']);
        Route::post('edit_recipeTypes/{id}', ['as' => 'admin.recipeTypes.edit_recipeTypes', 'uses' => 'RecipeTypeController@postEditRecipeTypes']);
        Route::get('deleteRe/{id}', ['as' => 'admin.recipeTypes.deleteRe', 'uses' => 'RecipeTypeController@deleteRe']);
    });




});



Auth::routes();

