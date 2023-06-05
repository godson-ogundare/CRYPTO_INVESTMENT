<div class="card-body">
    <table class="table table-bordered text-white">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Investment</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($paypal as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->amount }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
