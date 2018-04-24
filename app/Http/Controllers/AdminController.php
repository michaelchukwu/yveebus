<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use App\User;
use App\Trip;
class AdminController extends Controller
{
    public function index()
    {
        $earnings = $this->earnings();
        $users = $this->users();
        $trips = $this->trips();
       return view('admin', compact('earnings', 'users', 'trips'));
    }
    public function earnings()
    {
        return Payment::where('source','Trip')->sum('amount'); 
    }
    public function users()
    {
        return User::count();
    }
    public function trips()
    {
        return Trip::count();
    }
}
