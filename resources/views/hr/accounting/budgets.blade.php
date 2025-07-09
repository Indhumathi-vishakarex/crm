<!DOCTYPE html>
<html
  lang="en"
  data-layout="vertical"
  data-topbar="light"
  data-sidebar="dark"
  data-sidebar-size="lg"
  data-sidebar-image="none"
>
  <!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/budgets by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:23:07 GMT -->
  <!-- Added by HTTrack --><meta
    http-equiv="content-type"
    content="text/html;charset=UTF-8"
  /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Smarthr - Bootstrap Admin Template" />
  <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects" />
  <meta name="author" content="Dreamstechnologies - Bootstrap Admin Template" />
  
  <title>Budgets - HRMS Admin Template</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css" />
  <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css" />
  <link rel="stylesheet" href="assets/css/line-awesome.min.css" />
  <link rel="stylesheet" href="assets/css/material.css" />
  <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
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
                <h3 class="page-title">Budgets</h3>
                <ul class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="{{ route('admin-dashboard') }}">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active">Accounts</li>
                </ul>
              </div>
              <div class="col-auto float-end ms-auto">
                <a
                  href="#"
                  class="btn add-btn"
                  data-bs-toggle="modal"
                  data-bs-target="#add_categories"
                  ><i class="fa fa-plus"></i> Add Budgets</a
                >
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-striped custom-table mb-0">
                  <thead>
                    <tr>
                      <th>Budget No</th>
                      <th>Budget Title</th>
                      <th>Budget Type</th>
                      <th>Start Date</th>
                      <th>End Date</th>
                      <th>Total Revenue</th>
                      <th>Total Expenses</th>
                      <th>Tax Amount</th>
                      <th>Budget Amount</th>
                      <th class="text-end">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Tender</td>
                      <td>Project</td>
                      <td>01 Jan 2021</td>
                      <td>31 Dec 2021</td>
                      <td>2500000</td>
                      <td>1500000</td>
                      <td>10</td>
                      <td>999990</td>
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
                              data-bs-target="#edit_categories"
                              ><i class="fa-solid fa-pencil m-r-5"></i> Edit</a
                            >
                            <a
                              class="dropdown-item"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#delete"
                              ><i class="fa-regular fa-trash-can m-r-5"></i>
                              Delete</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Project</td>
                      <td>Project</td>
                      <td>01 Feb 2021</td>
                      <td>30 Apr 2021</td>
                      <td>100000</td>
                      <td>50000</td>
                      <td>1000</td>
                      <td>49000</td>
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
                              data-bs-target="#edit_categories"
                              ><i class="fa-solid fa-pencil m-r-5"></i> Edit</a
                            >
                            <a
                              class="dropdown-item"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#delete"
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

          <div
            class="modal custom-modal fade"
            id="add_categories"
            role="dialog"
          >
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Add Budget</h5>
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
                    <div class="input-block mb-3">
                      <label class="col-form-label">Budget Title</label>
                      <input
                        class="form-control"
                        type="text"
                        name="budget_title"
                        placeholder="Budgets Title"
                      />
                    </div>
                    <label class="col-form-label"
                      >Choose Budget Respect Type</label
                    >
                    <div class="input-block mb-3">
                      <div class="form-check form-check-inline">
                        <input
                          class="form-check-input BudgetType"
                          type="radio"
                          name="budget_type"
                          id="project2"
                          value="project"
                        />
                        <label class="form-check-label" for="project2"
                          >Project</label
                        >
                      </div>
                      <div class="form-check form-check-inline">
                        <input
                          class="form-check-input BudgetType"
                          type="radio"
                          name="budget_type"
                          id="category1"
                          value="category"
                        />
                        <label class="form-check-label" for="category1"
                          >Category</label
                        >
                      </div>
                    </div>
                    <div class="input-block mb-3">
                      <label class="col-form-label">Start Date</label>
                      <div class="cal-icon">
                        <input
                          class="form-control datetimepicker"
                          type="text"
                          name="budget_start_date"
                        />
                      </div>
                    </div>
                    <div class="input-block mb-3">
                      <label class="col-form-label">End Date</label>
                      <div class="cal-icon">
                        <input
                          class="form-control datetimepicker"
                          type="text"
                          name="budget_end_date"
                        />
                      </div>
                    </div>
                    <div class="input-block mb-3">
                      <label class="col-form-label">Expected Revenues</label>
                    </div>
                    <div class="AllRevenuesClass">
                      <div class="row AlLRevenues">
                        <div class="col-sm-6">
                          <div class="input-block mb-3">
                            <label class="col-form-label"
                              >Revenue Title
                              <span class="text-danger">*</span></label
                            >
                            <input
                              type="text"
                              class="form-control RevenuETitle"
                              value
                              placeholder="Revenue Title"
                              name="revenue_title[]"
                              autocomplete="off"
                            />
                          </div>
                        </div>
                        <div class="col-sm-5">
                          <div class="input-block mb-3">
                            <label class="col-form-label"
                              >Revenue Amount
                              <span class="text-danger">*</span></label
                            >
                            <input
                              type="text"
                              name="revenue_amount[]"
                              placeholder="Amount"
                              value
                              class="form-control RevenuEAmount"
                              autocomplete="off"
                            />
                          </div>
                        </div>
                        <div class="col-sm-1">
                          <div class="add-more">
                            <a
                              class="add_more_revenue"
                              title="Add Revenue"
                              style="cursor: pointer"
                              ><i class="fa fa-plus-circle"></i
                            ></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="input-block mb-3">
                      <label class="col-form-label"
                        >Overall Revenues
                        <span class="text-danger">(A)</span></label
                      >
                      <input
                        class="form-control"
                        type="text"
                        name="overall_revenues"
                        id="overall_revenues1"
                        placeholder="Overall Revenues"
                        readonly
                        style="cursor: not-allowed"
                      />
                    </div>
                    <div class="input-block mb-3">
                      <label class="col-form-label">Expected Expenses</label>
                    </div>
                    <div class="AllExpensesClass">
                      <div class="row AlLExpenses">
                        <div class="col-sm-6">
                          <div class="input-block mb-3">
                            <label class="col-form-label"
                              >Expenses Title
                              <span class="text-danger">*</span></label
                            >
                            <input
                              type="text"
                              class="form-control EXpensesTItle"
                              value
                              placeholder="Expenses Title"
                              name="expenses_title[]"
                              autocomplete="off"
                            />
                          </div>
                        </div>
                        <div class="col-sm-5">
                          <div class="input-block mb-3">
                            <label class="col-form-label"
                              >Expenses Amount
                              <span class="text-danger">*</span></label
                            >
                            <input
                              type="text"
                              name="expenses_amount[]"
                              placeholder="Amount"
                              value
                              class="form-control EXpensesAmount"
                              autocomplete="off"
                            />
                          </div>
                        </div>
                        <div class="col-sm-1">
                          <div class="add-more">
                            <a
                              class="add_more_expenses"
                              title="Add Expenses"
                              style="cursor: pointer"
                              ><i class="fa fa-plus-circle"></i
                            ></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="input-block mb-3">
                      <label class="col-form-label"
                        >Overall Expense
                        <span class="text-danger">(B)</span></label
                      >
                      <input
                        class="form-control"
                        type="text"
                        name="overall_expenses"
                        id="overall_expenses1"
                        placeholder="Overall Expenses"
                        readonly
                        style="cursor: not-allowed"
                      />
                    </div>
                    <div class="input-block mb-3">
                      <label class="col-form-label"
                        >Expected Profit
                        <span class="text-danger">( C = A - B )</span>
                      </label>
                      <input
                        class="form-control"
                        type="text"
                        name="expected_profit"
                        id="expected_profit1"
                        placeholder="Expected Profit"
                        readonly
                        style="cursor: not-allowed"
                      />
                    </div>
                    <div class="input-block mb-3">
                      <label class="col-form-label"
                        >Tax <span class="text-danger">(D)</span></label
                      >
                      <input
                        class="form-control"
                        type="text"
                        name="tax_amount"
                        id="tax_amount1"
                        placeholder="Tax Amount"
                      />
                    </div>
                    <div class="input-block mb-3">
                      <label class="col-form-label"
                        >Budget Amount
                        <span class="text-danger">( E = C - D )</span>
                      </label>
                      <input
                        class="form-control"
                        type="text"
                        name="budget_amount"
                        id="budget_amount1"
                        placeholder="Budget Amount"
                        readonly
                        style="cursor: not-allowed"
                      />
                    </div>
                    <div class="submit-section">
                      <button class="btn btn-primary submit-btn">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div
            class="modal custom-modal fade"
            id="edit_categories"
            role="dialog"
          >
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Edit Budget</h5>
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
                    <div class="input-block mb-3">
                      <label class="col-form-label">Budget Title</label>
                      <input
                        class="form-control"
                        type="text"
                        name="budget_title"
                        placeholder="Budgets Title"
                      />
                    </div>
                    <label class="col-form-label"
                      >Choose Budget Respect Type</label
                    >
                    <div class="input-block mb-3">
                      <div class="form-check form-check-inline">
                        <input
                          class="form-check-input BudgetType"
                          type="radio"
                          name="budget_type"
                          id="project1"
                          value="project"
                        />
                        <label class="form-check-label" for="project1"
                          >Project</label
                        >
                      </div>
                      <div class="form-check form-check-inline">
                        <input
                          class="form-check-input BudgetType"
                          type="radio"
                          name="budget_type"
                          id="category"
                          value="category"
                        />
                        <label class="form-check-label" for="category"
                          >Category</label
                        >
                      </div>
                    </div>
                    <div class="input-block mb-3">
                      <label class="col-form-label">Start Date</label>
                      <div class="cal-icon">
                        <input
                          class="form-control datetimepicker"
                          type="text"
                          name="budget_start_date"
                        />
                      </div>
                    </div>
                    <div class="input-block mb-3">
                      <label class="col-form-label">End Date</label>
                      <div class="cal-icon">
                        <input
                          class="form-control datetimepicker"
                          type="text"
                          name="budget_end_date"
                        />
                      </div>
                    </div>
                    <div class="input-block mb-3">
                      <label class="col-form-label">Expected Revenues</label>
                    </div>
                    <div class="AllRevenuesClass">
                      <div class="row AlLRevenues">
                        <div class="col-sm-6">
                          <div class="input-block mb-3">
                            <label class="col-form-label"
                              >Revenue Title
                              <span class="text-danger">*</span></label
                            >
                            <input
                              type="text"
                              class="form-control RevenuETitle"
                              value
                              placeholder="Revenue Title"
                              name="revenue_title[]"
                              autocomplete="off"
                            />
                          </div>
                        </div>
                        <div class="col-sm-5">
                          <div class="input-block mb-3">
                            <label class="col-form-label"
                              >Revenue Amount
                              <span class="text-danger">*</span></label
                            >
                            <input
                              type="text"
                              name="revenue_amount[]"
                              placeholder="Amount"
                              value
                              class="form-control RevenuEAmount"
                              autocomplete="off"
                            />
                          </div>
                        </div>
                        <div class="col-sm-1">
                          <div class="add-more">
                            <a
                              class="add_more_revenue"
                              title="Add Revenue"
                              style="cursor: pointer"
                              ><i class="fa fa-plus-circle"></i
                            ></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="input-block mb-3">
                      <label class="col-form-label"
                        >Overall Revenues
                        <span class="text-danger">(A)</span></label
                      >
                      <input
                        class="form-control"
                        type="text"
                        name="overall_revenues"
                        id="overall_revenues"
                        placeholder="Overall Revenues"
                        readonly
                        style="cursor: not-allowed"
                      />
                    </div>
                    <div class="input-block mb-3">
                      <label class="col-form-label">Expected Expenses</label>
                    </div>
                    <div class="AllExpensesClass">
                      <div class="row AlLExpenses">
                        <div class="col-sm-6">
                          <div class="input-block mb-3">
                            <label class="col-form-label"
                              >Expenses Title
                              <span class="text-danger">*</span></label
                            >
                            <input
                              type="text"
                              class="form-control EXpensesTItle"
                              value
                              placeholder="Expenses Title"
                              name="expenses_title[]"
                              autocomplete="off"
                            />
                          </div>
                        </div>
                        <div class="col-sm-5">
                          <div class="input-block mb-3">
                            <label class="col-form-label"
                              >Expenses Amount
                              <span class="text-danger">*</span></label
                            >
                            <input
                              type="text"
                              name="expenses_amount[]"
                              placeholder="Amount"
                              value
                              class="form-control EXpensesAmount"
                              autocomplete="off"
                            />
                          </div>
                        </div>
                        <div class="col-sm-1">
                          <div class="add-more">
                            <a
                              class="add_more_expenses"
                              title="Add Expenses"
                              style="cursor: pointer"
                              ><i class="fa fa-plus-circle"></i
                            ></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="input-block mb-3">
                      <label class="col-form-label"
                        >Overall Expense
                        <span class="text-danger">(B)</span></label
                      >
                      <input
                        class="form-control"
                        type="text"
                        name="overall_expenses"
                        id="overall_expenses"
                        placeholder="Overall Expenses"
                        readonly
                        style="cursor: not-allowed"
                      />
                    </div>
                    <div class="input-block mb-3">
                      <label class="col-form-label"
                        >Expected Profit
                        <span class="text-danger">( C = A - B )</span>
                      </label>
                      <input
                        class="form-control"
                        type="text"
                        name="expected_profit"
                        id="expected_profit"
                        placeholder="Expected Profit"
                        readonly
                        style="cursor: not-allowed"
                      />
                    </div>
                    <div class="input-block mb-3">
                      <label class="col-form-label"
                        >Tax <span class="text-danger">(D)</span></label
                      >
                      <input
                        class="form-control"
                        type="text"
                        name="tax_amount"
                        id="tax_amount"
                        placeholder="Tax Amount"
                      />
                    </div>
                    <div class="input-block mb-3">
                      <label class="col-form-label"
                        >Budget Amount
                        <span class="text-danger">( E = C - D )</span>
                      </label>
                      <input
                        class="form-control"
                        type="text"
                        name="budget_amount"
                        id="budget_amount"
                        placeholder="Budget Amount"
                        readonly
                        style="cursor: not-allowed"
                      />
                    </div>
                    <div class="submit-section">
                      <button class="btn btn-primary submit-btn">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="modal custom-modal fade" id="delete" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-body">
                  <div class="form-header">
                    <h3>Delete</h3>
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
<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('assets/js/moment.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ asset('assets/js/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/layout.js') }}"></script>
<script src="{{ asset('assets/js/theme-settings.js') }}"></script>
<script src="{{ asset('assets/js/greedynav.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
<script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="ea032da3bd8fcaea9ebd1e92-|49" defer></script>


  </body>

  <!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/budgets by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:23:07 GMT -->
</html>
