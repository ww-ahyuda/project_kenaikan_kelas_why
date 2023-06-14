 <header class="navbar navbar-expand-md d-print-none">
     <div class="container-xl">
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
             aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
             <a href=".">
                 <img src="{{ asset('assets/static/logo.svg') }}" width="110" height="32" alt="Tabler"
                     class="navbar-brand-image">
             </a>
         </h1>
         <div class="navbar-nav flex-row order-md-last">
             <div class="nav-item dropdown">
                 <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                     aria-label="Open user menu">
                     <span class="avatar avatar-sm"
                         style="background-image: url({{ asset('assets/static/avatars/000m.jpg') }})"></span>
                     <div class="d-none d-xl-block ps-2">
                         <div>Paweł Kuna</div>
                         <div class="mt-1 small text-muted">UI Designer</div>
                     </div>
                 </a>
                 <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                     <a href="./profile.html" class="dropdown-item">Profile</a>
                     <div class="dropdown-divider"></div>
                     <a href="./sign-in.html" class="dropdown-item">Logout</a>
                 </div>
             </div>
         </div>
     </div>
 </header>
 <header class="navbar-expand-md">
     <div class="collapse navbar-collapse" id="navbar-menu">
         <div class="navbar">
             <div class="container-xl">
                 <ul class="navbar-nav">
                     <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                         <a class="nav-link" href="{{ route('dashboard') }}">
                             <span class="nav-link-title">
                                 Home
                             </span>
                         </a>
                     </li>
                     <li class="nav-item dropdown {{ request()->routeIs('perpus.*') ? 'active' : '' }}">
                         <a class="nav-link dropdown-toggle" href="#navbar-help" data-bs-toggle="dropdown"
                             data-bs-auto-close="outside" role="button" aria-expanded="false">
                             <span class="nav-link-title">
                                 Perpustakaan
                             </span>
                         </a>
                         <div class="dropdown-menu">
                             <a class="dropdown-item" href="{{ route('perpus.categories.index') }}" rel="noopener">
                                 Kategori
                             </a>
                             <a class="dropdown-item" href="{{ route('perpus.author') }}">
                                 Autor
                             </a>
                             <a class="dropdown-item" href="{{ route('perpus.borrowings') }}" rel="noopener">
                                 Peminjaman
                             </a>
                         </div>
                     </li>
                 </ul>
             </div>
         </div>
     </div>
 </header>
