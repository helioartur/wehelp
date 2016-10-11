<?php 

namespace App\Http\Controllers\Cause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CauseResult;
use App\Http\Controllers\Controller;
use App\Models\Cause;
use App\Models\CauseHelpers;

use Auth;

class CauseResultController extends Controller {

  /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index(Cause $cause)
  {
     $results = CauseResult::where('cause_id',$cause->id)
               ->orderBy('created_at', 'desc')
               ->get();
     $friends = CauseHelpers::where('cause_id', $cause->id)->count();
     $helps = CauseHelpers::where('cause_id', $cause->id)->sum('value');
     
     $top_friends = CauseHelpers::where('cause_id', $cause->id)
               ->orderBy('value', 'desc')
               ->take(10)
               ->get();

     return view('causes.result.index',compact('cause','results','friends','helps'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
      $cause_result = new  CauseResult();
      $cause_result->user_create_id = Auth::user()->id;
      $cause_result->description=$request->description;
      $cause_result->cause_id=$request->cause_id;

      $cause_result->save();

      $cause = Cause::Find($request->cause_id);

      return redirect('cause/'.$cause_result->cause_id.'/result');
      
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>