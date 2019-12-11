<!-- top tiles -->

<div class="row tile_count">
<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                            <span class="count_top">
                                <i class="fa fa-users"></i> מספר הסטודנטים שהחלו בתהליך</span>
                            <div class="count green">
                                <?php  $Dash->count_all_rows(); ?>
                            </div>
                
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                            <span class="count_top">
                                <i class="fa fa-user"></i> מספר הבקשות שטרם נבדקו</span>
                            <div class="count green">
                                <?php  $Dash->count_submitted_rows(); ?>
                            </div>
                           
                        </div>

                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                            <span class="count_top">
                                <i class="fa fa-check"></i> מספר בקשות שאושרו</span>
                            <div class="count green"><?php $Dash->count_approved_rows(); ?></div>
                       
                        </div>

                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                            <span class="count_top">
                                <i class="fa fa-times"></i> מספר בקשות שהוחזרו</span>
                            <div class="count green"><?php $Dash->count_returned_rows(); ?></div>
                       
                        </div>
                        <?php

                            if (strpos($currentURL,'studentdata')) {
                                echo '
                                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                                    <span class="count_top">
                                        <i class="fa fa-user"></i> ניקוד </span>
                                    <div class="count" id="poins"></div>
                                </div>
                                ';
                            } else {
                            
                            }
                        ?>
                    </div>
                    <!-- /top tiles -->