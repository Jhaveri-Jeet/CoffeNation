<?php
include("../../includes/config.php");

if (!isset($_SESSION['username']))
    Header("Location: ./login.php");

require(pathOf('admin/includes/styles.php'));
require(pathOf('admin/includes/sidebar.php'));
require(pathOf('admin/includes/header.php'));

$sql = "SELECT * FROM Customer";
$result = mysqli_query($connection, $sql);
$data = mysqli_fetch_all($result);
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h5 class="card-title fw-semibold mb-4">All Customers</h5>
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0 align-middle">
                            <thead class="text-dark fs-4">
                                <tr>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">No.</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Name</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Number</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Email</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Delete</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < count($data); $i++) { ?>
                                    <tr>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0"><?= $i + 1 ?></h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-1"><?= $data[$i][1] ?></h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal"><?= $data[$i][2] ?></p>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0 fs-4"><?= $data[$i][3] ?></h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <a class="mb-0 fw-normal align-middle" href="<?= urlOf("admin/assets/api/deleteCustomer.php?id=") . $data[$i][0] ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eraser" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M19 20h-10.5l-4.21 -4.3a1 1 0 0 1 0 -1.41l10 -10a1 1 0 0 1 1.41 0l5 5a1 1 0 0 1 0 1.41l-9.2 9.3"></path>
                                                    <path d="M18 13.3l-6.3 -6.3"></path>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require(pathOf('admin/includes/footer1.php')); ?>
    <?php require(pathOf('admin/includes/scripts.php')); ?>
    <?php require(pathOf('admin/includes/footer2.php')); ?>