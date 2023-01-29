<?php require_once('../../../private/initialize.php');

$page_title = 'Edit Subject';
include(SHARED_PATH . '/staff_header.php');

if (!isset($_GET['id'])) {
    redirect_to(url_for('/staff/subjects/index.php'));
}
$id = $_GET['id'];

if (is_post_request()) {
    $subject = [];
    $subject['id'] = $id;
    $subject['menu_name'] = $_POST['menu_name'] ?? '';
    $subject['position'] = $_POST['position'] ?? '';
    $subject['visible'] = $_POST['visible'] ?? '';

    echo "<p>ID: " . $subject['id'] . "</p>";
    echo "<p>Menu name: " . $subject['menu_name'] . "</p>";
    echo "<p>Position: " . $subject['position'] . "</p>";
    echo "<p>Visible: " . $subject['visible'] . "</p>";
}
?>

<div id="content">
    <div class="subject edit">
        <h1>Edit Subject</h1>
        <a href="index.php">Back to Menu</a>
        <form action="<?php echo url_for('/staff/subjects/edit.php?id=' . $id) ?>" method="post">
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
                <input type="submit" value="Edit Subject"/>
            </div>
        </form>
    </div>
</div>


