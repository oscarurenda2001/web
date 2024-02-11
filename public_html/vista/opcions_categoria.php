<?php
    echo '<option value="0"> Escull una categoria </option>'

?>

<?php foreach($res_categories as $categoria){ ?>
    <option value="<?php echo $categoria['id']; ?>">
    <?php echo $categoria['nom']; ?>
    </option>
<?php } ?>

