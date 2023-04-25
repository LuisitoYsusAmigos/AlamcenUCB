<?php
include_once("header.php");
?>

  <!-- Parte superior con el boton de adicionar a un nuevo Proveedor -->
<div id="content" class="app-content box-shadow-z0" role="main">



    <div class="app-header white box-shadow">
        <div class="navbar navbar-toggleable-sm flex-row align-items-center">

            <a data-toggle="modal" data-target="#aside" class="hidden-lg-up mr-3">
              <i class="material-icons">&#xe5d2;</i>
            </a>


            <div class="mb-0 h5 no-wrap" ng-bind="$state.current.data.title" id="pageTitle"></div>

            <div class="collapse navbar-collapse" id="collapse">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href data-toggle="dropdown">
                            <i class="fa fa-fw fa-plus text-muted"></i>
                            <span>New</span>
                        </a>
                        <div ui-include="'../views/blocks/dropdown.new.html'"></div>
                    </li>
                </ul>
        
              <div ui-include="'../views/blocks/navbar.form.html'"></div>
            </div>  
        </div>
    </div>



    <div ui-view class="app-body" id="view">
        <div class="padding">


            <div class="box">
                <div class="box-header">
                    <div class="page-title-box d-sm-flex" >
                            <h2>Proveedor &nbsp;</h2>
                            <button class="md-btn md-raised green">
                                <i class="fa fa-fw fa-plus text-muted"></i>
                                <span>Adicionar Proveedor</span>
                            </button>
                    </div>
                </div>
            </div>
            

            <div class="box">
                <div class="box-header">
                    <h2>DataTables</h2>
                </div>
                <div class="table-responsive">
                    <table ui-jp="dataTable" ui-options="{
                        sAjaxSource: 'api/datatable.json',
                        aoColumns: [
                            { mData: 'engine' },
                            { mData: 'browser' },
                            { mData: 'platform' },
                            { mData: 'version' },
                            { mData: 'grade' }
                                    ]
                        }" class="table table-striped b-t b-b">
                    <thead>
                    <tr>
                        <th  style="width:40%">Nombre</th>
                        <th  style="width:40%">Correo</th>
                        <th  style="width:20%">Telefono</th>
                    </tr>
                    </thead>
                        <tbody>
                                    
                        </tbody>
                    </table>
                </div>
            </div>

            

            <!-- Inicio del registro de un nuevo Proveedor -->
            <div class="row">
                <div class="col-sm-12">
                    <form ui-jp="parsley" novalidate="">
                        <div class="box">
                            <div class="box-header">
                                <h2>Registro de Nuevo Proveedor</h2>
                            </div>
                            <div class="box-body">
                                <div class="row m-b">
                                    <div class="col-sm-6">
                                        <label>Nombre</label>
                                        <input type="text" class="form-control" placeholder="Ingrese el Nombre" required="" data-parsley-id="151">
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Email</label>
                                        <input type="email" class="form-control" placeholder="Ingrese el Email" required="" data-parsley-id="153">
                                    </div>
                                </div>
                                <div class="row m-b">
                                    <div class="col-sm-6">
                                        <label>Telefono</label>
                                        <input type="text" class="form-control" placeholder="Ingrese su telefono" required="" data-parsley-id="151">
                                    </div>
                                </div>
                                <button class="md-btn md-raised green">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </div>
</div>














  

<?php
include_once("footer.php");
?>