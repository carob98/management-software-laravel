<x-layout crud="true">
    <section>
        <h3 class="fw-bold fs-4 mb-3">Prodotto: {{ $product->name }}</h3>
        <h6 class="sub mb-5">Ultimo aggiornamento: {{ $product->updated_at->format('d/m/Y') }} alle ore
            {{ $product->updated_at->format('H:i') }}</h6>
        <x-card :product="$product"></x-card>
    </section>
</x-layout>
