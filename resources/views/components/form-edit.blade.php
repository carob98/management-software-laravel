<div class="container my-5 mx-auto">
    @if (session('success'))
        <x-alert color="alert-success">{{ session('success') }}</x-alert>
    @endif

    <x-errors-all></x-errors-all>

    <form action="{{ route('products.update', ['product' => $product]) }}" method="POST" enctype="multipart/form-data"
        class="m-5">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nome prodotto</label>
            <input required type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                placeholder="Prodotto" name="name" value="{{ $product->name }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" id="description"
                placeholder="Descrizione" name="description" value="{{ $product->description }}">
        </div>

        <div class="mb-3">

            <label for="price" class="form-label">Prezzo</label>

            <input required type="number" min="0" step="0.01"
                class="form-control @error('price') is-invalid @enderror" id="price" placeholder="Prezzo"
                name="price" value={{ $product->price }}>

        </div>

        <div class="mb-3">

            <label for="stock" class="form-label">Quantità in Stock</label>

            <input required type="number" min="0" step="1"
                class="form-control @error('stock') is-invalid @enderror" id="stock" placeholder="Quantità"
                name="stock" value={{ $product->stock }}>

        </div>

        <div class="mb-3">

            <img class="mx-3 mb-3" width="100px"
                src="{{ $product->image ? Storage::url($product->image) : '/images/no_img.jpg' }}"
                alt="{{ $product->image ? $product->name : 'Nessuna immagine' }}">
            <label for="image" class="form-label">Immagine del prodotto</label>
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                name="image">

        </div>

        <button type="submit" class="btn nav-btn1 mt-3">Salva modifiche</button>
    </form>
</div>
