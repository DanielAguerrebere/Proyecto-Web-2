<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
      $maximo_datos = 10;
      $table = \App\Category::paginate($maximo_datos);
      return view('avis_index')->with('categories',$table);
    }

    public function detail($id)
    {
      $table = \App\Category::find($id);
      return view('avis_detail')->with('category',$table);
    }
    public function add()
    {
      return view('avis_add');
    }
    public function addAction()
    {
      $name = $_GET['name'];
      $passengers = $_GET['passengers'];
      $cost = $_GET['cost'];

      $data = array('name'=>$name,'passengers'=>$passengers,'cost'=>$cost);
      \App\Category::insert($data);
      return redirect()->action('CalculatorController@index');
    }

    public function modify($id)
    {
      $table = \App\Category::find($id);
      return view('avis_modify')->with('category',$table);
    }

    public function delete($id)
    {
      \App\Category::where('id',$id)->delete();
      return redirect()->action('CalculatorController@index');
    }

    public function modifyAction($id)
    {
      $name = $_GET['name'];
      $passengers = $_GET['passengers'];
      $cost = $_GET['cost'];
      $data = array('name'=>$name,'passengers'=>$passengers,'cost'=>$cost);
      var_dump($data);
      \App\Category::where('id',$id)->update($data);
      return redirect()->action('CalculatorController@index');
    }

}
