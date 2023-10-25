@props(['title' => 'titulo default', 'boton' => 'crear default', 'archivoIncluido' => 'contenido default'])

<div>
    <button wire:click="openModal" class="button button-primary"><i class="mr-1 icon ion-md-add"></i> {{ $boton }} </button>
    @if($showModal)
        <div class="fixed inset-0 flex items-center justify-center z-50">
            <div class="modal relative bg-white p-6 rounded shadow-xl w-1/2 h-1/2 overflow-y-auto"> <!-- Ancho y alto ajustados a 1/2 de la pantalla con desplazamiento vertical -->
                <!-- Contenido del modal -->
                <h2 class="text-xl font-semibold text-left items-center">{{ $title }}</h2>
                <div class="modal-content max-h-48"> <!-- Ajustar contenido al tamaño del modal y definir una altura máxima -->
                    @include($archivoIncluido)
                </div>

                <button wire:click="closeModal" class="absolute top-0 right-0 mt-3 mr-3">Cerrar</button>
            </div>
        </div>
    @endif
</div>
