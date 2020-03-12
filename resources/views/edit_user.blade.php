@extends ('layouts/master')
@section('content')
<h2>Modification d'un utilisateur</h2>
<form action="{{route('update_user' , $users->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-row text-center">
          
       
        <div class="form-group col-md-6">
            <input type="text" name="name"    placeholder="Entrer votre nom"  value='{{old('name', $users->name)}}'
            class="form-control @error('name') is-invalid @enderror" />
            
        @error('name')
        <div class="text-danger">{{ $message }}
        </div>
        @enderror
            <div class="validation"></div>
          </div>
          
          <div class="form-group col-md-6">
              <input type="number"  name="age" 
                placeholder="Entrer votre âge " value='{{old('age', $users->age)}}'
              class="form-control @error('age') is-invalid @enderror" />
              
          @error('age')
          <div class="text-danger">{{ $message }}
          </div>
          @enderror
              <div class="validation"></div>
          </div>

          <div class="form-group col-md-6">
              <input type="email"  name="email" value='{{old('email', $users->email)}}' placeholder="Entrer votre email" class="form-control @error('email') is-invalid @enderror" />
                
              @error('email')
              <div class="text-danger">{{ $message }}
              </div>
              @enderror
              <div class="validation"></div>
          </div>
    </div>
        
        <div class="text-center"><button class="btn btn-info"type="submit">Send Message</button></div>
  </form>
@endsection