<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"
    />
    <title>Kanakku - Bootstrap Admin HTML Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <!-- Fontawesome CSS -->
    <link
      rel="stylesheet"
      href="assets/plugins/fontawesome/css/fontawesome.min.css"
    />
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css" />

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css" />

    <!-- Summernote CSS -->
    <link
      rel="stylesheet"
      href="assets/plugins/summernote/summernote-lite.min.css"
    />

    <!-- Feather CSS -->
    <link rel="stylesheet" href="assets/plugins/feather/feather.css" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <!-- Main Wrapper -->
    <div class="main-wrapper">
      <!-- Header -->
      <div class="header header-one">
        <!-- Sidebar Toggle -->
        <a href="javascript:void(0);" id="toggle_btn">
          <span class="toggle-bars">
            <span class="bar-icons"></span>
            <span class="bar-icons"></span>
            <span class="bar-icons"></span>
            <span class="bar-icons"></span>
          </span>
        </a>
        <!-- /Sidebar Toggle -->

        <!-- Search -->
        <div class="top-nav-search">
          <form>
            <input type="text" class="form-control" placeholder="Search here" />
            <button class="btn" type="submit">
              <img src="assets/img/icons/search.svg" alt="img" />
            </button>
          </form>
        </div>
        <!-- /Search -->

        <!-- Mobile Menu Toggle -->
        <a class="mobile_btn" id="mobile_btn">
          <i class="fas fa-bars"></i>
        </a>
        <!-- /Mobile Menu Toggle -->

        <!-- Header Menu -->
        <ul class="nav nav-tabs user-menu">
          <!-- Flag -->
          <li class="nav-item dropdown has-arrow flag-nav">
            <a
              class="nav-link dropdown-toggle"
              data-bs-toggle="dropdown"
              href="#"
              role="button"
            >
              <img src="assets/img/flags/us1.png" alt="" height="20" /><span
                >English</span
              >
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="javascript:void(0);" class="dropdown-item">
                <img src="assets/img/flags/us.png" alt="" height="16" /><span
                  >English</span
                >
              </a>
              <a href="javascript:void(0);" class="dropdown-item">
                <img src="assets/img/flags/fr.png" alt="" height="16" /><span
                  >French</span
                >
              </a>
              <a href="javascript:void(0);" class="dropdown-item">
                <img src="assets/img/flags/es.png" alt="" height="16" /><span
                  >Spanish</span
                >
              </a>
              <a href="javascript:void(0);" class="dropdown-item">
                <img src="assets/img/flags/de.png" alt="" height="16" /><span
                  >German</span
                >
              </a>
            </div>
          </li>
          <!-- /Flag -->

          <li class="nav-item has-arrow dropdown-heads">
            <a href="javascript:void(0);" class="toggle-switch">
              <i class="fe fe-moon"></i>
            </a>
          </li>
          <li class="nav-item dropdown flag-nav dropdown-heads">
            <a
              class="nav-link"
              data-bs-toggle="dropdown"
              href="#"
              role="button"
            >
              <i class="fe fe-bell"></i>
              <span class="badge rounded-pill"></span>
            </a>
            <div class="dropdown-menu notifications">
              <div class="topnav-dropdown-header">
                <span class="notification-title">Notifications</span>
                <a href="javascript:void(0)" class="clear-noti"> Clear All</a>
              </div>
              <div class="noti-content">
                <ul class="notification-list">
                  <li class="notification-message">
                    <a href="profile.html">
                      <div class="media d-flex">
                        <span class="avatar avatar-sm">
                          <img
                            class="avatar-img rounded-circle"
                            alt=""
                            src="assets/img/profiles/avatar-02.jpg"
                          />
                        </span>
                        <div class="media-body">
                          <p class="noti-details">
                            <span class="noti-title">Brian Johnson</span> paid
                            the invoice <span class="noti-title">#DF65485</span>
                          </p>
                          <p class="noti-time">
                            <span class="notification-time">4 mins ago</span>
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="profile.html">
                      <div class="media d-flex">
                        <span class="avatar avatar-sm">
                          <img
                            class="avatar-img rounded-circle"
                            alt=""
                            src="assets/img/profiles/avatar-03.jpg"
                          />
                        </span>
                        <div class="media-body">
                          <p class="noti-details">
                            <span class="noti-title">Marie Canales</span> has
                            accepted your estimate
                            <span class="noti-title">#GTR458789</span>
                          </p>
                          <p class="noti-time">
                            <span class="notification-time">6 mins ago</span>
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="profile.html">
                      <div class="media d-flex">
                        <div class="avatar avatar-sm">
                          <span
                            class="avatar-title rounded-circle bg-primary-light"
                            ><i class="far fa-user"></i
                          ></span>
                        </div>
                        <div class="media-body">
                          <p class="noti-details">
                            <span class="noti-title">New user registered</span>
                          </p>
                          <p class="noti-time">
                            <span class="notification-time">8 mins ago</span>
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="profile.html">
                      <div class="media d-flex">
                        <span class="avatar avatar-sm">
                          <img
                            class="avatar-img rounded-circle"
                            alt=""
                            src="assets/img/profiles/avatar-04.jpg"
                          />
                        </span>
                        <div class="media-body">
                          <p class="noti-details">
                            <span class="noti-title">Barbara Moore</span>
                            declined the invoice
                            <span class="noti-title">#RDW026896</span>
                          </p>
                          <p class="noti-time">
                            <span class="notification-time">12 mins ago</span>
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="profile.html">
                      <div class="media d-flex">
                        <div class="avatar avatar-sm">
                          <span
                            class="avatar-title rounded-circle bg-info-light"
                            ><i class="far fa-comment"></i
                          ></span>
                        </div>
                        <div class="media-body">
                          <p class="noti-details">
                            <span class="noti-title"
                              >You have received a new message</span
                            >
                          </p>
                          <p class="noti-time">
                            <span class="notification-time">2 days ago</span>
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="topnav-dropdown-footer">
                <a href="notifications.html">View all Notifications</a>
              </div>
            </div>
          </li>
          <li class="nav-item has-arrow dropdown-heads">
            <a href="javascript:void(0);" class="win-maximize">
              <i class="fe fe-maximize"></i>
            </a>
          </li>
          <!-- User Menu -->
          <li class="nav-item dropdown">
            <a
              href="javascript:void(0)"
              class="user-link nav-link"
              data-bs-toggle="dropdown"
            >
              <span class="user-img">
                <img
                  src="assets/img/profiles/avatar-07.jpg"
                  alt="img"
                  class="profilesidebar"
                />
                <span class="animate-circle"></span>
              </span>
              <span class="user-content">
                <span class="user-details">Admin</span>
                <span class="user-name">John Smith</span>
              </span>
            </a>
            <div class="dropdown-menu menu-drop-user">
              <div class="profilemenu">
                <div class="subscription-menu">
                  <ul>
                    <li>
                      <a class="dropdown-item" href="profile.html">Profile</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="settings.html">Settings</a>
                    </li>
                  </ul>
                </div>
                <div class="subscription-logout">
                  <ul>
                    <li class="pb-0">
                      <a class="dropdown-item" href="login.html">Log Out</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <!-- /User Menu -->
        </ul>

        <!-- /Header Menu -->
      </div>
      <!-- /Header -->

      <!-- Sidebar -->
      <div class="sidebar" id="sidebar">
        <div class="sidebar-header">
          <div class="sidebar-logo">
            <a href="index.html">
              <img src="assets/img/logo.png" class="img-fluid logo" alt="" />
            </a>
            <a href="index.html">
              <img
                src="assets/img/logo-small.png"
                class="img-fluid logo-small"
                alt=""
              />
            </a>
          </div>
        </div>
        <div class="sidebar-inner slimscroll">
          <div id="sidebar-menu" class="sidebar-menu">
            <!-- Main -->
            <ul>
              <li class="menu-title"><span>Main</span></li>
              <li class="submenu">
                <a href="#"
                  ><i class="fe fe-home"></i> <span> Dashboard</span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="index.html">Admin Dashboard</a></li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="fe fe-grid"></i> <span> Applications</span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="chat.html">Chat</a></li>
                  <li><a href="calendar.html">Calendar</a></li>
                  <li><a href="inbox.html">Email</a></li>
                </ul>
              </li>
            </ul>
            <!-- /Main -->

            <!-- Customers -->
            <ul>
              <li class="menu-title"><span>Customers</span></li>
              <li class="active">
                <a href="customers.html"
                  ><i class="fe fe-users"></i> <span>Customers</span></a
                >
              </li>
              <li>
                <a href="customer-details.html"
                  ><i class="fe fe-file"></i> <span>Customer Details</span></a
                >
              </li>
              <li>
                <a href="vendors.html"
                  ><i class="fe fe-user"></i> <span>Vendors</span></a
                >
              </li>
            </ul>
            <!-- /Customers -->

            <!-- Inventory -->
            <ul>
              <li class="menu-title"><span>Inventory</span></li>
              <li class="submenu">
                <a href="#" class="active"
                  ><i class="fe fe-package"></i>
                  <span> Products / Services</span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="product-list.html">Product List</a></li>
                  <li><a href="category.html">Category</a></li>

                  <li><a href="units.html">Units</a></li>
                </ul>
              </li>
              <li>
                <a href="inventory.html"
                  ><i class="fe fe-user"></i> <span>Inventory</span></a
                >
              </li>
            </ul>
            <!-- /Inventory -->

            <!-- Sales -->
            <ul>
              <li class="menu-title"><span>Sales</span></li>
              <li class="submenu">
                <a href="invoices.html"
                  ><i class="fe fe-file"></i> <span>Invoices</span
                  ><span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="invoices.html">Invoices List</a></li>
                  <li><a href="invoice-template.html">Invoice Templates</a></li>
                </ul>
              </li>
              <li>
                <a href="recurring-invoices.html"
                  ><i class="fe fe-clipboard"></i>
                  <span>Recurring Invoices</span></a
                >
              </li>
              <li>
                <a href="credit-notes.html"
                  ><i class="fe fe-edit"></i> <span>Credit Notes</span></a
                >
              </li>
            </ul>
            <!-- /Sales -->

            <!-- Purchases -->
            <ul>
              <li class="menu-title"><span>Purchases</span></li>
              <li>
                <a href="purchases.html"
                  ><i class="fe fe-shopping-cart"></i> <span>Purchases</span></a
                >
              </li>
              <li>
                <a href="purchase-orders.html"
                  ><i class="fe fe-shopping-bag"></i>
                  <span>Purchase Orders</span></a
                >
              </li>
              <li>
                <a href="debit-notes.html"
                  ><i class="fe fe-file-text"></i> <span>Debit Notes</span></a
                >
              </li>
            </ul>
            <!-- /Purchases -->

            <!-- Finance & Accounts -->
            <ul>
              <li class="menu-title"><span>Finance & Accounts</span></li>
              <li>
                <a href="expenses.html"
                  ><i class="fe fe-file-plus"></i> <span>Expenses</span></a
                >
              </li>
              <li>
                <a href="payments.html"
                  ><i class="fe fe-credit-card"></i> <span>Payments</span></a
                >
              </li>
            </ul>
            <!-- /Finance & Accounts -->

            <!-- Quotations -->
            <ul>
              <li class="menu-title"><span>Quotations</span></li>
              <li>
                <a href="quotations.html"
                  ><i class="fe fe-clipboard"></i> <span>Quotations</span></a
                >
              </li>
              <li>
                <a href="delivery-challans.html"
                  ><i class="fe fe-file-text"></i>
                  <span>Delivery Challans</span></a
                >
              </li>
            </ul>
            <!-- /Quotations -->

            <!-- Reports -->
            <ul>
              <li class="menu-title"><span>Reports</span></li>
              <li>
                <a href="quotations.html"
                  ><i class="fe fe-clipboard"></i> <span>Quotations</span></a
                >
              </li>
              <li>
                <a href="payment-summary.html"
                  ><i class="fe fe-credit-card"></i>
                  <span>Payment Summary</span></a
                >
              </li>
            </ul>
            <!-- /Reports -->

            <!-- User Management -->
            <ul>
              <li class="menu-title"><span>User Management</span></li>
              <li class="submenu">
                <a href="#"
                  ><i class="fe fe-user"></i> <span> Manage Users</span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="add-user.html">Add User</a></li>
                  <li><a href="users.html">Users</a></li>
                </ul>
              </li>
              <li>
                <a href="roles-permission.html"
                  ><i class="fe fe-clipboard"></i>
                  <span>Roles & Permission</span></a
                >
              </li>
              <li>
                <a href="delete-account-request.html"
                  ><i class="fe fe-trash-2"></i>
                  <span>Delete Account Request</span></a
                >
              </li>
            </ul>
            <!-- /User Management -->

            <!-- Membership) -->
            <ul>
              <li class="menu-title"><span>Membership</span></li>
              <li class="submenu">
                <a href="#"
                  ><i class="fe fe-book"></i> <span> Membership</span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="membership-plans.html">Membership Plans</a></li>
                  <li>
                    <a href="membership-addons.html">Membership Addons</a>
                  </li>
                  <li><a href="subscribers.html">Subscribers</a></li>
                  <li><a href="transactions.html">Transactions</a></li>
                </ul>
              </li>
            </ul>
            <!-- /Membership) -->

            <!-- Content (CMS) -->
            <ul>
              <li class="menu-title"><span>Content (CMS)</span></li>
              <li class="submenu">
                <a href="#"
                  ><i class="fe fe-folder"></i> <span> Pages</span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="add-page.html">Add Page</a></li>
                  <li><a href="pages.html">Pages</a></li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="fe fe-book"></i> <span> Blog</span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="all-blogs.html">All Blogs</a></li>
                  <li><a href="add-blog.html">Add Blog</a></li>
                  <li><a href="categories.html">Categories</a></li>
                  <li><a href="blog-comments.html">Blog Comments</a></li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="fe fe-map-pin"></i> <span> Location</span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="countries.html">Countries</a></li>
                  <li><a href="states.html">States</a></li>
                  <li><a href="cities.html">Cities</a></li>
                </ul>
              </li>
              <li>
                <a href="testimonials.html"
                  ><i class="fe fe-message-square"></i>
                  <span>Testimonials</span></a
                >
              </li>
              <li>
                <a href="faq.html"
                  ><i class="fe fe-alert-circle"></i> <span>FAQ</span></a
                >
              </li>
            </ul>
            <!-- /Content (CMS) -->

            <!-- Support -->
            <ul>
              <li class="menu-title"><span>Support</span></li>
              <li>
                <a href="contact-messages.html"
                  ><i class="fe fe-printer"></i>
                  <span>Contact Messages</span></a
                >
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="fe fe-save"></i> <span> Tickets</span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="tickets.html">Tickets</a></li>
                  <li><a href="tickets-list.html">Tickets List</a></li>
                  <li><a href="tickets-kanban.html">Tickets Kanban</a></li>
                  <li><a href="ticket-details.html">Ticket Overview</a></li>
                </ul>
              </li>
            </ul>
            <!-- /Support -->

            <!-- Authentication -->
            <ul>
              <li class="submenu">
                <a href="#"
                  ><i class="fe fe-lock"></i> <span> Authentication </span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="login.html"> Login </a></li>
                  <li><a href="register.html"> Register </a></li>
                  <li><a href="forgot-password.html"> Forgot Password </a></li>
                  <li><a href="lock-screen.html"> Lock Screen </a></li>
                </ul>
              </li>
            </ul>
            <!-- /Authentication -->

            <!-- Pages -->
            <ul>
              <li class="menu-title"><span>Pages</span></li>
              <li>
                <a href="profile.html"
                  ><i class="fe fe-user"></i> <span>Profile</span></a
                >
              </li>
              <li>
                <a href="error-404.html"
                  ><i class="fe fe-x-square"></i> <span>Error Pages</span></a
                >
              </li>
              <li>
                <a href="blank-page.html"
                  ><i class="fe fe-file"></i> <span>Blank Page</span></a
                >
              </li>
              <li>
                <a href="maps-vector.html"
                  ><i class="fe fe-image"></i> <span>Vector Maps</span></a
                >
              </li>
            </ul>
            <!-- /Pages -->

            <!-- UI Interface -->
            <ul>
              <li class="menu-title">
                <span>UI Interface</span>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="fe fe-pocket"></i> <span>Base UI </span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="alerts.html">Alerts</a></li>
                  <li><a href="accordions.html">Accordions</a></li>
                  <li><a href="avatar.html">Avatar</a></li>
                  <li><a href="badges.html">Badges</a></li>
                  <li><a href="buttons.html">Buttons</a></li>
                  <li><a href="buttongroup.html">Button Group</a></li>
                  <li><a href="breadcrumbs.html">Breadcrumb</a></li>
                  <li><a href="cards.html">Cards</a></li>
                  <li><a href="carousel.html">Carousel</a></li>
                  <li><a href="dropdowns.html">Dropdowns</a></li>
                  <li><a href="grid.html">Grid</a></li>
                  <li><a href="images.html">Images</a></li>
                  <li><a href="lightbox.html">Lightbox</a></li>
                  <li><a href="media.html">Media</a></li>
                  <li><a href="modal.html">Modals</a></li>
                  <li><a href="offcanvas.html">Offcanvas</a></li>
                  <li><a href="pagination.html">Pagination</a></li>
                  <li><a href="popover.html">Popover</a></li>
                  <li><a href="progress.html">Progress Bars</a></li>
                  <li><a href="placeholders.html">Placeholders</a></li>
                  <li><a href="rangeslider.html">Range Slider</a></li>
                  <li><a href="spinners.html">Spinner</a></li>
                  <li><a href="sweetalerts.html">Sweet Alerts</a></li>
                  <li><a href="tab.html">Tabs</a></li>
                  <li><a href="toastr.html">Toasts</a></li>
                  <li><a href="tooltip.html">Tooltip</a></li>
                  <li><a href="typography.html">Typography</a></li>
                  <li><a href="video.html">Video</a></li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="fe fe-box"></i> <span>Elements </span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="ribbon.html">Ribbon</a></li>
                  <li><a href="clipboard.html">Clipboard</a></li>
                  <li><a href="drag-drop.html">Drag & Drop</a></li>
                  <li><a href="rating.html">Rating</a></li>
                  <li><a href="text-editor.html">Text Editor</a></li>
                  <li><a href="counter.html">Counter</a></li>
                  <li><a href="scrollbar.html">Scrollbar</a></li>
                  <li><a href="notification.html">Notification</a></li>
                  <li><a href="stickynote.html">Sticky Note</a></li>
                  <li><a href="timeline.html">Timeline</a></li>
                  <li>
                    <a href="horizontal-timeline.html">Horizontal Timeline</a>
                  </li>
                  <li><a href="form-wizard.html">Form Wizard</a></li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="fe fe-bar-chart"></i> <span> Charts </span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="chart-apex.html">Apex Charts</a></li>
                  <li><a href="chart-js.html">Chart Js</a></li>
                  <li><a href="chart-morris.html">Morris Charts</a></li>
                  <li><a href="chart-flot.html">Flot Charts</a></li>
                  <li><a href="chart-peity.html">Peity Charts</a></li>
                  <li><a href="chart-c3.html">C3 Charts</a></li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="fe fe-award"></i> <span> Icons </span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
                  <li><a href="icon-feather.html">Feather Icons</a></li>
                  <li><a href="icon-ionic.html">Ionic Icons</a></li>
                  <li><a href="icon-material.html">Material Icons</a></li>
                  <li><a href="icon-pe7.html">Pe7 Icons</a></li>
                  <li><a href="icon-simpleline.html">Simpleline Icons</a></li>
                  <li><a href="icon-themify.html">Themify Icons</a></li>
                  <li><a href="icon-weather.html">Weather Icons</a></li>
                  <li><a href="icon-typicon.html">Typicon Icons</a></li>
                  <li><a href="icon-flag.html">Flag Icons</a></li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="fe fe-sidebar"></i> <span> Forms </span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="form-basic-inputs.html">Basic Inputs </a></li>
                  <li><a href="form-input-groups.html">Input Groups </a></li>
                  <li><a href="form-horizontal.html">Horizontal Form </a></li>
                  <li><a href="form-vertical.html"> Vertical Form </a></li>
                  <li><a href="form-mask.html">Form Mask </a></li>
                  <li><a href="form-validation.html">Form Validation </a></li>
                  <li><a href="form-select2.html">Form Select2 </a></li>
                  <li><a href="form-fileupload.html">File Upload </a></li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="fe fe-layout"></i> <span> Tables </span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="tables-basic.html">Basic Tables </a></li>
                  <li><a href="data-tables.html">Data Table </a></li>
                </ul>
              </li>
            </ul>
            <!-- /UI Interface -->

            <!-- Settings -->
            <ul>
              <li class="menu-title"><span>Settings</span></li>
              <li>
                <a href="settings.html"
                  ><i class="fe fe-settings"></i> <span>Settings</span></a
                >
              </li>
              <li>
                <a href="login.html"
                  ><i class="fe fe-power"></i> <span>Logout</span></a
                >
              </li>
            </ul>
            <!-- /Settings -->
          </div>
        </div>
      </div>
      <!-- /Sidebar -->

      <!-- Page Wrapper -->
      <div class="page-wrapper">
        <div class="content container-fluid">
          <div class="page-header">
            <div class="content-page-header">
              <h5>Add Products / Services</h5>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card-body">
                <div class="form-group-item">
                  <h5 class="form-title">Basic Details</h5>
                  <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Item Type</label>
                        <div class="align-center">
                          <div class="form-control me-3">
                            <label class="custom_radio me-3 mb-0">
                              <input
                                type="radio"
                                class="form-control"
                                name="payment"
                                checked
                              />
                              <span class="checkmark"></span> Product
                            </label>
                          </div>
                          <div class="form-control">
                            <label class="custom_radio mb-0">
                              <input type="radio" name="payment" />
                              <span class="checkmark"></span> Service
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Name</label>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Enter Item Name"
                        />
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Item Category</label>
                        <select class="select">
                          <option>Select Item Category</option>
                          <option>Category 1</option>
                          <option>Category 2</option>
                          <option>Category 3</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Price</label>
                        <input
                          type="number"
                          class="form-control"
                          placeholder="Enter Item Price"
                          name="name"
                        />
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Units</label>
                        <select class="select">
                          <option>Select Units</option>
                          <option>Pieces</option>
                          <option>Box</option>
                          <option>Kilograms</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group-item">
                  <div class="form-group">
                    <h5 class="form-title">Additional Details</h5>
                  </div>
                  <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                      <div class="form-group">
                        <label>Generate Barcode</label>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Enter Barcode Number"
                        />
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                      <div class="form-group">
                        <label>Purchase Price Without Tax</label>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Enter Amout"
                        />
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                      <div class="form-group">
                        <label>Purchase Price With Tax</label>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Enter Tax Amount"
                        />
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                      <div class="form-group">
                        <label>Quantity</label>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="eg 10"
                        />
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                      <div class="form-group" id="summernote_container">
                        <label class="form-control-label">Details</label>
                        <textarea
                          class="summernote form-control"
                          placeholder="Description"
                        ></textarea>
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                      <div class="form-group">
                        <label>Image</label>
                        <div class="form-group service-upload mb-0">
                          <span
                            ><img
                              src="assets/img/icons/drop-icon.svg"
                              alt="upload"
                          /></span>
                          <h6 class="drop-browse align-center">
                            Drop your files here or<span
                              class="text-primary ms-1"
                              >browse</span
                            >
                          </h6>
                          <p class="text-muted">Maximum size: 50MB</p>
                          <input type="file" multiple="" id="image_sign" />
                          <div id="frames"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group-item border-0 pb-0">
                  <div class="form-group">
                    <h5 class="form-title">Discount Details</h5>
                  </div>
                  <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Discount (%)</label>
                        <ul class="form-group-plus css-equal-heights">
                          <li>
                            <select class="select">
                              <option>Enter Discount Amount</option>
                              <option>5%</option>
                              <option>10%</option>
                              <option>15%</option>
                            </select>
                          </li>
                          <li>
                            <span class="btn btn-gray form-plus-btn">%</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Discount Amount</label>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Enter Discount Amount"
                        />
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Minimum Stock Qty</label>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="eg 10"
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="text-end">
                  <button type="reset" class="btn btn-primary cancel me-2">
                    Cancel
                  </button>
                  <button type="submit" class="btn btn-primary">
                    Add Item
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /Page Wrapper -->
    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="assets/js/jquery-3.6.3.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- Feather Icon JS -->
    <script src="assets/js/feather.min.js"></script>

    <!-- Slimscroll JS -->
    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Select2 JS -->
    <script src="assets/plugins/select2/js/select2.min.js"></script>

    <!-- Moment JS -->
    <script src="assets/plugins/moment/moment.min.js"></script>

    <!-- Summernote JS -->
    <script src="assets/plugins/summernote/summernote-lite.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>
  </body>
</html>