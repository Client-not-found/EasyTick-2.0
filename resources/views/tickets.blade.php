@extends('layout.app')

@section('content')
<header>
    <title>Ticketsystem | Dashboard</title>
</header>
<body>
    <br>
    <h4>Ticketliste</h4>
    <div class="list-group">
        <!-- @foreach($Ticket as $ticket) -->
        <a href="#" class="list-group-item list-group-item-action" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">
                    <!-- {{ $ticket->id }} -->
                </h5>
                <button <!-- @click="editBlog ( {{ $ticket->id }} )" -->class="btn btn-warning btn-sm">Bearbeiten</button>
            </div>
            <p class="mb-1">
                <!-- {{ $ticket->subjecz }} -->
            </p>
            <small>
                <!-- {{ $ticket->departement }} --></small>
        </a>
        <!-- @endforeach -->
    </div>
</body>
@endsection
