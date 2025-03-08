<!DOCTYPE html>

<body>
    <p>Products; </p>
    <table>
        <thead>
            <tr>
                @foreach (['Id', 'Name', 'Category'] as $column)
                <td>({{ $column }})</td>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>({{$product['id']}})</td>
                <td>({{$product['name']}})</td>
                <td>({{$product['category']}})</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>