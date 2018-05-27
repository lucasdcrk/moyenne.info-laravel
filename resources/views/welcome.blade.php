@extends('layout')

@section('title', 'Moyenne')

@section('content')
    <section class="hero is-small is-primary is-bold">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Calcul des moyennes
                </h1>
                <h2 class="subtitle">
                    depuis EcoleDirecte
                </h2>
                <a href="{{ url('login/out') }}" class="button is-info">Déconnexion</a>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <h1 class="title">Bonjour, {{ $user->prenom.' '.$user->nom.' ('.$user->classe->libelle.')' }}</h1>
            <h2 class="subtitle">Moyenne générale sur l'année : {{ round($moyenne, 2) }}</h2>
            <table class="table is-fullwidth is-hoverable is-striped">
                <thead>
                    <tr>
                        <th>Matière</th>
                        <th>Coef</th>
                        <th>Moyenne sur l'année</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($matieres as $m)
                    <tr>
                        <th>{{ $m->discipline }}</th>
                        <th>{{ $m->coef }}</th>
                        <th>{{ round($m->moyenne, 2) }}</th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection