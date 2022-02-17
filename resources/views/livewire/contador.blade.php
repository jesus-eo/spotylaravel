<div>
    <div>
        {{-- Cuando le das un cick al botón muestra el contador, accedes al contador que esta creado en el componente contador y llama al método incrementar que esta en el componete contador--}}
        {{$contador }}
        <button wire:click="incrementar">Incrementar</button>
    </div>
</div>
