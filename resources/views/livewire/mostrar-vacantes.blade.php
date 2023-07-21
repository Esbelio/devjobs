<div>
    @foreach ($vacantes as $vacante)
        
        <div class="p-6 text-gray-900 dark:text-gray-100">
            <div class="space-y-3">
                <a href="#" class="text-xl font-bold">{{$vacante->titulo}}</a>
                <p class="text-sm text-gray-600 font-bold">{{$vacante->empresa}} </p>
                <p class="text-sm text-gray-500">Ultimo día: {{ $vacante->ultimo_dia->format('d/m/Y') }} </p>
            </div>

            <div class="flex gap-3 items-center">
                <a href="#">Lado Derecho</a>
            </div>
        </div>

    @endforeach
</div>
