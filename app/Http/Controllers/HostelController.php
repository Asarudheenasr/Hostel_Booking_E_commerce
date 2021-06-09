<?php

namespace App\Http\Controllers;
use DB;
use App\hostel;
use Illuminate\Http\Request;
class HostelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

 
        //  check box   
        if(isset($request->ac)){
             $x="1";
        }else{
            $x="0";
        }
        if(isset($request->food)){
            $y="1";
       }else{
           $y="0";
       }
        if(isset($request->men)){
            $z="1";
       }else{
           $z="0";
       }
        if(isset($request->woman)){
            $p="1";
       }else{
           $p="0";
       }
       if(isset($request->wifi)){
            $q="1";
       }else{
           $q="0";
       }
       if(isset($request->shelf)){
            $r="1";
       }else{
           $r="0";
       }
       if(isset($request->parking)){
            $a="1";
       }else{
           $a="0";
       }
       if(isset($request->kitchen)){
            $b="1";
       }else{
           $b="0";
       }
       if(isset($request->laundry)){
            $c="1";
       }else{
           $c="0";
       }
       // ckeck box end
       
        // $data= new hostel;
        $data['created_at']=date("Y-m-d H:i:s");
        $data['updated_at']=date("Y-m-d H:i:s");
        $data['hostel_name']=$request->hostel_name;
        $data['district']=$request->district;
        $data['city']=$request->city;
        $data['address']=$request->address;
        $data['description']=$request->description;
        $data['mobile']=$request->mobile;
        $data['bedcapacity']=$request->bedcapacity;
        //check box
        $data['ac']=$x;
        $data['food']=$y;
        $data['men']=$z;
        $data['woman']=$p;
        $data['wifi']=$q;
        $data['shelf']=$r;
        $data['parking']=$a;
        $data['kitchen']=$b;
        $data['laundry']=$c;
        // check box
        $data['fee']=$request->fee;
        // $data->save();
       
        //insert in to hostels table
        $insrtid = DB::table('hostels')->insertGetId($data);
        
        // took number of images 
        $imgx=count($request->image);

        for($x=0; $x<$imgx; $x++)
        {
            $file=time().".".$request->image[$x]->extension();
            $request->image[$x]->move(public_path('hostelimages'),$file); 
            //insert images into images table
            DB::table('images')->insert(
                ['images'=>$file,'hostel_id'=>$insrtid]
            );
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\hostel  $hostel
     * @return \Illuminate\Http\Response
     */
    public function show(hostel $hostel)
    {
        return view('admin/hosteladd');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\hostel  $hostel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
 
        $upditems=hostel::find($id);
      
        return view('admin/edithostel',['items'=>$upditems]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\hostel  $hostel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hostel $hostel)
    {
       echo $request->id;

          //  check box   
          if(isset($request->ac)){
            $x="1";
       }else{
           $x="0";
       }
       if(isset($request->food)){
           $y="1";
      }else{
          $y="0";
      }
       if(isset($request->men)){
           $z="1";
      }else{
          $z="0";
      }
       if(isset($request->woman)){
           $p="1";
      }else{
          $p="0";
      }
      if(isset($request->wifi)){
           $q="1";
      }else{
          $q="0";
      }
      if(isset($request->shelf)){
           $r="1";
      }else{
          $r="0";
      }
      if(isset($request->parking)){
           $a="1";
      }else{
          $a="0";
      }
      if(isset($request->kitchen)){
           $b="1";
      }else{
          $b="0";
      }
      if(isset($request->laundry)){
           $c="1";
      }else{
          $c="0";
      }
      // ckeck box end
      
       // $data= new hostel;
       $data['created_at']=date("Y-m-d H:i:s");
       $data['updated_at']=date("Y-m-d H:i:s");
       $data['hostel_name']=$request->hostel_name;
       $data['district']=$request->district;
       $data['city']=$request->city;
       $data['address']=$request->address;
       $data['description']=$request->description;
       $data['mobile']=$request->mobile;
       $data['bedcapacity']=$request->bedcapacity;
       //check box
       $data['ac']=$x;
       $data['food']=$y;
       $data['men']=$z;
       $data['woman']=$p;
       $data['wifi']=$q;
       $data['shelf']=$r;
       $data['parking']=$a;
       $data['kitchen']=$b;
       $data['laundry']=$c;
       // check box
       $data['fee']=$request->fee;

     hostel::where('id',$request->id)->update($data);
     return redirect('hostelist');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\hostel  $hostel
     * @return \Illuminate\Http\Response
     */
    public function destroy($hostel)
    {
     hostel::destroy($hostel);
     return back();
    }
    public function hostelist()
    {
        $hostels=DB::table('hostels')->get();
        return view('admin/hostelist',['hostels'=>$hostels]);
    }


    public function search(request $request){
    
      $x=hostel::where('hostels.district', $request->district)
                ->where('hostels.city', $request->city)
                ->get();
      $no=0;
      foreach($x as $y){
        $img =DB::table('images')
            ->where('hostel_id',$y->id)
            ->get();
       
        $arr[$no]['hostel_name']=$y->hostel_name;
        $arr[$no]['description']=$y->description;
        $arr[$no]['address']=$y->address;
        $arr[$no]['mobile']=$y->mobile;
        $arr[$no]['images']=$img[0]->images;
        $no++;
      }
      $district=DB::table('hostels')->select('district')->distinct()->get();

       return view('searchresult',['id'=>$x,'records'=>$arr,'checkin'=>$request->checkin,'checkout'=>$request->checkout,'dist'=>$district,'cit'=>$request->city]);
      
    }
    

    public function details($id){

        $data=hostel::find($id);
        $img =DB::table('images')
            ->where('hostel_id',$id)
            ->get();
            
        return view('hostels',['records'=>$data,'img'=>$img]);



    }
}



    //    $result=DB::table('hostels')
    //             ->leftjoin('images', 'hostels.id', '=', 'images.hostel_id')
    //             ->select('hostels.hostel_name', 'images.images', 'hostels.description','hostels.address','hostels.mobile','hostels.bedcapacity')
    //                 ->where('hostels.district', $request->district)
    //                 ->where('hostels.city', $request->city)
    //                 ->get();
    //         print_r($result);
        // $district=select('district')->distinct()->get();
       