<div class="side-menu">
    <div class="user-section">
        <div class="aside-title">
            <img class="aside-avatar" src="{{ $user->avatar }}" />
            <p class="aside-name">{{ $user->name }}</p>
        </div>
        <p class="aside-tab">Dashboard</p>
        <div class="user-links">
            <button>Details</button>
            <a href="{{ route('logout') }}">Logout</a>
        </div>
    </div>
    <a class="aside-link" href="{{ route('dashboard') }}">Dashboard</a>
    <a class="aside-link" href="{{ route('accounts') }}">Accounts</a>
</div>
