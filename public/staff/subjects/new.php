<?php require_once('../../../private/initialize.php');

$page_title = 'Create Subject';
include(SHARED_PATH . '/staff_header.php');

if (is_post_request()) {
    $menu_name = $_POST['menu_name'] ?? '';
    $position = $_POST['position'] ?? '';
    $visible = $_POST['visible'] ?? '';

    echo "Form parameters<br />";
    echo "Menu name: " . $menu_name . "<br />";
    echo "Position: " . $position . "<br />";
    echo "Visible: " . $visible . "<br />";
}
?>

<div id="content">
    <h1>Create Subject</h1>
    <a href="<?php echo url_for('/staff/subjects/index.php')?>">Back to Menu</a>
    <form action="<?php echo url_for('/staff/subjects/new.php') ?>" method="post">
        <dl>
            <dt>Menu Name</dt>
            <dd><input type="text" name="menu_name" value=""/></dd>
        </dl>
        <dl>
            <dt>Position</dt>
            <dd>
                <select name="position">
                    <option value="1">1</option>
                </select>
            </dd>
        </dl>
        <dl>
            <dt>Visible</dt>
            <dd>
                <input type="hidden" name="visible" value="0"/>
                <input type="checkbox" name="visible" value="1"/>
            </dd>
        </dl>
        <div id="operations">
            <input type="submit" value="Create Subject"/>
        </div>
</div>

