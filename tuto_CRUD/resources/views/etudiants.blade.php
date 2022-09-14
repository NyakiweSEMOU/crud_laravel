@extends("layouts.master")

@section("contenu")
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-2">Liste des etudiants inscrit</h6>

    <div class="d-flex justify-content-end mb-4">

        <a href="#" class="btn btn-primary">Ajouter un nouvel etudiant</a>
    </div>

    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Classe</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>

                    <a href="#" class="btn btn-info">Editer</a>
                    <a href="#" class="btn btn-danger">Supprimer</a>

                </td>

            </tr>

        </tbody>
    </table>

@endsection
