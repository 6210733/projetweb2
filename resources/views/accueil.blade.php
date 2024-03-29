<x-layout>


    <div class="acceuil">
        <div class="video">
            <video src="storage/uploads/video.mp4" autoplay muted loop playsinline controls width="250">></video>
            <div class="calltoaction">
                <h2 class="font-lovelo">DU 19 AU 21 JUILLET 2024</h2>
                <a href="{{ route('forfaits.index') }}">
                    <div>
                        <h3 class="font-technorace">Achetez vos billets</h3>
                    </div>
                </a>
            </div>
        </div>



        {{-- Forfaits --}}
        <div class="section-forfaits section">
            <div class="font-lovelo">
                <h2 class="vedettes">Forfaits en vedettes</h2>
                <div class="separation1"></div>

                <div class="cartes cartes-forfaits">

                    <a href="{{ route('reservations.index', ['id_forfait' => 3]) }}">
                        <div>
                            <img src="storage/uploads/MisterTechnofantome.jpg" alt="">
                            <div>
                                <h3>Platine</h3>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('reservations.index', ['id_forfait' => 2]) }}">
                        <div>
                            <img src="storage/uploads/DEEJAY.jpg" alt="">
                            <div>
                                <h3>Or</h3>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('reservations.index', ['id_forfait' => 1]) }}">
                        <div>
                            <img src="storage/uploads/TechnoKnightRebooted.jpg" alt="">
                            <div>
                                <h3>Argent</h3>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="lien">
                    <a href="{{ route('forfaits.index') }}">
                        Voir nos forfaits
                    </a>
                </div>
            </div>
            <hr />
        </div>

        {{-- Activités --}}
        <div class="section-activites section">
            <div class="font-lovelo">
                <h2 class="activites">Nos activités</h2>

                <div class="separation2"></div>

                <div class="cartes cartes-activites">
                    @foreach ($activites->take(4) as $activite)
                        <a href="{{ route('activites.show', ['id' => $activite->id]) }}">
                            <div>
                                <img src="{{ $activite->image }}" alt="">
                                <div>
                                    <h3>
                                        {{ $activite->nom }}
                                    </h3>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>

                <div class="lien">
                    <a href="{{ route('activites.index') }}">
                        Voir toutes nos activités
                    </a>
                </div>
            </div>

        </div>
        <div class="section-actualites section">
            <div class="font-lovelo">
                <h2 class="actualites">Nos actualites</h2>
                <div class="separation3"></div>

                <div class="cartes cartes-actualites">
                    @foreach ($actualites->take(4) as $actualite)
                        <a href="{{ route('actualite.index') }}#{{ $actualite->id }}">
                            <div>
                                <img src="{{ $actualite->image }}" alt="">
                                <div>
                                    <h3>{{ $actualite->titre }}</h3>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>

                <div class="lien">
                    <a href="{{ route('actualite.index') }}">

                        Voir toutes les actualités

                    </a>
                </div>
            </div>

        </div>
        <div class="section-accessibilites section">

            <h2 class="font-lovelo">Accessibilités</h2>

            <div class="separation"></div>

            <div class="tags">

                <img src="{{ asset('image/Accessibilite/ATM.png') }}" alt="" width="200px">
                <img src="{{ asset('image/Accessibilite/Banc de pique-nique.png') }}" alt="" width="230px">
                <img src="{{ asset('image/Accessibilite/Guichet de billetterie.png') }}" alt="" width="200px">
                <img src="{{ asset('image/Accessibilite/Magasinage.png') }}" alt="" width="200px">

            </div>
        </div>
    </div>
    <canvas id="etoilesCanvas"></canvas>

</x-layout>
