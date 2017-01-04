<!DOCTYPE html>
<?php include 'header.php' ?>
<?php include 'sidebar.php' ?>
<main>
<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
  <section id="dashboard">
    <div class="rad-body-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-12 col-xs-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Area Chart</h3>
              </div>
              <div class="panel-body">
                <div id="areaChart" class="rad-chart"></div>
              </div>

            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Line Chart</h3>
              </div>
              <div class="panel-body">
                <div id="lineChart" class="rad-chart"></div>
              </div>

            </div>
          </div>
          <!-- here-->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Donut Chart</h3>
              </div>
              <div class="panel-body">
                <div id="donutChart" class="rad-chart"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Bar Chart</h3>
              </div>
              <div class="panel-body">
                <div id="barChart" class="rad-chart"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--Dashboard end-->
</div>

<div id="menu1" class="tab-pane fade">
<section id="product_add">
    <div class="rad-body-wrapper">
      <div class="container-fluid">
        <div class="row">
  <form>
  <div class="col-1">
    <label>
      Listing Title
      <input placeholder="What is the name of the product?" tabindex="1" />
    </label>
  </div>
  <div class="col-1">
    <label>
      Listing Category
      <select name="categories">
    <option value="test1">Test1</option>
    <option value="test2">Test2</option>
    <option value="test3">Test3</option>
    <option value="test4">Test4</option>
  </select>
    </label>
  </div>
  <div class="col-1">
    <label>
      Image &nbsp;
      <button>Add Image</button>
    </label>
  </div>
  <div class="col-1">
    <label style="float:right;">
      <button>SUBMIT</button>
    </label>
  </div>

</form>
        </div>
      </div>
    </div>
  </section><!--Add product-->
  </div>

<div id="menu2" class="tab-pane fade">
<section id="product_add">
    <div class="rad-body-wrapper">
      <div class="container-fluid">
        <div class="row">
  <form action="categoryfields.php" method="POST">
  <div class="col-1">
    <label>
      Add New Category
     <input type="text" placeholder="Add Desired category" name="catname" required />
    </label>
  </div>
  <div class="col-1">
<label>Number of fields:
<input type="number" name="fieldno" required />
</label></div>
  <div class="col-1">
    <label style="float:right;">
      <button type="submit">SUBMIT</button>
    </label>
  </div>

</form>
        </div>
      </div>
    </div>
  </section><!--Add product-->
  </div>


<div id="menu3" class="tab-pane fade">
<section>
    <div class="rad-body-wrapper">
      <div class="container-fluid">
      
    <div class="well well-sm">
        <strong>Display</strong>
        <div class="btn-group">
            <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
            </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                class="glyphicon glyphicon-th"></span>Grid</a>
        </div>
    </div>
    <div id="products" class="row list-group">
        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Product title</h4>
                    <p class="group inner list-group-item-text">
                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $21.000</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="http://www.jquery2dotnet.com">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Product title</h4>
                    <p class="group inner list-group-item-text">
                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $21.000</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="http://www.jquery2dotnet.com">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Product title</h4>
                    <p class="group inner list-group-item-text">
                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $21.000</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="http://www.jquery2dotnet.com">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Product title</h4>
                    <p class="group inner list-group-item-text">
                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $21.000</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="http://www.jquery2dotnet.com">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Product title</h4>
                    <p class="group inner list-group-item-text">
                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $21.000</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="http://www.jquery2dotnet.com">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Product title</h4>
                    <p class="group inner list-group-item-text">
                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $21.000</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="http://www.jquery2dotnet.com">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

      </div>
      </div>
  </section>
</div>

</div><!--tabcontent-->

</main>
  

<script src='http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js'></script>
<script src="js/index.js"></script>
<script>
  $(document).ready(function() {
    $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
    $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
});
</script>


</body>
</html>
