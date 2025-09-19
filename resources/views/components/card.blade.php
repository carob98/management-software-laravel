<div class="d-flex justify-content-center">
    <div class="col-12">
        <div class="card p-3">
            <div class="card-body py-4 d-flex gap-5">
                <img class="rounded card-img" src="/images/no_img.jpg" alt="Image">
                <div class="d-flex flex-column col-6 ms-2">
                    <div class="d-flex flex-row justify-content-between align-items-center gap-5">
                        <h4 class="mb-3 fw-bold">{{ $product->name }}</h4>
                        <div class="d-flex flex-row gap-2 align-items-baseline">
                            <p class="sub fw-light">Prezzo:</p>
                            <span class="fw-bold text-primary">€ {{ $product->price }}</span>
                        </div>
                    </div>

                    <p class="mb-4 fw-light">{{ $product->description ?? '' }}</p>
                    <div class="d-flex flex-row justify-content-start align-items-baseline gap-1">
                        <p class="sub">Quantità in stock:</p>
                        @if ($product->stock === 0)
                            <span class="fw-bold sub">Prodotto non disponibile</span>
                        @elseif ($product->stock < 5)
                            <span class="fw-bold text-danger">{{ $product->stock }}</span>
                        @elseif ($product->stock <= 20)
                            <span class="fw-bold text-warning">{{ $product->stock }}</span>
                        @else
                            <span class="fw-bold text-success">{{ $product->stock }}</span>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
