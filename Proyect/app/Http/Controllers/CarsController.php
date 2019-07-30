<?php

namespace App\Http\Controllers;
use \App\Category;
use \App\Car;

use Illuminate\Http\Request;

class CarsController extends Controller
{
  public function index()
  {
    $cars = Car::all();
    return view('cars.index')->with('cars',$cars);
  }
  public function create()
  {
    $categories = Category::all();
    return view('cars.create')->with('categories',$categories);
  }
  public function store(Request $request)
  {
    // $make = $_POST['make'];
    // $model = $_POST['model'];
    // $year = $_POST['year'];
    // $category_id = $_POST['category_id'];
    //
    // $data = array('make'=>$make,'model'=>$model,'year'=>$year,'category_id'=>$category_id);
    Car::create($request->all());
    //return header('Location: '.url('http://localhost:8000/cars'));
    return redirect()->route('cars.index');
  }
}
