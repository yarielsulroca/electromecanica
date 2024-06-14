<div class="space-y-6">
    
    <div>
        <x-input-label for="user_id" :value="__('User Id')"/>
        <x-text-input id="user_id" name="user_id" type="text" class="mt-1 block w-full" :value="old('user_id', $workorder?->user_id)" autocomplete="user_id" placeholder="User Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('user_id')"/>
    </div>
    <div>
        <x-input-label for="about" :value="__('About')"/>
        <x-text-input id="about" name="about" type="text" class="mt-1 block w-full" :value="old('about', $workorder?->about)" autocomplete="about" placeholder="About"/>
        <x-input-error class="mt-2" :messages="$errors->get('about')"/>
    </div>
    <div>
        <x-input-label for="problems" :value="__('Problems')"/>
        <x-text-input id="problems" name="problems" type="text" class="mt-1 block w-full" :value="old('problems', $workorder?->problems)" autocomplete="problems" placeholder="Problems"/>
        <x-input-error class="mt-2" :messages="$errors->get('problems')"/>
    </div>
    <div>
        <x-input-label for="date_init" :value="__('Date Init')"/>
        <x-text-input id="date_init" name="date_init" type="text" class="mt-1 block w-full" :value="old('date_init', $workorder?->date_init)" autocomplete="date_init" placeholder="Date Init"/>
        <x-input-error class="mt-2" :messages="$errors->get('date_init')"/>
    </div>
    <div>
        <x-input-label for="date_end" :value="__('Date End')"/>
        <x-text-input id="date_end" name="date_end" type="text" class="mt-1 block w-full" :value="old('date_end', $workorder?->date_end)" autocomplete="date_end" placeholder="Date End"/>
        <x-input-error class="mt-2" :messages="$errors->get('date_end')"/>
    </div>
    <div>
        <x-input-label for="client_id" :value="__('Client Id')"/>
        <x-text-input id="client_id" name="client_id" type="text" class="mt-1 block w-full" :value="old('client_id', $workorder?->client_id)" autocomplete="client_id" placeholder="Client Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('client_id')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>