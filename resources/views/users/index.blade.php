<x-layout>
  <x-slot:heading> User List </x-slot>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name>
      <th scope="col">Gender</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
    <tr>
      <th scope="row">{{ $user['age'] }}</th>
      <td>{{ $user['name'] }}</td>
      <td>{{ $user['gender']}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</x-layout>