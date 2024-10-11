<div class="breadcrumbs-wrapper">
        	<div class="container">
            	<div class="breadcrumbs"><a href="index.php" title="Back to the home page">Home</a> <span aria-hidden="true">|</span> <span>Checkout</span></div>
            </div>
        </div>
    
        <div class="page-title"><h1>Checkout</h1></div>
    
        <div class="container">
            <div class="row">
		
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3">
                    <div class="customer-box returning-customer">
                        <h3><i class="icon anm anm-user-al"></i>SHIPPING ADDRESS </h3>
                        
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3">
                    <div class="customer-box customer-coupon">
                        <h3 class="font-15 xs-font-13"><i class="icon anm anm-gift-l"></i> Your Order</h3>
                    </div>
                </div>
            </div>
            <div class="row billing-fields">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 sm-margin-30px-bottom">
                    <div class="create-ac-content bg-light-gray padding-20px-all">
                        <form>
                            <fieldset>
                               
                                <div class="row">
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-firstname">First Name <span class="required-f">*</span></label>
                                        <input name="firstname" value="" id="input-firstname" type="text">
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-lastname">Last Name <span class="required-f">*</span></label>
                                        <input name="lastname" value="" id="input-lastname" type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-email">E-Mail <span class="required-f">*</span></label>
                                        <input name="email" value="" id="input-email" type="email">
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-telephone">Telephone <span class="required-f">*</span></label>
                                        <input name="telephone" value="" id="input-telephone" type="tel">
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <div class="row">
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                        <label for="input-company">County</label>
                                        <input name="county" value="" id="input-county" type="text">
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-city">City <span class="required-f">*</span></label>
                                        <input name="city" value="" id="input-city" type="text">
                                    </div>
                                   
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-address-1">Address <span class="required-f">*</span></label>
                                        <input name="address_1" value="" id="input-address-1" type="text">
                                    </div>

                                    <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                        <label for="input-address-2">Apartment <span class="required-f">*</span></label>
                                        <input name="address_2" value="" id="input-address-2" type="text">
                                    </div>
                                </div>
                            </fieldset>    
                        </form>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
    <div class="your-order-payment">
        <div class="your-order">
            <div class="table-responsive-sm order-table"> 
                <table class="bg-white table table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th class="text-left">Product Name</th>
                            <th>Price</th>
                            <th>Qty</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody id="checkout-items">
                        <!-- Cart items will be dynamically injected here -->
                    </tbody>
                    <tfoot class="font-weight-600">
                        <tr>
                            <td colspan="3" class="text-right">Total</td>
                            <td id="checkout-total">KSH 0.00</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        
        <hr>

        <div class="your-payment">
            <div class="order-button-payment">
                <button class="btn" value="Place order" type="submit">Place order</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>