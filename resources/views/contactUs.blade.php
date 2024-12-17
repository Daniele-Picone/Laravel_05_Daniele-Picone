<x-layout>
<div class="container vh-100">
     <div class="row mt-5 justify-content-center align-items-center">
        <h1 class="text-center" >Compila La Tua richiesta!</h1>
      </div>
     <div class="row mt-5 justify-content-center align-items-center" >
     <div class="col-12 d-flex justify-content-center align-items-center">
     <form class="box-bg" method="POST" action="{{route('contatc.submit')}}">
     @csrf

     <div class="mb-3">
          <label for="name" class="form-label">Inserisci Il tu Nome</label>
          <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">
     
        </div>
       <div class="mb-3">
          <label for="email" class="form-label">Inserisci la tua email</label>
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
     
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Scrivici il tuo messaggio</label>
            <textarea name="message" class="form-control" id="message" cols="30" rows="10" ></textarea>
        </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>






     </div>
</div>
</div>
</x-layout>