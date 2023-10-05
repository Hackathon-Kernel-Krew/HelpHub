<?php

require "connection.php";

$txt = $_POST["t"];
$select = $_POST["s"];

// echo $txt;

$query = "SELECT * FROM `posts`";

if (!empty($txt) && $select == 0) {
    $query .= " WHERE `title` LIKE '%" . $txt . "%'";
} else if (empty($txt) && $select != 0) {
    $query .= " WHERE `category_id`='" . $select . "'";
} else if (!empty($txt) && $select != 0) {
    $query .= " WHERE `title` LIKE '%" . $txt . "%' AND `category_id`='" . $select . "'";
}

?>

<div class="col-12">
    <div class="row">
        <div class="row ">

            <?php


            if ("0" != ($_POST["page"])) {
                $pageno = $_POST["page"];
            } else {
                $pageno = 1;
            }

            $post_rs = Database::search($query);
            $post_num = $post_rs->num_rows;

            $results_per_page = 4;
            $number_of_pages = ceil($post_num / $results_per_page);

            $page_results = ($pageno - 1) * $results_per_page;
            $selected_rs =  Database::search($query . " LIMIT " . $results_per_page . " OFFSET " . $page_results . "");

            $selected_num = $selected_rs->num_rows;

            if ($selected_num == 0) {
            ?>

                <div class="col-12 text-center">
                    <div class="row" id="view_area">
                        <div class="offset-5 col-2 mt-5">
                            <span class="fw-bold text-black-50"><i class="bi bi-search" style="font-size: 100px;"></i></span>
                        </div>
                        <div class="offset-3 col-6 mt-3 mb-5">
                            <span class="h4 text-black-50 fw-bold">No Items Searched Yet..</span>
                        </div>
                    </div>
                </div>

            <?php
            } else {
            ?>
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <?php
                    for ($x = 0; $x < $selected_num; $x++) {
                        $selected_data = $selected_rs->fetch_assoc();

                        $image_rs = Database::search("SELECT * FROM `posts_has_post_images` WHERE `posts_id`='" . $selected_data["id"] . "'");
                        $image_data = $image_rs->fetch_assoc();

                        $image_path_rs = Database::search("SELECT * FROM `post_images` WHERE `id`='" . $image_data["post_images_id"] . "'");
                        $image_path_data = $image_path_rs->fetch_assoc();
                    ?>


                        <div class="col">
                            <div class="card">
                                <img src="<?php echo $image_path_data["path"]; ?>" class="card-img-top image_size" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $selected_data["title"]; ?></h5>
                                    <p class="card-text"><?php echo $selected_data["content"]; ?></p>
                                </div>
                            </div>
                        </div>


                <?php
                    }
                }
                ?>


                </div>
        </div>
    </div>
    <!--  -->


    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center mt-4">
            <li class="page-item disabled curcer">
                <a class="page-link" <?php if ($pageno <= 1) {
                                            echo "#";
                                        } else {
                                        ?> onclick="advanceSearch('<?php echo ($pageno - 1); ?>')" <?php
                                                                                                } ?>>Previous</a>
            </li>

            <?php

            for ($page = 1; $page <= $number_of_pages; $page++) {

            ?>
                <li class="page-item curcer">
                    <?php

                    if ($page == $pageno) {
                    ?>
                        <a class="page-link" onclick="advanceSearch('<?php echo ($page); ?>')" class="active">
                            <?php echo $page; ?>
                        </a>
                    <?php

                    } else {

                    ?>
                        <a class="page-link" onclick="advanceSearch('<?php echo ($page); ?>')">
                            <?php echo $page; ?>
                        </a>
                    <?php

                    }
                    ?>

                </li>
            <?php

            }

            ?>



            <li class="page-item curcer">
                <a class="page-link" <?php if ($pageno >= $number_of_pages) {
                                            echo "#";
                                        } else {
                                        ?> onclick="advancedSearch('<?php echo ($pageno + 1); ?>')" <?php
                                                                                                } ?>>Next</a>
            </li>
        </ul>
    </nav>

    <!--  -->
</div>