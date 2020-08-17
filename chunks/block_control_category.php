<?php
$category_id = $_GET['category-id'];
$output = db_output_once("SELECT * FROM `categorys` WHERE `id` = '$category_id'");
// echo '<pre>';
// print_r($output);
// echo '</pre>';
?>

<?php
// Осуществляет предотвращения показа пустой вёрстки пользователю.
if (db_check("SELECT * FROM categorys WHERE id = '$category_id'")) :
?>
    <form id="control-category">
        <div class="form-group">
            <label for="category_name">Название категории<span class="text-danger">*</span></label>
            <input type="text" name="category_name" class="form-control" id="category_name" required value="<?php print $output['name']; ?>">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Сохранить">
            <input type="button" class="btn btn-danger" value="Удалить" id="category_delete" data-target="<?php print $category_id ?>">
            <!-- Идентификатор категории. -->
            <input type="hidden" name="category_id" value="<?php print $category_id ?>">
            <!--  -->
        </div>
    </form>
<?php endif; ?>