<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    index template in body
    <!--<strong>{{time()}}</strong>-->
   
     <h1>Languages of programming:</h1>
    <p>Total: {{count($language)}}</p>
    
    @foreach ($language as $item)
      <p>{{ $item }}</p>
    @endforeach

</body>
</html>