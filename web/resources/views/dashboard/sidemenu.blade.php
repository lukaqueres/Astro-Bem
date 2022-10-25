<div class="side-menu">
    <div class="user-section">
        <div class="aside-title">
            <img class="aside-avatar" src="{{ $user->avatar }}" />
            <p class="aside-name">{{ $user->name }}</p>
        </div>
        <p class="aside-tab">Dashboard</p>
        <div class="user-links">
            <button class="user-button">Details</button>
            <div class="border"></div>
            <a class="user-button" href="{{ route('logout') }}">Logout</a>
        </div>
    </div>
    <a class="aside-link" href="{{ route('dashboard') }}">Dashboard</a>
    <a class="aside-link" href="{{ route('accounts') }}">Accounts</a>
    <a class="aside-link" href="{{ route('articles') }}">Articles</a>
</div>
