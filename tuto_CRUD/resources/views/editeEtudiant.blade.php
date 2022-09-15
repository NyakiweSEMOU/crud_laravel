@extends("layouts.master")

@section("contenu")
<div class="my-3 p-3 bg-body rounded shadow-sm ">
    <h6 class="border-bottom pb-2 mb-2">Ajouter d'un etudiant</h6>

    <div class="w-0 mt-2">
        {{--
        @if(session()->has('success'))
        <div class="alert alert-success">
            <h5>{{session()->get('success')}}</h5>
    </div>

    @endif --}}


    @if($errors -> any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach

        </ul>
    </div>
    @endif

    <form class="w-0" method="post" action="{{ route('etudiant.update', ['etudiant'=>$etudiant->id]) }}">

        @csrf
        {{-- // securiser l'envoi des donnees --}}

            <input type="hidden" name="_method" value="put">

        <div class="form-group">
            <label for="exampleInputEmail1">Nom</label>
            <input type="text" class="form-control" name="nom" value="{{$etudiant->nom}}">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Prenom</label>
            <input type="text" class="form-control" name="prenom" value="{{$etudiant->prenom}}">
        </div>

        <div class="form-group mb-3">
            <label for="exampleInputPassword1">Classe</label>
            <select class="form-select" name="classe_id">
                <option value=""></option>
                @foreach ($classes as $classe )

                    @if($classe->id == $etudiant->id)
                        <option value="{{$classe->id}}" selected>{{$classe->libelle}}</option>

                    @else
                        <option value="{{$classe->id}}" >{{$classe->libelle}}</option>

                    @endif
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>
        <a href="{{ route('etudiant')}}" class="btn btn-danger">Annuler</a>

    </form>

</div>

</div>

@endsection
