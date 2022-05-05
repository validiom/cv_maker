@extends('layouts.app')

@section('links')

<link href="{{ asset('issa_dembele_css.css') }}" rel="stylesheet">
@endsection


@section('content')
<p><a href="{{route('portfolio.show','issa_dembele')}}" class="link  btn btn-success"><i class="bx bx-circle"></i> <span>Voir le portfolio détaillé</span></a></p>

<div class="container page">
    <div class="header row d-flex justify-content-between">
        <div class="leftbox col-6">
            <h2 class="name">DEMBELE Inza</h2>
            <p class="name-description">INGENIEUR MARKETING ET COMMUNICATION, BILINGUE</p>
        </div>
        <div class="rightbox d-flex col-6 justify-content-between">
            <div></div>
            <div>
                <img class="image align-self-end" src="{{asset('assets/images/issa_dembele_img.jpg')}}" alt="Photo d'identité">
            </div>
        </div>
    </div>
<br>
    <div class="cv-content row">
        <div class="leftinfo col-4">
            <h6 class="leftarea-title ml-4">PROFIL PERSONNEL</h6>
            <p class="description ml-4">Récemment diplômé au groupe ITA ingénierie SA, je suis à
                la recherche d'une première expériences pour consolider et
                mettre en pratique mes connaissances théoriques. J'aime
                travailler en équipe ,je suis polyvalent et je suis également
                capable d'apprendre et d'appliquer rapidement de nouvelles choses.
            </p>

            <div class="leftinfo-area">
                <div class="ml-3">
                    <h6 class="leftarea-title">HOBBIES</h6>
                    <ul>
                        <li>Cinéma</li>
                        <li>Football</li>
                        <li>Internet</li>
                    </ul>
                    <br>
                    <h6 class="leftarea-title">COORDONÉES</h6>
                    <div class="row">
                        <div class="col-2"><i class="fa-solid fa-360-degrees"></i></div>
                        <div class="col-10">05 45 09 98 88 / 05 65 83 50 82 /  <br>07 08 60 65 28</div>
                    </div>
                    <div class="row">
                        <div class="col-2">Icon</div>
                        <div class="col-10">inzouldem4@gmail.com</div>
                    </div>
                    <div class="row">
                        <div class="col-2">Icon</div>
                        <div class="col-10">Abidjan, Yopougon</div>
                    </div>
                    <br>
                    <h6 class="leftarea-title">COMPÉTENCES ET QUALIFICATIONS</h6>
                    <ul>
                        <li>Elaboration de strategie de communication et Marketing</li>
                        <li>Gestion de la clientèle</li>
                        <li>Management de la force de vente</li>
                        <li>Travailler sur des campagnes de publicité</li>
                        <li>Bonne communication orale et écrite</li>
                    </ul>
                </div>
    
                <p class="text-danger ml-2 font-weight-bold">
                    Permis de conduire A,B,C,D,E
                </p>
            </div>
        </div>
        <div class="rightinfo col-8">
            <h6 class="rightarea-title">FORMATION</h6>
            <p class="rightarea-subtitle">Master Pro 2 option Marketing-Communication-Publicité</p>
            <p class="rightarea-subtitle-deep2">Groupe ITA ingénierie SA | <strong>Depuis décembre 2021</strong></p>
            <ul>
                <li>Management de la force de vente</li>
                <li>Customer relationship management</li>
                <li>Marketing digital et évènementiel</li>
            </ul>
            <p class="rightarea-subtitle">Master pro 1 option Marketing-Communication-Publicité</p>
            <p class="rightarea-subtitle-deep2">Groupe ITA ingénierie SA | <strong>2020-2021</strong></p>
            <ul>
                <li>Marketing industriel</li>
                <li>Marketing stratégique et opérationnel</li>
                <li>Psychologie de la communication</li>
                <li>Droit de la communication</li>
            </ul>
            <p class="rightarea-subtitle">Licence pro en Marketing-Communication-Publicité</p>
            <p class="rightarea-subtitle-deep2">Groupe ITA ingénierie SA | <strong>2019-2020</strong></p>
            <ul>
                <li>Communication hors-media</li>
                <li>Anglais professionnel</li>
                <li>Processus de production dans les media</li>
            </ul>
            <h6 class="rightarea-title">EXPÉRIENCE PROFESSIONNELLE</h6>
            <p class="rightarea-subtitle">X-TIGI MOBILE/ Représentant commerciale | <strong>Mars 2017-Dec 2018</strong></p>
            <ul>
                <li>Gestion du portefeuille client de yopougon</li>
                <li>Prospection de nouveaux clients</li>
                <li>Interprète (français-anglais)</li>
                <li>Gestion des promotrices</li>
            </ul>
            <p class="rightarea-subtitle">CDPA/ CAISSIER | <strong>Depuis Decembre 2018</strong></p>
            <ul>
                <li>Gestion des opérations de caisse</li>
                <li>Préparation et suivi des versements bancaires</li>
                <li>Paiement de salaire aux travailleurs journaliers</li>
            </ul>
            <h6 class="rightarea-title">CERTIFICAT</h6>
            <p class="font-weight-bold color-gray">
                TESOL/TEFL 120 hour certicate / certification internationale
                pour enseigner l'anglais en ligne ou en classe aux personnes
                non natives des pays anglophones
            </p>
            <p class="text-danger">World TESOL Academy</p>
            
        </div>
    </div>
</div>
@endsection