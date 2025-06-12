<ul class="metismenu" id="sidenav">


    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class="material-icons-outlined">shopping_bag</i>
            </div>
            <div class="menu-title">Services</div>
        </a>
        <ul>
            <li><a href="{{ route('admin.services.create') }}"><i class="material-icons-outlined">arrow_right</i>Add
                    Service</a>
            </li>
            <li><a href="{{ route('admin.services.index') }}"><i
                        class="material-icons-outlined">arrow_right</i>Services</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class="material-icons-outlined">shopping_bag</i>
            </div>
            <div class="menu-title">Online Stores</div>
        </a>
        <ul>
            <li><a href="{{ route('admin.online-stores.create') }}"><i class="material-icons-outlined">arrow_right</i>Add
                    Store</a>
            </li>
            <li><a href="{{ route('admin.online-stores.index') }}"><i
                        class="material-icons-outlined">arrow_right</i>Stores</a>
            </li>
        </ul>
    </li>
    </li>
    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class="material-icons-outlined">shopping_bag</i>
            </div>
            <div class="menu-title">Locations</div>
        </a>
        <ul>
            <li><a href="{{ route('admin.locations.create') }}"><i class="material-icons-outlined">arrow_right</i>Add
                    Location</a>
            </li>
            <li><a href="{{ route('admin.locations.index') }}"><i
                        class="material-icons-outlined">arrow_right</i>Locations</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class="material-icons-outlined">shopping_bag</i>
            </div>
            <div class="menu-title">Testimonials</div>
        </a>
        <ul>
            <li><a href="{{ route('admin.testimonials.create') }}"><i class="material-icons-outlined">arrow_right</i>Add
                    Testimonial</a>
            </li>
            <li><a href="{{ route('admin.testimonials.index') }}"><i
                        class="material-icons-outlined">arrow_right</i>Testimonials</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class="material-icons-outlined">shopping_bag</i>
            </div>
            <div class="menu-title">Pages</div>
        </a>
        <ul>
            <li><a href="{{ route('admin.pages.create') }}"><i class="material-icons-outlined">arrow_right</i>Add
                    Page</a>
            </li>
            <li><a href="{{ route('admin.pages.index') }}"><i
                        class="material-icons-outlined">arrow_right</i>Pages</a>
            </li>
        </ul>
    </li>

    <li>
        <a href="{{ route('admin.settings.index') }}">
            <div class="parent-icon"><i class="material-icons-outlined">support</i>
            </div>
            <div class="menu-title">Settings</div>
        </a>
    </li>

</ul>
