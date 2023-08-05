<div>
    <div>
        @forelse ($vacantes as $vacante)
            
            <div class="p-6 text-gray-900 dark:text-gray-100 md:flex md:justify-between md:items-center">
                <div class="space-y-3">
                    <a href="#" class="text-xl font-bold">{{$vacante->titulo}}</a>
                    <p class="text-sm text-gray-600 font-bold">{{$vacante->empresa}} </p>
                    <p class="text-sm text-gray-500">Ultimo día: {{ $vacante->ultimo_dia->format('d/m/Y') }} </p>
                </div>

                <div class="flex flex-col md:flex-row items-stretch gap-3 mt-4 md:mt-0">
                    <a href="#" 
                        class="bg-slate-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center">
                        Candidatos
                    </a>
                    
                    <a href="{{ route('vacantes.edit', $vacante->id) }}" 
                        class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center">
                        Editar
                    </a>

                    <button wire:click="$emit('mostrarAlerta', {{ $vacante->id }})" 
                        class="bg-red-600 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center">
                        Eliminar
                </button>
                </div>

            </div>

        @empty

            <p class="p-3 text-center text-sm text-gray-600">No hay Vacantes</p>
            
        @endforelse
    </div>
    <div class="mt-10">
        {{ $vacantes->links() }}
    </div>

</div>

@push('scripts')

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>    

    <script>
        Livewire.on('mostrarAlerta', vacanteId => {
            Swal.fire({
                title: '¿Eliminar Vacante?',
                text: "Una vacante eliminada no se puede recuperar!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, ¡Eliminar!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
            if (result.isConfirmed) {
                //Eliminar la vacante
                Livewire.emit('eliminarVacante', vacanteId)

                Swal.fire(
                    'Se eliminó la vacante!',
                    'Eliminado Correctamente.',
                    'success'
                )
            }
            })
        })
        
    </script>

@endpush
