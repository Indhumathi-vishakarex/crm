<!DOCTYPE html>
<html
  lang="en"
  data-layout="vertical"
  data-topbar="light"
  data-sidebar="dark"
  data-sidebar-size="lg"
  data-sidebar-image="none">
<!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/file-manager by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:22:30 GMT -->
<!-- Added by HTTrack -->
<meta
  http-equiv="content-type"
  content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Smarthr - Bootstrap Admin Template" />
  <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects" />
  <meta name="author" content="Dreamstechnologies - Bootstrap Admin Template" />
 <title>CRM - Winngoopages</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo2.png') }}">

  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/material.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
  <div class="main-wrapper">
    @include('layouts.header')
    @include('layouts.sidebar')

    <div class="page-wrapper">
      <div class="content container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <div class="file-wrap">
              <div class="file-sidebar">
                <div class="file-header justify-content-center">
                  <span>Projects</span>
                  <a href="javascript:void(0);" class="file-side-close"><i class="fa fa-times"></i></a>
                </div>
                <form class="file-search">
                  <div class="input-group">
                    <div class="input-group-text">
                      <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <input
                      type="text"
                      class="form-control rounded-pill"
                      placeholder="Search" />
                  </div>
                </form>
                <div class="file-pro-list">
                  <div class="file-scroll">
                    <ul class="file-menu">
                      <li class="active">
                        <a href="#">All Projects</a>
                      </li>
                      <li>
                        <a href="#">Office Management</a>
                      </li>
                      <li>
                        <a href="#">Video Calling App</a>
                      </li>
                      <li>
                        <a href="#">Hospital Administration</a>
                      </li>
                      <li>
                        <a href="#">Virtual Host</a>
                      </li>
                    </ul>
                    <div class="show-more">
                      <a href="#">Show More</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="file-cont-wrap">
                <div class="file-cont-inner">
                  <div class="file-cont-header">
                    <div class="file-options">
                      <a
                        href="javascript:void(0)"
                        id="file_sidebar_toggle"
                        class="file-sidebar-toggle">
                        <i class="fa fa-bars"></i>
                      </a>
                    </div>
                    <span>File Manager</span>
                    <div class="file-options">
                      <span class="btn-file"><input type="file" class="upload" /><i
                          class="fa fa-upload"></i></span>
                    </div>
                  </div>
                  <div class="file-content">
                    <form class="file-search">
                      <div class="input-group">
                        <div class="input-group-text">
                          <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                        <input
                          type="text"
                          class="form-control rounded-pill"
                          placeholder="Search" />
                      </div>
                    </form>
                    <div class="file-body">
                      <div class="file-scroll">
                        <div class="file-content-inner">
                          <h4>Recent Files</h4>
                          <div class="row row-sm">
                            <div
                              class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
                              <div class="card card-file">
                                <div class="dropdown-file">
                                  <a
                                    href
                                    class="dropdown-link"
                                    data-bs-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                  <div
                                    class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">View Details</a>
                                    <a href="#" class="dropdown-item">Share</a>
                                    <a href="#" class="dropdown-item">Download</a>
                                    <a href="#" class="dropdown-item">Rename</a>
                                    <a href="#" class="dropdown-item">Delete</a>
                                  </div>
                                </div>
                                <div class="card-file-thumb">
                                  <i class="fa-regular fa-file-pdf"></i>
                                </div>
                                <div class="card-body">
                                  <h6><a href>Sample.pdf</a></h6>
                                  <span>10.45kb</span>
                                </div>
                                <div class="card-footer">
                                  <span class="d-none d-sm-inline">Last Modified: </span>1 min ago
                                </div>
                              </div>
                            </div>
                            <div
                              class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
                              <div class="card card-file">
                                <div class="dropdown-file">
                                  <a
                                    href
                                    class="dropdown-link"
                                    data-bs-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                  <div
                                    class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">View Details</a>
                                    <a href="#" class="dropdown-item">Share</a>
                                    <a href="#" class="dropdown-item">Download</a>
                                    <a href="#" class="dropdown-item">Rename</a>
                                    <a href="#" class="dropdown-item">Delete</a>
                                  </div>
                                </div>
                                <div class="card-file-thumb">
                                  <i class="fa-regular fa-file-word"></i>
                                </div>
                                <div class="card-body">
                                  <h6><a href>Document.docx</a></h6>
                                  <span>22.67kb</span>
                                </div>
                                <div class="card-footer">
                                  <span class="d-none d-sm-inline">Last Modified: </span>30 mins ago
                                </div>
                              </div>
                            </div>
                            <div
                              class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
                              <div class="card card-file">
                                <div class="dropdown-file">
                                  <a
                                    href
                                    class="dropdown-link"
                                    data-bs-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                  <div
                                    class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">View Details</a>
                                    <a href="#" class="dropdown-item">Share</a>
                                    <a href="#" class="dropdown-item">Download</a>
                                    <a href="#" class="dropdown-item">Rename</a>
                                    <a href="#" class="dropdown-item">Delete</a>
                                  </div>
                                </div>
                                <div class="card-file-thumb">
                                  <i class="fa-regular fa-file-image"></i>
                                </div>
                                <div class="card-body">
                                  <h6><a href>icon.png</a></h6>
                                  <span>12.47kb</span>
                                </div>
                                <div class="card-footer">
                                  <span class="d-none d-sm-inline">Last Modified: </span>1 hour ago
                                </div>
                              </div>
                            </div>
                            <div
                              class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
                              <div class="card card-file">
                                <div class="dropdown-file">
                                  <a
                                    href
                                    class="dropdown-link"
                                    data-bs-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                  <div
                                    class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">View Details</a>
                                    <a href="#" class="dropdown-item">Share</a>
                                    <a href="#" class="dropdown-item">Download</a>
                                    <a href="#" class="dropdown-item">Rename</a>
                                    <a href="#" class="dropdown-item">Delete</a>
                                  </div>
                                </div>
                                <div class="card-file-thumb">
                                  <i class="fa-regular fa-file-excel"></i>
                                </div>
                                <div class="card-body">
                                  <h6><a href>Users.xls</a></h6>
                                  <span>35.11kb</span>
                                </div>
                                <div class="card-footer">23 Jul 6:30 PM</div>
                              </div>
                            </div>
                          </div>
                          <h4>Files</h4>
                          <div class="row row-sm">
                            <div
                              class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
                              <div class="card card-file">
                                <div class="dropdown-file">
                                  <a
                                    href
                                    class="dropdown-link"
                                    data-bs-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                  <div
                                    class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">View Details</a>
                                    <a href="#" class="dropdown-item">Share</a>
                                    <a href="#" class="dropdown-item">Download</a>
                                    <a href="#" class="dropdown-item">Rename</a>
                                    <a href="#" class="dropdown-item">Delete</a>
                                  </div>
                                </div>
                                <div class="card-file-thumb">
                                  <i class="fa-regular fa-file-word"></i>
                                </div>
                                <div class="card-body">
                                  <h6><a href>Updates.docx</a></h6>
                                  <span>12mb</span>
                                </div>
                                <div class="card-footer">9 Aug 1:17 PM</div>
                              </div>
                            </div>
                            <div
                              class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
                              <div class="card card-file">
                                <div class="dropdown-file">
                                  <a
                                    href
                                    class="dropdown-link"
                                    data-bs-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                  <div
                                    class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">View Details</a>
                                    <a href="#" class="dropdown-item">Share</a>
                                    <a href="#" class="dropdown-item">Download</a>
                                    <a href="#" class="dropdown-item">Rename</a>
                                    <a href="#" class="dropdown-item">Delete</a>
                                  </div>
                                </div>
                                <div class="card-file-thumb">
                                  <i
                                    class="fa-regular fa-file-powerpoint"></i>
                                </div>
                                <div class="card-body">
                                  <h6><a href>Vision.ppt</a></h6>
                                  <span>72.50kb</span>
                                </div>
                                <div class="card-footer">6 Aug 11:42 AM</div>
                              </div>
                            </div>
                            <div
                              class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
                              <div class="card card-file">
                                <div class="dropdown-file">
                                  <a
                                    href
                                    class="dropdown-link"
                                    data-bs-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                  <div
                                    class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">View Details</a>
                                    <a href="#" class="dropdown-item">Share</a>
                                    <a href="#" class="dropdown-item">Download</a>
                                    <a href="#" class="dropdown-item">Rename</a>
                                    <a href="#" class="dropdown-item">Delete</a>
                                  </div>
                                </div>
                                <div class="card-file-thumb">
                                  <i class="fa-regular fa-file-audio"></i>
                                </div>
                                <div class="card-body">
                                  <h6><a href>Voice.mp3</a></h6>
                                  <span>2.17mb</span>
                                </div>
                                <div class="card-footer">
                                  <span class="d-none d-sm-inline">Last Modified: </span>30 Jul 9:00 PM
                                </div>
                              </div>
                            </div>
                            <div
                              class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
                              <div class="card card-file">
                                <div class="dropdown-file">
                                  <a
                                    href
                                    class="dropdown-link"
                                    data-bs-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                  <div
                                    class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">View Details</a>
                                    <a href="#" class="dropdown-item">Share</a>
                                    <a href="#" class="dropdown-item">Download</a>
                                    <a href="#" class="dropdown-item">Rename</a>
                                    <a href="#" class="dropdown-item">Delete</a>
                                  </div>
                                </div>
                                <div class="card-file-thumb">
                                  <i class="fa-regular fa-file-pdf"></i>
                                </div>
                                <div class="card-body">
                                  <h6><a href>Tutorials.pdf</a></h6>
                                  <span>8.2mb</span>
                                </div>
                                <div class="card-footer">21 Jul 10:45 PM</div>
                              </div>
                            </div>
                            <div
                              class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
                              <div class="card card-file">
                                <div class="dropdown-file">
                                  <a
                                    href
                                    class="dropdown-link"
                                    data-bs-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                  <div
                                    class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">View Details</a>
                                    <a href="#" class="dropdown-item">Share</a>
                                    <a href="#" class="dropdown-item">Download</a>
                                    <a href="#" class="dropdown-item">Rename</a>
                                    <a href="#" class="dropdown-item">Delete</a>
                                  </div>
                                </div>
                                <div class="card-file-thumb">
                                  <i class="fa-regular fa-file-excel"></i>
                                </div>
                                <div class="card-body">
                                  <h6><a href>Tasks.xls</a></h6>
                                  <span>92.82kb</span>
                                </div>
                                <div class="card-footer">16 Jun 4:59 PM</div>
                              </div>
                            </div>
                            <div
                              class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
                              <div class="card card-file">
                                <div class="dropdown-file">
                                  <a
                                    href
                                    class="dropdown-link"
                                    data-bs-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                  <div
                                    class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">View Details</a>
                                    <a href="#" class="dropdown-item">Share</a>
                                    <a href="#" class="dropdown-item">Download</a>
                                    <a href="#" class="dropdown-item">Rename</a>
                                    <a href="#" class="dropdown-item">Delete</a>
                                  </div>
                                </div>
                                <div class="card-file-thumb">
                                  <i class="fa-regular fa-file-image"></i>
                                </div>
                                <div class="card-body">
                                  <h6><a href>Page.psd</a></h6>
                                  <span>118.71mb</span>
                                </div>
                                <div class="card-footer">14 Jun 9:00 AM</div>
                              </div>
                            </div>
                            <div
                              class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
                              <div class="card card-file">
                                <div class="dropdown-file">
                                  <a
                                    href
                                    class="dropdown-link"
                                    data-bs-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                  <div
                                    class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">View Details</a>
                                    <a href="#" class="dropdown-item">Share</a>
                                    <a href="#" class="dropdown-item">Download</a>
                                    <a href="#" class="dropdown-item">Rename</a>
                                    <a href="#" class="dropdown-item">Delete</a>
                                  </div>
                                </div>
                                <div class="card-file-thumb">
                                  <i class="fa-regular fa-file-lines"></i>
                                </div>
                                <div class="card-body">
                                  <h6><a href>License.txt</a></h6>
                                  <span>18.7kb</span>
                                </div>
                                <div class="card-footer">5 May 8:21 PM</div>
                              </div>
                            </div>
                            <div
                              class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
                              <div class="card card-file">
                                <div class="dropdown-file">
                                  <a
                                    href
                                    class="dropdown-link"
                                    data-bs-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                  <div
                                    class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">View Details</a>
                                    <a href="#" class="dropdown-item">Share</a>
                                    <a href="#" class="dropdown-item">Download</a>
                                    <a href="#" class="dropdown-item">Rename</a>
                                    <a href="#" class="dropdown-item">Delete</a>
                                  </div>
                                </div>
                                <div class="card-file-thumb">
                                  <i class="fa-regular fa-file-word"></i>
                                </div>
                                <div class="card-body">
                                  <h6><a href>Expenses.docx</a></h6>
                                  <span>66.2kb</span>
                                </div>
                                <div class="card-footer">24 Apr 7:50 PM</div>
                              </div>
                            </div>
                            <div
                              class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
                              <div class="card card-file">
                                <div class="dropdown-file">
                                  <a
                                    href
                                    class="dropdown-link"
                                    data-bs-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                  <div
                                    class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">View Details</a>
                                    <a href="#" class="dropdown-item">Share</a>
                                    <a href="#" class="dropdown-item">Download</a>
                                    <a href="#" class="dropdown-item">Rename</a>
                                    <a href="#" class="dropdown-item">Delete</a>
                                  </div>
                                </div>
                                <div class="card-file-thumb">
                                  <i class="fa-regular fa-file-audio"></i>
                                </div>
                                <div class="card-body">
                                  <h6><a href>Music.mp3</a></h6>
                                  <span>3.6mb</span>
                                </div>
                                <div class="card-footer">13 Mar 2:00 PM</div>
                              </div>
                            </div>
                            <div
                              class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
                              <div class="card card-file">
                                <div class="dropdown-file">
                                  <a
                                    href
                                    class="dropdown-link"
                                    data-bs-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                  <div
                                    class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">View Details</a>
                                    <a href="#" class="dropdown-item">Share</a>
                                    <a href="#" class="dropdown-item">Download</a>
                                    <a href="#" class="dropdown-item">Rename</a>
                                    <a href="#" class="dropdown-item">Delete</a>
                                  </div>
                                </div>
                                <div class="card-file-thumb">
                                  <i class="fa-regular fa-file-lines"></i>
                                </div>
                                <div class="card-body">
                                  <h6><a href>Installation.txt</a></h6>
                                  <span>43.9kb</span>
                                </div>
                                <div class="card-footer">26 Feb 5:01 PM</div>
                              </div>
                            </div>
                            <div
                              class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
                              <div class="card card-file">
                                <div class="dropdown-file">
                                  <a
                                    href
                                    class="dropdown-link"
                                    data-bs-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                  <div
                                    class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">View Details</a>
                                    <a href="#" class="dropdown-item">Share</a>
                                    <a href="#" class="dropdown-item">Download</a>
                                    <a href="#" class="dropdown-item">Rename</a>
                                    <a href="#" class="dropdown-item">Delete</a>
                                  </div>
                                </div>
                                <div class="card-file-thumb">
                                  <i class="fa-regular fa-file-video"></i>
                                </div>
                                <div class="card-body">
                                  <h6><a href>Workflow.mp4</a></h6>
                                  <span>47.65mb</span>
                                </div>
                                <div class="card-footer">3 Jan 11:35 AM</div>
                              </div>
                            </div>
                            <div
                              class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
                              <div class="card card-file">
                                <div class="dropdown-file">
                                  <a
                                    href
                                    class="dropdown-link"
                                    data-bs-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                  <div
                                    class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">View Details</a>
                                    <a href="#" class="dropdown-item">Share</a>
                                    <a href="#" class="dropdown-item">Download</a>
                                    <a href="#" class="dropdown-item">Rename</a>
                                    <a href="#" class="dropdown-item">Delete</a>
                                  </div>
                                </div>
                                <div class="card-file-thumb">
                                  <i class="fa-regular fa-file-code"></i>
                                </div>
                                <div class="card-body">
                                  <h6><a href>index</a></h6>
                                  <span>23.7kb</span>
                                </div>
                                <div class="card-footer">1 Jan 8:55 AM</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="settings-icon">
    <span
      data-bs-toggle="offcanvas"
      data-bs-target="#theme-settings-offcanvas"
      aria-controls="theme-settings-offcanvas"><i class="las la-cog"></i></span>
  </div>
  <div
    class="offcanvas offcanvas-end border-0"
    tabindex="-1"
    id="theme-settings-offcanvas">
    <div class="sidebar-headerset">
      <div class="sidebar-headersets">
        <h2>Customizer</h2>
        <h3>Customize your overview Page layout</h3>
      </div>
      <div class="sidebar-headerclose">
        <a data-bs-dismiss="offcanvas" aria-label="Close"><img src="assets/img/close.png" alt="Close Icon" /></a>
      </div>
    </div>
    <div class="offcanvas-body p-0">
      <div data-simplebar class="h-100">
        <div class="settings-mains">
          <div class="layout-head">
            <h5>Layout</h5>
            <h6>Choose your layout</h6>
          </div>
          <div class="row">
            <div class="col-4">
              <div class="form-check card-radio p-0">
                <input
                  id="customizer-layout01"
                  name="data-layout"
                  type="radio"
                  value="vertical"
                  class="form-check-input" />
                <label
                  class="form-check-label avatar-md w-100"
                  for="customizer-layout01">
                  <img src="assets/img/vertical.png" alt="Layout Image" />
                </label>
              </div>
              <h5 class="fs-13 text-center mt-2">Vertical</h5>
            </div>
            <div class="col-4">
              <div class="form-check card-radio p-0">
                <input
                  id="customizer-layout02"
                  name="data-layout"
                  type="radio"
                  value="horizontal"
                  class="form-check-input" />
                <label
                  class="form-check-label avatar-md w-100"
                  for="customizer-layout02">
                  <img src="assets/img/horizontal.png" alt="Layout Image" />
                </label>
              </div>
              <h5 class="fs-13 text-center mt-2">Horizontal</h5>
            </div>
            <div class="col-4">
              <div class="form-check card-radio p-0">
                <input
                  id="customizer-layout03"
                  name="data-layout"
                  type="radio"
                  value="twocolumn"
                  class="form-check-input" />
                <label
                  class="form-check-label avatar-md w-100"
                  for="customizer-layout03">
                  <img src="assets/img/two-col.png" alt="Layout Image" />
                </label>
              </div>
              <h5 class="fs-13 text-center mt-2">Two Column</h5>
            </div>
          </div>
          <div class="layout-head pt-3">
            <h5>Color Scheme</h5>
            <h6>Choose Light or Dark Scheme.</h6>
          </div>
          <div class="colorscheme-cardradio">
            <div class="row">
              <div class="col-4">
                <div class="form-check card-radio p-0">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="data-layout-mode"
                    id="layout-mode-orange"
                    value="orange" />
                  <label
                    class="form-check-label avatar-md w-100"
                    for="layout-mode-orange">
                    <img src="assets/img/vertical.png" alt="Layout Image" />
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Orange</h5>
              </div>
              <div class="col-4">
                <div class="form-check card-radio p-0">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="data-layout-mode"
                    id="layout-mode-light"
                    value="light" />
                  <label
                    class="form-check-label avatar-md w-100"
                    for="layout-mode-light">
                    <img src="assets/img/vertical.png" alt="Layout Image" />
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Light</h5>
              </div>
              <div class="col-4">
                <div class="form-check card-radio dark p-0">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="data-layout-mode"
                    id="layout-mode-dark"
                    value="dark" />
                  <label
                    class="form-check-label avatar-md w-100"
                    for="layout-mode-dark">
                    <img src="assets/img/vertical.png" alt="Layout Image" />
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Dark</h5>
              </div>
              <div class="col-4">
                <div class="form-check card-radio blue p-0">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="data-layout-mode"
                    id="layout-mode-blue"
                    value="blue" />
                  <label
                    class="form-check-label avatar-md w-100"
                    for="layout-mode-blue">
                    <img src="assets/img/vertical.png" alt="Layout Image" />
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Blue</h5>
              </div>
              <div class="col-4">
                <div class="form-check card-radio maroon p-0">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="data-layout-mode"
                    id="layout-mode-maroon"
                    value="maroon" />
                  <label
                    class="form-check-label avatar-md w-100"
                    for="layout-mode-maroon">
                    <img src="assets/img/vertical.png" alt="Layout Image" />
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Maroon</h5>
              </div>
              <div class="col-4">
                <div class="form-check card-radio purple p-0">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="data-layout-mode"
                    id="layout-mode-purple"
                    value="purple" />
                  <label
                    class="form-check-label avatar-md w-100"
                    for="layout-mode-purple">
                    <img src="assets/img/vertical.png" alt="Layout Image" />
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Purple</h5>
              </div>
            </div>
          </div>
          <div id="layout-width">
            <div class="layout-head pt-3">
              <h5>Layout Width</h5>
              <h6>Choose Fluid or Boxed layout.</h6>
            </div>
            <div class="row">
              <div class="col-4">
                <div class="form-check card-radio p-0">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="data-layout-width"
                    id="layout-width-fluid"
                    value="fluid" />
                  <label
                    class="form-check-label avatar-md w-100"
                    for="layout-width-fluid">
                    <img src="assets/img/vertical.png" alt="Layout Image" />
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Fluid</h5>
              </div>
              <div class="col-4">
                <div class="form-check card-radio p-0">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="data-layout-width"
                    id="layout-width-boxed"
                    value="boxed" />
                  <label
                    class="form-check-label avatar-md w-100 px-2"
                    for="layout-width-boxed">
                    <img src="assets/img/boxed.png" alt="Layout Image" />
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Boxed</h5>
              </div>
            </div>
          </div>
          <div id="layout-position">
            <div class="layout-head pt-3">
              <h5>Layout Position</h5>
              <h6>Choose Fixed or Scrollable Layout Position.</h6>
            </div>
            <div
              class="btn-group bor-rad-50 overflow-hidden radio"
              role="group">
              <input
                type="radio"
                class="btn-check"
                name="data-layout-position"
                id="layout-position-fixed"
                value="fixed" />
              <label class="btn btn-light w-sm" for="layout-position-fixed">Fixed</label>
              <input
                type="radio"
                class="btn-check"
                name="data-layout-position"
                id="layout-position-scrollable"
                value="scrollable" />
              <label
                class="btn btn-light w-sm ms-0"
                for="layout-position-scrollable">Scrollable</label>
            </div>
          </div>
          <div class="layout-head pt-3">
            <h5>Topbar Color</h5>
            <h6>Choose Light or Dark Topbar Color.</h6>
          </div>
          <div class="row">
            <div class="col-4">
              <div class="form-check card-radio p-0">
                <input
                  class="form-check-input"
                  type="radio"
                  name="data-topbar"
                  id="topbar-color-light"
                  value="light" />
                <label
                  class="form-check-label avatar-md w-100"
                  for="topbar-color-light">
                  <img src="assets/img/vertical.png" alt="Layout Image" />
                </label>
              </div>
              <h5 class="fs-13 text-center mt-2">Light</h5>
            </div>
            <div class="col-4">
              <div class="form-check card-radio p-0">
                <input
                  class="form-check-input"
                  type="radio"
                  name="data-topbar"
                  id="topbar-color-dark"
                  value="dark" />
                <label
                  class="form-check-label avatar-md w-100"
                  for="topbar-color-dark">
                  <img src="assets/img/dark.png" alt="Layout Image" />
                </label>
              </div>
              <h5 class="fs-13 text-center mt-2">Dark</h5>
            </div>
          </div>
          <div id="sidebar-size">
            <div class="layout-head pt-3">
              <h5>Sidebar Size</h5>
              <h6>Choose a size of Sidebar.</h6>
            </div>
            <div class="row">
              <div class="col-4">
                <div class="form-check sidebar-setting card-radio p-0">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="data-sidebar-size"
                    id="sidebar-size-default"
                    value="lg" />
                  <label
                    class="form-check-label avatar-md w-100"
                    for="sidebar-size-default">
                    <img src="assets/img/vertical.png" alt="Layout Image" />
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Default</h5>
              </div>
              <div class="col-4">
                <div class="form-check sidebar-setting card-radio p-0">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="data-sidebar-size"
                    id="sidebar-size-compact"
                    value="md" />
                  <label
                    class="form-check-label avatar-md w-100"
                    for="sidebar-size-compact">
                    <img src="assets/img/compact.png" alt="Layout Image" />
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Compact</h5>
              </div>
              <div class="col-4">
                <div class="form-check sidebar-setting card-radio p-0">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="data-sidebar-size"
                    id="sidebar-size-small-hover"
                    value="sm-hover" />
                  <label
                    class="form-check-label avatar-md w-100"
                    for="sidebar-size-small-hover">
                    <img
                      src="assets/img/small-hover.png"
                      alt="Layout Image" />
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Small Hover View</h5>
              </div>
            </div>
          </div>
          <div id="sidebar-view">
            <div class="layout-head pt-3">
              <h5>Sidebar View</h5>
              <h6>Choose Default or Detached Sidebar view.</h6>
            </div>
            <div class="row">
              <div class="col-4">
                <div class="form-check sidebar-setting card-radio p-0">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="data-layout-style"
                    id="sidebar-view-default"
                    value="default" />
                  <label
                    class="form-check-label avatar-md w-100"
                    for="sidebar-view-default">
                    <img src="assets/img/compact.png" alt="Layout Image" />
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Default</h5>
              </div>
              <div class="col-4">
                <div class="form-check sidebar-setting card-radio p-0">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="data-layout-style"
                    id="sidebar-view-detached"
                    value="detached" />
                  <label
                    class="form-check-label avatar-md w-100"
                    for="sidebar-view-detached">
                    <img src="assets/img/detached.png" alt="Layout Image" />
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Detached</h5>
              </div>
            </div>
          </div>
          <div id="sidebar-color">
            <div class="layout-head pt-3">
              <h5>Sidebar Color</h5>
              <h6>Choose a color of Sidebar.</h6>
            </div>
            <div class="row">
              <div class="col-4">
                <div
                  class="form-check sidebar-setting card-radio p-0"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseBgGradient.show">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="data-sidebar"
                    id="sidebar-color-light"
                    value="light" />
                  <label
                    class="form-check-label avatar-md w-100"
                    for="sidebar-color-light">
                    <span class="bg-light bg-sidebarcolor"></span>
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Light</h5>
              </div>
              <div class="col-4">
                <div
                  class="form-check sidebar-setting card-radio p-0"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseBgGradient.show">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="data-sidebar"
                    id="sidebar-color-dark"
                    value="dark" />
                  <label
                    class="form-check-label avatar-md w-100"
                    for="sidebar-color-dark">
                    <span class="bg-darks bg-sidebarcolor"></span>
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Dark</h5>
              </div>
              <div class="col-4">
                <div class="form-check sidebar-setting card-radio p-0">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="data-sidebar"
                    id="sidebar-color-gradient"
                    value="gradient" />
                  <label
                    class="form-check-label avatar-md w-100"
                    for="sidebar-color-gradient">
                    <span class="bg-gradients bg-sidebarcolor"></span>
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Gradient</h5>
              </div>
              <div class="col-4 d-none">
                <button
                  class="btn btn-link avatar-md w-100 p-0 overflow-hidden border collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseBgGradient"
                  aria-expanded="false">
                  <span class="d-flex gap-1 h-100">
                    <span class="flex-shrink-0">
                      <span
                        class="bg-vertical-gradient d-flex h-100 flex-column gap-1 p-1">
                        <span
                          class="d-block p-1 px-2 bg-soft-light rounded mb-2"></span>
                        <span
                          class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                        <span
                          class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                        <span
                          class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                      </span>
                    </span>
                    <span class="flex-grow-1">
                      <span class="d-flex h-100 flex-column">
                        <span class="bg-light d-block p-1"></span>
                        <span class="bg-light d-block p-1 mt-auto"></span>
                      </span>
                    </span>
                  </span>
                </button>
                <h5 class="fs-13 text-center mt-2">Gradient</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="offcanvas-footer border-top p-3 text-center">
      <div class="row">
        <div class="col-6">
          <button
            type="button"
            class="btn btn-light w-100 bor-rad-50"
            id="reset-layout">
            Reset
          </button>
        </div>
        <div class="col-6">
          <a
            href="https://themeforest.net/item/smarthr-bootstrap-admin-panel-template/21153150"
            target="_blank"
            class="btn btn-primary w-100 bor-rad-50">Buy Now</a>
        </div>
      </div>
    </div>
  </div>
  <!-- JavaScript Assets in Laravel -->
  <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>
  <script src="{{ asset('assets/js/feather.min.js') }}"></script>
  <script src="{{ asset('assets/js/layout.js') }}"></script>
  <script src="{{ asset('assets/js/theme-settings.js') }}"></script>
  <script src="{{ asset('assets/js/greedynav.js') }}"></script>
  <script src="{{ asset('assets/js/app.js') }}"></script>

  <!-- Optional: Cloudflare Rocket Loader (ensure path is correct) -->
  <script src="{{ asset('cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}"
    data-cf-settings="1db758d793f2654a326f4c8e-|49" defer></script>

</body>

<!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/file-manager by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:22:30 GMT -->

</html>