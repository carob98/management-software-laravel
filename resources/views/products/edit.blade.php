<x-layout crud="true">
    <h3 class="fw-bold fs-4 text-center">Modifica {{ $product->name }}</h3>
    <x-form-edit :product="$product"></x-form-edit>
</x-layout>
