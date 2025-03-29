<form method="POST" action="/token">
    @csrf
    search term: <input type="text" name ="term" value=""/>
    <button type="submit">Go</button>
</form>

<div>
    Products:
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name>
      <th scope="col">Category</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($products as $productd)
    <tr>
      <td>{{ $product['id'] }}</td>
      <td>{{ $product['name'] }}</td>
      <td>{{ $product['category']}}</td>
    </tr>
  </tbody>
  @endforeach
</table>
</div>
