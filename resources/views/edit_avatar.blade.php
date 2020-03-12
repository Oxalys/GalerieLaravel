@extends ('layouts/master')
@section('content')
<h2>Modification d'un avatar</h2>
<form action="{{route('update_avatar' , $avatars->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-row text-center">
        <div class="form-group col-md-6">
            <input type="text" value='{{old('name', $avatars->name)}}'  name="name"  placeholder="Entrer un nom a votre avatar" 
            class="form-control @error('name') is-invalid @enderror" />
            
        @error('name')
        <div class="text-danger">{{ $message }}
        </div>
        @enderror
            <div class="validation"></div>
          </div>
          
            <div class="form-group col-md-6">
                <input type="file"  name="avatar"  />
                @error('avatar')
        <div class="text-danger">{{ $message }}
        </div>
        @enderror
                <div class="validation"></div>
            </div>

      </div>

        
        <div class="text-center"><button class="btn btn-info"type="submit">Ajouter</button></div>
  </form>
  @endsection