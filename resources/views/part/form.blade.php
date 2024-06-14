<div class="space-y-6">
    
    <div>
        <x-input-label for="categorie" :value="__('Categorie')"/>
        <x-text-input id="categorie" name="categorie" type="text" class="mt-1 block w-full" :value="old('categorie', $part?->categorie)" autocomplete="categorie" placeholder="Categorie"/>
        <x-input-error class="mt-2" :messages="$errors->get('categorie')"/>
    </div>
    <div>
        <x-input-label for="code" :value="__('Code')"/>
        <x-text-input id="code" name="code" type="text" class="mt-1 block w-full" :value="old('code', $part?->code)" autocomplete="code" placeholder="Code"/>
        <x-input-error class="mt-2" :messages="$errors->get('code')"/>
    </div>
    <div>
        <x-input-label for="mark" :value="__('Mark')"/>
        <x-text-input id="mark" name="mark" type="text" class="mt-1 block w-full" :value="old('mark', $part?->mark)" autocomplete="mark" placeholder="Mark"/>
        <x-input-error class="mt-2" :messages="$errors->get('mark')"/>
    </div>
    <div>
        <x-input-label for="price" :value="__('Price')"/>
        <x-text-input id="price" name="price" type="text" class="mt-1 block w-full" :value="old('price', $part?->price)" autocomplete="price" placeholder="Price"/>
        <x-input-error class="mt-2" :messages="$errors->get('price')"/>
    </div>
    <div>
        <x-input-label for="features" :value="__('Features')"/>
        <x-text-input id="features" name="features" type="text" class="mt-1 block w-full" :value="old('features', $part?->features)" autocomplete="features" placeholder="Features"/>
        <x-input-error class="mt-2" :messages="$errors->get('features')"/>
    </div>
    <div>
        <x-input-label for="provider" :value="__('Provider')"/>
        <x-text-input id="provider" name="provider" type="text" class="mt-1 block w-full" :value="old('provider', $part?->provider)" autocomplete="provider" placeholder="Provider"/>
        <x-input-error class="mt-2" :messages="$errors->get('provider')"/>
    </div>
    <div>
        <x-input-label for="date_init" :value="__('Date Init')"/>
        <x-text-input id="date_init" name="date_init" type="text" class="mt-1 block w-full" :value="old('date_init', $part?->date_init)" autocomplete="date_init" placeholder="Date Init"/>
        <x-input-error class="mt-2" :messages="$errors->get('date_init')"/>
    </div>
    <div>
        <x-input-label for="date_out" :value="__('Date Out')"/>
        <x-text-input id="date_out" name="date_out" type="text" class="mt-1 block w-full" :value="old('date_out', $part?->date_out)" autocomplete="date_out" placeholder="Date Out"/>
        <x-input-error class="mt-2" :messages="$errors->get('date_out')"/>
    </div>
    <div>
        <x-input-label for="quantity" :value="__('Quantity')"/>
        <x-text-input id="quantity" name="quantity" type="text" class="mt-1 block w-full" :value="old('quantity', $part?->quantity)" autocomplete="quantity" placeholder="Quantity"/>
        <x-input-error class="mt-2" :messages="$errors->get('quantity')"/>
    </div>
    <div>
        <x-input-label for="costunit" :value="__('Costunit')"/>
        <x-text-input id="costunit" name="costunit" type="text" class="mt-1 block w-full" :value="old('costunit', $part?->costunit)" autocomplete="costunit" placeholder="Costunit"/>
        <x-input-error class="mt-2" :messages="$errors->get('costunit')"/>
    </div>
    <div>
        <x-input-label for="saleprice" :value="__('Saleprice')"/>
        <x-text-input id="saleprice" name="saleprice" type="text" class="mt-1 block w-full" :value="old('saleprice', $part?->saleprice)" autocomplete="saleprice" placeholder="Saleprice"/>
        <x-input-error class="mt-2" :messages="$errors->get('saleprice')"/>
    </div>
    <div>
        <x-input-label for="tax" :value="__('Tax')"/>
        <x-text-input id="tax" name="tax" type="text" class="mt-1 block w-full" :value="old('tax', $part?->tax)" autocomplete="tax" placeholder="Tax"/>
        <x-input-error class="mt-2" :messages="$errors->get('tax')"/>
    </div>
    <div>
        <x-input-label for="gain" :value="__('Gain')"/>
        <x-text-input id="gain" name="gain" type="text" class="mt-1 block w-full" :value="old('gain', $part?->gain)" autocomplete="gain" placeholder="Gain"/>
        <x-input-error class="mt-2" :messages="$errors->get('gain')"/>
    </div>
    <div>
        <x-input-label for="inflation" :value="__('Inflation')"/>
        <x-text-input id="inflation" name="inflation" type="text" class="mt-1 block w-full" :value="old('inflation', $part?->inflation)" autocomplete="inflation" placeholder="Inflation"/>
        <x-input-error class="mt-2" :messages="$errors->get('inflation')"/>
    </div>
    <div>
        <x-input-label for="typepurchase" :value="__('Typepurchase')"/>
        <x-text-input id="typepurchase" name="typepurchase" type="text" class="mt-1 block w-full" :value="old('typepurchase', $part?->typepurchase)" autocomplete="typepurchase" placeholder="Typepurchase"/>
        <x-input-error class="mt-2" :messages="$errors->get('typepurchase')"/>
    </div>
    <div>
        <x-input-label for="budjet_id" :value="__('Budjet Id')"/>
        <x-text-input id="budjet_id" name="budjet_id" type="text" class="mt-1 block w-full" :value="old('budjet_id', $part?->budjet_id)" autocomplete="budjet_id" placeholder="Budjet Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('budjet_id')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>