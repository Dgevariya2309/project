<body>

    <div id="carouselExampleIndicators" class="carousel slide box-shadow-all" data-interval="5000" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
        </ol>
        <script>
            let slideIndex = 0;
showSlides();

function showSlides() {
    let slides = document.getElementsByClassName("mySlides");
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 4000); // Change image every 4 seconds
}
</script>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block carousel-image w-100" src="img/c1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block carousel-image w-100" src="img/c2.jpg" alt="Second slide">
                
            </div>
            <div class="carousel-item">
                <img class="d-block carousel-image w-100" src="img/c3.jpg" alt="Second slide">
       
            </div>
            <div class="carousel-item">
                <img class="d-block carousel-image w-100" src="img/c4.jpg" alt="Second slide">
               
            </div>
            <div class="carousel-item">
                <img class="d-block carousel-image w-100" src="img/c5.jpg" alt="Second slide">
                
            </div>
            <div class="carousel-item">
                <img class="d-block carousel-image w-100" src="img/c6.jpg" alt="Third slide">
                
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

        <div style="font-size:16px; color:black;  font-family: 'Baloo 2', cursive;">
        <center>
                    <h1> Welcome to Hotel Management System</h1>
                    <p>Hotel rooms have <span class="span" style="font: size 18px; color:red; font-weight:bold; font-style:italic;">everything you need for a pleasant stay</span> : large
                        comfortable beds covered with special bedspreads that get made by themselves, </p>
                        <p>and bathrooms that are clean and shiny.</p>
                    <p class="p">Hotel rooms are known for having terraces with <span class="span"style="font-size:18px; color:red; font-weight:bold; font-style:italic;">views that are
                            perfect for enjoyment</span> views that are perfect for enjoyment.</p>
        </center>
        </div>


        
                
</body>
