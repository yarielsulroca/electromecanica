<div class="space-y-6">
    
    <div>
        <x-input-label for="worder_id" :value="__('Worder Id')"/>
        <x-text-input id="worder_id" name="worder_id" type="text" class="mt-1 block w-full" :value="old('worder_id', $typeorder?->worder_id)" autocomplete="worder_id" placeholder="Worder Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('worder_id')"/>
    </div>
    <div>
        <x-input-label for="problems" :value="__('Problems')"/>
        <x-text-input id="problems" name="problems" type="text" class="mt-1 block w-full" :value="old('problems', $typeorder?->problems)" autocomplete="problems" placeholder="Problems"/>
        <x-input-error class="mt-2" :messages="$errors->get('problems')"/>
    </div>
    <div>
        <x-input-label for="date_init" :value="__('Date Init')"/>
        <x-text-input id="date_init" name="date_init" type="text" class="mt-1 block w-full" :value="old('date_init', $typeorder?->date_init)" autocomplete="date_init" placeholder="Date Init"/>
        <x-input-error class="mt-2" :messages="$errors->get('date_init')"/>
    </div>
    <div>
        <x-input-label for="date_end" :value="__('Date End')"/>
        <x-text-input id="date_end" name="date_end" type="text" class="mt-1 block w-full" :value="old('date_end', $typeorder?->date_end)" autocomplete="date_end" placeholder="Date End"/>
        <x-input-error class="mt-2" :messages="$errors->get('date_end')"/>
    </div>
    <div>
        <x-input-label for="condition" :value="__('Condition')"/>
        <x-text-input id="condition" name="condition" type="text" class="mt-1 block w-full" :value="old('condition', $typeorder?->condition)" autocomplete="condition" placeholder="Condition"/>
        <x-input-error class="mt-2" :messages="$errors->get('condition')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>