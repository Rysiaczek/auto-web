<?php
error_reporting(0);

$marka = $_POST['text'];

if(isset($marka)){
    switch($marka){
        case "BMW" : 
            echo<<<END
                <asiede>
                    <section class="aside-car">
                        <div class="car-box car-box1">
                            <div class="box-img">
                                <img src="src/BMW-M3.jpg" alt="BMW M3">
                            </div>
                            <div class="car-box-content">
                                <h2>BMW M3</h2>
                                <p>cena</p>
                            </div>
                        </div>

                        <div class="car-box car-box2">
                            <div class="box-img">
                                <img src="src/BMW-X6.jpg" alt="BMW X6 M">
                            </div>
                            <div class="car-box-content">
                                <h2>BMW X6 M</h2>
                                <p>cena</p>
                            </div>
                        </div>
                        
                        <div class="car-box car-box3">
                            <div class="box-img">
                                <img src="src/BMW-M8.jpg" alt="BMW M8">
                            </div>
                            <div class="car-box-content">
                                <h2>BMW M8</h2>
                                <p>cena</p>
                            </div>
                        </div>
                    </section>
                </asiede>
            END;
        break;
        case "Mercedes" : 
            echo<<<END
                <asiede>
                    <section class="aside-car">
                        <div class="car-box car-box1">
                            <div class="box-img">
                                <img src="src/mercedes-A.jpeg" alt="">
                            </div>
                            <div class="car-box-content">
                                <h2>Mercedes-benz A klasa</h2>
                                <p>cena</p>
                            </div>
                        </div>

                        <div class="car-box car-box2">
                            <div class="box-img">
                                <img src="src/mercedes-cla.jpg" alt="">
                            </div>
                            <div class="car-box-content">
                                <h2>Mercedes-benz CLA</h2>
                                <p>cena</p>
                            </div>
                        </div>
                        
                        <div class="car-box car-box3">
                            <div class="box-img">
                                <img src="src/Mercedes-AMG-GT.jpg" alt="">
                            </div>
                            <div class="car-box-content">
                                <h2>Mercedes-benz AMG GT</h2>
                                <p>cena</p>
                            </div>
                        </div>
                    </section>
                </asiede>
            END;
        break;
        case "Audi" : 
            echo<<<END
                <asiede>
                    <section class="aside-car">
                        <div class="car-box car-box1">
                            <div class="box-img">
                                <img src="src/audi-tt-rs.jpg" alt="">
                            </div>
                            <div class="car-box-content">
                                <h2>Audi TT RS</h2>
                                <p>cena</p>
                            </div>
                        </div>

                        <div class="car-box car-box2">
                            <div class="box-img">
                                <img src="src/audi-a6.jpg" alt="">
                            </div>
                            <div class="car-box-content">
                                <h2>Audi A6</h2>
                                <p>cena</p>
                            </div>
                        </div>
                        
                        <div class="car-box car-box3">
                            <div class="box-img">
                                <img src="src/audi-rs6.jpg" alt="">
                            </div>
                            <div class="car-box-content">
                                <h2>Audi RS6</h2>
                                <p>cena</p>
                            </div>
                        </div>
                    </section>
                </asiede>
            END;
        break;

        case "Ford" : 
            echo<<<END
                <asiede>
                    <section class="aside-car">
                        <div class="car-box car-box1">
                            <div class="box-img">
                                <img src="src/ford-f150.jpg" alt="">
                            </div>
                            <div class="car-box-content">
                                <h2>Ford f-150</h2>
                                <p>cena</p>
                            </div>
                        </div>

                        <div class="car-box car-box2">
                            <div class="box-img">
                                <img src="src/mustang-1966.jpg" alt="">
                            </div>
                            <div class="car-box-content">
                                <h2>Ford mustang 1966r</h2>
                                <p>cena</p>
                            </div>
                        </div>

                        <div class="car-box car-box3">
                            <div class="box-img">
                                <img src="src/mustang.jpg" alt="">
                            </div>
                            <div class="car-box-content">
                                <h2>Ford Mustang</h2>
                                <p>cena</p>
                            </div>
                        </div>
                    </section>
                </asiede>
            END;
        break;
    }
}
else{
    echo "";
}
?>