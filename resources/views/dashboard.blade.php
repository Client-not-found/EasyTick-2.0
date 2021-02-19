    @extends('layout.app')

    @section('content')
    <header>
        <title>Ticketsystem | Dashboard</title>
    </header>

    <body>
        <div class="container">
            <br>
            <!-- Statistik -->
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-white bg-success">
                            <h5 class="card-title">Tickets Offen</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-white bg-danger">
                            <h5 class="card-title">Tickets Geschlossen</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-white bg-primary">
                            <h5 class="card-title">Tickets Gesamt</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <!-- Offene Tickets -->
            <h4>Offene Tickets </h4>
            <div class="col-md-12">
                <table class="table">
                    <thead class="bg-secondary text-white">
                        <tr>
                            <th scope="col" class="col-md-2">ID</th>
                            <th scope="col" class="col-md-4">Betreff</th>
                            <th scope="col" class="col-md-6">Abteilung</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tickets as $ticket)
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
    @endsection
