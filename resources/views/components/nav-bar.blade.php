<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
          <a class="nav-link active" aria-current="page" href="#"></a>
        </li>
        <li class="nav-item">
        <x-nav-link href="/products" :active="request()->is('products')">Products</x-nav-link>
        </li>

        <li class="nav-item">
        <x-nav-link href="/users" :active="request()->is('users')">Users</x-nav-link>
        </li>
    </div>
  </div>
</nav>