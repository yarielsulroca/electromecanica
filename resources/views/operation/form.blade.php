<div class="space-y-6">
    
    <div>
        <x-input-label for="description" :value="__('Description')"/>
        <x-text-input id="description" name="description" type="text" class="mt-1 block w-full" :value="old('description', $operation?->description)" autocomplete="description" placeholder="Description"/>
        <x-input-error class="mt-2" :messages="$errors->get('description')"/>
    </div>
    <div>
        <x-input-label for="name" :value="__('Name')"/>
        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $operation?->name)" autocomplete="name" placeholder="Name"/>
        <x-input-error class="mt-2" :messages="$errors->get('name')"/>
    </div>
    <div>
        <x-input-label for="about" :value="__('About')"/>
        <x-text-input id="about" name="about" type="text" class="mt-1 block w-full" :value="old('about', $operation?->about)" autocomplete="about" placeholder="About"/>
        <x-input-error class="mt-2" :messages="$errors->get('about')"/>
    </div>
    <div>
        <x-input-label for="date_int" :value="__('Date Int')"/>
        <x-text-input id="date_int" name="date_int" type="text" class="mt-1 block w-full" :value="old('date_int', $operation?->date_int)" autocomplete="date_int" placeholder="Date Int"/>
        <x-input-error class="mt-2" :messages="$errors->get('date_int')"/>
    </div>
    <div>
        <x-input-label for="date_out" :value="__('Date Out')"/>
        <x-text-input id="date_out" name="date_out" type="text" class="mt-1 block w-full" :value="old('date_out', $operation?->date_out)" autocomplete="date_out" placeholder="Date Out"/>
        <x-input-error class="mt-2" :messages="$errors->get('date_out')"/>
    </div>
    <div>
        <x-input-label for="worker_id" :value="__('Worker Id')"/>
        <x-text-input id="worker_id" name="worker_id" type="text" class="mt-1 block w-full" :value="old('worker_id', $operation?->worker_id)" autocomplete="worker_id" placeholder="Worker Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('worker_id')"/>
    </div>
    <div>
        <x-input-label for="labour_id" :value="__('Labour Id')"/>
        <x-text-input id="labour_id" name="labour_id" type="text" class="mt-1 block w-full" :value="old('labour_id', $operation?->labour_id)" autocomplete="labour_id" placeholder="Labour Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('labour_id')"/>
    </div>
    <div>
        <x-input-label for="componente_id" :value="__('Componente Id')"/>
        <x-text-input id="componente_id" name="componente_id" type="text" class="mt-1 block w-full" :value="old('componente_id', $operation?->componente_id)" autocomplete="componente_id" placeholder="Componente Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('componente_id')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>