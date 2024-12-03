<div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Sistema bibliotecario <small>Añadir libro</small></h1>
            </div>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="assets/img/flat-book.png" alt="pdf" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección para agregar nuevos libros a la biblioteca, deberas de llenar todos los campos para poder registrar el libro
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <form autocomplete="off">
                <div class="container-flat-form">
                    <div class="title-flat-form title-flat-blue">Nuevo libro</div>
                    <div class="row">
                       <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                            <legend><strong>Información del libro</strong></legend><br><br>
                            <div class="group-material">
                                <input type="text" id="cod_libro" name="cod_libro" class="tooltips-general material-control" placeholder="Escribe aquí el código del libro"  required="" maxlength="20" data-toggle="tooltip" data-placement="top" title="Escribe el código del libro">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Código</label>
                            </div>
                            <div class="group-material">
                                <input type="text" id="nombre" name="nombre" class="tooltips-general material-control" placeholder="Escribe aquí el título o nombre del libro" required="" maxlength="100" data-toggle="tooltip" data-placement="top" title="Escribe el título o nombre del libro">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombre</label>
                            </div>
                            <div class="group-material">
                                <input type="text" id="autor" name="autor" class="tooltips-general material-control" placeholder="Escribe aquí el autor del libro" required="" maxlength="150" data-toggle="tooltip" data-placement="top" title="Escribe el nombre del autor del libro">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Autor</label>
                            </div>
                            <div class="group-material">
                                <span>Categoria</span>
                                <select id="categoria" name="categoria" class="tooltips-general material-control" required="" data-toggle="tooltip" data-placement="top" title="Elige la categoria del libro">
                                    <option >Proveedor</option>
                                </select>
                                
                            </div>
                           <div class="group-material">
                               <input type="text" id="estado" class="material-control tooltips-general" placeholder="Escribe el estado del libro" required=""  maxlength="20" data-toggle="tooltip" data-placement="top" title="cual es el estado del libro">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Estado</label>
                           </div>
                            <div class="group-material">
                                <input type="text" id="cantidad_libros" name="cantidad_libros" class="material-control tooltips-general" placeholder="Escribe aquí la cantidad de libro" required="" pattern="[0-9]{1,20}" maxlength="2" data-toggle="tooltip" data-placement="top" title="cuantos libros de estos tienes">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Cantidad</label>
                            </div>
                            <p class="text-center">
                                <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="bi bi-eraser-fill"></i> &nbsp;&nbsp; Limpiar</button>
                                <button type="button" class="btn btn-primary" onclick="registrar_libro();"><i class="bi bi-floppy-fill"></i>&nbsp;&nbsp; Guardar</button>
                            </p>
                       </div>
                   </div>
                </div>
            </form>
            <script src="<?php echo BASE_URL;?>views/js/functions_libro.js"></script>
            <script> listar_Categoria();</script>
        </div>