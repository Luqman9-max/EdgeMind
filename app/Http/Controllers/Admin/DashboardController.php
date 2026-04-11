<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Admin;
use App\Models\Lead;
use App\Models\Subscriber;
use App\Models\ContactMessage;
use App\Models\ActivityLog;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_books' => Book::count(),
            'featured_books' => Book::where('is_featured', true)->count(),
            'published_books' => Book::where('is_published', true)->count(),
            'admins_count' => Admin::count(),
            'total_leads' => Lead::count(),
            'total_subscribers' => Subscriber::count(),
            'unread_messages' => ContactMessage::where('is_read', false)->count(),
            'recent_books' => Book::latest()->take(5)->get(),
            'recent_logs' => ActivityLog::with('admin')->latest()->take(10)->get(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}
