<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\User;
use App\Rules\ValidPhoneNumber;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of users with unread notifications count.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $users = User::withCount(['notifications' => function ($query) {
            $query->where('is_read', false);
        }])->get();

        return view('users.index', compact('users'));
    }

    /**
     * Impersonate a user by ID and display their unread notifications.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function impersonate($id)
    {
        $user = User::findOrFail($id);
        $notifications = $user->notifications()->where('is_read', false)->get();

        return view('users.impersonate', compact('user', 'notifications'));
    }

    /**
     * Mark a notification as read.
     *
     * @param \App\Models\Notification $notification
     * @return \Illuminate\Http\RedirectResponse
     */
    public function markAsRead(Notification $notification)
    {
        $notification->update(['is_read' => true]);

        return redirect()->back();
    }

    /**
     * Show the form for editing a user's settings.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\View\View
     */
    public function edit(User $user)
    {
        return view('users.settings', compact('user'));
    }

    /**
     * Update the specified user's settings in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'email' => 'required|email',
            'phone' => ['nullable', new ValidPhoneNumber],
        ]);

        $notificationSwitch = $request->has('notification_switch');
        $user = User::find($user->id);

        if ($user) {
            $user->update([
                'email' => $request->email,
                'phone' => $request->phone,
                'notification_switch' => $notificationSwitch,
            ]);

            return redirect()->route('users.index')->with('success', 'Settings updated successfully.');
        } else {

            return redirect()->back()->with('error', 'User not found.');
        }
    }
}
