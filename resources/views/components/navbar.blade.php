<nav class="navbar navbar-expand-lg bg-dbl shadow" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('homepage') }}"><img src="favicon.ico" alt="Logo del sito" class="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-md-auto">
        <li class="nav-item ms-4 ms-md-0">
          <a class="nav-link" aria-current="page" href="{{ route('homepage') }}">Home</a>
        </li>
        <li class="nav-item ms-4 me-4">
          <a class="nav-link" href="{{ route('addProduct') }}">Aggiungi Prodotti</a>
        </li>
        <li class="nav-item ms-4 ms-md-0">
          <a class="nav-link" href="{{ route('showProducts') }}">Visualizza Prodotti</a>
        </li>
      </ul>
    </div>
  </div>
</nav>