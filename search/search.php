<div class="row">

    <!-- project show -->
    <?php
    require_once '../conection/index.php';
    $i = 0;
    if (isset($_GET['query'])) {

        $query = $_GET['query'];
        $query = str_replace("'", "\'", $query);

        $sql_query = $con->query("SELECT * FROM `project_info` WHERE `feture` LIKE '%$query%' OR `name`  LIKE '%$query%'  OR `description` LIKE '%$query%'");


        while ($row = $sql_query->fetch_assoc()) {
            $i++;
            if ($i >= 50) {
                break;
            }
    ?>


            <a href="/view/?id=<?= $row['id']; ?>" class="title col-xl-6 col-md-12 mb-2">
                <div>
                    <div class=" border rounded content_body p-2">
                        <img loading="lazy" title="Please try again...." class="image" src="/image/notice/<?= $row['file']; ?>" alt="&nbsp;Please try again...">
                        <div class="h4 text-align-justify">
                            <?= $row['name']; ?>

                        </div>
                    </div>
                </div>
            </a>
    <?php }
    } ?>
    <!-- end project Show -->

    <!-- blog show -->
    <?php
    require_once '../conection/index.php';
    if (isset($_GET['query'])) {

        $query = $_GET['query'];
        $query = str_replace("'", "\'", $query);

        $sql_query = $con->query("SELECT * FROM `blog` WHERE `name` LIKE '%$query%'  OR `description` LIKE '%$query%'");


        while ($row = $sql_query->fetch_assoc()) {
            $i++;
            if ($i >= 50) {
                break;
            }
    ?>


            <a href="/blog/?id=<?= $row['id']; ?>" class="title col-xl-6 col-md-12 mb-2">
                <div>
                    <div class=" border rounded content_body p-2">
                        <img loading="lazy" class="image" src="<?= $row['image']; ?>" alt="Please wait.....">
                        <div class="h4 text-align-justify">
                            <?= $row['name']; ?>

                        </div>
                    </div>
                </div>
            </a>
    <?php }
    } ?>
    <!-- end blog Show -->


    <div class="text-center h2">
        <?php if ($i == 0) {
            echo "No Result Found ...";
        } ?>
    </div>


</div>