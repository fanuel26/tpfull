@extends("layouts.base1")

@section('content')
<section class="container">
    <div class="row top">
        <div class="col-md-8 offset-md-2 my-5">
            <h1 class="h11 text-center title text-primary" data-aos="fade-up">
                Inscrivez vous dès maintenant !
            </h1>
        </div>
        <div class="col-md-8 offset-md-2">

            @if ($success)
            <div class="alert alert-success" role="alert">
                <strong>{{ $success }}</strong>
            </div>
            @endif

            @if ($errors->any())
            <div style="color: red;">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ url('save_service') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group my-3">
                            <label>Civilité</label>
                            <select type="text" class="form-control form-control-lg" name="civilité">
                                <option value="Monsieur">Monsieur</option>
                                <option value="Madame">Madame</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-6 my-3">
                        <div class="form-group">
                            <label>Nom & Prénoms</label>
                            <input type="text" name="nom" value="{{ old('nom') }}" class="form-control form-control-lg"
                                placeholder="Votre nom et prénom">
                            @error('nom')
                            <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 my-3">
                        <div class="form-group">
                            <label>Date de naissance</label>
                            <input type="date" name="date" value="{{ old('date') }}"
                                class="form-control form-control-lg">
                            @error('date')
                            <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 my-3">
                        <div class="form-group">
                            <label>N° de téléphone</label>
                            <input type="tel" name="telephone" value="{{ old('telephone') }}"
                                class="form-control form-control-lg" placeholder="Numero de téléphone">
                            @error('telephone')
                            <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 my-3">
                        <div class="form-group">
                            <label>Adresse email</label>
                            <input type="text" name="email" value="{{ old('email') }}"
                                class="form-control form-control-lg" placeholder="Email">
                            @error('email')
                            <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 my-3">
                        <div class="form-group">
                            <label>Secteur d'activité</label>
                            <input type="text" name="secteur_activite" value="{{ old('secteur_activite') }}"
                                class="form-control form-control-lg" placeholder="Votre secteur">

                            @error('secteur_activite')
                            <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 my-3">
                        <div class="form-group">
                            <label>Code postal</label>
                            <input type="text" name="code_postal" value="{{ old('code_postal') }}"
                                class="form-control form-control-lg" placeholder="Votre code postal">

                            @error('code_postal')
                            <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 my-3">
                        <div class="form-group">
                            <label>Ville</label>
                            <input type="text" name="ville" value="{{ old('ville') }}"
                                class="form-control form-control-lg" placeholder="Votre ville">

                            @error('ville')
                            <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 my-3">
                        <div class="form-group">
                            <label>Pays</label>
                            <input type="text" name="pays" value="{{ old('pays') }}"
                                class="form-control form-control-lg" placeholder="Votre pays">

                            @error('pays')
                            <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 my-3">
                        <div class="form-group">
                            <label class="">Commentaire</label>
                            <textarea type="text" name="commentaire" value="{{ old('commentaire') }}"
                                class="form-control form-control-lg" rows="5"
                                placeholder="Votre commentaire"></textarea>

                            @error('commentaire')
                            <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 my-3">
                        <div class="form-check">
                            <label for="certifie_majeur">
                                <input type="checkbox" id="certifie_majeur" name="certifie_majeur" {{
                                    old('certifie_majeur') ? 'checked' : '' }}>
                                Je certifie être majeur.
                            </label>
                            @error('certifie_majeur')
                            <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 my-3 text-right">
                        <button class="btn btn-primary btn-lg" type="submit">Envoyer</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection