<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ url('/css/app.css') }}" rel="stylesheet">
    <title>HomePage</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search" action='{{route("projects.search")}}'>
        <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

    {{-- @include('UsersPanel.Nav.NavBar') --}}

    <h1 class="text-center mt-5">Users Panel Of Projects & skills</h1>
    <hr>

    <div class="container">

        <div class="row justify-content-center">

            <div class="col  card-info">
                    @if ($projects)
                        @foreach ($projects as $project)
                            <div class="card m-2" class="ml- 5 mt-5 ml-5 p-2" style="width: 20rem;">
                                <img src="/images/{{$project->thumbnail}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title">{{$project->title}}</h5>
                                <p class="card-text"><b>Category: {{$project->category->name}}</b></p>
                                <a href="{{$project->github_link}}" target="_blank" class="btn btn-primary">Git</a>
                                <a href="{{$project->youtube_link}}" target="_blank" class="btn btn-danger">YouTube</a>
                                <a href="/projects/index/{{$project->id}}" target="_blank" class="btn btn-success">Details</a>
                                {{-- <a href="{{route('projects.detail', $project->id)}}" class="btn btn-success">Detail</a> --}}
                                </div>
                            </div>
                        @endforeach
                    @endif
            </div>


        </div>


        {{-- <div class="row justify-content-center">

            <div class="col">
                <h1 class="text-center">Skills</h1><br>
                @include('UsersPanel.Skills.show_skills_chart');
            </div>


        </div> --}}



      </div>


{{-- 
         <div>
             <span>{{ $projects->links() }}</span>
         </div> --}}



</body>
</html>