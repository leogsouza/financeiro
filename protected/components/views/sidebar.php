<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <!-- add "navbar-no-scroll" class to disable the scrolling of the sidebar menu -->
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
            <li class="sidebar-toggler-wrapper">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler hidden-phone">
                </div>
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            </li>
            <li class="sidebar-search-wrapper">
                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                <form class="sidebar-search" action="extra_search.html" method="POST">
                    <div class="form-container">
                        <div class="input-box">
                            <a href="javascript:;" class="remove">
                            </a>
                            <input type="text" placeholder="Search..."/>
                            <input type="button" class="submit" value=" "/>
                        </div>
                    </div>
                </form>
                <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
            <li class="start active ">
                <?php echo l('<i class="fa fa-home"></i><span class="title">Dashboarde</span><span class="selected"></span>', app()->homeUrl); ?>
            </li>
            <li>
                <?php echo l('<i class="fa fa-list"></i><span class="title">Categorias</span>', array('/categoria')); ?>
            </li>
            <li>
                <?php echo l('<i class="fa fa-usd"></i><span class="title">Lançamentos</span>', array('/lancamento')); ?>
            </li>
            <li>
                <?php echo l('<i class="fa fa-group"></i><span class="title">Usuários</span>', array('/lancamento')); ?>
                
            </li>
            
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>