<div class="space-y-6">
    
    <div>
        <x-input-label for="description" :value="__('Description')"/>
        <x-text-input id="description" name="description" type="text" class="mt-1 block w-full" :value="old('description', $componente?->description)" autocomplete="description" placeholder="Description"/>
        <x-input-error class="mt-2" :messages="$errors->get('description')"/>
    </div>
    <div>
        <x-input-label for="model" :value="__('Model')"/>
        <x-text-input id="model" name="model" type="text" class="mt-1 block w-full" :value="old('model', $componente?->model)" autocomplete="model" placeholder="Model"/>
        <x-input-error class="mt-2" :messages="$errors->get('model')"/>
    </div>
    <div>
        <x-input-label for="problem" :value="__('Problem')"/>
        <x-text-input id="problem" name="problem" type="text" class="mt-1 block w-full" :value="old('problem', $componente?->problem)" autocomplete="problem" placeholder="Problem"/>
        <x-input-error class="mt-2" :messages="$errors->get('problem')"/>
    </div>
    <div>
        <x-input-label for="brand" :value="__('Brand')"/>
        <x-text-input id="brand" name="brand" type="text" class="mt-1 block w-full" :value="old('brand', $componente?->brand)" autocomplete="brand" placeholder="Brand"/>
        <x-input-error class="mt-2" :messages="$errors->get('brand')"/>
    </div>
    <div>
        <x-input-label for="text" :value="__('Text')"/>
        <x-text-input id="text" name="text" type="text" class="mt-1 block w-full" :value="old('text', $componente?->text)" autocomplete="text" placeholder="Text"/>
        <x-input-error class="mt-2" :messages="$errors->get('text')"/>
    </div>
    <div>
        <x-input-label for="name" :value="__('Name')"/>
        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $componente?->name)" autocomplete="name" placeholder="Name"/>
        <x-input-error class="mt-2" :messages="$errors->get('name')"/>
    </div>
    <div>
        <x-input-label for="item_id" :value="__('Item Id')"/>
        <x-text-input id="item_id" name="item_id" type="text" class="mt-1 block w-full" :value="old('item_id', $componente?->item_id)" autocomplete="item_id" placeholder="Item Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('item_id')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>