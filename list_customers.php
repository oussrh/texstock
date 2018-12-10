<?php include_once ('phpheader.php');?>
<!DOCTYPE html>
<html>
<head>

  <title>TexStock Pro|Liste des clients</title>
  <meta name="description" content="TexStock Pro liste des clients">
  <?php include_once ('header.php');?>

  <div class="row">

      <div id="toolsBarClientAdd" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-xs-10">

            <img src="">
            <div class="tools">
                <a data-toggle="tooltip" data-placement="bottom" title="Nouveau client" href="new_customer_form.php"><span class="glyphicon glyphicon-plus"></span></a>
            </div>
        </div>

      </div>

  </div>


  <div class="row">
    <div  class="col-xl-offset-1 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 col-xl-10 col-lg-10 col-md-10 col-sm-10 col-xs-10">
      <div class="form-group">
        <label>Chercher</label>
        <input type="text" id="searchC" value="" class="form-control">
      </div>
      <table class="test table table-striped table-hover">
        <thead>
          <tr>
            <th>Ref Client</th>
            <th>Client</th>
            <th>Pays</th>
            <!-- <th>Telephone</th>
            <th>Email</th>
            <th>Date d'ajout</th> -->
          </tr>
        </thead>
        <tbody>
          <?php require_once('list_query/list_customers_query.php'); ?>
        </tbody>
        </table>
      </section>
    </div>

  <div class="row">
    <footer class="navbar-fixed-bottom">

    </footer>
  </div>
  </div><!-- end row container -->
  <script src="src/js/scriptscan.js"></script>

  </body>
</html>
