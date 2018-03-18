<div class="box box-danger col-md-8">
    <div class="box-body">
        <!-- define all chart -->
        <div style="display: inline-block;width: 100%;">
            <div style="float: left;">
                <h4><b><?php echo $title_table; ?></b></h4>
            </div>
            <div style="float: right;">
                <!--<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>-->
                <a class="btn btn-primary" href="#">Campaign</a>
                <a class="btn btn-primary" href="#">Donasi</a>
            </div>
        </div>

        <hr>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Aktifitas</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <!-- table content -->
                <?php
                if (sizeof($json_result) > 0) {
//                    echo $json_result->num_rows();
                    $i = 0;
                    foreach ($json_result as $row) {
                        $number = $i + 1;
                        echo "<tr>";
                        echo "<td style='word-wrap: break-word;'> <a href='#'>" . $row['activities'] . "</a></td>";
                        echo "<td>" . $row['tanggal'] . "</td>";
                        echo "</tr>";
                        $i++;
                    }
                }
                ?>
                <!-- EOT -->
            </tbody>
            <tfoot>
                <tr>
                    <th>Aktifitas</th>
                    <th>Tanggal</th>
                </tr>
            </tfoot>
        </table>
    </div><!-- /.box-body -->
</div>
