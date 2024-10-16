<?php
include './includes/header.php';

session_start();
$_SESSION['admin_current_page'] = 'product';
?>


<div id="wrapper">
<?php
include './includes/sidebar.php';
?>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

<?php
include './includes/topbar.php';
?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Product</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="80px">No</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <!-- <th>Start date</th>
                        <th>Salary</th> -->
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            <span class="table-icon-img mr-2">
                                <img src="../assets/images/gifts.png" alt="image">
                            </span>
                            Jonas Alexander</td>
                        <td>$220</td>
                        <td>30</td>
                        <!-- <td>2010/07/14</td>
                        <td>$86,500</td> -->
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            <span class="table-icon-img mr-2">
                                <img src="../assets/images/gifts.png" alt="image">
                            </span>    
                        Shad Decker</td>
                        <td>$50</td>
                        <td>51</td>
                        <!-- <td>2008/11/13</td>
                        <td>$183,000</td> -->
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>
                        <span class="table-icon-img mr-2">
                                <img src="../assets/images/gifts.png" alt="image">
                            </span>    
                        Michael Bruce</td>
                        <td>$120</td>
                        <td>29</td>
                        <!-- <td>2011/06/27</td>
                        <td>$183,000</td> -->
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>
                        <span class="table-icon-img mr-2">
                                <img src="../assets/images/gifts.png" alt="image">
                            </span>    
                        Donna Snider</td>
                        <td>$420</td>
                        <td>27</td>
                        <!-- <td>2011/01/25</td>
                        <td>$112,000</td> -->
                    </tr>
                </tbody>
            </table>

        <div class="row p-0 m-0">
            <div class="col-sm-12 col-md-5">
                <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">
                    Showing 1 to 10 of 57 entries
                </div>
            </div>
            <div class="col-sm-12 col-md-7">
                <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                    <ul class="pagination text-right">
                        <li class="paginate_button page-item previous disabled" id="dataTable_previous">
                            <a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                        </li>
                        <li class="paginate_button page-item active">
                            <a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                        </li>
                        <li class="paginate_button page-item ">
                            <a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                        </li>
                        <li class="paginate_button page-item ">
                            <a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                        </li>
                        <li class="paginate_button page-item ">
                            <a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                        </li>
                        <li class="paginate_button page-item ">
                            <a href="#" aria-controls="dataTable" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                        </li>
                        <li class="paginate_button page-item ">
                            <a href="#" aria-controls="dataTable" data-dt-idx="6" tabindex="0" class="page-link">6</a>
                        </li>
                        <li class="paginate_button page-item next" id="dataTable_next">
                            <a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

</div>
</div>
</div>


<?php
include './includes/footer.php';
?>