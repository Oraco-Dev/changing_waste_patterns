<?php

$isHomepage = $args['isHomepage'];
$marginTop = $args['marginTop'];

?>

<section class="services <?php echo $marginTop ?>">
    <div class="services-title">
        <?php if($isHomepage): ?>
        <h5>OUR SERVICES</h5>
        <h2 class="light-green">HOW WE CAN HELP</h2>
        <?php endif; ?>
        <?php if(!$isHomepage): ?>
        <h2 class="white">OUR SERVICES</h2>
        <?php endif; ?>
    </div>
    <div class="services-boxes">
        <div class="services-boxes-box">
            <div class="services-boxes-box-content">
                <img src="https://changingwastepatterns.com.au/wp-content/uploads/2024/01/CWP_Icon1.svg"
                    class="services-boxes-box-icon" alt="New businesses icon" />
                <h4>NEW BUSINESSES</h4>
                <p>Set up your business processes to reduce and recycle waste from the start.</p>
            </div>
            <a href="/services/new-businesses/"><button class="button ghost-green">Learn More <img
                        src="https://changingwastepatterns.com.au/wp-content/uploads/2024/02/icons8-right-arrow-48.png"
                        alt="" /></button></a>
        </div>
        <div class="services-boxes-box">
            <div class="services-boxes-box-content">
                <img src="https://changingwastepatterns.com.au/wp-content/uploads/2024/01/CWP_Icon5.svg"
                    class="services-boxes-box-icon" alt="Hopsitality businesses icon" />
                <h4>HOSPITALITY BUSINESSES</h4>
                <p>Find smart strategies to waste reduction, conduct audits, educate staff and clientele.</p>
            </div>
            <a href="/services/hospitality-businesses/"><button class="button ghost-green">Learn More <img
                        src="https://changingwastepatterns.com.au/wp-content/uploads/2024/02/icons8-right-arrow-48.png"
                        alt="" /></button></a>
        </div>
        <div class="services-boxes-box">
            <div class="services-boxes-box-content">
                <img src="https://changingwastepatterns.com.au/wp-content/uploads/2024/01/CWP_Icon3.svg"
                    class="services-boxes-box-icon" alt="Business sustainability icon" />
                <h4>BUSINESS SUSTAINABILITY</h4>
                <p>Conduct waste audits, find smart strategies, and educate your staff.</p>
            </div>
            <a href="/services/business-sustainability/"><button class="button ghost-green">Learn More <img
                        src="https://changingwastepatterns.com.au/wp-content/uploads/2024/02/icons8-right-arrow-48.png"
                        alt="" /></button></a>
        </div>
        <div class="services-boxes-box">
            <div class="services-boxes-box-content">
                <img src="https://changingwastepatterns.com.au/wp-content/uploads/2024/01/CWP_Icon4.svg"
                    class="services-boxes-box-icon" alt="Lunch and events icon" />
                <h4>LUNCH AND LEARN EVENTS</h4>
                <p>Connect with fellow pattern changers at our lunch and Learn events.</p>
            </div>
            <a href="/services/events/"><button class="button ghost-green">Learn More <img
                        src="https://changingwastepatterns.com.au/wp-content/uploads/2024/02/icons8-right-arrow-48.png"
                        alt="" /></button></a>
        </div>
        <div class="services-boxes-box">
            <div class="services-boxes-box-content">
                <img src="https://changingwastepatterns.com.au/wp-content/uploads/2024/01/CWP_Icon2.svg"
                    class="services-boxes-box-icon" alt="Barista training icon" />
                <h4>TRANING FOR BARISTAS</h4>
                <p>Learn about cups, alternative milks, and other waste.</p>
            </div>
            <a href="/services/training-for-baristas/"><button class="button ghost-green">Learn More <img
                        src="https://changingwastepatterns.com.au/wp-content/uploads/2024/02/icons8-right-arrow-48.png"
                        alt="" /></button></a>
        </div>
    </div>

</section>