<x-layout>
    
    <div class="row w-100 justify-content-center align-items-center my-5">
        <div class="col-12 col-md-8 d-flex justify-content-center align-items-center">
            <form class="box-bg shadow" method="POST" action="{{ route('submit') }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nome prodotto</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <div class="d-flex align-items-center">
                        <input type="text" class="form-control me-2" id="price" name="price" required>
                        <span class="fs-4">€</span>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione prodotto</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control" required></textarea>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btn-form mt-3">Aggiungi prodotto</button>
                </div>
            </form>
        </div>
    </div>
    
</x-layout>