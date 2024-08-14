<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page</title>
</head>
<body>
      <!--<p>{{$id}}</p>-->
         <pre> 
       <!-- {{print_r( $data ) }}-->
        <!--</pre>--> 
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
       <!--Если дата более 4-х лет давности, то не выводим в таблицу-->
       @if((int)$item['register'] < ((int)date("Y"))-4 )
        @continue
        @endif
         <!--Если строка таблицы четная, то красить в серый цвет-->
         @if (!$loop->even && !((int)$item['register'] < ((int)date("Y"))-2))
            <tr @style([
            'background-color:#cacfd2',
            ])>
            <td >{{$item['firstname']}}</td>
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
           <!--Если дата регистраци 2-х летней давности, то красить в красный цвет-->  
          @elseif ((int)$item['register'] < ((int)date("Y"))-2)
          <tr @style([
          'background-color:red',
           ])>
            <td >{{$item['firstname']}}</td>
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
             <!--Иначе выводим как есть-->  
           @else
           <tr>
            <td >{{$item['firstname']}}</td>
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
            @endif
        @endforeach
       </tbody>
    </table>
          </pre>
</body>
</html>