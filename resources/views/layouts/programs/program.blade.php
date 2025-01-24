<x-layout>

    <x-card-header>
        Programs
    </x-card-header>
    @if (session('success'))
        
    <div class="alert alert-info alert-dismissible fade show mb-3" role="alert">
        <div class="text-primary">{{ session('success') }}</div>
    
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <div class="card">  
                    <div class="border-bottom title-part-padding d-flex justify-content-between  align-items-center">
                    <h4 class="card-title mb-0">Programs</h4>
                    <a href="/programs/create">
                        <button class="btn btn-primary">Create</button>
                    </a>
                  </div>
                    <div class="card-body ">
                     
                      <table
                        class="table  table-striped table-bordered text-center"
                        id="editable-datatable"
                      >
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>description</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($programs as $programs)
                              
                          <tr id="{{$loop->iteration}}" class="gradeC">
                            <td>{{$loop->iteration}}</td>
                            <td><a href="{{asset('storage/'.$programs->images)}}"><img src="{{asset('storage/'.$programs->images)}}" alt="img-gallery" width="100"></a></td>
                            <td >{{$programs->title}}</td>
                            <td class="center" style="max-width: 250px; ">
                              {{$programs->description}}
                            </td>
                            <td class="center">
                              <a href="/programs/{{ $programs->id }}/edit"><button class="btn btn-primary px-4 ">Edit</button></a> 

                              <form action="/programs/{{ $programs->id}}" method="POST" class="d-inline">
                                 @csrf
                                 @method('delete')
                                <button type="submit" class="btn btn-danger px-4 py-2" onclick="return confirm('are you sure')">Delete</button>
                              </form>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <div class="dark-transparent sidebartoggler"></div>
        <div class="dark-transparent sidebartoggler"></div>
        
    
    
    
        </x-layout>
