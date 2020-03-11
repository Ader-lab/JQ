<?php
header("content-type:text/html; charset=utf-8");
$link = @mysqli_connect("localhost", "root", "") or die(mysqli_connect_error()); 
$result = mysqli_query($link, "set names utf8"); 
mysqli_select_db($link, "cozylife");

$commandText = "select * from category";
$result = mysqli_query($link, $commandText);

mysqli_close($link);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="lib/advanced-datatable/css/demo_page.css" rel="stylesheet" />
  <link href="lib/advanced-datatable/css/demo_table.css" rel="stylesheet" />
  <link rel="stylesheet" href="lib/advanced-datatable/css/DT_bootstrap.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
  <style>

     #formData { 
      display: none;
      width: 300px;
      height: 300px;
      background-color: #fff;
      position: fixed;
      top: 50%;
      left: 50%;
      z-index: 999;
      text-align: center;
      color: #000;
      margin-left:-150px;
      margin-top:-150px;
      padding: 0px;
      /* border-radius: 8%; */
      box-shadow:1px 1px 3px 3px #5B5B5B;
      animation: rollImage linear 0.4s;
    }

    #shade{
      display: none;
      position: fixed;
      top: 0;
      right: 0;
      left: 0;
      bottom: 0;
      background: black;
      opacity: 0.6;
      z-index: 100;
    }
    #formData div input {
      width: 80%;
      margin: 40px auto;
    }

    #formData input {
      margin: 5px;
    }
    .title1 {
      margin-top:0px;
      height: 25%;
      line-height: 75px;
      background-color: #ede7b5;
    }

    /* -------------------------- */

    #formEdit { 
      display: none;
      width: 300px;
      height: 300px;
      background-color: #fff;
      position: fixed;
      top: 50%;
      left: 50%;
      z-index: 999;
      text-align: center;
      color: #000;
      margin-left:-150px;
      margin-top:-150px;
      box-shadow:1px 1px 3px 3px #5B5B5B;
      animation: rollImage linear 0.4s;
      /* border-radius: 8%; */
    }
    #formEdit div input {
      width: 80%;
      margin: 20px auto;
    }
    #formEdit section {
      margin: 20px 28px;
      text-align: left;
    }
    #formEdit input {
      margin: 5px;
    }
    .title2 {
      margin-top:0px;
      height: 25%;
      line-height: 75px;
      background-color: #ede7b5;
      
    }
    @keyframes rollImage {
      from { top: 0px; }
      to { top: 300px; }
    }

    #btnNewData {
      margin-right:5px;
    }

  </style>
</head>

<body>
  <div id="shade"></div>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><img src="./img/Logo3.png" alt=""></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->

        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.html">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <!-- <p class="centered"><a href="profile.html"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p> -->
          <!-- <h5 class="centered">Sam Soffes</h5> -->




          <li class="sub-menu">
            <a href="advanced_table.html">
              <i class="fa fa-archive"></i>
              <span>廠商商品管理</span>
            </a>
          </li>

          <li class="sub-menu">
            <a href="advanced_table_1.html">
              <i class="fa fa-tags"></i>
              <span>訂單管理</span>
            </a>
          </li>

          <li class="sub-menu">
            <a href="advanced_table_2.html">
              <i class="fa fa-line-chart"></i>
              <span>行銷管理</span>
            </a>
          </li>

          <li class="sub-menu">
            <a href="advanced_table_3.html">
              <i class="fa fa-cubes"></i>
              <span>商品庫存管理</span>
            </a>
          </li>

          <li class="sub-menu">
            <a href="advanced_table_4.html">
              <i class="fa fa-group"></i>
              <span>廠商管理</span>
            </a>
          </li>

          <li class="sub-menu">
            <a href="advanced_table_5.html">
              <i class="fa fa-drivers-license"></i>
              <span>會員管理</span>
            </a>
          </li>

          <li class="sub-menu">
            <a class="active" href="javascript:;">
              <i class="fa fa-pencil-square"></i>
              <span>全站商品管理</span>
            </a>
            <ul class="sub">
              <li class="active"><a href="advanced_table_6.html">類別</a></li>
              <li><a href="advanced_table_9.html">商品</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-area-chart"></i>
              <span>全站行銷管理</span>
            </a>
            <ul class="sub">
              <li><a href="advanced_table_7.html">優惠設定</a></li>
              <li><a href="advanced_table_8.html">顧客意見回饋</a></li>
            </ul>
          </li>








        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Advanced Table Example</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-striped"
              id="hidden-table-info">
                <button type="button" id="btnNewData" class="btn btn btn-info"><i style='font-size:15px' class='fas fa-cart-arrow-down'></i> 新增類別</button>
                <button type="button" id="btnDel" class="btn btn-danger"><i class='far fa-trash-alt'></i> 刪除類別</button>

                <thead>
                  <tr>
                    <th><input type="checkbox" id="CheckAll"></th>
                    <th>CategoryID</th>
                    <th>CategoryName</th>
                    <th>select</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                  while ($row = mysqli_fetch_assoc($result)) { ?>
                  <tr>
                      <td><input type="checkbox" value="<?= "{$row['categoryID']}" ?>" class="checkBox" name='Checkbox[]'></td>
                      <td><?= "{$row['categoryID']}" ?></td>
                      <td id="<?= $row['categoryID'] ?>"><?= "{$row['categoryName']}" ?></td>
                      <td>
                          <input type="button" class="btn btn-warning editBtn" data-id="<?= $row['categoryID'] ?>" value="修改">
                          <input type="button" class="btn btn-danger deleteBtn" data-id="<?= $row['categoryID'] ?>" value="刪除">
                      </td>
                  </tr>
                <?php } ?>

                </tbody>

                <div id="formData" >
                  <h3 class="title1">新增資料</h3>
                  <form method="post" action="http://localhost/cozylife/Dashio2/api/category">
                    <div>
                      <!-- <input type="text" name="categoryID" class="form-control" placeholder="ID:"> -->
                      <input type="text" name="categoryName" class="form-control" placeholder="Name:">
                    </div>
                    <input id="btnOK" class="btn btn-theme" type="submit" name="" value="確定" >
                    <input id="btnNO" class="btn btn-theme" type="button" name="" value="取消" >
                  </form>
                </div>

                <div id="formEdit" >
                  <h3 class="title2">修改資料</h3>
                  <section id="editCode">總類編號:768</section>
                  <form method="post" action="http://localhost/cozylife/Dashio2/api/category">
                    <div>
                      <!-- <input type="text" id="putId" class="form-control" placeholder="ID:"> -->
                      <input type="text" id="putName" value="333" class="form-control" placeholder="Name:">
                    </div>
                    <input id="btnEditOK" class="btn btn-theme" type="button" name="" value="確定" >
                    <input id="btnEditNO" class="btn btn-theme" type="button" name="" value="取消" >
                  </form>
                </div>

              </table>  
              
            </div>
          </div>
          <!-- page end-->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
          You are NOT allowed to delete the credit link to TemplateMag with free version.
          You can delete the credit link only if you bought the pro version.
          Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
          Licensing information: https://templatemag.com/license/
        -->
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="advanced_table.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
        </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="lib/advanced-datatable/js/DT_bootstrap.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script type="text/javascript">
    /* Formating function for row details */
   

      /*
       * Initialse DataTables, with no sorting on the 'details' column
       */
      var oTable = $('#hidden-table-info').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
        "aaSorting": [
          [1, 'asc']
        ]
      });

      /* Add event listener for opening and closing details
       * Note that the indicator for showing which row is open is not controlled by DataTables,
       * rather it is done here
       */
     
  
  
  // --------------------------------------------------------------------------------------
  //新增資料
  let btnNewData = document.querySelector("#btnNewData");
  let btnNO = document.querySelector("#btnNO");
  let formData = document.querySelector("#formData");
  let shade = document.querySelector("#shade");

  btnNewData.addEventListener("click",function(){
    formData.style.display = "block";
    shade.style.display = "block";
  })
  btnNO.addEventListener("click",function(){
    formData.style.display = "none";
    shade.style.display = "none";
  })

  // ------------------------------------------------------------------------------------
  //修改資料
  let deleteBtn = document.querySelectorAll(".deleteBtn");
  let btnEditNO = document.querySelector("#btnEditNO");
  let editBtn = document.querySelectorAll(".editBtn");
  let formEdit = document.querySelector("#formEdit");

  deleteBtn.forEach( e => e.addEventListener('click', deleteData));
  editBtn.forEach( e => e.addEventListener('click', editData));

  btnEditNO.addEventListener("click",function(){
    formEdit.style.display = "none";
    shade.style.display = "none";
  })

  function editData(){
    let thisId = this.dataset.id;
    let editCode = document.querySelector("#editCode");
    editCode.innerHTML = `總類編號: ${thisId}`;
    formEdit.style.display = "block";
    shade.style.display = "block";
    
    let tdData = document.getElementById(thisId);
    let x = tdData.innerHTML;
    document.querySelector("#putName").value = x;

    btnEditOK = document.querySelector("#btnEditOK");
    btnEditOK.addEventListener('click', function(){

      let putName = $("#putName").val();
      // let putId = $("#putId").val();

      let categoryData = {
          categoryName: putName,
          // categoryID: putId,
      };
      $.ajax({
          type: "put",
          url: `http://localhost/cozylife/Dashio2/api/category/${thisId}`, //決定哪ID多少會被改
          data: categoryData
      }).then(function (e) {
          $("#putButton").val(e);
          location.reload();
      });
    })
  }
  // ------------------------------------------------------------------------------------
  //刪除資料
  function deleteData(){
      let thisId = this.dataset.id;  
      if(confirm("確定要刪除"+ thisId + "的資料嗎？")){
        $.ajax({
            type: "delete",
            url: `http://localhost/cozylife/Dashio2/api/category/${thisId}`
        }).then(function (e) {
            $("#deleteButton").val(e);
            location.reload();
        })
      }
  }

  // ------------------------------------------------------------------------------------
  //刪除核取方塊
  
  let btnDel = document.querySelector("#btnDel");
  
  btnDel.addEventListener('click', function(){
    let checkBox = document.querySelectorAll(".checkBox");
      if(confirm("確定要刪除的資料嗎？")){
        checkBox.forEach(function(e){
            if (e.checked === true){
              $.ajax({
                  type: "delete",
                  url: `http://localhost/cozylife/Dashio2/api/category/${e.value}`
              }).then(function (e) {
                  $("#deleteButton").val(e);
                  location.reload();
              })
            }
        });
      }
  })

  // function Adelete(){
  //   if (!confirm("確認刪除!"))
  //   return false;
  // }

  // ------------------------------------------------------------------------------------
  //全選
  
  
  $(document).ready(function() {
    $("#CheckAll").click(function() {
      if ($("#CheckAll").prop("checked")) { //如果全選按鈕有被選擇的話（被選擇是true）
        $("input[name='Checkbox[]']").prop("checked", true); //把所有的核取方框的property都變成勾選
      } else {
        $("input[name='Checkbox[]']").prop("checked", false); //把所有的核取方框的property都取消勾選
      }
    })
  });

  </script>
</body>

</html>