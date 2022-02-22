@extends("../layout/layout")
@section("content")
    <div class="container">
        
        <form action="/clients" method="post" class="col-lg-8 offset-lg-2 mt-5" >
            @csrf
            <h1 class="mb-5 text-center">Ajouter un Nouveau Client</h1>
            <div class="form-group">
                <input name="name" placeholder="Entrer votre nom" type="text" class="form-control @error("name") is-invalid @enderror">
                @error("name")
                <div class="invalid-feedback">
                    {{$errors->first("name")}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <input name="email" placeholder="Entrer votre Email" type="text" class="form-control @error("email") is-invalid @enderror">
                @error("email")
                <div class="invalid-feedback">
                    {{$errors->first("email")}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <select name="entreprise_id" id="entreprise_id" class="form-control">
                    <option value="">Selectionner votre Entreprise</option>
                    @foreach($entreprises as $entreprise)
                        <option value="{{$entreprise->id}}">{{$entreprise->name}}</option>
                    @endforeach
                </select>
                @error("entreprise_id")
                    <div class="invalid-feedback">
                        {{$errors->first("entreprise_id")}}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success form-control">Enregistrer</button>
            <a href="/clients" class="btn btn-secondary mt-5">Clients</a>
        </form>
    </div>
@endsection