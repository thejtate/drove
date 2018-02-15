<?php $title = 'Product Registration'; ?>
<?php include 'tpl/includes/head.inc'; ?>
<body class="page-productregistration">
<div class="outer-wrapper">
  <?php include 'tpl/layout/header.inc'; ?>
  <div class="inner-wrapper">
    <section class="section section-media">
      <div class="bg" style="background-image: url('theme/images/tmp/top-img-8.jpg');"></div>
      <div class="valign">
        <div class="container"><h1><p>
              Register today. <br/>
              Be protected tomorrow.</h1>
        </p></div>
      </div>
    </section>
    <div class="content-wrapper container">
      <div class="text-block">
        <h3>Product Registration</h3>

        <div class="text">
          <p>Thank you for purchasing your new Tire Pressure Management System.</p>
          <p>
            Please take a moment to complete and submit this information. Registering your product allows us to better
            serve you and your dealer in the event that technical or warranty assistance is needed. This information
            will be used for warranty verification or to contact you in the unlikely event of a product recall. All
            information in this card is strictly confidential and used for company purposes only.</p>
        </div>
        <div class="form form-type-a">
          <div class="form-item form-type-text">
            <label for=""><span class="form-required">*</span> Company Name</label>
            <input type="text" class="form-text"/>
          </div>
          <div class="form-item form-type-text">
            <label for=""><span class="form-required">*</span>Company Address</label>
            <input type="text" class="form-text"/>
          </div>
          <div class="row">
            <div class="form-item form-type-text col-sm-6">
              <label for="" ><span class="form-required">*</span> City</label>
              <input type="text" class="form-text"/>
            </div>
            <div class="form-item form-type-text col-sm-3">
              <label for=""><span class="form-required">*</span>State</label>
              <input type="text" class="form-text"/>
            </div>
            <div class="form-item form-type-text col-sm-3">
              <label for=""><span class="form-required">*</span> Zip</label>
              <input type="text" class="form-text"/>
            </div>
          </div>
          <div class="row">
            <div class="form-item form-type-text col-sm-6">
              <label for="" ><span class="form-required">*</span> Phone</label>
              <input type="text" class="form-text"/>
            </div>
            <div class="form-item form-type-text col-sm-6">
              <label for="" ><span class="form-required">*</span> Email</label>
              <input type="text" class="form-text"/>
            </div>
          </div>
          <div class="row">
            <div class="form-item form-type-text col-sm-6">
              <label for="" ><span class="form-required">*</span>Product Serial Number</label>
              <input type="text" class="form-text"/>
            </div>
            <div class="form-item form-type-text col-sm-6">
              <label for="" ><span class="form-required">*</span>Product Name</label>
              <select name="" id="">
                <option>Select Product</option>
                <option>Control Unit</option>
                <option>Rotary Union</option>
              </select>
            </div>
          </div>
          <div class="btn-wrap style-add fieldset-wrapper" id="edit-submitted-product-info-webform-addmore">
            <input type="submit" class="form-submit fieldset-add" value="Add Another Product" name="webformaddmore_add_10"/>
            <input type="submit" class="form-submit fieldset-remove" value="Remove" name="webformaddmore_remove_1"/>
          </div>
          <div class="form-item form-type-text">
            <label for="" ><span class="form-required">*</span>Where did you purchase your Drov Technologies Product?</label>
            <input type="text" class="form-text"/>
          </div>
          <div class="row">
            <span class="label col-sm-5"><span class="form-required">*</span> Was product installed at:</span>
            <div class="form-item form-type-radio col-sm-3">
              <input type="radio" class="radio" id="radio-1" name="radiobutton"/>
              <label for="radio-1">OEM</label>
            </div>
            <div class="form-item form-type-radio col-sm-3">
              <input type="radio" class="radio"  id="radio-2" name="radiobutton"/>
              <label for="radio-2">Aftermarket</label>
            </div>
          </div>
          <div class="btn-wrap style-b">
            <a href="#" class="btn">Submit Registration</a>
          </div>
          <div class="desc"><span class="form-required">*</span> Required Field</div>
        </div>
      </div>
    </div>
  </div>
  <?php include 'tpl/layout/footer.inc'; ?>
</div>
</body>
</html>