<?php
require_once('../../../private/initialize.php');
require_once(SHARED_PATH . '/Page.php');

$pages = [
    new Page(1, 1, "Yo", 1, 1, "content inside Yo"),
    new Page(2, 2, "Yee", 2, 1, "content inside Yee"),
    new Page(3, 3, "Ha", 3, 1, "content inside Ha"),
    new Page(4, 4, "Woooo", 4, 1, "content inside Wooo"),
];

$page_title = "Pages";
include_once(SHARED_PATH . '/staff_header.php'); ?>

    <div id="content">
        <div class="pages listing">
            <h1>Pages</h1>
            <div class="actions">
                <a class="action" href="">Create New Page</a>
            </div>

            <table class="list">
                <tr>
                    <th>Id</th>
                    <th>SubjectId</th>
                    <th>Menu Name</th>
                    <th>Position</th>
                    <th>Visible</th>
                    <th>Content</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>

                <?php foreach ($pages as $page) { ?>
                    <tr>
                        <td><?php echo $page->id ?></td>
                        <td><?php echo $page->subjectId ?></td>
                        <td><?php echo $page->menuName ?></td>
                        <td><?php echo $page->position ?></td>
                        <td><?php echo $page->visible ?></td>
                        <td><?php echo $page->content ?></td>
                        <td><a class="action"
                               href="<?php echo url_for('/staff/pages/show.php?id=' . $page->id) ?>">View</a></td>
                        <td><a class=" action" href=''>Edit</a></td>
                        <td><a class="action" href=''>Delete</a></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
<?php include_once(SHARED_PATH . '/staff_footer.php'); ?>