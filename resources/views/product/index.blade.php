<!DOCTYPE html>

<body>
    <p>Products;</p>
    <table>
        <thead>
            <tr>
                @foreach (['Id', 'Name', 'Category'] as $column)
                <td>({$column})</td>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($produts as $products)
            <tr>
                <td>({$product['id']})</td>
                <td>({$product['name']})</td>
                <td>({$product['Category']})</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>