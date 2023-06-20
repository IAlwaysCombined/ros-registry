<form action="{{ route('show-data') }}" method="post">
    @csrf
    <input type="text" name="cadastral_number">
    <button type="submit">Отправить</button>
</form>

@if($plots)
    <table border="1">
        <thead>
        <tr>
            <th>ID</th>
            <th>Cadastral number</th>
            <th>Address</th>
            <th>Price</th>
            <th>Area</th>
        </tr>
        </thead>
        <tbody>
        @foreach($plots as $plot)
            <tr>
                <td>{{ $plot['id'] }}</td>
                <td>{{ $plot['cadastral_number'] }}</td>
                <td>{{ $plot['address'] }}</td>
                <td>{{ $plot['price'] }}</td>
                <td>{{ $plot['area'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@else
    <p>Запись не найдена</p>
@endif
