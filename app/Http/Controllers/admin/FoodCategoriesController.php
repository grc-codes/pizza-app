<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\FoodCategory;

class FoodCategoriesController extends Controller
{
    public function index() {
        $categories = FoodCategory::paginate(10);
        return view('admin/food-categories/all', [
            'categories' => $categories
        ]);
    }

    public function create() {
        return view('admin/food-categories/create');
    }

    public function store() {
        $category = new FoodCategory();
        $category->fname = request('fname');
        $category->lname = request('lname');
        $category->email = request('email');
        $category->password = Hash::make(request('password'));
        $category->save();
        $category->roles()->attach(request('role_id'));
        return redirect('/admin/food-categories');
    }

    public function edit($id) {
        $category = FoodCategory::find($id);
        return view('admin/food-categories/edit', [
            'user' => $category,
            'roles' => $roles
        ]);
    }

    public function update($id) {
        request()->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role_id' => ['required']
        ]);
        
        $category = FoodCategory::find($id);
        $category->fname = request('fname');
        $category->lname = request('lname');
        $category->email = request('email');
        $category->password = Hash::make(request('password'));
        $category->save();
        $category->roles()->sync([request('role_id')]);
        return redirect('/admin/food-categories');
    }

    public function delete($id) {
        $category = FoodCategory::find($id);
        $category->delete();
        return redirect('/admin/food-categories');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
