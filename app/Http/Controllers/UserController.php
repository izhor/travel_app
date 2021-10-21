<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\Flight;
use App\Models\Hotel;
use Illuminate\Support\Facades\Input;
use Session;
//use Illuminate\Support\Facades\Request;



class UserController extends Controller
{
    


    public function addNewFlight(Request $req){
        
        if ($req->destination == $req->start) {
            Session::flash('success_add',"Starting point and Destination Cannot be the same place");
            return redirect()->back();
        }else {
            $flight = new Flight;
            $flight->user_id = auth()->id();
            $flight->starting_point = $req->start;
            $flight->destination = $req->destination;
            $flight->depart = $req->depart;
            $flight->return = $req->return;
            $flight->code = md5(auth()->id().$req->depart);
            $flight->save();
            Session::flash('success_add',"Flight Added Successfully!");
            return redirect()->back();
        }

       
        

    }


    public function addHotel(Request $req){
        $hotel = new Hotel;
        $hotel->user_id = auth()->id();
        $hotel->region = $req->region;
        $hotel->hotel = $req->hotel;
        $hotel->check_in = $req->check_in;
        $hotel->stays = $req->stay;
        $hotel->code = md5(auth()->id().$req->region);
        $hotel->save();
        Session::flash('success_add',"Hotel booked successfully!");
        return redirect()->back();
    }

    public function displayBook(){
        $hotels = Hotel::all()->where('user_id',auth()->id());
        return view('user.mybook',compact('hotels'));
    }
    public function displayFlight(){
        $flights = Flight::all()->where('user_id',auth()->id());
        return view('user.myflights',compact('flights'));
    }
    public function detailFlight($id){
        $flights = Flight::all()->where('id',$id);
        return view('user.flightDetail', compact('flights'));
    }
    public function detailBook($id){
        $hotels = Hotel::all()->where('id',$id);
        return view('user.hotelDetail', compact('hotels'));
    }

    public function deleteHotel($id){
        $hotels = Hotel::find($id);
        $hotels->delete();
        return redirect()->back();
    }
    public function deleteFlight($id){
        $flights = Flight::find($id);
        $flights->delete();
        return redirect()->back();
    }
}
