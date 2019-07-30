<?php

namespace App\Http\Controllers;
use \App\Category;
use \App\Location;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{

      public function index()
      {
        $maximo_datos = 10;
        $table = Category::paginate($maximo_datos);
        return view('categories.index')->with('categories',$table);
      }

      public function detail($id)
      {
        $table = Category::find($id);
        return view('categories.detail')->with('category',$table);
      }

      public function create()
      {
        $locations = Location::all();
        return view('categories.create')->with('locations',$locations);
      }
      public function store()
      {
        $name = $_POST['name'];
        $passengers = $_POST['passengers'];
        $cost = $_POST['cost'];

        $data = array('name'=>$name,'passengers'=>$passengers,'cost'=>$cost);
        $category = Category::create($data);
        foreach ($_POST['location'] as $location)
        {
          $category->locations()->attach([$location]);
        }
        return redirect()->action('CategoriesController@index');
      }

      public function modify($id)
      {
        $locations = Location::all();
        $category = Category::find($id);
        return view('categories.modify')->with('category',$category)->with('locations',$locations);
      }

      public function delete($id)
      {
        Category::where('id',$id)->delete();
        return redirect()->action('CategoriesController@index');
      }

      public function update($id)
      {
        $name = $_POST['name'];
        $passengers = $_POST['passengers'];
        $cost = $_POST['cost'];
        $data = array('name'=>$name,'passengers'=>$passengers,'cost'=>$cost);
        Category::where('id',$id)->update($data);
        $category = Category::find($id);
        $category->locations()->detach();
        foreach ($_POST['location'] as $location)
        {
          $category->locations()->attach([$location]);
        }
        return redirect()->action('CategoriesController@index');
      }

}
