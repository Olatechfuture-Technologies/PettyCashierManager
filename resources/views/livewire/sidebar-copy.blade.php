 <div class="sidebar" id="sidebar">
     <div class="sidebar-header">
         <div class="sidebar-logo">
             <a href="index">
                 <img src="{{ asset('assets/img/profiles/logo2.png')}}" class="img-fluid logo" alt>
             </a>
             <a href="index">
                 <img src="{{ asset('assets/img/logo-small.png')}}" class="img-fluid logo-small" alt>
             </a>
         </div>
     </div>
     <div class="sidebar-inner slimscroll">
         <div id="sidebar-menu" class="sidebar-menu">

             <ul>
                 <li class="menu-title"><span>Main</span></li>
                 <li class="submenu">
                     <a href="#"><i class="fa fa-window-restore" data-bs-toggle="tooltip"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>

                     <ul>
                         <li><a class="active" href="index">Admin Dashboard</a></li>
                     </ul>
                 </li>
                 <li class="submenu">
                     <a href="#"><i class="fe fe-home"></i><span> Residents</span> <span class="menu-arrow"></span></a>
                     <ul>
                         <li><a href="templates/chat">All Residents</a></li>
                         <li><a href="templates/calendar">Add New Residents</a></li>
                     </ul>
                 </li>
             </ul>

             <ul>
                 <li class="menu-title"><span>User Management</span></li>
                 <li class="submenu">
                     <a href="#"><i class="fe fe-user"></i> <span> Manage Users</span> <span class="menu-arrow"></span></a>
                     <ul>
                         <li><a href="templates/users">All Tenants</a></li>
                         <li><a href="templates/users">All Staff</a></li>

                     </ul>
                 </li>
                 <li>
                     <a href="roles-permission"><i class="fe fe-clipboard"></i> <span>Roles & Permission</span></a>
                 </li>
                 <li>
                     <a href="delete-account-request"><i class="fe fe-trash-2"></i> <span>Delete Account Request</span></a>
                 </li>
             </ul>
             <ul>
                 <li class="menu-title"><span>Staff Duty</span></li>
                 <li class="submenu">
                     <a href="#"><i class="fe fe-user"></i> <span> View Staff Duty</span> <span class="menu-arrow"></span></a>
                     <ul>
                         <li><a href="templates/users">View All</a></li>
                     </ul>
                 </li>
             </ul>

             <ul>
                 <li class="menu-title"><span>Customers</span></li>
                 <li>
                     <a href="customers"><i class="fe fe-users"></i> <span>Customers</span></a>
                 </li>
                 <li>
                     <a href="customer-details"><i class="fe fe-file"></i> <span>Customer Details</span></a>
                 </li>
                 <li>
                     <a href="vendors"><i class="fe fe-user"></i> <span>Vendors</span></a>
                 </li>
             </ul>


             <ul>
                 <li class="menu-title"><span>services</span></li>
                 <li class="submenu">
                     <a href="#"><i class="fe fe-package"></i> <span>Services Charge</span> <span class="menu-arrow"></span></a>
                     <ul>
                         <li><a href="templates/product-list">Service Weekly List</a></li>
                         <li><a href="templates/category">Paid</a></li>
                         <li><a href="templates/units">Unpaid</a></li>
                         <li><a href="templates/units">Resident Wallet</a></li>
                         <li><a href="templates/units">Fund Wallet</a></li>
                     </ul>
                 </li>
                 {{-- <li>
                     <a href="inventory"><i class="fe fe-user"></i> <span>Inventory</span></a>
                 </li>  --}}
             </ul>


             <ul>
                 <li class="menu-title"><span>Invoices</span></li>
                 <li class="submenu">
                     <a href="#"><i class="fe fe-file"></i> <span>Invoices</span><span class="menu-arrow"></span></a>
                     <ul>
                         <li><a href="templates/invoices">Invoices List</a></li>
                         <li><a href="templates/invoice-details-admin">Invoice Details (Admin)</a></li>
                         <li><a href="templates/invoice-details">Invoice Details (Customer)</a></li>
                         <li><a href="templates/invoice-template">Invoice Templates</a></li>
                     </ul>
                 </li>
                 <li>
                     <a href="recurring-invoices"><i class="fe fe-clipboard"></i> <span>Recurring Invoices</span></a>
                 </li>
                 <li>
                     <a href="credit-notes"><i class="fe fe-edit"></i> <span>Credit Notes</span></a>
                 </li>
             </ul>

             <ul>
                 <li class="menu-title"><span>Finance & Accounts</span></li>
                 <li>
                     <a href="expenses"><i class="fe fe-file-plus"></i> <span>Expenses</span></a>
                 </li>
                 <li>
                     <a href="payments"><i class="fe fe-credit-card"></i> <span>Payments</span></a>
                 </li>
             </ul>


             <ul>
                 <li class="menu-title"><span>Quotations</span></li>
                 <li>
                     <a href="quotations"><i class="fe fe-clipboard"></i> <span>Quotations</span></a>
                 </li>
                 <li>
                     <a href="delivery-challans"><i class="fe fe-file-text"></i> <span>Delivery Challans</span></a>
                 </li>
             </ul>


             <ul>
                 <li class="menu-title"><span>Reports</span></li>
                 <li>
                     <a href="payment-summary"><i class="fe fe-credit-card"></i> <span>Payment Summary</span></a>
                 </li>
             </ul>





             <ul>
                 <li class="menu-title"><span>Membership</span></li>
                 <li class="submenu">
                     <a href="#"><i class="fe fe-book"></i> <span> Membership</span> <span class="menu-arrow"></span></a>
                     <ul>
                         <li><a href="templates/membership-plans">Membership Plans</a></li>
                         <li><a href="templates/membership-addons">Membership Addons</a></li>
                         <li><a href="templates/subscribers">Subscribers</a></li>
                         <li><a href="templates/transactions">Transactions</a></li>
                     </ul>
                 </li>
             </ul>


             <ul>
                 <li class="menu-title"><span>Content (CMS)</span></li>
                 <li class="submenu">
                     <a href="#"><i class="fe fe-folder"></i> <span> Pages</span> <span class="menu-arrow"></span></a>
                     <ul>
                         <li><a href="templates/add-page">Add Page</a></li>
                         <li><a href="templates/pages">Pages</a></li>
                     </ul>
                 </li>
                 <li class="submenu">
                     <a href="#"><i class="fe fe-book"></i> <span> Blog</span> <span class="menu-arrow"></span></a>
                     <ul>
                         <li><a href="templates/all-blogs">All Blogs</a></li>
                         <li><a href="templates/add-blog">Add Blog</a></li>
                         <li><a href="templates/categories">Categories</a></li>
                         <li><a href="templates/blog-comments">Blog Comments</a></li>
                     </ul>
                 </li>
                 <li class="submenu">
                     <a href="#"><i class="fe fe-map-pin"></i> <span> Location</span> <span class="menu-arrow"></span></a>
                     <ul>
                         <li><a href="templates/countries">Countries</a></li>
                         <li><a href="templates/states">States</a></li>
                         <li><a href="templates/cities">Cities</a></li>
                     </ul>
                 </li>
                 <li>
                     <a href="testimonials"><i class="fe fe-message-square"></i> <span>Testimonials</span></a>
                 </li>
                 <li>
                     <a href="faq"><i class="fe fe-alert-circle"></i> <span>FAQ</span></a>
                 </li>
             </ul>


             <ul>
                 <li class="menu-title"><span>Support</span></li>
                 <li>
                     <a href="contact-messages"><i class="fe fe-printer"></i> <span>Contact Messages</span></a>
                 </li>
                 <li class="submenu">
                     <a href="#"><i class="fe fe-save"></i> <span> Tickets</span> <span class="menu-arrow"></span></a>
                     <ul>
                         <li><a href="templates/tickets">Tickets</a></li>
                         <li><a href="templates/tickets-list">Tickets List</a></li>
                         <li><a href="templates/tickets-kanban">Tickets Kanban</a></li>
                         <li><a href="templates/ticket-details">Ticket Overview</a></li>
                     </ul>
                 </li>
             </ul>


             <ul>
                 <li class="submenu">
                     <a href="#"><i class="fe fe-lock"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
                     <ul>
                         <li><a href="templates/login"> Login </a></li>
                         <li><a href="templates/register"> Register </a></li>
                         <li><a href="templates/forgot-password"> Forgot Password </a></li>
                         <li><a href="templates/lock-screen"> Lock Screen </a></li>
                     </ul>
                 </li>
             </ul>


             <ul>
                 <li class="menu-title"><span>Pages</span></li>
                 <li>
                     <a href="profile"><i class="fe fe-user"></i> <span>Profile</span></a>
                 </li>
                 <li>
                     <a href="error-404"><i class="fe fe-x-square"></i> <span>Error Pages</span></a>
                 </li>
                 <li>
                     <a href="blank-page"><i class="fe fe-file"></i> <span>Blank Page</span></a>
                 </li>
                 <li>
                     <a href="maps-vector"><i class="fe fe-image"></i> <span>Vector Maps</span></a>
                 </li>
             </ul>
             <ul>
                 <li class="menu-title"><span>Settings</span></li>
                 <li>
                     <a href="templates/settings"><i class="fe fe-settings"></i> <span>Settings</span></a>
                 </li>
                 <li>
                     <a href="templates/login"><i class="fe fe-power"></i> <span>Logout</span></a>
                 </li>
             </ul>

         </div>
     </div>
 </div>

