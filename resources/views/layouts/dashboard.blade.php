<x-layout>
    <div class="row">
                <div class="col-lg-3 col-md-6">
                <a href="/categories">
                  <div class="card border-bottom border-danger">
                    <div class="card-body">
                      <div class="d-flex align-items-center">
                        <div>
                          <h2 class="fs-7">{{ $categories }}</h2>
                          <h6 class="fw-medium text-danger mb-0">Categories</h6>
                        </div>
                        <div class="ms-auto">
                          <span class="text-danger display-6"><i class="ti ti-list-details"></i></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
                </div>
                <div class="col-lg-3 col-md-6">
                <a href="/galleries">
                  <div class="card border-bottom border-primary">
                    <div class="card-body">
                      <div class="d-flex no-block align-items-center">
                        <div>
                          <h2 class="fs-7">{{ $galleries }}</h2>
                          <h6 class="fw-medium text-primary mb-0">Galeries</h6>
                        </div>
                        <div class="ms-auto">
                          <span class="text-primary display-6">  <i class="ti ti-photo"></i></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
                </div>
                <div class="col-lg-3 col-md-6">
                <a href="/regulations">
                  <div class="card border-bottom border-success">
                    <div class="card-body">
                      <div class="d-flex no-block align-items-center">
                        <div>
                          <h2 class="fs-7">{{ $regulations }}</h2>
                          <h6 class="fw-medium text-success mb-0">Regulations</h6>
                        </div>
                        <div class="ms-auto">
                          <span class="text-success display-6"><i class="ti ti-book"></i></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
                </div>
                <div class="col-lg-3 col-md-6">
                <a href="/programs">
                  <div class="card border-bottom border-danger">
                    <div class="card-body">
                      <div class="d-flex no-block align-items-center">
                        <div>
                          <h2 class="fs-7">{{ $programs }}</h2>
                          <h6 class="fw-medium text-danger mb-0">Programs</h6>
                        </div>
                        <div class="ms-auto">
                          <span class="text-danger display-6"><i class="ti ti-layout"></i></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
                </div>
              
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6">
            <a href="/benefits">
              <div class="card border-bottom border-info">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div>
                      <h2 class="fs-7">{{ $benefits }}</h2>
                      <h6 class="fw-medium text-info mb-0">Benefits</h6>
                    </div>
                    <div class="ms-auto">
                      <span class="text-info display-6"><i class="ti ti-chart-pie"></i></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            </div>
            <div class="col-lg-3 col-md-6">
            <a href="/inbox">
              <div class="card border-bottom border-success">
                <div class="card-body">
                  <div class="d-flex no-block align-items-center">
                    <div>
                      <h2 class="fs-7">{{ $inbox }}</h2>
                      <h6 class="fw-medium text-success mb-0">Inbox</h6>
                    </div>
                    <div class="ms-auto">
                      <span class="text-success display-6"><i class="ti ti-inbox"></i></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            </div>
         
        
      </div>
    
          
        
              <!-- End Row -->
            
</x-layout>
