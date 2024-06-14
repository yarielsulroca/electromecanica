<div class="space-y-6">
    
    <div>
        <x-input-label for="contacto" :value="__('Contacto')"/>
        <x-text-input id="contacto" name="contacto" type="text" class="mt-1 block w-full" :value="old('contacto', $client?->contacto)" autocomplete="contacto" placeholder="Contacto"/>
        <x-input-error class="mt-2" :messages="$errors->get('contacto')"/>
    </div>
    <div>
        <x-input-label for="social" :value="__('Social')"/>
        <x-text-input id="social" name="social" type="text" class="mt-1 block w-full" :value="old('social', $client?->social)" autocomplete="social" placeholder="Social"/>
        <x-input-error class="mt-2" :messages="$errors->get('social')"/>
    </div>
    <div>
        <x-input-label for="direccion" :value="__('Direccion')"/>
        <x-text-input id="direccion" name="direccion" type="text" class="mt-1 block w-full" :value="old('direccion', $client?->direccion)" autocomplete="direccion" placeholder="Direccion"/>
        <x-input-error class="mt-2" :messages="$errors->get('direccion')"/>
    </div>
    <div>
        <x-input-label for="ciudad" :value="__('Ciudad')"/>
        <x-text-input id="ciudad" name="ciudad" type="text" class="mt-1 block w-full" :value="old('ciudad', $client?->ciudad)" autocomplete="ciudad" placeholder="Ciudad"/>
        <x-input-error class="mt-2" :messages="$errors->get('ciudad')"/>
    </div>
    <div>
        <x-input-label for="nombre_cliente" :value="__('Nombre Cliente')"/>
        <x-text-input id="nombre_cliente" name="nombre_cliente" type="text" class="mt-1 block w-full" :value="old('nombre_cliente', $client?->nombre_cliente)" autocomplete="nombre_cliente" placeholder="Nombre Cliente"/>
        <x-input-error class="mt-2" :messages="$errors->get('nombre_cliente')"/>
    </div>
    <div>
        <x-input-label for="cuit" :value="__('Cuit')"/>
        <x-text-input id="cuit" name="cuit" type="text" class="mt-1 block w-full" :value="old('cuit', $client?->cuit)" autocomplete="cuit" placeholder="Cuit"/>
        <x-input-error class="mt-2" :messages="$errors->get('cuit')"/>
    </div>
    <div>
        <x-input-label for="email" :value="__('Email')"/>
        <x-text-input id="email" name="email" type="text" class="mt-1 block w-full" :value="old('email', $client?->email)" autocomplete="email" placeholder="Email"/>
        <x-input-error class="mt-2" :messages="$errors->get('email')"/>
    </div>
    <div>
        <x-input-label for="telefono_cliente" :value="__('Telefono Cliente')"/>
        <x-text-input id="telefono_cliente" name="telefono_cliente" type="text" class="mt-1 block w-full" :value="old('telefono_cliente', $client?->telefono_cliente)" autocomplete="telefono_cliente" placeholder="Telefono Cliente"/>
        <x-input-error class="mt-2" :messages="$errors->get('telefono_cliente')"/>
    </div>
    <div>
        <x-input-label for="telefono_contacto" :value="__('Telefono Contacto')"/>
        <x-text-input id="telefono_contacto" name="telefono_contacto" type="text" class="mt-1 block w-full" :value="old('telefono_contacto', $client?->telefono_contacto)" autocomplete="telefono_contacto" placeholder="Telefono Contacto"/>
        <x-input-error class="mt-2" :messages="$errors->get('telefono_contacto')"/>
    </div>
    <div>
        <x-input-label for="allow" :value="__('Allow')"/>
        <x-text-input id="allow" name="allow" type="text" class="mt-1 block w-full" :value="old('allow', $client?->allow)" autocomplete="allow" placeholder="Allow"/>
        <x-input-error class="mt-2" :messages="$errors->get('allow')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>