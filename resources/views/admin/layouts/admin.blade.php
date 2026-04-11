<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin — Edge Mind')</title>
    <meta name="robots" content="noindex, nofollow">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="admin-layout">
        {{-- Sidebar --}}
        <aside class="admin-sidebar">
            <div class="sidebar-logo">Edge<span>Mind</span></div>

            <div class="sidebar-section">Main</div>
            <a href="{{ route('admin.dashboard') }}" class="sidebar-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                📊 Dashboard
            </a>

            <div class="sidebar-section">Content</div>
            <a href="{{ route('admin.books.index') }}" class="sidebar-link {{ request()->routeIs('admin.books.*') ? 'active' : '' }}">
                📚 Books
            </a>

            <div class="sidebar-section">Data</div>
            <a href="{{ route('admin.leads.index') }}" class="sidebar-link {{ request()->routeIs('admin.leads.*') ? 'active' : '' }}">
                📧 Leads
            </a>
            <a href="{{ route('admin.messages.index') }}" class="sidebar-link {{ request()->routeIs('admin.messages.*') ? 'active' : '' }}">
                💬 Messages
                @php $unreadCount = \App\Models\ContactMessage::where('is_read', false)->count(); @endphp
                @if($unreadCount > 0)
                    <span class="sidebar-badge">{{ $unreadCount }}</span>
                @endif
            </a>

            <div class="sidebar-section">System</div>
            <a href="{{ route('admin.admins.index') }}" class="sidebar-link {{ request()->routeIs('admin.admins.*') ? 'active' : '' }}">
                👤 Admins
            </a>
            <a href="{{ route('admin.activity-logs.index') }}" class="sidebar-link {{ request()->routeIs('admin.activity-logs.*') ? 'active' : '' }}">
                📋 Activity Logs
            </a>
            <a href="{{ route('admin.settings.index') }}" class="sidebar-link {{ request()->routeIs('admin.settings.*') ? 'active' : '' }}">
                ⚙️ Settings
            </a>

            <div style="padding: 1.5rem; margin-top: 2rem; border-top: 1px solid var(--em-steel);">
                <div style="font-size: 0.8rem; color: var(--em-silver); margin-bottom: 0.5rem;">
                    {{ Auth::guard('admin')->user()->name }}
                </div>
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-ghost btn-sm" style="padding: 0; color: var(--em-slate);">Logout</button>
                </form>
            </div>
        </aside>

        {{-- Main Content --}}
        <main class="admin-content">
            {{-- Alerts --}}
            @if(session('success'))
                <div class="admin-alert admin-alert-success">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="admin-alert admin-alert-error">{{ session('error') }}</div>
            @endif
            @if(session('delete'))
                <div class="admin-alert admin-alert-delete">{{ session('delete') }}</div>
            @endif

            @yield('content')
        </main>
    </div>
</body>
</html>
