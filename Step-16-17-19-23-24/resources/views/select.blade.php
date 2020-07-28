<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Display Data</h2>

<table>
  <tr>
    <th>Name</th>
    <th>Number</th>
    <th>Address</th>
  </tr>
  @foreach($data as $value)
  <tr>
    <td>{{$value->name}}</td>
    <td>{{$value->number}}</td>
    <td>{{$value->address}}</td>
  </tr>
  @endforeach
</table>

</body>
</html>
