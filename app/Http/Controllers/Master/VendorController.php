<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Master\Vendor;
// use App\Http\Controllers\Master\Toastr;
use App\Models\Model\Master\Vendor as MasterVendor;
use Illuminate\Http\Request;
// use TJGazel\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\Master\Toastr;
use Yajra\DataTables\DataTables;




class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Vendor.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Vendor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new MasterVendor();
        $data->name = $request->name;
        $data->address = $request->address;
        $data->cp = $request->contactPerson;
        $data->phone = $request->phone;
        $data->active = $request->status;
        $data->user_modified = Auth::user()->id;

        if($data->save()) {
            // Toastr::success('Vendor Created Sucessfully', 'Success');
            return redirect()->route('Vendor.index');
        }else{
            // Toastr::error('Vendor cannot be Created Sucessfully', 'Error');
            return redirect()->back(); 

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function datatables() {
        $data = Vendor::all();
        return Datatables::of($data)
          ->addColumn('action', function($data){
                $url_edit = url(path 'Master/Vendor/'.$data->id.'/edit');
                $url = url(path 'master/vendor/'.$data->id.');
              $view = "<a class='btn btn-action btn-primary' href='".$url."' title='View'><i class='nav-icon fas fa-eye'></i></a>;
              $edit = "<a class='btn btn-action btn-warning' href='".$url_edit."' title='Edit'><i class='nav-icon fas fa-edit'></i></a>;
              $delete = "<button data-url='".$url."' onclick='deleteData(this)' class='btn btn-action btn-danager' title='Delete'><i class='nav-icon fas fa-trash-alt'></i></button>"

              return $view."".$edit."".$delete;
          })
          ->editColumn('address', function($data){
              return str_ireplace(search "\r\n", replace ',', $data->address);
          })
          ->editColumn('phone', function($data){
              return str_ireplace(search "\r\n", replace ',', $data->phone); 
          })
          ->rawColumns(['action'])
          ->editColumn('id', 'ID:{{$id}}')
          ->make(true);
        
    }
}


use App\Http\Controllers\HomeController;

$url = action([HomeController::class, 'index']);

$url = action([UserController::class, 'profile'], ['id' => 1]);