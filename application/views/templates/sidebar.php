 <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- Get Menu By Role User Login -->
                        <?php
                            // use role_id based on database
                            $email = $this->session->userdata('email');
                            $roleId = $this->db->query("
                                    SELECT `user_data`.`role_id`
                                    FROM `user_data`
                                    WHERE `user_data`.`email` = '$email'
                                ")->row_array()['role_id'];

                            $queryMenu = "
                                SELECT `um`.`id`, `um`.`menu`
                                FROM `user_menu` AS um
                                JOIN `user_access_menu` AS uam
                                    ON `um`.`id` = `uam`.`menu_id`
                                WHERE `uam`.`role_id` = $roleId
                                ORDER BY `um`.`menu` ASC
                            ";
                            $menu = $this->db->query($queryMenu)->result_array();
                        ?>

                        <!-- LOOPING MENU -->
                        <?php foreach ($menu as $m) : ?>
                        <li class="nav-small-cap">
                            <i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu"><?= $m['menu']; ?></span>
                        </li>
                        
                        <!-- SIAPKAN SUB MENU SESUSAI MENYNYA -->
                        <?php
                            $menuId = $m['id'];
                            $querySubMenu = "
                                SELECT `usm`.`title`, `usm`.`url`, `usm`.`icon`, 
                                       `usm`.`menu_id`, `um`.`menu`, `usm`.`created_at`, `usm`.`updated_at`
                                FROM `user_sub_menu` AS usm
                                JOIN `user_menu` AS um
                                    ON `usm`.`menu_id` = `um`.`id`
                                WHERE `usm`.`menu_id` = $menuId
                            ";
                            $subMenu = $this->db->query($querySubMenu)->result_array();
                        ?>
                        <?php foreach ($subMenu as $sm) : ?>

                        <?php if ($title == $sm['title']) : ?>
                        <li class="sidebar-item">
                            <?php else : ?>
                        <li class="sidebar-item">
                            <?php endif; ?>
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url($sm['url']); ?>" aria-expanded="false">
                                <i class="<?= $sm['icon']; ?>"></i>
                                <span class="hide-menu"><?= $sm['title']; ?></span>
                            </a>
                        </li>
                            
                        <?php endforeach; ?>
                        <hr class="sidebar-divider mt-3">
                        <?php endforeach; ?>
                        
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('auth/logout') ?>" aria-expanded="false">
                                <i class="mdi mdi-directions"></i>
                                <span class="hide-menu">Log Out</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->