<x-layout>

    <x-card-header>
        Programs
    </x-card-header>
    @if (session('success'))
        
    <div class="alert alert-info alert-dismissible fade show mb-3" role="alert" id="success-alert">
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
                        class="table table-striped table-bordered text-center"
                       id="datatable">
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
                            <td>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal{{$loop->iteration}}">
                                    <img src="{{asset('storage/'.$programs->image)}}" alt="img-gallery" width="100">
                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="imageModal{{$loop->iteration}}" tabindex="-1" aria-labelledby="imageModalLabel{{$loop->iteration}}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="imageModalLabel{{$loop->iteration}}">{{$programs->title}}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="{{asset('storage/'.$programs->image)}}" alt="img-gallery" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>{{$programs->title}}</td>
                            <td class="center" style="max-width: 250px; ">
                              {{$programs->description}}
                            </td>
                            <td class="center">
                              <a href="/programs/{{ $programs->id }}/edit"><button class="btn btn-primary px-4 ">Edit</button></a> 

                              <form action="/programs/{{ $programs->id}}" method="POST" class="d-inline">
                                 @csrf
                                 @method('delete')
                                <button type="submit" class="btn btn-danger px-4 py-2" onclick="return confirmDelete(event)">Delete</button>
                                
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
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                                <script>
                                    function confirmDelete(event) {
                                          event.preventDefault();
                                          Swal.fire({
                                              title: 'Are you sure to delete it?',
                                            text: "You won't be able to revert this!",
                                            icon: 'warning',
                                            showCancelButton: true,
                                            confirmButtonColor: '#3085d6',
                                            cancelButtonColor: '#d33',
                                            confirmButtonText: 'Yes, delete it!',
                                            cancelButtonText: 'Cancel'
          
                                        }).then((result) => {
                                              if (result.isConfirmed) {
                                                  event.target.closest('form').submit();
          
                                            }
                                      });
                                  }
                                </script>
<script>//5 detik notifikasi hilang
  setTimeout(function() {
      document.getElementById('success-alert').style.display = 'none';
  }, 4500);
</script>