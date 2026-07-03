{{-- @dd($products->all()); --}}

<x-layout>
    <div class="row justify-content-center align-items-center my-5">
        <div class="col-12 d-flex justify-content-center align-items-center">
            <h2 class="display-5 fw-bold text-uppercase text-dbl text-l-bord">I tuoi prodotti</h2>
        </div>
    </div>
    
    @if ($products->isEmpty())
    <div class="row justify-content-center align-items-center mb-5">
        <div class="col-12 d-flex flex-column justify-content-center align-items-center">
            <h4 class="display-6 fw-bold text-uppercase mt-3">Non ci sono prodotti presenti!</h4>
            <h4 class="display-6 fw-bold text-uppercase mt-2">Inizia ad aggiungerli!</h4>
        </div>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto justify-content-center align-items-center">
        <a href="{{ route('addProduct') }}">
            <button class="btn btn-home mb-5" type="button">Aggiungi prodotti</button>
        </a>
    </div>
    @else
    <div class="row justify-content-center">
        @foreach ($products as $product)            
        <div class="col-12 col-md-4 d-flex justify-content-center align-content-center mb-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title text-bl text-uppercase text-center fs-3 fw-bolder">{{ $product->name }}</h5>
                    <h6 class="card-subtitle mb-2 fw-bold text-center fs-5">{{ $product->price }} €</h6>
                    <div class="descr-custom">
                        <p class="card-text">{{ $product->description }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
    @endif
    
    
    
</x-layout>