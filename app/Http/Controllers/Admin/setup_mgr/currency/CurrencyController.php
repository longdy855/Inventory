<?php namespace App\Http\Controllers\Admin\setup_mgr\currency;

// use Illuminate\Http\Request;
use App\Http\Requests\setup_mgr\CurrencyRequest;
use App\Http\Controllers\Controller;
use App\Models\Admin\setup_mgr\Currency;
use Illuminate\Support\Facades\Input;
use DB;
use Validator;
use Auth;
use Session;

class CurrencyController extends Controller
{

    public $view_title = "setup_mgr/currency.entry_title";
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
      $currencies = Currency::all();
      return view('admin.setup_mgr.currency.index')
                ->with('currencies',$currencies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.setup_mgr.currency.form')
                ->with('action',$this->action)
                ->with('view_title',$this->view_title);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(CurrencyRequest $request)
    {
      $input = $request->all();

      if(isset($input['is_active'])&&($input['is_active']=='on')) $input['is_active'] = 1;
      else $input['is_active'] = 0;

      if(isset($input['is_default'])&&($input['is_default']=='on')) $input['is_default'] = 1;
      else $input['is_default'] = 0;
      
      $input['created_by'] = Auth::user()->id;
      Currency::create($input);
      
      //##########Set Event for ActivityLog############
      $this->ActivityLog('create');
      return redirect("admin/setup_mgr/currency")->with('message','Save Successfully');
    }

    public function show($id)
    {
                      
      $currency = Currency::findOrFail($id);
      return view('admin.setup_mgr.currency.form')->with('currency',$currency)
                                          ->with('view_title',$this->view_title)
                                          ->with('action',"Show");
    }

    public function edit($id)
    {
      $currency = Currency::findOrFail($id);
      return view('admin.setup_mgr.currency.form')->with('currency',$currency)
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
    public function update(CurrencyRequest $request, $id)
    {
        $input = $request->all();
        $input['updated_by'] = Auth::user()->id;
        if(isset($input['is_active'])&&($input['is_active']=='on')) $input['is_active'] = 1;
        else $input['is_active'] = 0;

        if(isset($input['is_default'])&&($input['is_default']=='on')) $input['is_default'] = 1;
        else $input['is_default'] = 0;
       
        $currency = Currency::find($id);
        $currency->update($input);  
        //##########Set Event for ActivityLog############
        $this->ActivityLog('update');
        return redirect("admin/setup_mgr/currency")->with('message','Save Successfully');
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
      $currency = Currency::find($id);
      $currency->update([
        'is_delete' => 1,
      ]); 
      return redirect()->back()->with('message','Deleted Successfully');
    }
}
