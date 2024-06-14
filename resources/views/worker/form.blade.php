<div class="space-y-6">
    
    <div>
        <x-input-label for="name" :value="__('Name')"/>
        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $worker?->name)" autocomplete="name" placeholder="Name"/>
        <x-input-error class="mt-2" :messages="$errors->get('name')"/>
    </div>
    <div>
        <x-input-label for="dni" :value="__('Dni')"/>
        <x-text-input id="dni" name="dni" type="text" class="mt-1 block w-full" :value="old('dni', $worker?->dni)" autocomplete="dni" placeholder="Dni"/>
        <x-input-error class="mt-2" :messages="$errors->get('dni')"/>
    </div>
    <div>
        <x-input-label for="charge_name" :value="__('Charge Name')"/>
        <x-text-input id="charge_name" name="charge_name" type="text" class="mt-1 block w-full" :value="old('charge_name', $worker?->charge_name)" autocomplete="charge_name" placeholder="Charge Name"/>
        <x-input-error class="mt-2" :messages="$errors->get('charge_name')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>