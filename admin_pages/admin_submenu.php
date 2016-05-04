    <!-- #section:basics/sidebar -->
    <div id="sidebar" class="sidebar                  responsive">
        <script type="text/javascript">
            try {
                ace.settings.check('sidebar', 'fixed')
            } catch (e) {
            }
        </script>

        <ul class="nav nav-list">
            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-pencil-square-o"></i>
                    <span class="menu-text"> Kayıtlar </span>
                    <span class="badge badge-transparent tooltip-error" title="<?php echo $zeroST; ?> Onaylanmamış Kayıt">
                        <i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>
                    </span>
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                                       
                    <li class="">
                        <a href="registry_tables.php">
                            <i class="menu-icon fa fa-caret-square-o-right"></i>
                            Onaysız Kayıtlar 
                            <span class="badge badge-info"><?php echo $zeroST; ?></span>
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="registry_tables.php">
                            <i class="menu-icon fa fa-caret-square-o-right"></i>
                            Onaylı Kayıtlar 
                            <span class="badge badge-success"><?php echo $okST; ?></span>
                        </a>
                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="registry_tables.php">
                            <i class="menu-icon fa fa-caret-square-o-right"></i>
                            Reddedilmiş Kayıtlar
                            <span class="badge badge-important"><?php echo $noST; ?></span>
                        </a>

                        <b class="arrow"></b>
                    </li>
                    
                    <li class="">
                        <a href="registry_tables.php">
                            <i class="menu-icon fa fa-caret-square-o-right"></i>
                            Tüm Kayıtlar 
                            <span class="badge badge-purple"><?php echo $totalRG; ?></span>
                        </a>

                        <b class="arrow"></b>
                    </li>


                </ul>
            </li>

            <li style="<?php setClassAutho($autho['create']);?>">
                <a href="admins.php">
                    <i class="menu-icon fa fa-user"></i>
                    <span class="menu-text"> Adminler </span>
                </a>

                <b class="arrow"></b>
            </li>
            
            <li class="">
                <a href="settings.php">
                    <i class="menu-icon fa fa-gear"></i>
                    <span class="menu-text"> Ayarlar </span>
                </a>

                <b class="arrow"></b>
            </li>



        </ul><!-- /.nav-list -->

        <!-- #section:basics/sidebar.layout.minimize -->
        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
            <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>

        <!-- /section:basics/sidebar.layout.minimize -->
        <script type="text/javascript">
                    try {
                        ace.settings.check('sidebar', 'collapsed')
                    } catch (e) {
            }
        </script>
    </div>

    <!-- /section:basics/sidebar -->
    



