<form action="" class="md:w-1/2 space-y-5" wire:submit.prevent='crearVacante'>
     
     <div>
        <x-input-label for="titulo" :value="__('Titulo Vacante')" />
        <x-text-input 
            id="titulo" 
            class="block mt-1 w-full" 
            type="text" 
            wire:model="titulo" 
            :value="old('titulo')" 
            placeholder="Titulo Vacante"/>

        @error('titulo')
            <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div>

    <div>
        <x-input-label for="salario" :value="__('Salario Mensual')" />
        <select wire:model="salario" id="salario" class="block text-sm text-gray-500 font-bold uppercase mb-2 w-full">
            <option value="">--Seleccione una opción--</option>
            @foreach ($salarios as $salario)
                <option value="{{ $salario->id }}">{{ $salario->salario }}</option>
            @endforeach
        </select>

        @error('salario')
        <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div>

    <div>
        <x-input-label for="categoria" :value="__('Categoría')" />
        <select wire:model="categoria" id="categoria" class="block text-sm text-gray-500 font-bold uppercase mb-2 w-full">
            <option value="">--Seleccione una opción--</option>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                @endforeach
        </select>
        
        @error('categoria')
        <livewire:mostrar-alerta :message="$message"/>
        @enderror

    </div>

    <div>
        <x-input-label for="empresa" :value="__('Empresa')" />
        <x-text-input 
            id="empresa" 
            class="block mt-1 w-full" 
            type="text" 
            wire:model="empresa" 
            :value="old('empresa')" 
            placeholder="Empresa: Netflix, Uber, Shopify"/>

        @error('categoria')
        <livewire:mostrar-alerta :message="$message"/>
        @enderror

    </div>

    <div>
        <x-input-label for="ultimo_dia" :value="__('Último día para postularse')" />
        <x-text-input 
            id="ultimo_dia" 
            class="block mt-1 w-full" 
            type="date" 
            wire:model="ultimo_dia" 
            :value="old('ultimo_dia')"/>

        @error('ultimo_dia')
        <livewire:mostrar-alerta :message="$message"/>
        @enderror

    </div>

    <div>
        <x-input-label for="descripcion" :value="__('Descripción del Puesto')" />
        <textarea 
            wire:model="descripcion" 
            id="descripcion" 
            cols="30" 
            rows="10"
            placeholder="Descripción general del puesto, experiencia"
            class="block text-sm text-gray-500 font-bold uppercase mb-2 w-full">

        </textarea>

    @error('ultimo_dia')
    <livewire:mostrar-alerta :message="$message"/>
    @enderror

    </div>

    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input 
            id="imagen" 
            class="block mt-1 w-full" 
            type="file" 
            wire:model="imagen"
            accept="image/*"/>
        
        <div class="my-5 w-80">
            @if ($imagen)
                Imagen:
                <img src="{{ $imagen->temporaryUrl() }}" alt="">               
            @endif
        </div>

        @error('imagen')
        <livewire:mostrar-alerta :message="$message"/>
        @enderror

    </div>

    <div>
        <x-primary-button>
            {{ __('Crear Vacante') }}
        </x-primary-button>
    </div>

</form>
