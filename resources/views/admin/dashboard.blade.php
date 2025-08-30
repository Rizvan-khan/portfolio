@extends('admin.layouts.master')

@section('content')
    <!-- content -->
    <div class="content ">
        
    <div class="row row-cols-1 row-cols-md-3 g-4">
      
        <div class="col-lg-4 col-md-12">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <div class="display-7">
                            <i class="bi bi-basket"></i>
                        </div>
                        <div class="dropdown ms-auto">
                            <a href="#" data-bs-toggle="dropdown" class="btn btn-sm" aria-haspopup="true"
                               aria-expanded="false">
                                <i class="bi bi-three-dots"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">View Detail</a>
                                <a href="#" class="dropdown-item">Download</a>
                            </div>
                        </div>
                    </div>
                    <h4 class="mb-3">Orders</h4>
                    <div class="d-flex mb-3">
                        <div class="display-7">310</div>
                        <div class="ms-auto" id="total-orders"></div>
                    </div>
                    <div class="text-success">
                        Over last month 1.4% <i class="small bi bi-arrow-up"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <div class="display-7">
                            <i class="bi bi-credit-card-2-front"></i>
                        </div>
                        <div class="dropdown ms-auto">
                            <a href="#" data-bs-toggle="dropdown" class="btn btn-sm" aria-haspopup="true"
                               aria-expanded="false">
                                <i class="bi bi-three-dots"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">View Detail</a>
                                <a href="#" class="dropdown-item">Download</a>
                            </div>
                        </div>
                    </div>
                    <h4 class="mb-3">Sales</h4>
                    <div class="d-flex mb-3">
                        <div class="display-7">$3.759,00</div>
                        <div class="ms-auto" id="total-sales"></div>
                    </div>
                    <div class="text-danger">
                        Over last month 2.4% <i class="small bi bi-arrow-down"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-4">
                        <h6 class="card-title">Recent Reviews</h6>
                        <div class="dropdown ms-auto">
                            <a href="#">View All</a>
                        </div>
                    </div>
                    <div class="summary-cards">
                        <div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="avatar me-3">
                                    <img src="../../assets/images/user/women_avatar5.jpg" class="rounded-circle"
                                         alt="image">
                                </div>
                                <div>
                                    <h5 class="mb-1">Amara Keel</h5>
                                    <ul class="list-inline ms-auto mb-0">
                                        <li class="list-inline-item mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </li>
                                        <li class="list-inline-item mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </li>
                                        <li class="list-inline-item mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </li>
                                        <li class="list-inline-item mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </li>
                                        <li class="list-inline-item mb-0">
                                            <i class="bi bi-star-fill text-muted"></i>
                                        </li>
                                        <li class="list-inline-item mb-0">(4)</li>
                                    </ul>
                                </div>
                            </div>
                            <div>I love your products. It is very easy and fun to use this panel.</div>
                        </div>
                        <div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="avatar me-3">
                                    <span class="avatar-text bg-indigo rounded-circle">J</span>
                                </div>
                                <div>
                                    <h5 class="mb-1">Johnath Siddeley</h5>
                                    <ul class="list-inline ms-auto mb-0">
                                        <li class="list-inline-item mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </li>
                                        <li class="list-inline-item mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </li>
                                        <li class="list-inline-item mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </li>
                                        <li class="list-inline-item mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </li>
                                        <li class="list-inline-item mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </li>
                                        <li class="list-inline-item mb-0">(5)</li>
                                    </ul>
                                </div>
                            </div>
                            <div>Very nice glasses. I ordered for my friend.</div>
                        </div>
                        <div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="avatar me-3">
                                    <span class="avatar-text bg-yellow rounded-circle">D</span>
                                </div>
                                <div>
                                    <h5 class="mb-1">David Berks</h5>
                                    <ul class="list-inline ms-auto mb-0">
                                        <li class="list-inline-item mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </li>
                                        <li class="list-inline-item mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </li>
                                        <li class="list-inline-item mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </li>
                                        <li class="list-inline-item mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </li>
                                        <li class="list-inline-item mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </li>
                                        <li class="list-inline-item mb-0">(5)</li>
                                    </ul>
                                </div>
                            </div>
                            <div>I am very satisfied with this product.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex mb-4">
                        <h6 class="card-title mb-0">Customer Rating</h6>
                        <div class="dropdown ms-auto">
                            <a href="#" data-bs-toggle="dropdown" class="btn btn-sm" aria-haspopup="true"
                               aria-expanded="false">
                                <i class="bi bi-three-dots"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">View Detail</a>
                                <a href="#" class="dropdown-item">Download</a>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="display-6">3.0</div>
                        <div class="d-flex justify-content-center gap-3 my-3">
                            <i class="bi bi-star-fill icon-lg text-warning"></i>
                            <i class="bi bi-star-fill icon-lg text-warning"></i>
                            <i class="bi bi-star-fill icon-lg text-warning"></i>
                            <i class="bi bi-star-fill icon-lg text-muted"></i>
                            <i class="bi bi-star-fill icon-lg text-muted"></i>
                            <span>(318)</span>
                        </div>
                    </div>
                    <div class="text-muted d-flex align-items-center justify-content-center">
                        <span class="text-success me-3 d-block">
                            <i class="bi bi-arrow-up me-1 small"></i>+35
                        </span> Point from last month
                    </div>
                    <div class="row my-4">
                        <div class="col-md-6 m-auto">
                            <div id="customer-rating"></div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-outline-primary btn-icon">
                            <i class="bi bi-download"></i> Download Report
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="card h-100 bg-purple">
                <div class="card-body text-center">
                    <div class="text-white-50">
                        <div class="bi bi-box-seam display-6 mb-3"></div>
                        <div class="display-8 mb-2">Products Sold</div>
                        <h5>89 Sold</h5>
                    </div>
                    <div id="products-sold"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="card widget h-100">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title">
                        Your Top Countries
                        <a href="#" class="bi bi-question-circle ms-1 small" data-bs-toggle="tooltip"
                           title="Sales performance revenue based by country"></a>
                    </h5>
                    <a href="#">View All</a>
                </div>
                <div class="card-body">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <div class="d-flex flex-grow-1 align-items-center">
                                <img width="45" class="me-3"
                                     src="https://vetra.laborasyon.com/assets/flags/united-states-of-america.svg" alt="...">
                                <span>United States</span>
                            </div>
                            <span>$1.671,10</span>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <div class="d-flex flex-grow-1 align-items-center">
                                <img width="45" class="me-3" src="https://vetra.laborasyon.com/assets/flags/venezuela.svg" alt="...">
                                <span>Venezuela</span>
                            </div>
                            <span>$1.064,75</span>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <div class="d-flex flex-grow-1 align-items-center">
                                <img width="45" class="me-3" src="https://vetra.laborasyon.com/assets/flags/salvador.svg" alt="...">
                                <span>Salvador</span>
                            </div>
                            <span>$1.055,98</span>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <div class="d-flex flex-grow-1 align-items-center">
                                <img width="45" class="me-3" src="https://vetra.laborasyon.com/assets/flags/russia.svg" alt="...">
                                <span>Russia</span>
                            </div>
                            <span>$1.042,00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
    </div>

    </div>
    <!-- ./ content -->
@endsection
