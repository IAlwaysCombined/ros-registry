<h1>Получение кадастровых данных</h1>

<h4>Кадастровые номера</h4>
<label>
    <input name="id">
</label>
<h5>Введите кадастровые номера через запятую</h5>

<button>Получить данные</button>

@foreach($results as $result)

    <table border="1" cellpadding="7" cellspacing="0">
        <tr>
            <td>Кадастровый номер</td>
            <td>Адрес</td>
            <td>Цена</td>
        </tr>
        <tr>
            <td>{{$result->cadastral_number}}</td>
            <td>{{$result->address}}</td>
            <td>{{$result->price}}</td>
            <td>{{$result->area}}</td>
        </tr>
    </table>


@endforeach
