<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\User;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Http\RedirectResponse;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\View\View;

// class UserController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      */
//     public function index(): View
//     {
//         $users = User::paginate()->latest();
//         return view('users.index', compact('users'));
//     }

//     /**
//      * Show the form for creating a new resource.
//      */
//     public function create(): View
//     {
//         return view('users.create');
//     }

//     /**
//      * Store a newly created resource in storage.
//      */
//     public function store(Request $request): RedirectResponse
//     {
//         $request->validate([
//             'name' => 'required',
//             'email' => 'required|email|unique:users',
//             'password' => 'required|min:6',
//             'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
//             'location' => 'required',
//         ]);

//         $data = $request->except('password');
//         $data['password'] = Hash::make($request->input('password'));

//         // if ($request->hasFile('avatar')) {
//         //     $avatarPath = $request->file('avatar')->store('avatars', 'public');
//         //     $data['avatar'] = $avatarPath;
//         // }

//         if ($request->hasFile('profile_photo_path')) {
//             $avatarPath = $request->file('profile_photo_path')->store('avatars', 'public');
//             $data['profile_photo_path'] = $avatarPath;
//         }


//         User::create($data);

//         return redirect()->route('users.index')->with('success', 'Usuario creado exitosamente.');
//     }

//     /**
//      * Display the specified resource.
//      */
//     public function show(User $user): View
//     {
//         return view('users.show', compact('user'));
//     }

//     /**
//      * Show the form for editing the specified resource.
//      */
//     public function edit(User $user): View
//     {
//         return view('users.edit', compact('user'));
//     }

//     /**
//      * Update the specified resource in storage.
//      */
//     public function update(Request $request, User $user): RedirectResponse
//     {
//         $request->validate([
//             'name' => 'required',
//             'email' => 'required|email|unique:users,email,' . $user->id,
//             'password' => 'nullable|min:6',
//             'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
//             'location' => 'required',
//         ]);

//         $data = $request->except('password');

//         if ($request->input('password')) {
//             $data['password'] = Hash::make($request->input('password'));
//         }

//         if ($request->hasFile('avatar')) {
//             $avatarPath = $request->file('avatar')->store('avatars', 'public');
//             $data['avatar'] = $avatarPath;
//         }

//         $user->update($data);

//         return redirect()->route('users.index')->with('success', 'Usuario actualizado exitosamente.');
//     }

//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy(User $user): RedirectResponse
//     {
//         $user->delete();
//         return redirect()->route('users.index')->with('success', 'Usuario eliminado exitosamente.');
//     }

//     /**
//      * Display the user's dashboard.
//      */
//     public function dashboard(): View
//     {
//         $user = Auth::user();
//         return view('users.dashboard', compact('user'));
//     }

//     /**
//      * Display the user's job requests.
//      */
//     public function jobRequests(): View
//     {
//         $user = Auth::user();
//         $jobRequests = $user->jobRequests()->latest()->paginate(10);
//         return view('users.job_requests', compact('user', 'jobRequests'));
//     }

//     /**
//      * Display the user's quotations.
//      */
//     public function quotations(): View
//     {
//         $user = Auth::user();
//         $quotations = $user->quotations()->latest()->paginate(10);
//         return view('users.quotations', compact('user', 'quotations'));
//     }

//     /**
//      * Display the user's personal information.
//      */
//     public function personalInfo(): View
//     {
//         $user = Auth::user();
//         return view('users.personal_info', compact('user'));
//     }

//     /**
//      * Display the user's messages.
//      */
//     public function messages(): View
//     {
//         $user = Auth::user();
//         $messages = $user->messages()->latest()->paginate(10);
//         return view('users.messages', compact('user', 'messages'));
//     }
// }


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $users = User::paginate()->latest();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'location' => 'required',
        ]);

        $data = $request->except('password');
        $data['password'] = Hash::make($request->input('password'));

        if ($request->hasFile('profile_photo_path')) {
            $avatarPath = $request->file('profile_photo_path')->store('avatars', 'public');
            $data['profile_photo_path'] = $avatarPath;
        }

        User::create($data);

        return redirect()->route('users.index')->with('success', 'Usuario creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user): View
    {
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user): View
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:6',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'location' => 'required',
        ]);

        $data = $request->except('password');

        if ($request->input('password')) {
            $data['password'] = Hash::make($request->input('password'));
        }

        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $data['avatar'] = $avatarPath;
        }

        $user->update($data);

        return redirect()->route('users.index')->with('success', 'Usuario actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user): RedirectResponse
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Usuario eliminado exitosamente.');
    }
}
