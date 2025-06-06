@extends('layouts.admin')


@section('content')
 <div class="page-header">
            <h3 class="page-title">
              Dashboard
            </h3>
          </div>
          <div class="row grid-margin">
            <div class="col-12">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
                      <div class="statistics-item">
                        <p>
                          <i class="icon-sm fa fa-user mr-2"></i>
                           Total No Of Student Application
                        </p>
                        <h2>{{ $student }}</h2>
                        {{-- <label class="badge badge-outline-success badge-pill">2.7% increase</label> --}}
                      </div>
                      <div class="statistics-item">
                        <p>
                          <i class="icon-sm fas fa-hourglass-half mr-2"></i>
                          Total News Posted
                        </p>
                        <h2>{{ $news }}</h2>
                        {{-- <label class="badge badge-outline-danger badge-pill">30% decrease</label> --}}
                      </div>
                      <div class="statistics-item">
                        <p>
                          <i class="icon-sm fas fa-cloud-download-alt mr-2"></i>
                          Total Events posted
                        </p>
                        <h2>{{ $events }}</h2>
                        {{-- <label class="badge badge-outline-success badge-pill">12% increase</label> --}}
                      </div>
                      <div class="statistics-item">
                        <p>
                          <i class="icon-sm fas fa-check-circle mr-2"></i>
                          Nigeria News
                        </p>
                        <h2>{{ $nigeria }}</h2>
                        {{-- <label class="badge badge-outline-success badge-pill">57% increase</label> --}}
                      </div>
                      <div class="statistics-item">
                        <p>
                          <i class="icon-sm fas fa-chart-line mr-2"></i>
                          Cote-d-ivoire News
                        </p>
                        <h2>{{ $cote }}</h2>
                        {{-- <label class="badge badge-outline-success badge-pill">10% increase</label> --}}
                      </div>
                      {{-- <div class="statistics-item">
                        <p>
                          <i class="icon-sm fas fa-circle-notch mr-2"></i>
                          Pending
                        </p>
                        <h2>7500</h2>
                        <label class="badge badge-outline-danger badge-pill">16% decrease</label>
                      </div> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>


@endsection