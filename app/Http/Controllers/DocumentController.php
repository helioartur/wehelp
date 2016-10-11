<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Document;
use Input;
use Response;
use Validator;
use Image;
use Auth;

class DocumentController extends Controller {

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
  public function index()
  {
    
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
  public function store()
  {
    
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

  public function multiple_upload() {

      $document = new Document();

      // getting all of the post data 
      $files = Input::file('images');
      
      // Making counting of uploaded images
      $file_count = count($files);

      // start count how many uploaded
      $uploadcount = 0;

      foreach($files as $file) {

          $rules = array('file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
          $validator = Validator::make(array('file'=> $file), $rules);
          
          if($validator->passes()){

              $filename  = time() . '.' . $file->getClientOriginalExtension();

              $path = public_path('uploads/' . $filename);

              $realpath = $file->getRealPath();              

              // open an image file
              $img = Image::make($file);

              $img->save($path);

              $document->name = $path;
              $document->fullpath = $realpath;
              $document->user_create_id = Auth::user()->id;  
              $document->mimetype=$img->mime();          

              $uploadcount ++;
          }
      }

      if($uploadcount == $file_count){
          return Response::json(['success'=>'true']);
      } 
      else {
          return Response::json(['success'=>'false']);
      }
  }
  
}

?>