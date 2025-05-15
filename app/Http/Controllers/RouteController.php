<?php

namespace App\Http\Controllers;

use App\Http\Requests\InRequest;
use App\Http\Requests\ManageProductRequest;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;

class RouteController extends Controller
{
    public function index(){

        return view('page.index');
    }

    public function boutique(){

        $articleList = Article::all();
        return view('page.boutique', ['productList'=> $articleList]);
    }

    public function addProduct(){

        $article = new Article();
        return view('page.manageProduct',["product" => $article]);
    }

    public function addProductPost(ManageProductRequest $request){
        Article::create($request->validated());

        return redirect()->route('boutique')->with('success', 'Le produit a bien été créé');

    }
    public function getProduct(Article $id){
        return view('page.product', ['product'=> $id]);
    }

    public function manageProduct(Article $id){
        return view('page.manageProduct',['product'=> $id]);
    }

    public function updateProduct(Article $id, ManageProductRequest $request){

        $id->update($request->validated());

        return redirect()->route('boutique')->with('success', 'Le produit a bien été modifié.');
    }

    public function getCategoriesList(){

        $categories = Category::all() ? : [new Category()];
        return view('page.categoriesList', ['categories'=> $categories]);
    }
}
