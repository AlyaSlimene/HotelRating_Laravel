<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Rating;
use Session;
use Illuminate\Support\Facades\DB;
class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
      $data=Hotel::all();
        return view('hotels',['hotels'=>$data]);
    }
    public function detail($id)
    {
      
        $data=Hotel::find($id);
        $data->session=session()->get('user');
        
        return view ('detail',['product'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $req)
    {
        //return($req->input());
        $data=Hotel::
       where('nomHotel','like','%'.$req->input('query').'%')
       ->get();
       return view ('search',['products'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addrating($id)
    {
        if(session()->has('user'))
        {
          $rating=new Rating;
           $rating->idHotel=$id;
           return view ('Ratings',['rating'=>$rating]);
          //return view ('Ratings',['rating'=>$req]);
          
           
        }
        else{
            return redirect('/login');

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function valrating(Request $req)
    {
        $rating=new Rating;
           $rating->idUser=$req->session()->get('user')['id'];
           $rating->idHotel=$req->idhot;
           $rating->noteAcc=$req->acc;
           $rating->noteRest=$req->res;
           $rating->noteHyg=$req->hyg;
           $rating->noteExtra=$req->extra1;
           $rating->description=$req->desc;
           $rating->dateRating=$ldate = date('Y-m-d ');
           $data=Rating::
       where([['idHotel','=',$req->input('idhot')],['idUser','=',$rating->idUser],['dateRating','=',$rating->dateRating]])
       ->get();
       if(session()->has('success'))
       {
        session()->forget('success');
       }
       if(session()->has('echec'))
       {
        session()->forget('echec');
       }
        
       if ($data->count()==0)
       {
        $rating->save();
        session()->put('success', 'Votre avis a été enregistré!');
        return redirect('/');//->with('message', 'Votre avis a été enregistré!');
       }
       else{
        //return Redirect::back()->withErrors(['msg', 'The Message']);   
        echo($data->count());
        session()->put('echec', "Vous avez dejà évalué le même hôtel aujourd''hui");
        return redirect('/');         }
          
           //return redirect('/');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editrating($id)
    {
       $user_id=Session::get('user')['id'];
       $Res=DB::table('ratings')
       ->join('hotels','hotels.id','=','ratings.idHotel')
       ->where('ratings.idHotel',$id)
       ->get();//count('ratings.idHotel');
       //$Res['count']=count($Res);
       //$a=1;
      //return $Res;
        return view('Edition',['results'=>$Res]);

    }
    static function Nbreratings($id)
    {
        $Res=DB::table('ratings')
        ->where('ratings.idHotel',$id)
        ->get();
        return count($Res);

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
}
