<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromQuery;
use App\Invoice;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use App\Models\OsLiquidadas;
use App\Models\Obras;

class LiquidadasExport implements FromView
{
  /**
   * @return \Illuminate\Database\Query\Builder
   */
  /**
   * undocumented function
   *
   * @return void
   */
  // public function view(): View
  // {
  //     return view('export.os_liquidadas', [
  //         'osl' => OsLiquidadas::all()
  //     ]);
  // }

  /**
   * undocumented function
   *
   * @return void
   */
  public function __construct($view, $data)
  {
    $this->view = $view;
    $this->data = $data;
  }

  public function view(): View
  {
    return view(
      $this->view,
      $this->data
    );
  }


  // public function viewO(): view
  // {
  //     return view('export.obras', [
  //         'obras' => Obras::all()
  //     ]);
  // }
}
