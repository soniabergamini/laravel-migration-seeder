@extends('layouts.app')

@section('content')
<!-- Main Contents -->
<main class="flex gap-4 overflow-y-scroll w-full">

    <!-- Train Cards -->
    @foreach($trains as $train)
        <div class="border py-4 px-3 min-w-[280px] text-sm border-neutral-800">

            <!-- Train Details -->
            <div class="my-1.5">
                <p><strong>AZIENDA: </strong><span>{{ $train->azienda }}</span></p>
                <p><strong>CODICE TRENO: </strong><span>{{ $train->codice_treno }}</span></p>
                <p><strong>PARTENZA: </strong><span>{{ $train->stazione_partenza }}</span></p>
                <p><strong>ARRIVO: </strong><span>{{ $train->stazione_arrivo }}</span></p>
                <p><strong>ORARIO PARTENZA: </strong><span>{{ $train->orario_partenza }}</span></p>
                <p><strong>ORARIO ARRIVO: </strong><span>{{ $train->orario_arrivo }}</span></p>
                <p><strong>CARROZZE: </strong><span>{{ $train->carrozze }}</span></p>
                <p><strong>RITARDO: </strong><span>{{ $train->ritardo }}'</span></p>
                <p><strong>CANCELLATO: </strong><span>{{ $train->cancellato }}</span></p>
            </div>

        </div>
    @endforeach
</main>
@endsection
