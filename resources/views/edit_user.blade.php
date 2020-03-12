@extends ('layouts/master')
@section('content')
<h2>Modification d'un utilisateur</h2>
<form action="{{route('update_user' , $users->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-row text-center">
          
       
        <div class="form-group col-md-6">
            <input type="text" class="form-control" name="name" value="{{$users->name}}"   placeholder="Entrer votre nom" />
            <div class="validation"></div>
          </div>
          
          <div class="form-group col-md-6">
              <input type="number" class="form-control" name="age" 
              value="{{$users->age}}"  placeholder="Entrer votre âge " />
              <div class="validation"></div>
          </div>

          <div class="form-group col-md-6">
              <input type="email" class="form-control" name="email"   value="{{$users->email}}" placeholder="Entrer votre email" />
              <div class="validation"></div>
          </div>
    </div>
        
        <div class="text-center"><button class="btn btn-info"type="submit">Send Message</button></div>
  </form>
@endsection