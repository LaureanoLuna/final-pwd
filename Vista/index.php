<?php
$Titulo = "Inicio";
include_once './Estructura/cabecera.php';
$datos = data_submitted();
if (!empty($datos['mensaje'])) {
?>
    <div class="position-fixed p-2 bottom-0 end-0" style="z-index: 9;">
        <div class="toast show text-bg-primary">
            <div class="toast-header">
                <i class="fa-solid fa-envelope me-2"></i>
                <strong class="me-auto">Mensaje Sistema</strong>
                <small>hace 2 minutos</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                <span><?php echo $datos['mensaje'] ?></span>
            </div>
        </div>
    </div>
<?php } ?>
<div class="container-fluid py-5" >
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" style="height:700px ;">
            <div class="carousel-item active" data-bs-interval="5000">
                <img src=".\img\Cabecera.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block as ">
                    <h5 class="text-dark">DISEÑO</h5>
                    <p class="text-dark">Tenemos los mejores diseños del pais</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src=".\img\Cabecera3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block as">
                    <h5 class="text-white">CALIDAD</h5>
                    <p class="text-white">Nuestros productos son fruto de una gran investigacion, para obtener lo mejor</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src=".\img\Cabecera4.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block as">
                    <h5 class="text-white">Confianza</h5>
                    <p class="text-white">Con nuestro producto, vas a tener la confianza de hacer las aventuras que siempre deseaste</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<?php include_once '.\Estructura\pie.php'; ?>