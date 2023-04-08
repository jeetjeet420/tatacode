@include('layouts.header')
  
  <main>
       <div class="container">
        <form method="post" action="{{ route('submitlogin') }}">
            @csrf
           <div class="mb-3">
             <label for="email" class="form-label">Email</label>
             <input type="text" name="email" id="email" class="form-control" placeholder="" aria-describedby="helpId">
             <small id="helpId" class="text-muted">Help text</small>
           </div>
           <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-muted">Help text</small>
          </div>
          <div class="mb-3">
            <button class="btn btn-primary">Login</button>
          </div>

        </form>

       </div>
  </main>
@include('layouts.footer')