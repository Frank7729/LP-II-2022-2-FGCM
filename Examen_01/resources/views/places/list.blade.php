<table>
    <tr>
        <td>id</td>
        <td>name</td>
        <td>address</td>
    </tr>
    @foreach ($places as $item)


    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->address}}</td>
    </tr>
    @endforeach
</table>
