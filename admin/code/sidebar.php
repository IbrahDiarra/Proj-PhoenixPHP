<ul class="navbar-nav t sidebar sidebar-dark accordion mt-5 pt-4" id="accordionSidebar" style="background-color: var(--sidebar)">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="?page=dashboard" style="align-items: center;">
            <img src="../assets/icon/hom.png" alt="" style="width: 30px;height: 26px; padding-right: 5px;">
            <span class="txt">Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Gestion des Employés
    </div>

    <!-- Nav Item - Pages Employé Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEmp"
            aria-expanded="true" aria-controls="collapseTwo">
            <img src="../assets/icon/empl.png" alt="" style="width: 30px;height: 26px; padding-right: 5px;">
            <span class="txt"><b>Employés</b></span>
        </a>
        <div id="collapseEmp" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item txt" href="?page=voiruser">Affichage</a>
                <a class="collapse-item txt" href="?page=adduser">Ajout</a>
            </div>
        </div>
    </li>

    

    <!-- Nav Item - Pages Historiques Infos Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseHisto"
            aria-expanded="true" aria-controls="collapseTwo">
            <img src="../assets/icon/sal.png" alt="" style="width: 30px;height: 26px; padding-right: 5px;">
            <span class="txt"><b>Historiques</b></span>
        </a>
        <div id="collapseHisto" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item txt" href="#">Postes</a>
                <a class="collapse-item txt" href="#">Salaires</a>
            </div>
        </div>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Congés Menu -->
    <li class="nav-item">
        <a class="nav-link" href="?page=voirconge">
            <img src="../assets/icon/briefcase.png" alt="" style="width: 30px;height: 26px; padding-right: 5px;">
            <span class="txt"><b>Congés</b></span></a>
    </li>

    <!-- Nav Item - Pages Contrats Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseContrat"
            aria-expanded="true" aria-controls="collapseTwo">
            <img src="../assets/icon/contra.png" alt="" style="width: 30px;height: 26px; padding-right: 5px;">
            <span class="txt"><b>Contrats</b></span>
        </a>
        <div id="collapseContrat" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item txt" href="?page=voircontrat">Affichage</a>
                <a class="collapse-item txt" href="?page=addcontrat">Ajout</a>
                <a class="collapse-item txt" href="#">Sauvegarde</a>
                <a class="collapse-item txt" href="#">Historiques</a>
            </div>
        </div>
    </li>

     <!-- Nav Item - Pages Presences Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePre"
            aria-expanded="true" aria-controls="collapseTwo">
            <img src="../assets/icon/prese.png" alt="" style="width: 30px;height: 26px; padding-right: 5px;">
            <span class="txt"><b>Presences</b></span>
        </a>
        <div id="collapsePre" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item txt" href="#">Heures de Travail</a>
                <a class="collapse-item txt" href="#">Heures Sup</a>
                <a class="collapse-item txt" href="#">Rapport</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Paramètres Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePara"
            aria-expanded="true" aria-controls="collapseTwo">
            <img src="../assets/icon/param.png" alt="" style="width: 30px;height: 26px; padding-right: 5px;">
            <span class="txt"><b>Paramètres</b></span>
        </a>
        <div id="collapsePara" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item txt" href="#">Utilisateurs</a>
                <a class="collapse-item txt" href="#">Authentification</a>
                <a class="collapse-item txt" href="#">Rôles</a>
                <a class="collapse-item txt" href="#">Protections</a>
            </div>
        </div>
    </li>

   

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>