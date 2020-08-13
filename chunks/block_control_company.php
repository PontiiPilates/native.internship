<?php
$company_id = $_GET['company-id'];
$output = db_output_once("SELECT * FROM `companys` WHERE `id` = '$company_id'");
// echo '<pre>';
// print_r($output);
// echo '</pre>';
?>

<?php
// Осуществляет предотвращения показа пустой вёрстки пользователю.
if (db_check("SELECT * FROM companys WHERE id = '$company_id'")) :
?>
    <form id="control-company">
        <div class="form-group">
            <label for="company_name">Название компании<span class="text-danger">*</span></label>
            <input type="text" name="company_name" class="form-control" id="company_name" required value="<?php print $output['name']; ?>">
        </div>
        <div class="form-group">
            <img class="img-thumbnail mb-3 col-lg-3" src="img/company_logo/<?php print $output['logotip']; ?>" alt="<?php print $output['name']; ?>" id="company-logo-preview"><br>
            <label for="company_logo" class="btn btn-outline-secondary col-lg-3">Изменить логотип</label><span id="filename"></span>
            <input type="file" class="form-control" name="company_logo" id="company_logo" hidden>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Сохранить">
            <input type="button" class="btn btn-danger" value="Удалить" id="company_delete" data-target="<?php print $company_id ?>">
            <!-- Идентификатор компании. -->
            <input type="hidden" name="company_id" value="<?php print $company_id ?>">
            <!--  -->
        </div>
    </form>
<?php endif; ?>

<script>
    /**
     * Осуществляет добавление в layout имени выбранного файла.
     */
    $(document).ready(function() {
        $('input[type="file"]').change(function() {
            var value = $("input[type='file']").val();
            $('#filename').text('   ' + value.slice(12));
        });
    });
</script>