<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MiPrimerController extends Controller
{
  /**
   * Display Index.
   *
   * @return \Illuminate\Http\Response
   */
  public function index() {
    //
    $data_to_view = [
      'name' => 'Torcuato'
    ];
    //return 'Cargando método index';
    //return view('firstpage');
    return view('my_pages.firstpage')->with('name', $data_to_view['name']);
  }

  /**
   * Display Index.
   *
   * @return \Illuminate\Http\Response
   */
  public function getCreate()
  {
    //
    $data_to_view = [
      'name' => 'Torcuato'
    ];
    return 'Index by resources';
    //return view('my_pages.firstpage', $data_to_view);
  }

    /**
     * Display another view.
     *
     * @return \Illuminate\Http\Response
     */
    public function otherview()
    {
        //
        return view('otherview');
    }


}
