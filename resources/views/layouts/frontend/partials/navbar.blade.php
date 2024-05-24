<div class="sticky-nav js-sticky-header">
    <div class="container position-relative">
        <div class="site-navigation text-center">
            <a href="{{route('acceuil')}}" class="logo menu-absolute m-0">Educato<span class="text-primary">.</span></a>

            <ul class="js-clone-nav d-none d-lg-inline-block site-menu">
                <li class="active"><a href="{{route('acceuil')}}">Aceuill</a></li>
                {{-- <li class="has-children">
                    <a href="#">Dropdown</a>
                    <ul class="dropdown">
                        <li><a href="elements.html">Elements</a></li>
                        <li class="has-children">
                            <a href="#">Menu Two</a>
                            <ul class="dropdown">
                                <li><a href="#">Sub Menu One</a></li>
                                <li><a href="#">Sub Menu Two</a></li>
                                <li><a href="#">Sub Menu Three</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Menu Three</a></li>
                    </ul>
                </li>
                <li><a href="staff.html">Our Staff</a></li>
                <li><a href="news.html">News</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="about.html">About</a></li> --}}
                <li><a href="contact.html">Actualité</a></li>
            </ul>

            <a href="{{route('contact')}}" class="btn-book btn btn-secondary btn-sm menu-absolute">Contact</a>

            <a href="#"
                class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light"
                data-toggle="collapse" data-target="#main-navbar">
                <span></span>
            </a>

        </div>
    </div>
</div>