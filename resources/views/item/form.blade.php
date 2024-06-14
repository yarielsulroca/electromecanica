<div class="space-y-6">
    
    <div>
        <x-input-label for="name" :value="__('Name')"/>
        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $item?->name)" autocomplete="name" placeholder="Name"/>
        <x-input-error class="mt-2" :messages="$errors->get('name')"/>
    </div>
    <div>
        <x-input-label for="model" :value="__('Model')"/>
        <x-text-input id="model" name="model" type="text" class="mt-1 block w-full" :value="old('model', $item?->model)" autocomplete="model" placeholder="Model"/>
        <x-input-error class="mt-2" :messages="$errors->get('model')"/>
    </div>
    <div>
        <x-input-label for="casification" :value="__('Casification')"/>
        <x-text-input id="casification" name="casification" type="text" class="mt-1 block w-full" :value="old('casification', $item?->casification)" autocomplete="casification" placeholder="Casification"/>
        <x-input-error class="mt-2" :messages="$errors->get('casification')"/>
    </div>
    <div>
        <x-input-label for="brand" :value="__('Brand')"/>
        <x-text-input id="brand" name="brand" type="text" class="mt-1 block w-full" :value="old('brand', $item?->brand)" autocomplete="brand" placeholder="Brand"/>
        <x-input-error class="mt-2" :messages="$errors->get('brand')"/>
    </div>
    <div>
        <x-input-label for="description" :value="__('Description')"/>
        <x-text-input id="description" name="description" type="text" class="mt-1 block w-full" :value="old('description', $item?->description)" autocomplete="description" placeholder="Description"/>
        <x-input-error class="mt-2" :messages="$errors->get('description')"/>
    </div>
    <div>
        <x-input-label for="about" :value="__('About')"/>
        <x-text-input id="about" name="about" type="text" class="mt-1 block w-full" :value="old('about', $item?->about)" autocomplete="about" placeholder="About"/>
        <x-input-error class="mt-2" :messages="$errors->get('about')"/>
    </div>
    <div>
        <x-input-label for="service_id" :value="__('Service Id')"/>
        <x-text-input id="service_id" name="service_id" type="text" class="mt-1 block w-full" :value="old('service_id', $item?->service_id)" autocomplete="service_id" placeholder="Service Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('service_id')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>