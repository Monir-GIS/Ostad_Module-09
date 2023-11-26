@extends('layouts.app')

@section('title','AboutMe')
@section('content')
 <!-- Expertise Start -->
 <div class="container-xxl py-6 pb-5" id="skill">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-5 mb-5">Skills & Experience</h1>
                    <!-- <p class="mb-4">Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam rebum amet diam ipsum clita dolor duo clita sit.</p> -->
                    <h3 class="mb-4">My Skills</h3>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">ArcGIS</h6>
                                    <h6 class="font-weight-bold">75%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">QGIS</h6>
                                    <h6 class="font-weight-bold">60%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">RS</h6>
                                    <h6 class="font-weight-bold">60%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">WebGIS</h6>
                                    <h6 class="font-weight-bold">50%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">Javascript</h6>
                                    <h6 class="font-weight-bold">70%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">PHP</h6>
                                    <h6 class="font-weight-bold">70%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">Laravel</h6>
                                    <h6 class="font-weight-bold">95%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">Spatial MySqL</h6>
                                    <h6 class="font-weight-bold">85%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <ul class="nav nav-pills rounded border border-2 border-primary mb-5">
                        <li class="nav-item w-50">
                            <button class="nav-link w-100 py-3 fs-5 active" data-bs-toggle="pill" href="#tab-1">Experience</button>
                        </li>
                        <li class="nav-item w-50">
                            <button class="nav-link w-100 py-3 fs-5" data-bs-toggle="pill" href="#tab-2">Education</button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row gy-5 gx-4">
                                <div class="col-sm-6">
                                    <h5>GIS Specialist</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">June 2023 - Present</p>
                                    <h6 class="mb-0">Bangladesh Rural Electrification Board</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>GIS & RS Analyst</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">May 2021 - May 2023</p>
                                    <h6 class="mb-0">Ministry of Land, Bangladesh.</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Asst. GIS Specialist</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">February 2016 - April 2021</p>
                                    <h6 class="mb-0">Bangladesh Rural Electrification Board</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Asst. GIS Specialist</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">January 2011 - January 2016</p>
                                    <h6 class="mb-0">Data Experts (Pvt.) Ltd.</h6>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row gy-5 gx-4">
                                <div class="col-sm-6">
                                    <h5>PGD in ICT</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2022 - 2023</p>
                                    <h6 class="mb-0"> Bangladesh Computer Council (BCC)</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Diploma in Graphic Design</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2012 - 2012</p>
                                    <h6 class="mb-0">Creative IT Institute</h6>
                                </div>
                                <div class="col-sm-6">
                                <h5>Geography & Environmental Studies</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2011 - 2012</p>
                                    <h6 class="mb-0">Rajshahi University</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Geography & Environmental Studies</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2007 - 2010</p>
                                    <h6 class="mb-0">Rajshahi University</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Expertise End -->
@endsection
