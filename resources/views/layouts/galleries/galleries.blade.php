<x-layout>

    <x-card-header>
        Galleries
    </x-card-header>
    <x-alert></x-alert>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <div class="card">  
                    <div class="border-bottom title-part-padding d-flex justify-content-between  align-items-center">
                    <h4 class="card-title mb-0">Galleries</h4>
                    <a href="/galleries/create">
                        <button class="btn btn-primary">Create</button>
                    </a>
                  </div>
                    <div class="card-body ">
                     
                      <table
                        class="table  table-striped table-bordered text-center"
                        id="datatable"
                      >
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($galleries as $galleries)
                              
                          <tr id="{{$loop->iteration}}" class="gradeC">
                            <td>{{$loop->iteration}}</td>
                            <td><a href="{{'storage/'.$galleries->image}}"><img src="{{'storage/'.$galleries->image}}" alt="img-gallery"  width="200"></a></td>
                            <td>{{$galleries->title}}</td>
                            <td class="center">{{$galleries->categories->title}}</td>
                            <td class="center">
                              <form action="/galleries/{{ $galleries->id}}" method="POST" class="d-inline">
                                 @csrf
                                 @method('delete')
                                <button type="submit" class="btn btn-danger px-4 py-2" id="delete">Delete</button>
                              </form>
                               <a href="/galleries/{{ $galleries->id }}/edit"><button class="btn btn-primary px-4 ">Edit</button></a> 
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
