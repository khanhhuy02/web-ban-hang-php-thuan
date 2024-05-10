
<h1>index views controller </h1>
<?php foreach ($phim  as $key => $value) { ?>
    <h1><?= $value['name'] ?>
        <a href="<?= 'delete/pro/'. ($value['id'] ?? '') ?>">xóa</a>
    </h1>

    </form>


<?php } ?>


<form action="tests" method="POST">
    <input type="text" name="name">
    <input type="text" name="image">
    <input type="text" name="Category">
    <input type="text" name="views">

    <input type="submit" value="click" name="click">
</form>