<!-- top tiles -->
<div class="row tile_count">
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                            <span class="count_top">
                                <i class="fa fa-user"></i> מספר הסטודנטים שהגישו בקשה למלגה</span>
                            <div class="count">
                                <?php  $Dash->count_submitted_rows(); ?>
                            </div>
                           
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                            <span class="count_top">
                                <i class="fa fa-users"></i> מספר הסטודנטים שהחלו בתהליך</span>
                            <div class="count">
                                <?php  $Dash->count_all_rows(); ?>
                            </div>
                
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                            <span class="count_top">
                                <i class="fa fa-user"></i> מספר בקשות שאושרו</span>
                            <div class="count green"><?php $Dash->count_approved_rows(); ?></div>
                       
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                            <span class="count_top">
                                <i class="fa fa-user"></i> Total Females</span>
                            <div class="count">4,567</div>
                           
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                            <span class="count_top">
                                <i class="fa fa-user"></i> Total Collections</span>
                            <div class="count">2,315</div>
                          
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                            <span class="count_top">
                                <i class="fa fa-user"></i> Total Connections</span>
                            <div class="count">7,325</div>
                          
                        </div>
                    </div>
                    <!-- /top tiles -->