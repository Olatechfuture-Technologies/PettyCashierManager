 <div class="sidebar" id="sidebar">
     <div class="sidebar-header">
         <div class="sidebar-logo">
             <a href="index">
                 <img src="{{ asset('assets/img/profiles/logo2.png') }}" class="img-fluid logo" alt>
             </a>
             <a href="index">
                 <img src="{{ asset('assets/img/logo-small.png') }}" class="img-fluid logo-small" alt>
             </a>
         </div>
     </div>
     <div class="sidebar-inner slimscroll">
         <div id="sidebar-menu" class="sidebar-menu">
             <ul>
                 {{-- <li class="menu-title"><span>Main</span></li>  --}}
                 <li>
                     <a class="active" href="roles-permission"><i class="fa fa-window-restore"></i> Admin Dashboard</a>
                 </li>
                 <li class="submenu">
                     <a href="#"><i class="fe fe-home"></i><span>Manage Residents</span> <span
                             class="menu-arrow"></span></a>
                     <ul>
                         <li><a href="{{ route('admin.tenant.index') }}">All Residents</a></li>
                         <li><a href="{{ route('admin.tenant.create') }}">Add New Residents</a></li>
                         <li><a href="{{ route('admin.tenant-wallet.index') }}">Residents Wallet</a></li>
                     </ul>
                 </li>
                 <li class="submenu">
                     <a href="#"><i class="fa fa-university"></i><span>Manage Houses</span> <span
                             class="menu-arrow"></span></a>
                     <ul>
                         <li><a href="{{ route('admin.house.index') }}">View All Houses</a></li>
                         <li><a href="{{ route('admin.house.create') }}">Add New House</a></li>
                         <li><a href="{{ route('admin.house-cash-flow.index') }}">House Wallet</a></li>
                     </ul>
                 </li>
                 <li class="submenu">
                     <a href="#"><i class="fe fe-package"></i><span>Management Flats</span> <span
                             class="menu-arrow"></span></a>
                     <ul>
                         <li><a href="{{ route('admin.flat.index') }}">View Flats</a></li>
                         <li><a href="{{ route('admin.flat.create') }}">Add new Flats</a></li>
                         <li><a href="{{ route('admin.flat-wallet') }}">Falat Wallet</a></li>
                     </ul>
                 </li>

                 <li class="submenu">
                     <a href="#"><i class="fe fe-user"></i> <span> Manage Staff & Duty</span> <span
                             class="menu-arrow"></span></a>
                     <ul>
                         <li><a href="{{ route('admin.staff.index') }}">View Staff</a></li>
                         <li><a href="#">View Duties</a></li>
                         <li><a href="#">Assign Duty to Staff</a></li>
                         <li><a href="#">Active Staff on Duty</a></li>
                         <li><a href="#">Add New Duty</a></li>
                         <li><a href="#">View Activity</a></li>
                         <li><a href="#">Add New Activity</a></li>

                     </ul>
                 </li>

                 <li class="submenu">
                     <a href="#"><i class="fe fe-package"></i> <span>Services Charge</span> <span
                             class="menu-arrow"></span></a>
                     <ul>
                         <li><a href="templates/product-list">Service Weekly List</a></li>
                         <li><a href="templates/category">Paid</a></li>
                         <li><a href="templates/units">Unpaid</a></li>
                         <li><a href="templates/units">Resident Wallet</a></li>
                         <li><a href="templates/units">Fund Wallet</a></li>
                     </ul>
                 </li>

                 <li class="submenu">
                     <a href="#"><i class="fe fe-file"></i> <span>Invoices</span><span
                             class="menu-arrow"></span></a>
                     <ul>
                         <li><a href="templates/invoices">Invoices List</a></li>
                         <li><a href="templates/invoice-details-admin">Invoice Details (Admin)</a></li>
                         <li><a href="templates/invoice-details">Invoice Details (Customer)</a></li>
                         <li>
                             <a href="recurring-invoices"><i class="fe fe-clipboard"></i> <span>Recurring
                                     Invoices</span></a>
                         </li>
                         <li>
                             <a href="credit-notes"><i class="fe fe-edit"></i> <span>Credit Notes</span></a>
                         </li>

                     </ul>
                 </li>

                 <li>
                     <a href="expenses"><i class="fe fe-file-plus"></i> <span>Expenses</span></a>
                 </li>
                 <li>
                     <a href="payments"><i class="fe fe-credit-card"></i> <span>Payments</span></a>
                 </li>
                 <li>
                     <a href="payments"><i class="fe fe-credit-card"></i> <span>Recipt Uploads</span></a>
                 </li>
                 <li>
                     <a href="payment-summary"><i class="fe fe-credit-card"></i> <span>Payment Summary</span></a>
                 </li>

                 <li class="submenu">
                     <a href="#" class="subdrop"><i class="fe fe-settings"></i> <span> Settings </span> <span
                             class="menu-arrow"></span></a>
                     <ul style="display: block;">
                         <li><a href="form-basic-inputs.html">settings </a></li>
                     </ul>
                 </li>

                 <li>
                     <a href="settings.html">
                         <i class="far fa-user"></i> <span>My Profile</span>
                     </a>
                 </li>

                 <li>
                     <a href="templates/login"><i class="fe fe-power"></i> <span>Logout</span></a>
                 </li>
             </ul>

         </div>
     </div>
 </div>
