<?php
    $testimonial = [
        [
            "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJIIgpgkagO1fOHvLlwjTTI_xwl2wmDV3JXV3SafrEHg&s",
            "user" => "Alisa Milano",
            "occupation" => "Designer at Viper Ltd."
        ],
        [
            "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSe6bYDGNJx2PCksyCBhs9B55h9iFw3rpXVolHzl362tg&s",
            "user" => "Ezshippet",
            "occupation" => "Full Stack Developer."
        ],
        [
            "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-U8SE-ertKVQq7YXmBS-OARg5d77z30rLjCcTGsfMKw&s",
            "user" => "Ms Dhoni",
            "occupation" => "Crickter."
        ]
    ]
?>

<div class="testimonial-section">
    <div class="testimonial-bg-img">
        <img src="https://png.pngtree.com/background/20230516/original/pngtree-large-room-full-of-equipment-in-a-gym-picture-image_2611111.jpg" alt="">
    </div>

<div class="testimonial-content text-center">
    <h2 class="text-white" >Testimonial</h2>
    <span class="horzontal-line fs-1 fw-bold text-danger text-center">___</span>
    <div class="owl-carousel testimonial mt-4">
        <?php foreach($testimonial as $feedback): ?>
        <div class="testimonial-carousel">
            <div class="user-feedback text-white">
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga vitae voluptatem, porro, veritatis accusantium voluptatum ut sed itaque.
                </p>
            </div>
            <div class="user-img d-flex mx-auto">
                <img src="<?= $feedback['image']; ?>" alt="" >
            </div>
            <div class="occupation text-white">
                <?= $feedback['user'] ?> <br>
                <?= $feedback['occupation'] ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>


