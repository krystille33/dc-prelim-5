<div>
    <table class="table table-striped">
        <thead class="table table-striped bg-info">
            <tr>
                <th>ID</th>
                <th>Shipping Name</th>
                <th>Amount</th>
                <th>Address</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($shippings as $shipping)
                <tr>
                    <td>{{ $shipping->id }}</td>
                    <td>{{ $shipping->name }}</td>
                    <td>{{ $shipping->amount }}</td>
                    <td>{{ $shipping->address }}</td>
                    <td>
                        <a href="{{ url('edit', ['shipping' => $shipping->id]) }}" class="btn btn-secondary">Edit</a>
                    </td>
                    <td>
                        <a href="{{ url('delete', ['shipping' => $shipping->id]) }}" class="btn btn-danger">Delete</i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

