<x-layout>

    <x-card-header>
        Galleries
    </x-card-header>
    <x-alert></x-alert>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12 ">
                  <div class="card overflow-x-scroll ">  
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
                          @foreach ($galleries as $gallery)
                              
                            <tr id="{{$loop->iteration}}" class="gradeC">
                            <td>{{$loop->iteration}}</td>
                            <td><a  data-bs-toggle="modal" data-bs-target="#imageModal{{$loop->iteration}}"><img src="{{asset('images/galleries/'.$gallery->image)}}" alt="img-gallery" style="max-width:100px;" class="w-100"></a></td>
                              <!-- Modal -->
                              <div class="modal fade" id="imageModal{{$loop->iteration}}" tabindex="-1" aria-labelledby="imageModalLabel{{$loop->iteration}}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imageModalLabel{{$loop->iteration}}">{{$gallery->title}}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="{{asset('images/galleries/'.$gallery->image)}}" alt="img-gallery" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <td>{{$gallery->title}}</td>
                            <td class="center">{{$gallery->categories->title}}</td>
                            <td class="center ">
                              <a href="/galleries/{{ $gallery->id }}/edit"><button class="btn btn-primary px-4  ">Edit</button></a> 
                              <form action="/galleries/{{ $gallery->id}}" method="POST" class="d-inline ">
                                 @csrf
                                 @method('delete')
                                <button type="submit" class="btn btn-danger px-4 "  id="delete">Delete</button>
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
          
        </x-layout>
