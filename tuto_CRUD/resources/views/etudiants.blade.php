@extends("layouts.master")

@section("contenu")
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-2">Liste des etudiants inscrit</h6>

    <div class="d-flex justify-content-between mb-2">
        <div>
            <a href="{{ route('etudiant.create')}}" class="btn btn-primary ">Ajouter un nouvel etudiant</a>
        </div>

        {{$liste_etudiants-> links()}}

    </div>

    @if(session()->has("successDelete"))
    <div class="alert alert-success">
        <h5>{{session()->get('successDelete')}}</h5>
    </div>
        
    @endif

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
            @foreach ( $liste_etudiants as $liste )

            <tr>
                <th scope="row">{{ $loop->index +1 }}</th>
                <td>{{ $liste->nom }}</td>

                <td>{{ $liste->prenom }}</td>

                <td>{{ $liste->classe_id }}</td>
                {{-- <td>{{ $liste->classe->libelle }}</td> --}}


                <td>

                    <a href="{{ route('etudiant.edit', ['etudiant'=>$liste->id]) }}" class="btn btn-info">Editer</a>
                    <a href="#" class="btn btn-danger" onclick="if(confirm('Vous etes sur le point de suprimer cet etudiant')){document.getElementById('form-{{$liste->id}}').submit()}" >Supprimer</a>

                    <form id="form-{{$liste->id}}" action="{{ route('etudiant.supprimer', ['etudiant'=>$liste->id])}}" method="POST">
                    
                    @csrf
                    <input type="hidden" name="_method" value="delete" />
                    </form>
                </td>

            </tr>
            @endforeach

        </tbody>
    </table>

    @endsection
