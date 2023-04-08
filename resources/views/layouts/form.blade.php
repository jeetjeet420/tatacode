<h1>Login Form</h1>
@if ($errors->any())
    @foreach ($errors->all() as $err)
          <li>{{$err}}</li>
    @endforeach
@endif
<form method="post" action="{{ route('submit_form') }}">
    @csrf
         <input type="text" name="email" value="{{ old('email') }}" placeholder="Email">
         <br>
         <span style="background-color: red;">
           @error('email')
               {{$errors->first('email')}}
           @enderror
        </span>
         <br>
         <input type="password" name="password" value="" placeholder="Password">
         <br>
         <span style="background-color: red;">
            @error('password')
                {{$message}}
            @enderror
         </span>

         
         <br>
         <input type="password" name="confirm_password" value="" placeholder="Confirm Password">
         <br>
         <button type="submit">Submit</button>
</form>