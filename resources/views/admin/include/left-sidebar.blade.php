<aside class="sidebar-wrapper">
    <div class="iconmenu">
        <div class="nav-toggle-box">
            <div class="nav-toggle-icon"><i class="bi bi-list"></i></div>
        </div>
        <ul class="nav nav-pills flex-column">
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-dashboards" type="button">
                    <i class="bi bi-house-door-fill"></i>
                </button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Logout">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="nav-link" type="submit">
                        <i class="bi bi-box-arrow-right"></i>
                    </button>
                </form>
            </li>
            <!-- Additional Icons can go here if needed -->
        </ul>
    </div>
    <div class="textmenu">
        <div class="brand-logo">
            <a class="nav-link" href="{{route('dashboard')}}">
                <h5>ZenBlog</h5>
            </a>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade" id="pills-dashboards">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Dashboard</h5>
                        </div>
                        <small class="mb-0"></small>
                    </div>
                    <a href="{{route('category')}}" class="list-group-item"><i class="bi bi-envelope"></i>Category</a>
                    <a href="{{route('author')}}" class="list-group-item"><i class="bi bi-chat-left-text"></i>Author</a>
                    <a href="{{route('add.blog')}}" class="list-group-item"><i class="bi bi-envelope"></i>Add Blog</a>
                    <a href="{{route('manage.blog')}}" class="list-group-item"><i class="bi bi-chat-left-text"></i>Manage Blog</a>
                </div>
            </div>
            <!-- <div class="tab-pane fade" id="pills-settings">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Settings</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                   
                </div>
            </div> -->
            <!-- <div class="tab-pane fade" id="pills-blog">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Blog</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
 
                </div>
            </div> -->
        </div>
    </div>
</aside>
