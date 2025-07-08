<!DOCTYPE html>
<html
  lang="en"
  data-layout="vertical"
  data-topbar="light"
  data-sidebar="dark"
  data-sidebar-size="lg"
  data-sidebar-image="none"
>
  <!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/performance by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:23:09 GMT -->
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
    <title>Performance Review - HRMS admin template</title>
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/material.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

  </head>
  <body>
    <div class="main-wrapper">
  
 
   
@include('layouts.header')
@include('layouts.sidebar')
      

      <div class="page-wrapper">
        <div class="content container-fluid">
          <div class="page-header">
            <div class="row">
              <div class="col-sm-12">
                <h3 class="page-title">Performance</h3>
                <ul class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="{{route('admin-dashboard')}}">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active">Performance</li>
                </ul>
              </div>
            </div>
          </div>

          <section class="review-section information">
            <div class="review-header text-center">
              <h3 class="review-title">Employee Basic Information</h3>
              <p class="text-muted">Lorem ipsum dollar</p>
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <div class="table-responsive">
                  <table
                    class="table table-bordered table-nowrap review-table mb-0"
                  >
                    <tbody>
                      <tr>
                        <td>
                          <form>
                            <div class="input-block mb-3">
                              <label for="name">Name</label>
                              <input
                                type="text"
                                class="form-control"
                                id="name"
                              />
                            </div>
                            <div class="input-block mb-3">
                              <label for="depart3">Department</label>
                              <input
                                type="text"
                                class="form-control"
                                id="depart3"
                              />
                            </div>
                            <div class="input-block mb-3">
                              <label for="departa">Designation</label>
                              <input
                                type="text"
                                class="form-control"
                                id="departa"
                              />
                            </div>
                            <div class="input-block mb-3">
                              <label for="qualif">Qualification: </label>
                              <input
                                type="text"
                                class="form-control"
                                id="qualif"
                              />
                            </div>
                          </form>
                        </td>
                        <td>
                          <form>
                            <div class="input-block mb-3">
                              <label for="doj">Emp ID</label>
                              <input
                                type="text"
                                class="form-control"
                                value="DGT-009"
                              />
                            </div>
                            <div class="input-block mb-3">
                              <label for="doj">Date of Join</label>
                              <input
                                type="text"
                                class="form-control"
                                id="doj"
                              />
                            </div>
                            <div class="input-block mb-3">
                              <label for="doc">Date of Confirmation</label>
                              <input
                                type="text"
                                class="form-control"
                                id="doc"
                              />
                            </div>
                            <div class="input-block mb-3">
                              <label for="qualif1">Previous years of Exp</label>
                              <input
                                type="text"
                                class="form-control"
                                id="qualif1"
                              />
                            </div>
                          </form>
                        </td>
                        <td>
                          <form>
                            <div class="input-block mb-3">
                              <label for="name1"> RO's Name</label>
                              <input
                                type="text"
                                class="form-control"
                                id="name1"
                              />
                            </div>
                            <div class="input-block mb-3">
                              <label for="depart1"> RO Designation: </label>
                              <input
                                type="text"
                                class="form-control"
                                id="depart1"
                              />
                            </div>
                          </form>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </section>
          <section class="review-section professional-excellence">
            <div class="review-header text-center">
              <h3 class="review-title">Professional Excellence</h3>
              <p class="text-muted">Lorem ipsum dollar</p>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="table-responsive">
                  <table class="table table-bordered review-table mb-0">
                    <thead>
                      <tr>
                        <th style="width: 40px">#</th>
                        <th>Key Result Area</th>
                        <th>Key Performance Indicators</th>
                        <th>Weightage</th>
                        <th>Percentage achieved <br />( self Score )</th>
                        <th>Points Scored <br />( self )</th>
                        <th>Percentage achieved <br />( RO's Score )</th>
                        <th>Points Scored <br />( RO )</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td rowspan="2">1</td>
                        <td rowspan="2">Production</td>
                        <td>Quality</td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="30"
                          />
                        </td>
                        <td><input type="text" class="form-control" /></td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="0"
                          />
                        </td>
                        <td><input type="text" class="form-control" /></td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="0"
                          />
                        </td>
                      </tr>
                      <tr>
                        <td>TAT (turn around time)</td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="30"
                          />
                        </td>
                        <td><input type="text" class="form-control" /></td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="0"
                          />
                        </td>
                        <td><input type="text" class="form-control" /></td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="0"
                          />
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Process Improvement</td>
                        <td>PMS,New Ideas</td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="10"
                          />
                        </td>
                        <td><input type="text" class="form-control" /></td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="0"
                          />
                        </td>
                        <td><input type="text" class="form-control" /></td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="0"
                          />
                        </td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Team Management</td>
                        <td>Team Productivity,dynaics,attendance,attrition</td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="5"
                          />
                        </td>
                        <td><input type="text" class="form-control" /></td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="0"
                          />
                        </td>
                        <td><input type="text" class="form-control" /></td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="0"
                          />
                        </td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Knowledge Sharing</td>
                        <td>Sharing the knowledge for team productivity</td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="5"
                          />
                        </td>
                        <td><input type="text" class="form-control" /></td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="0"
                          />
                        </td>
                        <td><input type="text" class="form-control" /></td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="0"
                          />
                        </td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>Reporting and Communication</td>
                        <td>Emails/Calls/Reports and Other Communication</td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="5"
                          />
                        </td>
                        <td><input type="text" class="form-control" /></td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="0"
                          />
                        </td>
                        <td><input type="text" class="form-control" /></td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="0"
                          />
                        </td>
                      </tr>
                      <tr>
                        <td colspan="3" class="text-center">Total</td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="85"
                          />
                        </td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="0"
                          />
                        </td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="0"
                          />
                        </td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="0"
                          />
                        </td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="0"
                          />
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </section>
          <section class="review-section personal-excellence">
            <div class="review-header text-center">
              <h3 class="review-title">Personal Excellence</h3>
              <p class="text-muted">Lorem ipsum dollar</p>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="table-responsive">
                  <table class="table table-bordered review-table mb-0">
                    <thead>
                      <tr>
                        <th style="width: 40px">#</th>
                        <th>Personal Attributes</th>
                        <th>Key Indicators</th>
                        <th>Weightage</th>
                        <th>Percentage achieved <br />( self Score )</th>
                        <th>Points Scored <br />( self )</th>
                        <th>Percentage achieved <br />( RO's Score )</th>
                        <th>Points Scored <br />( RO )</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td rowspan="2">1</td>
                        <td rowspan="2">Attendance</td>
                        <td>Planned or Unplanned Leaves</td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="2"
                          />
                        </td>
                        <td><input type="text" class="form-control" /></td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="0"
                          />
                        </td>
                        <td><input type="text" class="form-control" /></td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="0"
                          />
                        </td>
                      </tr>
                      <tr>
                        <td>Time Consciousness</td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="2"
                          />
                        </td>
                        <td><input type="text" class="form-control" /></td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="0"
                          />
                        </td>
                        <td><input type="text" class="form-control" /></td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="0"
                          />
                        </td>
                      </tr>
                      <tr>
                        <td rowspan="2">2</td>
                        <td rowspan="2">Attitude & Behavior</td>
                        <td>Team Collaboration</td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="2"
                          />
                        </td>
                        <td><input type="text" class="form-control" /></td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="0"
                          />
                        </td>
                        <td><input type="text" class="form-control" /></td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="0"
                          />
                        </td>
                      </tr>
                      <tr>
                        <td>Professionalism & Responsiveness</td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="2"
                          />
                        </td>
                        <td><input type="text" class="form-control" /></td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="0"
                          />
                        </td>
                        <td><input type="text" class="form-control" /></td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="0"
                          />
                        </td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Policy & Procedures</td>
                        <td>Adherence to policies and procedures</td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="2"
                          />
                        </td>
                        <td><input type="text" class="form-control" /></td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="0"
                          />
                        </td>
                        <td><input type="text" class="form-control" /></td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="0"
                          />
                        </td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Initiatives</td>
                        <td>Special Efforts, Suggestions,Ideas,etc.</td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="2"
                          />
                        </td>
                        <td><input type="text" class="form-control" /></td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="0"
                          />
                        </td>
                        <td><input type="text" class="form-control" /></td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="0"
                          />
                        </td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>Continuous Skill Improvement</td>
                        <td>
                          Preparedness to move to next level & Training
                          utilization
                        </td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="3"
                          />
                        </td>
                        <td><input type="text" class="form-control" /></td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="0"
                          />
                        </td>
                        <td><input type="text" class="form-control" /></td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="0"
                          />
                        </td>
                      </tr>
                      <tr>
                        <td colspan="3" class="text-center">Total</td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="15"
                          />
                        </td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="0"
                          />
                        </td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="0"
                          />
                        </td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="0"
                          />
                        </td>
                        <td>
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="0"
                          />
                        </td>
                      </tr>
                      <tr>
                        <td colspan="3" class="text-center">
                          <b>Total Percentage(%)</b>
                        </td>
                        <td colspan="5" class="text-center">
                          <input
                            type="text"
                            class="form-control"
                            readonly
                            value="0"
                          />
                        </td>
                      </tr>
                      <tr>
                        <td colspan="8" class="text-center">
                          <div class="grade-span">
                            <h4>Grade</h4>
                            <span class="badge bg-inverse-danger"
                              >Below 65 Poor</span
                            >
                            <span class="badge bg-inverse-warning"
                              >65-74 Average</span
                            >
                            <span class="badge bg-inverse-info"
                              >75-84 Satisfactory</span
                            >
                            <span class="badge bg-inverse-purple"
                              >85-92 Good</span
                            >
                            <span class="badge bg-inverse-success"
                              >Above 92 Excellent</span
                            >
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </section>
          <section class="review-section">
            <div class="review-header text-center">
              <h3 class="review-title">
                Special Initiatives, Achievements, contributions if any
              </h3>
              <p class="text-muted">Lorem ipsum dollar</p>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="table-responsive">
                  <table
                    class="table table-bordered table-review review-table mb-0"
                    id="table_achievements"
                  >
                    <thead>
                      <tr>
                        <th style="width: 40px">#</th>
                        <th>By Self</th>
                        <th>RO's Comment</th>
                        <th>HOD's Comment</th>
                        <th style="width: 64px">
                          <button
                            type="button"
                            class="btn btn-primary btn-add-row"
                          >
                            <i class="fa fa-plus"></i>
                          </button>
                        </th>
                      </tr>
                    </thead>
                    <tbody id="table_achievements_tbody">
                      <tr>
                        <td>1</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </section>
          <section class="review-section">
            <div class="review-header text-center">
              <h3 class="review-title">Comments on the role</h3>
              <p class="text-muted">
                alterations if any requirred like addition/deletion of
                responsibilities
              </p>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="table-responsive">
                  <table
                    class="table table-bordered table-review review-table mb-0"
                    id="table_alterations"
                  >
                    <thead>
                      <tr>
                        <th style="width: 40px">#</th>
                        <th>By Self</th>
                        <th>RO's Comment</th>
                        <th>HOD's Comment</th>
                        <th style="width: 64px">
                          <button
                            type="button"
                            class="btn btn-primary btn-add-row"
                          >
                            <i class="fa fa-plus"></i>
                          </button>
                        </th>
                      </tr>
                    </thead>
                    <tbody id="table_alterations_tbody">
                      <tr>
                        <td>1</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </section>
          <section class="review-section">
            <div class="review-header text-center">
              <h3 class="review-title">Comments on the role</h3>
              <p class="text-muted">
                alterations if any requirred like addition/deletion of
                responsibilities
              </p>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="table-responsive">
                  <table class="table table-bordered review-table mb-0">
                    <thead>
                      <tr>
                        <th style="width: 40px">#</th>
                        <th>Strengths</th>
                        <th>Area's for Improvement</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </section>
          <section class="review-section">
            <div class="review-header text-center">
              <h3 class="review-title">
                Appraisee's Strengths and Areas for Improvement perceived by the
                Reporting officer
              </h3>
              <p class="text-muted">Lorem ipsum dollar</p>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="table-responsive">
                  <table class="table table-bordered review-table mb-0">
                    <thead>
                      <tr>
                        <th style="width: 40px">#</th>
                        <th>Strengths</th>
                        <th>Area's for Improvement</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </section>
          <section class="review-section">
            <div class="review-header text-center">
              <h3 class="review-title">
                Appraisee's Strengths and Areas for Improvement perceived by the
                Head of the Department
              </h3>
              <p class="text-muted">Lorem ipsum dollar</p>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="table-responsive">
                  <table class="table table-bordered review-table mb-0">
                    <thead>
                      <tr>
                        <th style="width: 40px">#</th>
                        <th>Strengths</th>
                        <th>Area's for Improvement</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </section>
          <section class="review-section">
            <div class="review-header text-center">
              <h3 class="review-title">Personal Goals</h3>
              <p class="text-muted">Lorem ipsum dollar</p>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="table-responsive">
                  <table class="table table-bordered review-table mb-0">
                    <thead>
                      <tr>
                        <th style="width: 40px">#</th>
                        <th>Goal Achieved during last year</th>
                        <th>Goal set for current year</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </section>
          <section class="review-section">
            <div class="review-header text-center">
              <h3 class="review-title">Personal Updates</h3>
              <p class="text-muted">Lorem ipsum dollar</p>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="table-responsive">
                  <table class="table table-bordered review-table mb-0">
                    <thead>
                      <tr>
                        <th style="width: 40px">#</th>
                        <th>Last Year</th>
                        <th>Yes/No</th>
                        <th>Details</th>
                        <th>Current Year</th>
                        <th>Yes/No</th>
                        <th>Details</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Married/Engaged?</td>
                        <td>
                          <select class="form-control select">
                            <option>Select</option>
                            <option>Yes</option>
                            <option>No</option>
                          </select>
                        </td>
                        <td><input type="text" class="form-control" /></td>
                        <td>Marriage Plans</td>
                        <td>
                          <select class="form-control select">
                            <option>Select</option>
                            <option>Yes</option>
                            <option>No</option>
                          </select>
                        </td>
                        <td><input type="text" class="form-control" /></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Higher Studies/Certifications?</td>
                        <td>
                          <select class="form-control select">
                            <option>Select</option>
                            <option>Yes</option>
                            <option>No</option>
                          </select>
                        </td>
                        <td><input type="text" class="form-control" /></td>
                        <td>Plans For Higher Study</td>
                        <td>
                          <select class="form-control select">
                            <option>Select</option>
                            <option>Yes</option>
                            <option>No</option>
                          </select>
                        </td>
                        <td><input type="text" class="form-control" /></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Health Issues?</td>
                        <td>
                          <select class="form-control select">
                            <option>Select</option>
                            <option>Yes</option>
                            <option>No</option>
                          </select>
                        </td>
                        <td><input type="text" class="form-control" /></td>
                        <td>Certification Plans</td>
                        <td>
                          <select class="form-control select">
                            <option>Select</option>
                            <option>Yes</option>
                            <option>No</option>
                          </select>
                        </td>
                        <td><input type="text" class="form-control" /></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Others</td>
                        <td>
                          <select class="form-control select">
                            <option>Select</option>
                            <option>Yes</option>
                            <option>No</option>
                          </select>
                        </td>
                        <td><input type="text" class="form-control" /></td>
                        <td>Others</td>
                        <td>
                          <select class="form-control select">
                            <option>Select</option>
                            <option>Yes</option>
                            <option>No</option>
                          </select>
                        </td>
                        <td><input type="text" class="form-control" /></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </section>
          <section class="review-section">
            <div class="review-header text-center">
              <h3 class="review-title">
                Professional Goals Achieved for last year
              </h3>
              <p class="text-muted">Lorem ipsum dollar</p>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="table-responsive">
                  <table
                    class="table table-bordered table-review review-table mb-0"
                    id="table_goals"
                  >
                    <thead>
                      <tr>
                        <th style="width: 40px">#</th>
                        <th>By Self</th>
                        <th>RO's Comment</th>
                        <th>HOD's Comment</th>
                        <th style="width: 64px">
                          <button
                            type="button"
                            class="btn btn-primary btn-add-row"
                          >
                            <i class="fa fa-plus"></i>
                          </button>
                        </th>
                      </tr>
                    </thead>
                    <tbody id="table_goals_tbody">
                      <tr>
                        <td>1</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </section>
          <section class="review-section">
            <div class="review-header text-center">
              <h3 class="review-title">
                Professional Goals for the forthcoming year
              </h3>
              <p class="text-muted">Lorem ipsum dollar</p>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="table-responsive">
                  <table
                    class="table table-bordered table-review review-table mb-0"
                    id="table_forthcoming"
                  >
                    <thead>
                      <tr>
                        <th style="width: 40px">#</th>
                        <th>By Self</th>
                        <th>RO's Comment</th>
                        <th>HOD's Comment</th>
                        <th style="width: 64px">
                          <button
                            type="button"
                            class="btn btn-primary btn-add-row"
                          >
                            <i class="fa fa-plus"></i>
                          </button>
                        </th>
                      </tr>
                    </thead>
                    <tbody id="table_forthcoming_tbody">
                      <tr>
                        <td>1</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </section>
          <section class="review-section">
            <div class="review-header text-center">
              <h3 class="review-title">Training Requirements</h3>
              <p class="text-muted">
                if any to achieve the Performance Standard Targets completely
              </p>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="table-responsive">
                  <table
                    class="table table-bordered table-review review-table mb-0"
                    id="table_targets"
                  >
                    <thead>
                      <tr>
                        <th style="width: 40px">#</th>
                        <th>By Self</th>
                        <th>RO's Comment</th>
                        <th>HOD's Comment</th>
                        <th style="width: 64px">
                          <button
                            type="button"
                            class="btn btn-primary btn-add-row"
                          >
                            <i class="fa fa-plus"></i>
                          </button>
                        </th>
                      </tr>
                    </thead>
                    <tbody id="table_targets_tbody">
                      <tr>
                        <td>1</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </section>
          <section class="review-section">
            <div class="review-header text-center">
              <h3 class="review-title">
                Any other general comments, observations, suggestions etc.
              </h3>
              <p class="text-muted">Lorem ipsum dollar</p>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="table-responsive">
                  <table
                    class="table table-bordered table-review review-table mb-0"
                    id="general_comments"
                  >
                    <thead>
                      <tr>
                        <th style="width: 40px">#</th>
                        <th>Self</th>
                        <th>RO</th>
                        <th>HOD</th>
                        <th style="width: 64px">
                          <button
                            type="button"
                            class="btn btn-primary btn-add-row"
                          >
                            <i class="fa fa-plus"></i>
                          </button>
                        </th>
                      </tr>
                    </thead>
                    <tbody id="general_comments_tbody">
                      <tr>
                        <td>1</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </section>
          <section class="review-section">
            <div class="review-header text-center">
              <h3 class="review-title">For RO's Use Only</h3>
              <p class="text-muted">Lorem ipsum dollar</p>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="table-responsive">
                  <table class="table table-bordered review-table mb-0">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Yes/No</th>
                        <th>If Yes - Details</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>The Team member has Work related Issues</td>
                        <td>
                          <select class="form-control select">
                            <option>Select</option>
                            <option>Yes</option>
                            <option>No</option>
                          </select>
                        </td>
                        <td><input type="text" class="form-control" /></td>
                      </tr>
                      <tr>
                        <td>The Team member has Leave Issues</td>
                        <td>
                          <select class="form-control select">
                            <option>Select</option>
                            <option>Yes</option>
                            <option>No</option>
                          </select>
                        </td>
                        <td><input type="text" class="form-control" /></td>
                      </tr>
                      <tr>
                        <td>The team member has Stability Issues</td>
                        <td>
                          <select class="form-control select">
                            <option>Select</option>
                            <option>Yes</option>
                            <option>No</option>
                          </select>
                        </td>
                        <td><input type="text" class="form-control" /></td>
                      </tr>
                      <tr>
                        <td>
                          The Team member exhibits non-supportive attitude
                        </td>
                        <td>
                          <select class="form-control select">
                            <option>Select</option>
                            <option>Yes</option>
                            <option>No</option>
                          </select>
                        </td>
                        <td><input type="text" class="form-control" /></td>
                      </tr>
                      <tr>
                        <td>
                          Any other points in specific to note about the team
                          member
                        </td>
                        <td>
                          <select class="form-control select">
                            <option>Select</option>
                            <option>Yes</option>
                            <option>No</option>
                          </select>
                        </td>
                        <td><input type="text" class="form-control" /></td>
                      </tr>
                      <tr>
                        <td>Overall Comment /Performance of the team member</td>
                        <td>
                          <select class="form-control select">
                            <option>Select</option>
                            <option>Yes</option>
                            <option>No</option>
                          </select>
                        </td>
                        <td><input type="text" class="form-control" /></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </section>
          <section class="review-section">
            <div class="review-header text-center">
              <h3 class="review-title">For HRD's Use Only</h3>
              <p class="text-muted">Lorem ipsum dollar</p>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="table-responsive">
                  <table class="table table-bordered review-table mb-0">
                    <thead>
                      <tr>
                        <th>Overall Parameters</th>
                        <th>Available Points</th>
                        <th>Points Scored</th>
                        <th>RO's Comment</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          KRAs Target Achievement Points (will be considered
                          from the overall score specified in this document by
                          the Reporting officer)
                        </td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                      </tr>
                      <tr>
                        <td>
                          Professional Skills Scores(RO's Points furnished in
                          the skill & attitude assessment sheet will be
                          considered)
                        </td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                      </tr>
                      <tr>
                        <td>
                          Personal Skills Scores(RO's Points furnished in the
                          skill & attitude assessment sheet will be considered)
                        </td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                      </tr>
                      <tr>
                        <td>Special Achievements Score (HOD to furnish)</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                      </tr>
                      <tr>
                        <td>Overall Total Score</td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </section>
          <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-bordered review-table mb-0">
                  <thead>
                    <tr>
                      <th></th>
                      <th>Name</th>
                      <th>Signature</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Employee</td>
                      <td><input type="text" class="form-control" /></td>
                      <td><input type="text" class="form-control" /></td>
                      <td><input type="text" class="form-control" /></td>
                    </tr>
                    <tr>
                      <td>Reporting Officer</td>
                      <td><input type="text" class="form-control" /></td>
                      <td><input type="text" class="form-control" /></td>
                      <td><input type="text" class="form-control" /></td>
                    </tr>
                    <tr>
                      <td>HOD</td>
                      <td><input type="text" class="form-control" /></td>
                      <td><input type="text" class="form-control" /></td>
                      <td><input type="text" class="form-control" /></td>
                    </tr>
                    <tr>
                      <td>HRD</td>
                      <td><input type="text" class="form-control" /></td>
                      <td><input type="text" class="form-control" /></td>
                      <td><input type="text" class="form-control" /></td>
                    </tr>
                  </tbody>
                </table>
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

<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('assets/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/js/feather.min.js') }}"></script>

<script>
    $(function() {
        $(document).on("click", '.btn-add-row', function() {
            var id = $(this).closest("table.table-review").attr('id'); // Id of particular table
            console.log(id);
            var div = $("<tr />");
            div.html(GetDynamicTextBox(id));
            $("#" + id + "_tbody").append(div);
        });
        $(document).on("click", "#comments_remove", function() {
            $(this).closest("tr").prev().find('td:last-child').html(
                '<button type="button" class="btn btn-danger" id="comments_remove"><i class="fa-regular fa-trash-can"></i></button>'
            );
            $(this).closest("tr").remove();
        });

        function GetDynamicTextBox(table_id) {
            $('#comments_remove').remove();
            var rowsLength = document.getElementById(table_id).getElementsByTagName("tbody")[0]
                .getElementsByTagName("tr").length + 1;
            return '<td>' + rowsLength + '</td>' +
                '<td><input type="text" name="DynamicTextBox" class="form-control" value=""></td>' +
                '<td><input type="text" name="DynamicTextBox" class="form-control" value=""></td>' +
                '<td><input type="text" name="DynamicTextBox" class="form-control" value=""></td>' +
                '<td><button type="button" class="btn btn-danger" id="comments_remove"><i class="fa-regular fa-trash-can"></i></button></td>';
        }
    });
</script>

<script src="{{ asset('assets/js/layout.js') }}"></script>
<script src="{{ asset('assets/js/theme-settings.js') }}"></script>
<script src="{{ asset('assets/js/greedynav.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>


  </body>

  <!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/performance by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:23:09 GMT -->
</html>
