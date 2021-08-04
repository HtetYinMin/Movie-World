@extends('layouts.backend')
@section('content')

<div class="page-content">
      <div class="page-header">
        <div class="container-fluid">
          <h2 class="h5 no-margin-bottom">Cast Details</h2>
        </div>
      </div>
      
      <section class="no-padding-bottom">
        <div class="container-fluid block">
          <div class="row mb-5">
                <div class="col-lg-4">
                      <div class="user-block text-center">
                            <img src="{{asset('backend-assets/img/avatar-6.jpg')}}" alt="..." class="img-fluid border border-dark rounded">
                      </div>
                </div>
                <div class="col-lg-8">
                      <div class="">
                            <h2 class="text-uppercase text-primary mb-3">John Wish</h2>
                      </div>
                      <div class="mb-3">
                            <span class="mr-2"><i class="fa fa-user mr-1" aria-hidden="true"></i> Male</span>
                            <span class="mr-2"><i class="fa fa-birthday-cake mr-1" aria-hidden="true"></i> 1980</span>
                            <span class="mr-2"><i class="fa fa-film mr-1" aria-hidden="true"></i> Actor</span>
                            <span class="mr-2"><i class="fa fa-globe mr-1" aria-hidden="true"></i> United States</span>
                      </div>
                      <div class="">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto expedita et rerum cum quidem animi, nemo dolores labore ipsam soluta assumenda aliquid reprehenderit pariatur accusamus sed corrupti corporis possimus totam!</p>
                      </div>
                      <div class="details-buttons">
                            <div class="row d-flex align-items-center">
                                <div class="mb-3">
                                    <a href="#" type="button" class="btn btn-primary mr-3 px-5"><i class="fa fa-film mr-1" aria-hidden="true"></i>150</a>
                                </div>
                                <!-- Col End -->
                                <div class="mb-3">
                                    <a href="#" type="button" class="btn btn-primary mr-3 px-5"><i class="fa fa-star mr-1" aria-hidden="true"></i>250</a>
                              </div>
                            </div>
                            <!-- Row End -->
                        </div>
                </div>
          </div>
          
          <div class="row">
                <!-- Start Related Photo Section -->
          <section class="mb-5">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-12 mb-2">
                      <h2 class="block-title">Related Photos</h2>
                  </div>
                  <!-- Col End -->
              </div>
              <!-- Row End -->
              <div class="row">
                  <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                      <div>
                            <div>
                              <img class="img-fluid" src="{{asset('backend-assets/img/avatar-0.jpg')}}" alt=""></a>
                            </div>
                      </div>
                  </div>
                  <!-- Col End -->
                  <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                      <div>
                            <div>
                              <img class="img-fluid" src="{{asset('backend-assets/img/avatar-0.jpg')}}" alt=""></a>
                            </div>
                      </div>
                  </div>
                  <!-- Col End -->
                  <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                      <div>
                            <div>
                              <img class="img-fluid" src="{{asset('backend-assets/img/avatar-0.jpg')}}" alt=""></a>
                            </div>
                      </div>
                  </div>
                  <!-- Col End -->
                  <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                      <div>
                            <div>
                              <img class="img-fluid" src="{{asset('backend-assets/img/avatar-0.jpg')}}" alt=""></a>
                            </div>
                      </div>
                  </div>
                  <!-- Col End -->
                  
                  <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                      <div>
                            <div>
                              <img class="img-fluid" src="{{asset('backend-assets/img/avatar-0.jpg')}}" alt=""></a>
                            </div>
                      </div>
                  </div>
                  <!-- Col End -->
                  <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                      <div>
                            <div>
                              <img class="img-fluid" src="{{asset('backend-assets/img/avatar-0.jpg')}}" alt=""></a>
                            </div>
                      </div>
                  </div>
                  <!-- Col End -->
              </div>
              <!-- Row End -->
              <div class="row">
                <div class="m-3">
                  <a href="#" type="button" class="btn btn-primary mr-3 px-5"><i class="fa fa-film mr-1" aria-hidden="true"></i>150</a>
                </div>
              </div>
          </div>
          <!-- Container End -->
      </section>

          </div>

          <div class="row">
                <!-- Start Related Movie Section -->
          <section class="mb-5">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-12 mb-2">
                      <h2 class="block-title">Related Movie</h2>
                  </div>
                  <!-- Col End -->
              </div>
              <!-- Row End -->
              <div class="row">
                  <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                      <div>
                            <div>
                                  <iframe width="500" height="200" class="img-fluid" src="https://www.youtube.com/embed/07d2dXHYb94" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                      </div>
                  </div>
                  <!-- Col End -->
                  <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                      <div>
                            <div>
                                  <iframe width="500" height="200" class="img-fluid" src="https://www.youtube.com/embed/07d2dXHYb94" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                      </div>
                  </div>
                  <!-- Col End -->
                  
              </div>
              <!-- Row End -->
              <div class="row">
                <div class="m-3">
                  <a href="#" type="button" class="btn btn-primary mr-3 px-5"><i class="fa fa-film mr-1" aria-hidden="true"></i>150</a>
                </div>
              </div>
          </div>
          <!-- Container End -->
      </section>

          </div>
      </section>

    </div>      

@endsection

@section('script')
  <script type="text/javascript">
    $(document).ready(function(){
      $('.deletebtn').click(function(){
        var id = $(this).data('id');
        // console.log(id);
        $('#deleteModalForm').attr('action',id);
        $('#deleteModal').modal('show');
      })
    })
  </script>
@endsection