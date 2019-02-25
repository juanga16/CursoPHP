<html>
<body>
    <?php 
        $checked1 = TRUE; 
    ?>

    <input type="checkbox" <?php echo ($checked1 ? 'checked' : '') ?> value="checkbox1">
    <label>Checkbox 1</label>
    <br/>
    <input type="checkbox" <?php echo (! $checked1 ? 'checked' : '') ?> value="checkbox2">
    <label>Checkbox 2</label>
</body>
</html>