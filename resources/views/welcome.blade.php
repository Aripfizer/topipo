@extends("layout/layout")
@section("content")
<div class="container">

        <form action="/entreprises" method="post" class="col-lg-8 offset-lg-2 mt-5" >
            @csrf
            <h1 class="mb-5 text-center">Ajouter une Nouvelle Entreprise</h1>
            <div class="form-group">
                <input name="name" placeholder="Entrer votre nom" type="text" class="form-control @error("name") is-invalid @enderror">
                @error("name")
                <div class="invalid-feedback">
                    {{$errors->first("name")}}
                </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success form-control">Enregistrer</button>
            <a href="/clients" class="btn btn-secondary mt-5">Clients</a>
        </form>
    </div>
@endsection
