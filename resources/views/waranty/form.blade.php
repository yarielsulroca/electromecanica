<div class="space-y-6">
    
    <div>
        <x-input-label for="description_items" :value="__('Description Items')"/>
        <x-text-input id="description_items" name="description_items" type="text" class="mt-1 block w-full" :value="old('description_items', $waranty?->description_items)" autocomplete="description_items" placeholder="Description Items"/>
        <x-input-error class="mt-2" :messages="$errors->get('description_items')"/>
    </div>
    <div>
        <x-input-label for="client_id" :value="__('Client Id')"/>
        <x-text-input id="client_id" name="client_id" type="text" class="mt-1 block w-full" :value="old('client_id', $waranty?->client_id)" autocomplete="client_id" placeholder="Client Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('client_id')"/>
    </div>
    <div>
        <x-input-label for="derechos" :value="__('Derechos')"/>
        <x-text-input id="derechos" name="derechos" type="text" class="mt-1 block w-full" :value="old('derechos', $waranty?->derechos)" autocomplete="derechos" placeholder="Derechos"/>
        <x-input-error class="mt-2" :messages="$errors->get('derechos')"/>
    </div>
    <div>
        <x-input-label for="date_end" :value="__('Date End')"/>
        <x-text-input id="date_end" name="date_end" type="text" class="mt-1 block w-full" :value="old('date_end', $waranty?->date_end)" autocomplete="date_end" placeholder="Date End"/>
        <x-input-error class="mt-2" :messages="$errors->get('date_end')"/>
    </div>
    <div>
        <x-input-label for="vias_reclamacion" :value="__('Vias Reclamacion')"/>
        <x-text-input id="vias_reclamacion" name="vias_reclamacion" type="text" class="mt-1 block w-full" :value="old('vias_reclamacion', $waranty?->vias_reclamacion)" autocomplete="vias_reclamacion" placeholder="Vias Reclamacion"/>
        <x-input-error class="mt-2" :messages="$errors->get('vias_reclamacion')"/>
    </div>
    <div>
        <x-input-label for="worder_id" :value="__('Worder Id')"/>
        <x-text-input id="worder_id" name="worder_id" type="text" class="mt-1 block w-full" :value="old('worder_id', $waranty?->worder_id)" autocomplete="worder_id" placeholder="Worder Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('worder_id')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>