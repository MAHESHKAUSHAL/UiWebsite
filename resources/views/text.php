


 1   @foreach ($data as $k=> $item)
    <h4>{{$k}}=>{{$item}}</h4>
    @endforeach


 2
    <h1>hello template</h1>
    <h3>{{$data['name']}}</h3>
    @for($i=0; $i<=100; $i++)
    <h6>the curent loop values is:{{$i}}</h6>
     @endfor
