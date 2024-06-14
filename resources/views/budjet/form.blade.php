<div class="space-y-6">
    
    <div>
        <x-input-label for="value" :value="__('Value')"/>
        <x-text-input id="value" name="value" type="text" class="mt-1 block w-full" :value="old('value', $budjet?->value)" autocomplete="value" placeholder="Value"/>
        <x-input-error class="mt-2" :messages="$errors->get('value')"/>
    </div>
    <div>
        <x-input-label for="value_dolar" :value="__('Value Dolar')"/>
        <x-text-input id="value_dolar" name="value_dolar" type="text" class="mt-1 block w-full" :value="old('value_dolar', $budjet?->value_dolar)" autocomplete="value_dolar" placeholder="Value Dolar"/>
        <x-input-error class="mt-2" :messages="$errors->get('value_dolar')"/>
    </div>
    <div>
        <x-input-label for="operation_value" :value="__('Operation Value')"/>
        <x-text-input id="operation_value" name="operation_value" type="text" class="mt-1 block w-full" :value="old('operation_value', $budjet?->operation_value)" autocomplete="operation_value" placeholder="Operation Value"/>
        <x-input-error class="mt-2" :messages="$errors->get('operation_value')"/>
    </div>
    <div>
        <x-input-label for="forma_pago" :value="__('Forma Pago')"/>
        <x-text-input id="forma_pago" name="forma_pago" type="text" class="mt-1 block w-full" :value="old('forma_pago', $budjet?->forma_pago)" autocomplete="forma_pago" placeholder="Forma Pago"/>
        <x-input-error class="mt-2" :messages="$errors->get('forma_pago')"/>
    </div>
    <div>
        <x-input-label for="worder_id" :value="__('Worder Id')"/>
        <x-text-input id="worder_id" name="worder_id" type="text" class="mt-1 block w-full" :value="old('worder_id', $budjet?->worder_id)" autocomplete="worder_id" placeholder="Worder Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('worder_id')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>