<x-layout>
    <x-card-header>
        Categories
    </x-card-header>
    <x-alert></x-alert>
    
        <div class="container-fluid   ">
          

          <div class="row">
            <div class="col-sm-12">
        
              <!-- Column -->
              <div class="card">
                <div class="border-bottom title-part-padding d-flex justify-content-between">
                  <h4 class="card-title mb-0">Categories</h4>
                  <a href="/categories/create">

                      <button class="btn btn-primary">Create</button>
                  </a>
                </div>
                
                <div class="card-body">
                 
                  <table
                    class="table table-striped table-bordered text-center " id="datatable" >
                  
                    <thead>
                      <tr>
                        <th >No</th>
                        <th>title</th>
                        <th>action</th>
                      </tr>
                    </thead>
                   <tbody>
                    
                     @foreach ($categories as $category)
                     <tr id="25" class="gradeA">
                      <td>{{$loop->iteration}}</td>
                     <td>{{ $category->title}}</td>

                     <td class="center ">

                        <a href="/categories/{{ $category->id }}/edit"><button class="btn btn-primary px-4 ">Edit</button></a>
                        
                        <form action="/categories/{{ $category->id}}" method="POST" class="d-inline" id="form_delete">
                            @csrf
                            @method('delete')
                        <button type="submit" class="btn btn-danger px-4 py-2" id="btn_delete" onclick="return confirm('are you sure')">Delete</button>
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
    
</x-layout>
