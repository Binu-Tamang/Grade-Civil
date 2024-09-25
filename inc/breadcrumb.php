<!-- Page Header Start -->
<div class="container-fluid py-5 position-relative" style="background-image: url('assets/img/orgi-1.jpeg');background-size: cover;background-position: bottom;height: 36vh;display: flex;align-items: center;">
    <!-- Overlay -->
    <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1;"></div>
    
    <div class="container py-5 position-relative" style="z-index: 2;">
        <div class="row align-items-center py-4">
            <div class="col-md-6 text-center text-md-left">
                <h1 class="mb-4 mb-md-0 text-white text-uppercase"><?php echo htmlspecialchars($page_name); ?></h1>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <div class="d-inline-flex align-items-center" style="border: 1px solid #fff;">
                    <a class="btn btn-outline text-white" href="index.php">Home</a>
                    <i class="fas fa-angle-double-right text-white mx-2"></i>
                    <a class="btn btn-outline text-white" href=""><?php echo htmlspecialchars($page_name); ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->
