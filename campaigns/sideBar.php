<div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">رئيسية</div>
                        <a class="nav-link" href="../index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-home"></i> </div>
                           العودة الى ذاكر  
                        </a>
                        <a class="nav-link" href="../adminDashboard.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            لوحة التحكم 
                        </a>
                        <div class="sb-sidenav-menu-heading">عمليات</div>
                        
                         <!-- الحملات -->
                         <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCampaigns" aria-expanded="false" aria-controls="collapseCampaigns">
                            <div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
                           إدارة الحملات
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseCampaigns" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link" href="addCampaign.php">إضافة حملة</a>
                                <a class="nav-link" href="showCampaign.php"> عرض الحملات </a>
                            </nav>
                        </div>
                        
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseArticles" aria-expanded="false" aria-controls="collapseArticles">
                            <div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
                           إدارة المقالات
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseArticles" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link" href="../articles/addArticle.php">إضافة مقالة</a>
                                <a class="nav-link" href="../articles/showArticles.php">عرض المقالات</a>
                            </nav>
                        </div>
                      
                        <div class="sb-sidenav-menu-heading">إحصائيات</div>
                        <a class="nav-link" href="../charts.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            رسوم بيانية
                        </a>
                        <a class="nav-link" href="../tables.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            جداول
                        </a>

                       
                    </div>
                </div>

                <div class="sb-sidenav-footer">
                    <!-- <div class="small">Logged in as:</div> -->
                    ذاكر
                </div>
            </nav>
        </div>