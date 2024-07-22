<section>
    <div class="d-sm-flex align-items-center justify-content-between mb-2 pt-3">
        <h1 class="h3 mb-0 text-gray-800" style="font-family: 'Bauhaus 93';color: black"><b>Gestion des Employés</b></h1>
    </div>

    <!-- DataTales Example -->
    <div class="card o-hidden border-0 shadow-lg my-4 txte" style="color: black; text-decoration: solid;" >
        <div class="container-fluid text-center p-2" style="border-top-right-radius: 10px; border-top-left-radius: 10px; font-family: Bauhaus 93; background-color: rgb(5, 141, 159);color: white;">
            <span><b>Liste des Employés</b></span>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead style="color: rgb(3, 106, 72);">
                        <tr>
                            <th>Photo</th>
                            <th>Nom Complet</th>
                            <th>Matricule</th>
                            <th>Date Naissance</th>
                            <th>Telephone</th>
                            <th>Adresse</th>
                            <th>Poste Occupé</th>
                            <th>Action</th>   
                        </tr>
                    </thead>
                    
                    <tbody style="color: black;">
                        <tr>
                            <td><img src="../assets/icon/itachi.jpg" style="width:40px; height:40px; border-radius:15px;"></td>
                            <td>ITACHI Uchiha</td>
                            <td>Ph-Intérim-003</td>
                            <td>21/01/1985</td>
                            <td>77 535 64 33</td>
                            <td>Konoha</td>
                            <td>Chef force</td>
                            <td class="text-center d-flex justify-content-center">
                                <span><img src="../assets/icon1/edit.svg" alt="" style="width:30px; height:30px;"></span>
                                <span><img src="../assets/icon1/delete.svg" alt="" style="width:30px; height:30px;"></span>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="../assets/icon/naruto.jpg" style="width:40px; height:40px; border-radius:15px;"></td>
                            <td>NARUTO Uzumaki</td>
                            <td>Ph-Intérim-002</td>
                            <td>21/01/1999</td>
                            <td>77 535 64 33</td>
                            <td>Konoha</td>
                            <td>Hokage</td>
                            <td class="text-center d-flex justify-content-center">
                                <span><img src="../assets/icon1/edit.svg" alt="" style="width:30px; height:30px;"></span>
                                <span><img src="../assets/icon1/delete.svg" alt="" style="width:30px; height:30px;"></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-center mb-1">
                    <a href="?page=adduser">
                    <button class="btn btn1" style="background:rgb(3, 176, 135);color: black;" type="submit">Ajouter un employé</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>