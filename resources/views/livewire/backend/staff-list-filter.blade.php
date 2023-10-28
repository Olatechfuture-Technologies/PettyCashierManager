<div class="toggle-sidebar">
    <div class="sidebar-layout-filter">
        <div class="sidebar-header">
            <h5>Filter</h5>
            <a href="#" class="sidebar-closes"><i class="fa-regular fa-circle-xmark"></i></a>
        </div>
        <div class="sidebar-body">
            <form action="#" autocomplete="off">

                <div class="accordion" id="accordionMain1">
                    <div class="card-header-new" id="headingOne">
                        <h6 class="filter-title">
                            <a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Staff
                                <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                            </a>
                        </h6>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample1">
                        <div class="card-body-chat">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="checkBoxes1">
                                        <div class="form-custom">
                                            <input type="text" class="form-control" id="member_search1"
                                                placeholder="Search here">
                                            <span><img src="{{ asset('assets/img/icons/search.svg') }}"
                                                    alt="img"></span>
                                        </div>
                                        <div class="selectBox-cont">
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="username">
                                                <span class="checkmark"></span> staff name
                                            </label>
                                            <div class="view-content">
                                                <div class="viewall-One" style="display: none;">
                                                    <label class="custom_check w-100">
                                                        <input type="checkbox" name="username">
                                                        <span class="checkmark"></span> More Staff names
                                                    </label>
                                                </div>
                                                <div class="view-all">
                                                    <a href="javascript:void(0);" class="viewall-button-One"><span
                                                            class="me-2">View All</span><span><i
                                                                class="fa fa-circle-chevron-down"></i></span></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion border-0" id="accordionMain3">
                    <div class="card-header-new" id="headingThree">
                        <h6 class="filter-title">
                            <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                By Status
                                <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                            </a>
                        </h6>
                    </div>
                    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample3">
                        <div class="card-body-chat">
                            <div id="checkBoxes2">

                                <div class="selectBox-cont">
                                    <label class="custom_check w-100">
                                        <input type="checkbox" name="bystatus">
                                        <span class="checkmark"></span> All Status
                                    </label>
                                    <label class="custom_check w-100">
                                        <input type="checkbox" name="bystatus">
                                        <span class="checkmark"></span> Activate
                                    </label>
                                    <label class="custom_check w-100">
                                        <input type="checkbox" name="bystatus">
                                        <span class="checkmark"></span> Deactivate
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="filter-buttons">
                    <button type="submit"
                        class="d-inline-flex align-items-center justify-content-center btn w-100 btn-primary">
                        Apply
                    </button>
                    <button type="submit"
                        class="d-inline-flex align-items-center justify-content-center btn w-100 btn-secondary">
                        Reset
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
