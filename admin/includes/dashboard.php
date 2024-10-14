<div class="col_3" style="margin-bottom: 10px;">
    <div class="col-md-5 widget widget1">
        <div class="r3_counter_box">
            <i class="pull-left fa fa-book icon-rounded"></i>
            <div class="stats">
                <?php
                $num_prods = mysqli_num_rows(mysqli_query($conn, "select * from games"));
                ?>
                <h5><strong><?php echo $num_prods; ?></strong></h5>
                <span>Total Games</span>
            </div>
        </div>
    </div>
    <div class="col-md-5 widget widget1">
        <div class="r3_counter_box">
            <i class="pull-left fa fa-laptop user1 icon-rounded"></i>
            <div class="stats">
                <?php
                $num_srvs = mysqli_num_rows(mysqli_query($conn, "select * from events"));
                ?>
                <h5><strong><?php echo $num_srvs; ?></strong></h5>
                <span>Total Events</span>
            </div>
        </div>
    </div>


    <div class="col-md-5 widget">
        <div class="r3_counter_box">
            <i class="pull-left fa fa-users dollar2 icon-rounded"></i>
            <div class="stats">
                <?php
                $num_cses = mysqli_num_rows(mysqli_query($conn, "select * from events"));
                ?>
                <h5><strong><?php echo $num_cses; ?></strong></h5>
                <span>Total Courses</span>
            </div>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>