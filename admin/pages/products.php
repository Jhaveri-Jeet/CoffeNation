<?php
include("../../includes/config.php");

if (!isset($_SESSION['username']))
    Header("Location: ./login.php");

require(pathOf('admin/includes/styles.php'));
require(pathOf('admin/includes/sidebar.php'));
require(pathOf('admin/includes/header.php'));

$sql = "SELECT Products.Name, Products.Description, Products.Price, Products.ImageName, Category.Name as CategroyName FROM Products INNER JOIN Category ON Category.Id = Products.CategoryId";
$result = mysqli_query($connection, $sql);
$data = mysqli_fetch_all($result);

$category = "SELECT * FROM Category";
$query = mysqli_query($connection, $category);
$categoryData = mysqli_fetch_all($query);
print_r($categoryData);

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <div class="row">
                        <h5 class="card-title fw-semibold mb-4 col">Products
                            <svg xmlns="http://www.w3.org/2000/svg" class="col icon icon-tabler icon-tabler-plus" onclick="showInsertModal()" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M12 5l0 14"></path>
                                <path d="M5 12l14 0"></path>
                            </svg>
                        </h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0 align-middle">
                            <thead class="text-dark fs-4 align-middle">
                                <tr>
                                    <th class="border-bottom-0 align-middle">
                                        <h6 class="fw-semibold mb-0 align-middle">No.</h6>
                                    </th>
                                    <th class="border-bottom-0 align-middle">
                                        <h6 class="fw-semibold mb-0 align-middle">Name</h6>
                                    </th>
                                    <th class="border-bottom-0 align-middle">
                                        <h6 class="fw-semibold mb-0 align-middle">Description</h6>
                                    </th>
                                    <th class="border-bottom-0 align-middle">
                                        <h6 class="fw-semibold mb-0 align-middle">Price</h6>
                                    </th>
                                    <th class="border-bottom-0 align-middle">
                                        <h6 class="fw-semibold mb-0 align-middle">Category Name</h6>
                                    </th>
                                    <th class="border-bottom-0 align-middle">
                                        <h6 class="fw-semibold mb-0 align-middle">Image</h6>
                                    </th>
                                    <th class="border-bottom-0 align-middle">
                                        <h6 class="fw-semibold mb-0 align-middle">Update</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < count($data); $i++) { ?>
                                    <tr>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0"><?= $i + 1  ?></h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-1"><?= $data[$i][0] ?></h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-1"><?= $data[$i][1] ?></h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-1"><?= $data[$i][2] ?></h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-1"><?= $data[$i][4] ?></h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <img src="<?= urlOf('admin//assets/uploads/productImage/') . $data[$i][3] ?>" class="card-img-top" style="border-radius: 50%;height: 70px;width: 70px;object-fit: cover;object-position: center" alt="<?= $data[$i][3] ?>">
                                        </td>
                                        <td class="border-bottom-0">
                                            <a class="mb-0 fw-normal align-middle" onclick="showUpdateModal(<?= $data[$i][0] ?>, '<?= $data[$i][3] ?>')">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" onclick="showUpdateModal(<?= $data[$i][0] ?>, '<?= $data[$i][3] ?>')" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                                                    <path d="M16 5l3 3"></path>
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

    <!-- Insert Modal -->
    <dialog id="insertTableModal" style="top: 50%;left: 50%;border:0px;border-radius:10px; height: 80%;width: 30%;-webkit-transform: translateX(-50%) translateY(-50%);-moz-transform: translateX(-50%) translateY(-50%);-ms-transform: translateX(-50%) translateY(-50%);transform: translateX(-50%) translateY(-50%);">
        <form method="POST" action="<?= urlOf("admin/assets/api/insertProduct.php") ?>" enctype="multipart/form-data">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label mb-3">Product Name : </label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Product Name : ">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label mb-3">Product Description : </label>
                        <input type="text" class="form-control" name="description" placeholder="Enter Product Description : ">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label mb-3">Product Price : </label>
                        <input type="number" class="form-control" name="price" placeholder="Enter Product Price : ">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label mb-3">Select Category : </label>
                        <select class="form-select" name="category">
                            <?php for ($i = 0; $i < count($categoryData); $i++) { ?>
                                <option value="<?= $categoryData[$i][0] ?>"><?= $categoryData[$i][1] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label mb-3">Product Image : </label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </dialog>

    <!-- Update Modal -->
    <dialog id="updateRequestModal" style="top: 50%;left: 50%;border:0px;border-radius:10px; height: 50%;width: 30%;-webkit-transform: translateX(-50%) translateY(-50%);-moz-transform: translateX(-50%) translateY(-50%);-ms-transform: translateX(-50%) translateY(-50%);transform: translateX(-50%) translateY(-50%);">
        <form method="POST" action="<?= urlOf("admin/assets/api/updateReservation.php") ?>">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label mb-3">Update Status : </label>
                        <input type="text" class="form-control" name="updateStatus" id="status">
                        <input type="hidden" name="updateId" id="id">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </dialog>
    <?php require(pathOf('admin/includes/footer1.php')); ?>
    <?php require(pathOf('admin/includes/scripts.php')); ?>
    <script>
        function showInsertModal() {
            insertTableModal.showModal();
        }

        function showUpdateModal(id, tableNumber, status) {
            updateTableModal.showModal();
            $("#id").val(id);
            $("#tableNumber").val(tableNumber);
            $("#status").val(status);
        }
    </script>
    <?php require(pathOf('admin/includes/footer2.php')); ?>