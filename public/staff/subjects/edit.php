<?php require_once('../../../private/initialize.php'); ?>

<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
    <div class="subject edit">
        <h1>Edit Subject</h1>
        <a href="index.php">Back to Menu</a>
        <form action="" method="post">
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


