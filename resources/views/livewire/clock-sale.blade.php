@if ($stopwatch != null && $stopwatch)
    <div class="grid grid-cols-6 gap-4 py-2 font-mono {{ $type }}"
        style="background-color: {{ $stopwatch->stopwatch_color }}; color: {{ $stopwatch->stopwatch_color_text }} !important">
        <div class="col-span-4 col-start-2 text-center ">
            <div class="text-center">
                {{ $stopwatch->stopwatch_text }}
            </div>
        </div>
        <div class="col-start-6 text-center cursor-pointer text-end mx-1" wire:click='ocultarStopwatch'>
            <p>X</p>
        </div>
    </div>
@else
    <div>
    </div>
@endif
