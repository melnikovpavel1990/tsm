
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Deep Blue Admin</title>

    <link rel="stylesheet" type="text/css" href="../../admin_assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../admin_assets/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="../admin_assets/css/local.css" />

    <script type="text/javascript" src="/admin_assets/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src=""></script>

    <!-- you need to include the shieldui css and js assets in order for the charts to work -->
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/shieldui-all.min.css" />
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
    <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"></script>
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Admin Panel</a>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li class="active"><a href="index.html"><i class="fa fa-bullseye"></i> Dashboard</a></li>
                <li><a href="portfolio.html"><i class="fa fa-tasks"></i> Portfolio</a></li>
                <li><a href="blog.html"><i class="fa fa-globe"></i> Blog</a></li>
                <li><a href="signup.html"><i class="fa fa-list-ol"></i> SignUp</a></li>
                <li><a href="register.html"><i class="fa fa-font"></i> Register</a></li>
                <li><a href="timeline.html"><i class="fa fa-font"></i> Timeline</a></li>
                <li><a href="/views/add_page.php"><i class="fa fa-list-ol"></i> Forms</a></li>
            </ul>
            
        </div>
    </nav>

    <?php include_once $fullPath ?>
<!-- /#wrapper -->

<script type="text/javascript">
    jQuery(function ($) {
        var performance = [12, 43, 34, 22, 12, 33, 4, 17, 22, 34, 54, 67],
            visits = [123, 323, 143, 132, 274, 223, 143, 156, 223, 223],
            budget = [23, 19, 11, 34, 42, 52, 35, 22, 37, 45, 55, 57],
            sales = [11, 9, 31, 34, 42, 52, 35, 22, 37, 45, 55, 57],
            targets = [17, 19, 5, 4, 62, 62, 75, 12, 47, 55, 65, 67],
            avrg = [117, 119, 95, 114, 162, 162, 175, 112, 147, 155, 265, 167];

        $("#shieldui-chart1").shieldChart({
            primaryHeader: {
                text: "Visitors"
            },
            exportOptions: {
                image: false,
                print: false
            },
            dataSeries: [{
                seriesType: "area",
                collectionAlias: "Q Data",
                data: performance
            }]
        });

        $("#shieldui-chart2").shieldChart({
            primaryHeader: {
                text: "Login Data"
            },
            exportOptions: {
                image: false,
                print: false
            },
            dataSeries: [
                {
                    seriesType: "polarbar",
                    collectionAlias: "Logins",
                    data: visits
                },
                {
                    seriesType: "polarbar",
                    collectionAlias: "Avg Visit Duration",
                    data: avrg
                }
            ]
        });

        $("#shieldui-chart3").shieldChart({
            primaryHeader: {
                text: "Sales Data"
            },
            dataSeries: [
                {
                    seriesType: "bar",
                    collectionAlias: "Budget",
                    data: budget
                },
                {
                    seriesType: "bar",
                    collectionAlias: "Sales",
                    data: sales
                },
                {
                    seriesType: "spline",
                    collectionAlias: "Targets",
                    data: targets
                }
            ]
        });

        $("#shieldui-grid1").shieldGrid({
            dataSource: {
                data: gridData
            },
            sorting: {
                multiple: true
            },
            paging: {
                pageSize: 7,
                pageLinksCount: 4
            },
            selection: {
                type: "row",
                multiple: true,
                toggle: false
            },
            columns: [
                { field: "id", width: "70px", title: "ID" },
                { field: "name", title: "Person Name" },
                { field: "company", title: "Company Name" },
                { field: "email", title: "Email Address", width: "270px" }
            ]
        });
    });
</script>
</body>
</html>
