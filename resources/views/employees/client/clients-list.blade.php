<!DOCTYPE html>
<html
  lang="en"
  data-layout="vertical"
  data-topbar="light"
  data-sidebar="dark"
  data-sidebar-size="lg"
  data-sidebar-image="none"
>
  <!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/clients-list by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:25:06 GMT -->
  <!-- Added by HTTrack --><meta
    http-equiv="content-type"
    content="text/html;charset=UTF-8"
  /><!-- /Added by HTTrack -->
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Smarthr - Bootstrap Admin Template" />
    <meta
      name="keywords"
      content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects"
    />
    <meta
      name="author"
      content="Dreamstechnologies - Bootstrap Admin Template"
    />
    <title>Clients - HRMS admin template</title>
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}" />

<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />

<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}" />

<link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/material.css') }}" />

<link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap4.min.css') }}" />

<link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}" />

<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

  
  </head>
  <body>
    <div class="main-wrapper">
     
@include('layouts.header')
@include('layouts.sidebar')



      <div class="page-wrapper">
        <div class="content container-fluid">
          <div class="page-header">
            <div class="row align-items-center">
              <div class="col">
                <h3 class="page-title">Clients</h3>
                <ul class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="admin-dashboard.html">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active">Clients</li>
                </ul>
              </div>
              <div class="col-auto float-end ms-auto"></div>
              <div class="col-auto float-end ms-auto">
                <a
                  href="#"
                  class="btn add-btn"
                  data-bs-toggle="modal"
                  data-bs-target="#add_client"
                  ><i class="fa fa-plus"></i> Add Client</a
                >
                <div class="view-icons">
                  <a href="{{route('clients')}}" class="grid-view btn btn-link"
                    ><i class="fa fa-th"></i
                  ></a>
                  <a
                    href="{{route('clients-list')}}"
                    class="list-view btn btn-link active"
                    ><i class="fa fa-bars"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>

          <div class="row filter-row">
            <div class="col-sm-6 col-md-3">
              <div class="input-block mb-3 form-focus">
                <input type="text" class="form-control floating" />
                <label class="focus-label">Client ID</label>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="input-block mb-3 form-focus">
                <input type="text" class="form-control floating" />
                <label class="focus-label">Client Name</label>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="input-block mb-3 form-focus select-focus">
                <select class="select floating">
                  <option>Select Company</option>
                  <option>Global Technologies</option>
                  <option>Delta Infotech</option>
                </select>
                <label class="focus-label">Company</label>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="d-grid">
                <a href="#" class="btn btn-success"> Search </a>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-striped custom-table datatable">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Client ID</th>
                      <th>Contact Person</th>
                      <th>Email</th>
                      <th>Mobile</th>
                      <th>Status</th>
                      <th class="text-end">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <h2 class="table-avatar">
                          <a href="client-profile.html" class="avatar"
                            ><img
                              src="assets/img/profiles/avatar-19.jpg"
                              alt="User Image"
                          /></a>
                          <a href="client-profile.html">Global Technologies</a>
                        </h2>
                      </td>
                      <td>CLT-0001</td>
                      <td>Barry Cuda</td>
                      <td>
                        <a
                          href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection"
                          class="__cf_email__"
                          data-cfemail="24464556565d4751404564415c45495448410a474b49"
                          >[email&#160;protected]</a
                        >
                      </td>
                      <td>9876543210</td>
                      <td>
                        <div class="dropdown action-label">
                          <a
                            href="#"
                            class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            ><i
                              class="fa-regular fa-circle-dot text-success"
                            ></i>
                            Active
                          </a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"
                              ><i
                                class="fa-regular fa-circle-dot text-success"
                              ></i>
                              Active</a
                            >
                            <a class="dropdown-item" href="#"
                              ><i
                                class="fa-regular fa-circle-dot text-danger"
                              ></i>
                              Inactive</a
                            >
                          </div>
                        </div>
                      </td>
                      <td class="text-end">
                        <div class="dropdown dropdown-action">
                          <a
                            href="#"
                            class="action-icon dropdown-toggle"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            ><i class="material-icons">more_vert</i></a
                          >
                          <div class="dropdown-menu dropdown-menu-right">
                            <a
                              class="dropdown-item"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#edit_client"
                              ><i class="fa-solid fa-pencil m-r-5"></i> Edit</a
                            >
                            <a
                              class="dropdown-item"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#delete_client"
                              ><i class="fa-regular fa-trash-can m-r-5"></i>
                              Delete</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h2 class="table-avatar">
                          <a href="client-profile.html" class="avatar"
                            ><img
                              src="assets/img/profiles/avatar-29.jpg"
                              alt="User Image"
                          /></a>
                          <a href="client-profile.html">Delta Infotech</a>
                        </h2>
                      </td>
                      <td>CLT-0002</td>
                      <td>Tressa Wexler</td>
                      <td>
                        <a
                          href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection"
                          class="__cf_email__"
                          data-cfemail="c4b0b6a1b7b7a5b3a1bca8a1b684a1bca5a9b4a8a1eaa7aba9"
                          >[email&#160;protected]</a
                        >
                      </td>
                      <td>9876543210</td>
                      <td>
                        <div class="dropdown action-label">
                          <a
                            href="#"
                            class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            ><i
                              class="fa-regular fa-circle-dot text-danger"
                            ></i>
                            Inactive
                          </a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"
                              ><i
                                class="fa-regular fa-circle-dot text-success"
                              ></i>
                              Active</a
                            >
                            <a class="dropdown-item" href="#"
                              ><i
                                class="fa-regular fa-circle-dot text-danger"
                              ></i>
                              Inactive</a
                            >
                          </div>
                        </div>
                      </td>
                      <td class="text-end">
                        <div class="dropdown dropdown-action">
                          <a
                            href="#"
                            class="action-icon dropdown-toggle"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            ><i class="material-icons">more_vert</i></a
                          >
                          <div class="dropdown-menu dropdown-menu-right">
                            <a
                              class="dropdown-item"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#edit_client"
                              ><i class="fa-solid fa-pencil m-r-5"></i> Edit</a
                            >
                            <a
                              class="dropdown-item"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#delete_client"
                              ><i class="fa-regular fa-trash-can m-r-5"></i>
                              Delete</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h2 class="table-avatar">
                          <a href="client-profile.html" class="avatar"
                            ><img
                              src="assets/img/profiles/avatar-07.jpg"
                              alt="User Image"
                          /></a>
                          <a href="client-profile.html">Cream Inc</a>
                        </h2>
                      </td>
                      <td>CLT-0003</td>
                      <td>Ruby Bartlett</td>
                      <td>
                        <a
                          href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection"
                          class="__cf_email__"
                          data-cfemail="4d3f382f342f2c3f39212839390d28352c203d2128632e2220"
                          >[email&#160;protected]</a
                        >
                      </td>
                      <td>9876543210</td>
                      <td>
                        <div class="dropdown action-label">
                          <a
                            href="#"
                            class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            ><i
                              class="fa-regular fa-circle-dot text-success"
                            ></i>
                            Active
                          </a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"
                              ><i
                                class="fa-regular fa-circle-dot text-success"
                              ></i>
                              Active</a
                            >
                            <a class="dropdown-item" href="#"
                              ><i
                                class="fa-regular fa-circle-dot text-danger"
                              ></i>
                              Inactive</a
                            >
                          </div>
                        </div>
                      </td>
                      <td class="text-end">
                        <div class="dropdown dropdown-action">
                          <a
                            href="#"
                            class="action-icon dropdown-toggle"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            ><i class="material-icons">more_vert</i></a
                          >
                          <div class="dropdown-menu dropdown-menu-right">
                            <a
                              class="dropdown-item"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#edit_client"
                              ><i class="fa-solid fa-pencil m-r-5"></i> Edit</a
                            >
                            <a
                              class="dropdown-item"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#delete_client"
                              ><i class="fa-regular fa-trash-can m-r-5"></i>
                              Delete</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h2 class="table-avatar">
                          <a href="client-profile.html" class="avatar"
                            ><img
                              src="assets/img/profiles/avatar-06.jpg"
                              alt="User Image"
                          /></a>
                          <a href="client-profile.html">Wellware Company</a>
                        </h2>
                      </td>
                      <td>CLT-0004</td>
                      <td>Misty Tison</td>
                      <td>
                        <a
                          href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection"
                          class="__cf_email__"
                          data-cfemail="92fffbe1e6ebe6fbe1fdfcd2f7eaf3ffe2fef7bcf1fdff"
                          >[email&#160;protected]</a
                        >
                      </td>
                      <td>9876543210</td>
                      <td>
                        <div class="dropdown action-label">
                          <a
                            href="#"
                            class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            ><i
                              class="fa-regular fa-circle-dot text-success"
                            ></i>
                            Active
                          </a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"
                              ><i
                                class="fa-regular fa-circle-dot text-success"
                              ></i>
                              Active</a
                            >
                            <a class="dropdown-item" href="#"
                              ><i
                                class="fa-regular fa-circle-dot text-danger"
                              ></i>
                              Inactive</a
                            >
                          </div>
                        </div>
                      </td>
                      <td class="text-end">
                        <div class="dropdown dropdown-action">
                          <a
                            href="#"
                            class="action-icon dropdown-toggle"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            ><i class="material-icons">more_vert</i></a
                          >
                          <div class="dropdown-menu dropdown-menu-right">
                            <a
                              class="dropdown-item"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#edit_client"
                              ><i class="fa-solid fa-pencil m-r-5"></i> Edit</a
                            >
                            <a
                              class="dropdown-item"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#delete_client"
                              ><i class="fa-regular fa-trash-can m-r-5"></i>
                              Delete</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h2 class="table-avatar">
                          <a href="client-profile.html" class="avatar"
                            ><img
                              src="assets/img/profiles/avatar-14.jpg"
                              alt="User Image"
                          /></a>
                          <a href="client-profile.html">Mustang Technologies</a>
                        </h2>
                      </td>
                      <td>CLT-0005</td>
                      <td>Daniel Deacon</td>
                      <td>
                        <a
                          href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection"
                          class="__cf_email__"
                          data-cfemail="aecacfc0c7cbc2cacbcfcdc1c0eecbd6cfc3dec2cb80cdc1c3"
                          >[email&#160;protected]</a
                        >
                      </td>
                      <td>9876543210</td>
                      <td>
                        <div class="dropdown action-label">
                          <a
                            href="#"
                            class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            ><i
                              class="fa-regular fa-circle-dot text-success"
                            ></i>
                            Active
                          </a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"
                              ><i
                                class="fa-regular fa-circle-dot text-success"
                              ></i>
                              Active</a
                            >
                            <a class="dropdown-item" href="#"
                              ><i
                                class="fa-regular fa-circle-dot text-danger"
                              ></i>
                              Inactive</a
                            >
                          </div>
                        </div>
                      </td>
                      <td class="text-end">
                        <div class="dropdown dropdown-action">
                          <a
                            href="#"
                            class="action-icon dropdown-toggle"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            ><i class="material-icons">more_vert</i></a
                          >
                          <div class="dropdown-menu dropdown-menu-right">
                            <a
                              class="dropdown-item"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#edit_client"
                              ><i class="fa-solid fa-pencil m-r-5"></i> Edit</a
                            >
                            <a
                              class="dropdown-item"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#delete_client"
                              ><i class="fa-regular fa-trash-can m-r-5"></i>
                              Delete</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h2 class="table-avatar">
                          <a href="client-profile.html" class="avatar"
                            ><img
                              src="assets/img/profiles/avatar-18.jpg"
                              alt="User Image"
                          /></a>
                          <a href="client-profile.html"
                            >International Software Inc</a
                          >
                        </h2>
                      </td>
                      <td>CLT-0006</td>
                      <td>Walter Weaver</td>
                      <td>
                        <a
                          href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection"
                          class="__cf_email__"
                          data-cfemail="6c1b0d0018091e1b090d1a091e2c09140d011c0009420f0301"
                          >[email&#160;protected]</a
                        >
                      </td>
                      <td>9876543210</td>
                      <td>
                        <div class="dropdown action-label">
                          <a
                            href="#"
                            class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            ><i
                              class="fa-regular fa-circle-dot text-success"
                            ></i>
                            Active
                          </a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"
                              ><i
                                class="fa-regular fa-circle-dot text-success"
                              ></i>
                              Active</a
                            >
                            <a class="dropdown-item" href="#"
                              ><i
                                class="fa-regular fa-circle-dot text-danger"
                              ></i>
                              Inactive</a
                            >
                          </div>
                        </div>
                      </td>
                      <td class="text-end">
                        <div class="dropdown dropdown-action">
                          <a
                            href="#"
                            class="action-icon dropdown-toggle"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            ><i class="material-icons">more_vert</i></a
                          >
                          <div class="dropdown-menu dropdown-menu-right">
                            <a
                              class="dropdown-item"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#edit_client"
                              ><i class="fa-solid fa-pencil m-r-5"></i> Edit</a
                            >
                            <a
                              class="dropdown-item"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#delete_client"
                              ><i class="fa-regular fa-trash-can m-r-5"></i>
                              Delete</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h2 class="table-avatar">
                          <a href="client-profile.html" class="avatar"
                            ><img
                              src="assets/img/profiles/avatar-28.jpg"
                              alt="User Image"
                          /></a>
                          <a href="client-profile.html">Mercury Software Inc</a>
                        </h2>
                      </td>
                      <td>CLT-0007</td>
                      <td>Amanda Warren</td>
                      <td>
                        <a
                          href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection"
                          class="__cf_email__"
                          data-cfemail="debfb3bfb0babfa9bfacacbbb09ebba6bfb3aeb2bbf0bdb1b3"
                          >[email&#160;protected]</a
                        >
                      </td>
                      <td>9876543210</td>
                      <td>
                        <div class="dropdown action-label">
                          <a
                            href="#"
                            class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            ><i
                              class="fa-regular fa-circle-dot text-success"
                            ></i>
                            Active
                          </a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"
                              ><i
                                class="fa-regular fa-circle-dot text-success"
                              ></i>
                              Active</a
                            >
                            <a class="dropdown-item" href="#"
                              ><i
                                class="fa-regular fa-circle-dot text-danger"
                              ></i>
                              Inactive</a
                            >
                          </div>
                        </div>
                      </td>
                      <td class="text-end">
                        <div class="dropdown dropdown-action">
                          <a
                            href="#"
                            class="action-icon dropdown-toggle"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            ><i class="material-icons">more_vert</i></a
                          >
                          <div class="dropdown-menu dropdown-menu-right">
                            <a
                              class="dropdown-item"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#edit_client"
                              ><i class="fa-solid fa-pencil m-r-5"></i> Edit</a
                            >
                            <a
                              class="dropdown-item"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#delete_client"
                              ><i class="fa-regular fa-trash-can m-r-5"></i>
                              Delete</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h2 class="table-avatar">
                          <a href="client-profile.html" class="avatar"
                            ><img
                              src="assets/img/profiles/avatar-22.jpg"
                              alt="User Image"
                          /></a>
                          <a href="client-profile.html">Carlson Tech</a>
                        </h2>
                      </td>
                      <td>CLT-0008</td>
                      <td>Betty Carlson</td>
                      <td>
                        <a
                          href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection"
                          class="__cf_email__"
                          data-cfemail="197b7c6d6d607a786b756a7677597c61787469757c377a7674"
                          >[email&#160;protected]</a
                        >
                      </td>
                      <td>9876543210</td>
                      <td>
                        <div class="dropdown action-label">
                          <a
                            href="#"
                            class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            ><i
                              class="fa-regular fa-circle-dot text-danger"
                            ></i>
                            Inactive
                          </a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"
                              ><i
                                class="fa-regular fa-circle-dot text-success"
                              ></i>
                              Active</a
                            >
                            <a class="dropdown-item" href="#"
                              ><i
                                class="fa-regular fa-circle-dot text-danger"
                              ></i>
                              Inactive</a
                            >
                          </div>
                        </div>
                      </td>
                      <td class="text-end">
                        <div class="dropdown dropdown-action">
                          <a
                            href="#"
                            class="action-icon dropdown-toggle"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            ><i class="material-icons">more_vert</i></a
                          >
                          <div class="dropdown-menu dropdown-menu-right">
                            <a
                              class="dropdown-item"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#edit_client"
                              ><i class="fa-solid fa-pencil m-r-5"></i> Edit</a
                            >
                            <a
                              class="dropdown-item"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#delete_client"
                              ><i class="fa-regular fa-trash-can m-r-5"></i>
                              Delete</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div id="add_client" class="modal custom-modal fade" role="dialog">
            <div
              class="modal-dialog modal-dialog-centered modal-lg"
              role="document"
            >
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Add Client</h5>
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  >
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="input-block mb-3">
                          <label class="col-form-label"
                            >First Name
                            <span class="text-danger">*</span></label
                          >
                          <input class="form-control" type="text" />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-block mb-3">
                          <label class="col-form-label">Last Name</label>
                          <input class="form-control" type="text" />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-block mb-3">
                          <label class="col-form-label"
                            >Username <span class="text-danger">*</span></label
                          >
                          <input class="form-control" type="text" />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-block mb-3">
                          <label class="col-form-label"
                            >Email <span class="text-danger">*</span></label
                          >
                          <input class="form-control floating" type="email" />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-block mb-3">
                          <label class="col-form-label">Password</label>
                          <input class="form-control" type="password" />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-block mb-3">
                          <label class="col-form-label">Confirm Password</label>
                          <input class="form-control" type="password" />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-block mb-3">
                          <label class="col-form-label"
                            >Client ID <span class="text-danger">*</span></label
                          >
                          <input class="form-control floating" type="text" />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-block mb-3">
                          <label class="col-form-label">Phone </label>
                          <input class="form-control" type="text" />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-block mb-3">
                          <label class="col-form-label">Company Name</label>
                          <input class="form-control" type="text" />
                        </div>
                      </div>
                    </div>
                    <div class="table-responsive m-t-15">
                      <table class="table table-striped custom-table">
                        <thead>
                          <tr>
                            <th>Module Permission</th>
                            <th class="text-center">Read</th>
                            <th class="text-center">Write</th>
                            <th class="text-center">Create</th>
                            <th class="text-center">Delete</th>
                            <th class="text-center">Import</th>
                            <th class="text-center">Export</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Projects</td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                          </tr>
                          <tr>
                            <td>Tasks</td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                          </tr>
                          <tr>
                            <td>Chat</td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                          </tr>
                          <tr>
                            <td>Estimates</td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                          </tr>
                          <tr>
                            <td>Invoices</td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                          </tr>
                          <tr>
                            <td>Timing Sheets</td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="submit-section">
                      <button class="btn btn-primary submit-btn">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div id="edit_client" class="modal custom-modal fade" role="dialog">
            <div
              class="modal-dialog modal-dialog-centered modal-lg"
              role="document"
            >
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Edit Client</h5>
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  >
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="input-block mb-3">
                          <label class="col-form-label"
                            >First Name
                            <span class="text-danger">*</span></label
                          >
                          <input
                            class="form-control"
                            value="Barry"
                            type="text"
                          />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-block mb-3">
                          <label class="col-form-label">Last Name</label>
                          <input
                            class="form-control"
                            value="Cuda"
                            type="text"
                          />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-block mb-3">
                          <label class="col-form-label"
                            >Username <span class="text-danger">*</span></label
                          >
                          <input
                            class="form-control"
                            value="barrycuda"
                            type="text"
                          />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-block mb-3">
                          <label class="col-form-label"
                            >Email <span class="text-danger">*</span></label
                          >
                          <input
                            class="form-control floating"
                            value="barrycuda@example.com"
                            type="email"
                          />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-block mb-3">
                          <label class="col-form-label">Password</label>
                          <input
                            class="form-control"
                            value="barrycuda"
                            type="password"
                          />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-block mb-3">
                          <label class="col-form-label">Confirm Password</label>
                          <input
                            class="form-control"
                            value="barrycuda"
                            type="password"
                          />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-block mb-3">
                          <label class="col-form-label"
                            >Client ID <span class="text-danger">*</span></label
                          >
                          <input
                            class="form-control floating"
                            value="CLT-0001"
                            type="text"
                          />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-block mb-3">
                          <label class="col-form-label">Phone </label>
                          <input
                            class="form-control"
                            value="9876543210"
                            type="text"
                          />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-block mb-3">
                          <label class="col-form-label">Company Name</label>
                          <input
                            class="form-control"
                            type="text"
                            value="Global Technologies"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="table-responsive m-t-15">
                      <table class="table table-striped custom-table">
                        <thead>
                          <tr>
                            <th>Module Permission</th>
                            <th class="text-center">Read</th>
                            <th class="text-center">Write</th>
                            <th class="text-center">Create</th>
                            <th class="text-center">Delete</th>
                            <th class="text-center">Import</th>
                            <th class="text-center">Export</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Projects</td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                          </tr>
                          <tr>
                            <td>Tasks</td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                          </tr>
                          <tr>
                            <td>Chat</td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                          </tr>
                          <tr>
                            <td>Estimates</td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                          </tr>
                          <tr>
                            <td>Invoices</td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                          </tr>
                          <tr>
                            <td>Timing Sheets</td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td class="text-center">
                              <label class="custom_check">
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                              </label>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="submit-section">
                      <button class="btn btn-primary submit-btn">Save</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="modal custom-modal fade" id="delete_client" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-body">
                  <div class="form-header">
                    <h3>Delete Client</h3>
                    <p>Are you sure want to delete?</p>
                  </div>
                  <div class="modal-btn delete-action">
                    <div class="row">
                      <div class="col-6">
                        <a
                          href="javascript:void(0);"
                          class="btn btn-primary continue-btn"
                          >Delete</a
                        >
                      </div>
                      <div class="col-6">
                        <a
                          href="javascript:void(0);"
                          data-bs-dismiss="modal"
                          class="btn btn-primary cancel-btn"
                          >Cancel</a
                        >
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
        aria-controls="theme-settings-offcanvas"
        ><i class="las la-cog"></i
      ></span>
    </div>
    <div
      class="offcanvas offcanvas-end border-0"
      tabindex="-1"
      id="theme-settings-offcanvas"
    >
      <div class="sidebar-headerset">
        <div class="sidebar-headersets">
          <h2>Customizer</h2>
          <h3>Customize your overview Page layout</h3>
        </div>
        <div class="sidebar-headerclose">
          <a data-bs-dismiss="offcanvas" aria-label="Close"
            ><img src="assets/img/close.png" alt="Close Icon"
          /></a>
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
                    class="form-check-input"
                  />
                  <label
                    class="form-check-label avatar-md w-100"
                    for="customizer-layout01"
                  >
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
                    class="form-check-input"
                  />
                  <label
                    class="form-check-label avatar-md w-100"
                    for="customizer-layout02"
                  >
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
                    class="form-check-input"
                  />
                  <label
                    class="form-check-label avatar-md w-100"
                    for="customizer-layout03"
                  >
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
                      value="orange"
                    />
                    <label
                      class="form-check-label avatar-md w-100"
                      for="layout-mode-orange"
                    >
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
                      value="light"
                    />
                    <label
                      class="form-check-label avatar-md w-100"
                      for="layout-mode-light"
                    >
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
                      value="dark"
                    />
                    <label
                      class="form-check-label avatar-md w-100"
                      for="layout-mode-dark"
                    >
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
                      value="blue"
                    />
                    <label
                      class="form-check-label avatar-md w-100"
                      for="layout-mode-blue"
                    >
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
                      value="maroon"
                    />
                    <label
                      class="form-check-label avatar-md w-100"
                      for="layout-mode-maroon"
                    >
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
                      value="purple"
                    />
                    <label
                      class="form-check-label avatar-md w-100"
                      for="layout-mode-purple"
                    >
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
                      value="fluid"
                    />
                    <label
                      class="form-check-label avatar-md w-100"
                      for="layout-width-fluid"
                    >
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
                      value="boxed"
                    />
                    <label
                      class="form-check-label avatar-md w-100 px-2"
                      for="layout-width-boxed"
                    >
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
                role="group"
              >
                <input
                  type="radio"
                  class="btn-check"
                  name="data-layout-position"
                  id="layout-position-fixed"
                  value="fixed"
                />
                <label class="btn btn-light w-sm" for="layout-position-fixed"
                  >Fixed</label
                >
                <input
                  type="radio"
                  class="btn-check"
                  name="data-layout-position"
                  id="layout-position-scrollable"
                  value="scrollable"
                />
                <label
                  class="btn btn-light w-sm ms-0"
                  for="layout-position-scrollable"
                  >Scrollable</label
                >
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
                    value="light"
                  />
                  <label
                    class="form-check-label avatar-md w-100"
                    for="topbar-color-light"
                  >
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
                    value="dark"
                  />
                  <label
                    class="form-check-label avatar-md w-100"
                    for="topbar-color-dark"
                  >
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
                      value="lg"
                    />
                    <label
                      class="form-check-label avatar-md w-100"
                      for="sidebar-size-default"
                    >
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
                      value="md"
                    />
                    <label
                      class="form-check-label avatar-md w-100"
                      for="sidebar-size-compact"
                    >
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
                      value="sm-hover"
                    />
                    <label
                      class="form-check-label avatar-md w-100"
                      for="sidebar-size-small-hover"
                    >
                      <img
                        src="assets/img/small-hover.png"
                        alt="Layout Image"
                      />
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
                      value="default"
                    />
                    <label
                      class="form-check-label avatar-md w-100"
                      for="sidebar-view-default"
                    >
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
                      value="detached"
                    />
                    <label
                      class="form-check-label avatar-md w-100"
                      for="sidebar-view-detached"
                    >
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
                    data-bs-target="#collapseBgGradient.show"
                  >
                    <input
                      class="form-check-input"
                      type="radio"
                      name="data-sidebar"
                      id="sidebar-color-light"
                      value="light"
                    />
                    <label
                      class="form-check-label avatar-md w-100"
                      for="sidebar-color-light"
                    >
                      <span class="bg-light bg-sidebarcolor"></span>
                    </label>
                  </div>
                  <h5 class="fs-13 text-center mt-2">Light</h5>
                </div>
                <div class="col-4">
                  <div
                    class="form-check sidebar-setting card-radio p-0"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseBgGradient.show"
                  >
                    <input
                      class="form-check-input"
                      type="radio"
                      name="data-sidebar"
                      id="sidebar-color-dark"
                      value="dark"
                    />
                    <label
                      class="form-check-label avatar-md w-100"
                      for="sidebar-color-dark"
                    >
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
                      value="gradient"
                    />
                    <label
                      class="form-check-label avatar-md w-100"
                      for="sidebar-color-gradient"
                    >
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
                    aria-expanded="false"
                  >
                    <span class="d-flex gap-1 h-100">
                      <span class="flex-shrink-0">
                        <span
                          class="bg-vertical-gradient d-flex h-100 flex-column gap-1 p-1"
                        >
                          <span
                            class="d-block p-1 px-2 bg-soft-light rounded mb-2"
                          ></span>
                          <span
                            class="d-block p-1 px-2 pb-0 bg-soft-light"
                          ></span>
                          <span
                            class="d-block p-1 px-2 pb-0 bg-soft-light"
                          ></span>
                          <span
                            class="d-block p-1 px-2 pb-0 bg-soft-light"
                          ></span>
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
              id="reset-layout"
            >
              Reset
            </button>
          </div>
          <div class="col-6">
            <a
              href="https://themeforest.net/item/smarthr-bootstrap-admin-panel-template/21153150"
              target="_blank"
              class="btn btn-primary w-100 bor-rad-50"
              >Buy Now</a
            >
          </div>
        </div>
      </div>
    </div>
   <script data-cfasync="false" src="{{ asset('cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>

<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('assets/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/js/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/layout.js') }}"></script>
<script src="{{ asset('assets/js/theme-settings.js') }}"></script>
<script src="{{ asset('assets/js/greedynav.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>

<script defer src="{{ asset('cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}" data-cf-settings="7c2b2e65fe4c310595aa1538-|49"></script>

  </body>

  <!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/clients-list by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:25:07 GMT -->
</html>
