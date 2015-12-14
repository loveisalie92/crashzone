@foreach($customers as $customer)
    <tr data-id="{{ $customer->id }}">
        <td>{{ $customer->id }}</td>
        <td>{{ $customer->created_at }}</td>
        <td>{{ $customer->owner }}</td>
        <td>{{ $customer->rego }}</td>
        <td>{{ $customer->make }}</td>
        <td>{{ $customer->model }}</td>
        <td>{{ $customer->colour }}</td>
    </tr>
@endforeach
