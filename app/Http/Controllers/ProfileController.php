<?php

namespace App\Http\Controllers;

use \App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    /**
     * Show a profile.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(User $user)
    {
        return view('profile.index', [
            'user' => $user,
        ]);
    }


    public function edit(User $user)
    {
        $this->authorize('update',$user->profile);

        return view('profile.edit', [
            'user' => $user,
        ]);
    }

    public function update(User $user)
    {
        $this->authorize('update',$user->profile);

        $data = request()->validate([
            'title'       => 'required',
            'description' => 'required',
            'url'         => 'url',
            'image'       => 'image',
        ]);

        if (request('image')){
            $imagePath = request('image')->store('profile', 'public');
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000); //  resize images to fit aspect ratio
            $image->save();
            $data['image'] = $imagePath;
        }

        auth()->user()->profile->update($data);

        return redirect("/profile/{$user->id}/edit");
    }
}
