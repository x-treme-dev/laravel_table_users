<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page</title>
</head>
<body>
    <p>{{$id}}</p>
         <pre> 
       <!--вывести через print_r данные из json {{print_r( $data ) }}
        </pre> -->
        <table>
        <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>email</th>
        <th>Birth date</th>
        <th>registered</th>
        <th>City</th>
        <th>Street</th>
        <th>Suite</th>
        <th>Phone</th>
        <th>Website</th>
        <th>Company</th>
        </tr>
       <tbody>
       @foreach( $data as $item)
           <tr>
            <td>{{$item['firstname']}}</td>
            <td>{{$item['lastname']}}</td>
            <td>{{$item['email']}}</td>
            <td>{{$item['birthDate']}}</td>
            <td>{{$item['login']['registered']}}</td>
            <td>{{$item['address']['city']}}</td>
            <td>{{$item['address']['street']}}</td>
            <td>{{$item['address']['suite']}}</td>
            <td>{{$item['phone']}}</td>
            <td>{{$item['website']}}</td>
            <td>{{$item['company']['name']}}</td>
            </tr>
        @endforeach
       </tbody>
    </table>
</body>
</html>