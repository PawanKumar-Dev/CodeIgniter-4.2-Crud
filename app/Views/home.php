<?php include("includes/header.php"); ?>

<main>
  <div class="container">
    <div class="row">
      <div class="col s12">
        <a class="waves-effect waves-light blue btn add-pd-btn" href="<?php echo base_url("add"); ?>"><i class="material-icons right">add_circle</i>Add Product</a>
      </div>
    </div>

    <div class="row">
      <div class="col s12">
        <h3>Product Data</h3>

        <table class="striped">
          <thead>
            <tr>
              <th>S.no.</th>
              <th>Item Name</th>
              <th>Item Price</th>
              <th>Category</th>
              <th colspan="2">Action</th>
            </tr>
          </thead>

          <tbody>
           <?php
            $i = 1;
            foreach ($prodata as $record) : ?>
            <tr>
              <td><?= $i; ?>.</td>
              <td><?= $record->product_name; ?></td>
              <td><?= $record->product_price; ?></td>
              <td><?= $record->product_category; ?></td>
              <td><a href="<?php echo base_url("update/"); ?>/<?= $record->id; ?>" class="waves-effect waves-light btn green"><i class="material-icons">loop</i></a></td>
              <td><a href="<?php echo base_url("delete/"); ?>/<?= $record->id; ?>" class="waves-effect waves-light btn red"><i class="material-icons">delete_forever</i></a></td>
            </tr>
            <?php
              $i++;
              endforeach; ?>          
          </tbody>
        </table>

      </div>
    </div>

  </div>



</main>

<?php include("includes/footer.php"); ?>