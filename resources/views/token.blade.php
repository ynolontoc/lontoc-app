<form method="POST" action="/token">
    @csrf
    search term: <input type="text" name ="term" value=""/>
    <button type="submit">Go</button>
</form>
