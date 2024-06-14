<div class="space-y-6">
    
    <div>
        <x-input-label for="value" :value="__('Value')"/>
        <x-text-input id="value" name="value" type="text" class="mt-1 block w-full" :value="old('value', $labour?->value)" autocomplete="value" placeholder="Value"/>
        <x-input-error class="mt-2" :messages="$errors->get('value')"/>
    </div>
    <div>
        <x-input-label for="tax" :value="__('Tax')"/>
        <x-text-input id="tax" name="tax" type="text" class="mt-1 block w-full" :value="old('tax', $labour?->tax)" autocomplete="tax" placeholder="Tax"/>
        <x-input-error class="mt-2" :messages="$errors->get('tax')"/>
    </div>
    <div>
        <x-input-label for="budjet_id" :value="__('Budjet Id')"/>
        <x-text-input id="budjet_id" name="budjet_id" type="text" class="mt-1 block w-full" :value="old('budjet_id', $labour?->budjet_id)" autocomplete="budjet_id" placeholder="Budjet Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('budjet_id')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>