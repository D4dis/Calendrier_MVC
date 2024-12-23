<?php

include 'inc/head.php';

?>
<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->
<main class="main" id="top">
  <?php include 'inc/nav.php' ?>
  <div class="content">
    <div class="pb-5">
      <div class="row g-4">
        <div class="col-12 col-xxl-6">
          <div class="mb-8">
            <h2 class="mb-2">Ecommerce Dashboard</h2>
            <h5 class="text-body-tertiary fw-semibold">Here’s what’s going on at your business right now</h5>
          </div>
          <div class="row align-items-center g-4">
            <div class="col-12 col-md-auto">
              <div class="d-flex align-items-center"><span class="fa-stack" style="min-height: 46px;min-width: 46px;"><span class="fa-solid fa-square fa-stack-2x dark__text-opacity-50 text-success-light" data-fa-transform="down-4 rotate--10 left-4"></span><span class="fa-solid fa-circle fa-stack-2x stack-circle text-stats-circle-success" data-fa-transform="up-4 right-3 grow-2"></span><span class="fa-stack-1x fa-solid fa-star text-success " data-fa-transform="shrink-2 up-8 right-6"></span></span>
                <div class="ms-3">
                  <h4 class="mb-0">57 new orders</h4>
                  <p class="text-body-secondary fs-9 mb-0">Awating processing</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-auto">
              <div class="d-flex align-items-center"><span class="fa-stack" style="min-height: 46px;min-width: 46px;"><span class="fa-solid fa-square fa-stack-2x dark__text-opacity-50 text-warning-light" data-fa-transform="down-4 rotate--10 left-4"></span><span class="fa-solid fa-circle fa-stack-2x stack-circle text-stats-circle-warning" data-fa-transform="up-4 right-3 grow-2"></span><span class="fa-stack-1x fa-solid fa-pause text-warning " data-fa-transform="shrink-2 up-8 right-6"></span></span>
                <div class="ms-3">
                  <h4 class="mb-0">5 orders</h4>
                  <p class="text-body-secondary fs-9 mb-0">On hold</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-auto">
              <div class="d-flex align-items-center"><span class="fa-stack" style="min-height: 46px;min-width: 46px;"><span class="fa-solid fa-square fa-stack-2x dark__text-opacity-50 text-danger-light" data-fa-transform="down-4 rotate--10 left-4"></span><span class="fa-solid fa-circle fa-stack-2x stack-circle text-stats-circle-danger" data-fa-transform="up-4 right-3 grow-2"></span><span class="fa-stack-1x fa-solid fa-xmark text-danger " data-fa-transform="shrink-2 up-8 right-6"></span></span>
                <div class="ms-3">
                  <h4 class="mb-0">15 products</h4>
                  <p class="text-body-secondary fs-9 mb-0">Out of stock</p>
                </div>
              </div>
            </div>
          </div>
          <hr class="bg-body-secondary mb-6 mt-4" />
          <div class="row flex-between-center mb-4 g-3">
            <div class="col-auto">
              <h3>Total sells</h3>
              <p class="text-body-tertiary lh-sm mb-0">Payment received across all channels</p>
            </div>
            <div class="col-8 col-sm-4">
              <select class="form-select form-select-sm" id="select-gross-revenue-month">
                <option>Mar 1 - 31, 2022</option>
                <option>April 1 - 30, 2022</option>
                <option>May 1 - 31, 2022</option>
              </select>
            </div>
          </div>
          <div class="echart-total-sales-chart" style="min-height:320px;width:100%"></div>
        </div>
        <div class="col-12 col-xxl-6">
          <div class="row g-3">
            <div class="col-12 col-md-6">
              <div class="card h-100">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <div>
                      <h5 class="mb-1">Total orders<span class="badge badge-phoenix badge-phoenix-warning rounded-pill fs-9 ms-2"><span class="badge-label">-6.8%</span></span></h5>
                      <h6 class="text-body-tertiary">Last 7 days</h6>
                    </div>
                    <h4>16,247</h4>
                  </div>
                  <div class="d-flex justify-content-center px-4 py-6">
                    <div class="echart-total-orders" style="height:85px;width:115px"></div>
                  </div>
                  <div class="mt-2">
                    <div class="d-flex align-items-center mb-2">
                      <div class="bullet-item bg-primary me-2"></div>
                      <h6 class="text-body fw-semibold flex-1 mb-0">Completed</h6>
                      <h6 class="text-body fw-semibold mb-0">52%</h6>
                    </div>
                    <div class="d-flex align-items-center">
                      <div class="bullet-item bg-primary-subtle me-2"></div>
                      <h6 class="text-body fw-semibold flex-1 mb-0">Pending payment</h6>
                      <h6 class="text-body fw-semibold mb-0">48%</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="card h-100">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <div>
                      <h5 class="mb-1">New customers<span class="badge badge-phoenix badge-phoenix-warning rounded-pill fs-9 ms-2"> <span class="badge-label">+26.5%</span></span></h5>
                      <h6 class="text-body-tertiary">Last 7 days</h6>
                    </div>
                    <h4>356</h4>
                  </div>
                  <div class="pb-0 pt-4">
                    <div class="echarts-new-customers" style="height:180px;width:100%;"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="card h-100">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <div>
                      <h5 class="mb-2">Top coupons</h5>
                      <h6 class="text-body-tertiary">Last 7 days</h6>
                    </div>
                  </div>
                  <div class="pb-4 pt-3">
                    <div class="echart-top-coupons" style="height:115px;width:100%;"></div>
                  </div>
                  <div>
                    <div class="d-flex align-items-center mb-2">
                      <div class="bullet-item bg-primary me-2"></div>
                      <h6 class="text-body fw-semibold flex-1 mb-0">Percentage discount</h6>
                      <h6 class="text-body fw-semibold mb-0">72%</h6>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                      <div class="bullet-item bg-primary-lighter me-2"></div>
                      <h6 class="text-body fw-semibold flex-1 mb-0">Fixed card discount</h6>
                      <h6 class="text-body fw-semibold mb-0">18%</h6>
                    </div>
                    <div class="d-flex align-items-center">
                      <div class="bullet-item bg-info-dark me-2"></div>
                      <h6 class="text-body fw-semibold flex-1 mb-0">Fixed product discount</h6>
                      <h6 class="text-body fw-semibold mb-0">10%</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="card h-100">
                <div class="card-body d-flex flex-column">
                  <div class="d-flex justify-content-between">
                    <div>
                      <h5 class="mb-2">Paying vs non paying</h5>
                      <h6 class="text-body-tertiary">Last 7 days</h6>
                    </div>
                  </div>
                  <div class="d-flex justify-content-center pt-3 flex-1">
                    <div class="echarts-paying-customer-chart" style="height:100%;width:100%;"></div>
                  </div>
                  <div class="mt-3">
                    <div class="d-flex align-items-center mb-2">
                      <div class="bullet-item bg-primary me-2"></div>
                      <h6 class="text-body fw-semibold flex-1 mb-0">Paying customer</h6>
                      <h6 class="text-body fw-semibold mb-0">30%</h6>
                    </div>
                    <div class="d-flex align-items-center">
                      <div class="bullet-item bg-primary-subtle me-2"></div>
                      <h6 class="text-body fw-semibold flex-1 mb-0">Non-paying customer</h6>
                      <h6 class="text-body fw-semibold mb-0">70%</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis pt-7 border-y">
      <div data-list='{"valueNames":["product","customer","rating","review","time"],"page":6}'>
        <div class="row align-items-end justify-content-between pb-5 g-3">
          <div class="col-auto">
            <h3>Latest reviews</h3>
            <p class="text-body-tertiary lh-sm mb-0">Payment received across all channels</p>
          </div>
          <div class="col-12 col-md-auto">
            <div class="row g-2 gy-3">
              <div class="col-auto flex-1">
                <div class="search-box">
                  <form class="position-relative">
                    <input class="form-control search-input search form-control-sm" type="search" placeholder="Search" aria-label="Search" />
                    <span class="fas fa-search search-box-icon"></span>

                  </form>
                </div>
              </div>
              <div class="col-auto">
                <button class="btn btn-sm btn-phoenix-secondary bg-body-emphasis bg-body-hover me-2" type="button">All products</button>
                <button class="btn btn-sm btn-phoenix-secondary bg-body-emphasis bg-body-hover action-btn" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h" data-fa-transform="shrink-2"></span></button>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="table-responsive mx-n1 px-1 scrollbar">
          <table class="table fs-9 mb-0 border-top border-translucent">
            <thead>
              <tr>
                <th class="white-space-nowrap fs-9 ps-0 align-middle">
                  <div class="form-check mb-0 fs-8">
                    <input class="form-check-input" id="checkbox-bulk-reviews-select" type="checkbox" data-bulk-select='{"body":"table-latest-review-body"}' />
                  </div>
                </th>
                <th class="sort white-space-nowrap align-middle" scope="col"></th>
                <th class="sort white-space-nowrap align-middle" scope="col" style="min-width:360px;" data-sort="product">PRODUCT</th>
                <th class="sort align-middle" scope="col" data-sort="customer" style="min-width:200px;">CUSTOMER</th>
                <th class="sort align-middle" scope="col" data-sort="rating" style="min-width:110px;">RATING</th>
                <th class="sort align-middle" scope="col" style="max-width:350px;" data-sort="review">REVIEW</th>
                <th class="sort text-start ps-5 align-middle" scope="col" data-sort="status">STATUS</th>
                <th class="sort text-end align-middle" scope="col" data-sort="time">TIME</th>
                <th class="sort text-end pe-0 align-middle" scope="col"></th>
              </tr>
            </thead>
            <tbody class="list" id="table-latest-review-body">
              <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                <td class="fs-9 align-middle ps-0">
                  <div class="form-check mb-0 fs-8">
                    <input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"Fitbit Sense Advanced Smartwatch with Tools for Heart Health, Stress Management & Skin Temperature Trends, Carbon/Graphite, One Size (S & L Bands)","productImage":"/products/60x60/1.png","customer":{"name":"Richard Dawkins","avatar":""},"rating":5,"review":"This Fitbit is fantastic! I was trying to be in better shape and needed some motivation, so I decided to treat myself to a new Fitbit.","status":{"title":"Approved","badge":"success","icon":"check"},"time":"Just now"}' />
                  </div>
                </td>
                <td class="align-middle product white-space-nowrap py-0"><a class="d-block rounded-2 border border-translucent" href="apps/e-commerce/landing/product-details.html"><img src="assets/img//products/60x60/1.png" alt="" width="53" /></a></td>
                <td class="align-middle product white-space-nowrap"><a class="fw-semibold" href="apps/e-commerce/landing/product-details.html">Fitbit Sense Advanced Smartwatch with Tools fo...</a></td>
                <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-body" href="apps/e-commerce/landing/profile.html">
                    <div class="avatar avatar-l">
                      <div class="avatar-name rounded-circle"><span>R</span></div>
                    </div>
                    <h6 class="mb-0 ms-3 text-body">Richard Dawkins</h6>
                  </a></td>
                <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span>
                </td>
                <td class="align-middle review" style="min-width:350px;">
                  <p class="fs-9 fw-semibold text-body-highlight mb-0">This Fitbit is fantastic! I was trying to be in better shape and needed some motivation, so I decided to treat myself to a new Fitbit.</p>
                </td>
                <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label">Approved</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                <td class="align-middle text-end time white-space-nowrap">
                  <div class="hover-hide">
                    <h6 class="text-body-highlight mb-0">Just now</h6>
                  </div>
                </td>
                <td class="align-middle white-space-nowrap text-end pe-0">
                  <div class="position-relative">
                    <div class="hover-actions">
                      <button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span class="fas fa-check"></span></button>
                      <button class="btn btn-sm btn-phoenix-secondary fs-10"><span class="fas fa-trash"></span></button>
                    </div>
                  </div>
                  <div class="btn-reveal-trigger position-static">
                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                <td class="fs-9 align-middle ps-0">
                  <div class="form-check mb-0 fs-8">
                    <input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"iPhone 13 pro max-Pacific Blue-128GB storage","productImage":"/products/60x60/2.png","customer":{"name":"Ashley Garrett","avatar":"/team/40x40/59.webp"},"rating":3,"review":"The order was delivered ahead of schedule. To give us additional time, you should leave the packaging sealed with plastic.","status":{"title":"Approved","badge":"success","icon":"check"},"time":"Just now"}' />
                  </div>
                </td>
                <td class="align-middle product white-space-nowrap py-0"><a class="d-block rounded-2 border border-translucent" href="apps/e-commerce/landing/product-details.html"><img src="assets/img//products/60x60/2.png" alt="" width="53" /></a></td>
                <td class="align-middle product white-space-nowrap"><a class="fw-semibold" href="apps/e-commerce/landing/product-details.html">iPhone 13 pro max-Pacific Blue-128GB storage</a></td>
                <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-body" href="apps/e-commerce/landing/profile.html">
                    <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/40x40/59.webp" alt="" />
                    </div>
                    <h6 class="mb-0 ms-3 text-body">Ashley Garrett</h6>
                  </a></td>
                <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span>
                </td>
                <td class="align-middle review" style="min-width:350px;">
                  <p class="fs-9 fw-semibold text-body-highlight mb-0">The order was delivered ahead of schedule. To give us additional time, you should leave the packaging sealed with plastic.</p>
                </td>
                <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label">Approved</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                <td class="align-middle text-end time white-space-nowrap">
                  <div class="hover-hide">
                    <h6 class="text-body-highlight mb-0">Just now</h6>
                  </div>
                </td>
                <td class="align-middle white-space-nowrap text-end pe-0">
                  <div class="position-relative">
                    <div class="hover-actions">
                      <button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span class="fas fa-check"></span></button>
                      <button class="btn btn-sm btn-phoenix-secondary fs-10"><span class="fas fa-trash"></span></button>
                    </div>
                  </div>
                  <div class="btn-reveal-trigger position-static">
                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                <td class="fs-9 align-middle ps-0">
                  <div class="form-check mb-0 fs-8">
                    <input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"Apple MacBook Pro 13 inch-M1-8/256GB-space","productImage":"/products/60x60/3.png","customer":{"name":"Woodrow Burton","avatar":"/team/40x40/58.webp"},"rating":4.5,"review":"It&#39;s a Mac, after all. Once you&#39;ve gone Mac, there&#39;s no going back. My first Mac lasted over nine years, and this is my second.","status":{"title":"Pending","badge":"warning","icon":"clock"},"time":"Just now"}' />
                  </div>
                </td>
                <td class="align-middle product white-space-nowrap py-0"><a class="d-block rounded-2 border border-translucent" href="apps/e-commerce/landing/product-details.html"><img src="assets/img//products/60x60/3.png" alt="" width="53" /></a></td>
                <td class="align-middle product white-space-nowrap"><a class="fw-semibold" href="apps/e-commerce/landing/product-details.html">Apple MacBook Pro 13 inch-M1-8/256GB-space</a></td>
                <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-body" href="apps/e-commerce/landing/profile.html">
                    <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/40x40/58.webp" alt="" />
                    </div>
                    <h6 class="mb-0 ms-3 text-body">Woodrow Burton</h6>
                  </a></td>
                <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt star-icon text-warning"></span>
                </td>
                <td class="align-middle review" style="min-width:350px;">
                  <p class="fs-9 fw-semibold text-body-highlight mb-0">It's a Mac, after all. Once you've gone Mac, there's no going back. My first Mac lasted over nine years, and this is my second.</p>
                </td>
                <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs-10 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="clock" style="height:12.8px;width:12.8px;"></span></span></td>
                <td class="align-middle text-end time white-space-nowrap">
                  <div class="hover-hide">
                    <h6 class="text-body-highlight mb-0">Just now</h6>
                  </div>
                </td>
                <td class="align-middle white-space-nowrap text-end pe-0">
                  <div class="position-relative">
                    <div class="hover-actions">
                      <button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span class="fas fa-check"></span></button>
                      <button class="btn btn-sm btn-phoenix-secondary fs-10"><span class="fas fa-trash"></span></button>
                    </div>
                  </div>
                  <div class="btn-reveal-trigger position-static">
                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                <td class="fs-9 align-middle ps-0">
                  <div class="form-check mb-0 fs-8">
                    <input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"Apple iMac 24\" 4K Retina Display M1 8 Core CPU, 7 Core GPU, 256GB SSD, Green (MJV83ZP/A) 2021","productImage":"/products/60x60/4.png","customer":{"name":"Eric McGee","avatar":"/team/40x40/avatar.webp","avatarPlaceholder":true},"rating":3,"review":"Personally, I like the minimalist style, but I wouldn&#39;t choose it if I were searching for a computer that I would use frequently. It&#39;s not horrible in terms of speed and power, but the","status":{"title":"Pending","badge":"warning","icon":"clock"},"time":"Nov 09, 3:23 AM"}' />
                  </div>
                </td>
                <td class="align-middle product white-space-nowrap py-0"><a class="d-block rounded-2 border border-translucent" href="apps/e-commerce/landing/product-details.html"><img src="assets/img//products/60x60/4.png" alt="" width="53" /></a></td>
                <td class="align-middle product white-space-nowrap"><a class="fw-semibold" href="apps/e-commerce/landing/product-details.html">Apple iMac 24&quot; 4K Retina Display M1 8 Core CPU...</a></td>
                <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-body" href="apps/e-commerce/landing/profile.html">
                    <div class="avatar avatar-l"><img class="rounded-circle avatar-placeholder" src="assets/img/team/40x40/avatar.webp" alt="" />
                    </div>
                    <h6 class="mb-0 ms-3 text-body">Eric McGee</h6>
                  </a></td>
                <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span>
                </td>
                <td class="align-middle review" style="min-width:350px;">
                  <p class="fs-9 fw-semibold text-body-highlight mb-0">Personally, I like the minimalist style, but I wouldn't choose it if I were searching for a computer that I would use frequently. It's...<a href='#!'>See more</a></p>
                </td>
                <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs-10 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="clock" style="height:12.8px;width:12.8px;"></span></span></td>
                <td class="align-middle text-end time white-space-nowrap">
                  <div class="hover-hide">
                    <h6 class="text-body-highlight mb-0">Nov 09, 3:23 AM</h6>
                  </div>
                </td>
                <td class="align-middle white-space-nowrap text-end pe-0">
                  <div class="position-relative">
                    <div class="hover-actions">
                      <button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span class="fas fa-check"></span></button>
                      <button class="btn btn-sm btn-phoenix-secondary fs-10"><span class="fas fa-trash"></span></button>
                    </div>
                  </div>
                  <div class="btn-reveal-trigger position-static">
                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                <td class="fs-9 align-middle ps-0">
                  <div class="form-check mb-0 fs-8">
                    <input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"Razer Kraken v3 x Wired 7.1 Surroung Sound Gaming headset","productImage":"/products/60x60/5.png","customer":{"name":"Kim Carroll","avatar":"/team/40x40/avatar.webp","avatarPlaceholder":true},"rating":4,"review":"It performs exactly as expected. There are three of these in the family.","status":{"title":"Pending","badge":"warning","icon":"clock"},"time":"Nov 09, 2:15 PM"}' />
                  </div>
                </td>
                <td class="align-middle product white-space-nowrap py-0"><a class="d-block rounded-2 border border-translucent" href="apps/e-commerce/landing/product-details.html"><img src="assets/img//products/60x60/5.png" alt="" width="53" /></a></td>
                <td class="align-middle product white-space-nowrap"><a class="fw-semibold" href="apps/e-commerce/landing/product-details.html">Razer Kraken v3 x Wired 7.1 Surroung Sound Gam...</a></td>
                <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-body" href="apps/e-commerce/landing/profile.html">
                    <div class="avatar avatar-l"><img class="rounded-circle avatar-placeholder" src="assets/img/team/40x40/avatar.webp" alt="" />
                    </div>
                    <h6 class="mb-0 ms-3 text-body">Kim Carroll</h6>
                  </a></td>
                <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span>
                </td>
                <td class="align-middle review" style="min-width:350px;">
                  <p class="fs-9 fw-semibold text-body-highlight mb-0">It performs exactly as expected. There are three of these in the family.</p>
                </td>
                <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs-10 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="clock" style="height:12.8px;width:12.8px;"></span></span></td>
                <td class="align-middle text-end time white-space-nowrap">
                  <div class="hover-hide">
                    <h6 class="text-body-highlight mb-0">Nov 09, 2:15 PM</h6>
                  </div>
                </td>
                <td class="align-middle white-space-nowrap text-end pe-0">
                  <div class="position-relative">
                    <div class="hover-actions">
                      <button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span class="fas fa-check"></span></button>
                      <button class="btn btn-sm btn-phoenix-secondary fs-10"><span class="fas fa-trash"></span></button>
                    </div>
                  </div>
                  <div class="btn-reveal-trigger position-static">
                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                <td class="fs-9 align-middle ps-0">
                  <div class="form-check mb-0 fs-8">
                    <input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"PlayStation 5 DualSense Wireless Controller","productImage":"/products/60x60/6.png","customer":{"name":"Barbara Lucas","avatar":"/team/40x40/57.webp"},"rating":4,"review":"The controller is quite comfy for me. Despite its increased size, the controller still fits well in my hands.","status":{"title":"Approved","badge":"success","icon":"check"},"time":"Nov 08, 8:53 AM"}' />
                  </div>
                </td>
                <td class="align-middle product white-space-nowrap py-0"><a class="d-block rounded-2 border border-translucent" href="apps/e-commerce/landing/product-details.html"><img src="assets/img//products/60x60/6.png" alt="" width="53" /></a></td>
                <td class="align-middle product white-space-nowrap"><a class="fw-semibold" href="apps/e-commerce/landing/product-details.html">PlayStation 5 DualSense Wireless Controller</a></td>
                <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-body" href="apps/e-commerce/landing/profile.html">
                    <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/40x40/57.webp" alt="" />
                    </div>
                    <h6 class="mb-0 ms-3 text-body">Barbara Lucas</h6>
                  </a></td>
                <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span>
                </td>
                <td class="align-middle review" style="min-width:350px;">
                  <p class="fs-9 fw-semibold text-body-highlight mb-0">The controller is quite comfy for me. Despite its increased size, the controller still fits well in my hands.</p>
                </td>
                <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label">Approved</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                <td class="align-middle text-end time white-space-nowrap">
                  <div class="hover-hide">
                    <h6 class="text-body-highlight mb-0">Nov 08, 8:53 AM</h6>
                  </div>
                </td>
                <td class="align-middle white-space-nowrap text-end pe-0">
                  <div class="position-relative">
                    <div class="hover-actions">
                      <button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span class="fas fa-check"></span></button>
                      <button class="btn btn-sm btn-phoenix-secondary fs-10"><span class="fas fa-trash"></span></button>
                    </div>
                  </div>
                  <div class="btn-reveal-trigger position-static">
                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                <td class="fs-9 align-middle ps-0">
                  <div class="form-check mb-0 fs-8">
                    <input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"2021 Apple 12.9-inch iPad Pro (Wi‑Fi, 128GB) - Space Gray","productImage":"/products/60x60/7.png","customer":{"name":"Ansolo Lazinatov","avatar":"/team/40x40/3.webp"},"rating":4.5,"review":"The response time and service I received when contacted the designers were Phenomenal!","status":{"title":"Pending","badge":"warning","icon":"clock"},"time":"Nov 07, 9:00 PM"}' />
                  </div>
                </td>
                <td class="align-middle product white-space-nowrap py-0"><a class="d-block rounded-2 border border-translucent" href="apps/e-commerce/landing/product-details.html"><img src="assets/img//products/60x60/7.png" alt="" width="53" /></a></td>
                <td class="align-middle product white-space-nowrap"><a class="fw-semibold" href="apps/e-commerce/landing/product-details.html">2021 Apple 12.9-inch iPad Pro (Wi‑Fi, 128GB) -...</a></td>
                <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-body" href="apps/e-commerce/landing/profile.html">
                    <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/40x40/3.webp" alt="" />
                    </div>
                    <h6 class="mb-0 ms-3 text-body">Ansolo Lazinatov</h6>
                  </a></td>
                <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt star-icon text-warning"></span>
                </td>
                <td class="align-middle review" style="min-width:350px;">
                  <p class="fs-9 fw-semibold text-body-highlight mb-0">The response time and service I received when contacted the designers were Phenomenal!</p>
                </td>
                <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs-10 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="clock" style="height:12.8px;width:12.8px;"></span></span></td>
                <td class="align-middle text-end time white-space-nowrap">
                  <div class="hover-hide">
                    <h6 class="text-body-highlight mb-0">Nov 07, 9:00 PM</h6>
                  </div>
                </td>
                <td class="align-middle white-space-nowrap text-end pe-0">
                  <div class="position-relative">
                    <div class="hover-actions">
                      <button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span class="fas fa-check"></span></button>
                      <button class="btn btn-sm btn-phoenix-secondary fs-10"><span class="fas fa-trash"></span></button>
                    </div>
                  </div>
                  <div class="btn-reveal-trigger position-static">
                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                <td class="fs-9 align-middle ps-0">
                  <div class="form-check mb-0 fs-8">
                    <input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"Amazon Basics Matte Black Wired Keyboard - US Layout (QWERTY)","productImage":"/products/60x60/8.png","customer":{"name":"Emma watson","avatar":"/team/40x40/26.webp"},"rating":3,"review":"I have started using this theme in the last week and it has really impressed me very much, the support is second to none.","status":{"title":"Pending","badge":"warning","icon":"clock"},"time":"Nov 07, 11:20 AM"}' />
                  </div>
                </td>
                <td class="align-middle product white-space-nowrap py-0"><a class="d-block rounded-2 border border-translucent" href="apps/e-commerce/landing/product-details.html"><img src="assets/img//products/60x60/8.png" alt="" width="53" /></a></td>
                <td class="align-middle product white-space-nowrap"><a class="fw-semibold" href="apps/e-commerce/landing/product-details.html">Amazon Basics Matte Black Wired Keyboard - US ...</a></td>
                <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-body" href="apps/e-commerce/landing/profile.html">
                    <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/40x40/26.webp" alt="" />
                    </div>
                    <h6 class="mb-0 ms-3 text-body">Emma watson</h6>
                  </a></td>
                <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span>
                </td>
                <td class="align-middle review" style="min-width:350px;">
                  <p class="fs-9 fw-semibold text-body-highlight mb-0">I have started using this theme in the last week and it has really impressed me very much, the support is second to none.</p>
                </td>
                <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs-10 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="clock" style="height:12.8px;width:12.8px;"></span></span></td>
                <td class="align-middle text-end time white-space-nowrap">
                  <div class="hover-hide">
                    <h6 class="text-body-highlight mb-0">Nov 07, 11:20 AM</h6>
                  </div>
                </td>
                <td class="align-middle white-space-nowrap text-end pe-0">
                  <div class="position-relative">
                    <div class="hover-actions">
                      <button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span class="fas fa-check"></span></button>
                      <button class="btn btn-sm btn-phoenix-secondary fs-10"><span class="fas fa-trash"></span></button>
                    </div>
                  </div>
                  <div class="btn-reveal-trigger position-static">
                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                <td class="fs-9 align-middle ps-0">
                  <div class="form-check mb-0 fs-8">
                    <input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"Amazon Basics Mesh, Mid-Back, Swivel Office Desk Chair with Armrests, Black","productImage":"/products/60x60/9.png","customer":{"name":"Rowen Atkinson","avatar":"/team/40x40/29.webp"},"rating":5,"review":"The best experience we could hope for. Customer service team is amazing and the quality of their products is unsurpassed. Great theme too!","status":{"title":"Approved","badge":"success","icon":"check"},"time":"Nov 07, 2:00 PM"}' />
                  </div>
                </td>
                <td class="align-middle product white-space-nowrap py-0"><a class="d-block rounded-2 border border-translucent" href="apps/e-commerce/landing/product-details.html"><img src="assets/img//products/60x60/9.png" alt="" width="53" /></a></td>
                <td class="align-middle product white-space-nowrap"><a class="fw-semibold" href="apps/e-commerce/landing/product-details.html">Amazon Basics Mesh, Mid-Back, Swivel Office De...</a></td>
                <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-body" href="apps/e-commerce/landing/profile.html">
                    <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/40x40/29.webp" alt="" />
                    </div>
                    <h6 class="mb-0 ms-3 text-body">Rowen Atkinson</h6>
                  </a></td>
                <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span>
                </td>
                <td class="align-middle review" style="min-width:350px;">
                  <p class="fs-9 fw-semibold text-body-highlight mb-0">The best experience we could hope for. Customer service team is amazing and the quality of their products is unsurpassed. Great theme ...<a href='#!'>See more</a></p>
                </td>
                <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label">Approved</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                <td class="align-middle text-end time white-space-nowrap">
                  <div class="hover-hide">
                    <h6 class="text-body-highlight mb-0">Nov 07, 2:00 PM</h6>
                  </div>
                </td>
                <td class="align-middle white-space-nowrap text-end pe-0">
                  <div class="position-relative">
                    <div class="hover-actions">
                      <button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span class="fas fa-check"></span></button>
                      <button class="btn btn-sm btn-phoenix-secondary fs-10"><span class="fas fa-trash"></span></button>
                    </div>
                  </div>
                  <div class="btn-reveal-trigger position-static">
                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                <td class="fs-9 align-middle ps-0">
                  <div class="form-check mb-0 fs-8">
                    <input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"Apple Magic Mouse (Wireless, Rechargable) - Silver","productImage":"/products/60x60/10.png","customer":{"name":"Anthony Hopkins","avatar":""},"rating":4,"review":"This template has allowed me to convert my existing web app into a great looking, easy to use UI in less than 2 weeks. Very easy to use and understand and has a wide range of ready to use elements. ","status":{"title":"Approved","badge":"success","icon":"check"},"time":"Nov 06, 8:00 AM"}' />
                  </div>
                </td>
                <td class="align-middle product white-space-nowrap py-0"><a class="d-block rounded-2 border border-translucent" href="apps/e-commerce/landing/product-details.html"><img src="assets/img//products/60x60/10.png" alt="" width="53" /></a></td>
                <td class="align-middle product white-space-nowrap"><a class="fw-semibold" href="apps/e-commerce/landing/product-details.html">Apple Magic Mouse (Wireless, Rechargable) - Si...</a></td>
                <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-body" href="apps/e-commerce/landing/profile.html">
                    <div class="avatar avatar-l">
                      <div class="avatar-name rounded-circle"><span>A</span></div>
                    </div>
                    <h6 class="mb-0 ms-3 text-body">Anthony Hopkins</h6>
                  </a></td>
                <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span>
                </td>
                <td class="align-middle review" style="min-width:350px;">
                  <p class="fs-9 fw-semibold text-body-highlight mb-0">This template has allowed me to convert my existing web app into a great looking, easy to use UI in less than 2 weeks. Very easy to us...<a href='#!'>See more</a></p>
                </td>
                <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label">Approved</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                <td class="align-middle text-end time white-space-nowrap">
                  <div class="hover-hide">
                    <h6 class="text-body-highlight mb-0">Nov 06, 8:00 AM</h6>
                  </div>
                </td>
                <td class="align-middle white-space-nowrap text-end pe-0">
                  <div class="position-relative">
                    <div class="hover-actions">
                      <button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span class="fas fa-check"></span></button>
                      <button class="btn btn-sm btn-phoenix-secondary fs-10"><span class="fas fa-trash"></span></button>
                    </div>
                  </div>
                  <div class="btn-reveal-trigger position-static">
                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                <td class="fs-9 align-middle ps-0">
                  <div class="form-check mb-0 fs-8">
                    <input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"Echo Dot (4th Gen) _ Smart speaker with Alexa _ Glacier White","productImage":"/products/60x60/11.png","customer":{"name":"Jennifer Schramm","avatar":"/team/40x40/8.webp"},"rating":4.5,"review":"The theme is really beautiful and the support answer very quickly and is friendly. Buy it, you will not regret it.","status":{"title":"Pending","badge":"warning","icon":"clock"},"time":"Nov 05, 4:00 AM"}' />
                  </div>
                </td>
                <td class="align-middle product white-space-nowrap py-0"><a class="d-block rounded-2 border border-translucent" href="apps/e-commerce/landing/product-details.html"><img src="assets/img//products/60x60/11.png" alt="" width="53" /></a></td>
                <td class="align-middle product white-space-nowrap"><a class="fw-semibold" href="apps/e-commerce/landing/product-details.html">Echo Dot (4th Gen) _ Smart speaker with Alexa ...</a></td>
                <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-body" href="apps/e-commerce/landing/profile.html">
                    <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/40x40/8.webp" alt="" />
                    </div>
                    <h6 class="mb-0 ms-3 text-body">Jennifer Schramm</h6>
                  </a></td>
                <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt star-icon text-warning"></span>
                </td>
                <td class="align-middle review" style="min-width:350px;">
                  <p class="fs-9 fw-semibold text-body-highlight mb-0">The theme is really beautiful and the support answer very quickly and is friendly. Buy it, you will not regret it.</p>
                </td>
                <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs-10 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="clock" style="height:12.8px;width:12.8px;"></span></span></td>
                <td class="align-middle text-end time white-space-nowrap">
                  <div class="hover-hide">
                    <h6 class="text-body-highlight mb-0">Nov 05, 4:00 AM</h6>
                  </div>
                </td>
                <td class="align-middle white-space-nowrap text-end pe-0">
                  <div class="position-relative">
                    <div class="hover-actions">
                      <button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span class="fas fa-check"></span></button>
                      <button class="btn btn-sm btn-phoenix-secondary fs-10"><span class="fas fa-trash"></span></button>
                    </div>
                  </div>
                  <div class="btn-reveal-trigger position-static">
                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                <td class="fs-9 align-middle ps-0">
                  <div class="form-check mb-0 fs-8">
                    <input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"HORI Racing Wheel Apex for PlayStation 4_3, and PC","productImage":"/products/60x60/12.png","customer":{"name":"Raymond Mims","avatar":"/team/40x40/avatar.webp","avatarPlaceholder":true},"rating":4,"review":"As others mentioned, the team behind this theme is super responsive. I sent a message during the weekend, fully expecting a response after the weekend, but I got one within minutes, and I was unblocked.","status":{"title":"Approved","badge":"success","icon":"check"},"time":"Nov 04, 6:53 PM"}' />
                  </div>
                </td>
                <td class="align-middle product white-space-nowrap py-0"><a class="d-block rounded-2 border border-translucent" href="apps/e-commerce/landing/product-details.html"><img src="assets/img//products/60x60/12.png" alt="" width="53" /></a></td>
                <td class="align-middle product white-space-nowrap"><a class="fw-semibold" href="apps/e-commerce/landing/product-details.html">HORI Racing Wheel Apex for PlayStation 4_3, an...</a></td>
                <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-body" href="apps/e-commerce/landing/profile.html">
                    <div class="avatar avatar-l"><img class="rounded-circle avatar-placeholder" src="assets/img/team/40x40/avatar.webp" alt="" />
                    </div>
                    <h6 class="mb-0 ms-3 text-body">Raymond Mims</h6>
                  </a></td>
                <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span>
                </td>
                <td class="align-middle review" style="min-width:350px;">
                  <p class="fs-9 fw-semibold text-body-highlight mb-0">As others mentioned, the team behind this theme is super responsive. I sent a message during the weekend, fully expecting a response a...<a href='#!'>See more</a></p>
                </td>
                <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label">Approved</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                <td class="align-middle text-end time white-space-nowrap">
                  <div class="hover-hide">
                    <h6 class="text-body-highlight mb-0">Nov 04, 6:53 PM</h6>
                  </div>
                </td>
                <td class="align-middle white-space-nowrap text-end pe-0">
                  <div class="position-relative">
                    <div class="hover-actions">
                      <button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span class="fas fa-check"></span></button>
                      <button class="btn btn-sm btn-phoenix-secondary fs-10"><span class="fas fa-trash"></span></button>
                    </div>
                  </div>
                  <div class="btn-reveal-trigger position-static">
                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                <td class="fs-9 align-middle ps-0">
                  <div class="form-check mb-0 fs-8">
                    <input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"Nintendo Switch with Neon Blue and Neon Red Joy‑Con - HAC-001(-01)","productImage":"/products/60x60/13.png","customer":{"name":"Michael Jenkins","avatar":"/team/40x40/9.webp"},"rating":5,"review":"I had a bit of a hard time at first but after I contacted the team they were able to help me set up the theme. It&#39;s really good and I highly recommend it to everyone.","status":{"title":"Pending","badge":"warning","icon":"clock"},"time":"Nov 04, 12:00 PM"}' />
                  </div>
                </td>
                <td class="align-middle product white-space-nowrap py-0"><a class="d-block rounded-2 border border-translucent" href="apps/e-commerce/landing/product-details.html"><img src="assets/img//products/60x60/13.png" alt="" width="53" /></a></td>
                <td class="align-middle product white-space-nowrap"><a class="fw-semibold" href="apps/e-commerce/landing/product-details.html">Nintendo Switch with Neon Blue and Neon Red Jo...</a></td>
                <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-body" href="apps/e-commerce/landing/profile.html">
                    <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/40x40/9.webp" alt="" />
                    </div>
                    <h6 class="mb-0 ms-3 text-body">Michael Jenkins</h6>
                  </a></td>
                <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span>
                </td>
                <td class="align-middle review" style="min-width:350px;">
                  <p class="fs-9 fw-semibold text-body-highlight mb-0">I had a bit of a hard time at first but after I contacted the team they were able to help me set up the theme. It's really good and I ...<a href='#!'>See more</a></p>
                </td>
                <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs-10 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="clock" style="height:12.8px;width:12.8px;"></span></span></td>
                <td class="align-middle text-end time white-space-nowrap">
                  <div class="hover-hide">
                    <h6 class="text-body-highlight mb-0">Nov 04, 12:00 PM</h6>
                  </div>
                </td>
                <td class="align-middle white-space-nowrap text-end pe-0">
                  <div class="position-relative">
                    <div class="hover-actions">
                      <button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span class="fas fa-check"></span></button>
                      <button class="btn btn-sm btn-phoenix-secondary fs-10"><span class="fas fa-trash"></span></button>
                    </div>
                  </div>
                  <div class="btn-reveal-trigger position-static">
                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                <td class="fs-9 align-middle ps-0">
                  <div class="form-check mb-0 fs-8">
                    <input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"Oculus Rift S PC-Powered VR Gaming Headset","productImage":"/products/60x60/14.png","customer":{"name":"Kristine Cadena","avatar":"/team/40x40/avatar.webp","avatarPlaceholder":true},"rating":5,"review":"Excellent. All my doubts were answered by the team quickly. I highly recommend it.","status":{"title":"Pending","badge":"warning","icon":"clock"},"time":"Nov 03, 8:53 AM"}' />
                  </div>
                </td>
                <td class="align-middle product white-space-nowrap py-0"><a class="d-block rounded-2 border border-translucent" href="apps/e-commerce/landing/product-details.html"><img src="assets/img//products/60x60/14.png" alt="" width="53" /></a></td>
                <td class="align-middle product white-space-nowrap"><a class="fw-semibold" href="apps/e-commerce/landing/product-details.html">Oculus Rift S PC-Powered VR Gaming Headset</a></td>
                <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-body" href="apps/e-commerce/landing/profile.html">
                    <div class="avatar avatar-l"><img class="rounded-circle avatar-placeholder" src="assets/img/team/40x40/avatar.webp" alt="" />
                    </div>
                    <h6 class="mb-0 ms-3 text-body">Kristine Cadena</h6>
                  </a></td>
                <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span>
                </td>
                <td class="align-middle review" style="min-width:350px;">
                  <p class="fs-9 fw-semibold text-body-highlight mb-0">Excellent. All my doubts were answered by the team quickly. I highly recommend it.</p>
                </td>
                <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs-10 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="clock" style="height:12.8px;width:12.8px;"></span></span></td>
                <td class="align-middle text-end time white-space-nowrap">
                  <div class="hover-hide">
                    <h6 class="text-body-highlight mb-0">Nov 03, 8:53 AM</h6>
                  </div>
                </td>
                <td class="align-middle white-space-nowrap text-end pe-0">
                  <div class="position-relative">
                    <div class="hover-actions">
                      <button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span class="fas fa-check"></span></button>
                      <button class="btn btn-sm btn-phoenix-secondary fs-10"><span class="fas fa-trash"></span></button>
                    </div>
                  </div>
                  <div class="btn-reveal-trigger position-static">
                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                <td class="fs-9 align-middle ps-0">
                  <div class="form-check mb-0 fs-8">
                    <input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"Sony X85J 75 Inch Sony 4K Ultra HD LED Smart Google TV","productImage":"/products/60x60/15.png","customer":{"name":"Suzanne Martinez","avatar":"/team/40x40/24.webp"},"rating":3.5,"review":"This theme is great. Clean and easy to understand. Perfect for those who don&#39;t have time to start everything from scratch. The support is simply phenomenal! Highly recommended!","status":{"title":"Approved","badge":"success","icon":"check"},"time":"Nov 03, 10:43 AM"}' />
                  </div>
                </td>
                <td class="align-middle product white-space-nowrap py-0"><a class="d-block rounded-2 border border-translucent" href="apps/e-commerce/landing/product-details.html"><img src="assets/img//products/60x60/15.png" alt="" width="53" /></a></td>
                <td class="align-middle product white-space-nowrap"><a class="fw-semibold" href="apps/e-commerce/landing/product-details.html">Sony X85J 75 Inch Sony 4K Ultra HD LED Smart G...</a></td>
                <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-body" href="apps/e-commerce/landing/profile.html">
                    <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/40x40/24.webp" alt="" />
                    </div>
                    <h6 class="mb-0 ms-3 text-body">Suzanne Martinez</h6>
                  </a></td>
                <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt star-icon text-warning"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span>
                </td>
                <td class="align-middle review" style="min-width:350px;">
                  <p class="fs-9 fw-semibold text-body-highlight mb-0">This theme is great. Clean and easy to understand. Perfect for those who don't have time to start everything from scratch. The support...<a href='#!'>See more</a></p>
                </td>
                <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label">Approved</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                <td class="align-middle text-end time white-space-nowrap">
                  <div class="hover-hide">
                    <h6 class="text-body-highlight mb-0">Nov 03, 10:43 AM</h6>
                  </div>
                </td>
                <td class="align-middle white-space-nowrap text-end pe-0">
                  <div class="position-relative">
                    <div class="hover-actions">
                      <button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span class="fas fa-check"></span></button>
                      <button class="btn btn-sm btn-phoenix-secondary fs-10"><span class="fas fa-trash"></span></button>
                    </div>
                  </div>
                  <div class="btn-reveal-trigger position-static">
                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="row align-items-center py-1">
          <div class="pagination d-none"></div>
          <div class="col d-flex fs-9">
            <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info"></p><a class="fw-semibold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semibold d-none" href="#!" data-list-view="less">View Less</a>
          </div>
          <div class="col-auto d-flex">

            <button class="btn btn-link px-1 me-1" type="button" title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left me-2"></span>Previous</button>
            <button class="btn btn-link px-1 ms-1" type="button" title="Next" data-list-pagination="next">Next<span class="fas fa-chevron-right ms-2"></span></button>
          </div>
        </div>
      </div>
    </div>
    <div class="row gx-6">
      <div class="col-12 col-xl-6">
        <div data-list='{"valueNames":["country","users","transactions","revenue","conv-rate"],"page":5}'>
          <div class="mb-5 mt-7">
            <h3>Top regions by revenue</h3>
            <p class="text-body-tertiary">Where you generated most of the revenue</p>
          </div>
          <div class="table-responsive scrollbar">
            <table class="table fs-10 mb-0">
              <thead>
                <tr>
                  <th class="sort border-top border-translucent ps-0 align-middle" scope="col" data-sort="country" style="width:32%">COUNTRY</th>
                  <th class="sort border-top border-translucent align-middle" scope="col" data-sort="users" style="width:17%">USERS</th>
                  <th class="sort border-top border-translucent text-end align-middle" scope="col" data-sort="transactions" style="width:16%">TRANSACTIONS</th>
                  <th class="sort border-top border-translucent text-end align-middle" scope="col" data-sort="revenue" style="width:20%">REVENUE</th>
                  <th class="sort border-top border-translucent text-end pe-0 align-middle" scope="col" data-sort="conv-rate" style="width:17%">CONV. RATE</th>
                </tr>
              </thead>
              <tr>
                <td></td>
                <td class="align-middle py-4">
                  <h4 class="mb-0 fw-normal">377,620</h4>
                </td>
                <td class="align-middle text-end py-4">
                  <h4 class="mb-0 fw-normal">236</h4>
                </td>
                <td class="align-middle text-end py-4">
                  <h4 class="mb-0 fw-normal">$15,758</h4>
                </td>
                <td class="align-middle text-end py-4 pe-0">
                  <h4 class="mb-0 fw-normal">10.32%</h4>
                </td>
              </tr>
              <tbody class="list" id="table-regions-by-revenue">
                <tr>
                  <td class="white-space-nowrap ps-0 country" style="width:32%">
                    <div class="d-flex align-items-center">
                      <h6 class="mb-0 me-3">1. </h6><a href="#!">
                        <div class="d-flex align-items-center"><img src="assets/img/country/india.png" alt="" width="24" />
                          <p class="mb-0 ps-3 text-primary fw-bold fs-9">India</p>
                        </div>
                      </a>
                    </div>
                  </td>
                  <td class="align-middle users" style="width:17%">
                    <h6 class="mb-0">92896<span class="text-body-tertiary fw-semibold ms-2">(41.6%)</span></h6>
                  </td>
                  <td class="align-middle text-end transactions" style="width:17%">
                    <h6 class="mb-0">67<span class="text-body-tertiary fw-semibold ms-2">(34.3%)</span></h6>
                  </td>
                  <td class="align-middle text-end revenue" style="width:17%">
                    <h6 class="mb-0">$7560<span class="text-body-tertiary fw-semibold ms-2">(36.9%)</span></h6>
                  </td>
                  <td class="align-middle text-end pe-0 conv-rate" style="width:17%">
                    <h6>14.01%</h6>
                  </td>
                </tr>
                <tr>
                  <td class="white-space-nowrap ps-0 country" style="width:32%">
                    <div class="d-flex align-items-center">
                      <h6 class="mb-0 me-3">2. </h6><a href="#!">
                        <div class="d-flex align-items-center"><img src="assets/img/country/china.png" alt="" width="24" />
                          <p class="mb-0 ps-3 text-primary fw-bold fs-9">China</p>
                        </div>
                      </a>
                    </div>
                  </td>
                  <td class="align-middle users" style="width:17%">
                    <h6 class="mb-0">50496<span class="text-body-tertiary fw-semibold ms-2">(32.8%)</span></h6>
                  </td>
                  <td class="align-middle text-end transactions" style="width:17%">
                    <h6 class="mb-0">54<span class="text-body-tertiary fw-semibold ms-2">(23.8%)</span></h6>
                  </td>
                  <td class="align-middle text-end revenue" style="width:17%">
                    <h6 class="mb-0">$6532<span class="text-body-tertiary fw-semibold ms-2">(26.5%)</span></h6>
                  </td>
                  <td class="align-middle text-end pe-0 conv-rate" style="width:17%">
                    <h6>23.56%</h6>
                  </td>
                </tr>
                <tr>
                  <td class="white-space-nowrap ps-0 country" style="width:32%">
                    <div class="d-flex align-items-center">
                      <h6 class="mb-0 me-3">3. </h6><a href="#!">
                        <div class="d-flex align-items-center"><img src="assets/img/country/usa.png" alt="" width="24" />
                          <p class="mb-0 ps-3 text-primary fw-bold fs-9">USA</p>
                        </div>
                      </a>
                    </div>
                  </td>
                  <td class="align-middle users" style="width:17%">
                    <h6 class="mb-0">45679<span class="text-body-tertiary fw-semibold ms-2">(24.3%)</span></h6>
                  </td>
                  <td class="align-middle text-end transactions" style="width:17%">
                    <h6 class="mb-0">35<span class="text-body-tertiary fw-semibold ms-2">(19.7%)</span></h6>
                  </td>
                  <td class="align-middle text-end revenue" style="width:17%">
                    <h6 class="mb-0">$5432<span class="text-body-tertiary fw-semibold ms-2">(16.9%)</span></h6>
                  </td>
                  <td class="align-middle text-end pe-0 conv-rate" style="width:17%">
                    <h6>10.23%</h6>
                  </td>
                </tr>
                <tr>
                  <td class="white-space-nowrap ps-0 country" style="width:32%">
                    <div class="d-flex align-items-center">
                      <h6 class="mb-0 me-3">4. </h6><a href="#!">
                        <div class="d-flex align-items-center"><img src="assets/img/country/south-korea.png" alt="" width="24" />
                          <p class="mb-0 ps-3 text-primary fw-bold fs-9">South Korea</p>
                        </div>
                      </a>
                    </div>
                  </td>
                  <td class="align-middle users" style="width:17%">
                    <h6 class="mb-0">36453<span class="text-body-tertiary fw-semibold ms-2">(19.7%)</span></h6>
                  </td>
                  <td class="align-middle text-end transactions" style="width:17%">
                    <h6 class="mb-0">22<span class="text-body-tertiary fw-semibold ms-2">(9.54%)</span></h6>
                  </td>
                  <td class="align-middle text-end revenue" style="width:17%">
                    <h6 class="mb-0">$4673<span class="text-body-tertiary fw-semibold ms-2">(11.6%)</span></h6>
                  </td>
                  <td class="align-middle text-end pe-0 conv-rate" style="width:17%">
                    <h6>8.85%</h6>
                  </td>
                </tr>
                <tr>
                  <td class="white-space-nowrap ps-0 country" style="width:32%">
                    <div class="d-flex align-items-center">
                      <h6 class="mb-0 me-3">5. </h6><a href="#!">
                        <div class="d-flex align-items-center"><img src="assets/img/country/vietnam.png" alt="" width="24" />
                          <p class="mb-0 ps-3 text-primary fw-bold fs-9">Vietnam</p>
                        </div>
                      </a>
                    </div>
                  </td>
                  <td class="align-middle users" style="width:17%">
                    <h6 class="mb-0">15007<span class="text-body-tertiary fw-semibold ms-2">(11.9%)</span></h6>
                  </td>
                  <td class="align-middle text-end transactions" style="width:17%">
                    <h6 class="mb-0">17<span class="text-body-tertiary fw-semibold ms-2">(6.91%)</span></h6>
                  </td>
                  <td class="align-middle text-end revenue" style="width:17%">
                    <h6 class="mb-0">$2456<span class="text-body-tertiary fw-semibold ms-2">(10.2%)</span></h6>
                  </td>
                  <td class="align-middle text-end pe-0 conv-rate" style="width:17%">
                    <h6>6.01%</h6>
                  </td>
                </tr>
                <tr>
                  <td class="white-space-nowrap ps-0 country" style="width:32%">
                    <div class="d-flex align-items-center">
                      <h6 class="mb-0 me-3">6. </h6><a href="#!">
                        <div class="d-flex align-items-center"><img src="assets/img/country/russia.png" alt="" width="24" />
                          <p class="mb-0 ps-3 text-primary fw-bold fs-9">Russia</p>
                        </div>
                      </a>
                    </div>
                  </td>
                  <td class="align-middle users" style="width:17%">
                    <h6 class="mb-0">54215<span class="text-body-tertiary fw-semibold ms-2">(32.9%)</span></h6>
                  </td>
                  <td class="align-middle text-end transactions" style="width:17%">
                    <h6 class="mb-0">38<span class="text-body-tertiary fw-semibold ms-2">(7.91%)</span></h6>
                  </td>
                  <td class="align-middle text-end revenue" style="width:17%">
                    <h6 class="mb-0">$3254<span class="text-body-tertiary fw-semibold ms-2">(12.4%)</span></h6>
                  </td>
                  <td class="align-middle text-end pe-0 conv-rate" style="width:17%">
                    <h6>6.21%</h6>
                  </td>
                </tr>
                <tr>
                  <td class="white-space-nowrap ps-0 country" style="width:32%">
                    <div class="d-flex align-items-center">
                      <h6 class="mb-0 me-3">7. </h6><a href="#!">
                        <div class="d-flex align-items-center"><img src="assets/img/country/australia.png" alt="" width="24" />
                          <p class="mb-0 ps-3 text-primary fw-bold fs-9">Australia</p>
                        </div>
                      </a>
                    </div>
                  </td>
                  <td class="align-middle users" style="width:17%">
                    <h6 class="mb-0">54789<span class="text-body-tertiary fw-semibold ms-2">(12.7%)</span></h6>
                  </td>
                  <td class="align-middle text-end transactions" style="width:17%">
                    <h6 class="mb-0">32<span class="text-body-tertiary fw-semibold ms-2">(14.0%)</span></h6>
                  </td>
                  <td class="align-middle text-end revenue" style="width:17%">
                    <h6 class="mb-0">$3215<span class="text-body-tertiary fw-semibold ms-2">(5.72%)</span></h6>
                  </td>
                  <td class="align-middle text-end pe-0 conv-rate" style="width:17%">
                    <h6>12.02%</h6>
                  </td>
                </tr>
                <tr>
                  <td class="white-space-nowrap ps-0 country" style="width:32%">
                    <div class="d-flex align-items-center">
                      <h6 class="mb-0 me-3">8. </h6><a href="#!">
                        <div class="d-flex align-items-center"><img src="assets/img/country/england.png" alt="" width="24" />
                          <p class="mb-0 ps-3 text-primary fw-bold fs-9">England</p>
                        </div>
                      </a>
                    </div>
                  </td>
                  <td class="align-middle users" style="width:17%">
                    <h6 class="mb-0">14785<span class="text-body-tertiary fw-semibold ms-2">(12.9%)</span></h6>
                  </td>
                  <td class="align-middle text-end transactions" style="width:17%">
                    <h6 class="mb-0">11<span class="text-body-tertiary fw-semibold ms-2">(32.91%)</span></h6>
                  </td>
                  <td class="align-middle text-end revenue" style="width:17%">
                    <h6 class="mb-0">$4745<span class="text-body-tertiary fw-semibold ms-2">(10.2%)</span></h6>
                  </td>
                  <td class="align-middle text-end pe-0 conv-rate" style="width:17%">
                    <h6>8.01%</h6>
                  </td>
                </tr>
                <tr>
                  <td class="white-space-nowrap ps-0 country" style="width:32%">
                    <div class="d-flex align-items-center">
                      <h6 class="mb-0 me-3">9. </h6><a href="#!">
                        <div class="d-flex align-items-center"><img src="assets/img/country/indonesia.png" alt="" width="24" />
                          <p class="mb-0 ps-3 text-primary fw-bold fs-9">Indonesia</p>
                        </div>
                      </a>
                    </div>
                  </td>
                  <td class="align-middle users" style="width:17%">
                    <h6 class="mb-0">32156<span class="text-body-tertiary fw-semibold ms-2">(32.2%)</span></h6>
                  </td>
                  <td class="align-middle text-end transactions" style="width:17%">
                    <h6 class="mb-0">89<span class="text-body-tertiary fw-semibold ms-2">(12.0%)</span></h6>
                  </td>
                  <td class="align-middle text-end revenue" style="width:17%">
                    <h6 class="mb-0">$2456<span class="text-body-tertiary fw-semibold ms-2">(23.2%)</span></h6>
                  </td>
                  <td class="align-middle text-end pe-0 conv-rate" style="width:17%">
                    <h6>9.07%</h6>
                  </td>
                </tr>
                <tr>
                  <td class="white-space-nowrap ps-0 country" style="width:32%">
                    <div class="d-flex align-items-center">
                      <h6 class="mb-0 me-3">10. </h6><a href="#!">
                        <div class="d-flex align-items-center"><img src="assets/img/country/japan.png" alt="" width="24" />
                          <p class="mb-0 ps-3 text-primary fw-bold fs-9">Japan</p>
                        </div>
                      </a>
                    </div>
                  </td>
                  <td class="align-middle users" style="width:17%">
                    <h6 class="mb-0">12547<span class="text-body-tertiary fw-semibold ms-2">(12.7%)</span></h6>
                  </td>
                  <td class="align-middle text-end transactions" style="width:17%">
                    <h6 class="mb-0">21<span class="text-body-tertiary fw-semibold ms-2">(14.91%)</span></h6>
                  </td>
                  <td class="align-middle text-end revenue" style="width:17%">
                    <h6 class="mb-0">$2541<span class="text-body-tertiary fw-semibold ms-2">(23.2%)</span></h6>
                  </td>
                  <td class="align-middle text-end pe-0 conv-rate" style="width:17%">
                    <h6>20.01%</h6>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="row align-items-center py-1">
            <div class="pagination d-none"></div>
            <div class="col d-flex fs-9">
              <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info"></p>
            </div>
            <div class="col-auto d-flex">

              <button class="btn btn-link px-1 me-1" type="button" title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left me-2"></span>Previous</button>
              <button class="btn btn-link px-1 ms-1" type="button" title="Next" data-list-pagination="next">Next<span class="fas fa-chevron-right ms-2"></span></button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-xl-6">
        <div class="mx-n4 mx-lg-n6 ms-xl-0 h-100">
          <div class="h-100 w-100">
            <div class="h-100 bg-body-emphasis" id="map" style="min-height: 300px;"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis pt-6 pb-9 border-top">
      <div class="row g-6">
        <div class="col-12 col-xl-6">
          <div class="me-xl-4">
            <div>
              <h3>Projection vs actual</h3>
              <p class="mb-1 text-body-tertiary">Actual earnings vs projected earnings</p>
            </div>
            <div class="echart-projection-actual" style="height:300px; width:100%"></div>
          </div>
        </div>
        <div class="col-12 col-xl-6">
          <div>
            <h3>Returning customer rate</h3>
            <p class="mb-1 text-body-tertiary">Rate of customers returning to your shop over time</p>
          </div>
          <div class="echart-returning-customer" style="height:300px;"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="searchBoxModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="true" data-phoenix-modal="data-phoenix-modal" style="--phoenix-backdrop-opacity: 1;">
    <div class="modal-dialog">
      <div class="modal-content mt-15 rounded-pill">
        <div class="modal-body p-0">
          <div class="search-box navbar-top-search-box" data-list='{"valueNames":["title"]}' style="width: auto;">
            <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
              <input class="form-control search-input fuzzy-search rounded-pill form-control-lg" type="search" placeholder="Search..." aria-label="Search" />
              <span class="fas fa-search search-box-icon"></span>

            </form>
            <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none" data-bs-dismiss="search">
              <button class="btn btn-link p-0" aria-label="Close"></button>
            </div>
            <div class="dropdown-menu border start-0 py-0 overflow-hidden w-100">
              <div class="scrollbar-overlay" style="max-height: 30rem;">
                <div class="list pb-3">
                  <h6 class="dropdown-header text-body-highlight fs-10 py-2">24 <span class="text-body-quaternary">results</span></h6>
                  <hr class="my-0" />
                  <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Recently Searched </h6>
                  <div class="py-2"><a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">

                        <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> Store Macbook</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">

                        <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> MacBook Air - 13″</div>
                      </div>
                    </a>

                  </div>
                  <hr class="my-0" />
                  <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Products</h6>
                  <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="apps/e-commerce/landing/product-details.html">
                      <div class="file-thumbnail me-2"><img class="h-100 w-100 object-fit-cover rounded-3" src="assets/img/products/60x60/3.png" alt="" /></div>
                      <div class="flex-1">
                        <h6 class="mb-0 text-body-highlight title">MacBook Air - 13″</h6>
                        <p class="fs-10 mb-0 d-flex text-body-tertiary"><span class="fw-medium text-body-tertiary text-opactity-85">8GB Memory - 1.6GHz - 128GB Storage</span></p>
                      </div>
                    </a>
                    <a class="dropdown-item py-2 d-flex align-items-center" href="apps/e-commerce/landing/product-details.html">
                      <div class="file-thumbnail me-2"><img class="img-fluid" src="assets/img/products/60x60/3.png" alt="" /></div>
                      <div class="flex-1">
                        <h6 class="mb-0 text-body-highlight title">MacBook Pro - 13″</h6>
                        <p class="fs-10 mb-0 d-flex text-body-tertiary"><span class="fw-medium text-body-tertiary text-opactity-85">30 Sep at 12:30 PM</span></p>
                      </div>
                    </a>

                  </div>
                  <hr class="my-0" />
                  <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Quick Links</h6>
                  <div class="py-2"><a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">

                        <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-link text-body" data-fa-transform="shrink-2"></span> Support MacBook House</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">

                        <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-link text-body" data-fa-transform="shrink-2"></span> Store MacBook″</div>
                      </div>
                    </a>

                  </div>
                  <hr class="my-0" />
                  <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Files</h6>
                  <div class="py-2"><a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">

                        <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-file-zipper text-body" data-fa-transform="shrink-2"></span> Library MacBook folder.rar</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">

                        <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-file-lines text-body" data-fa-transform="shrink-2"></span> Feature MacBook extensions.txt</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">

                        <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-image text-body" data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg</div>
                      </div>
                    </a>

                  </div>
                  <hr class="my-0" />
                  <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Members</h6>
                  <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="pages/members.html">
                      <div class="avatar avatar-l status-online  me-2 text-body">
                        <img class="rounded-circle " src="assets/img/team/40x40/10.webp" alt="" />

                      </div>
                      <div class="flex-1">
                        <h6 class="mb-0 text-body-highlight title">Carry Anna</h6>
                        <p class="fs-10 mb-0 d-flex text-body-tertiary">anna@technext.it</p>
                      </div>
                    </a>
                    <a class="dropdown-item py-2 d-flex align-items-center" href="pages/members.html">
                      <div class="avatar avatar-l  me-2 text-body">
                        <img class="rounded-circle " src="assets/img/team/40x40/12.webp" alt="" />

                      </div>
                      <div class="flex-1">
                        <h6 class="mb-0 text-body-highlight title">John Smith</h6>
                        <p class="fs-10 mb-0 d-flex text-body-tertiary">smith@technext.it</p>
                      </div>
                    </a>

                  </div>
                  <hr class="my-0" />
                  <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Related Searches</h6>
                  <div class="py-2"><a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">

                        <div class="fw-normal text-body-highlight title"><span class="fa-brands fa-firefox-browser text-body" data-fa-transform="shrink-2"></span> Search in the Web MacBook</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">

                        <div class="fw-normal text-body-highlight title"> <span class="fa-brands fa-chrome text-body" data-fa-transform="shrink-2"></span> Store MacBook″</div>
                      </div>
                    </a>

                  </div>
                </div>
                <div class="text-center">
                  <p class="fallback fw-bold fs-7 d-none">No Result Found.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
    var navbarTop = document.querySelector('.navbar-top');
    if (navbarTopStyle === 'darker') {
      navbarTop.setAttribute('data-navbar-appearance', 'darker');
    }

    var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
    var navbarVertical = document.querySelector('.navbar-vertical');
    if (navbarVertical && navbarVerticalStyle === 'darker') {
      navbarVertical.setAttribute('data-navbar-appearance', 'darker');
    }
  </script>
</main>
<!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->


<div class="offcanvas offcanvas-end settings-panel border-0" id="settings-offcanvas" tabindex="-1" aria-labelledby="settings-offcanvas">
  <div class="offcanvas-header align-items-start border-bottom flex-column border-translucent">
    <div class="pt-1 w-100 mb-6 d-flex justify-content-between align-items-start">
      <div>
        <h5 class="mb-2 me-2 lh-sm"><span class="fas fa-palette me-2 fs-8"></span>Theme Customizer</h5>
        <p class="mb-0 fs-9">Explore different styles according to your preferences</p>
      </div>
      <button class="btn p-1 fw-bolder" type="button" data-bs-dismiss="offcanvas" aria-label="Close"><span class="fas fa-times fs-8"> </span></button>
    </div>
    <button class="btn btn-phoenix-secondary w-100" data-theme-control="reset"><span class="fas fa-arrows-rotate me-2 fs-10"></span>Reset to default</button>
  </div>
  <div class="offcanvas-body scrollbar px-card" id="themeController">
    <div class="setting-panel-item mt-0">
      <h5 class="setting-panel-item-title">Color Scheme</h5>
      <div class="row gx-2">
        <div class="col-4">
          <input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio" value="light" data-theme-control="phoenixTheme" />
          <label class="btn d-inline-block btn-navbar-style fs-9" for="themeSwitcherLight"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="assets/img/generic/default-light.png" alt="" /></span><span class="label-text">Light</span></label>
        </div>
        <div class="col-4">
          <input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio" value="dark" data-theme-control="phoenixTheme" />
          <label class="btn d-inline-block btn-navbar-style fs-9" for="themeSwitcherDark"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="assets/img/generic/default-dark.png" alt="" /></span><span class="label-text"> Dark</span></label>
        </div>
        <div class="col-4">
          <input class="btn-check" id="themeSwitcherAuto" name="theme-color" type="radio" value="auto" data-theme-control="phoenixTheme" />
          <label class="btn d-inline-block btn-navbar-style fs-9" for="themeSwitcherAuto"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="assets/img/generic/auto.png" alt="" /></span><span class="label-text"> Auto</span></label>
        </div>
      </div>
    </div>
    <div class="border border-translucent rounded-3 p-4 setting-panel-item bg-body-emphasis">
      <div class="d-flex justify-content-between align-items-center">
        <h5 class="setting-panel-item-title mb-1">RTL </h5>
        <div class="form-check form-switch mb-0">
          <input class="form-check-input ms-auto" type="checkbox" data-theme-control="phoenixIsRTL" />
        </div>
      </div>
      <p class="mb-0 text-body-tertiary">Change text direction</p>
    </div>
    <div class="border border-translucent rounded-3 p-4 setting-panel-item bg-body-emphasis">
      <div class="d-flex justify-content-between align-items-center">
        <h5 class="setting-panel-item-title mb-1">Support Chat </h5>
        <div class="form-check form-switch mb-0">
          <input class="form-check-input ms-auto" type="checkbox" data-theme-control="phoenixSupportChat" />
        </div>
      </div>
      <p class="mb-0 text-body-tertiary">Toggle support chat</p>
    </div>
    <div class="setting-panel-item">
      <h5 class="setting-panel-item-title">Navigation Type</h5>
      <div class="row gx-2">
        <div class="col-6">
          <input class="btn-check" id="navbarPositionVertical" name="navigation-type" type="radio" value="vertical" data-theme-control="phoenixNavbarPosition" data-page-url="documentation/layouts/vertical-navbar.html" />
          <label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionVertical"> <span class="rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="assets/img/generic/default-light.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="assets/img/generic/default-dark.png" alt="" /></span><span class="label-text">Vertical</span></label>
        </div>
        <div class="col-6">
          <input class="btn-check" id="navbarPositionHorizontal" name="navigation-type" type="radio" value="horizontal" data-theme-control="phoenixNavbarPosition" data-page-url="documentation/layouts/horizontal-navbar.html" />
          <label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionHorizontal"> <span class="rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="assets/img/generic/top-default.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="assets/img/generic/top-default-dark.png" alt="" /></span><span class="label-text"> Horizontal</span></label>
        </div>
        <div class="col-6">
          <input class="btn-check" id="navbarPositionCombo" name="navigation-type" type="radio" value="combo" data-theme-control="phoenixNavbarPosition" data-page-url="documentation/layouts/combo-navbar.html" />
          <label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionCombo"> <span class="rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="assets/img/generic/nav-combo-light.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="assets/img/generic/nav-combo-dark.png" alt="" /></span><span class="label-text"> Combo</span></label>
        </div>
        <div class="col-6">
          <input class="btn-check" id="navbarPositionTopDouble" name="navigation-type" type="radio" value="dual-nav" data-theme-control="phoenixNavbarPosition" data-page-url="documentation/layouts/dual-nav.html" />
          <label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionTopDouble"> <span class="rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="assets/img/generic/dual-light.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="assets/img/generic/dual-dark.png" alt="" /></span><span class="label-text"> Dual nav</span></label>
        </div>
      </div>
    </div>
    <div class="setting-panel-item">
      <h5 class="setting-panel-item-title">Vertical Navbar Appearance</h5>
      <div class="row gx-2">
        <div class="col-6">
          <input class="btn-check" id="navbar-style-default" type="radio" name="config.name" value="default" data-theme-control="phoenixNavbarVerticalStyle" />
          <label class="btn d-block w-100 btn-navbar-style fs-9" for="navbar-style-default"> <img class="img-fluid img-prototype d-dark-none" src="assets/img/generic/default-light.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="assets/img/generic/default-dark.png" alt="" /><span class="label-text d-dark-none"> Default</span><span class="label-text d-light-none">Default</span></label>
        </div>
        <div class="col-6">
          <input class="btn-check" id="navbar-style-dark" type="radio" name="config.name" value="darker" data-theme-control="phoenixNavbarVerticalStyle" />
          <label class="btn d-block w-100 btn-navbar-style fs-9" for="navbar-style-dark"> <img class="img-fluid img-prototype d-dark-none" src="assets/img/generic/vertical-darker.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="assets/img/generic/vertical-lighter.png" alt="" /><span class="label-text d-dark-none"> Darker</span><span class="label-text d-light-none">Lighter</span></label>
        </div>
      </div>
    </div>
    <div class="setting-panel-item">
      <h5 class="setting-panel-item-title">Horizontal Navbar Shape</h5>
      <div class="row gx-2">
        <div class="col-6">
          <input class="btn-check" id="navbarShapeDefault" name="navbar-shape" type="radio" value="default" data-theme-control="phoenixNavbarTopShape" data-page-url="documentation/layouts/horizontal-navbar.html" />
          <label class="btn d-inline-block btn-navbar-style fs-9" for="navbarShapeDefault"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="assets/img/generic/top-default.png" alt="" /><img class="img-fluid img-prototype d-light-none mb-0" src="assets/img/generic/top-default-dark.png" alt="" /></span><span class="label-text">Default</span></label>
        </div>
        <div class="col-6">
          <input class="btn-check" id="navbarShapeSlim" name="navbar-shape" type="radio" value="slim" data-theme-control="phoenixNavbarTopShape" data-page-url="documentation/layouts/horizontal-navbar.html#horizontal-navbar-slim" />
          <label class="btn d-inline-block btn-navbar-style fs-9" for="navbarShapeSlim"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="assets/img/generic/top-slim.png" alt="" /><img class="img-fluid img-prototype d-light-none mb-0" src="assets/img/generic/top-slim-dark.png" alt="" /></span><span class="label-text"> Slim</span></label>
        </div>
      </div>
    </div>
    <div class="setting-panel-item">
      <h5 class="setting-panel-item-title">Horizontal Navbar Appearance</h5>
      <div class="row gx-2">
        <div class="col-6">
          <input class="btn-check" id="navbarTopDefault" name="navbar-top-style" type="radio" value="default" data-theme-control="phoenixNavbarTopStyle" />
          <label class="btn d-inline-block btn-navbar-style fs-9" for="navbarTopDefault"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="assets/img/generic/top-default.png" alt="" /><img class="img-fluid img-prototype d-light-none mb-0" src="assets/img/generic/top-style-darker.png" alt="" /></span><span class="label-text">Default</span></label>
        </div>
        <div class="col-6">
          <input class="btn-check" id="navbarTopDarker" name="navbar-top-style" type="radio" value="darker" data-theme-control="phoenixNavbarTopStyle" />
          <label class="btn d-inline-block btn-navbar-style fs-9" for="navbarTopDarker"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="assets/img/generic/navbar-top-style-light.png" alt="" /><img class="img-fluid img-prototype d-light-none mb-0" src="assets/img/generic/top-style-lighter.png" alt="" /></span><span class="label-text d-dark-none">Darker</span><span class="label-text d-light-none">Lighter</span></label>
        </div>
      </div>
    </div><a class="bun btn-primary d-grid mb-3 text-white mt-5 btn btn-primary" href="https://themes.getbootstrap.com/product/phoenix-admin-dashboard-webapp-template/" target="_blank">Purchase template</a>
  </div>
</div>

<?php include 'inc/homeFoot.php'; ?>

</html>