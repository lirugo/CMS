<div class="side-menu">
    <aside class="menu m-t-30 m-l-10">

        <p class="menu-label">General</p>
        <ul class="menu-list">
            <li><a href="{{url('/manage')}}">Manage</a></li>
        </ul>

        <p class="menu-label">Content</p>
        <ul class="menu-list">
            <li><a href="{{route('posts.index')}}">Posts</a></li>
        </ul>

        <p class="menu-label">Administration</p>
        <ul class="menu-list">
            <li><a href="{{route('users.index')}}">Manage Users</a></li>
            <li><a href="{{route('permissions.index')}}">Roles &amp; Permission</a>
                <ul>
                    <li><a href="{{route('roles.index')}}">Roles</a></li>
                    <li><a href="{{route('permissions.index')}}">Permissions</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>