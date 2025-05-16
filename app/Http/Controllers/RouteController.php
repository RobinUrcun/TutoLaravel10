<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryFilterRequest;
use App\Http\Requests\InRequest;
use App\Http\Requests\ManageProductRequest;
use App\Http\Requests\TagFilterRequest;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\Validator;

class RouteController extends Controller
{
    public function index()
    {

        return view('page.index');
    }

    public function boutique()
    {

        $articleList = Article::all();
        return view('page.boutique', ['productList' => $articleList]);
    }

    public function addProduct()
    {
        $tagsList = Tag::all();
        $article = new Article();
        $categoryList = Category::all();
        return view('page.manageProduct', ["product" => $article, 'categories' => $categoryList, 'tagsList' => $tagsList]);
    }

    public function addProductPost(ManageProductRequest $request)
    {

        Article::create($request->validated());

        return redirect()->route('boutique')->with('success', 'Le produit a bien été créé');
    }
    public function getProduct(Article $id)
    {
        return view('page.product', ['product' => $id]);
    }

    public function manageProduct(Article $id)
    {
        $categoryList = Category::all();
        $tagsList = Tag::all();

        return view('page.manageProduct', ['product' => $id,  'categories' => $categoryList, 'tagsList' => $tagsList]);
    }

    public function updateProduct(Article $id, ManageProductRequest $request)
    {

        $id->update($request->validated());

        return redirect()->route('boutique')->with('success', 'Le produit a bien été modifié.');
    }

    public function getCategoriesList()
    {

        $categories = Category::all() ?: [new Category()];
        return view('page.categoriesList', ['categories' => $categories]);
    }

    public function addCategory()
    {

        $category = new Category();
        return view('page.categoriesManage', ['category' => $category]);
    }

    public function addCategoryPost(CategoryFilterRequest $request)
    {
        Category::create($request->validated());
        return redirect()->route('getCategoriesList')->with('success', 'Catégorie enregistrée');
    }

    public function manageCategory(Category $id)
    {

        return view('page.categoriesManage', ['category' => $id]);
    }

    public function manageCategoryPost(Category $id, CategoryFilterRequest $request)
    {
        $id->update($request->validated());
        return redirect()->route('getCategoriesList')->with('success', 'La catégorie     a bien été modifié.');
    }

    public function categorie(Category $id)
    {
        return view('page.categorie', ['category' => $id, 'articles_list' => $id->articles]);
    }

    public function getTagsList()
    {

        $tagsList = Tag::all();
        return view('page.tagsList', ['tagsList' => $tagsList]);
    }

    public function addTag()
    {

        return view('page.manageTags');
    }

    public function addTagPost(TagFilterRequest $request)
    {
        Tag::create($request->validated());
        return redirect()->route('getTagsList')->with('success', 'Tag enregistré');
    }

    public function tag(Tag $id)
    {
        return view('page.tag', ['tag' => $id]);
    }
}
