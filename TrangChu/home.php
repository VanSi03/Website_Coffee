<div>
    <div class="d-flex flex-row align-items-center m-5" style="background-color: #fc8365;">
        <div class="flex justify-center items-center">
            <img src="images/chill.jpg" class="img_ct">
        </div>
        <div class="flex justify-center items-center text-center px-5">
            <h1>Chắc chắn không ớn lạnh</h1>
            <p class="ad_content">Nước ép chanh the cay cùng với sự hòa trộn của trái cây thật và hỗn hợp ớt tiêu trở nên hấp dẫn hơn bao giờ hết.</p>
            <?php
                if(isset($_SESSION['MaND']))
                {
                    echo 
                        '<a class="btn btn-outline-dark rounded-pill" href="index.php?do=giohang_them&id=28">Đặt ngay</a>';
                }	
            ?>
        </div>
    </div>
</div>
<div>
    <div class="d-flex flex-row flex-row-reverse align-items-center m-5" style="background-color: #ffe3c8;">
        <div class="flex justify-center items-center">
            <img src="images/Espresso.jpg" class="img_ct">
        </div>
        <div class="flex justify-center items-center text-center px-5">
            <h1>Ngon hết sức!</h1>
            <p class="ad_content">Cà phê cùng với sữa lắc và sữa yến mạch hảo hạng, tạo nên vị ngon đầy say đắm và tích cực cho ngày mới.</p>
            <?php
                if(isset($_SESSION['MaND']))
                {
                    echo 
                    '<a class="btn btn-outline-dark rounded-pill" href="index.php?do=giohang_them&id=29">Đặt ngay</a>';
                }	
            ?>       	
        </div>
    </div>
</div>
<div>
    <div class="d-flex flex-row align-items-center m-5" style="background-color: #ddc8ff;">
        <div class="flex justify-center items-center">
            <img src="images/oohlavender.jpg" class="img_ct">
        </div>
        <div class="flex justify-center items-center text-center px-5">
            <h1>Ooh la lavender</h1>
            <p class="ad_content">Hòa mình vào không khí mùa xuân với sữa yến mạch Lavender không chứa caffeine mới, điểm thêm chút hương hoa tinh tế và thanh long thật.</p>
            <?php
                if(isset($_SESSION['MaND']))
                {
                    echo 
                        '<a class="btn btn-outline-dark rounded-pill" href="index.php?do=giohang_them&id=30">Đặt ngay</a>';
                }	
            ?>
        </div>
    </div>
</div>
<div>
    <div class="d-flex flex-row flex-row-reverse align-items-center m-5" style="background-color: #b0e1a0;">
        <div class="flex justify-center items-center">
            <img src="images/Bacon.jpg" class="img_ct">
        </div>
        <div class="flex justify-center items-center text-center px-5">
            <h1>Thỏa mãn sự yêu thích</h1>
            <p class="ad_content">Thịt xông khói, phô mai Cheddar và sandwich chứa nhiều protein là một cách ngon miệng để cung cấp năng lượng cho ngày mới của bạn.</p>
            <?php
                if(isset($_SESSION['MaND']))
                {
                    echo 
                        '<a class="btn btn-outline-dark rounded-pill" href="index.php?do=giohang_them&id=31">Đặt ngay</a>';
                }	
            ?>
        </div>
    </div>
</div>