<x-layout>
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between my-3">
                <h3 class="fw-bold fs-4">Prodotti</h3>
                <a class="btn btn-add" href={{ route('products.create') }}>
                    <i class="bx bx-plus"></i>
                    Aggiungi prodotto
                </a>
            </div>

            <div class="table-responsive">
                <table class="table" id="prod-table">
                    <thead>
                        <tr class="highlight">
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Descrizione</th>
                            <th scope="col">Prezzo</th>
                            <th scope="col">Quantità</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <th scope="row">{{ $product->id }}</th>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->stock }}</td>
                                <td>
                                    <a href="{{ route('products.show', ['product' => $product]) }}"
                                        class="edit text-secondary">
                                        <i class="bx bx-search"></i>
                                        Mostra
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('products.edit', ['product' => $product]) }}"
                                        class="edit text-success">
                                        <i class="bx bx-pencil"></i>
                                        Modifica
                                    </a>
                                </td>
                                <td>
                                    <a href="#" class="edit text-danger" data-bs-toggle="modal"
                                        data-bs-target="#product-{{ $product->id }}">
                                        <i class="bx bx-trash"></i>
                                        Elimina
                                    </a>

                                    <div class="modal fade" id="product-{{ $product->id }}" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="product-{{ $product->id }}">
                                                        Sei sicuro di voler eliminare il prodotto:
                                                        {{ $product->name }}?
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Attenzione: L'operazione non é reversibile.
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Annulla</button>
                                                    <form
                                                        action="{{ route('products.destroy', ['product' => $product]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Elimina</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>
