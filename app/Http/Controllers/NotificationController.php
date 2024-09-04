<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNotificationRequest;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
     /**
     * Display a listing of notifications.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $notifications = Notification::with('user')->get();
        return view('notifications.index', compact('notifications'));
    }

     /**
     * Show the form for creating a new notification.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $users = User::all();
        return view('notifications.create', compact('users'));
    }


    /**
     * Store a newly created notification in storage.
     *
     * @param \App\Http\Requests\StoreNotificationRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreNotificationRequest  $request)
    {
        $validated = $request->validated();

        $users = isset($validated['user_id']) ?
        User::where('id', $validated['user_id'])->get() :
        User::all();

        foreach ($users as $user) {
            $user->notifications()->create([
                'type' => $validated['type'],
                'content' => $validated['content'],
                'expiration' => $validated['expiration'] ?? null,
            ]);
        }

        return redirect()->route('notifications.index')->with('success', 'Notification posted');
    }

    /**
     * Mark the specified notification as read.
     *
     * @param \App\Models\Notification $notification
     * @return \Illuminate\Http\RedirectResponse
     */
    public function markAsRead(Notification $notification)
    {
        $notification->update(['is_read' => true]);
        return back();
    }
}
