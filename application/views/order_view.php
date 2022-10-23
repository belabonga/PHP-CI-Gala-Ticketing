<?php
foreach ($orderan as $order) {
    $bookingid = $order->id_booking;
    $tiketid = $order->id;
    $type = $order->tipe_tiket;
    $email = $order->email_siswa;
    $image = $order->images;
    $harga = $order->harga_tiket;
    $qty = $order->qty;
}
?>
<link href="<?php echo base_url('bootstrap/');?>css/bootstrap.min.css" rel="stylesheet">

<body style="background-position: absolute; background-color: rgba(96, 125, 139, 0.26);">


<div style="margin-top:20px;margin-bottom:18px;border:0px solid #f1f1f1;border-radius:0px;padding:25px; background-image: url(../assets/images/ros.jpg); background-size: cover;
    min-height: 300px;
    position: relative;">
<ul style="margin: 19px 0px 18px; visibility: visible; " class="nav nav-tabs test2">
    <!-- <li class=""><a data-toggle="tab" href="#home" aria-expanded="true">Home</a></li>
     --><li class=""><a data-toggle="tab" href="#menu1" aria-expanded="false">Order View</a></li>
</ul>

    <div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1" style="background-color: rgba(96, 125, 139, 0.26);">
        <?php 
        if(!empty($orderan)){
        ?>
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
                            <a class="thumbnail pull-left" href="<?php echo base_url('home/detail/'.$tiketid);?>"> <img class="media-object" src="<?php echo base_url($image);?>" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"><strong>Ticket Type :</strong> <?php echo $type;?> | <?php echo $tiketid; ?></h4>
                                <h5 class="media-heading"><strong>Booking Id :</strong> <?php echo $bookingid; ?></h5>
                                <span>Status: </span><span class="text-success"><strong>In Stock</strong></span>
                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        <h4><?php echo $qty; ?></h4>
                        </td>
                        <td class="col-sm-1 col-md-3 text-center">Rp. <?php echo $harga;?></td>
                        <td class="col-sm-1 col-md-1 text-center">Rp. <?php echo $qty * $harga; ?></td>
                        <td class="col-sm-1 col-md-1">
                        <form action="<?php echo base_url('booking/cancelbooking/'.$bookingid.'/'.$tiketid);?>" method="post">
                            <button type="submit" class="btn btn-danger">
                            <span class="glyphicon glyphicon-trash"> Remove</span>
                            </button>
                        </form>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5><strong>Subtotal</strong></h5><h4><strong>Total</strong></h4></td>
                        <td class="text-right"><h5>Rp. <?php echo $qty * $harga; ?></h5><h4>Rp. <?php echo $qty * $harga; ?></h4></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                       </td>
                        <td>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg">
                            <span class="glyphicon glyphicon-ok"></span> Continue Payment
                        </button></td>
                    </tr>
                </tfoot>
            </table>
            <?php 
                }else{
            ?>
            <p>There's no order yet</p>
            <?php
        }
            ?>
        </div>
    </div>
</div>
    </div>
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">

  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Payment Method</h4>
      </div>
       <form action="<?php echo base_url(''); ?>index.php/booking/payment/<?php echo $this->session->userdata('id_siswa');?>" method="POST">
      <div class="modal-body">
        <div class="radio">
          <label><input type="radio" name="rek" value="BCA | 123456789"><img align="center" src="<?php echo base_url('assets/images/p1.jpg');?>"></label>
        </div>
        <div class="radio">
          <label><input type="radio" name="rek" value="BNI | 234576599"><img align="center" src="<?php echo base_url('assets/images/p2.jpg');?>" alt=""></label>
        </div>
        <div class="radio">
          <label><input type="radio" name="rek" value="MANDIRI | 126489124"><img align="center" src="<?php echo base_url('assets/images/p3.jpg');?>" alt=""></label>
        </div>
                        <div class="registration-form">
    <div class="container">
        
             </div>
              <div class="clearfix"> </div>
           </div>

      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="Submit" name="submit">
      </div>
    </form>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url('bootstrap/');?>js/bootstrap.min.js"></script>