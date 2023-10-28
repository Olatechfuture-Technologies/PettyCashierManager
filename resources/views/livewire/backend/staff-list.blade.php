<x-slot:header>Staff Lists
    <x-slot:headerContent>
        <ul class="filter-list">
            <li>
                <a class="btn btn-filters w-auto popup-toggle" data-bs-toggle="tooltip" data-bs-placement="bottom"
                    data-bs-original-title="Filter"><span class="me-2"><img
                            src="{{ asset('assets/img/icons/filter-icon.svg') }}" alt="filter"></span>Filter </a>
            </li>
            <li>
                <a class="active btn-filters" href="javascript:void(0);" data-bs-toggle="tooltip"
                    data-bs-placement="bottom" aria-label="List-View" data-bs-original-title="List-View"><span><i
                            class="fe fe-list"></i></span> </a>
            </li>
            <li>
                <a class="btn-filters" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="bottom"
                    aria-label="Grid-View" data-bs-original-title="Grid-View"><span><i class="fe fe-grid"></i></span>
                </a>
            </li>
            <li>
                <div class="dropdown dropdown-action" data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-original-title="Download">
                    <a href="#" class="btn-filters" data-bs-toggle="dropdown" aria-expanded="false"><span><i
                                class="fe fe-download"></i></span></a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <ul class="d-block">
                            <li>
                                <a class="d-flex align-items-center download-item" href="javascript:void(0);"
                                    download=""><i class="far fa-file-pdf me-2"></i>PDF</a>
                            </li>
                            <li>
                                <a class="d-flex align-items-center download-item" href="javascript:void(0);"
                                    download=""><i class="far fa-file-text me-2"></i>CVS</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <a class="btn-filters" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="bottom"
                    aria-label="Print" data-bs-original-title="Print"><span><i class="fe fe-printer"></i></span> </a>
            </li>
            <li>
                <a class="btn btn-import" href="javascript:void(0);"><span><i class="fe fe-check-square me-2"></i>Import
                        Customer</span></a>
            </li>
            <li>
                <a class="btn btn-primary" href="add-customer.html"><i class="fa fa-plus-circle me-2"
                        aria-hidden="true"></i>Add Customer</a>
            </li>
        </ul>
    </x-slot:headerContent>
</x-slot:header>
<div class="row">
    <div class="col-sm-12">
        <div class="card-table">
            <div class="card-body">
                <div class="table-responsive">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <table class="table table-center table-hover datatable dataTable no-footer"
                            id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                            <thead class="thead-light">
                                <tr role="row">
                                    <th class="sorting_asc" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-sort="ascending">#
                                    </th>
                                    <th class="sorting" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                        aria-label="Name:">Staff Name</th>
                                    <th class="sorting" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                        aria-label="Phone:">Phone</th>

                                    <th class="sorting" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                        aria-label="OnDuty:">On Duty </th>
                                    <th class="sorting" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                        aria-label="Total Flats Taken:">Total Flats InCare
                                    </th>
                                    <th class="sorting" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                        aria-label="Status:">Status</th>
                                    <th class="sorting" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-label="Actions:">Actions</th>
                                    <th class="sorting" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-label="Created:">Date Added</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">1</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar avatar-md me-2"><img
                                                    class="avatar-img rounded-circle"
                                                    src="{{ asset('assets/img/profiles/avatar-07.jpg') }}"
                                                    alt="User Image"></a>
                                            <a href="profile.html">John Smith <span>john@example.com</span></a>
                                        </h2>
                                    </td>
                                    <td>+1 989-438-3131</td>
                                    <td>$4,220</td>
                                    <td>2</td>

                                    <td><span class="badge badge-pill bg-success-light">Active</span></td>
                                    <td class="d-flex align-items-center">
                                        <div class="btn-group dropup" role="group" aria-label="nested dropdown">
                                            <a href="#" class="btn btn-secondary text-white">
                                                <i class="fa fa-plus-circle me-1"></i> Asign Duty
                                            </a>
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-primary dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v me-2"></i>More
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="edit-customer.html"><i
                                                                class="far fa-edit me-2"></i>Edit</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0);"
                                                            data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                                class="far fa-trash-alt me-2"></i>Delete</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="customer-details.html"><i
                                                                class="far fa-eye me-2"></i>View</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="active-customers.html"><i
                                                                class="fa-solid fa-power-off me-2"></i>Activate</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="deactive-customers.html"><i
                                                                class="far fa-bell-slash me-2"></i>Deactivate</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                    <td>19 Dec 2022, 06:12 PM</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <livewire:backend.staff-list-filter />
</div>
