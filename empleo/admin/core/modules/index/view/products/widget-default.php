        <!-- Main Content -->

          <div class="row">
            <div class="col-md-12">
                  <a  href="index.php?view=newproduct" class="pull-right btn-sm btn btn-default">Agregar Profeciont</a>
  <!-- Button trigger modal -->


            <h2>Profesiones</h2>
            </div>
            </div>

          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <i class="fa fa-th-list"></i> Profesiones
                </div>
                <div class="widget-body medium no-padding">
<?php
$categories = ProductData::getAll();
 if(count($categories)>0):?>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <tbody>
<thead>
  <th>Nombre</th>
  <th>Visible</th>
  <th>Destacado</th>
  <th>Existencia</th>
  <th></th>
</thead>
<?php foreach($categories as $cat):?>
  <?php if ($cat->id == $_SESSION["admin_id"]):?>
                        <tr>
                        <td><?php echo $cat->name; ?></td>
                        <td style="width:90px;"><center><?php if($cat->is_public):?><i class="fa fa-check"></i><?php else: ?><i class="fa fa-remove"></i><?php endif; ?></center> </td>
                        <td style="width:90px;"><center><?php if($cat->is_featured):?><i class="fa fa-check"></i><?php else: ?><i class="fa fa-remove"></i><?php endif; ?></center> </td>
                        <td style="width:90px;"><center><?php if($cat->in_existence):?><i class="fa fa-check"></i><?php else: ?><i class="fa fa-remove"></i><?php endif; ?></center> </td>
                        <td style="width:105px;">
                        <a href="index.php?view=editproduct&product_id=<?php echo $cat->id; ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>
                        <a href="index.php?action=delproduct&product_id=<?php echo $cat->id; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                        </td>
                        </tr>
                <?php     endif; ?>
<?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
<?php else:?>
  <div class="panel-body">
  <p class="alert alert-warning">No hay Profesiones, puedes empezar agregando tu lista de Profesiones.</p>
  </div>
 <?php endif; ?>

                </div>
              </div>
            </div>

          </div>
