    <div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1" style="background-color: rgba(96, 125, 139, 0.26);">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Ticket</th>
                        <th>Quantity</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="<?php echo base_url($image);?>" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading">Ticket Type : <?php echo $type;?></h4>
                                <h5 class="media-heading">Booking Id : <?php echo $bookingid; ?></h5>
                                <span>Status: </span><span class="text-success"><strong>In Stock</strong></span>
                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        <h4><?php echo $qty; ?></h4>
                        </td>
                        <td class="col-sm-1 col-md-3 text-center"><strong>Rp. <?php echo $harga;?></strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>Rp. <?php echo $qty * $harga; ?></strong></td>
                        <td class="col-sm-1 col-md-1">
                        <button type="button" class="btn btn-danger">
                            <span class="glyphicon glyphicon-trash"></span> Remove
                        </button></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Subtotal<br>Estimated shipping</h5><h3>Total</h3></td>
                        <td class="text-right"><h5><strong>$24.59<br>$6.94</strong></h5><h3>$31.53</h3></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                        <button type="button" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                        </button></td>
                        <td>
                        <button type="button" class="btn btn-success">
                            Checkout <span class="glyphicon glyphicon-ok"></span>
                        </button></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>