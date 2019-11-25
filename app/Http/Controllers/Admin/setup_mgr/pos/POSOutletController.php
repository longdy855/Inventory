<?php namespace App\Http\Controllers\Admin\setup_mgr\pos;

// use Illuminate\Http\Request;
use App\Http\Requests\setup_mgr\POSOutletRequest;
use App\Http\Controllers\Controller;
use App\Models\Admin\setup_mgr\POSOutlet;
use Illuminate\Support\Facades\Input;
use DB;
use Validator;
use Auth;
use Session;

class POSOutletController extends Controller
{

    public $view_title = 'setup_mgr/pos_outlet.entry_title';
    public $action = "Edit";
    
    public function __construct()
    {
       
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    { 
      $pos_outlets = POSOutlet::Where('is_deleted',0)->OrderBy('id','DESC')->get();
      return view('admin.setup_mgr.pos_outlet.index')
                ->with('pos_outlets',$pos_outlets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.setup_mgr.pos_outlet.form')
                ->with('action',$this->action)
                ->with('view_title',$this->view_title);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(POSOutletRequest $request)
    {
      $input = $request->all();

      if(isset($input['is_active'])&&($input['is_active']=='on')) $input['is_active'] = 1;
      else $input['is_active'] = 0;
      
      $input['created_by'] = Auth::user()->id;
      POSOutlet::create($input);
      
      //##########Set Event for ActivityLog############
      $this->ActivityLog('create');
      return redirect("admin/setup_mgr/pos_outlet")->with('message','Save Successfully');
    }

    public function show($id)
    {
                      
      $pos_outlet = POSOutlet::findOrFail($id);
      return view('admin.setup_mgr.pos_outlet.form')->with('pos_outlet',$pos_outlet)
                                          ->with('view_title',$this->view_title)
                                          ->with('action',"Show");
    }

    public function edit($id)
    {
      $pos_outlet = POSOutlet::findOrFail($id);
      return view('admin.setup_mgr.pos_outlet.form')->with('pos_outlet',$pos_outlet)
                                          ->with('view_title',$this->view_title)
                                          ->with('action',"Edit");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(POSOutletRequest $request, $id)
    {
        $input = $request->all();
        $input['updated_by'] = Auth::user()->id;
        if(isset($input['is_active'])&&($input['is_active']=='on')) $input['is_active'] = 1;
        else $input['is_active'] = 0;
       
        $pos_outlet = POSOutlet::find($id);
        
        $pos_outlet->update($input);  
        //##########Set Event for ActivityLog############
        $this->ActivityLog('update');
        return redirect("admin/setup_mgr/pos_outlet")->with('message','Save Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      //##########Set Event for ActivityLog############
      $this->ActivityLog('delete');
      $pos_outlet = POSOutlet::find($id);
      $pos_outlet->update([
        'is_deleted' => 1,
      ]); 
      return redirect()->back()->with('message','Deleted Successfully');
    }
}
