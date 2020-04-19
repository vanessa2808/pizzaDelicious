<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product_categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    protected $product_categories;
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";
    public function __construct(Product_categories $product_categories = null)
    {
        $this->middleware('auth');
        $this->product_categories = $product_categories;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listCategories = $this->product_categories->getAllCategories();
        return view('admin.product_categories.list_categories',[
            'listCategories' => $listCategories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAdd()
    {
        return view('admin.product_categories.add_categories');
    }
    public  function postAdd(CategoryRequest $request) {
        $newCategories = $this->product_categories->addnewCategories($request);
        if($newCategories == self::RETURN_STR_ZERO){
            return redirect('/admin/product_categories/add_categories');
        }
        return redirect('/admin/product_categories/list_categories');
    }
    public function getEdit($id) {
        $idCategory = $this->product_categories->getCategoryId($id);
        return view('admin.product_categories.edit_categories', [
            'idCategory' => $idCategory
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postEdit(CategoryRequest $request, $id)
    {
        $idCategory = $this->product_categories->updateProductCategories($request, $id);
        if($idCategory == self::RETURN_STR_ZERO){
            return redirect()->back();

        }
        return redirect('/admin/product_categories/list_categories');
    }

    public function delete($id) {
        $idCategory = $this->product_categories->deleteCategories($id);
        if ($idCategory == self::RETURN_STR_ZERO) {
            return redirect()->back();
        }
        return redirect('/admin/product_categories/list_categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product_categories  $product_categories
     * @return \Illuminate\Http\Response
     */

}
