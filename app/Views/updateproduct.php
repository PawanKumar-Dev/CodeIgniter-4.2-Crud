<?php include("includes/header.php"); ?>
<main>
  <div class="container">
    <div class="row">
      <div class="col s12">
        <h3>Update Product</h3>
      </div>
    </div>

    <div class="row">
      <div class="col s12 m6">
        <div class="card">
          <div class="card-content">

            <div class="row">
              <!-- Form -->
              <?php foreach($product as $record): ?>
              <form class="col s12" action="<?php echo base_url("home/updating"); ?>" method="post">
                <div class="row">
                  <div class="input-field col s12">
                    <i class="material-icons prefix">create</i>
                    <input id="icon_prefix" type="text" class="validate" name="product_name" required value="<?=$record->product_name; ?>">
                    <label for="icon_prefix">Product Name</label>
                  </div>

                  <div class="input-field col s12">
                    <i class="material-icons prefix">attach_money</i>
                    <input id="icon_telephone" type="number" class="validate" name="product_price" required value="<?=$record->product_price; ?>">
                    <label for="icon_telephone">Price</label>
                  </div>

                  <div class="input-field col s12">
                    <i class="material-icons prefix">build</i>
                    <input id="icon_category" type="text" class="validate" name="product_category" required value="<?=$record->product_category; ?>">
                    <label for="icon_category">Category</label>
                  </div>

                  <input type="hidden" name="upid" value="<?=$record->id; ?>">
                </div>

                <button class="btn waves-effect waves-light green" type="submit" name="update">Update
                  <i class="material-icons right">send</i>
                </button>
              </form>
              <?php endforeach; ?>
            </div>

          </div>
        </div>
      </div>
    </div>

  </div>

</main>
<?php include("includes/footer.php"); ?>