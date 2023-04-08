@include('layouts.header')
  
  <main>
       @foreach ($users as $user)
            <h3>{{$user}}</h3>
       @endforeach
  </main>
@include('layouts.footer')

<script>
   var jdata=@json($users);
   console.warn(jdata);
</script>