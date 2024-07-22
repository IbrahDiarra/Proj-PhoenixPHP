<section>
    <div class="d-sm-flex align-items-center justify-content-between mb-2 pt-3">
        <h1 class="h3 mb-0 text-gray-800" style="font-family: 'Bauhaus 93';color: black"><b>Gestion des Congés</b></h1>
    </div>

    <!-- DataTales Example -->
    <div class="card o-hidden border-0 shadow-lg my-4 txte" style="color: black; text-decoration: solid;" >
        <div class="container-fluid text-center p-2" style="border-top-right-radius: 10px; border-top-left-radius: 10px; font-family: Bauhaus 93; background-color: rgb(5, 141, 159);color: white;">
            <span><b>Liste des Congés</b></span>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead style="color: rgb(3, 106, 72);">
                        <tr>
                            <th>Motif</th>
                            <th>Nombre de Jours</th>
                            <th>Date Debut</th>
                            <th>Date Fin</th>
                            <th>Etat</th>
                            <th>Action</th>   
                        </tr>
                    </thead>
                    
                    <tbody style="color: black;">
                        <tr>
                            <td>Mariage</td>
                            <td>8</td>
                            <td>12/08/2024</td>
                            <td>20/08/2024</td>
                            <td class="text-center" >
                                <span class="badge bg-warning" style="font-size:15px;">En attente</span>
                            </td>
                            <td class="text-center d-flex justify-content-center">
                                <span><img src="../assets/icon1/edit.svg" alt="" style="width:30px; height:30px;cursor: pointer;"></span>
                                <span><img src="../assets/icon1/delete.svg" alt="" style="width:30px; height:30px;cursor: pointer;"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>Ramadan</td>
                            <td>30</td>
                            <td>11/03/2024</td>
                            <td>10/04/2024</td>
                            <td class="text-center">
                                <span class="badge bg-primary " style="font-size:15px;">Accepté</span>
                            </td>
                            <td class="text-center d-flex justify-content-center">
                                <span><img src="../assets/icon1/edit.svg" alt="" style="width:30px; height:30px;cursor: pointer;"></span>
                                <span><img src="../assets/icon1/delete.svg" alt="" style="width:30px; height:30px;cursor: pointer;"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>Voyage</td>
                            <td>10</td>
                            <td>15/05/2024</td>
                            <td>25/05/2024</td>
                            <td class="text-center">
                                <span class="badge bg-danger" style="font-size:15px;">Refusé</span>
                            </td>
                            <td class="text-center d-flex justify-content-center">
                                <span><img src="../assets/icon1/edit.svg" alt="" style="width:30px; height:30px;cursor: pointer;"></span>
                                <span><img src="../assets/icon1/delete.svg" alt="" style="width:30px; height:30px;cursor: pointer;"></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>