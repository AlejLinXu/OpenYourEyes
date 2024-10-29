@extends('admin.surveys.admin') 
@section('admin_panel')
<div class="container">
@if (session('message'))
   <div class="alert alert-warning alert-dismissible fade show" role="alert">
  {{ session('message') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<div class="row  mb-3 float-right">
	<a href="{{route('survey.create')}}" role="button" class="btn btn-primary">New survey</a>
</div>
</div>
<div class="container mt-4">


<div >Surveys list</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Organisation</th>
      <!--  <th scope="col">Author</th>-->
      <th scope="col">Name initiative / project</th>
      <th scope="col">Options</th>
     
    </tr>
  </thead>
  <tbody>
  @forelse($surveys as $survey)
    <tr>
      <th scope="row"> {{$survey->id}}</th>
      <td>
     	 {{$survey->organisation}}
      </td>
     
      <td> {{$survey->name_initiative_project}}</td>
      <td>
      <div class="btn-group btn-group-sm" role="group" aria-label="" style="border-radius: 0;">
      <a role="button" class="btn btn-info btn-sm" style="border-radius: 0;" href="{{ route('survey.image',$survey->id) }}">Image</a>
      <a role="button" class="btn btn-secondary btn-sm" style="border-radius: 0;" href="{{ route('survey.edit',$survey->id) }}">Edit</a>
      <a role="button" class="btn btn-success btn-sm" style="border-radius: 0;" href="{{ route('survey.translate',$survey->id) }}"><i class="fas fa-language"></i> Translate</a>
      
      <form action="{{ route('survey.destroy', $survey->id)}}" method="post">
                  
                  @csrf
                 
                  <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')" style="border-radius: 0;" type="submit">Delete</button>
                </form>
</div>
     
      </td>
    
    </tr>
    @empty
      No surveys found
   @endforelse
   
   
  </tbody>
</table>
</div>
@endsection