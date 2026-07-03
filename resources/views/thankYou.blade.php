<x-layout>

    <div class="container d-flex flex-column justify-content-center align-items-center">


        <div class="row justify-content-center align-items-center mb-5">
            <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                    <h2 class="display-5 fw-bold text-uppercase text-dbl text-l-bord">Prodotto aggiunto con successo!</h2>
                    <h4 class="display-6 fw-bold text-uppercase mt-3">Scegli cosa fare</h4>
            </div>
        </div>

        <div class="row justify-content-center align-items-center mt-3">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <div class="d-grid gap-2 col-6 mx-auto justify-content-center align-items-center">
                    <a href="{{ route('addProduct') }}">
                        <button class="btn btn-home mb-5" type="button">Aggiungi prodotti</button>
                    </a>
                    <a href="{{ route('showProducts') }}">
                        <button class="btn btn-home" type="button">Visualizza prodotti</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

</x-layout>