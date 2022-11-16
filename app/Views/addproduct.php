<?php include("includes/header.php"); ?>
<main>
  <div class="container">
    <div class="row">
      <div class="col s12">
        <h3>Add New Product Data</h3>
      </div>
    </div>

    <div class="row">
      <div class="col s12 m6">
        <div class="card">
          <div class="card-content">

            <div class="row">
              <!-- Form -->
              <form class="col s12" action="<?php echo base_url("home/addproduct"); ?>" method="post">
                <div class="row">
                  <div class="input-field col s12">
                    <i class="material-icons prefix">create</i>
                    <input id="icon_prefix" type="text" class="validate" name="product_name" required>
                    <label for="icon_prefix">Product Name</label>
                  </div>

                  <div class="input-field col s12">
                    <i class="material-icons prefix">attach_money</i>
                    <input id="icon_telephone" type="number" class="validate" name="product_price" required>
                    <label for="icon_telephone">Price</label>
                  </div>

                  <div class="input-field col s12">
                    <i class="material-icons prefix">build</i>
                    <input id="icon_category" type="text" class="validate" name="product_category" required>
                    <label for="icon_category">Category</label>
                  </div>
                </div>

                <button class="btn waves-effect waves-light green" type="submit" name="submit">Submit
                  <i class="material-icons right">send</i>
                </button>
              </form>

            </div>

          </div>
        </div>
      </div>
    </div>

  </div>

</main>
<?php include("includes/footer.php"); ?>