<x-layout>

    <x-card-header>
        Regulations
    </x-card-header>
    @if (session('success'))
        
    <div class="alert alert-info alert-dismissible fade show mb-3" role="alert">
        <div class="text-primary">{{ session('success') }}</div>
    
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
        <div class="container-fluid">
          

          <div class="row">
            <div class="col-sm-12">
              <!-- Column -->
              <div class="card">
                <div class="border-bottom title-part-padding d-flex justify-content-between">
                  <h4 class="card-title mb-0">Regulations</h4>
                  <a href="/regulations/create">

                      <button class="btn btn-primary">Create</button>
                  </a>
                </div>
                
                <div class="card-body">
                 
                  <table
                    class="table table-striped table-bordered text-center"
                    id="datatable"
                  >
                    <thead>
                      <tr>
                        <th >No</th>
                        <th>icon</th>
                        <th>title</th>
                        <th>action</th>
                      </tr>
                    </thead>
                   <tbody>
                    @foreach ($regulations as $regulation)
                    <tr id="25" class="gradeA">
                      <td>{{$loop->iteration}}</td>
                      <td  style="width: 30px;" >{!!$regulation->icon!!}</td>
                     <td>{{ $regulation->title}}</td>
                
                      <td class="center ">
                        <form action="/regulations/{{ $regulation->id}}" method="POST" class="d-inline">
                            @csrf
                            @method('delete')
                        <button type="submit" class="btn btn-danger px-4 py-2" onclick="return confirm('are you sure')">Delete</button>
                        </form>

                      <a href="/regulations/{{ $regulation->id }}/edit"><button class="btn btn-primary px-4 ">Edit</button></a>

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
      </x-layout>

