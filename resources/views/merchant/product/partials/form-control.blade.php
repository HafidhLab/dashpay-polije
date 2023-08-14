<div class="row">
    <x-forms.input
        name="code_product"
        label="Kode Barang"
        placeholder="Kode Barang"
        type="text"
        required
        :value="old('code_product') ?? $product->code_product"
        />
</div>
<div class="row align-items-center">
    <x-forms.input
        name="name"
        label="Nama Barang"
        placeholder="Nama Barang"
        type="text"
        required
        :value="old('name') ?? $product->name"
        />
    <x-forms.input
        name="price"
        label="Barang satuan"
        placeholder="Barang Satuan"
        type="number"
        required
        :value="old('price') ?? $product->price"
        />
</div>
<div class="mt-3">
    <button class="btn btn-gray-800 mt-2 animate-up-2" type="submit">{{ $btn ?? 'Ubah' }}</button>
</div>