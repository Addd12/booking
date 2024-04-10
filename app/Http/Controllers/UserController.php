<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login()
    {
        return view('user.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password'=> 'required'
        ]);
        //dd($request->validate);
        // $remember stores a boolead value based on whether the Remember me button is checked or not
        $remember = $request->has('remember');

        if(Auth::attempt($credentials, $remember))
        {
            $request->session()->regenerate();
            return redirect('dashboard')->with('success','You are now logged in!');
        }
        else{
            return redirect('login')->with('error','Invalid credentials.');
        }
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        return redirect('/')->with('success','You have logged out successfully!');
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    
    public function showRegister()
    {
        return view('user/register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*Method 1*/
        // $user = new User(); //created a user object which i stored in $user variable, which means that we have a User model and from it we can create a user object
        // //echo gettype($user); // used gettype() function to see the type of the variable i created above. the result is object
        // $user->name = $request->name;
        // //dd($user); //dd for dump and die. calls var_dump() with the variable we give it then executes die() to stop running the code. in this case it shows info anout the user object
        // $user->email = $request->email; //$user->email refers to the email field in the User model. $request->email refers to the email attribute in the form that is in the register view. this means that the email we type into the email field is being assigned to the email attribute of the User model, which then writes it to the database
        // //$user->password = $request->password;
        // $user->password = bcrypt($request->password);
        // $user->save(); //if save() is not called then the data typed in the form will not be saved

        // return view('user.register'); // if the view is not returned then the page shows just blank after pressing submit
        
        /*Method 2*/

        $validatedData = $request->validate([
            'name'=>'required|string|max:50',
            'email'=> 'required|email|max:255|unique:users',
            'password'=> 'required|min:3|max:15'
        ]);

        User::create([ //using this function there is no need to call save() because the create() saves them directly
            'name'=> $validatedData['name'],
            'email'=> $validatedData['email'],
            'password'=> bcrypt($validatedData['password']),
            ]);

        return redirect()->route('login')->with('success','You have successfully registered!');
        //return view('user.register');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $users = User::all();
        //dd($user);
        return view('user.list', compact('users')); //the value users is the variable which stores the data from the db and it should be the same as the one used in the view
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
