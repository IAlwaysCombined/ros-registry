<!DOCTYPE html>
<html>
<head>
    <title>Show Record</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
<h1>Show cadastral</h1>
<form method="GET" action="{{ route('show-data') }}">
    <label for="cadastral_number">Cadastral Number:</label>
    <input type="text" id="cadastral_number" name="cadastral_number">
    <button type="submit">Show</button>
</form>

@if(isset($plots))
    <h2>Cadastral</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Cadastral Number</th>
            <th>Address</th>
            <th>Price</th>
            <th>Area</th>

        </tr>
        @foreach($plots as $plot)
            <tr>
                <td>{{ $plot['id'] }}</td>
                <td>{{ $plot['cadastral_number'] }}</td>
                <td>{{ $plot['address'] }}</td>
                <td>{{ $plot['price'] }}</td>
                <td>{{ $plot['area'] }}</td>

            </tr>
        @endforeach
    </table>
@endif
</body>
</html>
