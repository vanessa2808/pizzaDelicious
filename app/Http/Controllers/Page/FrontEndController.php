<?php

namespace App\Http\Controllers\page;
use App\Models\Blog;
use App\Models\About;
use App\Models\Food;
use App\Models\Main;
use App\Models\Header;
use App\Models\HeaderAbout;
use App\Models\HeaderMenu;
use App\Models\HeaderService;
use App\Models\HeaderContact;
use App\Models\HeaderBlog;
use App\Models\Chef;
use App\Models\FunctionService;

use App\Models\NumBlog;
use App\Models\Service;
use App\Models\Sidebar;
use App\Models\Activities;
use App\Models\Image;
use App\Models\Pizza;

use App\Models\Address;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use illuminate\support\Facedes\Validator;
use illuminate\Support\Facedes\Auth;

class FrontEndController extends Controller
{
    public function getHomePage() {
        $header = Header::all();
        $activities = Activities::all();
        $image = Image::all();
        $address = Address::all();
        return view('page.home',['header'=>$header, 'activities'=>$activities,'image'=>$image, 'address'=>$address]);

    }
    public function getAboutPage() {
        $headerAbout = HeaderAbout::all();
        $activities = Activities::all();
        $address = Address::all();
        $chef = Chef::all();
        return view('page.about',['headerAbout'=>  $headerAbout,'activities'=>$activities,'address'=>$address,'chef'=>$chef]);

    }
    public function getMenuPage() {
        $headerAbout = HeaderAbout::all();
        $pizza = Pizza::all();
        $address = Address::all();
        $chef = Chef::all();
        return view('page.pizza',['headerAbout'=>  $headerAbout,'pizza'=>$pizza,'address'=>$address,'chef'=>$chef]);
        
    }
    public function getCustomPizza() {
        $header = Header::all();
        $food = Food::all();
        $blog = Blog::all();
        $sidebar = Sidebar::all();
        $main = Main::all();
        return view('page.customPizza',['header'=>$header, 'food'=>$food,'blog'=>$blog, 'sidebar'=>$sidebar,'main'=>$main]);

    }
    public function getServicePage(){
        $services = Service::all();
        $functionServices = FunctionService::all();

        return view('page.service',['services'=>$services, 'functionServices'=>$functionServices]);
    }
    public function getBlogPage(){
        $headerBlog = HeaderBlog::all();
        $blog = Blog::all();
        $numBlog = NumBlog::all();

        return view('page.blog',['headerBlog'=>$headerBlog, 'blog'=>$blog,'numBlog'=>$numBlog]);
    }
    public function getContactDetails() {
        $headerContact = HeaderContact::all();
        $address = Address::all();

        return view('page.contact',['headerContact'=>$headerContact, 'address'=>$address]);

    }
    public function getPizzaDetails($id) {
        
        //$food        = Food::where('id', 1)->get()->first();
        $pizza = Pizza::find($id);
        return view('page.pizza_details',[ 'pizza'=>$pizza]);
        
    }



}
