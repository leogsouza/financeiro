<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<!-- BEGIN PAGE HEADER-->
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
        Dashboard <small>statistics and more</small>
        </h3>
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="index.html">
                    Home
                </a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">
                    Dashboard
                </a>
            </li>
            <li class="pull-right">
                <div id="dashboard-report-range" class="dashboard-date-range tooltips" data-placement="top" data-original-title="Change dashboard date range">
                    <i class="fa fa-calendar"></i>
                    <span>
                    </span>
                    <i class="fa fa-angle-down"></i>
                </div>
            </li>
        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
    </div>
</div>
<!-- END PAGE HEADER-->
<!-- BEGIN DASHBOARD STATS -->
<!--<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat blue">
            <div class="visual">
                <i class="fa fa-comments"></i>
            </div>
            <div class="details">
                <div class="number">
                     1349
                </div>
                <div class="desc">
                     New Feedbacks
                </div>
            </div>
            <a class="more" href="#">
                 View more <i class="m-icon-swapright m-icon-white"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat green">
            <div class="visual">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <div class="details">
                <div class="number">
                     549
                </div>
                <div class="desc">
                     New Orders
                </div>
            </div>
            <a class="more" href="#">
                 View more <i class="m-icon-swapright m-icon-white"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat purple">
            <div class="visual">
                <i class="fa fa-globe"></i>
            </div>
            <div class="details">
                <div class="number">
                     +89%
                </div>
                <div class="desc">
                     Brand Popularity
                </div>
            </div>
            <a class="more" href="#">
                 View more <i class="m-icon-swapright m-icon-white"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat yellow">
            <div class="visual">
                <i class="fa fa-bar-chart-o"></i>
            </div>
            <div class="details">
                <div class="number">
                     12,5M$
                </div>
                <div class="desc">
                     Total Profit
                </div>
            </div>
            <a class="more" href="#">
                 View more <i class="m-icon-swapright m-icon-white"></i>
            </a>
        </div>
    </div>
</div>-->
<!-- END DASHBOARD STATS -->
<div class="clearfix">
</div>

<div class="clearfix">
</div>
<div class="row ">
    <div class="col-md-6 col-sm-6">
        <div class="portlet box red">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-bell-o"></i>Lançamentos Vencidos
                </div>                
            </div>
            <div class="portlet-body">
                <?php $this->widget('application.widgets.LancamentoWidget',array(
                'tipo' => LancamentoWidget::TIPO_LANCAMENTOS_VENCIDOS,
            )); ?>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-6">
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-bell-o"></i>Lançamentos Futuros
                </div>                
            </div>
            <div class="portlet-body">
                <?php $this->widget('application.widgets.LancamentoWidget',array(
                'tipo' => LancamentoWidget::TIPO_LANCAMENTOS_FUTUROS,
            )); ?>
            </div>
        </div>
    </div>
    
</div>
<div class="clearfix">
</div>
<div class="row ">
    <div class="col-md-6 col-sm-6">
        <div class="portlet box purple">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-calendar"></i>General Stats
                </div>
                <div class="actions">
                    <a href="javascript:;" class="btn btn-sm yellow easy-pie-chart-reload">
                        <i class="fa fa-repeat"></i> Reload
                    </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="easy-pie-chart">
                            <div class="number transactions" data-percent="55">
                                <span>
                                     +55
                                </span>
                                 %
                            </div>
                            <a class="title" href="#">
                                 Transactions <i class="m-icon-swapright"></i>
                            </a>
                        </div>
                    </div>
                    <div class="margin-bottom-10 visible-sm">
                    </div>
                    <div class="col-md-4">
                        <div class="easy-pie-chart">
                            <div class="number visits" data-percent="85">
                                <span>
                                     +85
                                </span>
                                 %
                            </div>
                            <a class="title" href="#">
                                 New Visits <i class="m-icon-swapright"></i>
                            </a>
                        </div>
                    </div>
                    <div class="margin-bottom-10 visible-sm">
                    </div>
                    <div class="col-md-4">
                        <div class="easy-pie-chart">
                            <div class="number bounce" data-percent="46">
                                <span>
                                     -46
                                </span>
                                 %
                            </div>
                            <a class="title" href="#">
                                 Bounce <i class="m-icon-swapright"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-6">
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-calendar"></i>Server Stats
                </div>
                <div class="tools">
                    <a href="" class="collapse">
                    </a>
                    <a href="#portlet-config" data-toggle="modal" class="config">
                    </a>
                    <a href="" class="reload">
                    </a>
                    <a href="" class="remove">
                    </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="sparkline-chart">
                            <div class="number" id="sparkline_bar">
                            </div>
                            <a class="title" href="#">
                                 Network <i class="m-icon-swapright"></i>
                            </a>
                        </div>
                    </div>
                    <div class="margin-bottom-10 visible-sm">
                    </div>
                    <div class="col-md-4">
                        <div class="sparkline-chart">
                            <div class="number" id="sparkline_bar2">
                            </div>
                            <a class="title" href="#">
                                 CPU Load <i class="m-icon-swapright"></i>
                            </a>
                        </div>
                    </div>
                    <div class="margin-bottom-10 visible-sm">
                    </div>
                    <div class="col-md-4">
                        <div class="sparkline-chart">
                            <div class="number" id="sparkline_line">
                            </div>
                            <a class="title" href="#">
                                 Load Rate <i class="m-icon-swapright"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix">
</div>
<div class="row ">
    <div class="col-md-6 col-sm-6">
        <!-- BEGIN REGIONAL STATS PORTLET-->
        <div class="portlet">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-globe"></i>Regional Stats
                </div>
                <div class="tools">
                    <a href="" class="collapse">
                    </a>
                    <a href="#portlet-config" data-toggle="modal" class="config">
                    </a>
                    <a href="" class="reload">
                    </a>
                    <a href="" class="remove">
                    </a>
                </div>
            </div>
            <div class="portlet-body">
                <div id="region_statistics_loading">
                    <img src="img/loading.gif" alt="loading"/>
                </div>
                <div id="region_statistics_content" class="display-none">
                    <div class="btn-toolbar margin-bottom-10">
                        <div class="btn-group" data-toggle="buttons">
                            <a href="" class="btn default btn-sm active">
                                 Users
                            </a>
                            <a href="" class="btn default btn-sm">
                                 Orders
                            </a>
                        </div>
                        <div class="btn-group pull-right">
                            <a href="" class="btn default btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                 Select Region
                                <span class="fa fa-angle-down">
                                </span>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:;" id="regional_stat_world">
                                         World
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" id="regional_stat_usa">
                                         USA
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" id="regional_stat_europe">
                                         Europe
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" id="regional_stat_russia">
                                         Russia
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" id="regional_stat_germany">
                                         Germany
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="vmap_world" class="vmaps display-none">
                    </div>
                    <div id="vmap_usa" class="vmaps display-none">
                    </div>
                    <div id="vmap_europe" class="vmaps display-none">
                    </div>
                    <div id="vmap_russia" class="vmaps display-none">
                    </div>
                    <div id="vmap_germany" class="vmaps display-none">
                    </div>
                </div>
            </div>
        </div>
        <!-- END REGIONAL STATS PORTLET-->
    </div>
    <div class="col-md-6 col-sm-6">
        <!-- BEGIN PORTLET-->
        <div class="portlet paddingless">
            <div class="portlet-title line">
                <div class="caption">
                    <i class="fa fa-bell-o"></i>Feeds
                </div>
                <div class="tools">
                    <a href="" class="collapse">
                    </a>
                    <a href="#portlet-config" data-toggle="modal" class="config">
                    </a>
                    <a href="" class="reload">
                    </a>
                    <a href="" class="remove">
                    </a>
                </div>
            </div>
            <div class="portlet-body">
                <!--BEGIN TABS-->
                <div class="tabbable tabbable-custom">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#tab_1_1" data-toggle="tab">
                                 System
                            </a>
                        </li>
                        <li>
                            <a href="#tab_1_2" data-toggle="tab">
                                 Activities
                            </a>
                        </li>
                        <li>
                            <a href="#tab_1_3" data-toggle="tab">
                                 Recent Users
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1_1">
                            <div class="scroller" style="height: 290px;" data-always-visible="1" data-rail-visible="0">
                                <ul class="feeds">
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-success">
                                                        <i class="fa fa-bell-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                         You have 4 pending tasks.
                                                        <span class="label label-sm label-danger ">
                                                             Take action <i class="fa fa-share"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                 Just now
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-success">
                                                            <i class="fa fa-bell-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                             New version v1.4 just lunched!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                     20 mins
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-danger">
                                                        <i class="fa fa-bolt"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                         Database server #12 overloaded. Please fix the issue.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                 24 mins
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-info">
                                                        <i class="fa fa-bullhorn"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                         New order received. Please take care of it.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                 30 mins
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-success">
                                                        <i class="fa fa-bullhorn"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                         New order received. Please take care of it.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                 40 mins
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-warning">
                                                        <i class="fa fa-plus"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                         New user registered.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                 1.5 hours
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-success">
                                                        <i class="fa fa-bell-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                         Web server hardware needs to be upgraded.
                                                        <span class="label label-sm label-default ">
                                                             Overdue
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                 2 hours
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-default">
                                                        <i class="fa fa-bullhorn"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                         New order received. Please take care of it.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                 3 hours
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-warning">
                                                        <i class="fa fa-bullhorn"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                         New order received. Please take care of it.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                 5 hours
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-info">
                                                        <i class="fa fa-bullhorn"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                         New order received. Please take care of it.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                 18 hours
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-default">
                                                        <i class="fa fa-bullhorn"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                         New order received. Please take care of it.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                 21 hours
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-info">
                                                        <i class="fa fa-bullhorn"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                         New order received. Please take care of it.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                 22 hours
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-default">
                                                        <i class="fa fa-bullhorn"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                         New order received. Please take care of it.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                 21 hours
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-info">
                                                        <i class="fa fa-bullhorn"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                         New order received. Please take care of it.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                 22 hours
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-default">
                                                        <i class="fa fa-bullhorn"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                         New order received. Please take care of it.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                 21 hours
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-info">
                                                        <i class="fa fa-bullhorn"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                         New order received. Please take care of it.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                 22 hours
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-default">
                                                        <i class="fa fa-bullhorn"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                         New order received. Please take care of it.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                 21 hours
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-info">
                                                        <i class="fa fa-bullhorn"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                         New order received. Please take care of it.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                 22 hours
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab_1_2">
                            <div class="scroller" style="height: 290px;" data-always-visible="1" data-rail-visible1="1">
                                <ul class="feeds">
                                    <li>
                                        <a href="#">
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-success">
                                                            <i class="fa fa-bell-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                             New user registered
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                     Just now
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-success">
                                                            <i class="fa fa-bell-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                             New order received
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                     10 mins
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-danger">
                                                        <i class="fa fa-bolt"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                         Order #24DOP4 has been rejected.
                                                        <span class="label label-sm label-danger ">
                                                             Take action <i class="fa fa-share"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                 24 mins
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-success">
                                                            <i class="fa fa-bell-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                             New user registered
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                     Just now
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-success">
                                                            <i class="fa fa-bell-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                             New user registered
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                     Just now
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-success">
                                                            <i class="fa fa-bell-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                             New user registered
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                     Just now
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-success">
                                                            <i class="fa fa-bell-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                             New user registered
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                     Just now
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-success">
                                                            <i class="fa fa-bell-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                             New user registered
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                     Just now
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-success">
                                                            <i class="fa fa-bell-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                             New user registered
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                     Just now
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-success">
                                                            <i class="fa fa-bell-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                             New user registered
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                     Just now
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab_1_3">
                            <div class="scroller" style="height: 290px;" data-always-visible="1" data-rail-visible1="1">
                                <div class="row">
                                    <div class="col-md-6 user-info">
                                        <img alt="" src="img/avatar.png" class="img-responsive"/>
                                        <div class="details">
                                            <div>
                                                <a href="#">
                                                     Robert Nilson
                                                </a>
                                                <span class="label label-sm label-success label-mini">
                                                     Approved
                                                </span>
                                            </div>
                                            <div>
                                                 29 Jan 2013 10:45AM
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 user-info">
                                        <img alt="" src="img/avatar.png" class="img-responsive"/>
                                        <div class="details">
                                            <div>
                                                <a href="#">
                                                     Lisa Miller
                                                </a>
                                                <span class="label label-sm label-info">
                                                     Pending
                                                </span>
                                            </div>
                                            <div>
                                                 19 Jan 2013 10:45AM
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 user-info">
                                        <img alt="" src="img/avatar.png" class="img-responsive"/>
                                        <div class="details">
                                            <div>
                                                <a href="#">
                                                     Eric Kim
                                                </a>
                                                <span class="label label-sm label-info">
                                                     Pending
                                                </span>
                                            </div>
                                            <div>
                                                 19 Jan 2013 12:45PM
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 user-info">
                                        <img alt="" src="img/avatar.png" class="img-responsive"/>
                                        <div class="details">
                                            <div>
                                                <a href="#">
                                                     Lisa Miller
                                                </a>
                                                <span class="label label-sm label-danger">
                                                     In progress
                                                </span>
                                            </div>
                                            <div>
                                                 19 Jan 2013 11:55PM
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 user-info">
                                        <img alt="" src="img/avatar.png" class="img-responsive"/>
                                        <div class="details">
                                            <div>
                                                <a href="#">
                                                     Eric Kim
                                                </a>
                                                <span class="label label-sm label-info">
                                                     Pending
                                                </span>
                                            </div>
                                            <div>
                                                 19 Jan 2013 12:45PM
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 user-info">
                                        <img alt="" src="img/avatar.png" class="img-responsive"/>
                                        <div class="details">
                                            <div>
                                                <a href="#">
                                                     Lisa Miller
                                                </a>
                                                <span class="label label-sm label-danger">
                                                     In progress
                                                </span>
                                            </div>
                                            <div>
                                                 19 Jan 2013 11:55PM
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 user-info">
                                        <img alt="" src="img/avatar.png" class="img-responsive"/>
                                        <div class="details">
                                            <div>
                                                <a href="#">
                                                     Eric Kim
                                                </a>
                                                <span class="label label-sm label-info">
                                                     Pending
                                                </span>
                                            </div>
                                            <div>
                                                 19 Jan 2013 12:45PM
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 user-info">
                                        <img alt="" src="img/avatar.png" class="img-responsive"/>
                                        <div class="details">
                                            <div>
                                                <a href="#">
                                                     Lisa Miller
                                                </a>
                                                <span class="label label-sm label-danger">
                                                     In progress
                                                </span>
                                            </div>
                                            <div>
                                                 19 Jan 2013 11:55PM
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 user-info">
                                        <img alt="" src="img/avatar.png" class="img-responsive"/>
                                        <div class="details">
                                            <div>
                                                <a href="#">
                                                     Eric Kim
                                                </a>
                                                <span class="label label-sm label-info">
                                                     Pending
                                                </span>
                                            </div>
                                            <div>
                                                 19 Jan 2013 12:45PM
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 user-info">
                                        <img alt="" src="img/avatar.png" class="img-responsive"/>
                                        <div class="details">
                                            <div>
                                                <a href="#">
                                                     Lisa Miller
                                                </a>
                                                <span class="label label-sm label-danger">
                                                     In progress
                                                </span>
                                            </div>
                                            <div>
                                                 19 Jan 2013 11:55PM
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 user-info">
                                        <img alt="" src="img/avatar.png" class="img-responsive"/>
                                        <div class="details">
                                            <div>
                                                <a href="#">
                                                     Eric Kim
                                                </a>
                                                <span class="label label-sm label-info">
                                                     Pending
                                                </span>
                                            </div>
                                            <div>
                                                 19 Jan 2013 12:45PM
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 user-info">
                                        <img alt="" src="img/avatar.png" class="img-responsive"/>
                                        <div class="details">
                                            <div>
                                                <a href="#">
                                                     Lisa Miller
                                                </a>
                                                <span class="label label-sm label-danger">
                                                     In progress
                                                </span>
                                            </div>
                                            <div>
                                                 19 Jan 2013 11:55PM
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--END TABS-->
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
</div>
<div class="clearfix">
</div>
<div class="row ">
    <div class="col-md-6 col-sm-6">
        <!-- BEGIN PORTLET-->
        <div class="portlet box blue calendar">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-calendar"></i>Calendar
                </div>
            </div>
            <div class="portlet-body light-grey">
                <div id="calendar">
                </div>
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
    <div class="col-md-6 col-sm-6">
        <!-- BEGIN PORTLET-->
        <div class="portlet">
            <div class="portlet-title line">
                <div class="caption">
                    <i class="fa fa-comments"></i>Chats
                </div>
                <div class="tools">
                    <a href="" class="collapse">
                    </a>
                    <a href="#portlet-config" data-toggle="modal" class="config">
                    </a>
                    <a href="" class="reload">
                    </a>
                    <a href="" class="remove">
                    </a>
                </div>
            </div>
            <div class="portlet-body" id="chats">
                <div class="scroller" style="height: 435px;" data-always-visible="1" data-rail-visible1="1">
                    <ul class="chats">
                        <li class="in">
                            <img class="avatar img-responsive" alt="" src="img/avatar1.jpg"/>
                            <div class="message">
                                <span class="arrow">
                                </span>
                                <a href="#" class="name">
                                     Bob Nilson
                                </a>
                                <span class="datetime">
                                     at Jul 25, 2012 11:09
                                </span>
                                <span class="body">
                                     Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                </span>
                            </div>
                        </li>
                        <li class="out">
                            <img class="avatar img-responsive" alt="" src="img/avatar2.jpg"/>
                            <div class="message">
                                <span class="arrow">
                                </span>
                                <a href="#" class="name">
                                     Lisa Wong
                                </a>
                                <span class="datetime">
                                     at Jul 25, 2012 11:09
                                </span>
                                <span class="body">
                                     Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                </span>
                            </div>
                        </li>
                        <li class="in">
                            <img class="avatar img-responsive" alt="" src="img/avatar1.jpg"/>
                            <div class="message">
                                <span class="arrow">
                                </span>
                                <a href="#" class="name">
                                     Bob Nilson
                                </a>
                                <span class="datetime">
                                     at Jul 25, 2012 11:09
                                </span>
                                <span class="body">
                                     Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                </span>
                            </div>
                        </li>
                        <li class="out">
                            <img class="avatar img-responsive" alt="" src="img/avatar3.jpg"/>
                            <div class="message">
                                <span class="arrow">
                                </span>
                                <a href="#" class="name">
                                     Richard Doe
                                </a>
                                <span class="datetime">
                                     at Jul 25, 2012 11:09
                                </span>
                                <span class="body">
                                     Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                </span>
                            </div>
                        </li>
                        <li class="in">
                            <img class="avatar img-responsive" alt="" src="img/avatar3.jpg"/>
                            <div class="message">
                                <span class="arrow">
                                </span>
                                <a href="#" class="name">
                                     Richard Doe
                                </a>
                                <span class="datetime">
                                     at Jul 25, 2012 11:09
                                </span>
                                <span class="body">
                                     Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                </span>
                            </div>
                        </li>
                        <li class="out">
                            <img class="avatar img-responsive" alt="" src="img/avatar1.jpg"/>
                            <div class="message">
                                <span class="arrow">
                                </span>
                                <a href="#" class="name">
                                     Bob Nilson
                                </a>
                                <span class="datetime">
                                     at Jul 25, 2012 11:09
                                </span>
                                <span class="body">
                                     Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                </span>
                            </div>
                        </li>
                        <li class="in">
                            <img class="avatar img-responsive" alt="" src="img/avatar3.jpg"/>
                            <div class="message">
                                <span class="arrow">
                                </span>
                                <a href="#" class="name">
                                     Richard Doe
                                </a>
                                <span class="datetime">
                                     at Jul 25, 2012 11:09
                                </span>
                                <span class="body">
                                     Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                </span>
                            </div>
                        </li>
                        <li class="out">
                            <img class="avatar img-responsive" alt="" src="img/avatar1.jpg"/>
                            <div class="message">
                                <span class="arrow">
                                </span>
                                <a href="#" class="name">
                                     Bob Nilson
                                </a>
                                <span class="datetime">
                                     at Jul 25, 2012 11:09
                                </span>
                                <span class="body">
                                     Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. sed diam nonummy nibh euismod tincidunt ut laoreet.
                                </span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="chat-form">
                    <div class="input-cont">
                        <input class="form-control" type="text" placeholder="Type a message here..."/>
                    </div>
                    <div class="btn-cont">
                        <span class="arrow">
                        </span>
                        <a href="" class="btn blue icn-only">
                            <i class="fa fa-check icon-white"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
</div>