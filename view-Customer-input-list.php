<select class="form-select" id="iid" name="iid">
    <?php while ($CustomerItem = $CustomerList->fetch_assoc()) {
        $selText = "";
        if ($selectedCustomer == $CustomerItem['CustomerID']) {
            $selText = " selected";
        }
    ?>
    <option value="<?php echo $CustomerItem['CustomerID']; ?>"<?=$selText?>><?php echo $CustomerItem['CustomerName']; ?></option>
    <?php } ?>
</select>
