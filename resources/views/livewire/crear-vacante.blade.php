<form action="" class="md:w-1/2 space-y-5">
     
     <div>
        <x-input-label for="titulo" :value="__('Titulo Vacante')" />
        <x-text-input 
            id="titulo" 
            class="block mt-1 w-full" 
            type="text" 
            name="titulo" 
            :value="old('titulo')" 
            placeholder="Titulo Vacante"/>
    </div>

    <div>
        <x-input-label for="salario" :value="__('Salario Mensual')" />
        <select name="salario" id="salario" class="block text-sm text-gray-500 font-bold uppercase mb-2 w-full">
            
        </select>
    </div>

    <div>
        <x-input-label for="categoria" :value="__('Categoría')" />
        <select name="categoria" id="categoria" class="block text-sm text-gray-500 font-bold uppercase mb-2 w-full">
            
        </select>
    </div>

    <div>
        <x-input-label for="empresa" :value="__('Empresa')" />
        <x-text-input 
            id="empresa" 
            class="block mt-1 w-full" 
            type="text" 
            name="empresa" 
            :value="old('empresa')" 
            placeholder="Empresa: Netflix, Uber, Shopify"/>
    </div>

    <div>
        <x-input-label for="ultimo_dia" :value="__('Último día para postularse')" />
        <x-text-input 
            id="ultimo_dia" 
            class="block mt-1 w-full" 
            type="date" 
            name="ultimo_dia" 
            :value="old('ultimo_dia')"/>
    </div>

    <div>
        <x-input-label for="descripcion" :value="__('Descripción del Puesto')" />
        <textarea 
            name="descripcion" 
            id="descripcion" 
            cols="30" 
            rows="10"
            placeholder="Descripción general del puesto, experiencia"
            class="block text-sm text-gray-500 font-bold uppercase mb-2 w-full">

        </textarea>
    </div>

    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input 
            id="imagen" 
            class="block mt-1 w-full" 
            type="file" 
            name="imagen"/>
    </div>

    <div>
        <x-primary-button>
            {{ __('Crear Vacante') }}
        </x-primary-button>
    </div>

</form>