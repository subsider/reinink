<div class="card mb-4">
    <div class="card-header">Destinations</div>

    <ul class="list-group list-group-flush">
        @foreach ($destinations as $destination)
            <li class="list-group-item d-flex">
                <span class="mr-auto">{{ $destination->name }}</span>
                <span>{{ $destination->last_flight }}</span>
            </li>
        @endforeach
    </ul>
</div>