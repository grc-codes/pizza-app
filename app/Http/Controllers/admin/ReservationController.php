<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Reservation;

class ReservationController extends Controller
{
    public function index() {
        $reservations = Reservation::paginate(10);
        return view('admin/reservations/all', [
            'reservations' => $reservations
        ]);
    }

    public function create() {
        return view('admin/reservations/create');
    }

    public function store() {
        request()->validate([
            'fname' => ['required', 'string'],
            'lname' => ['required', 'string'],
            'email' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
            'guests_total' => ['required'],
            'time' => ['required']
        ]);
        
        $reservation = new Reservation();

        $reservation->fname = request('fname');
        $reservation->lname = request('lname');
        $reservation->email = request('email');
        $reservation->phone_number = request('phone_number');
        $reservation->guests_total = request('guests_total');
        $reservation->time = request('time');
        $reservation->save();

        return redirect('/admin/reservations');
    }

    public function update($id) {
        request()->validate([
            'fname' => ['required', 'string'],
            'lname' => ['required', 'string'],
            'email' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
            'guests_total' => ['required'],
            'time' => ['required']
        ]);
        
        $reservation = Reservation::find($id);
        $reservation->fname = request('fname');
        $reservation->lname = request('lname');
        $reservation->email = request('email');
        $reservation->phone_number = request('phone_number');
        $reservation->guests_total = request('guests_total');
        $reservation->time = request('time');
        $reservation->save();

        return redirect('/admin/reservations');
    }

    public function delete($id) {
        $reservation = Reservation::find($id);
        $reservation->delete();
        return redirect('/admin/reservations');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
