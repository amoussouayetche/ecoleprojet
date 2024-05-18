<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            
        </div>
        <div class="sidebar-brand-text mx-3">EDUCATO</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Administration
    </div>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsea"
            aria-expanded="true" aria-controls="collapsea">
            <i class="fas fa-fw fa-cog"></i>
            <span>Ecole</span>
        </a>
        <div id="collapsea" class="collapse" aria-labelledby="headinga" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header"></h6>
                <a class="collapse-item" href="{{route('add_ecole_admin')}}">Ajouter / Liste</a>
            </div>
        </div>
    </li>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Eleve</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header"></h6>
                <a class="collapse-item" href="{{route('add_eleve_admin')}}">Ajouter / Liste</a>
            </div>
        </div>
    </li>
  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseB"
        aria-expanded="true" aria-controls="collapseB">
        <i class="fas fa-fw fa-cog"></i>
        <span>Annee Scollaire</span>
    </a>
    <div id="collapseB" class="collapse" aria-labelledby="headinga" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"></h6>
            <a class="collapse-item" href="{{route('add_annee_admin')}}">Ajouter / Liste</a>
        </div>
    </div>
</li>
<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseC"
        aria-expanded="true" aria-controls="collapseC">
        <i class="fas fa-fw fa-cog"></i>
        <span>Responsable Classes</span>
    </a>
    <div id="collapseC" class="collapse" aria-labelledby="headinga" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"></h6>
            <a class="collapse-item" href="{{route('add_responsable_admin')}}">Ajouter / Liste</a>
        </div>
    </div>
</li>
    
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

</ul>
<!-- End of Sidebar -->