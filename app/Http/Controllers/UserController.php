<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\astrology;
use Illuminate\View\View;
 
class UserController extends Controller
{
    /**
     * Show a list of all of the application's users.
     */
    public function view()
    {
        
        $users = astrology::select('select * from appointments');
        return $users;
    }
}